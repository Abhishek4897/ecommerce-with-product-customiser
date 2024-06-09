<?php
/**
 * GenerateInvoiceResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ShiprocketAPI
 *
 * Welcome to ShipRocket’s API Documentation. Get a clear understanding of all the sections and codes that are used in ShipRocket’s API. ShipRocket API uses the JSON syntax.     First you need to register with ShipRocket and create an account. Simply click on this [link](https://app.shiprocket.in/register) to complete the simple sign up process.    Please note that to utilise the ShipRocket API's, you need to [upgrade](https://app.shiprocket.in/billing-plan-details) your plan to Advance or Pro. To get access to use the API's, you need to call to +91-9266623006 our customer care or send a mail to srs@kartrocket.com, stating that you would like to use ShipRocket Open API's. After that you will have to provide an alternate email id which will be used for the ShipRocket API.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GenerateInvoiceResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GenerateInvoiceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GenerateInvoiceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_invoice_created' => 'bool',
        'invoice_url' => 'string',
        'not_created' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_invoice_created' => null,
        'invoice_url' => null,
        'not_created' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_invoice_created' => 'is_invoice_created',
        'invoice_url' => 'invoice_url',
        'not_created' => 'not_created'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_invoice_created' => 'setIsInvoiceCreated',
        'invoice_url' => 'setInvoiceUrl',
        'not_created' => 'setNotCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_invoice_created' => 'getIsInvoiceCreated',
        'invoice_url' => 'getInvoiceUrl',
        'not_created' => 'getNotCreated'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['is_invoice_created'] = isset($data['is_invoice_created']) ? $data['is_invoice_created'] : null;
        $this->container['invoice_url'] = isset($data['invoice_url']) ? $data['invoice_url'] : null;
        $this->container['not_created'] = isset($data['not_created']) ? $data['not_created'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_invoice_created'] === null) {
            $invalidProperties[] = "'is_invoice_created' can't be null";
        }
        if ($this->container['invoice_url'] === null) {
            $invalidProperties[] = "'invoice_url' can't be null";
        }
        if ($this->container['not_created'] === null) {
            $invalidProperties[] = "'not_created' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['is_invoice_created'] === null) {
            return false;
        }
        if ($this->container['invoice_url'] === null) {
            return false;
        }
        if ($this->container['not_created'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_invoice_created
     *
     * @return bool
     */
    public function getIsInvoiceCreated()
    {
        return $this->container['is_invoice_created'];
    }

    /**
     * Sets is_invoice_created
     *
     * @param bool $is_invoice_created Mentions the response to if the invoice is created by the system or not
     *
     * @return $this
     */
    public function setIsInvoiceCreated($is_invoice_created)
    {
        $this->container['is_invoice_created'] = $is_invoice_created;

        return $this;
    }

    /**
     * Gets invoice_url
     *
     * @return string
     */
    public function getInvoiceUrl()
    {
        return $this->container['invoice_url'];
    }

    /**
     * Sets invoice_url
     *
     * @param string $invoice_url If the answer to the aforementioned question is true, then it displays the url of a pdf file with the order invoice
     *
     * @return $this
     */
    public function setInvoiceUrl($invoice_url)
    {
        $this->container['invoice_url'] = $invoice_url;

        return $this;
    }

    /**
     * Gets not_created
     *
     * @return string[]
     */
    public function getNotCreated()
    {
        return $this->container['not_created'];
    }

    /**
     * Sets not_created
     *
     * @param string[] $not_created If the invoice is not created then it shows this fact
     *
     * @return $this
     */
    public function setNotCreated($not_created)
    {
        $this->container['not_created'] = $not_created;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


