<?php 
/*
 * MagicTelecomAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 03/17/2016
 */

namespace MagicTelecomAPILib\Models;

use JsonSerializable;

class Account implements JsonSerializable {
    /**
     * TODO: Write general description for this property
     * @param string $number public property
     */
    protected $number;

    /**
     * TODO: Write general description for this property
     * @param array $roles public property
     */
    protected $roles;

    /**
     * TODO: Write general description for this property
     * @param string $email public property
     */
    protected $email;

    /**
     * TODO: Write general description for this property
     * @param string $contactNumber public property
     */
    protected $contactNumber;

    /**
     * TODO: Write general description for this property
     * @param string $firstname public property
     */
    protected $firstname;

    /**
     * TODO: Write general description for this property
     * @param string $lastname public property
     */
    protected $lastname;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $number           Initialization value for the property $this->number        
	 * @param   array             $roles            Initialization value for the property $this->roles         
	 * @param   string            $email            Initialization value for the property $this->email         
	 * @param   string            $contactNumber    Initialization value for the property $this->contactNumber 
	 * @param   string            $firstname        Initialization value for the property $this->firstname     
	 * @param   string            $lastname         Initialization value for the property $this->lastname      
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->number         = func_get_arg(0);
            $this->roles          = func_get_arg(1);
            $this->email          = func_get_arg(2);
            $this->contactNumber  = func_get_arg(3);
            $this->firstname      = func_get_arg(4);
            $this->lastname       = func_get_arg(5);
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['number']         = $this->number;
        $json['roles']          = $this->roles;
        $json['email']          = $this->email;
        $json['contact_number'] = $this->contactNumber;
        $json['firstname']      = $this->firstname;
        $json['lastname']       = $this->lastname;
        return $json;
    }
}