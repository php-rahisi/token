<?php

use Rahisi\Token\token;

require 'vendor/autoload.php';
$token = (new token());
$token->setTocken();

echo $token->token();