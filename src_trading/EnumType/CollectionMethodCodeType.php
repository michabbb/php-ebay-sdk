<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CollectionMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the collection methods that are used to collect either 'Collect and Remit' sales tax in the US, or 'Good and Services' tax in Australia and New Zealand. <br> <br> <span class="tablenote"><b>Note: </b>
 * Although the <b>CollectionMethod</b> field is returned for orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are currently not applicable. </span>
 * @subpackage Enumerations
 */
class CollectionMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'INVOICE'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This value is for future use. </span>
     * @return string 'INVOICE'
     */
    const VALUE_INVOICE = 'INVOICE';
    /**
     * Constant for value 'NET'
     * Meta information extracted from the WSDL
     * - documentation: This value is always returned, but because the <b>CollectionMethod</b> field and <b>CollectionMethodCodeType</b> are not currently applicable, this value does not have any purpose at this time.
     * @return string 'NET'
     */
    const VALUE_NET = 'NET';
    /**
     * Return allowed values
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_NET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INVOICE,
            self::VALUE_NET,
        ];
    }
}
