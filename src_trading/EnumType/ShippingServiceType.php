<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingServiceType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the possible values that can be used in the <b>ShippingServiceType</b> field of the <b>ShippingServiceCostOverride</b> container.
 * @subpackage Enumerations
 */
class ShippingServiceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Domestic'
     * Meta information extracted from the WSDL
     * - documentation: This value should be used if the seller is overriding shipping costs for all domestic shipping services defined in the Business Policies shipping profile.
     * @return string 'Domestic'
     */
    const VALUE_DOMESTIC = 'Domestic';
    /**
     * Constant for value 'International'
     * Meta information extracted from the WSDL
     * - documentation: This value should be used if the seller is overriding shipping costs for all international shipping services defined in the Business Policies shipping profile.
     * @return string 'International'
     */
    const VALUE_INTERNATIONAL = 'International';
    /**
     * Return allowed values
     * @uses self::VALUE_DOMESTIC
     * @uses self::VALUE_INTERNATIONAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DOMESTIC,
            self::VALUE_INTERNATIONAL,
        ];
    }
}
