# Inventory

#### Epicodus PHP Week 3 lab, 2/20/2017

#### By Sarah Leahy, Jay Freeman

## Description

Inventory app

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Macs.
* See https://getcomposer.org for details on installing _composer_.
* Clone repository
* From project root, run > composer install --prefer-source --no-interaction
* From web folder in project, Start PHP > php -S localhost:8000
* In web browser open localhost:8000

## Known Bugs
* No known bugs

## Specifications
* Phase 1 - Dependencies and .gitignore.
* Phase 2 - Inventory class: exceptions property and empty constructor, getter, setter and collectionInventory() methods.
* Phase 3 - Build Test cases and implement RepeatCounter methods

| Behavior - Our Program should Handle?| Input         | Output |             
|----------------------------------------------------------|----------|
|  accept single item                        | Picasso         | Picasso   |
|  save input to database via save button    | Picasso  |  in db- 1.Picasso|
|  accept multiple inputs and save them      | Picasso, Pollack    |  in db- 1.Picaso, 2.Pollack|
|  Get complete inventory  | get All         |  Picasso,Pollack|
|  Delete complete inventory                 | delete all |  "nothing in inventory"|

* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Create twig framework with a form to enter word, and string to be searched.
* Phase 6 - Create twig template for output page.


## Support and contact details
no support

## Technologies Used
* PHP
* Composer
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Sarah Leahy, Jay Freeman

## License
* MIT
