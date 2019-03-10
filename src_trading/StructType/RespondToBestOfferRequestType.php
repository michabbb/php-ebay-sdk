<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespondToBestOfferRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This call enables the seller to accept or decline a buyer's Best Offer on an item, or make a counter offer to the buyer's Best Offer. A seller can decline multiple Best Offers with one call, but the seller cannot accept or counter
 * offer multiple Best Offers with one call. Best Offers are not applicable to auction listings. <br/><br/> <span class="tablenote"><b>Note: </b> Historically, the Best Offer feature has not been available for auction listings, but beginning with
 * Version 1027, sellers in the US, UK, and DE sites are able to offer the Best Offer feature in auction listings. The seller can offer Buy It Now or Best Offer in an auction listing, but not both. </span>
 * @subpackage Structs
 */
class RespondToBestOfferRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the listing to which the seller is responding about a Best Offer. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The BestOfferID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of a buyer's Best Offer for the order line item. This ID is created once the buyer makes a Best Offer. It is possible that a seller will get multiple Best Offers for an order line item, and if that seller would
     * like to decline multiple/all of the Best Offers with one <b>RespondToBestOffer</b> call, the seller would pass in each of these identifiers in a separate <b>BestOfferID</b> field. However, the seller can only accept or counter offer one Best Offer at
     * a time. | Unique identifier for a Best Offer. This identifier is created once a prospective buyer makes a Best Offer on an item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $BestOfferID;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value that the seller passes in to this field will control whether the seller accepts or make a counter offer to a single buyer's Best Offer, or declines one or more buyers' Best Offers. A seller can decline multiple
     * Best Offers with one call, but the seller cannot accept or counter offer multiple Best Offers with one call.
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The SellerResponse
     * Meta informations extracted from the WSDL
     * - documentation: This optional text field allows the seller to provide more details to the buyer about the action being taken against the buyer's Best Offer. <br>
     * - minOccurs: 0
     * @var string
     */
    public $SellerResponse;
    /**
     * The CounterOfferPrice
     * Meta informations extracted from the WSDL
     * - documentation: The seller inserts counter offer price into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price cannot exceed the Buy It Now price
     * for a single quantity item. However, the dollar value in this field may exceed the Buy It Now price if the buyer is requesting or the seller is offering multiple quantity of the item (in a multiple-quantity listing). The quantity of the item must be
     * specified in the <b>CounterOfferQuantity</b> field if the seller is making a counter offer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $CounterOfferPrice;
    /**
     * The CounterOfferQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The seller inserts the quantity of items in the counter offer into this field. This field is conditionally required and only applicable when the <b>Action</b> value is set to <code>Counter</code>, The counter offer price must be
     * specified in the <b>CounterOfferPrice</b> field if the seller is making a counter offer. This price should reflect the quantity of items in the counter offer. So, if the seller's counter offer 'unit' price is 15 dollars, and the item quantity is '2',
     * the dollar value passed into the <b>CounterOfferPrice</b> field would be <code>30.0</code>.
     * - minOccurs: 0
     * @var int
     */
    public $CounterOfferQuantity;
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
    public function __construct($itemID = null, array $bestOfferID = array(), $action = null, $sellerResponse = null, \macropage\ebaysdk\trading\StructType\AmountType $counterOfferPrice = null, $counterOfferQuantity = null)
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
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
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
     * Get BestOfferID value
     * @return string[]|null
     */
    public function getBestOfferID()
    {
        return $this->BestOfferID;
    }
    /**
     * Set BestOfferID value
     * @throws \InvalidArgumentException
     * @param string[] $bestOfferID
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setBestOfferID(array $bestOfferID = array())
    {
        foreach ($bestOfferID as $respondToBestOfferRequestTypeBestOfferIDItem) {
            // validation for constraint: itemType
            if (!is_string($respondToBestOfferRequestTypeBestOfferIDItem)) {
                throw new \InvalidArgumentException(sprintf('The BestOfferID property can only contain items of string, "%s" given', is_object($respondToBestOfferRequestTypeBestOfferIDItem) ? get_class($respondToBestOfferRequestTypeBestOfferIDItem) : gettype($respondToBestOfferRequestTypeBestOfferIDItem)), __LINE__);
            }
        }
        $this->BestOfferID = $bestOfferID;
        return $this;
    }
    /**
     * Add item to BestOfferID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function addToBestOfferID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The BestOfferID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BestOfferID[] = $item;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \macropage\ebaysdk\trading\EnumType\BestOfferActionCodeType::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get SellerResponse value
     * @return string|null
     */
    public function getSellerResponse()
    {
        return $this->SellerResponse;
    }
    /**
     * Set SellerResponse value
     * @param string $sellerResponse
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setSellerResponse($sellerResponse = null)
    {
        // validation for constraint: string
        if (!is_null($sellerResponse) && !is_string($sellerResponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerResponse)), __LINE__);
        }
        $this->SellerResponse = $sellerResponse;
        return $this;
    }
    /**
     * Get CounterOfferPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getCounterOfferPrice()
    {
        return $this->CounterOfferPrice;
    }
    /**
     * Set CounterOfferPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $counterOfferPrice
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setCounterOfferPrice(\macropage\ebaysdk\trading\StructType\AmountType $counterOfferPrice = null)
    {
        $this->CounterOfferPrice = $counterOfferPrice;
        return $this;
    }
    /**
     * Get CounterOfferQuantity value
     * @return int|null
     */
    public function getCounterOfferQuantity()
    {
        return $this->CounterOfferQuantity;
    }
    /**
     * Set CounterOfferQuantity value
     * @param int $counterOfferQuantity
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
     */
    public function setCounterOfferQuantity($counterOfferQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($counterOfferQuantity) && !is_numeric($counterOfferQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($counterOfferQuantity)), __LINE__);
        }
        $this->CounterOfferQuantity = $counterOfferQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\RespondToBestOfferRequestType
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
