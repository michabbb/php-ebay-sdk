<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReminderCustomizationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to return certain reminder types from the user's My eBay account.
 * @subpackage Structs
 */
class ReminderCustomizationType extends AbstractStructBase
{
    /**
     * The DurationInDays
     * Meta informations extracted from the WSDL
     * - documentation: The length of time the reminder has existed in the user's My eBay account, in days. Valid values are 1-60.
     * - minOccurs: 0
     * @var int
     */
    public $DurationInDays;
    /**
     * The Include
     * Meta informations extracted from the WSDL
     * - documentation: Whether to include information about this type of reminder in the response. When true, the container is returned with default input parameters.
     * - minOccurs: 0
     * @var bool
     */
    public $Include;
    /**
     * Constructor method for ReminderCustomizationType
     * @uses ReminderCustomizationType::setDurationInDays()
     * @uses ReminderCustomizationType::setInclude()
     * @param int $durationInDays
     * @param bool $include
     */
    public function __construct($durationInDays = null, $include = null)
    {
        $this
            ->setDurationInDays($durationInDays)
            ->setInclude($include);
    }
    /**
     * Get DurationInDays value
     * @return int|null
     */
    public function getDurationInDays()
    {
        return $this->DurationInDays;
    }
    /**
     * Set DurationInDays value
     * @param int $durationInDays
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType
     */
    public function setDurationInDays($durationInDays = null)
    {
        // validation for constraint: int
        if (!is_null($durationInDays) && !is_numeric($durationInDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($durationInDays)), __LINE__);
        }
        $this->DurationInDays = $durationInDays;
        return $this;
    }
    /**
     * Get Include value
     * @return bool|null
     */
    public function getInclude()
    {
        return $this->Include;
    }
    /**
     * Set Include value
     * @param bool $include
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType
     */
    public function setInclude($include = null)
    {
        // validation for constraint: boolean
        if (!is_null($include) && !is_bool($include)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($include)), __LINE__);
        }
        $this->Include = $include;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReminderCustomizationType
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
