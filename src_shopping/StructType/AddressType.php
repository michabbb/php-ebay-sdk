<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide details about a Business Seller's address.
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name associated with the Business Seller. This field is only returned if defined and available. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated and no longer returned. It has been replaced by the <b>Street1</b> and <b>Street2</b> fields.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street = null;
    /**
     * The Street1
     * Meta information extracted from the WSDL
     * - documentation: The first line of the Business Seller's street address. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street1 = null;
    /**
     * The Street2
     * Meta information extracted from the WSDL
     * - documentation: The second line of the Business Seller's street address (such as an apartment number or suite number). Returned if the Business Seller used the second line available for a street address. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street2 = null;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - documentation: The name of the Business Seller's city. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CityName = null;
    /**
     * The County
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated and no longer returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $County = null;
    /**
     * The StateOrProvince
     * Meta information extracted from the WSDL
     * - documentation: The state or province of the Business Seller's address. States and/or provinces are not applicable for every country. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StateOrProvince = null;
    /**
     * The CountryName
     * Meta information extracted from the WSDL
     * - documentation: The name of the country associated with the Business Seller's address.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CountryName = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - documentation: The Business Seller's primary phone number. This may return a value of <code>Invalid Request</code> if you are not authorized to see the Business Seller's phone number. <br/><br/> In the US, the area code (3 digits), the prefix (3
     * digits), the line number (4 digits), and phone extension (if specified by the user) are returned in this field. The extension can be one or more digits. Non-breaking spaces are used as delimiters between these phone number components. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The PhoneCountryPrefix
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. The full phone number, including the country prefix, is shown in the <b>Phone</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneCountryPrefix = null;
    /**
     * The PhoneAreaOrCityCode
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. The full phone number, including the area code, is shown in the <b>Phone</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneAreaOrCityCode = null;
    /**
     * The PhoneLocalNumber
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. The full phone number is shown in the <b>Phone</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneLocalNumber = null;
    /**
     * The Phone2CountryPrefix
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. A secondary phone number is no longer supported.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone2CountryPrefix = null;
    /**
     * The Phone2AreaOrCityCode
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. A secondary phone number is no longer supported.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone2AreaOrCityCode = null;
    /**
     * The Phone2LocalNumber
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. A secondary phone number is no longer supported.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone2LocalNumber = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: The postal code asssociated with the Business Seller's address. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The AddressID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressID = null;
    /**
     * The ExternalAddressID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalAddressID = null;
    /**
     * The InternationalName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalName = null;
    /**
     * The InternationalStateAndCity
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalStateAndCity = null;
    /**
     * The InternationalStreet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalStreet = null;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - documentation: The Business Seller's company name. This field is only returned if defined and available.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyName = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - documentation: The first name of the Business Seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - documentation: The last name of the Business Seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?string $street = null, ?string $street1 = null, ?string $street2 = null, ?string $cityName = null, ?string $county = null, ?string $stateOrProvince = null, ?string $countryName = null, ?string $phone = null, ?string $phoneCountryPrefix = null, ?string $phoneAreaOrCityCode = null, ?string $phoneLocalNumber = null, ?string $phone2CountryPrefix = null, ?string $phone2AreaOrCityCode = null, ?string $phone2LocalNumber = null, ?string $postalCode = null, ?string $addressID = null, ?string $externalAddressID = null, ?string $internationalName = null, ?string $internationalStateAndCity = null, ?string $internationalStreet = null, ?string $companyName = null, ?string $firstName = null, ?string $lastName = null, $any = null)
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
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->Street = $street;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
     * Get County value
     * @return string|null
     */
    public function getCounty(): ?string
    {
        return $this->County;
    }
    /**
     * Set County value
     * @param string $county
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setCounty(?string $county = null): self
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($county, true), gettype($county)), __LINE__);
        }
        $this->County = $county;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
     * Get CountryName value
     * @return string|null
     */
    public function getCountryName(): ?string
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param string $countryName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setCountryName(?string $countryName = null): self
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryName, true), gettype($countryName)), __LINE__);
        }
        $this->CountryName = $countryName;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
     * Get PhoneCountryPrefix value
     * @return string|null
     */
    public function getPhoneCountryPrefix(): ?string
    {
        return $this->PhoneCountryPrefix;
    }
    /**
     * Set PhoneCountryPrefix value
     * @param string $phoneCountryPrefix
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhoneCountryPrefix(?string $phoneCountryPrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneCountryPrefix) && !is_string($phoneCountryPrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneCountryPrefix, true), gettype($phoneCountryPrefix)), __LINE__);
        }
        $this->PhoneCountryPrefix = $phoneCountryPrefix;
        
        return $this;
    }
    /**
     * Get PhoneAreaOrCityCode value
     * @return string|null
     */
    public function getPhoneAreaOrCityCode(): ?string
    {
        return $this->PhoneAreaOrCityCode;
    }
    /**
     * Set PhoneAreaOrCityCode value
     * @param string $phoneAreaOrCityCode
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhoneAreaOrCityCode(?string $phoneAreaOrCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneAreaOrCityCode) && !is_string($phoneAreaOrCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneAreaOrCityCode, true), gettype($phoneAreaOrCityCode)), __LINE__);
        }
        $this->PhoneAreaOrCityCode = $phoneAreaOrCityCode;
        
        return $this;
    }
    /**
     * Get PhoneLocalNumber value
     * @return string|null
     */
    public function getPhoneLocalNumber(): ?string
    {
        return $this->PhoneLocalNumber;
    }
    /**
     * Set PhoneLocalNumber value
     * @param string $phoneLocalNumber
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhoneLocalNumber(?string $phoneLocalNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneLocalNumber) && !is_string($phoneLocalNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneLocalNumber, true), gettype($phoneLocalNumber)), __LINE__);
        }
        $this->PhoneLocalNumber = $phoneLocalNumber;
        
        return $this;
    }
    /**
     * Get Phone2CountryPrefix value
     * @return string|null
     */
    public function getPhone2CountryPrefix(): ?string
    {
        return $this->Phone2CountryPrefix;
    }
    /**
     * Set Phone2CountryPrefix value
     * @param string $phone2CountryPrefix
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhone2CountryPrefix(?string $phone2CountryPrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($phone2CountryPrefix) && !is_string($phone2CountryPrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone2CountryPrefix, true), gettype($phone2CountryPrefix)), __LINE__);
        }
        $this->Phone2CountryPrefix = $phone2CountryPrefix;
        
        return $this;
    }
    /**
     * Get Phone2AreaOrCityCode value
     * @return string|null
     */
    public function getPhone2AreaOrCityCode(): ?string
    {
        return $this->Phone2AreaOrCityCode;
    }
    /**
     * Set Phone2AreaOrCityCode value
     * @param string $phone2AreaOrCityCode
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhone2AreaOrCityCode(?string $phone2AreaOrCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($phone2AreaOrCityCode) && !is_string($phone2AreaOrCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone2AreaOrCityCode, true), gettype($phone2AreaOrCityCode)), __LINE__);
        }
        $this->Phone2AreaOrCityCode = $phone2AreaOrCityCode;
        
        return $this;
    }
    /**
     * Get Phone2LocalNumber value
     * @return string|null
     */
    public function getPhone2LocalNumber(): ?string
    {
        return $this->Phone2LocalNumber;
    }
    /**
     * Set Phone2LocalNumber value
     * @param string $phone2LocalNumber
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setPhone2LocalNumber(?string $phone2LocalNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phone2LocalNumber) && !is_string($phone2LocalNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone2LocalNumber, true), gettype($phone2LocalNumber)), __LINE__);
        }
        $this->Phone2LocalNumber = $phone2LocalNumber;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
     * Get AddressID value
     * @return string|null
     */
    public function getAddressID(): ?string
    {
        return $this->AddressID;
    }
    /**
     * Set AddressID value
     * @param string $addressID
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setAddressID(?string $addressID = null): self
    {
        // validation for constraint: string
        if (!is_null($addressID) && !is_string($addressID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressID, true), gettype($addressID)), __LINE__);
        }
        $this->AddressID = $addressID;
        
        return $this;
    }
    /**
     * Get ExternalAddressID value
     * @return string|null
     */
    public function getExternalAddressID(): ?string
    {
        return $this->ExternalAddressID;
    }
    /**
     * Set ExternalAddressID value
     * @param string $externalAddressID
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setExternalAddressID(?string $externalAddressID = null): self
    {
        // validation for constraint: string
        if (!is_null($externalAddressID) && !is_string($externalAddressID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalAddressID, true), gettype($externalAddressID)), __LINE__);
        }
        $this->ExternalAddressID = $externalAddressID;
        
        return $this;
    }
    /**
     * Get InternationalName value
     * @return string|null
     */
    public function getInternationalName(): ?string
    {
        return $this->InternationalName;
    }
    /**
     * Set InternationalName value
     * @param string $internationalName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setInternationalName(?string $internationalName = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalName) && !is_string($internationalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalName, true), gettype($internationalName)), __LINE__);
        }
        $this->InternationalName = $internationalName;
        
        return $this;
    }
    /**
     * Get InternationalStateAndCity value
     * @return string|null
     */
    public function getInternationalStateAndCity(): ?string
    {
        return $this->InternationalStateAndCity;
    }
    /**
     * Set InternationalStateAndCity value
     * @param string $internationalStateAndCity
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setInternationalStateAndCity(?string $internationalStateAndCity = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalStateAndCity) && !is_string($internationalStateAndCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalStateAndCity, true), gettype($internationalStateAndCity)), __LINE__);
        }
        $this->InternationalStateAndCity = $internationalStateAndCity;
        
        return $this;
    }
    /**
     * Get InternationalStreet value
     * @return string|null
     */
    public function getInternationalStreet(): ?string
    {
        return $this->InternationalStreet;
    }
    /**
     * Set InternationalStreet value
     * @param string $internationalStreet
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setInternationalStreet(?string $internationalStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($internationalStreet) && !is_string($internationalStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalStreet, true), gettype($internationalStreet)), __LINE__);
        }
        $this->InternationalStreet = $internationalStreet;
        
        return $this;
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\AddressType
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
