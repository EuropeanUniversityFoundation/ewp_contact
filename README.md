# EWP Contact

Drupal module providing an EWP Contact entity with associated field types.

See the **Erasmus Without Paper** specifications for more information:

  - [EWP Phone Number Types](https://github.com/erasmus-without-paper/ewp-specs-types-phonenumber/tree/v1.0.1)
  - [EWP Address Data Types](https://github.com/erasmus-without-paper/ewp-specs-types-address/tree/v1.0.1)
  - [EWP Abstract Contact Type](https://github.com/erasmus-without-paper/ewp-specs-types-contact/tree/v1.1.0)

## Installation

Include the repository in your project's `composer.json` file:

    "repositories": [
        ...
        {
            "type": "vcs",
            "url": "https://github.com/EuropeanUniversityFoundation/ewp_contact"
        }
    ],

Then you can require the package as usual:

    composer require euf/ewp_contact

Finally, install the module:

    drush en ewp_contact

## Usage

The following field types become available in the Field UI so they can be added to any fieldable entity like any other field type:

  - Flexible address
  - Phone number

### Contact entity

A custom content entity named **Contact** is provided with initial configuration to match the EWP specification. It can be configured like any other fieldable entity on the system. The administration paths are placed under `/admin/ewp/`.
