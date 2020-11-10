<?php

namespace Drupal\ldap_authentication\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Extension\ModuleHandler;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\ldap_authentication\Helper\LdapAuthenticationConfiguration;
use Drupal\ldap_servers\ServerFactory;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the form for ldap_authentication options.
 */
class LdapAuthenticationAdminForm extends ConfigFormBase {

  protected $serverFactory;
  protected $moduleHandler;

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ldap_authentication_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['ldap_authentication.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function __construct(ConfigFactoryInterface $config_factory, ServerFactory $ldap_servers, ModuleHandler $module_handler) {
    parent::__construct($config_factory);
    $this->serverFactory = $ldap_servers;
    $this->moduleHandler = $module_handler;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('ldap.servers'),
      $container->get('module_handler')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('ldap_authentication.settings');

    $servers = $this->serverFactory->getEnabledServers();
    $authenticationServers = [];
    if ($servers) {
      foreach ($servers as $sid => $ldap_server) {
        $enabled = ($ldap_server->get('status')) ? 'Enabled' : 'Disabled';
        $authenticationServers[$sid] = $ldap_server->get('label') . ' (' . $ldap_server->get('address') . ') Status: ' . $enabled;
      }
    }

    if (count($authenticationServers) == 0) {

      $url = Url::fromRoute('entity.ldap_server.collection');
      $edit_server_link = Link::fromTextAndUrl($this->t('@path', ['@path' => 'LDAP Servers']), $url)->toString();

      drupal_set_message($this->t('At least one LDAP server must configured and <em>enabled</em> before configuring LDAP authentication. Please go to @link to configure an LDAP server.',
        ['@link' => $edit_server_link]
      ), 'warning');

      return $form;
    }

    $form['intro'] = [
      '#type' => 'item',
      '#markup' => $this->t('<h1>LDAP Authentication Settings</h1>'),
    ];

    $form['logon'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Logon Options'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];

    // @TODO 2914053.
    $form['logon']['authenticationMode'] = [
      '#type' => 'radios',
      '#title' => $this->t('Allowable Authentications'),
      '#required' => 1,
      '#default_value' => $config->get('authenticationMode'),
      '#options' => [
        LdapAuthenticationConfiguration::MODE_MIXED => $this->t('Mixed mode: Drupal authentication is tried first. On failure, LDAP authentication is performed.'),
        LdapAuthenticationConfiguration::MODE_EXCLUSIVE => $this->t('Exclusive mode: Only LDAP Authentication is allowed, except for user 1.'),
      ],
      '#description' => $this->t('If exclusive is selected: <br> (1) reset password links will be replaced with links to LDAP end user documentation below.<br>
        (2) The reset password form will be left available at user/password for user 1; but no links to it will be provided to anonymous users.<br>
        (3) Password fields in user profile form will be removed except for user 1.'),
    ];

    $form['logon']['authenticationServers'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Authentication LDAP Server Configurations'),
      '#required' => FALSE,
      '#default_value' => $config->get('sids'),
      '#options' => $authenticationServers,
      '#description' => $this->t('Check all LDAP server configurations to use in authentication.
     Each will be tested for authentication until successful or
     until each is exhausted.  In most cases only one server configuration is selected.'),
    ];

    $form['login_UI'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('User Login Interface'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];

    $form['login_UI']['loginUIUsernameTxt'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Username Description Text'),
      '#required' => 0,
      '#default_value' => $config->get('loginUIUsernameTxt'),
      '#description' => $this->t('Text to be displayed to user below the username field of the user login screen.'),
    ];

    $form['login_UI']['loginUIPasswordTxt'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Password Description Text'),
      '#required' => 0,
      '#default_value' => $config->get('loginUIPasswordTxt'),
      '#description' => $this->t('Text to be displayed to user below the password field of the user login screen.'),
    ];

    $form['login_UI']['ldapUserHelpLinkUrl'] = [
      '#type' => 'textfield',
      '#title' => $this->t('LDAP Account User Help URL'),
      '#required' => 0,
      '#default_value' => $config->get('ldapUserHelpLinkUrl'),
      '#description' => $this->t('URL to LDAP user help/documentation for users resetting
     passwords etc. Should be of form http://domain.com/. Could be the institutions LDAP password support page
     or a page within this Drupal site that is available to anonymous users.'),
    ];

    $form['login_UI']['ldapUserHelpLinkText'] = [
      '#type' => 'textfield',
      '#title' => $this->t('LDAP Account User Help Link Text'),
      '#required' => 0,
      '#default_value' => $config->get('ldapUserHelpLinkText'),
      '#description' => $this->t('Text for above link e.g. Account Help or Campus Password Help Page'),
    ];

    $form['restrictions'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('LDAP User "Whitelists" and Restrictions'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];

    $form['restrictions']['allowOnlyIfTextInDn'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Allow Only Text Test'),
      '#default_value' => LdapAuthenticationConfiguration::arrayToLines($config->get('allowOnlyIfTextInDn')),
      '#cols' => 50,
      '#rows' => 3,
      '#description' => $this->t("A list of text such as ou=education or cn=barclay that at least one of be found in user's DN string. Enter one per line such as <pre>ou=education<br>ou=engineering</pre> This test will be case insensitive."),
    ];

    $form['restrictions']['excludeIfTextInDn'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Excluded Text Test'),
      '#default_value' => LdapAuthenticationConfiguration::arrayToLines($config->get('excludeIfTextInDn')),
      '#cols' => 50,
      '#rows' => 3,
      '#description' => $this->t("A list of text such as ou=evil or cn=bad that if found in a user's DN, exclude them from LDAP authentication. Enter one per line such as <pre>ou=evil<br>cn=bad</pre> This test will be case insensitive."),
    ];

    $form['restrictions']['excludeIfNoAuthorizations'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Deny access to users without LDAP Authorization Module
        authorization mappings such as Drupal roles.
        Requires LDAP Authorization to be enabled and configured!'),
      '#default_value' => $config->get('excludeIfNoAuthorizations'),
      '#description' => $this->t('If the user is not granted any Drupal roles, organic groups, etc. by LDAP Authorization, login will be denied.  LDAP Authorization must be enabled for this to work.'),
      '#disabled' => (boolean) (!$this->moduleHandler->moduleExists('ldap_authorization')),
    ];

    $form['email'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Email'),
    ];

    $form['email']['emailOption'] = [
      '#type' => 'radios',
      '#title' => $this->t('Email Behavior'),
      '#required' => 1,
      '#default_value' => $config->get('emailOption'),
      '#options' => [
        LdapAuthenticationConfiguration::$emailFieldRemove => $this->t("Don't show an email field on user forms. LDAP derived email will be used for user and cannot be changed by user."),
        LdapAuthenticationConfiguration::$emailFieldDisable => $this->t('Show disabled email field on user forms with LDAP derived email. LDAP derived email will be used for user and cannot be changed by user.'),
        LdapAuthenticationConfiguration::$emailFieldAllow => $this->t('Leave email field on user forms enabled. Generally used when provisioning to LDAP or not using email derived from LDAP.'),
      ],
    ];

    $form['email']['emailUpdate'] = [
      '#type' => 'radios',
      '#title' => $this->t('Email Update'),
      '#required' => 1,
      '#default_value' => $config->get('emailUpdate'),
      '#options' => [
        LdapAuthenticationConfiguration::$emailUpdateOnLdapChangeEnableNotify => $this->t('Update stored email if LDAP email differs at login and notify user.'),
        LdapAuthenticationConfiguration::$emailUpdateOnLdapChangeEnable => $this->t("Update stored email if LDAP email differs at login but don't notify user."),
        LdapAuthenticationConfiguration::$emailUpdateOnLdapChangeDisable => $this->t("Don't update stored email if LDAP email differs at login."),
      ],
    ];

    $form['email']['template'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Email Templates'),
    ];

    $form['email']['template']['emailTemplateHandling'] = [
      '#type' => 'radios',
      '#title' => $this->t('Email Template Handling'),
      '#required' => 1,
      '#default_value' => $config->get('emailTemplateHandling'),
      '#options' => [
        'none' => $this->t('Never use the template.'),
        'if_empty' => $this->t('Use the template if no email address was provided by the LDAP server.'),
        'always' => $this->t('Always use the template.'),
      ],
    ];

    $form['email']['template']['emailTemplate'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email Template'),
      '#description' => $this->t("This is a pattern in the form of <em>@username@yourdomain.com</em>. <br>Note that the <em>@username</em> placeholder including the '@' will be replaced with the actual username."),
      '#required' => 0,
      '#default_value' => $config->get('emailTemplate'),
    ];

    $form['email']['template']['templateUsageResolveConflict'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('If a Drupal account already exists with the same email, but different account name, use the email template instead of the LDAP email.'),
      '#default_value' => $config->get('emailTemplateUsageResolveConflict'),
    ];

    $form['email']['template']['templateUsageNeverUpdate'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Ignore the Email Update settings and never update the stored email if the template is used.'),
      '#default_value' => $config->get('emailTemplateUsageNeverUpdate'),
    ];

    $form['email']['prompts'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('User Email Prompt'),
      '#description' => $this->t('These settings allow the user to fill in their email address after logging in if the template was used to generate their email address.'),
    ];

    $form['email']['prompts']['templateUsagePromptUser'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Prompt user for email on every page load.'),
      '#default_value' => $config->get('emailTemplateUsagePromptUser'),
    ];

    $form['email']['prompts']['templateUsageRedirectOnLogin'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Redirect the user to the form after logging in.'),
      '#default_value' => $config->get('emailTemplateUsageRedirectOnLogin'),
    ];

    $form['email']['prompts']['templateUsagePromptRegex'] = [
      '#type' => 'textfield',
      '#default_value' => $config->get('emailTemplateUsagePromptRegex'),
      '#title' => $this->t('Template Regex'),
      '#description' => $this->t('This regex will be used to determine if the template was used to create an account.'),
    ];

    $form['password'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Password'),
    ];
    $form['password']['passwordOption'] = [
      '#type' => 'radios',
      '#title' => $this->t('Password Behavior'),
      '#required' => 1,
      '#default_value' => $config->get('passwordOption'),
      '#options' => [
        LdapAuthenticationConfiguration::$passwordFieldShowDisabled => $this->t('Display password field disabled (Prevents password updates).'),
        LdapAuthenticationConfiguration::$passwordFieldHide => $this->t("Don't show password field on user forms except login form."),
        LdapAuthenticationConfiguration::$passwordFieldAllow => $this->t('Display password field and allow updating it. In order to change password in LDAP, LDAP provisioning for this field must be enabled.'),
      ],
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => 'Save',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Add form data to object and save or create.
    $values = $form_state->getValues();
    $this->config('ldap_authentication.settings')
      ->set('authenticationMode', $values['authenticationMode'])
      ->set('sids', $values['authenticationServers'])
      ->set('allowOnlyIfTextInDn', LdapAuthenticationConfiguration::linesToArray($values['allowOnlyIfTextInDn']))
      ->set('excludeIfTextInDn', LdapAuthenticationConfiguration::linesToArray($values['excludeIfTextInDn']))
      ->set('loginUIUsernameTxt', $values['loginUIUsernameTxt'])
      ->set('loginUIPasswordTxt', $values['loginUIPasswordTxt'])
      ->set('ldapUserHelpLinkUrl', $values['ldapUserHelpLinkUrl'])
      ->set('ldapUserHelpLinkText', $values['ldapUserHelpLinkText'])
      ->set('excludeIfNoAuthorizations', $values['excludeIfNoAuthorizations'])
      ->set('emailOption', $values['emailOption'])
      ->set('emailUpdate', $values['emailUpdate'])
      ->set('emailTemplateHandling', $values['emailTemplateHandling'])
      ->set('emailTemplate', $values['emailTemplate'])
      ->set('emailTemplateUsageResolveConflict', $values['templateUsageResolveConflict'])
      ->set('emailTemplateUsageNeverUpdate', $values['templateUsageNeverUpdate'])
      ->set('emailTemplateUsagePromptUser', $values['templateUsagePromptUser'])
      ->set('emailTemplateUsageRedirectOnLogin', $values['templateUsageRedirectOnLogin'])
      ->set('emailTemplateUsagePromptRegex', $values['templateUsagePromptRegex'])
      ->set('passwordOption', $values['passwordOption'])
      ->save();

  }

}
