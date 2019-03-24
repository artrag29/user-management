<?php

namespace Drupal\groups\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Users group entities.
 */
class UsersGroupViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
