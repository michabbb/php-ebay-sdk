<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesTaxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type for expressing sales tax data.
 * @subpackage Structs
 */
class SalesTaxType extends AbstractStructBase
{
    /**
     * The SalesTaxPercent
     * Meta informations extracted from the WSDL
     * - documentation: Percent of an item's price to be charged as the sales tax for the order. The value passed in is stored with a precision of 3 digits after the decimal point (##.###).
     * - minOccurs: 0
     * @var float
     */
    public $SalesTaxPercent;
    /**
     * The SalesTaxState
     * Meta informations extracted from the WSDL
     * - documentation: State or jurisdiction for which the sales tax is being collected. Only returned if the seller specified a value. <br><br> To see the valid values for your site, call <b>GeteBayDetails</b> with <b>DetailName</b> set to
     * <b>TaxJurisdiction</b>, and then look for the <b>TaxJurisdiction.JurisdictionID</b> fields in the response.
     * - minOccurs: 0
     * @var string
     */
    public $SalesTaxState;
    /**
     * The ShippingIncludedInTax
     * Meta informations extracted from the WSDL
     * - documentation: (US only) Whether shipping costs were part of the base amount that was taxed. Flat or calculated shipping.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIncludedInTax;
    /**
     * The SalesTaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: The amount of sales tax, calculated for an order based on the SalesTaxPercent and pricing information. US and US Motors (site 0) sites only, excluding vehicle listings. <br><br> GetItemTransactions can return incorrect sales tax if
     * the name of a state is not abbreviated (e.g. if the value is "Illinois" rather than "IL") in <b>TransactionArray.Transaction.Buyer.BuyerInfo.ShippingAddress.StateOrProvince</b>. If the name of a state is not abbreviated, sales tax should be obtained
     * by using the <b>OrderLineItemID</b> to call <b>GetOrderTransactions</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
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
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salesTaxAmount
     * @param \DOMDocument $any
     */
    public function __construct($salesTaxPercent = null, $salesTaxState = null, $shippingIncludedInTax = null, \macropage\ebaysdk\trading\StructType\AmountType $salesTaxAmount = null, \DOMDocument $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSalesTaxAmount()
    {
        return $this->SalesTaxAmount;
    }
    /**
     * Set SalesTaxAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salesTaxAmount
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
     */
    public function setSalesTaxAmount(\macropage\ebaysdk\trading\StructType\AmountType $salesTaxAmount = null)
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
     * @uses \macropage\ebaysdk\trading\StructType\SalesTaxType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
