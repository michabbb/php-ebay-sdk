<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddItemResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns the listing recommendations (if applicable), the estimated fees for the proposed new listing (except the Final Value Fee, which isn't calculated until the item has sold), and other details.
 * @subpackage Structs
 */
class VerifyAddItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Represents the item ID for the new listing. VerifyAddItem does not actually list an item, so 0 is returned instead of a normal item ID. <br><br> <span class="tablenote"><b>Note:</b> Although we represent item IDs as strings in the
     * schema, we recommend you store them as 64-bit signed integers. If you choose to store item IDs as strings, allocate at least 19 characters (assuming decimal digits are used) to hold them. eBay will increase the size of IDs over time. Your code should
     * be prepared to handle IDs of up to 19 digits. For more information about item IDs, see <a href= "http://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=468"> Common FAQs on eBay Item IDs and other eBay IDs</a> in the Knowledge
     * Base. </span> | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: Child Fee containers provide the listing feature names, fees, and possible discounts for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. <br /> <br /> There
     * is no guarantee that a PromotionalDiscount returned with VerifyAddItem will be realized when the seller uses AddItem to list the same item. This is the result of the timing of certain promotions.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType
     */
    public $Fees;
    /**
     * The ExpressListing
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressListing;
    /**
     * The ExpressItemRequirements
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public $ExpressItemRequirements;
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: ID of the primary category in which the item would be listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in PrimaryCategory was mapped to a new ID by eBay. If the primary
     * category has not changed or it has expired with no replacement, CategoryID does not return a value.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta informations extracted from the WSDL
     * - documentation: ID of the secondary category in which the item would be listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory was mapped to a new ID by eBay. If the secondary
     * category has not changed or it has expired with no replacement, Category2ID does not return a value.
     * - minOccurs: 0
     * @var string
     */
    public $Category2ID;
    /**
     * The DiscountReason
     * Meta informations extracted from the WSDL
     * - documentation: The nature of the discount, if a discount would have applied had this actually been listed at this time.
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
     * the <b>VerifyAddItem</b> request, and if at least one listing recommendation exists for the listing about to be listed. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the listing
     * based on eBay's listing recommendation(s) before actually creating the listing through an <b>AddItem</b> call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
     */
    public $ListingRecommendations;
    /**
     * Constructor method for VerifyAddItemResponseType
     * @uses VerifyAddItemResponseType::setItemID()
     * @uses VerifyAddItemResponseType::setFees()
     * @uses VerifyAddItemResponseType::setExpressListing()
     * @uses VerifyAddItemResponseType::setExpressItemRequirements()
     * @uses VerifyAddItemResponseType::setCategoryID()
     * @uses VerifyAddItemResponseType::setCategory2ID()
     * @uses VerifyAddItemResponseType::setDiscountReason()
     * @uses VerifyAddItemResponseType::setProductSuggestions()
     * @uses VerifyAddItemResponseType::setListingRecommendations()
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @param bool $expressListing
     * @param \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements
     * @param string $categoryID
     * @param string $category2ID
     * @param string[] $discountReason
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations
     */
    public function __construct($itemID = null, \macropage\ebaysdk\trading\StructType\FeesType $fees = null, $expressListing = null, \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements = null, $categoryID = null, $category2ID = null, array $discountReason = array(), \macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null, \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations = null)
    {
        $this
            ->setItemID($itemID)
            ->setFees($fees)
            ->setExpressListing($expressListing)
            ->setExpressItemRequirements($expressItemRequirements)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setFees(\macropage\ebaysdk\trading\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get ExpressListing value
     * @return bool|null
     */
    public function getExpressListing()
    {
        return $this->ExpressListing;
    }
    /**
     * Set ExpressListing value
     * @param bool $expressListing
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setExpressListing($expressListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressListing) && !is_bool($expressListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expressListing)), __LINE__);
        }
        $this->ExpressListing = $expressListing;
        return $this;
    }
    /**
     * Get ExpressItemRequirements value
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType|null
     */
    public function getExpressItemRequirements()
    {
        return $this->ExpressItemRequirements;
    }
    /**
     * Set ExpressItemRequirements value
     * @param \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setExpressItemRequirements(\macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements = null)
    {
        $this->ExpressItemRequirements = $expressItemRequirements;
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setDiscountReason(array $discountReason = array())
    {
        $invalidValues = array();
        foreach ($discountReason as $verifyAddItemResponseTypeDiscountReasonItem) {
            if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($verifyAddItemResponseTypeDiscountReasonItem)) {
                $invalidValues[] = var_export($verifyAddItemResponseTypeDiscountReasonItem, true);
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
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
