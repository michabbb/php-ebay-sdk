<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayPLUSPreferenceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about a country where a specified seller is eligible to offer eBay Plus on listings, as well as the seller's opt-in status and listing preference for that country. <br/><br/> eBay Plus is a premium account option
 * for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery
 * of those items. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany (DE). </span> For more details about eBay Plus, see <a
 * href="../../../../guides/ebayfeatures/Development/Feature-eBayPlus.html">Offering eBay Plus</a>.
 * @subpackage Structs
 */
class EBayPLUSPreferenceType extends AbstractStructBase
{
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - documentation: An ISO 3166 standard two-letter code that identifies a country where the seller is eligible to offer eBay Plus on fixed price listings. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Currently, eBay Plus is available only
     * to buyers in Germany (<code>DE</code>). </span>
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The OptInStatus
     * Meta informations extracted from the WSDL
     * - documentation: A value of <code>true</code> indicates that the seller has opted in to eBay Plus for listings in the specified country.
     * - minOccurs: 0
     * @var bool
     */
    public $OptInStatus;
    /**
     * The ListingPreference
     * Meta informations extracted from the WSDL
     * - documentation: A value of <code>true</code> indicates that if <strong>OptInStatus</strong> is also <code>true</code>, the seller will offer eBay Plus by default for new listings in the specified country. If this field's value is <code>false</code>
     * (and <strong>OptInStatus</strong> is <code>true</code>), the seller will offer eBay Plus on a listing by listing basis in the specified country.
     * - minOccurs: 0
     * @var bool
     */
    public $ListingPreference;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for eBayPLUSPreferenceType
     * @uses EBayPLUSPreferenceType::setCountry()
     * @uses EBayPLUSPreferenceType::setOptInStatus()
     * @uses EBayPLUSPreferenceType::setListingPreference()
     * @uses EBayPLUSPreferenceType::setAny()
     * @param string $country
     * @param bool $optInStatus
     * @param bool $listingPreference
     * @param \DOMDocument $any
     */
    public function __construct($country = null, $optInStatus = null, $listingPreference = null, \DOMDocument $any = null)
    {
        $this
            ->setCountry($country)
            ->setOptInStatus($optInStatus)
            ->setListingPreference($listingPreference)
            ->setAny($any);
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $country
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
     */
    public function setCountry($country = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($country)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $country, implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get OptInStatus value
     * @return bool|null
     */
    public function getOptInStatus()
    {
        return $this->OptInStatus;
    }
    /**
     * Set OptInStatus value
     * @param bool $optInStatus
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
     */
    public function setOptInStatus($optInStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($optInStatus) && !is_bool($optInStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($optInStatus)), __LINE__);
        }
        $this->OptInStatus = $optInStatus;
        return $this;
    }
    /**
     * Get ListingPreference value
     * @return bool|null
     */
    public function getListingPreference()
    {
        return $this->ListingPreference;
    }
    /**
     * Set ListingPreference value
     * @param bool $listingPreference
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
     */
    public function setListingPreference($listingPreference = null)
    {
        // validation for constraint: boolean
        if (!is_null($listingPreference) && !is_bool($listingPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($listingPreference)), __LINE__);
        }
        $this->ListingPreference = $listingPreference;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
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
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
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
