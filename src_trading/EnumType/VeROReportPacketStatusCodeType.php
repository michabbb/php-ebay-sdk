<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VeROReportPacketStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that contains the possible states of a VeRO Report packet. A VeRO Report packet is a set of one or more items that have been reported by a Verified Rights Owner as infringing upon the owner's intellectual property
 * rights.
 * @subpackage Enumerations
 */
class VeROReportPacketStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Received'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the VeRO Report packet has been received by eBay.
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'InProcess'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that eBay is in the process of reviewing the VeRO Report packet. For a VeRO Report packet consisting of multiple items, the call user can look at the <b>ReportedItemDetails</b> container in the
     * <b>GetVeROReportStatus</b> response to get more details about individual items in the VeRO Report packet.
     * @return string 'InProcess'
     */
    const VALUE_IN_PROCESS = 'InProcess';
    /**
     * Constant for value 'Processed'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the VeRO Report packet has been processed by eBay.
     * @return string 'Processed'
     */
    const VALUE_PROCESSED = 'Processed';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_IN_PROCESS
     * @uses self::VALUE_PROCESSED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RECEIVED,
            self::VALUE_IN_PROCESS,
            self::VALUE_PROCESSED,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
