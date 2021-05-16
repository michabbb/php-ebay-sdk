<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespondToBestOfferRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call enables the seller to accept or decline a buyer's Best Offer on an item, or make a counter offer to the buyer's Best Offer. A seller can decline multiple Best Offers with one call, but the seller cannot accept or counter
 * offer multiple Best Offers with one call. Best Offers are not applicable to auction listings. <br/><br/> <span class="tablenote"><b>Note: </b> Historically, the Best Offer feature has not been available for auction listings, but beginning with
 * Version 1027, sellers in the US, UK, and DE sites are able to offer the Best Offer feature in auction listings. The seller can offer Buy It Now or Best Offer in an auction listing, but not both. </span>
 * @subpackage Structs
 */
class RespondToBestOfferRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the listing to which the seller is responding to a Best Offer. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The BestOfferID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a buyer's Best Offer for the order line item. This ID is created once the buyer makes a Best Offer. It is possible that a seller will get multiple Best Offers for an order line item, and if that seller would
     * like to decline multiple/all of the Best Offers with one <b>RespondToBestOffer</b> call, the seller would pass in each of these identifiers in a separate <b>BestOfferID</b> field. However, the seller can only accept or counter offer one Best Offer at
     * a time. | Unique identifier for a Best Offer. This identifier is created once a prospective buyer makes a Best Offer on an item.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $BestOfferID = [];
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value that the seller passes in to this field will control whether the seller accepts or make a counter offer to a single buyer's Best Offer, or declines one or more buyers' Best Offers. A seller can decline multiple
     * Best Offers with one call, but the seller cannot accept or counter offer multiple Best Offers with one call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Action = null;
    /**
     * The SellerResponse
     * Meta information extracted from the WSDL
     * - documentation: This optional text field allows the seller to provide more details to the buyer about the action being taken against the buyer's Best Offer. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerResponse = null;
    /**
     * The CounterOfferPrice
     * Meta information extracted from the WSDL
     * - documentation: The seller inserts counter offer price into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price cannot exceed the Buy It Now price
     * for a single quantity item. However, the dollar value in this field may exceed the Buy It Now price if the buyer is requesting or the seller is offering multiple quantity of the item (in a multiple-quantity listing). The quantity of the item must be
     * specified in the <b>CounterOfferQuantity</b> field if the seller is making a counter offer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $CounterOfferPrice = null;
    /**
     * The CounterOfferQuantity
     * Meta information extracted from the WSDL
     * - documentation: The seller inserts the quantity of items in the counter offer into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price must be
     * specified in the <b>CounterOfferPrice</b> field if the seller is making a counter offer. This price should reflect the quantity of items in the counter offer. So, if the seller's counter offer 'unit' price is 15 dollars, and the item quantity is '2',
     * the dollar value passed into the <b>CounterOfferPrice</b> field would be <code>30.0</code>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CounterOfferQuantity = null;
    /**
     * Constructor method for RespondToBestOfferRequestType
     * @uses RespondToBestOfferRequestType::setItemID()
     * @uses RespondToBestOfferRequestType::setBestOfferID()
     * @uses RespondToBestOfferRequestType::setAction()
     * @uses RespondToBestOfferRequestType::setSellerResponse()
     * @uses RespondToBestOfferRequestType::setCounterOfferPrice()
     * @uses RespondToBestOfferRequestType::setCounterOfferQuantity()
     * @param string $itemID
     * @param string[] $bestOfferID
     * @param string $action
     * @param string $sellerResponse
     * @param \macropage\ebaysdk\trading\StructType\AmountType $counterOfferPrice
     * @param int $counterOfferQuantity
     */
    public function __construct(?string $itemID = null, array $bestOfferID = [], ?string $action = null, ?string $sellerResponse = null, ?\macropage\ebaysdk\trading\StructType\AmountType $counterOfferPrice = null, ?int $counterOfferQuantity = null)
    {
        $this
            ->setItemID($itemID)
            ->setBestOfferID($bestOfferID)
            ->setAction($action)
            ->setSellerResponse($sellerResponse)
            ->setCounterOfferPrice($counterOfferPrice)
            ->setCounterOfferQuantity($counterOfferQuantity);
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
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
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
     * Get BestOfferID value
     * @return string[]
     */
    public function getBestOfferID(): array
    {
        return $this->BestOfferID;
    }
    /**
     * This method is responsible for validating the values passed to the setBestOfferID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBestOfferID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBestOfferIDForArrayConstraintsFromSetBestOfferID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respondToBestOfferRequestTypeBestOfferIDItem) {
            // validation for constraint: itemType
            if (!is_string($respondToBestOfferRequestTypeBestOfferIDItem)) {
                $invalidValues[] = is_object($respondToBestOfferRequestTypeBestOfferIDItem) ? get_class($respondToBestOfferRequestTypeBestOfferIDItem) : sprintf('%s(%s)', gettype($respondToBestOfferRequestTypeBestOfferIDItem), var_export($respondToBestOfferRequestTypeBestOfferIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BestOfferID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BestOfferID value
     * @throws InvalidArgumentException
     * @param string[] $bestOfferID
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setBestOfferID(array $bestOfferID = []): self
    {
        // validation for constraint: array
        if ('' !== ($bestOfferIDArrayErrorMessage = self::validateBestOfferIDForArrayConstraintsFromSetBestOfferID($bestOfferID))) {
            throw new InvalidArgumentException($bestOfferIDArrayErrorMessage, __LINE__);
        }
        $this->BestOfferID = $bestOfferID;
        
        return $this;
    }
    /**
     * Add item to BestOfferID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function addToBestOfferID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The BestOfferID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BestOfferID[] = $item;
        
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType::valueIsValid($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType', is_array($action) ? implode(', ', $action) : var_export($action, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get SellerResponse value
     * @return string|null
     */
    public function getSellerResponse(): ?string
    {
        return $this->SellerResponse;
    }
    /**
     * Set SellerResponse value
     * @param string $sellerResponse
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setSellerResponse(?string $sellerResponse = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerResponse) && !is_string($sellerResponse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerResponse, true), gettype($sellerResponse)), __LINE__);
        }
        $this->SellerResponse = $sellerResponse;
        
        return $this;
    }
    /**
     * Get CounterOfferPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCounterOfferPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->CounterOfferPrice;
    }
    /**
     * Set CounterOfferPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $counterOfferPrice
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setCounterOfferPrice(?\macropage\ebaysdk\trading\StructType\AmountType $counterOfferPrice = null): self
    {
        $this->CounterOfferPrice = $counterOfferPrice;
        
        return $this;
    }
    /**
     * Get CounterOfferQuantity value
     * @return int|null
     */
    public function getCounterOfferQuantity(): ?int
    {
        return $this->CounterOfferQuantity;
    }
    /**
     * Set CounterOfferQuantity value
     * @param int $counterOfferQuantity
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setCounterOfferQuantity(?int $counterOfferQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($counterOfferQuantity) && !(is_int($counterOfferQuantity) || ctype_digit($counterOfferQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($counterOfferQuantity, true), gettype($counterOfferQuantity)), __LINE__);
        }
        $this->CounterOfferQuantity = $counterOfferQuantity;
        
        return $this;
    }
}
