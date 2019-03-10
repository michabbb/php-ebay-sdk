<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCharitiesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base request type for the <b>GetCharities</b> call. This call is used to search for eBay for Charity nonprofit organizations. This call allows users to search for a specific nonprofit organization, or to search for
 * multiple nonprofit organizations from a particular category and/or geographical region, or by using a search string.
 * @subpackage Structs
 */
class GetCharitiesRequestType extends AbstractRequestType
{
    /**
     * The CharityID
     * Meta informations extracted from the WSDL
     * - documentation: A unique identification number assigned to a nonprofit organization when that organization registers with the PayPal Giving Fund. If a <b>CharityID</b> value is used in the request, all other search filters set in the call request
     * will be ignored, as the call will only search for the specified nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $CharityID;
    /**
     * The CharityName
     * Meta informations extracted from the WSDL
     * - documentation: This field will accept the full or partial name of a registered nonprofit organization. For example, if you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name may be returned in the
     * response. If the <b>MatchType</b> field is used and set to <code>StartsWith</code>, the phrase "heart" must come at the beginning of the nonprofit organization's name. However, if the <b>MatchType</b> field is used and set to <code>Contains</code>,
     * or is not used at all, all registered nonprofit organizations with "heart" in their name should be returned in the response. The string passed in this field is not case-sensitive. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $CharityName;
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - documentation: This field accept any string up to 350 characters in length. The functionality of this field is similar to the <b>CharityName</b> field, except that the call will also search for the supplied query string within the charity's mission
     * statement (which is returned under the <b>Charity.Mission</b> field in the response) as long as the <b>IncludeDescription</b> field is included in the call request and set to <code>true</code>. If you pass in a value of <b>heart</b>, all registered
     * nonprofit organizations with "heart" in their name or in their mission statement may be returned in the response. <br/><br/> The string passed in this field is not case-sensitive. The <b>MatchType</b> field will have no effect if the <b>Query</b>
     * field is used, as the <b>MatchType</b> field will only have an effect if a <b>CharityName</b> string field is included. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $Query;
    /**
     * The CharityRegion
     * Meta informations extracted from the WSDL
     * - documentation: This field can be used to search for registered nonprofit organizations within a specified geographical region. Each geographical region will have an integer value associated with it. This integer value is what is passed in to this
     * field.
     * - minOccurs: 0
     * @var int
     */
    public $CharityRegion;
    /**
     * The CharityDomain
     * Meta informations extracted from the WSDL
     * - documentation: This field can be used to search for registered nonprofit organizations within a specified charity domain or category. Each charity domain will have an integer value associated with it. This integer value is what is passed in to this
     * field. Nonprofit organizations can be associated with multiple charity domains.
     * - minOccurs: 0
     * @var int
     */
    public $CharityDomain;
    /**
     * The IncludeDescription
     * Meta informations extracted from the WSDL
     * - documentation: This field should be included and set to <code>true</code> if the <b>Query</b> field is used, and the user wishes to search the charity's name and its mission statement. If this field is omitted or included and set to
     * <code>false</code>, the call will only search charity names for the specified string in the <b>Query</b> field.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeDescription;
    /**
     * The MatchType
     * Meta informations extracted from the WSDL
     * - documentation: This filter is used if the user wants to specify where to look for the string specified in the <b>CharityName</b> field. The enumeration value input into this field controls the type of string matching to use when a value is
     * submitted in the <b>CharityName</b> field. If this field is omitted, and a <b>CharityName</b> string is used, this parameter value defaults to <code>StartsWith</code>. <br/><br/> This field is no applicable when a <b>Query</b> value is used.
     * <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $MatchType;
    /**
     * The Featured
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is used and set to <code>true</code> if the user wants to search for nonprofit organizations currently featured on the eBay for Charity site.
     * - minOccurs: 0
     * @var bool
     */
    public $Featured;
    /**
     * The CampaignID
     * Meta informations extracted from the WSDL
     * - documentation: Reserved for future use.
     * - minOccurs: 0
     * @var int
     */
    public $CampaignID;
    /**
     * Constructor method for GetCharitiesRequestType
     * @uses GetCharitiesRequestType::setCharityID()
     * @uses GetCharitiesRequestType::setCharityName()
     * @uses GetCharitiesRequestType::setQuery()
     * @uses GetCharitiesRequestType::setCharityRegion()
     * @uses GetCharitiesRequestType::setCharityDomain()
     * @uses GetCharitiesRequestType::setIncludeDescription()
     * @uses GetCharitiesRequestType::setMatchType()
     * @uses GetCharitiesRequestType::setFeatured()
     * @uses GetCharitiesRequestType::setCampaignID()
     * @param string $charityID
     * @param string $charityName
     * @param string $query
     * @param int $charityRegion
     * @param int $charityDomain
     * @param bool $includeDescription
     * @param string $matchType
     * @param bool $featured
     * @param int $campaignID
     */
    public function __construct($charityID = null, $charityName = null, $query = null, $charityRegion = null, $charityDomain = null, $includeDescription = null, $matchType = null, $featured = null, $campaignID = null)
    {
        $this
            ->setCharityID($charityID)
            ->setCharityName($charityName)
            ->setQuery($query)
            ->setCharityRegion($charityRegion)
            ->setCharityDomain($charityDomain)
            ->setIncludeDescription($includeDescription)
            ->setMatchType($matchType)
            ->setFeatured($featured)
            ->setCampaignID($campaignID);
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
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
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
     * Get CharityName value
     * @return string|null
     */
    public function getCharityName()
    {
        return $this->CharityName;
    }
    /**
     * Set CharityName value
     * @param string $charityName
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
     */
    public function setCharityName($charityName = null)
    {
        // validation for constraint: string
        if (!is_null($charityName) && !is_string($charityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charityName)), __LINE__);
        }
        $this->CharityName = $charityName;
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($query)), __LINE__);
        }
        $this->Query = $query;
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
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
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
     * @return int|null
     */
    public function getCharityDomain()
    {
        return $this->CharityDomain;
    }
    /**
     * Set CharityDomain value
     * @param int $charityDomain
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
     */
    public function setCharityDomain($charityDomain = null)
    {
        // validation for constraint: int
        if (!is_null($charityDomain) && !is_numeric($charityDomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($charityDomain)), __LINE__);
        }
        $this->CharityDomain = $charityDomain;
        return $this;
    }
    /**
     * Get IncludeDescription value
     * @return bool|null
     */
    public function getIncludeDescription()
    {
        return $this->IncludeDescription;
    }
    /**
     * Set IncludeDescription value
     * @param bool $includeDescription
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
     */
    public function setIncludeDescription($includeDescription = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeDescription) && !is_bool($includeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeDescription)), __LINE__);
        }
        $this->IncludeDescription = $includeDescription;
        return $this;
    }
    /**
     * Get MatchType value
     * @return string|null
     */
    public function getMatchType()
    {
        return $this->MatchType;
    }
    /**
     * Set MatchType value
     * @uses \macropage\ebaysdk\trading\EnumType\StringMatchCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StringMatchCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $matchType
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
     */
    public function setMatchType($matchType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StringMatchCodeType::valueIsValid($matchType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $matchType, implode(', ', \macropage\ebaysdk\trading\EnumType\StringMatchCodeType::getValidValues())), __LINE__);
        }
        $this->MatchType = $matchType;
        return $this;
    }
    /**
     * Get Featured value
     * @return bool|null
     */
    public function getFeatured()
    {
        return $this->Featured;
    }
    /**
     * Set Featured value
     * @param bool $featured
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
     */
    public function setFeatured($featured = null)
    {
        // validation for constraint: boolean
        if (!is_null($featured) && !is_bool($featured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($featured)), __LINE__);
        }
        $this->Featured = $featured;
        return $this;
    }
    /**
     * Get CampaignID value
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param int $campaignID
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
     */
    public function setCampaignID($campaignID = null)
    {
        // validation for constraint: int
        if (!is_null($campaignID) && !is_numeric($campaignID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesRequestType
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
