<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinkedLineItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains details of linked line item objects.
 * @subpackage Structs
 */
class LinkedLineItemType extends AbstractStructBase
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the order to which the linked line item belongs.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderID = null;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the linked order line item. For example, the order line item ID of the tire.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OrderLineItemID = null;
    /**
     * The SellerUserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellerUserID = null;
    /**
     * The EstimatedDeliveryTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and
     * time to receive the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryTimeMax = null;
    /**
     * The EstimatedDeliveryTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date
     * and time to receive the order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EstimatedDeliveryTimeMin = null;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of details about the linked item. <span class="tablenote"><strong>Note:</strong> All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's
     * listing site, which may vary from the seller's language. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for LinkedLineItemType
     * @uses LinkedLineItemType::setOrderID()
     * @uses LinkedLineItemType::setOrderLineItemID()
     * @uses LinkedLineItemType::setSellerUserID()
     * @uses LinkedLineItemType::setEstimatedDeliveryTimeMax()
     * @uses LinkedLineItemType::setEstimatedDeliveryTimeMin()
     * @uses LinkedLineItemType::setItem()
     * @uses LinkedLineItemType::setAny()
     * @param string $orderID
     * @param string $orderLineItemID
     * @param string $sellerUserID
     * @param string $estimatedDeliveryTimeMax
     * @param string $estimatedDeliveryTimeMin
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $orderID = null, ?string $orderLineItemID = null, ?string $sellerUserID = null, ?string $estimatedDeliveryTimeMax = null, ?string $estimatedDeliveryTimeMin = null, ?\macropage\ebaysdk\trading\StructType\ItemType $item = null, $any = null)
    {
        $this
            ->setOrderID($orderID)
            ->setOrderLineItemID($orderLineItemID)
            ->setSellerUserID($sellerUserID)
            ->setEstimatedDeliveryTimeMax($estimatedDeliveryTimeMax)
            ->setEstimatedDeliveryTimeMin($estimatedDeliveryTimeMin)
            ->setItem($item)
            ->setAny($any);
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID(): ?string
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \macropage\ebaysdk\trading\StructType\LinkedLineItemType
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\LinkedLineItemType
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
    /**
     * Get SellerUserID value
     * @return string|null
     */
    public function getSellerUserID(): ?string
    {
        return $this->SellerUserID;
    }
    /**
     * Set SellerUserID value
     * @param string $sellerUserID
     * @return \macropage\ebaysdk\trading\StructType\LinkedLineItemType
     */
    public function setSellerUserID(?string $sellerUserID = null): self
    {
        // validation for constraint: string
        if (!is_null($sellerUserID) && !is_string($sellerUserID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerUserID, true), gettype($sellerUserID)), __LINE__);
        }
        $this->SellerUserID = $sellerUserID;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryTimeMax value
     * @return string|null
     */
    public function getEstimatedDeliveryTimeMax(): ?string
    {
        return $this->EstimatedDeliveryTimeMax;
    }
    /**
     * Set EstimatedDeliveryTimeMax value
     * @param string $estimatedDeliveryTimeMax
     * @return \macropage\ebaysdk\trading\StructType\LinkedLineItemType
     */
    public function setEstimatedDeliveryTimeMax(?string $estimatedDeliveryTimeMax = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryTimeMax) && !is_string($estimatedDeliveryTimeMax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryTimeMax, true), gettype($estimatedDeliveryTimeMax)), __LINE__);
        }
        $this->EstimatedDeliveryTimeMax = $estimatedDeliveryTimeMax;
        
        return $this;
    }
    /**
     * Get EstimatedDeliveryTimeMin value
     * @return string|null
     */
    public function getEstimatedDeliveryTimeMin(): ?string
    {
        return $this->EstimatedDeliveryTimeMin;
    }
    /**
     * Set EstimatedDeliveryTimeMin value
     * @param string $estimatedDeliveryTimeMin
     * @return \macropage\ebaysdk\trading\StructType\LinkedLineItemType
     */
    public function setEstimatedDeliveryTimeMin(?string $estimatedDeliveryTimeMin = null): self
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryTimeMin) && !is_string($estimatedDeliveryTimeMin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryTimeMin, true), gettype($estimatedDeliveryTimeMin)), __LINE__);
        }
        $this->EstimatedDeliveryTimeMin = $estimatedDeliveryTimeMin;
        
        return $this;
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\LinkedLineItemType
     */
    public function setItem(?\macropage\ebaysdk\trading\StructType\ItemType $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\LinkedLineItemType
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
