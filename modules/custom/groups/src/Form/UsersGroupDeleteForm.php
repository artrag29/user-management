<?php

namespace Drupal\groups\Form;

use Drupal\Core\Entity\ContentEntityDeleteForm;
use Drupal\Core\Form\FormStateInterface;


/**
 * Provides a form for deleting Users group entities.
 *
 * @ingroup groups
 */
class UsersGroupDeleteForm extends ContentEntityDeleteForm {

  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    if ($form_state->getBuildInfo()['callback_object']->getEntity()->get('members')->getValue() != NULL) {
      $form_state->setErrorByName('members', 'Not empty group. Delete all members');
    }
  }

}
