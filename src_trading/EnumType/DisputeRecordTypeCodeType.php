<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for DisputeRecordTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the type of dispute, either <i>Unpaid Item</i> or <i>Item Not Received</i>. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes. </span>
 * @subpackage Enumerations
 */
class DisputeRecordTypeCodeType
{
    /**
     * Constant for value 'UnpaidItem'
     * @return string 'UnpaidItem'
     */
    const VALUE_UNPAID_ITEM = 'UnpaidItem';
    /**
     * Constant for value 'ItemNotReceived'
     * @return string 'ItemNotReceived'
     */
    const VALUE_ITEM_NOT_RECEIVED = 'ItemNotReceived';
    /**
     * Constant for value 'HalfDispute'
     * @return string 'HalfDispute'
     */
    const VALUE_HALF_DISPUTE = 'HalfDispute';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_UNPAID_ITEM
     * @uses self::VALUE_ITEM_NOT_RECEIVED
     * @uses self::VALUE_HALF_DISPUTE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNPAID_ITEM,
            self::VALUE_ITEM_NOT_RECEIVED,
            self::VALUE_HALF_DISPUTE,
            self::VALUE_CUSTOM_CODE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
