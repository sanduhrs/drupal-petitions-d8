<?php

namespace Drupal\stripe_campaign\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\stripe_campaign\Entity\Campaign;
use Stripe\Charge;
use Stripe\Error\Base as StripeBaseException;
use Stripe\Stripe;

/**
 * Class SimpleCheckout.
 *
 * @package Drupal\stripe_campaign\Form
 */
class SimpleCampaignForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'stripe_examples_simple_checkout';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $link_generator = \Drupal::service('link_generator');

    if ($node = \Drupal::routeMatch()->getParameter('node')) {
      $form['nid'] = [
        '#type' => 'hidden',
        '#value' => $node->id(),
      ];
    }
    $form['firstname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First name'),
      '#required' => TRUE,
    ];
    $form['lastname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last name'),
      '#required' => TRUE,
    ];
    $form['mail'] = [
      '#type' => 'textfield',
      '#title' => $this->t('E-Mail'),
      '#required' => TRUE,
    ];
    $form['anonymous'] = [
      '#type' => 'checkbox',
      '#title' => t('Support anonymously'),
      '#suffix' => '<br><br>',
    ];

    $form['amount'] = [
      '#type' => 'radios',
      '#title' => $this->t('Amount'),
      '#default_value' => 250,
      '#options' => [
        50 => $this->t('50 €'),
        100 => $this->t('100 €'),
        250 => $this->t('250 €'),
        500 => $this->t('500 €'),
        1000 => $this->t('1000 €'),
      ],
    ];
    $form['other_amount'] = [
      '#type' => 'number',
      '#title' => $this->t('or different amount in €'),
      '#suffix' => '<br><br>',
    ];

    $form['stripe'] = [
      '#type' => 'stripe',
      '#title' => $this->t('Credit card'),
      // The selectors are gonna be looked within the enclosing form only.
      "#stripe_selectors" => [
        'first_name' => ':input[name="firstname"]',
        'last_name' => ':input[name="lastname"]',
      ],
      '#description' => $this->t('Die Zahlung wird durch den Online-Bezahldienst <a href="https://stripe.com/de">Stripe</a> vollzogen, wir speichern keine Kreditkartendaten oder andere sensible Informationen in unserem System.'),
    ];
    $form['manual'] = [
      '#markup' => $this->t('Oder per Überweisung auf das Konto bei der Sparkasse Heidelberg<br/><b>Freundeskreis der Freien Waldorfschule Heidelberg e. V.</b><br/><b>"Spende Breitband"</b> oder <b>"Anonyme Spende Breitband"</b><br/><b>DE39 6725 0020 0009 0944 15</b><br>Wenn Du das Stichwort <b>Anonym</b> angibst, werden wir Deinen Namen nicht veröffentlichen.'),
      '#suffix' => '<br><br><br>',
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Support campaign'),
      '#button_type' => 'primary',
    ];

    $form['#attached']['library'][] = 'stripe_campaign/campaign';
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    if ($this->checkStripeApiKey()) {
      // Make test charge if we have test environment and api key.
      $stripe_token = $form_state->getValue('stripe');

      if (!$amount = (int) $form_state->getValue('other_amount')) {
        $amount = $form_state->getValue('amount');
      }

      $charge = $this->createCharge($stripe_token, $amount);
      if ($charge) {
        if ($charge->status == 'succeeded') {
          $this->messenger()->addStatus('Herzlichen Dank für Deine Unterstützung!');
          $campaign = Campaign::create([
            'nid' => $form_state->getValue('nid'),
            'firstname' => $form_state->getValue('firstname'),
            'lastname' => $form_state->getValue('lastname'),
            'mail' => $form_state->getValue('mail'),
            'amount' => $amount,
            'currency' => '€',
            'token' => $form_state->getValue('stripe'),
            'anonymous' => $form_state->getValue('anonymous'),
          ])->save();
        }
        else {
          $this->messenger()->addError('Leider konnte Deine Unterstützung nicht gebucht werden.');
        }
      }
    }

  }

  /**
   * Helper function for making sure stripe key is set for test and has the necessary keys.
   */
  private function checkStripeApiKey() {
    $status = FALSE;
    $config = \Drupal::config('stripe.settings');
    $environment = $config->get('environment');
    if ($environment == 'test' && $config->get('apikey.test.secret')) {
      $status = TRUE;
    }
    elseif ($environment == 'live' && $config->get('apikey.live.secret')) {
      $status = TRUE;
    }
    return $status;
  }

  /**
   * Helper function for test charge.
   *
   * @param string $stripe_token
   *   Stripe API token.
   * @param int $amount
   *   Amount for charge.
   *
   * @return /Stripe/Charge
   *   Charge object.
   */
  private function createCharge($stripe_token, $amount) {
    try {
      $config = \Drupal::config('stripe.settings');
      $environment = $config->get('apikey.environment');
      Stripe::setApiKey($config->get('apikey.' . $environment . '.secret'));
      $charge = Charge::create([
        'amount' => $amount * 100,
        'currency' => 'eur',
        'description' => "Spende Breitband Waldorfschule",
        'source' => $stripe_token,
      ]);
      return $charge;
    }
    catch (StripeBaseException $e) {
      $this->messenger()->addError($this->t('Stripe error: %error', ['%error' => $e->getMessage()]));
    }
  }

}
