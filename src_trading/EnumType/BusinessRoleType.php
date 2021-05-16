<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BusinessRoleType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the eBay user's account type.
 * @subpackage Enumerations
 */
class BusinessRoleType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Shopper'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account is a Partially Provisioned Account without buying and selling privileges on eBay.
     * @return string 'Shopper'
     */
    const VALUE_SHOPPER = 'Shopper';
    /**
     * Constant for value 'FullMarketPlaceParticipant'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the eBay user's account is a fully provisioned account with buying and selling privileges on eBay.
     * @return string 'FullMarketPlaceParticipant'
     */
    const VALUE_FULL_MARKET_PLACE_PARTICIPANT = 'FullMarketPlaceParticipant';
    /**
     * Return allowed values
     * @uses self::VALUE_SHOPPER
     * @uses self::VALUE_FULL_MARKET_PLACE_PARTICIPANT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SHOPPER,
            self::VALUE_FULL_MARKET_PLACE_PARTICIPANT,
        ];
    }
}
