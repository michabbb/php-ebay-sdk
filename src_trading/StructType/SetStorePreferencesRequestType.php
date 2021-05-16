<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetStorePreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Sets the preferences for a user's eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * @subpackage Structs
 */
class SetStorePreferencesRequestType extends AbstractRequestType
{
    /**
     * The StorePreferences
     * Meta information extracted from the WSDL
     * - documentation: This container is used to set the eBay Store's preferences. Currently, the only applicable eBay Store preferences are Store vacation preferences.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StorePreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StorePreferencesType $StorePreferences = null;
    /**
     * Constructor method for SetStorePreferencesRequestType
     * @uses SetStorePreferencesRequestType::setStorePreferences()
     * @param \macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences = null)
    {
        $this
            ->setStorePreferences($storePreferences);
    }
    /**
     * Get StorePreferences value
     * @return \macropage\ebaysdk\trading\StructType\StorePreferencesType|null
     */
    public function getStorePreferences(): ?\macropage\ebaysdk\trading\StructType\StorePreferencesType
    {
        return $this->StorePreferences;
    }
    /**
     * Set StorePreferences value
     * @param \macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences
     * @return \macropage\ebaysdk\trading\StructType\SetStorePreferencesRequestType
     */
    public function setStorePreferences(?\macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences = null): self
    {
        $this->StorePreferences = $storePreferences;
        
        return $this;
    }
}
