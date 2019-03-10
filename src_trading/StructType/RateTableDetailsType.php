<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateTableDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to reference a seller's specific domestic and/or international shipping rate tables. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service
 * (e.g. economy, standard, expedite, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to
 * Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others. <br><br> Sellers configure domestic,
 * international, and regional shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables, the shipping cost type must be flat-rate. <br><br> For domestic shipping rate tables, the three supported domestic regions are Alaska &
 * Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has
 * the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. <br><br> For international shipping rate tables, specific rates may be set up for any and all geographical regions and individual
 * countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping. <br/><br/> <span
 * class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, UK, Germany, Canada (English and French), and Italy sites.
 * For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b>
 * and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and
 * <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new
 * shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
 * @subpackage Structs
 */
class RateTableDetailsType extends AbstractStructBase
{
    /**
     * The DomesticRateTable
     * Meta informations extracted from the WSDL
     * - documentation: This field is used in an Add/Revise/Relist/Verify call to apply the domestic shipping rate table to the listing. Domestic rate tables can be used only for items listed on the eBay US, Australia, UK, Germany, Canada (English and
     * French), and Italy sites. <br><br> In all cases, sellers pass in a string value of <code>Default</code> to apply the domestic shipping rate table. The shipping rates and/or surcharges set up in the domestic shipping rate table will only be applicable
     * based on the location of the buyer, and if that shipping service level is covered in one of the specified shipping service options in the listing. Basically, domestic shipping costs and surcharges are set in one or more <b>ShippingServiceOptions</b>
     * containers in the listing, and based on the settings and costs in the domestic shipping rate table, these shipping costs and/or surcharges may be overridden based on the buyer's location. For example, if the buyer lives in Alaska, and the domestic
     * shipping rate table has one or more shipping rates set up for the <em>Alaska & Hawaii</em> domestic region, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>ShippingServiceOptions</b> containers.
     * <br><br> If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTable /&gt;</code> <br><br> This field is returned in the 'Get' calls if a
     * domestic rate table is being applied to the listing, and it is only returned for the seller who listed the item. <br/><br/> <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate
     * tables (up to 40 per seller account) has rolled out to the US, Australia, UK, Germany, Canada (English and French), and Italy sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be
     * set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value.
     * Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and
     * <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate
     * tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var string
     */
    public $DomesticRateTable;
    /**
     * The InternationalRateTable
     * Meta informations extracted from the WSDL
     * - documentation: This field is used in an Add/Revise/Relist/Verify call to apply the international shipping rate table to the listing. Domestic rate tables can be used only for items listed on the eBay US, UK, and DE sites. <br><br> In all cases,
     * sellers pass in a string value of <code>Default</code> to apply the international shipping rate table. The shipping rates set up in the international shipping rate table will only be applicable based on the location of the buyer, and if that shipping
     * service level is covered in one of the specified international shipping service options in the listing. Basically, international shipping costs are set in one or more <b>InternationalShippingServiceOption</b> containers in the listing, and based on
     * the settings and costs in the international shipping rate table, these shipping costs may be overridden based on the buyer's location. For example, if the buyer lives in Argentina, and the international shipping rate table has one or more shipping
     * rates set up for the country of <em>Argentina</em>, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>InternationalShippingServiceOption</b> containers. <br><br> If a seller is revising or
     * relisting an item, the international shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTable /&gt;</code> <br><br> This field is returned in the 'Get' calls if an international rate table is
     * being applied to the listing, and it is only returned for the seller who listed the item. <br><br> <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller
     * account) has rolled out to the US, Australia, UK, Germany, Canada (English and French), and Italy sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller. Until the
     * seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is
     * updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not
     * work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all
     * domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var string
     */
    public $InternationalRateTable;
    /**
     * The DomesticRateTableId
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b>This field is only available for sellers on the US, Australia, UK, Germany, Canada (English and French), and Italy sites. The unique shipping rate identifiers that will be passed into this field
     * can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay. </span> <br>
     * This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized domestic shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate table. If
     * the <b>DomesticRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will occur. <br><br>
     * In domestic shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (region/state/province) and shipping service level (one-day, expedited, standard, economy in US). In addition to setting one flat rate
     * based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. <br><br> If the seller is using the Revise or Relist call, they
     * must include the <b>DomesticRateTableId</b> field or the domestic shipping rate table currently being applied to the listing will be unassociated from the listing. If they want to continue using the same domestic shipping rate table, the seller will
     * pass in this identifier. The seller can also change the domestic shipping rate table by passing in the identifier for a different domestic shipping rate table. <br><br> If a seller is revising or relisting an item, the domestic shipping rate table
     * can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTableId /&gt;</code> <br><br> This field is returned in the 'Get' calls if a customized domestic rate table is being applied to the listing, and it is only returned
     * for the seller who listed the item. <br><br> <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, UK,
     * Germany, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the
     * seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be
     * required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping
     * business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska &
     * Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var string
     */
    public $DomesticRateTableId;
    /**
     * The InternationalRateTableId
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b>This field is only available to sellers on the US, Australia, UK, Germany, Canada (English and French), and Italy sites. The unique shipping rate identifiers that will be passed into this field
     * can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay. </span> <br>
     * This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized international shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate
     * table. If the <b>InternationalRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will
     * occur. <br><br> In international shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (continent/region/country) and shipping service level (expedited, standard, economy in US). In addition to setting
     * one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package. Unlike domestic shipping, sellers cannot add a surcharge for international shipping.
     * <br><br> If the seller is using the Revise or Relist call, they must include the <b>InternationalRateTableId</b> field or the international shipping rate table currently being applied to the listing will be unassociated from the listing. If they want
     * to continue using the same international shipping rate table, the seller will pass in this identifier. The seller can also change the international shipping rate table by passing in the identifier for a different international shipping rate table.
     * <br><br> If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTableId /&gt;</code> <br><br> This field is returned in the 'Get' calls if
     * a customized international rate table is being applied to the listing, and it is only returned for the seller who listed the item. <br/><br/> <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international
     * shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, UK, Germany, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller.
     * Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's
     * account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags
     * will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access
     * to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var string
     */
    public $InternationalRateTableId;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RateTableDetailsType
     * @uses RateTableDetailsType::setDomesticRateTable()
     * @uses RateTableDetailsType::setInternationalRateTable()
     * @uses RateTableDetailsType::setDomesticRateTableId()
     * @uses RateTableDetailsType::setInternationalRateTableId()
     * @uses RateTableDetailsType::setAny()
     * @param string $domesticRateTable
     * @param string $internationalRateTable
     * @param string $domesticRateTableId
     * @param string $internationalRateTableId
     * @param \DOMDocument $any
     */
    public function __construct($domesticRateTable = null, $internationalRateTable = null, $domesticRateTableId = null, $internationalRateTableId = null, \DOMDocument $any = null)
    {
        $this
            ->setDomesticRateTable($domesticRateTable)
            ->setInternationalRateTable($internationalRateTable)
            ->setDomesticRateTableId($domesticRateTableId)
            ->setInternationalRateTableId($internationalRateTableId)
            ->setAny($any);
    }
    /**
     * Get DomesticRateTable value
     * @return string|null
     */
    public function getDomesticRateTable()
    {
        return $this->DomesticRateTable;
    }
    /**
     * Set DomesticRateTable value
     * @param string $domesticRateTable
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setDomesticRateTable($domesticRateTable = null)
    {
        // validation for constraint: string
        if (!is_null($domesticRateTable) && !is_string($domesticRateTable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domesticRateTable)), __LINE__);
        }
        $this->DomesticRateTable = $domesticRateTable;
        return $this;
    }
    /**
     * Get InternationalRateTable value
     * @return string|null
     */
    public function getInternationalRateTable()
    {
        return $this->InternationalRateTable;
    }
    /**
     * Set InternationalRateTable value
     * @param string $internationalRateTable
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setInternationalRateTable($internationalRateTable = null)
    {
        // validation for constraint: string
        if (!is_null($internationalRateTable) && !is_string($internationalRateTable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalRateTable)), __LINE__);
        }
        $this->InternationalRateTable = $internationalRateTable;
        return $this;
    }
    /**
     * Get DomesticRateTableId value
     * @return string|null
     */
    public function getDomesticRateTableId()
    {
        return $this->DomesticRateTableId;
    }
    /**
     * Set DomesticRateTableId value
     * @param string $domesticRateTableId
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setDomesticRateTableId($domesticRateTableId = null)
    {
        // validation for constraint: string
        if (!is_null($domesticRateTableId) && !is_string($domesticRateTableId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domesticRateTableId)), __LINE__);
        }
        $this->DomesticRateTableId = $domesticRateTableId;
        return $this;
    }
    /**
     * Get InternationalRateTableId value
     * @return string|null
     */
    public function getInternationalRateTableId()
    {
        return $this->InternationalRateTableId;
    }
    /**
     * Set InternationalRateTableId value
     * @param string $internationalRateTableId
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setInternationalRateTableId($internationalRateTableId = null)
    {
        // validation for constraint: string
        if (!is_null($internationalRateTableId) && !is_string($internationalRateTableId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalRateTableId)), __LINE__);
        }
        $this->InternationalRateTableId = $internationalRateTableId;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RateTableDetailsType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
