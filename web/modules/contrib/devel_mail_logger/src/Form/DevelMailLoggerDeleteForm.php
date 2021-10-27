<?php

namespace Drupal\devel_mail_logger\Form;

use Drupal\Core\Url;
use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class DevelMailLoggerDeleteForm extends FormBase {

  /**
   * @inheritdoc
   */
  public function getFormId() {
    return 'devel_mail_logger';
  }

  /**
   * @inheritdoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['dml_clear'] = [
      '#type' => 'fieldset',
      '#title' => t('Delete debug mails'),
      '#description' => t('This will permanently remove the debug mails from the database.'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#access' => $this->currentUser()->hasPermission('devel_mail_logger delete test mail'),
    ];
    $form['dml_clear']['clear'] = [
      '#type' => 'submit',
      '#value' => t('Delete debug mails'),
    ];

    $url = Url::fromRoute('devel_mail_logger.send');
    $form['dml_test'] = [
      '#type' => 'fieldset',
      '#title' => t('Send test mail'),
      '#description' => t('If your mails are being logged, they will appear here after sending a test mail.'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#access' => $url->access(),
    ];
    $form['dml_test']['send'] = [
      '#type' => 'link',
      '#value' => t('Send test mail'),
      '#title' => t('Send test mail'),
      '#url' => $url,
      '#attributes' => [
        'class' => ['button'],
      ],
    ];

    return $form;
  }

  /**
   * @inheritdoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    Database::getConnection()->delete('devel_mail_logger')
      ->execute();
    $this->messenger()->addStatus(t('All Mails have been deleted.'));
  }

}
