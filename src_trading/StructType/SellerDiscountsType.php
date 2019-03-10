<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerDiscountsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerDiscounts</b> container, which consists of one or more <b>SellerDiscount</b> nodes, as well as the original purchase price and shipping cost of the order line item.
 * @subpackage Structs
 */
class SellerDiscountsType extends AbstractStructBase
{
    /**
     * The OriginalItemPrice
     * Meta informations extracted from the WSDL
     * - documentation: The original purchase price of the order line item (before any seller discounts are applied).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $OriginalItemPrice;
    /**
     * The OriginalItemShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: The original shipping cost for the order line item (before any seller discounts are applied).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $OriginalItemShippingCost;
    /**
     * The OriginalShippingService
     * Meta informations extracted from the WSDL
     * - documentation: The original shipping service offered by the seller to ship an item to a buyer.
     * - minOccurs: 0
     * @var string
     */
    public $OriginalShippingService;
    /**
     * The SellerDiscount
     * Meta informations extracted from the WSDL
     * - documentation: A container consisting of name and ID of the seller's discount campaign, as well as the discount amount that is being applied to the order line item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerDiscountType[]
     */
    public $SellerDiscount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerDiscountsType
     * @uses SellerDiscountsType::setOriginalItemPrice()
     * @uses SellerDiscountsType::setOriginalItemShippingCost()
     * @uses SellerDiscountsType::setOriginalShippingService()
     * @uses SellerDiscountsType::setSellerDiscount()
     * @uses SellerDiscountsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalItemPrice
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalItemShippingCost
     * @param string $originalShippingService
     * @param \macropage\ebaysdk\trading\StructType\SellerDiscountType[] $sellerDiscount
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $originalItemPrice = null, \macropage\ebaysdk\trading\StructType\AmountType $originalItemShippingCost = null, $originalShippingService = null, array $sellerDiscount = array(), \DOMDocument $any = null)
    {
        $this
            ->setOriginalItemPrice($originalItemPrice)
            ->setOriginalItemShippingCost($originalItemShippingCost)
            ->setOriginalShippingService($originalShippingService)
            ->setSellerDiscount($sellerDiscount)
            ->setAny($any);
    }
    /**
     * Get OriginalItemPrice value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOriginalItemPrice()
    {
        return $this->OriginalItemPrice;
    }
    /**
     * Set OriginalItemPrice value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalItemPrice
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function setOriginalItemPrice(\macropage\ebaysdk\trading\StructType\AmountType $originalItemPrice = null)
    {
        $this->OriginalItemPrice = $originalItemPrice;
        return $this;
    }
    /**
     * Get OriginalItemShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOriginalItemShippingCost()
    {
        return $this->OriginalItemShippingCost;
    }
    /**
     * Set OriginalItemShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $originalItemShippingCost
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function setOriginalItemShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $originalItemShippingCost = null)
    {
        $this->OriginalItemShippingCost = $originalItemShippingCost;
        return $this;
    }
    /**
     * Get OriginalShippingService value
     * @return string|null
     */
    public function getOriginalShippingService()
    {
        return $this->OriginalShippingService;
    }
    /**
     * Set OriginalShippingService value
     * @param string $originalShippingService
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function setOriginalShippingService($originalShippingService = null)
    {
        // validation for constraint: string
        if (!is_null($originalShippingService) && !is_string($originalShippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalShippingService)), __LINE__);
        }
        $this->OriginalShippingService = $originalShippingService;
        return $this;
    }
    /**
     * Get SellerDiscount value
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountType[]|null
     */
    public function getSellerDiscount()
    {
        return $this->SellerDiscount;
    }
    /**
     * Set SellerDiscount value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDiscountType[] $sellerDiscount
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function setSellerDiscount(array $sellerDiscount = array())
    {
        foreach ($sellerDiscount as $sellerDiscountsTypeSellerDiscountItem) {
            // validation for constraint: itemType
            if (!$sellerDiscountsTypeSellerDiscountItem instanceof \macropage\ebaysdk\trading\StructType\SellerDiscountType) {
                throw new \InvalidArgumentException(sprintf('The SellerDiscount property can only contain items of \macropage\ebaysdk\trading\StructType\SellerDiscountType, "%s" given', is_object($sellerDiscountsTypeSellerDiscountItem) ? get_class($sellerDiscountsTypeSellerDiscountItem) : gettype($sellerDiscountsTypeSellerDiscountItem)), __LINE__);
            }
        }
        $this->SellerDiscount = $sellerDiscount;
        return $this;
    }
    /**
     * Add item to SellerDiscount value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellerDiscountType $item
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
     */
    public function addToSellerDiscount(\macropage\ebaysdk\trading\StructType\SellerDiscountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellerDiscountType) {
            throw new \InvalidArgumentException(sprintf('The SellerDiscount property can only contain items of \macropage\ebaysdk\trading\StructType\SellerDiscountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SellerDiscount[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerDiscountsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerDiscountsType
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
