<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeenettingStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type contains values that indicate the current status of the seller's account for the fee netting mechanism. With fee netting, some selling fees like final value fee and payment processing fee will be deducted from
 * seller payouts insted of eBay invoicing the seller for the fees.
 * @subpackage Enumerations
 */
class FeenettingStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Enabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the account is enabled for the fee netting mechanism. If a user sees this value, the <b>GetAccount</b> response will include the <b>AccountSummary.NettedTransactionSummary</b> container and the
     * <b>AccountEntry.Netted</b> boolean field for each account entry.
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'Disabled'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the account is not enabled for the fee netting mechanism. .
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Exempted'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the account is exempted from the fee netting mechanism.
     * @return string 'Exempted'
     */
    const VALUE_EXEMPTED = 'Exempted';
    /**
     * Return allowed values
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_EXEMPTED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENABLED,
            self::VALUE_DISABLED,
            self::VALUE_EXEMPTED,
        ];
    }
}
