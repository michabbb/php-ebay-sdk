<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotionDetailsType extends AbstractStructBase
{
    /**
     * The PromotionPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $PromotionPrice;
    /**
     * The PromotionPriceType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PromotionPriceType;
    /**
     * The BidCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $BidCount;
    /**
     * The ConvertedPromotionPrice
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedPromotionPrice;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotionDetailsType
     * @uses PromotionDetailsType::setPromotionPrice()
     * @uses PromotionDetailsType::setPromotionPriceType()
     * @uses PromotionDetailsType::setBidCount()
     * @uses PromotionDetailsType::setConvertedPromotionPrice()
     * @uses PromotionDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $promotionPrice
     * @param string $promotionPriceType
     * @param int $bidCount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedPromotionPrice
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $promotionPrice = null, $promotionPriceType = null, $bidCount = null, \macropage\ebaysdk\trading\StructType\AmountType $convertedPromotionPrice = null, \DOMDocument $any = null)
    {
        $this
            ->setPromotionPrice($promotionPrice)
            ->setPromotionPriceType($promotionPriceType)
            ->setBidCount($bidCount)
            ->setConvertedPromotionPrice($convertedPromotionPrice)
            ->setAny($any);
    }
    /**
     * Get PromotionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPromotionPrice()
    {
        return $this->PromotionPrice;
    }
    /**
     * Set PromotionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $promotionPrice
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
     */
    public function setPromotionPrice(\macropage\ebaysdk\trading\StructType\AmountType $promotionPrice = null)
    {
        $this->PromotionPrice = $promotionPrice;
        return $this;
    }
    /**
     * Get PromotionPriceType value
     * @return string|null
     */
    public function getPromotionPriceType()
    {
        return $this->PromotionPriceType;
    }
    /**
     * Set PromotionPriceType value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionPriceType
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
     */
    public function setPromotionPriceType($promotionPriceType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType::valueIsValid($promotionPriceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $promotionPriceType, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionItemPriceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionPriceType = $promotionPriceType;
        return $this;
    }
    /**
     * Get BidCount value
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->BidCount;
    }
    /**
     * Set BidCount value
     * @param int $bidCount
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
     */
    public function setBidCount($bidCount = null)
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !is_numeric($bidCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidCount)), __LINE__);
        }
        $this->BidCount = $bidCount;
        return $this;
    }
    /**
     * Get ConvertedPromotionPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedPromotionPrice()
    {
        return $this->ConvertedPromotionPrice;
    }
    /**
     * Set ConvertedPromotionPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedPromotionPrice
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
     */
    public function setConvertedPromotionPrice(\macropage\ebaysdk\trading\StructType\AmountType $convertedPromotionPrice = null)
    {
        $this->ConvertedPromotionPrice = $convertedPromotionPrice;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PromotionDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType
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
