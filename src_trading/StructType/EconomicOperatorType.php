<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EconomicOperatorType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> Economic Operator and its associated fields have been deprecated for the Add/Revise/Relist/Verify and GetItem family of calls and will be decommissioned on October 21, 2024. It has been replaced
 * by the <b>Manufacturer</b> and <b>ResponsiblePersons</b> containers. Economic Operator related fields should no longer be used for the Add/Revise/Relist and VerifyItem family of calls. As it is currently still supported, Economic Operator-related
 * fields will be returned if applicable for the GetItem call. </span> Type that provides required Economic Operator information about the manufacturer and/or supplier of the item. The EO is a corporate entity that is related to, has some responsibility
 * for, the product being listed for sale. For additional information, see <a href = "https://www.ebay.com/help/selling/selling/CE-mark-EU?id=5225#operator" target="_blank">What is an economic operator?</a>.
 * @subpackage Structs
 */
class EconomicOperatorType extends AbstractStructBase
{
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - documentation: The company name of the registered Economic Operator.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyName = null;
    /**
     * The Street1
     * Meta information extracted from the WSDL
     * - documentation: The first line of the registered Economic Operator's street address.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street1 = null;
    /**
     * The Street2
     * Meta information extracted from the WSDL
     * - documentation: The second line, if any, of the registered Economic Operator's street address. This field is not always used, but can be used for 'Suite Number' or 'Apt Number'.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street2 = null;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - documentation: The city of the registered Economic Operator's street address.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CityName = null;
    /**
     * The StateOrProvince
     * Meta information extracted from the WSDL
     * - documentation: The state or province of the registered Economic Operator's street address.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StateOrProvince = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: The postal code of the registered Economic Operator's street address.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: This defines the list of valid country codes, adapted from http://www.iso.org/iso/country_codes, ISO 3166-1 country code. List elements take the following form to identify a two-letter code with a short name in English, a three-digit
     * code, and a three-letter code: For example, the entry for Japan includes Japan, 392, JPN. Short codes provide uniform recognition, avoiding language-dependent country names. The number code is helpful where Latin script may be problematic. Not all
     * listed codes are universally recognized as countries, for example: code AQ is Antarctica, 010, ATA
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - documentation: The registered Economic Operator's business phone number.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: The registered Economic Operator's business email address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for EconomicOperatorType
     * @uses EconomicOperatorType::setCompanyName()
     * @uses EconomicOperatorType::setStreet1()
     * @uses EconomicOperatorType::setStreet2()
     * @uses EconomicOperatorType::setCityName()
     * @uses EconomicOperatorType::setStateOrProvince()
     * @uses EconomicOperatorType::setPostalCode()
     * @uses EconomicOperatorType::setCountry()
     * @uses EconomicOperatorType::setPhone()
     * @uses EconomicOperatorType::setEmail()
     * @uses EconomicOperatorType::setAny()
     * @param string $companyName
     * @param string $street1
     * @param string $street2
     * @param string $cityName
     * @param string $stateOrProvince
     * @param string $postalCode
     * @param string $country
     * @param string $phone
     * @param string $email
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $companyName = null, ?string $street1 = null, ?string $street2 = null, ?string $cityName = null, ?string $stateOrProvince = null, ?string $postalCode = null, ?string $country = null, ?string $phone = null, ?string $email = null, $any = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setStreet1($street1)
            ->setStreet2($street2)
            ->setCityName($cityName)
            ->setStateOrProvince($stateOrProvince)
            ->setPostalCode($postalCode)
            ->setCountry($country)
            ->setPhone($phone)
            ->setEmail($email)
            ->setAny($any);
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        
        return $this;
    }
    /**
     * Get Street1 value
     * @return string|null
     */
    public function getStreet1(): ?string
    {
        return $this->Street1;
    }
    /**
     * Set Street1 value
     * @param string $street1
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
     */
    public function setStreet1(?string $street1 = null): self
    {
        // validation for constraint: string
        if (!is_null($street1) && !is_string($street1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street1, true), gettype($street1)), __LINE__);
        }
        $this->Street1 = $street1;
        
        return $this;
    }
    /**
     * Get Street2 value
     * @return string|null
     */
    public function getStreet2(): ?string
    {
        return $this->Street2;
    }
    /**
     * Set Street2 value
     * @param string $street2
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
     */
    public function setStreet2(?string $street2 = null): self
    {
        // validation for constraint: string
        if (!is_null($street2) && !is_string($street2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street2, true), gettype($street2)), __LINE__);
        }
        $this->Street2 = $street2;
        
        return $this;
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
     */
    public function setCityName(?string $cityName = null): self
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        
        return $this;
    }
    /**
     * Get StateOrProvince value
     * @return string|null
     */
    public function getStateOrProvince(): ?string
    {
        return $this->StateOrProvince;
    }
    /**
     * Set StateOrProvince value
     * @param string $stateOrProvince
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
     */
    public function setStateOrProvince(?string $stateOrProvince = null): self
    {
        // validation for constraint: string
        if (!is_null($stateOrProvince) && !is_string($stateOrProvince)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stateOrProvince, true), gettype($stateOrProvince)), __LINE__);
        }
        $this->StateOrProvince = $stateOrProvince;
        
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
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
     * Get Phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType
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
