<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStoreCustomPageResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response for the <b>SetStoreCustomPage<b> call. This serves as confirmation that the custom page was successfully submitted.
 * @subpackage Structs
 */
class SetStoreCustomPageResponseType extends AbstractResponseType
{
    /**
     * The CustomPage
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of details for the newly-added or modified eBay Store custom page.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public $CustomPage;
    /**
     * Constructor method for SetStoreCustomPageResponseType
     * @uses SetStoreCustomPageResponseType::setCustomPage()
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage = null)
    {
        $this
            ->setCustomPage($customPage);
    }
    /**
     * Get CustomPage value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType|null
     */
    public function getCustomPage()
    {
        return $this->CustomPage;
    }
    /**
     * Set CustomPage value
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCustomPageResponseType
     */
    public function setCustomPage(\macropage\ebaysdk\trading\StructType\StoreCustomPageType $customPage = null)
    {
        $this->CustomPage = $customPage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetStoreCustomPageResponseType
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
