<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyRelistItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>VerifyRelistItem</b> call. The response includes the Item ID for the relisted item, the SKU value for the item (if any), listing recommendations (if applicable), the estimated fees for the relisted
 * item (except the Final Value Fee, which isn't calculated until the item has sold), the start and end times of the listing, and other details.
 * @subpackage Structs
 */
class VerifyRelistItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: With a successful <b>VerifyRelistItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually
     * relist an item. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyRelistItem<b> call was used to relist an item. The fees in this container will not include any fees that are based on the
     * purchase price (such as Final Value Fee) and only come into play when the listing has a sale. <br> <br> All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'. <br> <br> <span
     * class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is
     * using the <b>VerifyRelistItem</b> call to verify an item to be relisted on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FeesType $Fees = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the item to be relisted became active on the eBay site.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the item to be relisted is scheduled to end on the eBay site. This date/time is calculated by using the <b>StartTime</b> and the the listing duration. <br><br> <span
     * class="tablenote"><b>Note: </b> Starting July 1, 2019, the Good 'Til Cancelled renewal schedule will be modified from every 30 days to once per calendar month. For example, if a GTC listing is created July 5, the next monthly renewal date will be
     * August 5. If a GTC listing is created on the 31st of the month, but the following month only has 30 days, the renewal will happen on the 30th in the following month. Finally, if a GTC listing is created on January 29-31, the renewal will happen on
     * February 28th (or 29th during a 'Leap Year'). See the <a href="https://pages.ebay.com/seller-center/seller-updates/2019-spring/marketplace-updates.html#good-til-cancelled" target="_blank">Good 'Til Cancelled listings update</a> in the <b>Spring 2019
     * Seller Updates</b> for more information about this change. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The DiscountReason
     * Meta information extracted from the WSDL
     * - documentation: This field is returned if an eBay special offer or promotion is applicable to the listing.
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
     * Constructor method for VerifyRelistItemResponseType
     * @uses VerifyRelistItemResponseType::setItemID()
     * @uses VerifyRelistItemResponseType::setFees()
     * @uses VerifyRelistItemResponseType::setStartTime()
     * @uses VerifyRelistItemResponseType::setEndTime()
     * @uses VerifyRelistItemResponseType::setDiscountReason()
     * @uses VerifyRelistItemResponseType::setProductSuggestions()
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @param string $startTime
     * @param string $endTime
     * @param string[] $discountReason
     * @param \macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions
     */
    public function __construct(?string $itemID = null, ?\macropage\ebaysdk\trading\StructType\FeesType $fees = null, ?string $startTime = null, ?string $endTime = null, array $discountReason = [], ?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null)
    {
        $this
            ->setItemID($itemID)
            ->setFees($fees)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType
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
        foreach ($values as $verifyRelistItemResponseTypeDiscountReasonItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\DiscountReasonCodeType::valueIsValid($verifyRelistItemResponseTypeDiscountReasonItem)) {
                $invalidValues[] = is_object($verifyRelistItemResponseTypeDiscountReasonItem) ? get_class($verifyRelistItemResponseTypeDiscountReasonItem) : sprintf('%s(%s)', gettype($verifyRelistItemResponseTypeDiscountReasonItem), var_export($verifyRelistItemResponseTypeDiscountReasonItem, true));
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifyRelistItemResponseType
     */
    public function setProductSuggestions(?\macropage\ebaysdk\trading\StructType\ProductSuggestionsType $productSuggestions = null): self
    {
        $this->ProductSuggestions = $productSuggestions;
        
        return $this;
    }
}
