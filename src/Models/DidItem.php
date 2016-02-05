<?php 
/*
 * MagicTelecomAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 02/04/2016
 */

namespace MagicTelecomAPILib\Models;

use JsonSerializable;

class DidItem extends Item implements JsonSerializable {
    /**
     * TODO: Write general description for this property
     * @param string $phoneNumber public property
     */
    protected $phoneNumber;

    /**
     * TODO: Write general description for this property
     * @param int $trunkId public property
     */
    protected $trunkId;

    /**
     * TODO: Write general description for this property
     * @param string $didTypeHandle public property
     */
    protected $didTypeHandle;

    /**
     * TODO: Write general description for this property
     * @param CallerLocation|null $callerLocation public property
     */
    protected $callerLocation;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   string            $phoneNumber        Initialization value for the property $this->phoneNumber     
	 * @param   int               $trunkId            Initialization value for the property $this->trunkId         
	 * @param   string            $didTypeHandle      Initialization value for the property $this->didTypeHandle   
	 * @param   CallerLocation|null   $callerLocation     Initialization value for the property $this->callerLocation  
     */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->phoneNumber      = func_get_arg(0);
            $this->trunkId          = func_get_arg(1);
            $this->didTypeHandle    = func_get_arg(2);
            $this->callerLocation   = func_get_arg(3);
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
        $json['phone_number']     = $this->phoneNumber;
        $json['trunk_id']         = $this->trunkId;
        $json['did_type_handle']  = $this->didTypeHandle;
        $json['_caller_location'] = $this->callerLocation;
        $json = array_merge($json, parent::to_json());
        return $json;
    }
}