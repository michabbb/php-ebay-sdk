<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesTaxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to express sales tax details for the shipping destination. Sales tax information is only returned in <b>GetShippingCosts</b> (through <b>ShippingDetails.SalesTax</b> container) if sales tax is applicable to the
 * shipping destination.
 * @subpackage Structs
 */
class SalesTaxType extends AbstractStructBase
{
    /**
     * The SalesTaxPercent
     * Meta informations extracted from the WSDL
     * - documentation: Percent of an item's price to be charged as the sales tax for the transaction. The sales tax percentage value is stored with a precision of three digits after the decimal point (##.###).
     * - minOccurs: 0
     * @var float
     */
    public $SalesTaxPercent;
    /**
     * The SalesTaxState
     * Meta informations extracted from the WSDL
     * - documentation: State or jurisdiction for which the sales tax is applicable. Only returned if the seller specified a value. This should be the same value that is passed into the <b>DestinationPostalCode</b> in the call request.
     * - minOccurs: 0
     * @var string
     */
    public $SalesTaxState;
    /**
     * The ShippingIncludedInTax
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if shipping costs (in addition to item cost) are considered when calculating the sales tax amount. Shipping costs can only be taxed for US listings.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIncludedInTax;
    /**
     * The SalesTaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: This is the expected tax amount based on the item cost (and shipping costs if <b>ShippingIncludedInTax</b> is <code>true</code>), the sales tax percentage, and the shipping destination.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType
     */
    public $SalesTaxAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SalesTaxType
     * @uses SalesTaxType::setSalesTaxPercent()
     * @uses SalesTaxType::setSalesTaxState()
     * @uses SalesTaxType::setShippingIncludedInTax()
     * @uses SalesTaxType::setSalesTaxAmount()
     * @uses SalesTaxType::setAny()
     * @param float $salesTaxPercent
     * @param string $salesTaxState
     * @param bool $shippingIncludedInTax
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $salesTaxAmount
     * @param \DOMDocument $any
     */
    public function __construct($salesTaxPercent = null, $salesTaxState = null, $shippingIncludedInTax = null, \macropage\ebaysdk\shopping\StructType\AmountType $salesTaxAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setSalesTaxPercent($salesTaxPercent)
            ->setSalesTaxState($salesTaxState)
            ->setShippingIncludedInTax($shippingIncludedInTax)
            ->setSalesTaxAmount($salesTaxAmount)
            ->setAny($any);
    }
    /**
     * Get SalesTaxPercent value
     * @return float|null
     */
    public function getSalesTaxPercent()
    {
        return $this->SalesTaxPercent;
    }
    /**
     * Set SalesTaxPercent value
     * @param float $salesTaxPercent
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setSalesTaxPercent($salesTaxPercent = null)
    {
        $this->SalesTaxPercent = $salesTaxPercent;
        return $this;
    }
    /**
     * Get SalesTaxState value
     * @return string|null
     */
    public function getSalesTaxState()
    {
        return $this->SalesTaxState;
    }
    /**
     * Set SalesTaxState value
     * @param string $salesTaxState
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setSalesTaxState($salesTaxState = null)
    {
        // validation for constraint: string
        if (!is_null($salesTaxState) && !is_string($salesTaxState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($salesTaxState)), __LINE__);
        }
        $this->SalesTaxState = $salesTaxState;
        return $this;
    }
    /**
     * Get ShippingIncludedInTax value
     * @return bool|null
     */
    public function getShippingIncludedInTax()
    {
        return $this->ShippingIncludedInTax;
    }
    /**
     * Set ShippingIncludedInTax value
     * @param bool $shippingIncludedInTax
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setShippingIncludedInTax($shippingIncludedInTax = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingIncludedInTax) && !is_bool($shippingIncludedInTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shippingIncludedInTax)), __LINE__);
        }
        $this->ShippingIncludedInTax = $shippingIncludedInTax;
        return $this;
    }
    /**
     * Get SalesTaxAmount value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getSalesTaxAmount()
    {
        return $this->SalesTaxAmount;
    }
    /**
     * Set SalesTaxAmount value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $salesTaxAmount
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setSalesTaxAmount(\macropage\ebaysdk\shopping\StructType\AmountType $salesTaxAmount = null)
    {
        $this->SalesTaxAmount = $salesTaxAmount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\SalesTaxType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
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
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
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
