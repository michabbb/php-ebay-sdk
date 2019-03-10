<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessagePreferencesRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns a seller's Ask Seller a Question (ASQ) subjects, each in its own Subject node.
 * @subpackage Structs
 */
class GetMessagePreferencesRequestType extends AbstractRequestType
{
    /**
     * The SellerID
     * Meta informations extracted from the WSDL
     * - documentation: The ID of the user to retrieve ASQ subjects for. This value must be specified in the request, but does not need to be the same user as the user making the request. | This is a string wrapper for the eBay ID that uniquely identifies a
     * user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from
     * fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers
     * will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $SellerID;
    /**
     * The IncludeASQPreferences
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates that the ASQ subjects for the specified user should be returned.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeASQPreferences;
    /**
     * Constructor method for GetMessagePreferencesRequestType
     * @uses GetMessagePreferencesRequestType::setSellerID()
     * @uses GetMessagePreferencesRequestType::setIncludeASQPreferences()
     * @param string $sellerID
     * @param bool $includeASQPreferences
     */
    public function __construct($sellerID = null, $includeASQPreferences = null)
    {
        $this
            ->setSellerID($sellerID)
            ->setIncludeASQPreferences($includeASQPreferences);
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID()
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType
     */
    public function setSellerID($sellerID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        return $this;
    }
    /**
     * Get IncludeASQPreferences value
     * @return bool|null
     */
    public function getIncludeASQPreferences()
    {
        return $this->IncludeASQPreferences;
    }
    /**
     * Set IncludeASQPreferences value
     * @param bool $includeASQPreferences
     * @return \macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType
     */
    public function setIncludeASQPreferences($includeASQPreferences = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeASQPreferences) && !is_bool($includeASQPreferences)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeASQPreferences)), __LINE__);
        }
        $this->IncludeASQPreferences = $includeASQPreferences;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetMessagePreferencesRequestType
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
