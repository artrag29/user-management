<?php

namespace Drupal\groups\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Users group edit forms.
 *
 * @ingroup groups
 */
class UsersGroupForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\groups\Entity\UsersGroup */
    $form = parent::buildForm($form, $form_state);

    unset($form['members']['widget']['#options']['0']);
    unset($form['members']['widget']['#options']['1']);
    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Users group.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Users group.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.users_group.canonical', ['users_group' => $entity->id()]);
  }

}
