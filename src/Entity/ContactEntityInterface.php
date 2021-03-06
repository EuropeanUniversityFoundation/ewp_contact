<?php

namespace Drupal\ewp_contact\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;

/**
 * Provides an interface for defining Contact entities.
 *
 * @ingroup ewp_contact
 */
interface ContactEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Contact name.
   *
   * @return string
   *   Name of the Contact.
   */
  public function getName();

  /**
   * Sets the Contact name.
   *
   * @param string $name
   *   The Contact name.
   *
   * @return \Drupal\ewp_contact\Entity\ContactEntityInterface
   *   The called Contact entity.
   */
  public function setName($name);

  /**
   * Gets the Contact creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Contact.
   */
  public function getCreatedTime();

  /**
   * Sets the Contact creation timestamp.
   *
   * @param int $timestamp
   *   The Contact creation timestamp.
   *
   * @return \Drupal\ewp_contact\Entity\ContactEntityInterface
   *   The called Contact entity.
   */
  public function setCreatedTime($timestamp);

}
