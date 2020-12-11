<?php

namespace Drupal\stripe_campaign;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityViewBuilder;

/**
 * Provides a view controller for a campaign entity type.
 */
class CampaignViewBuilder extends EntityViewBuilder {

  /**
   * {@inheritdoc}
   */
  protected function getBuildDefaults(EntityInterface $entity, $view_mode) {
    $build = parent::getBuildDefaults($entity, $view_mode);
    // The campaign has no entity template itself.
    unset($build['#theme']);
    return $build;
  }

}
