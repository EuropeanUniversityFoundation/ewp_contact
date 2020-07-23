# EWP Contact

Drupal module providing an EWP Contact entity with associated field types.

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
