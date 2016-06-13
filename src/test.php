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
use MagicTelecomAPILib\Models\Account;
use MagicTelecomAPILib\Models\AccountForm;
use MagicTelecomAPILib\Models\Token;

ini_set('xdebug.var_display_max_depth', -1);
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);

//$objController = new AccountsController();
//$objController->createCarts("997766554");

$objRouting = new Routing("load-balanced", array(new Endpoint("108.188.149.100",  "maxChannels=100")), "sip_user_1");
$objTrunk = new TrunkItem(10, "WORLD_WIDE", "108.188.149.121", "sms,fax", $objRouting);
$objTrunk->__set("itemType", "TRUNK");


$objCallerLocation = new CallerLocation("Luis Martin", "14780 sw 141st ter", "Miami", "FL", "33196", "Apt", "10", "US");
$objDid = new DidItem("13211234568", 3, "DID_PRODUCT_1", $objCallerLocation);
$objDid->__set("itemType", "DID");

/* $this->locationHandle   = func_get_arg(0);
$this->quantity         = func_get_arg(1);
$this->attributes       = func_get_arg(2);
$this->didTypeHandle    = func_get_arg(3);
$this->trunkId          = func_get_arg(4);
$this->callerLocation   = func_get_arg(5); */

$objLocation = new LocationItem("ORLANDO__321___FL", 1, "sms,fax", "DID_PRODUCT_1", 3, $objCallerLocation);
$objLocation->__set("itemType", "LOCATION");

$objForm = new ItemForm($objTrunk);

try {
	
     $objController = new AccountsController();
    
//    $objAccount = new Account("99674698003", array("USER"), "johnsmith3@test.com", "4079876543", "John", "Smith3");
//    $objAccountForm = new AccountForm($objAccount);
    
//    $objController->deleteAccount("99674698003");
//    $objResponse = $objController->createAccount($objAccountForm);
    
//    $objAccount = new Account("99674698004", array("USER"), "johns_new@test.com", "4079876543", "John", "New");
//    $objAccountForm = new AccountForm($objAccount);
//    
//    $objController->updateAccount("99674698007", $objAccountForm);
    
//    $objResponse = $objController->getAccessTokens("997766554");
//    $arrToken = $objResponse->data->results;
//    
//    $objAccessToken = new Token(true);
//    $objForm = new MagicTelecomAPILib\Models\TokenForm($objAccessToken);
     
//    $objCallerLocation = new CallerLocation(
//                                    "Luis Martin",
//                                    "14787 SW 141 TER",
//                                    "Miami",
//                                    "FL",
//                                    33196,
//                                    "Apt",
//                                    72,
//                                    "US"
//                                );
//    $objForm = new \MagicTelecomAPILib\Models\CallerLocationForm($objCallerLocation);
     
//    $objCDR = new MagicTelecomAPILib\Models\Cdrs("2", "ORIGINATION", "2016-01-12", "2016-01-12");
//    $objForm = new MagicTelecomAPILib\Models\CdrForm($objCDR);
//     
//    $objResponse = $objController->createCdrs("997766554", $objForm);

//    $objRouting = new MagicTelecomAPILib\Models\RoutingBase(
//                                                       "load-balanced",
//                                                       array(new Endpoint("108.188.149.101", "maxChannels=10"))
//                                                       );
//    $objTelephoneNumber = new MagicTelecomAPILib\Models\TelephoneNumber(4, "102.225.231.41", "My new did alias", 5, $objRouting);
//    $objTelephoneNumberForm = new MagicTelecomAPILib\Models\TelephoneNumberForm($objTelephoneNumber);
//    $objController->updateTelephoneNumber("997766554", "13211234567", $objTelephoneNumberForm);
    
//    $objController->deleteDids("997766554");
     
//    $objResponse = $objController->deleteCart("997766554", 12);
//    $json = json_encode($objResponse, JSON_PRETTY_PRINT);
     
//    $objController->deleteCdrById("997766554", 2);
     
//    $strOrderRef = 'ord_ref_' . strval(time());
//    $objCheckout = new MagicTelecomAPILib\Models\Checkout($strOrderRef);
//
//    // Create a checkout form using the checkout object
//    $checkoutForm = new MagicTelecomAPILib\Models\CartCheckoutForm($objCheckout);
//
//    // Checkout Cart with id 3 in account "997766554"
//    $objResponse  = $objController->createCartCheckout("997766554", 17, $checkoutForm);
     
     $objController = new \MagicTelecomAPILib\Controllers\DidsProductsController();
     $objResponse = $objController->getLocations(1, 10, "text::Mile house|query_logic::OR");
    
    var_dump($objResponse);
        
	
} catch (APIException $e) {
    //var_dump($e->getMessage());
    
    var_dump($e->getResponseBody());
}
