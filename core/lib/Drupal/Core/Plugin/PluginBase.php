<?php

/**
 * @file
 * Contains \Drupal\Core\Plugin\PluginBase.
 */

namespace Drupal\Core\Plugin;

use Drupal\Component\Plugin\PluginBase as ComponentPluginBase;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\DependencyInjection\DependencySerializationTrait;

/**
 * Base class for plugins supporting metadata inspection and translation.
 *
 * @ingroup plugin_api
 */
abstract class PluginBase extends ComponentPluginBase {
  use StringTranslationTrait;
  use DependencySerializationTrait;

}
