<?php
/*
 * MagicTelecomAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 01/05/2016
 */

namespace MagicTelecomAPILib\Controllers;

use MagicTelecomAPILib\APIException;
use MagicTelecomAPILib\APIHelper;
use MagicTelecomAPILib\Configuration;
use MagicTelecomAPILib\CustomAuthUtility;
use Unirest\Unirest;
class CallerLocationsController {
    /**
     * Allow clients to get the list of caller locations for the specific account.
     * @param  string     $accountNumber      Required parameter: Number of the account
     * @return mixed response from the API call*/
    public function getCallerLocations (
                $accountNumber) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/accounts/{account_number}/caller_locations';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'account_number' => $accountNumber,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //prepare API request
        $request = Unirest::get($queryUrl, $headers);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }

        return $response->body;
    }
        
    /**
     * Create a new caller location
     * @param  string             $accountNumber       Required parameter: Number of the account
     * @param  CallerLocation     $callerLocation      Required parameter: Caller Location Data
     * @return void response from the API call*/
    public function createCallerLocations (
                $accountNumber,
                $callerLocation) 
    {
        //the base uri for api requests
        $queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $queryBuilder = $queryBuilder.'/accounts/{account_number}/caller_locations';

        //process optional query parameters
        APIHelper::appendUrlWithTemplateParameters($queryBuilder, array (
            'account_number'  => $accountNumber,
            ));

        //validate and preprocess url
        $queryUrl = APIHelper::cleanUrl($queryBuilder);

        //prepare headers
        $headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $parameters = array (
            'caller_location' => json_encode($callerLocation)
        );

        //prepare API request
        $request = Unirest::post($queryUrl, $headers, $parameters);

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($request);

        //and invoke the API call request to fetch the response
        $response = Unirest::getResponse($request);

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new APIException('You are not authenticated', 401);
        }

        else if ($response->code == 403) {
            throw new APIException('This action needs a valid WSSE header', 403);
        }

        else if ($response->code == 404) {
            throw new APIException('Resource not found', 404);
        }

        else if (($response->code < 200) || ($response->code > 206)) { //[200,206] = HTTP OK
            throw new APIException("HTTP Response Not OK", $response->code);
        }
    }
        
}