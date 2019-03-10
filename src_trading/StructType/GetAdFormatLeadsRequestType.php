<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdFormatLeadsRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Retrieves sales lead information for a lead generation listing.
 * @subpackage Structs
 */
class GetAdFormatLeadsRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of an item listed on the eBay site. Returned by eBay when the item is created. This ID must correspond to an ad format item. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Filters the leads based on their status.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The IncludeMemberMessages
     * Meta informations extracted from the WSDL
     * - documentation: Boolean which indicates whether to return mail messages for this lead in a MemberMessage node.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeMemberMessages;
    /**
     * The StartCreationTime
     * Meta informations extracted from the WSDL
     * - documentation: Used with EndCreationTime to limit the returned leads for a user to only those with a creation date greater than or equal to the specified date and time.
     * - minOccurs: 0
     * @var string
     */
    public $StartCreationTime;
    /**
     * The EndCreationTime
     * Meta informations extracted from the WSDL
     * - documentation: Used with StartCreationTime to limit the returned leads for a user to only those with a creation date less than or equal to the specified date and time.
     * - minOccurs: 0
     * @var string
     */
    public $EndCreationTime;
    /**
     * Constructor method for GetAdFormatLeadsRequestType
     * @uses GetAdFormatLeadsRequestType::setItemID()
     * @uses GetAdFormatLeadsRequestType::setStatus()
     * @uses GetAdFormatLeadsRequestType::setIncludeMemberMessages()
     * @uses GetAdFormatLeadsRequestType::setStartCreationTime()
     * @uses GetAdFormatLeadsRequestType::setEndCreationTime()
     * @param string $itemID
     * @param string $status
     * @param bool $includeMemberMessages
     * @param string $startCreationTime
     * @param string $endCreationTime
     */
    public function __construct($itemID = null, $status = null, $includeMemberMessages = null, $startCreationTime = null, $endCreationTime = null)
    {
        $this
            ->setItemID($itemID)
            ->setStatus($status)
            ->setIncludeMemberMessages($includeMemberMessages)
            ->setStartCreationTime($startCreationTime)
            ->setEndCreationTime($endCreationTime);
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
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\MessageStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get IncludeMemberMessages value
     * @return bool|null
     */
    public function getIncludeMemberMessages()
    {
        return $this->IncludeMemberMessages;
    }
    /**
     * Set IncludeMemberMessages value
     * @param bool $includeMemberMessages
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setIncludeMemberMessages($includeMemberMessages = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeMemberMessages) && !is_bool($includeMemberMessages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeMemberMessages)), __LINE__);
        }
        $this->IncludeMemberMessages = $includeMemberMessages;
        return $this;
    }
    /**
     * Get StartCreationTime value
     * @return string|null
     */
    public function getStartCreationTime()
    {
        return $this->StartCreationTime;
    }
    /**
     * Set StartCreationTime value
     * @param string $startCreationTime
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setStartCreationTime($startCreationTime = null)
    {
        // validation for constraint: string
        if (!is_null($startCreationTime) && !is_string($startCreationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startCreationTime)), __LINE__);
        }
        $this->StartCreationTime = $startCreationTime;
        return $this;
    }
    /**
     * Get EndCreationTime value
     * @return string|null
     */
    public function getEndCreationTime()
    {
        return $this->EndCreationTime;
    }
    /**
     * Set EndCreationTime value
     * @param string $endCreationTime
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
     */
    public function setEndCreationTime($endCreationTime = null)
    {
        // validation for constraint: string
        if (!is_null($endCreationTime) && !is_string($endCreationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endCreationTime)), __LINE__);
        }
        $this->EndCreationTime = $endCreationTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsRequestType
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
