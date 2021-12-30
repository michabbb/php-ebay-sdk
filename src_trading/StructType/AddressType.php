<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for an eBay user's address. This is the base type for a number of user addresses, including seller payment address, buyer shipping address, and buyer and seller registration address.
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The eBay user's name associated with an address on file with eBay. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - documentation: A concatenation of <b>Street1</b> and <b>Street2</b>, primarily used for a registration address.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street = null;
    /**
     * The Street1
     * Meta information extracted from the WSDL
     * - documentation: The first line of the user's street address. <br><br> <span class="tablenote"><b>Note: </b> Note the different maximum lengths noted below for different countries. If a street name exceeds the maximum length for the applicable
     * country, the full street name may be expressed through both the <b>Street1</b> and <b>Street2</b> fields. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street1 = null;
    /**
     * The Street2
     * Meta information extracted from the WSDL
     * - documentation: The second line of the user's street address (such as an apartment number or suite number). Returned if the user specified a second street value for their address. In case of <b>Item.SellerContactDetails</b>, <b>Street2</b> can be
     * used to provide City, Address, State, and Zip code (if applicable). <br><br> <span class="tablenote"><b>Note: </b> Note the different maximum lengths noted below for different countries. If a street name exceeds the maximum length for the applicable
     * country, the full street name may be expressed through both the <b>Street1</b> and <b>Street2</b> fields. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Street2 = null;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - documentation: The city associated with an address on file with eBay. Most addresses include a city name, but not all. For example, Singapore is an island city-state, so <code>SG</code> would appear in the <b>Country</b> field, and 'Singapore' or
     * 'Republic of Singapore' would appear in the <b>CountryName</b> field, but the <b>CityName</b> field is not applicable. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CityName = null;
    /**
     * The County
     * Meta information extracted from the WSDL
     * - documentation: The county associated with an address on file with eBay. This field should only be passed in or returned if applicable/defined.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $County = null;
    /**
     * The StateOrProvince
     * Meta information extracted from the WSDL
     * - documentation: The state or province associated with an address on file with eBay. Whether it's a state or a province will depend on the region and/or country. This field should only be passed in or returned if applicable/defined. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StateOrProvince = null;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - documentation: The two-digit code representing the country of the user.<br> <br> If not provided as input, eBay uses the country associated with the eBay Site ID when the call is made.<br> <br> For a Global Shipping Program order,
     * <b>GetSellerList</b> returns the country code of the buyer, not the international shipping provider.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Country = null;
    /**
     * The CountryName
     * Meta information extracted from the WSDL
     * - documentation: The full name of the country associated with an address on file with eBay. <br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CountryName = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - documentation: User's primary phone number. This may return a value of <code>Invalid Request</code> if you are not authorized to see the user's phone number. <br/><br/> In the US, the area code (3 digits), the prefix (3 digits), the line number (4
     * digits), and phone extension (if specified by the user) are returned in this field. The extension can be one or more digits. Non-breaking spaces are used as delimiters between these phone number components. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The PhoneCountryCode
     * Meta information extracted from the WSDL
     * - documentation: Standard ISO code for the country of the user's primary telephone phone number. For Classified Ad listings, this code is used to look up the country's international calling prefix. Both the ISO code and country phone prefix are
     * stored with listings of this type. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneCountryCode = null;
    /**
     * The PhoneCountryPrefix
     * Meta information extracted from the WSDL
     * - documentation: Country Prefix of the secondary phone number. This value is derived from inputs supplied for <b>PhoneCountryCode</b>. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneCountryPrefix = null;
    /**
     * The PhoneAreaOrCityCode
     * Meta information extracted from the WSDL
     * - documentation: Area or City Code of a user's primary phone number. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneAreaOrCityCode = null;
    /**
     * The PhoneLocalNumber
     * Meta information extracted from the WSDL
     * - documentation: The local number portion of the user's primary phone number. This field applies to Classified Ad listings only. <br><br> <b>Note:</b> The full primary phone number is constructed by combining <b>PhoneLocalNumber</b> with
     * <b>PhoneAreaOrCityCode</b> and <b>PhoneCountryPrefix</b>. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PhoneLocalNumber = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: User's postal code.<br> <br> For a Global Shipping Program order, <b>GetSellerList</b> and <b>GetMyeBaySelling</b> return the postal code of the buyer, not that of the international shipping provider. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The AddressID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID for a user's address in the eBay database. This value can help prevent the need to store an address multiple times across multiple orders. The ID changes if a user changes their address. <br> <br> <span
     * class="tablenote"><b>Note:</b> For orders subject to Australian 'Goods and Services' tax (GST), in addition to the unique identifier for the address, the last two digits of the user's Australian Business Number (ABN) will also appear in this field.
     * Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressID = null;
    /**
     * The AddressOwner
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value returned here indicates the company that has the address on file. Previously, this value could be <code>eBay</code> or <code>PayPal</code>, but now the value returned here should always be <code>eBay</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressOwner = null;
    /**
     * The AddressStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressStatus = null;
    /**
     * The ExternalAddressID
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, and should not returned. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalAddressID = null;
    /**
     * The InternationalName
     * Meta information extracted from the WSDL
     * - documentation: Seller's international name that is associated with the payment address. This field is only applicable to seller payment/billing addresses.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalName = null;
    /**
     * The InternationalStateAndCity
     * Meta information extracted from the WSDL
     * - documentation: International state and city that is associated with the seller's payment address. This field is only applicable to seller payment/billing addresses.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalStateAndCity = null;
    /**
     * The InternationalStreet
     * Meta information extracted from the WSDL
     * - documentation: Seller's international street address that is associated with the payment address. This field is only applicable to seller payment/billing addresses.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternationalStreet = null;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - documentation: User's company name. This field should only be passed in or returned if applicable/defined.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompanyName = null;
    /**
     * The AddressRecordType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressRecordType = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - documentation: Displays the first name of the seller (in a business card format) if the seller's <b>SellerBusinessCodeType</b> value is <code>Commercial</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - documentation: Displays the last name of the seller (in a business card format) if the seller's <b>SellerBusinessCodeType</b> is set to <code>Commercial</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The Phone2
     * Meta information extracted from the WSDL
     * - documentation: Secondary Phone number of the lead. Not returned if information is unavailable.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone2 = null;
    /**
     * The AddressUsage
     * Meta information extracted from the WSDL
     * - documentation: This tag tells whether current address is a default shipping address or one of the shipping addresses in address book.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AddressUsage = null;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - documentation: Uniquely identifies an order shipped using the Global Shipping Program. This value is generated by eBay when the order is completed. The international shipping provider uses the <b>ReferenceID</b> as the primary reference when
     * processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider. <br/><br/> Example: "Reference #1234567890123456"
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReferenceID = null;
    /**
     * The AddressAttribute
     * Meta information extracted from the WSDL
     * - documentation: This field shows an attribute for the address, and its corresponding value. Currently, this field is only used to display the reference ID for a "Click and Collect" order, but in the future, other address attributes may be returned
     * in this field.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressAttributeType[]
     */
    protected ?array $AddressAttribute = null;
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
     * @uses AddressType::setCountry()
     * @uses AddressType::setCountryName()
     * @uses AddressType::setPhone()
     * @uses AddressType::setPhoneCountryCode()
     * @uses AddressType::setPhoneCountryPrefix()
     * @uses AddressType::setPhoneAreaOrCityCode()
     * @uses AddressType::setPhoneLocalNumber()
     * @uses AddressType::setPostalCode()
     * @uses AddressType::setAddressID()
     * @uses AddressType::setAddressOwner()
     * @uses AddressType::setAddressStatus()
     * @uses AddressType::setExternalAddressID()
     * @uses AddressType::setInternationalName()
     * @uses AddressType::setInternationalStateAndCity()
     * @uses AddressType::setInternationalStreet()
     * @uses AddressType::setCompanyName()
     * @uses AddressType::setAddressRecordType()
     * @uses AddressType::setFirstName()
     * @uses AddressType::setLastName()
     * @uses AddressType::setPhone2()
     * @uses AddressType::setAddressUsage()
     * @uses AddressType::setReferenceID()
     * @uses AddressType::setAddressAttribute()
     * @uses AddressType::setAny()
     * @param string $name
     * @param string $street
     * @param string $street1
     * @param string $street2
     * @param string $cityName
     * @param string $county
     * @param string $stateOrProvince
     * @param string $country
     * @param string $countryName
     * @param string $phone
     * @param string $phoneCountryCode
     * @param string $phoneCountryPrefix
     * @param string $phoneAreaOrCityCode
     * @param string $phoneLocalNumber
     * @param string $postalCode
     * @param string $addressID
     * @param string $addressOwner
     * @param string $addressStatus
     * @param string $externalAddressID
     * @param string $internationalName
     * @param string $internationalStateAndCity
     * @param string $internationalStreet
     * @param string $companyName
     * @param string $addressRecordType
     * @param string $firstName
     * @param string $lastName
     * @param string $phone2
     * @param string $addressUsage
     * @param string $referenceID
     * @param \macropage\ebaysdk\trading\StructType\AddressAttributeType[] $addressAttribute
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?string $street = null, ?string $street1 = null, ?string $street2 = null, ?string $cityName = null, ?string $county = null, ?string $stateOrProvince = null, ?string $country = null, ?string $countryName = null, ?string $phone = null, ?string $phoneCountryCode = null, ?string $phoneCountryPrefix = null, ?string $phoneAreaOrCityCode = null, ?string $phoneLocalNumber = null, ?string $postalCode = null, ?string $addressID = null, ?string $addressOwner = null, ?string $addressStatus = null, ?string $externalAddressID = null, ?string $internationalName = null, ?string $internationalStateAndCity = null, ?string $internationalStreet = null, ?string $companyName = null, ?string $addressRecordType = null, ?string $firstName = null, ?string $lastName = null, ?string $phone2 = null, ?string $addressUsage = null, ?string $referenceID = null, ?array $addressAttribute = null, $any = null)
    {
        $this
            ->setName($name)
            ->setStreet($street)
            ->setStreet1($street1)
            ->setStreet2($street2)
            ->setCityName($cityName)
            ->setCounty($county)
            ->setStateOrProvince($stateOrProvince)
            ->setCountry($country)
            ->setCountryName($countryName)
            ->setPhone($phone)
            ->setPhoneCountryCode($phoneCountryCode)
            ->setPhoneCountryPrefix($phoneCountryPrefix)
            ->setPhoneAreaOrCityCode($phoneAreaOrCityCode)
            ->setPhoneLocalNumber($phoneLocalNumber)
            ->setPostalCode($postalCode)
            ->setAddressID($addressID)
            ->setAddressOwner($addressOwner)
            ->setAddressStatus($addressStatus)
            ->setExternalAddressID($externalAddressID)
            ->setInternationalName($internationalName)
            ->setInternationalStateAndCity($internationalStateAndCity)
            ->setInternationalStreet($internationalStreet)
            ->setCompanyName($companyName)
            ->setAddressRecordType($addressRecordType)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPhone2($phone2)
            ->setAddressUsage($addressUsage)
            ->setReferenceID($referenceID)
            ->setAddressAttribute($addressAttribute)
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get PhoneCountryCode value
     * @return string|null
     */
    public function getPhoneCountryCode(): ?string
    {
        return $this->PhoneCountryCode;
    }
    /**
     * Set PhoneCountryCode value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $phoneCountryCode
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setPhoneCountryCode(?string $phoneCountryCode = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($phoneCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CountryCodeType', is_array($phoneCountryCode) ? implode(', ', $phoneCountryCode) : var_export($phoneCountryCode, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->PhoneCountryCode = $phoneCountryCode;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get AddressOwner value
     * @return string|null
     */
    public function getAddressOwner(): ?string
    {
        return $this->AddressOwner;
    }
    /**
     * Set AddressOwner value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $addressOwner
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressOwner(?string $addressOwner = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType::valueIsValid($addressOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType', is_array($addressOwner) ? implode(', ', $addressOwner) : var_export($addressOwner, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType::getValidValues())), __LINE__);
        }
        $this->AddressOwner = $addressOwner;
        
        return $this;
    }
    /**
     * Get AddressStatus value
     * @return string|null
     */
    public function getAddressStatus(): ?string
    {
        return $this->AddressStatus;
    }
    /**
     * Set AddressStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $addressStatus
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressStatus(?string $addressStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressStatusCodeType::valueIsValid($addressStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AddressStatusCodeType', is_array($addressStatus) ? implode(', ', $addressStatus) : var_export($addressStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AddressStatusCodeType::getValidValues())), __LINE__);
        }
        $this->AddressStatus = $addressStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get AddressRecordType value
     * @return string|null
     */
    public function getAddressRecordType(): ?string
    {
        return $this->AddressRecordType;
    }
    /**
     * Set AddressRecordType value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $addressRecordType
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressRecordType(?string $addressRecordType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType::valueIsValid($addressRecordType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType', is_array($addressRecordType) ? implode(', ', $addressRecordType) : var_export($addressRecordType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AddressRecordType = $addressRecordType;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get Phone2 value
     * @return string|null
     */
    public function getPhone2(): ?string
    {
        return $this->Phone2;
    }
    /**
     * Set Phone2 value
     * @param string $phone2
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setPhone2(?string $phone2 = null): self
    {
        // validation for constraint: string
        if (!is_null($phone2) && !is_string($phone2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone2, true), gettype($phone2)), __LINE__);
        }
        $this->Phone2 = $phone2;
        
        return $this;
    }
    /**
     * Get AddressUsage value
     * @return string|null
     */
    public function getAddressUsage(): ?string
    {
        return $this->AddressUsage;
    }
    /**
     * Set AddressUsage value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressUsageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressUsageCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $addressUsage
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressUsage(?string $addressUsage = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressUsageCodeType::valueIsValid($addressUsage)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\AddressUsageCodeType', is_array($addressUsage) ? implode(', ', $addressUsage) : var_export($addressUsage, true), implode(', ', \macropage\ebaysdk\trading\EnumType\AddressUsageCodeType::getValidValues())), __LINE__);
        }
        $this->AddressUsage = $addressUsage;
        
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return string|null
     */
    public function getReferenceID(): ?string
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param string $referenceID
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setReferenceID(?string $referenceID = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceID, true), gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        
        return $this;
    }
    /**
     * Get AddressAttribute value
     * @return \macropage\ebaysdk\trading\StructType\AddressAttributeType[]
     */
    public function getAddressAttribute(): ?array
    {
        return $this->AddressAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setAddressAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddressAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressAttributeForArrayConstraintsFromSetAddressAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $addressTypeAddressAttributeItem) {
            // validation for constraint: itemType
            if (!$addressTypeAddressAttributeItem instanceof \macropage\ebaysdk\trading\StructType\AddressAttributeType) {
                $invalidValues[] = is_object($addressTypeAddressAttributeItem) ? get_class($addressTypeAddressAttributeItem) : sprintf('%s(%s)', gettype($addressTypeAddressAttributeItem), var_export($addressTypeAddressAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddressAttribute property can only contain items of type \macropage\ebaysdk\trading\StructType\AddressAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddressAttribute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddressAttributeType[] $addressAttribute
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressAttribute(?array $addressAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($addressAttributeArrayErrorMessage = self::validateAddressAttributeForArrayConstraintsFromSetAddressAttribute($addressAttribute))) {
            throw new InvalidArgumentException($addressAttributeArrayErrorMessage, __LINE__);
        }
        $this->AddressAttribute = $addressAttribute;
        
        return $this;
    }
    /**
     * Add item to AddressAttribute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddressAttributeType $item
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function addToAddressAttribute(\macropage\ebaysdk\trading\StructType\AddressAttributeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddressAttributeType) {
            throw new InvalidArgumentException(sprintf('The AddressAttribute property can only contain items of type \macropage\ebaysdk\trading\StructType\AddressAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AddressAttribute[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
