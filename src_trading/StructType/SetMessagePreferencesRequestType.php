<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMessagePreferencesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to add custom Ask Seller a Question (ASQ) subjects to their Ask a Question page, or to reset any custom subjects to their default values.
 * @subpackage Structs
 */
class SetMessagePreferencesRequestType extends AbstractRequestType
{
    /**
     * The ASQPreferences
     * Meta information extracted from the WSDL
     * - documentation: This container can be used to set customized ASQ subjects, or it can be used to reset the ASQ subjects to the eBay defaults. Up to nine customized ASQ subjects can be set.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ASQPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ASQPreferencesType $ASQPreferences = null;
    /**
     * Constructor method for SetMessagePreferencesRequestType
     * @uses SetMessagePreferencesRequestType::setASQPreferences()
     * @param \macropage\ebaysdk\trading\StructType\ASQPreferencesType $aSQPreferences
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ASQPreferencesType $aSQPreferences = null)
    {
        $this
            ->setASQPreferences($aSQPreferences);
    }
    /**
     * Get ASQPreferences value
     * @return \macropage\ebaysdk\trading\StructType\ASQPreferencesType|null
     */
    public function getASQPreferences(): ?\macropage\ebaysdk\trading\StructType\ASQPreferencesType
    {
        return $this->ASQPreferences;
    }
    /**
     * Set ASQPreferences value
     * @param \macropage\ebaysdk\trading\StructType\ASQPreferencesType $aSQPreferences
     * @return \macropage\ebaysdk\trading\StructType\SetMessagePreferencesRequestType
     */
    public function setASQPreferences(?\macropage\ebaysdk\trading\StructType\ASQPreferencesType $aSQPreferences = null): self
    {
        $this->ASQPreferences = $aSQPreferences;
        
        return $this;
    }
}
