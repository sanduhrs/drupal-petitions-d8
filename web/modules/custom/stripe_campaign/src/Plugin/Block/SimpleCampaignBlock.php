<?php

namespace Drupal\stripe_campaign\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Simple checkout' Block.
 *
 * @Block(
 *   id = "stripe_campaign",
 *   admin_label = @Translation("Stripe campaign"),
 * )
 */
class SimpleCampaignBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('\Drupal\stripe_campaign\Form\SimpleCampaignForm');
    return $form;
  }

}
