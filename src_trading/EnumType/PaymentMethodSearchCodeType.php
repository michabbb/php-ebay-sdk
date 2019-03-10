<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for PaymentMethodSearchCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used for specifying items for which a specific payment method or methods are accepted.
 * @subpackage Enumerations
 */
class PaymentMethodSearchCodeType
{
    /**
     * Constant for value 'PayPal'
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'PaisaPay'
     * @return string 'PaisaPay'
     */
    const VALUE_PAISA_PAY = 'PaisaPay';
    /**
     * Constant for value 'PayPalOrPaisaPay'
     * @return string 'PayPalOrPaisaPay'
     */
    const VALUE_PAY_PAL_OR_PAISA_PAY = 'PayPalOrPaisaPay';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Constant for value 'PaisaPayEscrowEMI'
     * @return string 'PaisaPayEscrowEMI'
     */
    const VALUE_PAISA_PAY_ESCROW_EMI = 'PaisaPayEscrowEMI';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_PAISA_PAY
     * @uses self::VALUE_PAY_PAL_OR_PAISA_PAY
     * @uses self::VALUE_CUSTOM_CODE
     * @uses self::VALUE_PAISA_PAY_ESCROW_EMI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAY_PAL,
            self::VALUE_PAISA_PAY,
            self::VALUE_PAY_PAL_OR_PAISA_PAY,
            self::VALUE_CUSTOM_CODE,
            self::VALUE_PAISA_PAY_ESCROW_EMI,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
