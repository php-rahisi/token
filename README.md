# Rahisi token
rahisiDb library is used to manage csrf_tokens

Requirements
============

PHP versions and extensions
---------------------------

- `PHP 8.1.6` is supported as of `rahisiDb v1.1.1`

Usage
=====

The simplest usage (since version 1.0.0) of the library would be as follows:

```php
<?php

use Rahisi\Token\token;

require 'vendor/autoload.php';
$token = (new token());
$token->setTocken();

echo $token->token();

```