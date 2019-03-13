<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VATDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to display details related to VAT (Value-Added Tax) and Business Seller features. <br> <br> <span class="tablenote"><b>Note:</b> VAT is not applicable to all countries, including the US. Sellers must be registered
 * as Business Sellers on the site they are selling on in order to use the Business Seller-related fields. </span>
 * @subpackage Structs
 */
class VATDetailsType extends AbstractStructBase
{
    /**
     * The BusinessSeller
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if set on the listing, and the person making the call owns the listing.
     * - minOccurs: 0
     * @var bool
     */
    public $BusinessSeller;
    /**
     * The RestrictedToBusiness
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if 'true', and the person making the call owns the listing. The 'Restricted to Business' feature can only be used by registered business sellers on the German, Austrian, and Swiss marketplaces, and only in
     * listing categories that support 'Business-to-Business' listings. In a 'Business-to-Business' listing, the seller restricts sales of their item to users registered on eBay as business users. <br><br> The <b>GetCategories</b> Trading API call can be
     * used by the seller (using the eBay marketplace's Site ID value) to see which categories support Business-to-Business listings. A <b>B2BVATEnabled</b> boolean field will be returned as <code>true</code> if a listing category supports
     * Business-to-Business listings.
     * - minOccurs: 0
     * @var bool
     */
    public $RestrictedToBusiness;
    /**
     * The VATPercent
     * Meta informations extracted from the WSDL
     * - documentation: This container shows the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing. <br/><br/> VAT is not applicable to all countries, including the US. Allowed VAT percentage
     * rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge, and they are responsible for charging the correct VAT rate. <br/><br/> If VAT is charged on a listing, the seller can choose to
     * print an invoice for the buyer that shows the item's net price, the VAT percentage rate, the VAT amount, and the total price. <br/><br/> This field is returned only if the listing is subject to VAT. <br> <br> <span class="tablenote"><b>Note:</b> The
     * float value input into an Add/Revise/Relist call can have up to three digits beyond the decimal point (e.g. 12.346). </span>
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * The VATSite
     * Meta informations extracted from the WSDL
     * - documentation: This string value is the Site ID value of the eBay Marketplace where the VAT is applicable and where the seller is registered as a Business Seller. <br/><br/> The eBay sites that support VAT (and their corresponding Site IDs) can be
     * found in the <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/IntlDiffs-B2BFields.html" target="_blank">Business Feature Field Differences</a> topic.
     * - minOccurs: 0
     * @var string
     */
    public $VATSite;
    /**
     * The VATID
     * Meta informations extracted from the WSDL
     * - documentation: This is the unique VAT identifier associated with the Business Seller's account. This field will only be returned to Business Sellers who own the specified listing. <br/><br/> Non-Business Sellers will not have a VAT identifier
     * associated with their account, so this field will never be returned for those users.
     * - minOccurs: 0
     * @var string
     */
    public $VATID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($businessSeller = null, $restrictedToBusiness = null, $vATPercent = null, $vATSite = null, $vATID = null, \DOMDocument $any = null)
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
    public function getBusinessSeller()
    {
        return $this->BusinessSeller;
    }
    /**
     * Set BusinessSeller value
     * @param bool $businessSeller
     * @return \macropage\ebaysdk\shopping\StructType\VATDetailsType
     */
    public function setBusinessSeller($businessSeller = null)
    {
        // validation for constraint: boolean
        if (!is_null($businessSeller) && !is_bool($businessSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($businessSeller)), __LINE__);
        }
        $this->BusinessSeller = $businessSeller;
        return $this;
    }
    /**
     * Get RestrictedToBusiness value
     * @return bool|null
     */
    public function getRestrictedToBusiness()
    {
        return $this->RestrictedToBusiness;
    }
    /**
     * Set RestrictedToBusiness value
     * @param bool $restrictedToBusiness
     * @return \macropage\ebaysdk\shopping\StructType\VATDetailsType
     */
    public function setRestrictedToBusiness($restrictedToBusiness = null)
    {
        // validation for constraint: boolean
        if (!is_null($restrictedToBusiness) && !is_bool($restrictedToBusiness)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($restrictedToBusiness)), __LINE__);
        }
        $this->RestrictedToBusiness = $restrictedToBusiness;
        return $this;
    }
    /**
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \macropage\ebaysdk\shopping\StructType\VATDetailsType
     */
    public function setVATPercent($vATPercent = null)
    {
        $this->VATPercent = $vATPercent;
        return $this;
    }
    /**
     * Get VATSite value
     * @return string|null
     */
    public function getVATSite()
    {
        return $this->VATSite;
    }
    /**
     * Set VATSite value
     * @param string $vATSite
     * @return \macropage\ebaysdk\shopping\StructType\VATDetailsType
     */
    public function setVATSite($vATSite = null)
    {
        // validation for constraint: string
        if (!is_null($vATSite) && !is_string($vATSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vATSite)), __LINE__);
        }
        $this->VATSite = $vATSite;
        return $this;
    }
    /**
     * Get VATID value
     * @return string|null
     */
    public function getVATID()
    {
        return $this->VATID;
    }
    /**
     * Set VATID value
     * @param string $vATID
     * @return \macropage\ebaysdk\shopping\StructType\VATDetailsType
     */
    public function setVATID($vATID = null)
    {
        // validation for constraint: string
        if (!is_null($vATID) && !is_string($vATID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vATID)), __LINE__);
        }
        $this->VATID = $vATID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\VATDetailsType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\VATDetailsType
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
     * @return \macropage\ebaysdk\shopping\StructType\VATDetailsType
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
