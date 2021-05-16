<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BestOfferType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BestOffer</b> container, which consists of information on one Best Offer or counter offer. This information includes the price of the offer, the expiration of the offer, and any messaging provided by the
 * prospective buyer or seller.
 * @subpackage Structs
 */
class BestOfferType extends AbstractStructBase
{
    /**
     * The BestOfferID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a Best Offer. This identifier is created once a prospective buyer makes a Best Offer on an item.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BestOfferID = null;
    /**
     * The ExpirationTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating when a Best Offer will naturally expire (if the seller has not accepted or declined the offer).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpirationTime = null;
    /**
     * The Buyer
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of information about the prospective buyer who made the Best Offer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\UserType $Buyer = null;
    /**
     * The Price
     * Meta information extracted from the WSDL
     * - documentation: The amount of the Best Offer or counter offer. For this field to be returned, the user must have a relationship to the Best Offer, either as the seller, buyer, or potential buyer who has made the Best Offer or counter offer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $Price = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The status of the Best Offer or counter offer. For <b>PlaceOffer</b>, the only applicable values are <code>Accepted</code>, <code>AdminEnded</code>, <code>Declined</code>, and <code>Expired</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: The quantity of the item for which the buyer is making a Best Offer. This value will usually be <code>1</code>, unless the buyer is making an offer on multiple quantity of a line item in a multi-quantity listing.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The BuyerMessage
     * Meta information extracted from the WSDL
     * - documentation: A prospective buyer has the option to include a comment when placing a Best Offer or making a counter offer to the seller's counter offer. This field will display that comment.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BuyerMessage = null;
    /**
     * The SellerMessage
     * Meta information extracted from the WSDL
     * - documentation: A seller has the option to include a comment when making a counter offer to the prospective buyer's Best Offer. This field will display that comment.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerMessage = null;
    /**
     * The BestOfferCodeType
     * Meta information extracted from the WSDL
     * - documentation: This value indicates whether the corresponding offer is a Best Offer, a seller's counter offer, or a buyer counter offer to the seller's counter offer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BestOfferCodeType = null;
    /**
     * The CallStatus
     * Meta information extracted from the WSDL
     * - documentation: The value in this field (<code>Success</code> or <code>Failure</code>) will indicate whether or not the seller's attempt to accept, decline, or counter offer a Best Offer was successful. This field is only used by the
     * <b>RespondToBestOffer</b> response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CallStatus = null;
    /**
     * The NewBestOffer
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NewBestOffer = null;
    /**
     * The ImmediatePayEligible
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, as it formerly supported the Best Offer Beta feature which is no longer active.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ImmediatePayEligible = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BestOfferType
     * @uses BestOfferType::setBestOfferID()
     * @uses BestOfferType::setExpirationTime()
     * @uses BestOfferType::setBuyer()
     * @uses BestOfferType::setPrice()
     * @uses BestOfferType::setStatus()
     * @uses BestOfferType::setQuantity()
     * @uses BestOfferType::setBuyerMessage()
     * @uses BestOfferType::setSellerMessage()
     * @uses BestOfferType::setBestOfferCodeType()
     * @uses BestOfferType::setCallStatus()
     * @uses BestOfferType::setNewBestOffer()
     * @uses BestOfferType::setImmediatePayEligible()
     * @uses BestOfferType::setAny()
     * @param string $bestOfferID
     * @param string $expirationTime
     * @param \macropage\ebaysdk\trading\StructType\UserType $buyer
     * @param \macropage\ebaysdk\trading\StructType\AmountType $price
     * @param string $status
     * @param int $quantity
     * @param string $buyerMessage
     * @param string $sellerMessage
     * @param string $bestOfferCodeType
     * @param string $callStatus
     * @param bool $newBestOffer
     * @param bool $immediatePayEligible
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $bestOfferID = null, ?string $expirationTime = null, ?\macropage\ebaysdk\trading\StructType\UserType $buyer = null, ?\macropage\ebaysdk\trading\StructType\AmountType $price = null, ?string $status = null, ?int $quantity = null, ?string $buyerMessage = null, ?string $sellerMessage = null, ?string $bestOfferCodeType = null, ?string $callStatus = null, ?bool $newBestOffer = null, ?bool $immediatePayEligible = null, $any = null)
    {
        $this
            ->setBestOfferID($bestOfferID)
            ->setExpirationTime($expirationTime)
            ->setBuyer($buyer)
            ->setPrice($price)
            ->setStatus($status)
            ->setQuantity($quantity)
            ->setBuyerMessage($buyerMessage)
            ->setSellerMessage($sellerMessage)
            ->setBestOfferCodeType($bestOfferCodeType)
            ->setCallStatus($callStatus)
            ->setNewBestOffer($newBestOffer)
            ->setImmediatePayEligible($immediatePayEligible)
            ->setAny($any);
    }
    /**
     * Get BestOfferID value
     * @return string|null
     */
    public function getBestOfferID(): ?string
    {
        return $this->BestOfferID;
    }
    /**
     * Set BestOfferID value
     * @param string $bestOfferID
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setBestOfferID(?string $bestOfferID = null): self
    {
        // validation for constraint: string
        if (!is_null($bestOfferID) && !is_string($bestOfferID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bestOfferID, true), gettype($bestOfferID)), __LINE__);
        }
        $this->BestOfferID = $bestOfferID;
        
        return $this;
    }
    /**
     * Get ExpirationTime value
     * @return string|null
     */
    public function getExpirationTime(): ?string
    {
        return $this->ExpirationTime;
    }
    /**
     * Set ExpirationTime value
     * @param string $expirationTime
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setExpirationTime(?string $expirationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationTime) && !is_string($expirationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationTime, true), gettype($expirationTime)), __LINE__);
        }
        $this->ExpirationTime = $expirationTime;
        
        return $this;
    }
    /**
     * Get Buyer value
     * @return \macropage\ebaysdk\trading\StructType\UserType|null
     */
    public function getBuyer(): ?\macropage\ebaysdk\trading\StructType\UserType
    {
        return $this->Buyer;
    }
    /**
     * Set Buyer value
     * @param \macropage\ebaysdk\trading\StructType\UserType $buyer
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setBuyer(?\macropage\ebaysdk\trading\StructType\UserType $buyer = null): self
    {
        $this->Buyer = $buyer;
        
        return $this;
    }
    /**
     * Get Price value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPrice(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $price
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setPrice(?\macropage\ebaysdk\trading\StructType\AmountType $price = null): self
    {
        $this->Price = $price;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get BuyerMessage value
     * @return string|null
     */
    public function getBuyerMessage(): ?string
    {
        return $this->BuyerMessage;
    }
    /**
     * Set BuyerMessage value
     * @param string $buyerMessage
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setBuyerMessage(?string $buyerMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($buyerMessage) && !is_string($buyerMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerMessage, true), gettype($buyerMessage)), __LINE__);
        }
        $this->BuyerMessage = $buyerMessage;
        
        return $this;
    }
    /**
     * Get SellerMessage value
     * @return string|null
     */
    public function getSellerMessage(): ?string
    {
        return $this->SellerMessage;
    }
    /**
     * Set SellerMessage value
     * @param string $sellerMessage
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setSellerMessage(?string $sellerMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerMessage) && !is_string($sellerMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerMessage, true), gettype($sellerMessage)), __LINE__);
        }
        $this->SellerMessage = $sellerMessage;
        
        return $this;
    }
    /**
     * Get BestOfferCodeType value
     * @return string|null
     */
    public function getBestOfferCodeType(): ?string
    {
        return $this->BestOfferCodeType;
    }
    /**
     * Set BestOfferCodeType value
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bestOfferCodeType
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setBestOfferCodeType(?string $bestOfferCodeType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::valueIsValid($bestOfferCodeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType', is_array($bestOfferCodeType) ? implode(', ', $bestOfferCodeType) : var_export($bestOfferCodeType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferCodeType = $bestOfferCodeType;
        
        return $this;
    }
    /**
     * Get CallStatus value
     * @return string|null
     */
    public function getCallStatus(): ?string
    {
        return $this->CallStatus;
    }
    /**
     * Set CallStatus value
     * @param string $callStatus
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setCallStatus(?string $callStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($callStatus) && !is_string($callStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callStatus, true), gettype($callStatus)), __LINE__);
        }
        $this->CallStatus = $callStatus;
        
        return $this;
    }
    /**
     * Get NewBestOffer value
     * @return bool|null
     */
    public function getNewBestOffer(): ?bool
    {
        return $this->NewBestOffer;
    }
    /**
     * Set NewBestOffer value
     * @param bool $newBestOffer
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setNewBestOffer(?bool $newBestOffer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($newBestOffer) && !is_bool($newBestOffer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newBestOffer, true), gettype($newBestOffer)), __LINE__);
        }
        $this->NewBestOffer = $newBestOffer;
        
        return $this;
    }
    /**
     * Get ImmediatePayEligible value
     * @return bool|null
     */
    public function getImmediatePayEligible(): ?bool
    {
        return $this->ImmediatePayEligible;
    }
    /**
     * Set ImmediatePayEligible value
     * @param bool $immediatePayEligible
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setImmediatePayEligible(?bool $immediatePayEligible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($immediatePayEligible) && !is_bool($immediatePayEligible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($immediatePayEligible, true), gettype($immediatePayEligible)), __LINE__);
        }
        $this->ImmediatePayEligible = $immediatePayEligible;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
