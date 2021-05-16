<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateTableDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to reference a seller's specific domestic and/or international shipping rate tables. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service
 * (e.g. economy, standard, expedite, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to
 * Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others. <br><br> Sellers configure domestic,
 * international, and regional shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables, the shipping cost type must be flat-rate. <br><br> For domestic shipping rate tables, the three supported domestic regions are Alaska &
 * Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has
 * the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. <br><br> For international shipping rate tables, specific rates may be set up for any and all geographical regions and individual
 * countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping. <br/><br/> <span
 * class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites.
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
     * Meta information extracted from the WSDL
     * - documentation: This field is used in an Add/Revise/Relist/Verify call to apply the domestic shipping rate table to the listing. <br><br> In all cases, sellers pass in a string value of <code>Default</code> to apply the domestic shipping rate table.
     * The shipping rates and/or surcharges set up in the domestic shipping rate table will only be applicable based on the location of the buyer, and if that shipping service level is covered in one of the specified shipping service options in the listing.
     * Basically, domestic shipping costs and surcharges are set in one or more <b>ShippingServiceOptions</b> containers in the listing, and based on the settings and costs in the domestic shipping rate table, these shipping costs and/or surcharges may be
     * overridden based on the buyer's location. For example, if the buyer lives in Alaska, and the domestic shipping rate table has one or more shipping rates set up for the <em>Alaska & Hawaii</em> domestic region, the buyer will see these rates in the
     * View Item page and not the rates/costs that are defined in the <b>ShippingServiceOptions</b> containers. <br><br> If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty
     * tag: <code>&lt;DomesticRateTable /&gt;</code> <br><br> This field is returned in the 'Get' calls if a domestic rate table is being applied to the listing, and it is only returned for the seller who listed the item. <br/><br/> <span
     * class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites.
     * Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use
     * the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new
     * <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are
     * applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and
     * APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DomesticRateTable = null;
    /**
     * The InternationalRateTable
     * Meta information extracted from the WSDL
     * - documentation: This field is used in an Add/Revise/Relist/Verify call to apply the international shipping rate table to the listing. International shipping rate tables can be used only for items listed on the eBay US, UK, and DE sites. <br><br> In
     * all cases, sellers pass in a string value of <code>Default</code> to apply the international shipping rate table. The shipping rates set up in the international shipping rate table will only be applicable based on the location of the buyer, and if
     * that shipping service level is covered in one of the specified international shipping service options in the listing. Basically, international shipping costs are set in one or more <b>InternationalShippingServiceOption</b> containers in the listing,
     * and based on the settings and costs in the international shipping rate table, these shipping costs may be overridden based on the buyer's location. For example, if the buyer lives in Argentina, and the international shipping rate table has one or
     * more shipping rates set up for the country of <em>Argentina</em>, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>InternationalShippingServiceOption</b> containers. <br><br> If a seller is
     * revising or relisting an item, the international shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTable /&gt;</code> <br><br> This field is returned in the 'Get' calls if an international
     * rate table is being applied to the listing, and it is only returned for the seller who listed the item. <br><br> <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40
     * per seller account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller.
     * Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's
     * account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags
     * will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access
     * to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalRateTable = null;
    /**
     * The DomesticRateTableId
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b>This field is only available for sellers on the US, Australia, Canada (English and French), Italy, UK, and Germany sites. The unique shipping rate identifiers that will be passed into this field
     * can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay. </span> <br>
     * This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized domestic shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate table. If
     * the <b>DomesticRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will occur. <br><br>
     * In domestic shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (region/state/province) and shipping service level (one-day, expedited, standard, economy in US). In addition to setting one flat rate
     * based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead. <br><br> If the seller is using the Revise or Relist call, they
     * must include the <b>DomesticRateTableId</b> field or the domestic shipping rate table currently being applied to the listing will be unassociated from the listing. If they want to continue using the same domestic shipping rate table, the seller will
     * pass in this identifier. The seller can also change the domestic shipping rate table by passing in the identifier for a different domestic shipping rate table. <br><br> If a seller is revising or relisting an item, the domestic shipping rate table
     * can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTableId /&gt;</code> <br><br> This field is returned in the 'Get' calls if a customized domestic rate table is being applied to the listing, and it is only returned
     * for the seller who listed the item. <br><br> <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada
     * (English and French), Italy, UK, and Germany sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller
     * will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to
     * use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies
     * that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US
     * Protectorates, and APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DomesticRateTableId = null;
    /**
     * The InternationalRateTableId
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b>This field is only available to sellers on the US, Australia, Canada (English and French), Italy, UK, and Germany sites. The unique shipping rate identifiers that will be passed into this field
     * can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay. </span> <br>
     * This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized international shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate
     * table. If the <b>InternationalRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will
     * occur. <br><br> In international shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (continent/region/country) and shipping service level (expedited, standard, economy in US). In addition to setting
     * one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package. Unlike domestic shipping, sellers cannot add a surcharge for international shipping.
     * <br><br> If the seller is using the Revise or Relist call, they must include the <b>InternationalRateTableId</b> field or the international shipping rate table currently being applied to the listing will be unassociated from the listing. If they want
     * to continue using the same international shipping rate table, the seller will pass in this identifier. The seller can also change the international shipping rate table by passing in the identifier for a different international shipping rate table.
     * <br><br> If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTableId /&gt;</code> <br><br> This field is returned in the 'Get' calls if
     * a customized international rate table is being applied to the listing, and it is only returned for the seller who listed the item. <br/><br/> <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international
     * shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), Italy, UK, and Germany sites. For other sites, only one domestic and one international shipping rate table may be set up per seller.
     * Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's
     * account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags
     * will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access
     * to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalRateTableId = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $domesticRateTable = null, ?string $internationalRateTable = null, ?string $domesticRateTableId = null, ?string $internationalRateTableId = null, $any = null)
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
    public function getDomesticRateTable(): ?string
    {
        return $this->DomesticRateTable;
    }
    /**
     * Set DomesticRateTable value
     * @param string $domesticRateTable
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setDomesticRateTable(?string $domesticRateTable = null): self
    {
        // validation for constraint: string
        if (!is_null($domesticRateTable) && !is_string($domesticRateTable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domesticRateTable, true), gettype($domesticRateTable)), __LINE__);
        }
        $this->DomesticRateTable = $domesticRateTable;
        
        return $this;
    }
    /**
     * Get InternationalRateTable value
     * @return string|null
     */
    public function getInternationalRateTable(): ?string
    {
        return $this->InternationalRateTable;
    }
    /**
     * Set InternationalRateTable value
     * @param string $internationalRateTable
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setInternationalRateTable(?string $internationalRateTable = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalRateTable) && !is_string($internationalRateTable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalRateTable, true), gettype($internationalRateTable)), __LINE__);
        }
        $this->InternationalRateTable = $internationalRateTable;
        
        return $this;
    }
    /**
     * Get DomesticRateTableId value
     * @return string|null
     */
    public function getDomesticRateTableId(): ?string
    {
        return $this->DomesticRateTableId;
    }
    /**
     * Set DomesticRateTableId value
     * @param string $domesticRateTableId
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setDomesticRateTableId(?string $domesticRateTableId = null): self
    {
        // validation for constraint: string
        if (!is_null($domesticRateTableId) && !is_string($domesticRateTableId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domesticRateTableId, true), gettype($domesticRateTableId)), __LINE__);
        }
        $this->DomesticRateTableId = $domesticRateTableId;
        
        return $this;
    }
    /**
     * Get InternationalRateTableId value
     * @return string|null
     */
    public function getInternationalRateTableId(): ?string
    {
        return $this->InternationalRateTableId;
    }
    /**
     * Set InternationalRateTableId value
     * @param string $internationalRateTableId
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setInternationalRateTableId(?string $internationalRateTableId = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalRateTableId) && !is_string($internationalRateTableId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalRateTableId, true), gettype($internationalRateTableId)), __LINE__);
        }
        $this->InternationalRateTableId = $internationalRateTableId;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\RateTableDetailsType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
