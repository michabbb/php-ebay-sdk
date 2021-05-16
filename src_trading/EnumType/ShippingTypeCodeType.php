<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: The shipping cost model offered by the seller.
 * @subpackage Enumerations
 */
class ShippingTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Flat'
     * Meta information extracted from the WSDL
     * - documentation: Flat shipping model: the seller establishes the cost of shipping and cost of shipping insurance, regardless of what any buyer-selected shipping service might charge the seller. <br/><br/> <span class="tablenote">
     * <strong>Note:</strong> This shipping type includes an option for a <em>Flat Rate Freight</em> shipping service. For details about freight shipping, see <a
     * href="http://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying Freight Shipping</a> in the eBay Features Guide. </span>
     * @return string 'Flat'
     */
    const VALUE_FLAT = 'Flat';
    /**
     * Constant for value 'Calculated'
     * Meta information extracted from the WSDL
     * - documentation: Calculated shipping model: the cost of shipping is determined in large part by the seller-offered and buyer-selected shipping service. The seller might assess an additional fee via PackagingHandlingCosts.
     * @return string 'Calculated'
     */
    const VALUE_CALCULATED = 'Calculated';
    /**
     * Constant for value 'Freight'
     * Meta information extracted from the WSDL
     * - documentation: Freight shipping model. Available only for US domestic shipping. The cost of shipping is automatically determined by an affiliated third party, FreightQuote.com, based on the item location (postal code). <br/><br/> <span
     * class="tablenote"> <strong>Note:</strong> This shipping type cannot be set via API, but it is automatically set by eBay when a buyer selects the FreightQuote.com option on the US eBay website. <br/><br/> For details about types of freight shipping
     * that you can specify via API, see <a href="http://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying Freight Shipping</a> in the eBay Features Guide. </span>
     * @return string 'Freight'
     */
    const VALUE_FREIGHT = 'Freight';
    /**
     * Constant for value 'Free'
     * Meta information extracted from the WSDL
     * - documentation: Free shipping. This field is output-only so if you want to use AddItem to specify a free Shipping Cost, specify 0 in Item.ShippingDetails.ShippingServiceOptions.ShippingServiceCost.
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'NotSpecified'
     * Meta information extracted from the WSDL
     * - documentation: The seller did not specify the shipping type.
     * @return string 'NotSpecified'
     */
    const VALUE_NOT_SPECIFIED = 'NotSpecified';
    /**
     * Constant for value 'FlatDomesticCalculatedInternational'
     * Meta information extracted from the WSDL
     * - documentation: The seller specified one or more flat domestic shipping services and one or more calculated international shipping services.
     * @return string 'FlatDomesticCalculatedInternational'
     */
    const VALUE_FLAT_DOMESTIC_CALCULATED_INTERNATIONAL = 'FlatDomesticCalculatedInternational';
    /**
     * Constant for value 'CalculatedDomesticFlatInternational'
     * Meta information extracted from the WSDL
     * - documentation: The seller specified one or more calculated domestic shipping services and one or more flat international shipping services.
     * @return string 'CalculatedDomesticFlatInternational'
     */
    const VALUE_CALCULATED_DOMESTIC_FLAT_INTERNATIONAL = 'CalculatedDomesticFlatInternational';
    /**
     * Constant for value 'FreightFlat'
     * Meta information extracted from the WSDL
     * - documentation: Freight shipping model. Available only for the US, UK, AU, CA and CAFR sites, and only for domestic shipping. <code>FreightFlat</code> applies to shipping with carriers that are not affiliated with eBay. It is negotiated freight, not
     * a flat rate. Sellers negotiate the shipping cost with their chosen carrier and the buyer before completing the sale. FreightFlat shipping may be used when calculated shipping cannot be used due to the greater weight of the item. <br/><br/> For
     * details about freight shipping, see <a href="http://developer.ebay.com/devzone/guides/features-guide/default.html#development/Shipping-TypesCosts.html#SpecifyingFreightShipping">Specifying Freight Shipping</a> in the eBay Features Guide.
     * @return string 'FreightFlat'
     */
    const VALUE_FREIGHT_FLAT = 'FreightFlat';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FLAT
     * @uses self::VALUE_CALCULATED
     * @uses self::VALUE_FREIGHT
     * @uses self::VALUE_FREE
     * @uses self::VALUE_NOT_SPECIFIED
     * @uses self::VALUE_FLAT_DOMESTIC_CALCULATED_INTERNATIONAL
     * @uses self::VALUE_CALCULATED_DOMESTIC_FLAT_INTERNATIONAL
     * @uses self::VALUE_FREIGHT_FLAT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FLAT,
            self::VALUE_CALCULATED,
            self::VALUE_FREIGHT,
            self::VALUE_FREE,
            self::VALUE_NOT_SPECIFIED,
            self::VALUE_FLAT_DOMESTIC_CALCULATED_INTERNATIONAL,
            self::VALUE_CALCULATED_DOMESTIC_FLAT_INTERNATIONAL,
            self::VALUE_FREIGHT_FLAT,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
