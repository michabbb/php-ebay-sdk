<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the TaxDetails container, which consists of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling. The
 * information in this container supercedes/overrides the sales tax information in the ShippingDetails.SalesTax container.
 * @subpackage Structs
 */
class TaxDetailsType extends AbstractStructBase
{
    /**
     * The Imposition
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the sales tax type. A separate TaxDetails container is required for each unique imposition (tax type).
     * - minOccurs: 0
     * @var string
     */
    public $Imposition;
    /**
     * The TaxDescription
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the description of the sales tax.
     * - minOccurs: 0
     * @var string
     */
    public $TaxDescription;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: This value is the total amount of sales tax for the order line item for the corresponding impositiion (tax type). <br><br> <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TaxAmount;
    /**
     * The TaxOnSubtotalAmount
     * Meta informations extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on the unit cost of the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TaxOnSubtotalAmount;
    /**
     * The TaxOnShippingAmount
     * Meta informations extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on shipping costs for the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TaxOnShippingAmount;
    /**
     * The TaxOnHandlingAmount
     * Meta informations extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on handling costs for the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $TaxOnHandlingAmount;
    /**
     * The TaxCode
     * Meta informations extracted from the WSDL
     * - documentation: This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the
     * <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $TaxCode;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TaxDetailsType
     * @uses TaxDetailsType::setImposition()
     * @uses TaxDetailsType::setTaxDescription()
     * @uses TaxDetailsType::setTaxAmount()
     * @uses TaxDetailsType::setTaxOnSubtotalAmount()
     * @uses TaxDetailsType::setTaxOnShippingAmount()
     * @uses TaxDetailsType::setTaxOnHandlingAmount()
     * @uses TaxDetailsType::setTaxCode()
     * @uses TaxDetailsType::setAny()
     * @param string $imposition
     * @param string $taxDescription
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnSubtotalAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnShippingAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnHandlingAmount
     * @param string $taxCode
     * @param \DOMDocument $any
     */
    public function __construct($imposition = null, $taxDescription = null, \macropage\ebaysdk\trading\StructType\AmountType $taxAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $taxOnSubtotalAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $taxOnShippingAmount = null, \macropage\ebaysdk\trading\StructType\AmountType $taxOnHandlingAmount = null, $taxCode = null, \DOMDocument $any = null)
    {
        $this
            ->setImposition($imposition)
            ->setTaxDescription($taxDescription)
            ->setTaxAmount($taxAmount)
            ->setTaxOnSubtotalAmount($taxOnSubtotalAmount)
            ->setTaxOnShippingAmount($taxOnShippingAmount)
            ->setTaxOnHandlingAmount($taxOnHandlingAmount)
            ->setTaxCode($taxCode)
            ->setAny($any);
    }
    /**
     * Get Imposition value
     * @return string|null
     */
    public function getImposition()
    {
        return $this->Imposition;
    }
    /**
     * Set Imposition value
     * @uses \macropage\ebaysdk\trading\EnumType\TaxTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TaxTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imposition
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setImposition($imposition = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TaxTypeCodeType::valueIsValid($imposition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imposition, implode(', ', \macropage\ebaysdk\trading\EnumType\TaxTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Imposition = $imposition;
        return $this;
    }
    /**
     * Get TaxDescription value
     * @return string|null
     */
    public function getTaxDescription()
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @uses \macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $taxDescription
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxDescription($taxDescription = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType::valueIsValid($taxDescription)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxDescription, implode(', ', \macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType::getValidValues())), __LINE__);
        }
        $this->TaxDescription = $taxDescription;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxAmount(\macropage\ebaysdk\trading\StructType\AmountType $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get TaxOnSubtotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTaxOnSubtotalAmount()
    {
        return $this->TaxOnSubtotalAmount;
    }
    /**
     * Set TaxOnSubtotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnSubtotalAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxOnSubtotalAmount(\macropage\ebaysdk\trading\StructType\AmountType $taxOnSubtotalAmount = null)
    {
        $this->TaxOnSubtotalAmount = $taxOnSubtotalAmount;
        return $this;
    }
    /**
     * Get TaxOnShippingAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTaxOnShippingAmount()
    {
        return $this->TaxOnShippingAmount;
    }
    /**
     * Set TaxOnShippingAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnShippingAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxOnShippingAmount(\macropage\ebaysdk\trading\StructType\AmountType $taxOnShippingAmount = null)
    {
        $this->TaxOnShippingAmount = $taxOnShippingAmount;
        return $this;
    }
    /**
     * Get TaxOnHandlingAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTaxOnHandlingAmount()
    {
        return $this->TaxOnHandlingAmount;
    }
    /**
     * Set TaxOnHandlingAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnHandlingAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxOnHandlingAmount(\macropage\ebaysdk\trading\StructType\AmountType $taxOnHandlingAmount = null)
    {
        $this->TaxOnHandlingAmount = $taxOnHandlingAmount;
        return $this;
    }
    /**
     * Get TaxCode value
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }
    /**
     * Set TaxCode value
     * @param string $taxCode
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxCode($taxCode = null)
    {
        // validation for constraint: string
        if (!is_null($taxCode) && !is_string($taxCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxCode)), __LINE__);
        }
        $this->TaxCode = $taxCode;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TaxDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
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
