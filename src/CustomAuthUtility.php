<?php
/*
 * MagicTelecomAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 12/08/2015
 */

namespace MagicTelecomAPILib;

use MagicTelecomAPILib\Configuration;

class CustomAuthUtility {

    /**
    * Appends the necessary Custom Authentication credentials for making this authorized call
    * @param HttpRequest $request The out going request to access the resource
    */
    public static function appendCustomAuthParams($request)
    {
        $arrHeaders = $request->__get('headers');
        $arrAuthHeader = array("X-Auth-Token" => Configuration::$APITOKEN);
        $arrHeaders = array_merge($arrHeaders, $arrAuthHeader);
        
    	$request->__set('headers', $arrHeaders);
    }
}