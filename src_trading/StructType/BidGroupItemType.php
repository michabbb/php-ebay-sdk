<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidGroupItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidGroupItemType extends AbstractStructBase
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Item;
    /**
     * The BidGroupItemStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $BidGroupItemStatus;
    /**
     * The MaxBidAmount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MaxBidAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidGroupItemType
     * @uses BidGroupItemType::setItem()
     * @uses BidGroupItemType::setBidGroupItemStatus()
     * @uses BidGroupItemType::setMaxBidAmount()
     * @uses BidGroupItemType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param string $bidGroupItemStatus
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBidAmount
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\ItemType $item = null, $bidGroupItemStatus = null, \macropage\ebaysdk\trading\StructType\AmountType $maxBidAmount = null, \DOMDocument $any = null)
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
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
     */
    public function setItem(\macropage\ebaysdk\trading\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get BidGroupItemStatus value
     * @return string|null
     */
    public function getBidGroupItemStatus()
    {
        return $this->BidGroupItemStatus;
    }
    /**
     * Set BidGroupItemStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bidGroupItemStatus
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
     */
    public function setBidGroupItemStatus($bidGroupItemStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType::valueIsValid($bidGroupItemStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bidGroupItemStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\BidGroupItemStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BidGroupItemStatus = $bidGroupItemStatus;
        return $this;
    }
    /**
     * Get MaxBidAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxBidAmount()
    {
        return $this->MaxBidAmount;
    }
    /**
     * Set MaxBidAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBidAmount
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
     */
    public function setMaxBidAmount(\macropage\ebaysdk\trading\StructType\AmountType $maxBidAmount = null)
    {
        $this->MaxBidAmount = $maxBidAmount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BidGroupItemType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType
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
