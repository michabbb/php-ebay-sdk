<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StorePreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store Preferences type.
 * @subpackage Structs
 */
class StorePreferencesType extends AbstractStructBase
{
    /**
     * The VacationPreferences
     * Meta information extracted from the WSDL
     * - documentation: Store vacation hold preferences.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType $VacationPreferences = null;
    /**
     * Constructor method for StorePreferencesType
     * @uses StorePreferencesType::setVacationPreferences()
     * @param \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType $vacationPreferences
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType $vacationPreferences = null)
    {
        $this
            ->setVacationPreferences($vacationPreferences);
    }
    /**
     * Get VacationPreferences value
     * @return \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType|null
     */
    public function getVacationPreferences(): ?\macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType
    {
        return $this->VacationPreferences;
    }
    /**
     * Set VacationPreferences value
     * @param \macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType $vacationPreferences
     * @return \macropage\ebaysdk\trading\StructType\StorePreferencesType
     */
    public function setVacationPreferences(?\macropage\ebaysdk\trading\StructType\StoreVacationPreferencesType $vacationPreferences = null): self
    {
        $this->VacationPreferences = $vacationPreferences;
        
        return $this;
    }
}
