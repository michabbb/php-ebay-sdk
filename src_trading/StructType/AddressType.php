<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the data for an eBay user's address. This is the base type for a number of user addresses, including seller payment address, buyer shipping address and buyer and seller registration address.
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
     * - documentation: A concatenation of <b>Street1</b> and <b>Street2</b>, primarily used for a registration address.
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
     * - documentation: The county in which the address resides.
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
     * The Country
     * Meta informations extracted from the WSDL
     * - documentation: The two-digit code representing the country of the user.<br> <br> If not provided as input, eBay uses the country associated with the eBay Site ID when the call is made.<br> <br> For a Global Shipping Program order,
     * <b>GetSellerList</b> returns the country code of the buyer, not the international shipping provider.
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the user's country. <br/>
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
     * The PhoneCountryCode
     * Meta informations extracted from the WSDL
     * - documentation: Standard ISO code for the country of the user's primary telephone phone number. For Classified Ad listings, this code is used to look up the country's international calling prefix. Both the ISO code and country phone prefix are
     * stored with listings of this type. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneCountryCode;
    /**
     * The PhoneCountryPrefix
     * Meta informations extracted from the WSDL
     * - documentation: Country Prefix of the secondary phone number. This value is derived from inputs supplied for <b>PhoneCountryCode</b>. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneCountryPrefix;
    /**
     * The PhoneAreaOrCityCode
     * Meta informations extracted from the WSDL
     * - documentation: Area or City Code of a user's primary phone number. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneAreaOrCityCode;
    /**
     * The PhoneLocalNumber
     * Meta informations extracted from the WSDL
     * - documentation: The local number portion of the user's primary phone number. This field applies to Classified Ad listings only. <br><br> <b>Note:</b> The full primary phone number is constructed by combining <b>PhoneLocalNumber</b> with
     * <b>PhoneAreaOrCityCode</b> and <b>PhoneCountryPrefix</b>. <br>
     * - minOccurs: 0
     * @var string
     */
    public $PhoneLocalNumber;
    /**
     * The Phone2CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: Standard ISO code for the country of a user's secondary telephone phone number. For Classified Ad listings, this code is used to look up the country's international calling prefix. Both the ISO code and country phone prefix are
     * stored with listings of this type. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string
     */
    public $Phone2CountryCode;
    /**
     * The Phone2CountryPrefix
     * Meta informations extracted from the WSDL
     * - documentation: Country prefix of a user's secondary phone number. This value is derived from inputs supplied for <b>Phone2CountryCode</b>. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string
     */
    public $Phone2CountryPrefix;
    /**
     * The Phone2AreaOrCityCode
     * Meta informations extracted from the WSDL
     * - documentation: Area or City Code of a user's secondary phone number. This field applies to Classified Ad listings only.
     * - minOccurs: 0
     * @var string
     */
    public $Phone2AreaOrCityCode;
    /**
     * The Phone2LocalNumber
     * Meta informations extracted from the WSDL
     * - documentation: The local number portion of the user's secondary phone number. This field applies to Classified Ad listings only. <br><br> <b>Note:</b> The full secondary phone number is constructed by combining <b>Phone2LocalNumber</b> with
     * <b>Phone2AreaOrCityCode</b> and <b>Phone2CountryPrefix</b>. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Phone2LocalNumber;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: User's postal code.<br> <br> For a Global Shipping Program order, <b>GetSellerList</b> and <b>GetMyeBaySelling</b> return the postal code of the buyer, not that of the international shipping provider. <br>
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The AddressID
     * Meta informations extracted from the WSDL
     * - documentation: Unique ID for a user's address in the eBay database. This value can help prevent the need to store an address multiple times across multiple orders. The ID changes if a user changes their address.
     * - minOccurs: 0
     * @var string
     */
    public $AddressID;
    /**
     * The AddressOwner
     * Meta informations extracted from the WSDL
     * - documentation: The realm to which the address belongs (e.g. eBay vs PayPal).
     * - minOccurs: 0
     * @var string
     */
    public $AddressOwner;
    /**
     * The AddressStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressStatus;
    /**
     * The ExternalAddressID
     * Meta informations extracted from the WSDL
     * - documentation: This is a unique identifier assigned to the customer address if the address is on file with PayPal. The <b>AddressOwner</b> field will indicate if the address is on file with eBay or PayPal. This field will only be
     * applicable/returned if it is a PayPal-owned address. The ID changes if a user changes their address. <br>
     * - minOccurs: 0
     * @var string
     */
    public $ExternalAddressID;
    /**
     * The InternationalName
     * Meta informations extracted from the WSDL
     * - documentation: Seller's international name that is associated with the payment address. This field is only applicable to seller payment/billing addresses.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalName;
    /**
     * The InternationalStateAndCity
     * Meta informations extracted from the WSDL
     * - documentation: International state and city that is associated with the seller's payment address. This field is only applicable to seller payment/billing addresses.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalStateAndCity;
    /**
     * The InternationalStreet
     * Meta informations extracted from the WSDL
     * - documentation: Seller's international street address that is associated with the payment address. This field is only applicable to seller payment/billing addresses.
     * - minOccurs: 0
     * @var string
     */
    public $InternationalStreet;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: User's company name. Only returned if available.
     * - minOccurs: 0
     * @var string
     */
    public $CompanyName;
    /**
     * The AddressRecordType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressRecordType;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - documentation: Displays the first name of the seller (in a business card format) if the seller's <b>SellerBusinessCodeType</b> value is <code>Commercial</code>.
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - documentation: Displays the last name of the seller (in a business card format) if the seller's <b>SellerBusinessCodeType</b> is set to <code>Commercial</code>.
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The Phone2
     * Meta informations extracted from the WSDL
     * - documentation: Secondary Phone number of the lead. Not returned if information is unavailable.
     * - minOccurs: 0
     * @var string
     */
    public $Phone2;
    /**
     * The AddressUsage
     * Meta informations extracted from the WSDL
     * - documentation: This tag tells whether current address is a default shipping address or one of the shipping addresses in address book.
     * - minOccurs: 0
     * @var string
     */
    public $AddressUsage;
    /**
     * The ReferenceID
     * Meta informations extracted from the WSDL
     * - documentation: Uniquely identifies an order shipped using the Global Shipping Program. This value is generated by eBay when the order is completed. The international shipping provider uses the <b>ReferenceID</b> as the primary reference when
     * processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider. <br/><br/> Example: "Reference #1234567890123456"
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceID;
    /**
     * The AddressAttribute
     * Meta informations extracted from the WSDL
     * - documentation: This field shows an attribute for the address, and its corresponding value. Currently, this field is only used to display the reference ID for a "Click and Collect" order, but in the future, other address attributes may be returned
     * in this field.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressAttributeType[]
     */
    public $AddressAttribute;
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
     * @uses AddressType::setCountry()
     * @uses AddressType::setCountryName()
     * @uses AddressType::setPhone()
     * @uses AddressType::setPhoneCountryCode()
     * @uses AddressType::setPhoneCountryPrefix()
     * @uses AddressType::setPhoneAreaOrCityCode()
     * @uses AddressType::setPhoneLocalNumber()
     * @uses AddressType::setPhone2CountryCode()
     * @uses AddressType::setPhone2CountryPrefix()
     * @uses AddressType::setPhone2AreaOrCityCode()
     * @uses AddressType::setPhone2LocalNumber()
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
     * @param string $phone2CountryCode
     * @param string $phone2CountryPrefix
     * @param string $phone2AreaOrCityCode
     * @param string $phone2LocalNumber
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
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $street = null, $street1 = null, $street2 = null, $cityName = null, $county = null, $stateOrProvince = null, $country = null, $countryName = null, $phone = null, $phoneCountryCode = null, $phoneCountryPrefix = null, $phoneAreaOrCityCode = null, $phoneLocalNumber = null, $phone2CountryCode = null, $phone2CountryPrefix = null, $phone2AreaOrCityCode = null, $phone2LocalNumber = null, $postalCode = null, $addressID = null, $addressOwner = null, $addressStatus = null, $externalAddressID = null, $internationalName = null, $internationalStateAndCity = null, $internationalStreet = null, $companyName = null, $addressRecordType = null, $firstName = null, $lastName = null, $phone2 = null, $addressUsage = null, $referenceID = null, array $addressAttribute = array(), \DOMDocument $any = null)
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
            ->setPhone2CountryCode($phone2CountryCode)
            ->setPhone2CountryPrefix($phone2CountryPrefix)
            ->setPhone2AreaOrCityCode($phone2AreaOrCityCode)
            ->setPhone2LocalNumber($phone2LocalNumber)
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
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get PhoneCountryCode value
     * @return string|null
     */
    public function getPhoneCountryCode()
    {
        return $this->PhoneCountryCode;
    }
    /**
     * Set PhoneCountryCode value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $phoneCountryCode
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setPhoneCountryCode($phoneCountryCode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($phoneCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $phoneCountryCode, implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->PhoneCountryCode = $phoneCountryCode;
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get Phone2CountryCode value
     * @return string|null
     */
    public function getPhone2CountryCode()
    {
        return $this->Phone2CountryCode;
    }
    /**
     * Set Phone2CountryCode value
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $phone2CountryCode
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setPhone2CountryCode($phone2CountryCode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CountryCodeType::valueIsValid($phone2CountryCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $phone2CountryCode, implode(', ', \macropage\ebaysdk\trading\EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->Phone2CountryCode = $phone2CountryCode;
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get AddressOwner value
     * @return string|null
     */
    public function getAddressOwner()
    {
        return $this->AddressOwner;
    }
    /**
     * Set AddressOwner value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressOwner
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressOwner($addressOwner = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType::valueIsValid($addressOwner)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addressOwner, implode(', ', \macropage\ebaysdk\trading\EnumType\AddressOwnerCodeType::getValidValues())), __LINE__);
        }
        $this->AddressOwner = $addressOwner;
        return $this;
    }
    /**
     * Get AddressStatus value
     * @return string|null
     */
    public function getAddressStatus()
    {
        return $this->AddressStatus;
    }
    /**
     * Set AddressStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressStatus
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressStatus($addressStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressStatusCodeType::valueIsValid($addressStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addressStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\AddressStatusCodeType::getValidValues())), __LINE__);
        }
        $this->AddressStatus = $addressStatus;
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get AddressRecordType value
     * @return string|null
     */
    public function getAddressRecordType()
    {
        return $this->AddressRecordType;
    }
    /**
     * Set AddressRecordType value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressRecordType
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressRecordType($addressRecordType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType::valueIsValid($addressRecordType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addressRecordType, implode(', ', \macropage\ebaysdk\trading\EnumType\AddressRecordTypeCodeType::getValidValues())), __LINE__);
        }
        $this->AddressRecordType = $addressRecordType;
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * Get Phone2 value
     * @return string|null
     */
    public function getPhone2()
    {
        return $this->Phone2;
    }
    /**
     * Set Phone2 value
     * @param string $phone2
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setPhone2($phone2 = null)
    {
        // validation for constraint: string
        if (!is_null($phone2) && !is_string($phone2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone2)), __LINE__);
        }
        $this->Phone2 = $phone2;
        return $this;
    }
    /**
     * Get AddressUsage value
     * @return string|null
     */
    public function getAddressUsage()
    {
        return $this->AddressUsage;
    }
    /**
     * Set AddressUsage value
     * @uses \macropage\ebaysdk\trading\EnumType\AddressUsageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\AddressUsageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $addressUsage
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressUsage($addressUsage = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\AddressUsageCodeType::valueIsValid($addressUsage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $addressUsage, implode(', ', \macropage\ebaysdk\trading\EnumType\AddressUsageCodeType::getValidValues())), __LINE__);
        }
        $this->AddressUsage = $addressUsage;
        return $this;
    }
    /**
     * Get ReferenceID value
     * @return string|null
     */
    public function getReferenceID()
    {
        return $this->ReferenceID;
    }
    /**
     * Set ReferenceID value
     * @param string $referenceID
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setReferenceID($referenceID = null)
    {
        // validation for constraint: string
        if (!is_null($referenceID) && !is_string($referenceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceID)), __LINE__);
        }
        $this->ReferenceID = $referenceID;
        return $this;
    }
    /**
     * Get AddressAttribute value
     * @return \macropage\ebaysdk\trading\StructType\AddressAttributeType[]|null
     */
    public function getAddressAttribute()
    {
        return $this->AddressAttribute;
    }
    /**
     * Set AddressAttribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddressAttributeType[] $addressAttribute
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function setAddressAttribute(array $addressAttribute = array())
    {
        foreach ($addressAttribute as $addressTypeAddressAttributeItem) {
            // validation for constraint: itemType
            if (!$addressTypeAddressAttributeItem instanceof \macropage\ebaysdk\trading\StructType\AddressAttributeType) {
                throw new \InvalidArgumentException(sprintf('The AddressAttribute property can only contain items of \macropage\ebaysdk\trading\StructType\AddressAttributeType, "%s" given', is_object($addressTypeAddressAttributeItem) ? get_class($addressTypeAddressAttributeItem) : gettype($addressTypeAddressAttributeItem)), __LINE__);
            }
        }
        $this->AddressAttribute = $addressAttribute;
        return $this;
    }
    /**
     * Add item to AddressAttribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AddressAttributeType $item
     * @return \macropage\ebaysdk\trading\StructType\AddressType
     */
    public function addToAddressAttribute(\macropage\ebaysdk\trading\StructType\AddressAttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AddressAttributeType) {
            throw new \InvalidArgumentException(sprintf('The AddressAttribute property can only contain items of \macropage\ebaysdk\trading\StructType\AddressAttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressAttribute[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AddressType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
     * @return \macropage\ebaysdk\trading\StructType\AddressType
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
