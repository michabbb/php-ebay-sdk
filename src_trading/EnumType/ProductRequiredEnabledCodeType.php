<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for ProductRequiredEnabledCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This enumerated type is used by the <b>ProductRequiredEnabled</b> field that is returned under the <b>Category</b> container of a <b>GetCategoryFeatures</b> response. The <b>Category.ProductRequiredEnabled</b> field will only be
 * returned in if <code>Enabled</code>. <br> <br> <span class="tablenote"><b>Note:</b> Initially, Product-Based Shopping Experience (PBSE) is only enabled on the US, UK, Australia, Canada (English), and Germany sites. For more information on PBSE, see
 * the <a href="https://developer.ebay.com/api-docs/sell/static/inventory/pbse_playbook_intro.html" target="_blank">Product-Based Shopping Experience Playbook</a>. </span>
 * @subpackage Enumerations
 */
class ProductRequiredEnabledCodeType
{
    /**
     * Constant for value 'Disabled'
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'Enabled'
     * @return string 'Enabled'
     */
    const VALUE_ENABLED = 'Enabled';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_ENABLED,
            self::VALUE_CUSTOM_CODE,
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
