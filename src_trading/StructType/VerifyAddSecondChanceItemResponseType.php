<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddSecondChanceItemResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response of the <b>VerifyAddSecondChanceItem</b> call.
 * @subpackage Structs
 */
class VerifyAddSecondChanceItemResponseType extends AbstractResponseType
{
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the date and time when the the new Second Chance Offer listing became active and the recipient user could purchase the item.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the date and time when the Second Chance Offer listing expires, at which time the listing ends (if the recipient user does not purchase the item first).
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * Constructor method for VerifyAddSecondChanceItemResponseType
     * @uses VerifyAddSecondChanceItemResponseType::setStartTime()
     * @uses VerifyAddSecondChanceItemResponseType::setEndTime()
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct($startTime = null, $endTime = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime);
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddSecondChanceItemResponseType
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
