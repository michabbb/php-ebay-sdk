<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the listing recommendations (if applicable), the estimated fees for the proposed new listing (except the Final Value Fee, which isn't calculated until the item has sold), and other details.
 * @subpackage Structs
 */
class VerifyAddItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: With a successful <b>VerifyAddItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually create
     * an active listing. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyAddItem<b> call was published. The fees in this container will not include any fees that are based on the purchase price
     * (such as Final Value Fee) and only come into play when the listing has a sale. <br> <br> All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'. <br> <br> <span class="tablenote"><b>Note:</b> The
     * currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>VerifyAddItem</b> call
     * to verify a listing on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FeesType $Fees = null;
    /**
     * The ExpressListing
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpressListing = null;
    /**
     * The ExpressItemRequirements
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $ExpressItemRequirements = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: ID of the primary category in which the item would be listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in PrimaryCategory was mapped to a new ID by eBay. If the primary
     * category has not changed or it has expired with no replacement, CategoryID does not return a value.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: ID of the secondary category in which the item would be listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory was mapped to a new ID by eBay. If the secondary
     * category has not changed or it has expired with no replacement, Category2ID does not return a value.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Category2ID = null;
    /**
     * The DiscountReason
     * Meta information extracted from the WSDL
     * - documentation: The nature of the discount, if a discount would have applied had this actually been listed at this time.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $DiscountReason = [];
    /**
     * The ProductSuggestions
     * Meta information extracted from the WSDL
     * - documentation: Provides a list of products recommended by eBay which match the item information provided by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductSuggestionsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $ProductSuggestions = null;
    /**
     * The ListingRecommendations
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container is deprecated, and will no longer be returned after June 1, 2021. eBay recommends that you integrate with the REST-based <a href="/api-docs/sell/recommendation/overview.html"
     * target="_blank">Recommendation API</a> to retrieve recommendations for improving your listings and sales performance, or with the <a href="/api-docs/sell/compliance/overview.html" target="_blank">Compliance API</a> to discover non-compliant listings
     * or listings that are at risk at becoming non-compliant in the future. </span> <br><br> Container consisting of one or more <b>Recommendation</b> containers. Each <b>Recommendation</b> container provides a message to the seller on how a listing can be
     * improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in
     * a Title, and/or a recommendation to offer fast handling (same-day handling or handling time of 1 day) and/or a free shipping option in order to qualify the listing for a Fast 'N Free badge. <br><br> This container is only returned if the
     * <b>IncludeRecommendations</b> flag was included and set to 'true' in the <b>VerifyAddItem</b> request, and if at least one listing recommendation exists for the listing about to be listed. If one or more listing recommendations are returned, it will
     * be at the seller's discretion about whether to revise the listing based on eBay's listing recommendation(s) before actually creating the listing through an <b>AddItem</b> call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingRecommendationsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ListingRecommendationsType $ListingRecommendations = null;
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
    public function __construct(?string $itemID = null, ?\macropage\ebaysdk\trading\StructType\FeesType $fees = null, ?bool $expressListing = null, ?\macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements = null, ?string $categoryID = null, ?string $category2ID = null, array $discountReason = [], ?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null, ?\macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    public function getFees(): ?\macropage\ebaysdk\trading\StructType\FeesType
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setFees(?\macropage\ebaysdk\trading\StructType\FeesType $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get ExpressListing value
     * @return bool|null
     */
    public function getExpressListing(): ?bool
    {
        return $this->ExpressListing;
    }
    /**
     * Set ExpressListing value
     * @param bool $expressListing
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setExpressListing(?bool $expressListing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expressListing) && !is_bool($expressListing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressListing, true), gettype($expressListing)), __LINE__);
        }
        $this->ExpressListing = $expressListing;
        
        return $this;
    }
    /**
     * Get ExpressItemRequirements value
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType|null
     */
    public function getExpressItemRequirements(): ?\macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
    {
        return $this->ExpressItemRequirements;
    }
    /**
     * Set ExpressItemRequirements value
     * @param \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setExpressItemRequirements(?\macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType $expressItemRequirements = null): self
    {
        $this->ExpressItemRequirements = $expressItemRequirements;
        
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID(): ?string
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setCategory2ID(?string $category2ID = null): self
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category2ID, true), gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        
        return $this;
    }
    /**
     * Get DiscountReason value
     * @return string[]
     */
    public function getDiscountReason(): array
    {
        return $this->DiscountReason;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountReasonForArrayConstraintsFromSetDiscountReason(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $verifyAddItemResponseTypeDiscountReasonItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($verifyAddItemResponseTypeDiscountReasonItem)) {
                $invalidValues[] = is_object($verifyAddItemResponseTypeDiscountReasonItem) ? get_class($verifyAddItemResponseTypeDiscountReasonItem) : sprintf('%s(%s)', gettype($verifyAddItemResponseTypeDiscountReasonItem), var_export($verifyAddItemResponseTypeDiscountReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscountReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $discountReason
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setDiscountReason(array $discountReason = []): self
    {
        // validation for constraint: array
        if ('' !== ($discountReasonArrayErrorMessage = self::validateDiscountReasonForArrayConstraintsFromSetDiscountReason($discountReason))) {
            throw new InvalidArgumentException($discountReasonArrayErrorMessage, __LINE__);
        }
        $this->DiscountReason = $discountReason;
        
        return $this;
    }
    /**
     * Add item to DiscountReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function addToDiscountReason(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason[] = $item;
        
        return $this;
    }
    /**
     * Get ProductSuggestions value
     * @return \macropage\ebaysdk\trading\StructType\ProductSuggestionsType|null
     */
    public function getProductSuggestions(): ?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType
    {
        return $this->ProductSuggestions;
    }
    /**
     * Set ProductSuggestions value
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setProductSuggestions(?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null): self
    {
        $this->ProductSuggestions = $productSuggestions;
        
        return $this;
    }
    /**
     * Get ListingRecommendations value
     * @return \macropage\ebaysdk\trading\StructType\ListingRecommendationsType|null
     */
    public function getListingRecommendations(): ?\macropage\ebaysdk\trading\StructType\ListingRecommendationsType
    {
        return $this->ListingRecommendations;
    }
    /**
     * Set ListingRecommendations value
     * @param \macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations
     * @return \macropage\ebaysdk\trading\StructType\VerifyAddItemResponseType
     */
    public function setListingRecommendations(?\macropage\ebaysdk\trading\StructType\ListingRecommendationsType $listingRecommendations = null): self
    {
        $this->ListingRecommendations = $listingRecommendations;
        
        return $this;
    }
}
