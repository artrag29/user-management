<?php

/**
 * @file
 * Contains users_group.page.inc.
 *
 * Page callback for Users group entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Users group templates.
 *
 * Default template: users_group.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_users_group(array &$variables) {
  // Fetch UsersGroup Entity Object.
  $users_group = $variables['elements']['#users_group'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
