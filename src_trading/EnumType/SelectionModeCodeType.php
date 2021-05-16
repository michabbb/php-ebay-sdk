<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SelectionModeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the values that will indicate whether a seller can specify their own custom values for an Item Specific, or if they need to use a value (or values) that eBay has defined.
 * @subpackage Enumerations
 */
class SelectionModeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Automatic'
     * Meta information extracted from the WSDL
     * - documentation: Automatic criteria. Reserved for future use.
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Manual'
     * Meta information extracted from the WSDL
     * - documentation: Manual criteria. Reserved for future use.
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Prefilled'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the Item Specifics defined for an eBay catalog product will get pre-filled for a listing if the seller successfully matches their item to a product in eBay's catalog. To match an item to an eBay catalog product when
     * adding or revising a listing, the seller provides either an <b>Add</b>/<b>Revise</b>/<b>Relist</b> eBay Product ID (ePID), or a Global Trade Identification Number such as a UPC, an EAN, anISBN), or a Brand/MPN pair.
     * @return string 'Prefilled'
     */
    const VALUE_PREFILLED = 'Prefilled';
    /**
     * Constant for value 'SelectionOnly'
     * Meta information extracted from the WSDL
     * - documentation: If this value is returned, it is recommended that the seller only use one of the recommended values for the corresponding Item Specific. In other words, the seller should use the exact string provided in one of the corresponding
     * <b>ValueRecommendation.Value</b> fields when creating, revising, or relisting an item and using that particular Item Specific.
     * @return string 'SelectionOnly'
     */
    const VALUE_SELECTION_ONLY = 'SelectionOnly';
    /**
     * Constant for value 'FreeText'
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the seller is allowed to specify their own value(s) for the corresponding Item Specific when creating, revising, or relisting an item and using that particular Item Specific.
     * @return string 'FreeText'
     */
    const VALUE_FREE_TEXT = 'FreeText';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_PREFILLED
     * @uses self::VALUE_SELECTION_ONLY
     * @uses self::VALUE_FREE_TEXT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AUTOMATIC,
            self::VALUE_MANUAL,
            self::VALUE_PREFILLED,
            self::VALUE_SELECTION_ONLY,
            self::VALUE_FREE_TEXT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
