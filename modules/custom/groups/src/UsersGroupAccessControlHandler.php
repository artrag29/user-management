<?php

namespace Drupal\groups;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Users group entity.
 *
 * @see \Drupal\groups\Entity\UsersGroup.
 */
class UsersGroupAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\groups\Entity\UsersGroupInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished users group entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published users group entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit users group entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete users group entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add users group entities');
  }

}
