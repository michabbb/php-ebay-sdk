<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStorePreferencesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base response of the <b>GetStorePreferences</b> call.
 * @subpackage Structs
 */
class GetStorePreferencesResponseType extends AbstractResponseType
{
    /**
     * The StorePreferences
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the seller's current eBay Store preferences. Currently, the only eBay Store preferences are related to putting an eBay Store on vacation mode, but more preferences may get added in the future.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StorePreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StorePreferencesType $StorePreferences = null;
    /**
     * Constructor method for GetStorePreferencesResponseType
     * @uses GetStorePreferencesResponseType::setStorePreferences()
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
     * @return \macropage\ebaysdk\trading\StructType\GetStorePreferencesResponseType
     */
    public function setStorePreferences(?\macropage\ebaysdk\trading\StructType\StorePreferencesType $storePreferences = null): self
    {
        $this->StorePreferences = $storePreferences;
        
        return $this;
    }
}
