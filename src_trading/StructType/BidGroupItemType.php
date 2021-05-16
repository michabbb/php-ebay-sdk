<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidGroupItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidGroupItemType extends AbstractStructBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * The BidGroupItemStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BidGroupItemStatus = null;
    /**
     * The MaxBidAmount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MaxBidAmount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BidGroupItemType
     * @uses BidGroupItemType::setItem()
     * @uses BidGroupItemType::setBidGroupItemStatus()
     * @uses BidGroupItemType::setMaxBidAmount()
     * @uses BidGroupItemType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param string $bidGroupItemStatus
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBidAmount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ItemType $item = null, ?string $bidGroupItemStatus = null, ?\macropage\ebaysdk\trading\StructType\AmountType $maxBidAmount = null, $any = null)
    {
        $this
            ->setItem($item)
            ->setBidGroupItemStatus($bidGroupItemStatus)
            ->setMaxBidAmount($maxBidAmount)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
     */
    public function setItem(?\macropage\ebaysdk\trading\StructType\ItemType $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Get BidGroupItemStatus value
     * @return string|null
     */
    public function getBidGroupItemStatus(): ?string
    {
        return $this->BidGroupItemStatus;
    }
    /**
     * Set BidGroupItemStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bidGroupItemStatus
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
     */
    public function setBidGroupItemStatus(?string $bidGroupItemStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType::valueIsValid($bidGroupItemStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType', is_array($bidGroupItemStatus) ? implode(', ', $bidGroupItemStatus) : var_export($bidGroupItemStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BidGroupItemStatus = $bidGroupItemStatus;
        
        return $this;
    }
    /**
     * Get MaxBidAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxBidAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MaxBidAmount;
    }
    /**
     * Set MaxBidAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBidAmount
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
     */
    public function setMaxBidAmount(?\macropage\ebaysdk\trading\StructType\AmountType $maxBidAmount = null): self
    {
        $this->MaxBidAmount = $maxBidAmount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
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
