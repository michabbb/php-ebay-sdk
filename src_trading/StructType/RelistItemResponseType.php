<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelistItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>RelistItem</b> call. The response includes the Item ID for the relisted item, the SKU value for the item (if any), listing recommendations (if applicable), the estimated fees for the relisted item
 * (except the Final Value Fee, which isn't calculated until the item has sold), the start and end times of the listing, and other details.
 * @subpackage Structs
 */
class RelistItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for the relisted item. Note that the <b>ItemID</b> value changes when a listing is relisted, so this will not be the same <b>ItemID</b> value that was passed in the call request. <br/><br/> | Type that
     * represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of fees associated with the relisted item. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a
     * sale. <br> <br> All listing fee types are returned, even if those fees are not applicable for the relisted item and are '0.0'. <br> <br> <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container
     * reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>RelistItem</b> call to relist an item on the eBay US site, the currency type shown for each
     * fee will be <code>USD</code> and not <code>CAD</code>. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FeesType $Fees = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the relisted item became active on the eBay site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the relisted item is scheduled to end on the eBay site. This date/time is calculated by using the <b>StartTime</b> and the the listing duration. <br><br> <span
     * class="tablenote"><b>Note: </b> Starting July 1, 2019, the Good 'Til Cancelled renewal schedule will be modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be
     * August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on
     * February 28th (or 29th during a 'Leap Year'). See the <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019
     * Seller Updates</b> for more information about this change. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the primary eBay category in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request and the category ID
     * passed in the <b>Item.PrimaryCategory</b> field was mapped to a new category ID by eBay. If the primary category has not changed or it has expired with no replacement, this field is not returned. <br/><br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the secondary eBay category (if one was used) in which the item was relisted. This field is only returned if the <b>Item.CategoryMappingAllowed</b> field was included and set to <code>true</code> in the request
     * and the category ID passed in the <b>Item.SecondaryCategory</b> field was mapped to a new category ID by eBay. If the secondary category has not changed or it has expired with no replacement, this field is not returned. <br/><br/>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Category2ID = null;
    /**
     * The DiscountReason
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if an eBay special offer or promotion is applicable to the listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $DiscountReason = null;
    /**
     * The ProductSuggestions
     * Meta information extracted from the WSDL
     * - documentation: Provides a list of products recommended by eBay which match the item information provided by the seller.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductSuggestionsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $ProductSuggestions = null;
    /**
     * Constructor method for RelistItemResponseType
     * @uses RelistItemResponseType::setItemID()
     * @uses RelistItemResponseType::setFees()
     * @uses RelistItemResponseType::setStartTime()
     * @uses RelistItemResponseType::setEndTime()
     * @uses RelistItemResponseType::setCategoryID()
     * @uses RelistItemResponseType::setCategory2ID()
     * @uses RelistItemResponseType::setDiscountReason()
     * @uses RelistItemResponseType::setProductSuggestions()
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @param string $startTime
     * @param string $endTime
     * @param string $categoryID
     * @param string $category2ID
     * @param string[] $discountReason
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions
     */
    public function __construct(?string $itemID = null, ?\macropage\ebaysdk\trading\StructType\FeesType $fees = null, ?string $startTime = null, ?string $endTime = null, ?string $categoryID = null, ?string $category2ID = null, ?array $discountReason = null, ?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null)
    {
        $this
            ->setItemID($itemID)
            ->setFees($fees)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setDiscountReason($discountReason)
            ->setProductSuggestions($productSuggestions);
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
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
     */
    public function setFees(?\macropage\ebaysdk\trading\StructType\FeesType $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
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
    public function getDiscountReason(): ?array
    {
        return $this->DiscountReason;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountReasonForArrayConstraintsFromSetDiscountReason(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $relistItemResponseTypeDiscountReasonItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($relistItemResponseTypeDiscountReasonItem)) {
                $invalidValues[] = is_object($relistItemResponseTypeDiscountReasonItem) ? get_class($relistItemResponseTypeDiscountReasonItem) : sprintf('%s(%s)', gettype($relistItemResponseTypeDiscountReasonItem), var_export($relistItemResponseTypeDiscountReasonItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
     */
    public function setDiscountReason(?array $discountReason = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\RelistItemResponseType
     */
    public function setProductSuggestions(?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null): self
    {
        $this->ProductSuggestions = $productSuggestions;
        
        return $this;
    }
}
