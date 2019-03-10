<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VATDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for eBay's Business User features. A business seller can choose to offer an item exclusively to bidders and buyers that also represent businesses. Only applicable when the item is listed in a B2B-enabled category.
 * Currently, the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites support B2B business features.
 * @subpackage Structs
 */
class VATDetailsType extends AbstractStructBase
{
    /**
     * The BusinessSeller
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, this indicates that the seller is a business user and intends to use listing features that are offered to business users only. Applicable only to business sellers residing in Germany, Austria, UK, or Switzerland
     * who are listing in a B2B VAT-enabled category on the eBay Germany, Austria, UK, or Switzerland sites. <br/><br/> The seller must have a valid VAT ID registered with eBay. This must be set to <code>true</code> if <b>RestrictedToBusiness</b> is
     * <code>true</code>. It has no effect (and it's not returned) if <b>RestrictedToBusiness</b> is <code>false</code>. <br/><br/> If an item was not qualified as a business item when originally listed, but meets the conditions for business items when the
     * item is revised or relisted, the seller can convert the item to a business item by specifying the appropriate VAT details. <br/><br/> See the <a
     * href="http://developer.ebay.com/DevZone/guides/ebayfeatures/Development/Sites-IntlDiffsVATB2B.html#ModifyingBusinessItems"> eBay Features Guide</a> for more information and additional rules.
     * - minOccurs: 0
     * @var bool
     */
    public $BusinessSeller;
    /**
     * The RestrictedToBusiness
     * Meta informations extracted from the WSDL
     * - documentation: If <code>true</code>, this indicates that the seller elects to offer the item exclusively to business users. If <code>false</code> (or not returned), this indicates that the seller elects to offer the item to all users. Applicable
     * only to business sellers residing in Germany, Austria, UK, or Switzerland who are listing in a B2B VAT-enabled category on the eBay Germany, Austria, UK, or Switzerland sites. If this argument is <code>true</code>, the seller must have a valid VAT-ID
     * registered with eBay, and <b>BusinessSeller</b> must also be <code>true</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $RestrictedToBusiness;
    /**
     * The VATPercent
     * Meta informations extracted from the WSDL
     * - documentation: VAT (Value Add Tax) rate for the item, if any. When the <b>VATPercent</b> is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's
     * net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. <br/><br/> To specify a
     * <b>VATPercent</b>, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max applicable length is 6 characters, including the decimal (e.g., 12.345). The scale is 3 decimal places. (If you pass in
     * 12.3456, eBay may round up the value to 12.346.) <br/><br/> <span class="tablenote"><b>Note: </b> The View Item page may display the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored. </span>
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * The VATSite
     * Meta informations extracted from the WSDL
     * - documentation: Displays the <b>VatSite</b> Id of the seller (in a business card format) as part of the data returned in the <b>GetItem</b> call if the seller's <b>SellerBusinessCodeType</b> is set to <code>Commercial</code>.
     * - minOccurs: 0
     * @var string
     */
    public $VATSite;
    /**
     * The VATID
     * Meta informations extracted from the WSDL
     * - documentation: Displays the <b>VatSite</b> Id of the seller (in a business card format) as part of the data returned in the <b>GetItem</b> call if the seller's <b>SellerBusinessCodeType</b> is set to <code>Commercial</code>.
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
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
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
     * @uses \macropage\ebaysdk\trading\StructType\VATDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\VATDetailsType
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
