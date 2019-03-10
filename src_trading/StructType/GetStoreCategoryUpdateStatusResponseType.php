<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreCategoryUpdateStatusResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of a <b>GetStoreCategoryUpdateStatus</b> call. The response includes the status of an eBay Store Category hierarchy change that was made with a <b>SetStoreCategories</b> call.
 * @subpackage Structs
 */
class GetStoreCategoryUpdateStatusResponseType extends AbstractResponseType
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value indicates the status of an update to the eBay Store Category hierarchy.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for GetStoreCategoryUpdateStatusResponseType
     * @uses GetStoreCategoryUpdateStatusResponseType::setStatus()
     * @param string $status
     */
    public function __construct($status = null)
    {
        $this
            ->setStatus($status);
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
     * @uses \macropage\ebaysdk\trading\EnumType\TaskStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TaskStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TaskStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\TaskStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetStoreCategoryUpdateStatusResponseType
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
