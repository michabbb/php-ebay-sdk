<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlaceOfferResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The <b>PlaceOffer</b> response notifies you about the success and result of the call.
 * @subpackage Structs
 */
class PlaceOfferResponseType extends AbstractResponseType
{
    /**
     * The SellingStatus
     * Meta information extracted from the WSDL
     * - documentation: This container indicates the current bidding/purchase state of the order line item regarding the offer extended using <b>PlaceOffer</b>. The fields that are returned under this container will depend on the attempted action and the
     * results of that action.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingStatusType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingStatusType $SellingStatus = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. The <b>TransactionID</b> field is only returned if the <b>Offer.Action</b> field was set to <b>Purchase</b> in the input and the purchase was successful. A Purchase action in
     * <b>PlaceOffer</b> can be used for a fixed-price listing, or for an auction listing where the Buy It Now option is available. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning
     * bidder/one sale for an auction listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The BestOffer
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the status for a Best Offer. This container is only returned if applicable based on the listing and the value set for <b>Offer.Action</b> field in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BestOfferType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\BestOfferType $BestOffer = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. The <b>OrderLineItemID</b> field is only returned if the <b>Offer.Action</b> field is set to <b>Purchase</b> in the input and the purchase is successful. A
     * Purchase action in <b>PlaceOffer</b> can be used for a fixed-price listing, or for an auction listing where the Buy It Now option is available. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * Constructor method for PlaceOfferResponseType
     * @uses PlaceOfferResponseType::setSellingStatus()
     * @uses PlaceOfferResponseType::setTransactionID()
     * @uses PlaceOfferResponseType::setBestOffer()
     * @uses PlaceOfferResponseType::setOrderLineItemID()
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @param string $transactionID
     * @param \macropage\ebaysdk\trading\StructType\BestOfferType $bestOffer
     * @param string $orderLineItemID
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null, ?string $transactionID = null, ?\macropage\ebaysdk\trading\StructType\BestOfferType $bestOffer = null, ?string $orderLineItemID = null)
    {
        $this
            ->setSellingStatus($sellingStatus)
            ->setTransactionID($transactionID)
            ->setBestOffer($bestOffer)
            ->setOrderLineItemID($orderLineItemID);
    }
    /**
     * Get SellingStatus value
     * @return \macropage\ebaysdk\trading\StructType\SellingStatusType|null
     */
    public function getSellingStatus(): ?\macropage\ebaysdk\trading\StructType\SellingStatusType
    {
        return $this->SellingStatus;
    }
    /**
     * Set SellingStatus value
     * @param \macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
     */
    public function setSellingStatus(?\macropage\ebaysdk\trading\StructType\SellingStatusType $sellingStatus = null): self
    {
        $this->SellingStatus = $sellingStatus;
        
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        
        return $this;
    }
    /**
     * Get BestOffer value
     * @return \macropage\ebaysdk\trading\StructType\BestOfferType|null
     */
    public function getBestOffer(): ?\macropage\ebaysdk\trading\StructType\BestOfferType
    {
        return $this->BestOffer;
    }
    /**
     * Set BestOffer value
     * @param \macropage\ebaysdk\trading\StructType\BestOfferType $bestOffer
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
     */
    public function setBestOffer(?\macropage\ebaysdk\trading\StructType\BestOfferType $bestOffer = null): self
    {
        $this->BestOffer = $bestOffer;
        
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID(): ?string
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferResponseType
     */
    public function setOrderLineItemID(?string $orderLineItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        
        return $this;
    }
}
