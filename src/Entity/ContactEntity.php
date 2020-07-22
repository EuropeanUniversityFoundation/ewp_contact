<?php

namespace Drupal\ewp_contact\Entity;

use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityPublishedTrait;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the Contact entity.
 *
 * @ingroup ewp_contact
 *
 * @ContentEntityType(
 *   id = "contact",
 *   label = @Translation("Contact"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\ewp_contact\ContactEntityListBuilder",
 *     "views_data" = "Drupal\ewp_contact\Entity\ContactEntityViewsData",
 *
 *     "form" = {
 *       "default" = "Drupal\ewp_contact\Form\ContactEntityForm",
 *       "add" = "Drupal\ewp_contact\Form\ContactEntityForm",
 *       "edit" = "Drupal\ewp_contact\Form\ContactEntityForm",
 *       "delete" = "Drupal\ewp_contact\Form\ContactEntityDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\ewp_contact\ContactEntityHtmlRouteProvider",
 *     },
 *     "access" = "Drupal\ewp_contact\ContactEntityAccessControlHandler",
 *   },
 *   base_table = "contact",
 *   data_table = "contact_field_data",
 *   translatable = FALSE,
 *   admin_permission = "administer contact entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode",
 *     "published" = "status",
 *   },
 *   links = {
 *     "canonical" = "/ewp/contact/{contact}",
 *     "add-form" = "/ewp/contact/add",
 *     "edit-form" = "/ewp/contact/{contact}/edit",
 *     "delete-form" = "/ewp/contact/{contact}/delete",
 *     "collection" = "/admin/ewp/contact",
 *   },
 *   field_ui_base_route = "contact.settings"
 * )
 */
class ContactEntity extends ContentEntityBase implements ContactEntityInterface {

  use EntityChangedTrait;
  use EntityPublishedTrait;

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    // Add the published field.
    $fields += static::publishedBaseFieldDefinitions($entity_type);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The internal name of the Contact entity.'))
      ->setSettings([
        'max_length' => 50,
        'text_processing' => 0,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -20,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -20,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['status']
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => 20,
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }

}
