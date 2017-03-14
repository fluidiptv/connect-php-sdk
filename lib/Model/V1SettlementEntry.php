<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * V1SettlementEntry Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class V1SettlementEntry implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'payment_id' => 'string',
        'type' => 'string',
        'amount_money' => '\SquareConnect\Model\V1Money',
        'fee_money' => '\SquareConnect\Model\V1Money'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'payment_id' => 'payment_id',
        'type' => 'type',
        'amount_money' => 'amount_money',
        'fee_money' => 'fee_money'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'payment_id' => 'setPaymentId',
        'type' => 'setType',
        'amount_money' => 'setAmountMoney',
        'fee_money' => 'setFeeMoney'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'payment_id' => 'getPaymentId',
        'type' => 'getType',
        'amount_money' => 'getAmountMoney',
        'fee_money' => 'getFeeMoney'
    );
  
    /**
      * $payment_id The settlement's unique identifier.
      * @var string
      */
    protected $payment_id;
    /**
      * $type The settlement's current status.
      * @var string
      */
    protected $type;
    /**
      * $amount_money The total amount of money this entry contributes to the total settlement amount.
      * @var \SquareConnect\Model\V1Money
      */
    protected $amount_money;
    /**
      * $fee_money The amount of all Square fees associated with this settlement entry. This value is always negative or zero.
      * @var \SquareConnect\Model\V1Money
      */
    protected $fee_money;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->payment_id = $data["payment_id"];
            $this->type = $data["type"];
            $this->amount_money = $data["amount_money"];
            $this->fee_money = $data["fee_money"];
        }
    }
    /**
     * Gets payment_id
     * @return string
     */
    public function getPaymentId()
    {
        return $this->payment_id;
    }
  
    /**
     * Sets payment_id
     * @param string $payment_id The settlement's unique identifier.
     * @return $this
     */
    public function setPaymentId($payment_id)
    {
        $this->payment_id = $payment_id;
        return $this;
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type The settlement's current status.
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets amount_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getAmountMoney()
    {
        return $this->amount_money;
    }
  
    /**
     * Sets amount_money
     * @param \SquareConnect\Model\V1Money $amount_money The total amount of money this entry contributes to the total settlement amount.
     * @return $this
     */
    public function setAmountMoney($amount_money)
    {
        $this->amount_money = $amount_money;
        return $this;
    }
    /**
     * Gets fee_money
     * @return \SquareConnect\Model\V1Money
     */
    public function getFeeMoney()
    {
        return $this->fee_money;
    }
  
    /**
     * Sets fee_money
     * @param \SquareConnect\Model\V1Money $fee_money The amount of all Square fees associated with this settlement entry. This value is always negative or zero.
     * @return $this
     */
    public function setFeeMoney($fee_money)
    {
        $this->fee_money = $fee_money;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
