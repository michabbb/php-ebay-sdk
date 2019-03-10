<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedHandlingDiscountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>CalculatedHandlingDiscount</b> container that is used in the <b>SetShippingDiscountProfiles</b> call to specify the rules used to determine package handling costs for an order in which calculated shipping is
 * used.
 * @subpackage Structs
 */
class CalculatedHandlingDiscountType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta informations extracted from the WSDL
     * - documentation: The type of discount that is detailed in the profile. If the selection is <code>EachAdditionalAmount</code>, <code>EachAdditionalAmountOff</code> or <code>EachAdditionalPercentOff</code>, the value is set in the child element of same
     * name in <b>CalculatedHandlingDiscount</b>. If the selection is <code>CombinedHandlingFee</code>, specify the amount in <b>CalculatedHandlingDiscount.OrderHandlingAmount</b>. If the selection is <code>IndividualHandlingFee</code>, the amount is
     * determined by eBay by adding the fees of the individual items.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountName;
    /**
     * The OrderHandlingAmount
     * Meta informations extracted from the WSDL
     * - documentation: If specified, this is the fixed shipping cost to charge for an order, regardless of the number of items in the order. This field is mutually exclusive with the other amount and percentage fields within this type. This field only
     * applies when the specified <b>DiscountName</b> value is <code>CombinedHandlingFee</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $OrderHandlingAmount;
    /**
     * The EachAdditionalAmount
     * Meta informations extracted from the WSDL
     * - documentation: The packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three items, each assigned a
     * packaging/handling cost of $8, and the seller set <b>EachAdditionalAmount</b> to $6. The packaging/handling cost for three items would normally be $24, but since the seller specified $6, the total packaging/handling cost would be $8 + $6 + $6, or
     * $20. This field is mutually exclusive with the other amount and percentage fields within this type. This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalAmount</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $EachAdditionalAmount;
    /**
     * The EachAdditionalOffAmount
     * Meta informations extracted from the WSDL
     * - documentation: The amount by which to reduce the packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three items,
     * each assigned a packaging/handling cost of $8, and the seller set <b>EachAdditionalAmountOff</b> to $2. The packaging/handling cost for three items would normally be $24, but since the seller specified $2, the total packaging/handling cost would be
     * $24 - (two additional items x $2), or $20. This field is mutually exclusive with the other amount and percentage fields within this type. This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalOffAmount</code>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $EachAdditionalOffAmount;
    /**
     * The EachAdditionalPercentOff
     * Meta informations extracted from the WSDL
     * - documentation: The percentage by which to reduce the packaging/handling cost for each item beyond the first item (where the item with the highest packaging/handling cost is selected by eBay as the first item). Let's say the buyer purchases three
     * items, each assigned a packaging/handling cost of $8, and the seller set <b>EachAdditionalPercentOff</b> to 0.25. The packaging/handling cost for three items would normally be $24, but since the seller specified 0.25 ($2 out of 8), the total
     * packaging/handling cost would be $24 - (two additional items x $2), or $20. This field is mutually exclusive with the amount fields within this type. This field only applies when the <b>DiscountName</b> value is <code>EachAdditionalPercentOff</code>.
     * - minOccurs: 0
     * @var float
     */
    public $EachAdditionalPercentOff;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CalculatedHandlingDiscountType
     * @uses CalculatedHandlingDiscountType::setDiscountName()
     * @uses CalculatedHandlingDiscountType::setOrderHandlingAmount()
     * @uses CalculatedHandlingDiscountType::setEachAdditionalAmount()
     * @uses CalculatedHandlingDiscountType::setEachAdditionalOffAmount()
     * @uses CalculatedHandlingDiscountType::setEachAdditionalPercentOff()
     * @uses CalculatedHandlingDiscountType::setAny()
     * @param string $discountName
     * @param \macropage\ebaysdk\trading\StructType\AmountType $orderHandlingAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalOffAmount
     * @param float $eachAdditionalPercentOff
     * @param \DOMDocument $any
     */
    public function __construct($discountName = null, \macropage\ebaysdk\trading\StructType\AmountType $orderHandlingAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalOffAmount = null, $eachAdditionalPercentOff = null, \DOMDocument $any = null)
    {
        $this
            ->setDiscountName($discountName)
            ->setOrderHandlingAmount($orderHandlingAmount)
            ->setEachAdditionalAmount($eachAdditionalAmount)
            ->setEachAdditionalOffAmount($eachAdditionalOffAmount)
            ->setEachAdditionalPercentOff($eachAdditionalPercentOff)
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
     * @uses \macropage\ebaysdk\trading\EnumType\HandlingNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\HandlingNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountName
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
     */
    public function setDiscountName($discountName = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\HandlingNameCodeType::valueIsValid($discountName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountName, implode(', ', \macropage\ebaysdk\trading\EnumType\HandlingNameCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountName = $discountName;
        return $this;
    }
    /**
     * Get OrderHandlingAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getOrderHandlingAmount()
    {
        return $this->OrderHandlingAmount;
    }
    /**
     * Set OrderHandlingAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $orderHandlingAmount
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
     */
    public function setOrderHandlingAmount(\macropage\ebaysdk\trading\StructType\AmountType $orderHandlingAmount = null)
    {
        $this->OrderHandlingAmount = $orderHandlingAmount;
        return $this;
    }
    /**
     * Get EachAdditionalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getEachAdditionalAmount()
    {
        return $this->EachAdditionalAmount;
    }
    /**
     * Set EachAdditionalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmount
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalAmount(\macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalAmount = null)
    {
        $this->EachAdditionalAmount = $eachAdditionalAmount;
        return $this;
    }
    /**
     * Get EachAdditionalOffAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getEachAdditionalOffAmount()
    {
        return $this->EachAdditionalOffAmount;
    }
    /**
     * Set EachAdditionalOffAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalOffAmount
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalOffAmount(\macropage\ebaysdk\trading\StructType\AmountType $eachAdditionalOffAmount = null)
    {
        $this->EachAdditionalOffAmount = $eachAdditionalOffAmount;
        return $this;
    }
    /**
     * Get EachAdditionalPercentOff value
     * @return float|null
     */
    public function getEachAdditionalPercentOff()
    {
        return $this->EachAdditionalPercentOff;
    }
    /**
     * Set EachAdditionalPercentOff value
     * @param float $eachAdditionalPercentOff
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
     */
    public function setEachAdditionalPercentOff($eachAdditionalPercentOff = null)
    {
        $this->EachAdditionalPercentOff = $eachAdditionalPercentOff;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedHandlingDiscountType
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
