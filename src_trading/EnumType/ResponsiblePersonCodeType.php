<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ResponsiblePersonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the type of responsible person associated with a product. <br /> <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponisblePerson</code>.</span>
 * @subpackage Enumerations
 */
class ResponsiblePersonCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EUResponsiblePerson'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the Responsible person is an EU Responsible Person. An EU Responsible Person is crucial for ensuring that products comply with all relevant regulations and safety standards to protect human health.
     * @return string 'EUResponsiblePerson'
     */
    const VALUE_EURESPONSIBLE_PERSON = 'EUResponsiblePerson';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_EURESPONSIBLE_PERSON
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EURESPONSIBLE_PERSON,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
