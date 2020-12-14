<?php

namespace Drupal\stripe_campaign\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Cache\CacheableDependencyInterface;
use Drupal\Core\Database\Connection;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a saldo block.
 *
 * @Block(
 *   id = "stripe_campaign_saldo",
 *   admin_label = @Translation("Saldo"),
 *   category = @Translation("Campaign")
 * )
 */
class SaldoBlock extends BlockBase implements CacheableDependencyInterface, ContainerFactoryPluginInterface {

  /**
   * The database connection.
   *
   * @var \Drupal\Core\Database\Connection
   */
  protected $connection;

  /**
   * Constructs a new SaldoBlock instance.
   *
   * @param array $configuration
   *   The plugin configuration, i.e. an array with configuration values keyed
   *   by configuration option name. The special key 'context' may be used to
   *   initialize the defined contexts by setting it to an array of context
   *   values keyed by context names.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Database\Connection $connection
   *   The database connection.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, Connection $connection) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->connection = $connection;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('database')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $node = \Drupal::routeMatch()->getParameter('node');

    // @todo make configurable via block config.
    $target = 40000;
    $result = $this->connection->query('select SUM(amount) as amount from campaign WHERE nid = :nid', [':nid' => $node->id()])->fetchObject();
    $percent = floor($result->amount / $target * 100);

    $build['progress'] = [
      '#theme' => 'progress_bar',
      '#label' => $this->t('@sum€ of @target€', ['@sum' => $result->amount, '@target' => $target]),
      '#percent' => $percent,
      '#message' => $this->t('Goal achieved'),
    ];
    $build['#attached']['library'][] = 'olivero/progress';
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    // With this when your node change your block will rebuild.
    if ($node = \Drupal::routeMatch()->getParameter('node')) {
      // If there is node add its cachetag.
      return Cache::mergeTags(parent::getCacheTags(), ['node:' . $node->id()]);
    }
    else {
      // Return default tags instead.
      return parent::getCacheTags();
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    // If you depends on \Drupal::routeMatch()
    // you must set context of this block with 'route' context tag.
    // Every new route this block will rebuild.
    return Cache::mergeContexts(parent::getCacheContexts(), ['route']);
  }

}
