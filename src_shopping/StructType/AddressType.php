<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to provide details about a Business Seller's address.
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: User's name for the address. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated and no longer returned.
     * - minOccurs: 0
     * @var string
     */
    public $Street;
    /**
     * The Street1
     * Meta informations extracted from the WSDL
     * - documentation: The first line of the user's street address. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Street1;
    /**
     * The Street2
     * Meta informations extracted from the WSDL
     * - documentation: The second line of the user's street address (such as an apartment number or suite number). Returned if the user specified a second street value for their address. In case of <b>Item.SellerContactDetails</b>, <b>Street2</b> can be
     * used to provide City, Address, State, and Zip code (if applicable). <br>
     * - minOccurs: 0
     * @var string
     */
    public $Street2;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the user's city. <br>
     * - minOccurs: 0
     * @var string
     */
    public $CityName;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated and no longer returned.
     * - minOccurs: 0
     * @var string
     */
    public $County;
    /**
     * The StateOrProvince
     * Meta informations extracted from the WSDL
     * - documentation: The state or province of the user's address. Whether it's a state or a province will depend on the region and/or country. <br>
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvince;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the country associated with the Business Seller's address. Also applicable to Half.com (for GetOrders).
     * - minOccurs: 0
     * @var string
     */
    public $CountryName;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - documentation: User's primary phone number. This may return a value of <code>Invalid Request</code> if you are not authorized to see the user's phone number. <br/><br/> In the US, the area code (3 digits), the prefix (3 digits), the line number (4
     * digits), and phone extension (if specified by the user) are returned in this field. The extension can be one or more digits. Non-breaking spaces are used as delimiters between these phone number components. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * The PhoneCountryPrefix
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneCountryPrefix;
    /**
     * The PhoneAreaOrCityCode
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneAreaOrCityCode;
    /**
     * The PhoneLocalNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneLocalNumber;
    /**
     * The Phone2CountryPrefix
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Phone2CountryPrefix;
    /**
     * The Phone2AreaOrCityCode
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Phone2AreaOrCityCode;
    /**
     * The Phone2LocalNumber
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Phone2LocalNumber;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: The postal code asssociated with the Business Seller's address. <br>
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The AddressID
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AddressID;
    /**
     * The ExternalAddressID
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalAddressID;
    /**
     * The InternationalName
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalName;
    /**
     * The InternationalStateAndCity
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalStateAndCity;
    /**
     * The InternationalStreet
     * Meta informations extracted from the WSDL
     * - documentation: This field is no deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalStreet;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: The Business Seller's company name. This field is only returned if defined and available.
     * - minOccurs: 0
     * @var string
     */
    public $CompanyName;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - documentation: The first name of the Business Seller.
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - documentation: The last name of the Business Seller.
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setName()
     * @uses AddressType::setStreet()
     * @uses AddressType::setStreet1()
     * @uses AddressType::setStreet2()
     * @uses AddressType::setCityName()
     * @uses AddressType::setCounty()
     * @uses AddressType::setStateOrProvince()
     * @uses AddressType::setCountryName()
     * @uses AddressType::setPhone()
     * @uses AddressType::setPhoneCountryPrefix()
     * @uses AddressType::setPhoneAreaOrCityCode()
     * @uses AddressType::setPhoneLocalNumber()
     * @uses AddressType::setPhone2CountryPrefix()
     * @uses AddressType::setPhone2AreaOrCityCode()
     * @uses AddressType::setPhone2LocalNumber()
     * @uses AddressType::setPostalCode()
     * @uses AddressType::setAddressID()
     * @uses AddressType::setExternalAddressID()
     * @uses AddressType::setInternationalName()
     * @uses AddressType::setInternationalStateAndCity()
     * @uses AddressType::setInternationalStreet()
     * @uses AddressType::setCompanyName()
     * @uses AddressType::setFirstName()
     * @uses AddressType::setLastName()
     * @uses AddressType::setAny()
     * @param string $name
     * @param string $street
     * @param string $street1
     * @param string $street2
     * @param string $cityName
     * @param string $county
     * @param string $stateOrProvince
     * @param string $countryName
     * @param string $phone
     * @param string $phoneCountryPrefix
     * @param string $phoneAreaOrCityCode
     * @param string $phoneLocalNumber
     * @param string $phone2CountryPrefix
     * @param string $phone2AreaOrCityCode
     * @param string $phone2LocalNumber
     * @param string $postalCode
     * @param string $addressID
     * @param string $externalAddressID
     * @param string $internationalName
     * @param string $internationalStateAndCity
     * @param string $internationalStreet
     * @param string $companyName
     * @param string $firstName
     * @param string $lastName
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $street = null, $street1 = null, $street2 = null, $cityName = null, $county = null, $stateOrProvince = null, $countryName = null, $phone = null, $phoneCountryPrefix = null, $phoneAreaOrCityCode = null, $phoneLocalNumber = null, $phone2CountryPrefix = null, $phone2AreaOrCityCode = null, $phone2LocalNumber = null, $postalCode = null, $addressID = null, $externalAddressID = null, $internationalName = null, $internationalStateAndCity = null, $internationalStreet = null, $companyName = null, $firstName = null, $lastName = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setStreet($street)
            ->setStreet1($street1)
            ->setStreet2($street2)
            ->setCityName($cityName)
            ->setCounty($county)
            ->setStateOrProvince($stateOrProvince)
            ->setCountryName($countryName)
            ->setPhone($phone)
            ->setPhoneCountryPrefix($phoneCountryPrefix)
            ->setPhoneAreaOrCityCode($phoneAreaOrCityCode)
            ->setPhoneLocalNumber($phoneLocalNumber)
            ->setPhone2CountryPrefix($phone2CountryPrefix)
            ->setPhone2AreaOrCityCode($phone2AreaOrCityCode)
            ->setPhone2LocalNumber($phone2LocalNumber)
            ->setPostalCode($postalCode)
            ->setAddressID($addressID)
            ->setExternalAddressID($externalAddressID)
            ->setInternationalName($internationalName)
            ->setInternationalStateAndCity($internationalStateAndCity)
            ->setInternationalStreet($internationalStreet)
            ->setCompanyName($companyName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get Street1 value
     * @return string|null
     */
    public function getStreet1()
    {
        return $this->Street1;
    }
    /**
     * Set Street1 value
     * @param string $street1
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setStreet1($street1 = null)
    {
        // validation for constraint: string
        if (!is_null($street1) && !is_string($street1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street1)), __LINE__);
        }
        $this->Street1 = $street1;
        return $this;
    }
    /**
     * Get Street2 value
     * @return string|null
     */
    public function getStreet2()
    {
        return $this->Street2;
    }
    /**
     * Set Street2 value
     * @param string $street2
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setStreet2($street2 = null)
    {
        // validation for constraint: string
        if (!is_null($street2) && !is_string($street2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street2)), __LINE__);
        }
        $this->Street2 = $street2;
        return $this;
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get County value
     * @return string|null
     */
    public function getCounty()
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param string $county
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setCounty($county = null)
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($county)), __LINE__);
        }
        $this->County = $county;
        return $this;
    }
    /**
     * Get StateOrProvince value
     * @return string|null
     */
    public function getStateOrProvince()
    {
        return $this->StateOrProvince;
    }
    /**
     * Set StateOrProvince value
     * @param string $stateOrProvince
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setStateOrProvince($stateOrProvince = null)
    {
        // validation for constraint: string
        if (!is_null($stateOrProvince) && !is_string($stateOrProvince)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateOrProvince)), __LINE__);
        }
        $this->StateOrProvince = $stateOrProvince;
        return $this;
    }
    /**
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setCountryName($countryName = null)
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryName)), __LINE__);
        }
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Get PhoneCountryPrefix value
     * @return string|null
     */
    public function getPhoneCountryPrefix()
    {
        return $this->PhoneCountryPrefix;
    }
    /**
     * Set PhoneCountryPrefix value
     * @param string $phoneCountryPrefix
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhoneCountryPrefix($phoneCountryPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($phoneCountryPrefix) && !is_string($phoneCountryPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneCountryPrefix)), __LINE__);
        }
        $this->PhoneCountryPrefix = $phoneCountryPrefix;
        return $this;
    }
    /**
     * Get PhoneAreaOrCityCode value
     * @return string|null
     */
    public function getPhoneAreaOrCityCode()
    {
        return $this->PhoneAreaOrCityCode;
    }
    /**
     * Set PhoneAreaOrCityCode value
     * @param string $phoneAreaOrCityCode
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhoneAreaOrCityCode($phoneAreaOrCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($phoneAreaOrCityCode) && !is_string($phoneAreaOrCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneAreaOrCityCode)), __LINE__);
        }
        $this->PhoneAreaOrCityCode = $phoneAreaOrCityCode;
        return $this;
    }
    /**
     * Get PhoneLocalNumber value
     * @return string|null
     */
    public function getPhoneLocalNumber()
    {
        return $this->PhoneLocalNumber;
    }
    /**
     * Set PhoneLocalNumber value
     * @param string $phoneLocalNumber
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhoneLocalNumber($phoneLocalNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneLocalNumber) && !is_string($phoneLocalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneLocalNumber)), __LINE__);
        }
        $this->PhoneLocalNumber = $phoneLocalNumber;
        return $this;
    }
    /**
     * Get Phone2CountryPrefix value
     * @return string|null
     */
    public function getPhone2CountryPrefix()
    {
        return $this->Phone2CountryPrefix;
    }
    /**
     * Set Phone2CountryPrefix value
     * @param string $phone2CountryPrefix
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhone2CountryPrefix($phone2CountryPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($phone2CountryPrefix) && !is_string($phone2CountryPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone2CountryPrefix)), __LINE__);
        }
        $this->Phone2CountryPrefix = $phone2CountryPrefix;
        return $this;
    }
    /**
     * Get Phone2AreaOrCityCode value
     * @return string|null
     */
    public function getPhone2AreaOrCityCode()
    {
        return $this->Phone2AreaOrCityCode;
    }
    /**
     * Set Phone2AreaOrCityCode value
     * @param string $phone2AreaOrCityCode
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhone2AreaOrCityCode($phone2AreaOrCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($phone2AreaOrCityCode) && !is_string($phone2AreaOrCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone2AreaOrCityCode)), __LINE__);
        }
        $this->Phone2AreaOrCityCode = $phone2AreaOrCityCode;
        return $this;
    }
    /**
     * Get Phone2LocalNumber value
     * @return string|null
     */
    public function getPhone2LocalNumber()
    {
        return $this->Phone2LocalNumber;
    }
    /**
     * Set Phone2LocalNumber value
     * @param string $phone2LocalNumber
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhone2LocalNumber($phone2LocalNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phone2LocalNumber) && !is_string($phone2LocalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone2LocalNumber)), __LINE__);
        }
        $this->Phone2LocalNumber = $phone2LocalNumber;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get AddressID value
     * @return string|null
     */
    public function getAddressID()
    {
        return $this->AddressID;
    }
    /**
     * Set AddressID value
     * @param string $addressID
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setAddressID($addressID = null)
    {
        // validation for constraint: string
        if (!is_null($addressID) && !is_string($addressID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressID)), __LINE__);
        }
        $this->AddressID = $addressID;
        return $this;
    }
    /**
     * Get ExternalAddressID value
     * @return string|null
     */
    public function getExternalAddressID()
    {
        return $this->ExternalAddressID;
    }
    /**
     * Set ExternalAddressID value
     * @param string $externalAddressID
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setExternalAddressID($externalAddressID = null)
    {
        // validation for constraint: string
        if (!is_null($externalAddressID) && !is_string($externalAddressID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalAddressID)), __LINE__);
        }
        $this->ExternalAddressID = $externalAddressID;
        return $this;
    }
    /**
     * Get InternationalName value
     * @return string|null
     */
    public function getInternationalName()
    {
        return $this->InternationalName;
    }
    /**
     * Set InternationalName value
     * @param string $internationalName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setInternationalName($internationalName = null)
    {
        // validation for constraint: string
        if (!is_null($internationalName) && !is_string($internationalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalName)), __LINE__);
        }
        $this->InternationalName = $internationalName;
        return $this;
    }
    /**
     * Get InternationalStateAndCity value
     * @return string|null
     */
    public function getInternationalStateAndCity()
    {
        return $this->InternationalStateAndCity;
    }
    /**
     * Set InternationalStateAndCity value
     * @param string $internationalStateAndCity
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setInternationalStateAndCity($internationalStateAndCity = null)
    {
        // validation for constraint: string
        if (!is_null($internationalStateAndCity) && !is_string($internationalStateAndCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalStateAndCity)), __LINE__);
        }
        $this->InternationalStateAndCity = $internationalStateAndCity;
        return $this;
    }
    /**
     * Get InternationalStreet value
     * @return string|null
     */
    public function getInternationalStreet()
    {
        return $this->InternationalStreet;
    }
    /**
     * Set InternationalStreet value
     * @param string $internationalStreet
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setInternationalStreet($internationalStreet = null)
    {
        // validation for constraint: string
        if (!is_null($internationalStreet) && !is_string($internationalStreet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internationalStreet)), __LINE__);
        }
        $this->InternationalStreet = $internationalStreet;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param string $companyName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\AddressType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
