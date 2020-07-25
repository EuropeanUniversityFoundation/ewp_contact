<?php

namespace Drupal\ewp_contact;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Contact entities.
 *
 * @ingroup ewp_contact
 */
class ContactEntityListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Contact ID');
    $header['label'] = $this->t('Label');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var \Drupal\ewp_contact\Entity\ContactEntity $entity */
    $row['id'] = $entity->id();
    $row['label'] = Link::createFromRoute(
      $entity->label(),
      'entity.contact.edit_form',
      ['contact' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
