<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>Charity</b> container, which consists of all details related to a nonprofit charity organization.
 * @subpackage Structs
 */
class CharityInfoType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The name of a nonprofit charity organization. The <b>Name</b> field is required for a non-registered charity organization, since these companies will not have a PayPal Giving Fund <b>CharityID</b> <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ListingNPEmailNotifPref
     * Meta informations extracted from the WSDL
     * - documentation: This flag is for internal use only.
     * - minOccurs: 0
     * @var bool
     */
    public $ListingNPEmailNotifPref;
    /**
     * The ListingNPEmail
     * Meta informations extracted from the WSDL
     * - documentation: This field is for internal use only.
     * - minOccurs: 0
     * @var string
     */
    public $ListingNPEmail;
    /**
     * The ListingNPContactName
     * Meta informations extracted from the WSDL
     * - documentation: This field is for internal use only.
     * - minOccurs: 0
     * @var string
     */
    public $ListingNPContactName;
    /**
     * The Mission
     * Meta informations extracted from the WSDL
     * - documentation: The mission statement of a nonprofit charity organization registered with the PayPal Giving Fund. The mission statement is returned in <b>GetCharities</b> and is displayed in listings if the nonprofit charity organization is
     * registered with the PayPal Giving Fund. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $Mission;
    /**
     * The LogoURL
     * Meta informations extracted from the WSDL
     * - documentation: This URL indicates the location of the nonprofit charity organization's logo image. The image file must be JPG or GIF format, and its size cannot exceed 50 KB. This logo is displayed in listings if the nonprofit charity organization
     * is registered with the PayPal Giving Fund. A standard eBay for Charity logo is used in place of the charity organization's logo if the <b>LogoURL</b> or <b>LogoURLSelling</b> values are not provided, or these values point to bad URLs or to URLs
     * containing no images or images not meeting eBay logo size and format requirements. This value is returned if set.
     * - minOccurs: 0
     * @var string
     */
    public $LogoURL;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Enumeration value that indicates whether or not the charity is a valid eBay for Charity nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The SearchableString
     * Meta informations extracted from the WSDL
     * - documentation: Keyword string to be used for search purposes.
     * - minOccurs: 0
     * @var string
     */
    public $SearchableString;
    /**
     * The CharityRegion
     * Meta informations extracted from the WSDL
     * - documentation: Integer value that indicates the nonprofit charity organization's region. Each nonprofit charity organization may be associated with only one region.
     * - minOccurs: 0
     * @var int
     */
    public $CharityRegion;
    /**
     * The CharityDomain
     * Meta informations extracted from the WSDL
     * - documentation: Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in
     * <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var int[]
     */
    public $CharityDomain;
    /**
     * The CharityID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier created by eBay and assigned to registered nonprofit charity organizations. This identifier can be used as a filter in the <b>GetCharities</b> request, and it will always be returned if the nonprofit charity
     * organization is registered with the PayPal Giving Fund.
     * - minOccurs: 0
     * @var string
     */
    public $CharityID;
    /**
     * The LogoURLSelling
     * Meta informations extracted from the WSDL
     * - documentation: An alternative to the <b>LogoURL</b> value. This URL indicates the location of the nonprofit charity organization's logo image. The image file must be JPG or GIF format, and its size cannot exceed 50 KB. This URL will be used if the
     * <b>LogoURL</b> value points to a broken link or if that location either contains no image or contains an image that does not meet the eBay requirements - GIF or JPG file; maximum size of 50 KB. A nonprofit charity organization's logo is displayed in
     * item listings if the nonprofit charity organization is registered with the PayPal Giving Fund. A standard eBay for Charity logo is used in place of the charity organization's logo if the Logo URL is not provided. This value is returned if set.
     * - minOccurs: 0
     * @var string
     */
    public $LogoURLSelling;
    /**
     * The DisplayLogoSelling
     * Meta informations extracted from the WSDL
     * - documentation: This boolean value indicates if the eBay Charity logo will appear in the listing.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayLogoSelling;
    /**
     * The DisplayNameInCheckout
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayNameInCheckout;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This field provides a short description about the nonprofit charity organization's primary purpose. "I want to support" will be added to the beginning of the contents of this field. For example, if the description is "the fight
     * against cancer", then on the checkout page "I want to support the fight against cancer" will be displayed. The description may contain a maximum of 115 characters. This value is returned if set. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ShowMultipleDonationAmountInCheckout
     * Meta informations extracted from the WSDL
     * - documentation: This field must be used with the DisplayNameInCheckout field to control the options that are visible to a buyer during checkout. If the DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout field is
     * set to False, a checkbox with the one dollar option will be displayed during checkout. If the DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout field is set to False, no options will be displayed during
     * checkout. <br><br> Reserved for future use. If the DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout field is set to True, a dropdown with multiple donation amounts will be displayed during checkout. If the
     * DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout field is set to True, no options will be displayed during checkout, but the multiple donation amount field will be set.
     * - minOccurs: 0
     * @var bool
     */
    public $ShowMultipleDonationAmountInCheckout;
    /**
     * The ExternalID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier created and used by PayPal Giving Fund to identify a registered nonprofit charity organization. This field is only returned for charities that are registered with PayPal Giving Fund. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $ExternalID;
    /**
     * The PopularityIndex
     * Meta informations extracted from the WSDL
     * - documentation: An integer value that indicates a nonprofit charity organization's popularity rank in comparison with other registered eBay for Charity organizations. This value is determined and managed by PayPal Giving Fund and is based on various
     * factors. This value is always returned for nonprofit organizations registered with PayPal Giving Fund.
     * - minOccurs: 0
     * @var int
     */
    public $PopularityIndex;
    /**
     * The EIN
     * Meta informations extracted from the WSDL
     * - documentation: This value is the Employer Identification Number (EIN) of the nonprofit charity organization. A nonprofit company's EIN is used for tax purposes by the Internal Revenue Service. This value is returned if the nonprofit organization
     * has an EIN and it has been set.
     * - minOccurs: 0
     * @var string
     */
    public $EIN;
    /**
     * The NonProfitSecondName
     * Meta informations extracted from the WSDL
     * - documentation: An alternative name for the nonprofit charity organization. This value is used by PayPal to search for nonprofit organizations. This value is returned if set.
     * - minOccurs: 0
     * @var string
     */
    public $NonProfitSecondName;
    /**
     * The NonProfitAddress
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of the address (including latitude and longitude) of a nonprofit charity organization. This container is always returned if it is set.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NonProfitAddressType[]
     */
    public $NonProfitAddress;
    /**
     * The NonProfitSocialAddress
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is associated with.
     * Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType[]
     */
    public $NonProfitSocialAddress;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is a unique identifier used by the corresponding social networking site to identify the nonprofit charity organization.
     * @var string
     */
    public $id;
    /**
     * Constructor method for CharityInfoType
     * @uses CharityInfoType::setName()
     * @uses CharityInfoType::setListingNPEmailNotifPref()
     * @uses CharityInfoType::setListingNPEmail()
     * @uses CharityInfoType::setListingNPContactName()
     * @uses CharityInfoType::setMission()
     * @uses CharityInfoType::setLogoURL()
     * @uses CharityInfoType::setStatus()
     * @uses CharityInfoType::setSearchableString()
     * @uses CharityInfoType::setCharityRegion()
     * @uses CharityInfoType::setCharityDomain()
     * @uses CharityInfoType::setCharityID()
     * @uses CharityInfoType::setLogoURLSelling()
     * @uses CharityInfoType::setDisplayLogoSelling()
     * @uses CharityInfoType::setDisplayNameInCheckout()
     * @uses CharityInfoType::setDescription()
     * @uses CharityInfoType::setShowMultipleDonationAmountInCheckout()
     * @uses CharityInfoType::setExternalID()
     * @uses CharityInfoType::setPopularityIndex()
     * @uses CharityInfoType::setEIN()
     * @uses CharityInfoType::setNonProfitSecondName()
     * @uses CharityInfoType::setNonProfitAddress()
     * @uses CharityInfoType::setNonProfitSocialAddress()
     * @uses CharityInfoType::setAny()
     * @uses CharityInfoType::setId()
     * @param string $name
     * @param bool $listingNPEmailNotifPref
     * @param string $listingNPEmail
     * @param string $listingNPContactName
     * @param string $mission
     * @param string $logoURL
     * @param string $status
     * @param string $searchableString
     * @param int $charityRegion
     * @param int[] $charityDomain
     * @param string $charityID
     * @param string $logoURLSelling
     * @param bool $displayLogoSelling
     * @param bool $displayNameInCheckout
     * @param string $description
     * @param bool $showMultipleDonationAmountInCheckout
     * @param string $externalID
     * @param int $popularityIndex
     * @param string $eIN
     * @param string $nonProfitSecondName
     * @param \macropage\ebaysdk\trading\StructType\NonProfitAddressType[] $nonProfitAddress
     * @param \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType[] $nonProfitSocialAddress
     * @param \DOMDocument $any
     * @param string $id
     */
    public function __construct($name = null, $listingNPEmailNotifPref = null, $listingNPEmail = null, $listingNPContactName = null, $mission = null, $logoURL = null, $status = null, $searchableString = null, $charityRegion = null, array $charityDomain = array(), $charityID = null, $logoURLSelling = null, $displayLogoSelling = null, $displayNameInCheckout = null, $description = null, $showMultipleDonationAmountInCheckout = null, $externalID = null, $popularityIndex = null, $eIN = null, $nonProfitSecondName = null, array $nonProfitAddress = array(), array $nonProfitSocialAddress = array(), \DOMDocument $any = null, $id = null)
    {
        $this
            ->setName($name)
            ->setListingNPEmailNotifPref($listingNPEmailNotifPref)
            ->setListingNPEmail($listingNPEmail)
            ->setListingNPContactName($listingNPContactName)
            ->setMission($mission)
            ->setLogoURL($logoURL)
            ->setStatus($status)
            ->setSearchableString($searchableString)
            ->setCharityRegion($charityRegion)
            ->setCharityDomain($charityDomain)
            ->setCharityID($charityID)
            ->setLogoURLSelling($logoURLSelling)
            ->setDisplayLogoSelling($displayLogoSelling)
            ->setDisplayNameInCheckout($displayNameInCheckout)
            ->setDescription($description)
            ->setShowMultipleDonationAmountInCheckout($showMultipleDonationAmountInCheckout)
            ->setExternalID($externalID)
            ->setPopularityIndex($popularityIndex)
            ->setEIN($eIN)
            ->setNonProfitSecondName($nonProfitSecondName)
            ->setNonProfitAddress($nonProfitAddress)
            ->setNonProfitSocialAddress($nonProfitSocialAddress)
            ->setAny($any)
            ->setId($id);
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
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
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
     * Get ListingNPEmailNotifPref value
     * @return bool|null
     */
    public function getListingNPEmailNotifPref()
    {
        return $this->ListingNPEmailNotifPref;
    }
    /**
     * Set ListingNPEmailNotifPref value
     * @param bool $listingNPEmailNotifPref
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setListingNPEmailNotifPref($listingNPEmailNotifPref = null)
    {
        // validation for constraint: boolean
        if (!is_null($listingNPEmailNotifPref) && !is_bool($listingNPEmailNotifPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($listingNPEmailNotifPref)), __LINE__);
        }
        $this->ListingNPEmailNotifPref = $listingNPEmailNotifPref;
        return $this;
    }
    /**
     * Get ListingNPEmail value
     * @return string|null
     */
    public function getListingNPEmail()
    {
        return $this->ListingNPEmail;
    }
    /**
     * Set ListingNPEmail value
     * @param string $listingNPEmail
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setListingNPEmail($listingNPEmail = null)
    {
        // validation for constraint: string
        if (!is_null($listingNPEmail) && !is_string($listingNPEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listingNPEmail)), __LINE__);
        }
        $this->ListingNPEmail = $listingNPEmail;
        return $this;
    }
    /**
     * Get ListingNPContactName value
     * @return string|null
     */
    public function getListingNPContactName()
    {
        return $this->ListingNPContactName;
    }
    /**
     * Set ListingNPContactName value
     * @param string $listingNPContactName
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setListingNPContactName($listingNPContactName = null)
    {
        // validation for constraint: string
        if (!is_null($listingNPContactName) && !is_string($listingNPContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($listingNPContactName)), __LINE__);
        }
        $this->ListingNPContactName = $listingNPContactName;
        return $this;
    }
    /**
     * Get Mission value
     * @return string|null
     */
    public function getMission()
    {
        return $this->Mission;
    }
    /**
     * Set Mission value
     * @param string $mission
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setMission($mission = null)
    {
        // validation for constraint: string
        if (!is_null($mission) && !is_string($mission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mission)), __LINE__);
        }
        $this->Mission = $mission;
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL()
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setLogoURL($logoURL = null)
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\CharityStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CharityStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CharityStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\CharityStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get SearchableString value
     * @return string|null
     */
    public function getSearchableString()
    {
        return $this->SearchableString;
    }
    /**
     * Set SearchableString value
     * @param string $searchableString
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setSearchableString($searchableString = null)
    {
        // validation for constraint: string
        if (!is_null($searchableString) && !is_string($searchableString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchableString)), __LINE__);
        }
        $this->SearchableString = $searchableString;
        return $this;
    }
    /**
     * Get CharityRegion value
     * @return int|null
     */
    public function getCharityRegion()
    {
        return $this->CharityRegion;
    }
    /**
     * Set CharityRegion value
     * @param int $charityRegion
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setCharityRegion($charityRegion = null)
    {
        // validation for constraint: int
        if (!is_null($charityRegion) && !is_numeric($charityRegion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($charityRegion)), __LINE__);
        }
        $this->CharityRegion = $charityRegion;
        return $this;
    }
    /**
     * Get CharityDomain value
     * @return int[]|null
     */
    public function getCharityDomain()
    {
        return $this->CharityDomain;
    }
    /**
     * Set CharityDomain value
     * @throws \InvalidArgumentException
     * @param int[] $charityDomain
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setCharityDomain(array $charityDomain = array())
    {
        foreach ($charityDomain as $charityInfoTypeCharityDomainItem) {
            // validation for constraint: itemType
            if (!is_numeric($charityInfoTypeCharityDomainItem)) {
                throw new \InvalidArgumentException(sprintf('The CharityDomain property can only contain items of int, "%s" given', is_object($charityInfoTypeCharityDomainItem) ? get_class($charityInfoTypeCharityDomainItem) : gettype($charityInfoTypeCharityDomainItem)), __LINE__);
            }
        }
        $this->CharityDomain = $charityDomain;
        return $this;
    }
    /**
     * Add item to CharityDomain value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function addToCharityDomain($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The CharityDomain property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CharityDomain[] = $item;
        return $this;
    }
    /**
     * Get CharityID value
     * @return string|null
     */
    public function getCharityID()
    {
        return $this->CharityID;
    }
    /**
     * Set CharityID value
     * @param string $charityID
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setCharityID($charityID = null)
    {
        // validation for constraint: string
        if (!is_null($charityID) && !is_string($charityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charityID)), __LINE__);
        }
        $this->CharityID = $charityID;
        return $this;
    }
    /**
     * Get LogoURLSelling value
     * @return string|null
     */
    public function getLogoURLSelling()
    {
        return $this->LogoURLSelling;
    }
    /**
     * Set LogoURLSelling value
     * @param string $logoURLSelling
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setLogoURLSelling($logoURLSelling = null)
    {
        // validation for constraint: string
        if (!is_null($logoURLSelling) && !is_string($logoURLSelling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($logoURLSelling)), __LINE__);
        }
        $this->LogoURLSelling = $logoURLSelling;
        return $this;
    }
    /**
     * Get DisplayLogoSelling value
     * @return bool|null
     */
    public function getDisplayLogoSelling()
    {
        return $this->DisplayLogoSelling;
    }
    /**
     * Set DisplayLogoSelling value
     * @param bool $displayLogoSelling
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setDisplayLogoSelling($displayLogoSelling = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayLogoSelling) && !is_bool($displayLogoSelling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayLogoSelling)), __LINE__);
        }
        $this->DisplayLogoSelling = $displayLogoSelling;
        return $this;
    }
    /**
     * Get DisplayNameInCheckout value
     * @return bool|null
     */
    public function getDisplayNameInCheckout()
    {
        return $this->DisplayNameInCheckout;
    }
    /**
     * Set DisplayNameInCheckout value
     * @param bool $displayNameInCheckout
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setDisplayNameInCheckout($displayNameInCheckout = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayNameInCheckout) && !is_bool($displayNameInCheckout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayNameInCheckout)), __LINE__);
        }
        $this->DisplayNameInCheckout = $displayNameInCheckout;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ShowMultipleDonationAmountInCheckout value
     * @return bool|null
     */
    public function getShowMultipleDonationAmountInCheckout()
    {
        return $this->ShowMultipleDonationAmountInCheckout;
    }
    /**
     * Set ShowMultipleDonationAmountInCheckout value
     * @param bool $showMultipleDonationAmountInCheckout
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setShowMultipleDonationAmountInCheckout($showMultipleDonationAmountInCheckout = null)
    {
        // validation for constraint: boolean
        if (!is_null($showMultipleDonationAmountInCheckout) && !is_bool($showMultipleDonationAmountInCheckout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showMultipleDonationAmountInCheckout)), __LINE__);
        }
        $this->ShowMultipleDonationAmountInCheckout = $showMultipleDonationAmountInCheckout;
        return $this;
    }
    /**
     * Get ExternalID value
     * @return string|null
     */
    public function getExternalID()
    {
        return $this->ExternalID;
    }
    /**
     * Set ExternalID value
     * @param string $externalID
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setExternalID($externalID = null)
    {
        // validation for constraint: string
        if (!is_null($externalID) && !is_string($externalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalID)), __LINE__);
        }
        $this->ExternalID = $externalID;
        return $this;
    }
    /**
     * Get PopularityIndex value
     * @return int|null
     */
    public function getPopularityIndex()
    {
        return $this->PopularityIndex;
    }
    /**
     * Set PopularityIndex value
     * @param int $popularityIndex
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setPopularityIndex($popularityIndex = null)
    {
        // validation for constraint: int
        if (!is_null($popularityIndex) && !is_numeric($popularityIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($popularityIndex)), __LINE__);
        }
        $this->PopularityIndex = $popularityIndex;
        return $this;
    }
    /**
     * Get EIN value
     * @return string|null
     */
    public function getEIN()
    {
        return $this->EIN;
    }
    /**
     * Set EIN value
     * @param string $eIN
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setEIN($eIN = null)
    {
        // validation for constraint: string
        if (!is_null($eIN) && !is_string($eIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eIN)), __LINE__);
        }
        $this->EIN = $eIN;
        return $this;
    }
    /**
     * Get NonProfitSecondName value
     * @return string|null
     */
    public function getNonProfitSecondName()
    {
        return $this->NonProfitSecondName;
    }
    /**
     * Set NonProfitSecondName value
     * @param string $nonProfitSecondName
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setNonProfitSecondName($nonProfitSecondName = null)
    {
        // validation for constraint: string
        if (!is_null($nonProfitSecondName) && !is_string($nonProfitSecondName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nonProfitSecondName)), __LINE__);
        }
        $this->NonProfitSecondName = $nonProfitSecondName;
        return $this;
    }
    /**
     * Get NonProfitAddress value
     * @return \macropage\ebaysdk\trading\StructType\NonProfitAddressType[]|null
     */
    public function getNonProfitAddress()
    {
        return $this->NonProfitAddress;
    }
    /**
     * Set NonProfitAddress value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NonProfitAddressType[] $nonProfitAddress
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setNonProfitAddress(array $nonProfitAddress = array())
    {
        foreach ($nonProfitAddress as $charityInfoTypeNonProfitAddressItem) {
            // validation for constraint: itemType
            if (!$charityInfoTypeNonProfitAddressItem instanceof \macropage\ebaysdk\trading\StructType\NonProfitAddressType) {
                throw new \InvalidArgumentException(sprintf('The NonProfitAddress property can only contain items of \macropage\ebaysdk\trading\StructType\NonProfitAddressType, "%s" given', is_object($charityInfoTypeNonProfitAddressItem) ? get_class($charityInfoTypeNonProfitAddressItem) : gettype($charityInfoTypeNonProfitAddressItem)), __LINE__);
            }
        }
        $this->NonProfitAddress = $nonProfitAddress;
        return $this;
    }
    /**
     * Add item to NonProfitAddress value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NonProfitAddressType $item
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function addToNonProfitAddress(\macropage\ebaysdk\trading\StructType\NonProfitAddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NonProfitAddressType) {
            throw new \InvalidArgumentException(sprintf('The NonProfitAddress property can only contain items of \macropage\ebaysdk\trading\StructType\NonProfitAddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NonProfitAddress[] = $item;
        return $this;
    }
    /**
     * Get NonProfitSocialAddress value
     * @return \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType[]|null
     */
    public function getNonProfitSocialAddress()
    {
        return $this->NonProfitSocialAddress;
    }
    /**
     * Set NonProfitSocialAddress value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType[] $nonProfitSocialAddress
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setNonProfitSocialAddress(array $nonProfitSocialAddress = array())
    {
        foreach ($nonProfitSocialAddress as $charityInfoTypeNonProfitSocialAddressItem) {
            // validation for constraint: itemType
            if (!$charityInfoTypeNonProfitSocialAddressItem instanceof \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType) {
                throw new \InvalidArgumentException(sprintf('The NonProfitSocialAddress property can only contain items of \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType, "%s" given', is_object($charityInfoTypeNonProfitSocialAddressItem) ? get_class($charityInfoTypeNonProfitSocialAddressItem) : gettype($charityInfoTypeNonProfitSocialAddressItem)), __LINE__);
            }
        }
        $this->NonProfitSocialAddress = $nonProfitSocialAddress;
        return $this;
    }
    /**
     * Add item to NonProfitSocialAddress value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType $item
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function addToNonProfitSocialAddress(\macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType) {
            throw new \InvalidArgumentException(sprintf('The NonProfitSocialAddress property can only contain items of \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NonProfitSocialAddress[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CharityInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType
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
