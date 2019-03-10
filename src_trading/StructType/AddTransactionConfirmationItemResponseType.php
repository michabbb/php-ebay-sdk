<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddTransactionConfirmationItemResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>AddTransactionConfirmationItem</b> call.
 * @subpackage Structs
 */
class AddTransactionConfirmationItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: This field contains the Item ID associated with the Transaction Confirmation Item that was just created with the <b>AddTransactionConfirmationItem</b> call. This field is not returned if the request was only used to verify that a new
     * TCR could be created. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the Transaction Confirmation Item became available to the recipient.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the Transaction Confirmation Item will no longer be available for purchase.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * Constructor method for AddTransactionConfirmationItemResponseType
     * @uses AddTransactionConfirmationItemResponseType::setItemID()
     * @uses AddTransactionConfirmationItemResponseType::setStartTime()
     * @uses AddTransactionConfirmationItemResponseType::setEndTime()
     * @param string $itemID
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct($itemID = null, $startTime = null, $endTime = null)
    {
        $this
            ->setItemID($itemID)
            ->setStartTime($startTime)
            ->setEndTime($endTime);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemResponseType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemResponseType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemResponseType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\AddTransactionConfirmationItemResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
