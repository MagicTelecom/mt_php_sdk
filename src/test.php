<?php
require_once 'vendor/autoload.php';

use MagicTelecomAPILib\Controllers\DidsController;


$objController = new DidsController();

$objResponse = $objController->getCountries(1, 3);

var_dump($objResponse);