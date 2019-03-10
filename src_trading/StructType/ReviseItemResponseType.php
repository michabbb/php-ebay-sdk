<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReviseItemResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type for the <b>ReviseItem</b> call. The response includes the Item ID for the revised item, the SKU value for the item (if any), listing recommendations (if applicable), the estimated fees for the revised item
 * (except the Final Value Fee, which isn't calculated until the item has sold), the start and end times of the listing, and other details.
 * @subpackage Structs
 */
class ReviseItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier for the revised item. Note that the <b>ItemID</b> does not change when a listing is revised, so this will be the same <b>ItemID</b> value that was passed in the call request. <br/><br/> | Type that represents
     * the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the listing was created on the eBay site. This value doesn't change when a listing is revised.
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the revised item is scheduled to end on the eBay site. This date/time is calculated by using the <b>StartTime</b> and the the listing duration. This value doesn't change when a listing
     * is revised.
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of the estimated listing fees for the revised listing. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this
     * value cannot be determined until a sale is made.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType
     */
    public $Fees;
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the primary eBay category for the revised listing. This field is returned if the primary category was changed with the revision, and the primary category can only be changed if a fixed-price listing has no
     * sales/auction listing has no bids, and the listing does not end within 12 hours. <br/><br/> This field can also be returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID
     * passed in the <b>Item.PrimaryCategory</b> field was mapped to a new category ID by eBay. If the primary category has not changed or it has expired with no replacement, this field is not returned. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the secondary eBay category for the revised listing. This field is returned if the secondary category was changed with the revision, and the secondary category can only be changed if a fixed-price listing has no
     * sales/auction listing has no bids, and the listing does not end within 12 hours. <br/><br/> This field can also be returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID
     * passed in the <b>Item.PrimaryCategory</b> field was mapped to a new category ID by eBay. If the primary category has not changed or it has expired with no replacement, this field is not returned. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $Category2ID;
    /**
     * The VerifyOnly
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned if the <b>VerifyOnly</b> field was included in the call request and set to <code>true</code>. <br/><br/> If the listing was revised in 'Verify Only' mode, the active listing is not actually revised, but the
     * same response is returned and the seller gets to see the expected fees based on the changes made, and can also view any listing recommendations if the <b>Item.IncludeRecommedations</b> boolean input field was included and set to <code>true</code>.
     * - minOccurs: 0
     * @var bool
     */
    public $VerifyOnly;
    /**
     * The DiscountReason
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned if an eBay special offer or promotion is applicable to the listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DiscountReason;
    /**
     * The ProductSuggestions
     * Meta informations extracted from the WSDL
     * - documentation: Provides a list of products recommended by eBay which match the item information provided by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductSuggestionsType
     */
    public $ProductSuggestions;
    /**
     * The ListingRecommendations
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated
     * seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling
     * (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge. <br><br> This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in
     * the <b>ReviseItem</b> request, and if at least one listing recommendation exists for the listing about to be revised. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the item again
     * based on eBay's listing recommendation(s).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
     */
    public $ListingRecommendations;
    /**
     * Constructor method for ReviseItemResponseType
     * @uses ReviseItemResponseType::setItemID()
     * @uses ReviseItemResponseType::setStartTime()
     * @uses ReviseItemResponseType::setEndTime()
     * @uses ReviseItemResponseType::setFees()
     * @uses ReviseItemResponseType::setCategoryID()
     * @uses ReviseItemResponseType::setCategory2ID()
     * @uses ReviseItemResponseType::setVerifyOnly()
     * @uses ReviseItemResponseType::setDiscountReason()
     * @uses ReviseItemResponseType::setProductSuggestions()
     * @uses ReviseItemResponseType::setListingRecommendations()
     * @param string $itemID
     * @param string $startTime
     * @param string $endTime
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @param string $categoryID
     * @param string $category2ID
     * @param bool $verifyOnly
     * @param string[] $discountReason
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations
     */
    public function __construct($itemID = null, $startTime = null, $endTime = null, \macropage\ebaysdk\trading\StructType\FeesType $fees = null, $categoryID = null, $category2ID = null, $verifyOnly = null, array $discountReason = array(), \macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null, \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations = null)
    {
        $this
            ->setItemID($itemID)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setFees($fees)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setVerifyOnly($verifyOnly)
            ->setDiscountReason($discountReason)
            ->setProductSuggestions($productSuggestions)
            ->setListingRecommendations($listingRecommendations);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setFees(\macropage\ebaysdk\trading\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID()
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setCategory2ID($category2ID = null)
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        return $this;
    }
    /**
     * Get VerifyOnly value
     * @return bool|null
     */
    public function getVerifyOnly()
    {
        return $this->VerifyOnly;
    }
    /**
     * Set VerifyOnly value
     * @param bool $verifyOnly
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setVerifyOnly($verifyOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($verifyOnly) && !is_bool($verifyOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($verifyOnly)), __LINE__);
        }
        $this->VerifyOnly = $verifyOnly;
        return $this;
    }
    /**
     * Get DiscountReason value
     * @return string[]|null
     */
    public function getDiscountReason()
    {
        return $this->DiscountReason;
    }
    /**
     * Set DiscountReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $discountReason
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setDiscountReason(array $discountReason = array())
    {
        $invalidValues = array();
        foreach ($discountReason as $reviseItemResponseTypeDiscountReasonItem) {
            if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($reviseItemResponseTypeDiscountReasonItem)) {
                $invalidValues[] = var_export($reviseItemResponseTypeDiscountReasonItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason = $discountReason;
        return $this;
    }
    /**
     * Add item to DiscountReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function addToDiscountReason($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason[] = $item;
        return $this;
    }
    /**
     * Get ProductSuggestions value
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType|null
     */
    public function getProductSuggestions()
    {
        return $this->ProductSuggestions;
    }
    /**
     * Set ProductSuggestions value
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setProductSuggestions(\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null)
    {
        $this->ProductSuggestions = $productSuggestions;
        return $this;
    }
    /**
     * Get ListingRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType|null
     */
    public function getListingRecommendations()
    {
        return $this->ListingRecommendations;
    }
    /**
     * Set ListingRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
     */
    public function setListingRecommendations(\macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations = null)
    {
        $this->ListingRecommendations = $listingRecommendations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ReviseItemResponseType
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
