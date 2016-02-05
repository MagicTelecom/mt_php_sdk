<?php
require_once 'vendor/autoload.php';

use MagicTelecomAPILib\Controllers\AccountsController;
use MagicTelecomAPILib\Models\TrunkItem;
use MagicTelecomAPILib\Models\Routing;
use MagicTelecomAPILib\Models\Endpoint;
use MagicTelecomAPILib\Models\ItemForm;
use MagicTelecomAPILib\APIException;
use MagicTelecomAPILib\Models\DidItem;
use MagicTelecomAPILib\Models\CallerLocation;
use MagicTelecomAPILib\Models\LocationItem;


$objController = new AccountsController();
//$objController->createCarts("997766554");

$objRouting = new Routing("load-balanced", array(new Endpoint("108.188.149.100",  "maxChannels=100")), "sip_user_1");
$objTrunk = new TrunkItem(10, "WORLD_WIDE", "108.188.149.121", "sms,fax", $objRouting);
$objTrunk->__set("itemType", "TRUNK");


$objCallerLocation = new CallerLocation("Luis Martin", "14780 sw 141st ter", "Miami", "FL", "33196", "NONE", "0", "US");
$objDid = new DidItem("13211234567", 3, "DID_PRODUCT_1", $objCallerLocation);
$objDid->__set("itemType", "DID");

/* $this->locationHandle   = func_get_arg(0);
$this->quantity         = func_get_arg(1);
$this->attributes       = func_get_arg(2);
$this->didTypeHandle    = func_get_arg(3);
$this->trunkId          = func_get_arg(4);
$this->callerLocation   = func_get_arg(5); */

$objLocation = new LocationItem("ORLANDO__321___FL", 1, "sms,fax", "DID_PRODUCT_1", 3, $objCallerLocation);
$objLocation->__set("itemType", "LOCATION");

$objForm = new ItemForm($objLocation);

try {
	
	$objController->createCartCheckout("997766554", 3);
	$objResponse = $objController->getCart("997766554", 3);
	
	
	var_dump(json_encode($objResponse, JSON_PRETTY_PRINT));
	
} catch (APIException $e) {
	var_dump($e);
}
