<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStorePreferencesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response of the <b>GetStorePreferences</b> call.
 * @subpackage Structs
 */
class GetStorePreferencesResponseType extends AbstractResponseType
{
    /**
     * The StorePreferences
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the seller's current eBay Store preferences. Currently, the only eBay Store preferences are related to putting an eBay Store on vacation mode, but more preferences may get added in the future.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StorePreferencesType
     */
    public $StorePreferences;
    /**
     * Constructor method for GetStorePreferencesResponseType
     * @uses GetStorePreferencesResponseType::setStorePreferences()
     * @param \macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences = null)
    {
        $this
            ->setStorePreferences($storePreferences);
    }
    /**
     * Get StorePreferences value
     * @return \macropage\ebaysdk\trading\StructType\StorePreferencesType|null
     */
    public function getStorePreferences()
    {
        return $this->StorePreferences;
    }
    /**
     * Set StorePreferences value
     * @param \macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences
     * @return \macropage\ebaysdk\trading\StructType\GetStorePreferencesResponseType
     */
    public function setStorePreferences(\macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences = null)
    {
        $this->StorePreferences = $storePreferences;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetStorePreferencesResponseType
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
