<?php

namespace Drupal\groups\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Users group entities.
 *
 * @ingroup groups
 */
interface UsersGroupInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Users group name.
   *
   * @return string
   *   Name of the Users group.
   */
  public function getName();

  /**
   * Sets the Users group name.
   *
   * @param string $name
   *   The Users group name.
   *
   * @return \Drupal\groups\Entity\UsersGroupInterface
   *   The called Users group entity.
   */
  public function setName($name);

  /**
   * Gets the Users group creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Users group.
   */
  public function getCreatedTime();

  /**
   * Sets the Users group creation timestamp.
   *
   * @param int $timestamp
   *   The Users group creation timestamp.
   *
   * @return \Drupal\groups\Entity\UsersGroupInterface
   *   The called Users group entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Users group published status indicator.
   *
   * Unpublished Users group are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Users group is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Users group.
   *
   * @param bool $published
   *   TRUE to set this Users group to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\groups\Entity\UsersGroupInterface
   *   The called Users group entity.
   */
  public function setPublished($published);

}
