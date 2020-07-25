# EWP Contact

Drupal implementation of the EWP Abstract Contact Type.

See the **Erasmus Without Paper** specification for more information:

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

A custom content entity named **Contact** is provided with initial configuration to match the EWP specification. It can be configured like any other fieldable entity on the system. The administration paths are placed under `/admin/ewp/`.
