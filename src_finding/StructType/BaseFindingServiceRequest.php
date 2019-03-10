<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseFindingServiceRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request container for all Finding Service operations.
 * @subpackage Structs
 */
abstract class BaseFindingServiceRequest extends BestMatchFindingServiceRequest
{
    /**
     * The sortOrder
     * Meta informations extracted from the WSDL
     * - documentation: Sort the returned items according to a single specified sort order.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $sortOrder;
    /**
     * Constructor method for BaseFindingServiceRequest
     * @uses BaseFindingServiceRequest::setSortOrder()
     * @param string $sortOrder
     */
    public function __construct($sortOrder = null)
    {
        $this
            ->setSortOrder($sortOrder);
    }
    /**
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @uses \macropage\ebaysdk\finding\EnumType\SortOrderType::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\SortOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sortOrder
     * @return \macropage\ebaysdk\finding\StructType\BaseFindingServiceRequest
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\SortOrderType::valueIsValid($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sortOrder, implode(', ', \macropage\ebaysdk\finding\EnumType\SortOrderType::getValidValues())), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\BaseFindingServiceRequest
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
