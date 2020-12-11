<?php

namespace Drupal\stripe_campaign\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\stripe_campaign\CampaignInterface;
use Drupal\user\UserInterface;

/**
 * Defines the campaign entity class.
 *
 * @ContentEntityType(
 *   id = "campaign",
 *   label = @Translation("Campaign"),
 *   label_collection = @Translation("Campaigns"),
 *   handlers = {
 *     "view_builder" = "Drupal\stripe_campaign\CampaignViewBuilder",
 *     "list_builder" = "Drupal\stripe_campaign\CampaignListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\stripe_campaign\Form\CampaignForm",
 *       "edit" = "Drupal\stripe_campaign\Form\CampaignForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "campaign",
 *   admin_permission = "access campaign overview",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "id",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/content/campaign/add",
 *     "canonical" = "/campaign/{campaign}",
 *     "edit-form" = "/admin/content/campaign/{campaign}/edit",
 *     "delete-form" = "/admin/content/campaign/{campaign}/delete",
 *     "collection" = "/admin/content/campaign"
 *   },
 * )
 */
class Campaign extends ContentEntityBase implements CampaignInterface {

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);
    $fields['nid'] = BaseFieldDefinition::create('entity_reference')
        ->setLabel(t('Node reference'))
        ->setSetting('target_type', 'node');
    $fields['firstname'] = BaseFieldDefinition::create('string')
        ->setLabel(t('First name'));
    $fields['lastname'] = BaseFieldDefinition::create('string')
        ->setLabel(t('Last name'));
    $fields['mail'] = BaseFieldDefinition::create('string')
        ->setLabel(t('E-Mail'));
    $fields['amount'] = BaseFieldDefinition::create('integer')
        ->setLabel(t('Amount'));
    $fields['currency'] = BaseFieldDefinition::create('string')
        ->setLabel(t('Currency'));
    $fields['token'] = BaseFieldDefinition::create('string')
        ->setLabel(t('Token'));
    $fields['anonymous'] = BaseFieldDefinition::create('boolean')
        ->setLabel(t('Anonymous'));
    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Authored on'))
      ->setDescription(t('The time that the campaign was created.'))
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'timestamp',
        'weight' => 20,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('form', [
        'type' => 'datetime_timestamp',
        'weight' => 20,
      ])
      ->setDisplayConfigurable('view', TRUE);
    return $fields;
  }

}
