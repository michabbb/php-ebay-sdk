<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the Taxes container, which contains detailed sales tax information for an order line item. The Taxes container is only returned if the seller is using the Vertex- based Premium Sales Tax Engine solution. The information
 * in this container supercedes/overrides the sales tax information in the ShippingDetails.SalesTax container.
 * @subpackage Structs
 */
class TaxesType extends AbstractStructBase
{
    /**
     * The TotalTaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the total tax amount for the order line item, including the sales tax on the item, the sales tax on shipping and handling, and any electronic waste recycling fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TotalTaxAmount;
    /**
     * The TaxDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxDetailsType[]
     */
    public $TaxDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TaxesType
     * @uses TaxesType::setTotalTaxAmount()
     * @uses TaxesType::setTaxDetails()
     * @uses TaxesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount
     * @param \macropage\ebaysdk\trading\StructType\TaxDetailsType[] $taxDetails
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount = null, array $taxDetails = array(), \DOMDocument $any = null)
    {
        $this
            ->setTotalTaxAmount($totalTaxAmount)
            ->setTaxDetails($taxDetails)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public function setTotalTaxAmount(\macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount = null)
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        return $this;
    }
    /**
     * Get TaxDetails value
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType[]|null
     */
    public function getTaxDetails()
    {
        return $this->TaxDetails;
    }
    /**
     * Set TaxDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxDetailsType[] $taxDetails
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public function setTaxDetails(array $taxDetails = array())
    {
        foreach ($taxDetails as $taxesTypeTaxDetailsItem) {
            // validation for constraint: itemType
            if (!$taxesTypeTaxDetailsItem instanceof \macropage\ebaysdk\trading\StructType\TaxDetailsType) {
                throw new \InvalidArgumentException(sprintf('The TaxDetails property can only contain items of \macropage\ebaysdk\trading\StructType\TaxDetailsType, "%s" given', is_object($taxesTypeTaxDetailsItem) ? get_class($taxesTypeTaxDetailsItem) : gettype($taxesTypeTaxDetailsItem)), __LINE__);
            }
        }
        $this->TaxDetails = $taxDetails;
        return $this;
    }
    /**
     * Add item to TaxDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public function addToTaxDetails(\macropage\ebaysdk\trading\StructType\TaxDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxDetailsType) {
            throw new \InvalidArgumentException(sprintf('The TaxDetails property can only contain items of \macropage\ebaysdk\trading\StructType\TaxDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxDetails[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TaxesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
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
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
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
