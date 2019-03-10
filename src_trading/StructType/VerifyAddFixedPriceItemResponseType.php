<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddFixedPriceItemResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns the listing recommendations (if applicable), the estimated fees for the proposed new listing (except the Final Value Fee, which isn't calculated until the item has sold), and other details.
 * @subpackage Structs
 */
class VerifyAddFixedPriceItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Represents the item ID for the new fixed-price listing. VerifyAddFixedPriceItem does not actually list an item, so 0 is returned instead of a normal item ID. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The SKU
     * Meta informations extracted from the WSDL
     * - documentation: Item-level SKU for the new listing, if the seller specified tem.SKU in the request. Variation SKUs are not returned (see GetItem instead). | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary
     * in different contexts. For usage information and rules, see the fields that reference this type.
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: Child elements contain the estimated listing fees for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
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
     * The ListingRecommendations
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated
     * seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to offer fast handling
     * (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge. <br><br> This container is only returned if the <b>IncludeRecommendations</b> flag was included and set to 'true' in
     * the <b>VerifyAddFixedPriceItem</b> request, and if at least one listing recommendation exists for the listing about to be listed. If one or more listing recommendations are returned, it will be at the seller's discretion about whether to revise the
     * listing based on eBay's listing recommendation(s) before actually creating the listing through an <b>AddFixedPriceItem</b> call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingRecommendationsType
     */
    public $ListingRecommendations;
    /**
     * Constructor method for VerifyAddFixedPriceItemResponseType
     * @uses VerifyAddFixedPriceItemResponseType::setItemID()
     * @uses VerifyAddFixedPriceItemResponseType::setSKU()
     * @uses VerifyAddFixedPriceItemResponseType::setFees()
     * @uses VerifyAddFixedPriceItemResponseType::setExpressListing()
     * @uses VerifyAddFixedPriceItemResponseType::setExpressItemRequirements()
     * @uses VerifyAddFixedPriceItemResponseType::setCategoryID()
     * @uses VerifyAddFixedPriceItemResponseType::setCategory2ID()
     * @uses VerifyAddFixedPriceItemResponseType::setDiscountReason()
     * @uses VerifyAddFixedPriceItemResponseType::setListingRecommendations()
     * @param string $itemID
     * @param string $sKU
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @param bool $expressListing
     * @param \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements
     * @param string $categoryID
     * @param string $category2ID
     * @param string[] $discountReason
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations
     */
    public function __construct($itemID = null, $sKU = null, \macropage\ebaysdk\trading\StructType\FeesType $fees = null, $expressListing = null, \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements = null, $categoryID = null, $category2ID = null, array $discountReason = array(), \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations = null)
    {
        $this
            ->setItemID($itemID)
            ->setSKU($sKU)
            ->setFees($fees)
            ->setExpressListing($expressListing)
            ->setExpressItemRequirements($expressItemRequirements)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setDiscountReason($discountReason)
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
     */
    public function setDiscountReason(array $discountReason = array())
    {
        $invalidValues = array();
        foreach ($discountReason as $verifyAddFixedPriceItemResponseTypeDiscountReasonItem) {
            if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($verifyAddFixedPriceItemResponseTypeDiscountReasonItem)) {
                $invalidValues[] = var_export($verifyAddFixedPriceItemResponseTypeDiscountReasonItem, true);
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddFixedPriceItemResponseType
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
