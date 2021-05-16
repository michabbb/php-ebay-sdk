<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessagePreferencesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the ASQ subjects for the user specified in the request.
 * @subpackage Structs
 */
class GetMessagePreferencesResponseType extends AbstractResponseType
{
    /**
     * The ASQPreferences
     * Meta information extracted from the WSDL
     * - documentation: Returns a seller's ASQ subjects, each in its own Subject node. If the seller has not customized the ASQ subjects using SetMessagePreferences, the call will return the current default values. Returned if IncludeASQPreferences = true
     * was specified in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ASQPreferencesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ASQPreferencesType $ASQPreferences = null;
    /**
     * Constructor method for GetMessagePreferencesResponseType
     * @uses GetMessagePreferencesResponseType::setASQPreferences()
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
     * @return \macropage\ebaysdk\trading\StructType\GetMessagePreferencesResponseType
     */
    public function setASQPreferences(?\macropage\ebaysdk\trading\StructType\ASQPreferencesType $aSQPreferences = null): self
    {
        $this->ASQPreferences = $aSQPreferences;
        
        return $this;
    }
}
