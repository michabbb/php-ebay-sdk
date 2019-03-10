<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemsCanceledEventType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ItemsCanceledEventType extends AbstractResponseType
{
    /**
     * The CanceledItemIDArray
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemIDArrayType
     */
    public $CanceledItemIDArray;
    /**
     * The EligibleForRelist
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleForRelist;
    /**
     * The SellerID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders,
     * OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API
     * call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - minOccurs: 0
     * @var string
     */
    public $SellerID;
    /**
     * Constructor method for ItemsCanceledEventType
     * @uses ItemsCanceledEventType::setCanceledItemIDArray()
     * @uses ItemsCanceledEventType::setEligibleForRelist()
     * @uses ItemsCanceledEventType::setSellerID()
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $canceledItemIDArray
     * @param bool $eligibleForRelist
     * @param string $sellerID
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ItemIDArrayType $canceledItemIDArray = null, $eligibleForRelist = null, $sellerID = null)
    {
        $this
            ->setCanceledItemIDArray($canceledItemIDArray)
            ->setEligibleForRelist($eligibleForRelist)
            ->setSellerID($sellerID);
    }
    /**
     * Get CanceledItemIDArray value
     * @return \macropage\ebaysdk\trading\StructType\ItemIDArrayType|null
     */
    public function getCanceledItemIDArray()
    {
        return $this->CanceledItemIDArray;
    }
    /**
     * Set CanceledItemIDArray value
     * @param \macropage\ebaysdk\trading\StructType\ItemIDArrayType $canceledItemIDArray
     * @return \macropage\ebaysdk\trading\StructType\ItemsCanceledEventType
     */
    public function setCanceledItemIDArray(\macropage\ebaysdk\trading\StructType\ItemIDArrayType $canceledItemIDArray = null)
    {
        $this->CanceledItemIDArray = $canceledItemIDArray;
        return $this;
    }
    /**
     * Get EligibleForRelist value
     * @return bool|null
     */
    public function getEligibleForRelist()
    {
        return $this->EligibleForRelist;
    }
    /**
     * Set EligibleForRelist value
     * @param bool $eligibleForRelist
     * @return \macropage\ebaysdk\trading\StructType\ItemsCanceledEventType
     */
    public function setEligibleForRelist($eligibleForRelist = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligibleForRelist) && !is_bool($eligibleForRelist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligibleForRelist)), __LINE__);
        }
        $this->EligibleForRelist = $eligibleForRelist;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ItemsCanceledEventType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ItemsCanceledEventType
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
