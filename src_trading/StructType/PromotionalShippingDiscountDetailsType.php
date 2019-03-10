<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionalShippingDiscountDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a promotional shipping discount.
 * @subpackage Structs
 */
class PromotionalShippingDiscountDetailsType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta informations extracted from the WSDL
     * - documentation: The type of promotional shipping discount that is detailed in the profile. If the discount type is <code>MaximumShippingCostPerOrder</code>, see <b>ShippingCost</b>. If the discount type is <code>ShippingCostXForAmountY</code>, see
     * <b>ShippingCost</b> and <b>OrderAmount</b>. If the discount type is <code>ShippingCostXForItemCountN</code>, see <b>ShippingCost</b> and <b>ItemCount</b>.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountName;
    /**
     * The ShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: This is shipping cost X when <b>DiscountName</b> is either <code>ShippingCostXForAmountY</code> or <code>ShippingCostXForItemCountN</code>, and is the maximum cost when <b>DiscountName</b> is <code>MaximumShippingCostPerOrder</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ShippingCost;
    /**
     * The OrderAmount
     * Meta informations extracted from the WSDL
     * - documentation: This is the cost Y of the order (not including shipping cost) when <b>DiscountName</b> is set to <code>ShippingCostXForAmountY</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $OrderAmount;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - documentation: This is the number of items when <b>DiscountName</b> is set to <code>ShippingCostXForItemsY</code>.
     * - minOccurs: 0
     * @var int
     */
    public $ItemCount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PromotionalShippingDiscountDetailsType
     * @uses PromotionalShippingDiscountDetailsType::setDiscountName()
     * @uses PromotionalShippingDiscountDetailsType::setShippingCost()
     * @uses PromotionalShippingDiscountDetailsType::setOrderAmount()
     * @uses PromotionalShippingDiscountDetailsType::setItemCount()
     * @uses PromotionalShippingDiscountDetailsType::setAny()
     * @param string $discountName
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $orderAmount
     * @param int $itemCount
     * @param \DOMDocument $any
     */
    public function __construct($discountName = null, \macropage\ebaysdk\trading\StructType\AmountType $shippingCost = null, \macropage\ebaysdk\trading\StructType\AmountType $orderAmount = null, $itemCount = null, \DOMDocument $any = null)
    {
        $this
            ->setDiscountName($discountName)
            ->setShippingCost($shippingCost)
            ->setOrderAmount($orderAmount)
            ->setItemCount($itemCount)
            ->setAny($any);
    }
    /**
     * Get DiscountName value
     * @return string|null
     */
    public function getDiscountName()
    {
        return $this->DiscountName;
    }
    /**
     * Set DiscountName value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountName
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public function setDiscountName($discountName = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::valueIsValid($discountName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountName, implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountName = $discountName;
        return $this;
    }
    /**
     * Get ShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getShippingCost()
    {
        return $this->ShippingCost;
    }
    /**
     * Set ShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $shippingCost
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public function setShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $shippingCost = null)
    {
        $this->ShippingCost = $shippingCost;
        return $this;
    }
    /**
     * Get OrderAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOrderAmount()
    {
        return $this->OrderAmount;
    }
    /**
     * Set OrderAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $orderAmount
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public function setOrderAmount(\macropage\ebaysdk\trading\StructType\AmountType $orderAmount = null)
    {
        $this->OrderAmount = $orderAmount;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
     */
    public function setItemCount($itemCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !is_numeric($itemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionalShippingDiscountDetailsType
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
