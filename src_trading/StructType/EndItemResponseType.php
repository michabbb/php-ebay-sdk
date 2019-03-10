<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type includes the acknowledgement of the date and time when the eBay listing was ended due to the call to <b>EndItem</b>.
 * @subpackage Structs
 */
class EndItemResponseType extends AbstractResponseType
{
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * Constructor method for EndItemResponseType
     * @uses EndItemResponseType::setEndTime()
     * @param string $endTime
     */
    public function __construct($endTime = null)
    {
        $this
            ->setEndTime($endTime);
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseType
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
