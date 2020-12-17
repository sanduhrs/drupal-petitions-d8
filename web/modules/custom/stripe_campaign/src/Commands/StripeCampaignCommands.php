<?php

namespace Drupal\stripe_campaign\Commands;

use Consolidation\OutputFormatters\StructuredData\RowsOfFields;
use Drush\Commands\DrushCommands;

/**
 * A Drush commandfile.
 *
 * In addition to this file, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 *
 * See these files for an example of injecting Drupal services:
 *   - http://cgit.drupalcode.org/devel/tree/src/Commands/DevelCommands.php
 *   - http://cgit.drupalcode.org/devel/tree/drush.services.yml
 */
class StripeCampaignCommands extends DrushCommands {

  /**
   * Update currency.
   *
   * @param $currency
   *   The currency to update to.
   * @usage stripe-campaign-currency €
   *   Update currency to €.
   *
   * @command stripe-campaign:currency
   * @aliases currency
   */
  public function updateCurrency($currency = '€') {
    $database = \Drupal::database();
    $database->update('campaign')->fields(['currency' => $currency])->execute();
  }

}
