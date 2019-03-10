<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckoutOrderDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CheckoutOrderDetailType extends AbstractStructBase
{
    /**
     * The TotalCartMerchandiseCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalCartMerchandiseCost;
    /**
     * The TotalCartShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalCartShippingCost;
    /**
     * The TotalTaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalTaxAmount;
    /**
     * The TotalAmount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CheckoutOrderDetailType
     * @uses CheckoutOrderDetailType::setTotalCartMerchandiseCost()
     * @uses CheckoutOrderDetailType::setTotalCartShippingCost()
     * @uses CheckoutOrderDetailType::setTotalTaxAmount()
     * @uses CheckoutOrderDetailType::setTotalAmount()
     * @uses CheckoutOrderDetailType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalCartMerchandiseCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalCartShippingCost
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAmount
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $totalCartMerchandiseCost = null, \macropage\ebaysdk\trading\StructType\AmountType $totalCartShippingCost = null, \macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $totalAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setTotalCartMerchandiseCost($totalCartMerchandiseCost)
            ->setTotalCartShippingCost($totalCartShippingCost)
            ->setTotalTaxAmount($totalTaxAmount)
            ->setTotalAmount($totalAmount)
            ->setAny($any);
    }
    /**
     * Get TotalCartMerchandiseCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalCartMerchandiseCost()
    {
        return $this->TotalCartMerchandiseCost;
    }
    /**
     * Set TotalCartMerchandiseCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalCartMerchandiseCost
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
     */
    public function setTotalCartMerchandiseCost(\macropage\ebaysdk\trading\StructType\AmountType $totalCartMerchandiseCost = null)
    {
        $this->TotalCartMerchandiseCost = $totalCartMerchandiseCost;
        return $this;
    }
    /**
     * Get TotalCartShippingCost value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalCartShippingCost()
    {
        return $this->TotalCartShippingCost;
    }
    /**
     * Set TotalCartShippingCost value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalCartShippingCost
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
     */
    public function setTotalCartShippingCost(\macropage\ebaysdk\trading\StructType\AmountType $totalCartShippingCost = null)
    {
        $this->TotalCartShippingCost = $totalCartShippingCost;
        return $this;
    }
    /**
     * Get TotalTaxAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalTaxAmount()
    {
        return $this->TotalTaxAmount;
    }
    /**
     * Set TotalTaxAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
     */
    public function setTotalTaxAmount(\macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount = null)
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalAmount
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
     */
    public function setTotalAmount(\macropage\ebaysdk\trading\StructType\AmountType $totalAmount = null)
    {
        $this->TotalAmount = $totalAmount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
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
     * @return \macropage\ebaysdk\trading\StructType\CheckoutOrderDetailType
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
