<?php 
/*
 * MagicTelecomAPILib
 *
 * This file was automatically generated by APIMATIC BETA v2.0 on 01/13/2016
 */

namespace MagicTelecomAPILib\Models;

use JsonSerializable;

class TelephoneNumber implements JsonSerializable {
    /**
     * TODO: Write general description for this property
     * @param int $trunkId public property
     */
    protected $trunkId;

    /**
     * TODO: Write general description for this property
     * @param string $sipEndPointUri public property
     */
    protected $sipEndPointUri;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   int               $trunkId             Initialization value for the property $this->trunkId          
	 * @param   string            $sipEndPointUri      Initialization value for the property $this->sipEndPointUri   
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->trunkId           = func_get_arg(0);
            $this->sipEndPointUri    = func_get_arg(1);
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
        $json['trunk_id']          = $this->trunkId;
        $json['sip_end_point_uri'] = $this->sipEndPointUri;
        return $json;
    }
}