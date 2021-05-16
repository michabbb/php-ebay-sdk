<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayPLUSPreferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a country where a specified seller is eligible to offer eBay Plus on listings, as well as the seller's opt-in status and listing preference for that country. <br/><br/> eBay Plus is a premium account option
 * for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery
 * of those items. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a
 * listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus. </span> For more details about eBay Plus, see <a href="../../../../guides/features-guide/default.html#development/Feature-eBayPlus.html">Offering eBay
 * Plus</a>.
 * @subpackage Structs
 */
class EBayPLUSPreferenceType extends AbstractStructBase
{
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: An ISO 3166 standard two-letter code that identifies a country where the seller is eligible to offer eBay Plus on fixed price listings. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Currently, eBay Plus is available only
     * to buyers in Germany and Australia. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The OptInStatus
     * Meta information extracted from the WSDL
     * - documentation: A value of <code>true</code> indicates that the seller has opted in to eBay Plus for listings in the specified country.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OptInStatus = null;
    /**
     * The ListingPreference
     * Meta information extracted from the WSDL
     * - documentation: A value of <code>true</code> indicates that if <strong>OptInStatus</strong> is also <code>true</code>, the seller will offer eBay Plus by default for new listings in the specified country. If this field's value is <code>false</code>
     * (and <strong>OptInStatus</strong> is <code>true</code>), the seller will offer eBay Plus on a listing by listing basis in the specified country.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ListingPreference = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for eBayPLUSPreferenceType
     * @uses EBayPLUSPreferenceType::setCountry()
     * @uses EBayPLUSPreferenceType::setOptInStatus()
     * @uses EBayPLUSPreferenceType::setListingPreference()
     * @uses EBayPLUSPreferenceType::setAny()
     * @param string $country
     * @param bool $optInStatus
     * @param bool $listingPreference
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $country = null, ?bool $optInStatus = null, ?bool $listingPreference = null, $any = null)
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
    public function getCountry(): ?string
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $country
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CountryCodeType', is_array($country) ? implode(', ', $country) : var_export($country, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Country = $country;
        
        return $this;
    }
    /**
     * Get OptInStatus value
     * @return bool|null
     */
    public function getOptInStatus(): ?bool
    {
        return $this->OptInStatus;
    }
    /**
     * Set OptInStatus value
     * @param bool $optInStatus
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
     */
    public function setOptInStatus(?bool $optInStatus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($optInStatus) && !is_bool($optInStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optInStatus, true), gettype($optInStatus)), __LINE__);
        }
        $this->OptInStatus = $optInStatus;
        
        return $this;
    }
    /**
     * Get ListingPreference value
     * @return bool|null
     */
    public function getListingPreference(): ?bool
    {
        return $this->ListingPreference;
    }
    /**
     * Set ListingPreference value
     * @param bool $listingPreference
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
     */
    public function setListingPreference(?bool $listingPreference = null): self
    {
        // validation for constraint: boolean
        if (!is_null($listingPreference) && !is_bool($listingPreference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($listingPreference, true), gettype($listingPreference)), __LINE__);
        }
        $this->ListingPreference = $listingPreference;
        
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
     * @return \macropage\ebaysdk\trading\StructType\EBayPLUSPreferenceType
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
