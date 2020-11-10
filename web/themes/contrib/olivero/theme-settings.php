<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function olivero_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {
  $form['olivero_settings']['olivero_utilities'] = [
    '#type' => 'fieldset',
    '#title' => t('Olivero Utilities'),
  ];
  $form['olivero_settings']['olivero_utilities']['mobile_menu_all_widths'] = [
    '#type' => 'checkbox',
    '#title' => t('Enable mobile menu at all widths'),
    '#default_value' => theme_get_setting('mobile_menu_all_widths'),
    '#description' => t('Enables the mobile menu toggle at all widths.'),
  ];
  $form['olivero_settings']['olivero_utilities']['site_branding_bg_color'] = [
    '#type' => 'select',
    '#title' => t('Header site branding background color'),
    '#options' => [
      'default' => 'Blue',
      'gray' => 'Gray',
      'white' => 'White',
    ],
    '#default_value' => theme_get_setting('site_branding_bg_color'),
  ];
  $form['olivero_settings']['olivero_utilities']['debug'] = [
    '#type' => 'checkbox',
    '#title' => t('Enable Debug Options'),
    '#default_value' => theme_get_setting('debug', 'olivero'),
    '#description' => t('Enables a fixed debug block in the bottom corner of your screen.'),
  ];
}
