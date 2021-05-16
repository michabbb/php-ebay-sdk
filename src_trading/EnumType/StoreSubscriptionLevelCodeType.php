<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StoreSubscriptionLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains the different subscription levels that a seller may subscribe to for their eBay Store. There is also one enumeration value (<code>Close</code>) that allows a seller to cancel their current eBay Store
 * subscription with a <b>SetStore</b> call.
 * @subpackage Enumerations
 */
class StoreSubscriptionLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Close'
     * Meta information extracted from the WSDL
     * - documentation: This value is passed into the <b>Store.SubscriptionLevel</b> field of a <b>SetStore</b> call to cancel your current eBay Store subscription. Despite its name, this action does not close your store immediately. Any active listings
     * will remain available through your eBay Store until those listings have ended (either through a sale or when listing end time has been reached).
     * @return string 'Close'
     */
    const VALUE_CLOSE = 'Close';
    /**
     * Constant for value 'Basic'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user has a Basic eBay Store subscription.
     * @return string 'Basic'
     */
    const VALUE_BASIC = 'Basic';
    /**
     * Constant for value 'Featured'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user has a Premium eBay Store subscription.
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Anchor'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user has an Anchor eBay Store subscription.
     * @return string 'Anchor'
     */
    const VALUE_ANCHOR = 'Anchor';
    /**
     * Constant for value 'Starter'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user has a Starter eBay Store subscription.
     * @return string 'Starter'
     */
    const VALUE_STARTER = 'Starter';
    /**
     * Constant for value 'Enterprise'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the eBay user has an Enterprise eBay Store subscription.
     * @return string 'Enterprise'
     */
    const VALUE_ENTERPRISE = 'Enterprise';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CLOSE
     * @uses self::VALUE_BASIC
     * @uses self::VALUE_FEATURED
     * @uses self::VALUE_ANCHOR
     * @uses self::VALUE_STARTER
     * @uses self::VALUE_ENTERPRISE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CLOSE,
            self::VALUE_BASIC,
            self::VALUE_FEATURED,
            self::VALUE_ANCHOR,
            self::VALUE_STARTER,
            self::VALUE_ENTERPRISE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
