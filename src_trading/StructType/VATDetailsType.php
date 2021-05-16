<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VATDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to set/display details related to VAT (Value-Added Tax) and Business Seller features. <br> <br> <span class="tablenote"><b>Note:</b> VAT is not applicable to all countries, including the US. Sellers must be
 * registered as Business Sellers on the site they are selling on in order to use the Business Seller-related fields. </span>
 * @subpackage Structs
 */
class VATDetailsType extends AbstractStructBase
{
    /**
     * The BusinessSeller
     * Meta information extracted from the WSDL
     * - documentation: This field should be included in an Add/Revise/Relist call and set to <code>true</code> if the seller is registered on the selling site as a Business Seller. This field must be included and set to <code>true</code> if the
     * <b>RestrictedToBusiness</b> field is also included and set to <code>true</code>. The <b>RestrictedToBusiness</b> field is used by German (Site ID 77), Austrian (Site ID 16), and Swiss (Site ID 193) sellers who wish to restrict sales of their item to
     * other users registered as business users. <br><br> This field is returned in 'Get' calls only if set on the listing, and the person making the call owns the listing. However, other Business Seller-related information will be returned to all users in
     * 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BusinessSeller = null;
    /**
     * The RestrictedToBusiness
     * Meta information extracted from the WSDL
     * - documentation: This field must be included in an Add/Revise/Relist call and set to <code>true</code> if a German (Site ID 77), Austrian (Site ID 16), or Swiss (Site ID 193) seller wishes to restrict sales of their item to other users registered on
     * eBay as business users. If this field is set as <code>true</code>, the <b>BusinessSeller</b> field must also be included and set to <code>true</code>. This feature is not available on any other eBay marketplaces. <br><br> This field can be included
     * and set to <code>true</code> only by Business Sellers registered on one of the three sites above, and only if the listing category supports Business-to-Business listings. The <b>GetCategories</b> call can be used by the seller (using one of the Site
     * IDs above) to see which categories support Business-to-Business listings. A <b>B2BVATEnabled</b> boolean field will be returned as <code>true</code> if a listing category supports Business-to-Business listings. <br><br> This field is returned in
     * 'Get' calls only if set on the listing, and the person making the call owns the listing. However, other Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b>
     * containers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RestrictedToBusiness = null;
    /**
     * The VATPercent
     * Meta information extracted from the WSDL
     * - documentation: This container is used in an Add/Revise/Relist call to set the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing. <br/><br/> VAT is not applicable to all countries,
     * including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge, and they are responsible for charging the correct VAT rate. <br/><br/> If VAT is charged
     * on a listing, the seller can choose to print an invoice for the buyer that shows the item's net price, the VAT percentage rate, the VAT amount, and the total price. <br/><br/> This field is returned in 'Get' calls only if the listing is subject to
     * VAT. <br> <br> <span class="tablenote"><b>Note:</b> The float value input into an Add/Revise/Relist call can have up to three digits beyond the decimal point (e.g. 12.346). </span>
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $VATPercent = null;
    /**
     * The VATSite
     * Meta information extracted from the WSDL
     * - documentation: This string value is the Site ID value of the eBay Marketplace where the VAT is applicable and where the seller is registered as a Business Seller. <br/><br/> The eBay sites that support VAT (and their corresponding Site IDs) can be
     * found in the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/IntlDiffs-B2BFields.html" target="_blank">Business Feature Field Differences</a> topic.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VATSite = null;
    /**
     * The VATID
     * Meta information extracted from the WSDL
     * - documentation: This is the unique VAT identifier associated with the Business Seller's account. This field will only be returned to Business Sellers who own the specified listing. <br/><br/> Non-Business Sellers will not have a VAT identifier
     * associated with their account, so this field will never be returned for those users.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VATID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VATDetailsType
     * @uses VATDetailsType::setBusinessSeller()
     * @uses VATDetailsType::setRestrictedToBusiness()
     * @uses VATDetailsType::setVATPercent()
     * @uses VATDetailsType::setVATSite()
     * @uses VATDetailsType::setVATID()
     * @uses VATDetailsType::setAny()
     * @param bool $businessSeller
     * @param bool $restrictedToBusiness
     * @param float $vATPercent
     * @param string $vATSite
     * @param string $vATID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $businessSeller = null, ?bool $restrictedToBusiness = null, ?float $vATPercent = null, ?string $vATSite = null, ?string $vATID = null, $any = null)
    {
        $this
            ->setBusinessSeller($businessSeller)
            ->setRestrictedToBusiness($restrictedToBusiness)
            ->setVATPercent($vATPercent)
            ->setVATSite($vATSite)
            ->setVATID($vATID)
            ->setAny($any);
    }
    /**
     * Get BusinessSeller value
     * @return bool|null
     */
    public function getBusinessSeller(): ?bool
    {
        return $this->BusinessSeller;
    }
    /**
     * Set BusinessSeller value
     * @param bool $businessSeller
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
     */
    public function setBusinessSeller(?bool $businessSeller = null): self
    {
        // validation for constraint: boolean
        if (!is_null($businessSeller) && !is_bool($businessSeller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($businessSeller, true), gettype($businessSeller)), __LINE__);
        }
        $this->BusinessSeller = $businessSeller;
        
        return $this;
    }
    /**
     * Get RestrictedToBusiness value
     * @return bool|null
     */
    public function getRestrictedToBusiness(): ?bool
    {
        return $this->RestrictedToBusiness;
    }
    /**
     * Set RestrictedToBusiness value
     * @param bool $restrictedToBusiness
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
     */
    public function setRestrictedToBusiness(?bool $restrictedToBusiness = null): self
    {
        // validation for constraint: boolean
        if (!is_null($restrictedToBusiness) && !is_bool($restrictedToBusiness)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restrictedToBusiness, true), gettype($restrictedToBusiness)), __LINE__);
        }
        $this->RestrictedToBusiness = $restrictedToBusiness;
        
        return $this;
    }
    /**
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent(): ?float
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
     */
    public function setVATPercent(?float $vATPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vATPercent) && !(is_float($vATPercent) || is_numeric($vATPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vATPercent, true), gettype($vATPercent)), __LINE__);
        }
        $this->VATPercent = $vATPercent;
        
        return $this;
    }
    /**
     * Get VATSite value
     * @return string|null
     */
    public function getVATSite(): ?string
    {
        return $this->VATSite;
    }
    /**
     * Set VATSite value
     * @param string $vATSite
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
     */
    public function setVATSite(?string $vATSite = null): self
    {
        // validation for constraint: string
        if (!is_null($vATSite) && !is_string($vATSite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vATSite, true), gettype($vATSite)), __LINE__);
        }
        $this->VATSite = $vATSite;
        
        return $this;
    }
    /**
     * Get VATID value
     * @return string|null
     */
    public function getVATID(): ?string
    {
        return $this->VATID;
    }
    /**
     * Set VATID value
     * @param string $vATID
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
     */
    public function setVATID(?string $vATID = null): self
    {
        // validation for constraint: string
        if (!is_null($vATID) && !is_string($vATID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vATID, true), gettype($vATID)), __LINE__);
        }
        $this->VATID = $vATID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
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
