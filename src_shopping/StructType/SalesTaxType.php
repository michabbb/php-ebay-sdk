<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesTaxType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to express sales tax details for the shipping destination. Sales tax information is only returned in <b>GetShippingCosts</b> (through <b>ShippingDetails.SalesTax</b> container) if sales tax is applicable to the
 * shipping destination.
 * @subpackage Structs
 */
class SalesTaxType extends AbstractStructBase
{
    /**
     * The SalesTaxPercent
     * Meta information extracted from the WSDL
     * - documentation: Percent of an item's price to be charged as the sales tax for the transaction. The sales tax percentage value is stored with a precision of three digits after the decimal point (##.###).
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SalesTaxPercent = null;
    /**
     * The SalesTaxState
     * Meta information extracted from the WSDL
     * - documentation: State or jurisdiction for which the sales tax is applicable. Only returned if the seller specified a value. This should be the same value that is passed into the <b>DestinationPostalCode</b> in the call request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SalesTaxState = null;
    /**
     * The ShippingIncludedInTax
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if shipping costs (in addition to item cost) are considered when calculating the sales tax amount. Shipping costs can only be taxed for US listings.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShippingIncludedInTax = null;
    /**
     * The SalesTaxAmount
     * Meta information extracted from the WSDL
     * - documentation: This is the expected tax amount based on the item cost (and shipping costs if <b>ShippingIncludedInTax</b> is <code>true</code>), the sales tax percentage, and the shipping destination.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\AmountType $SalesTaxAmount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?float $salesTaxPercent = null, ?string $salesTaxState = null, ?bool $shippingIncludedInTax = null, ?\macropage\ebaysdk\shopping\StructType\AmountType $salesTaxAmount = null, $any = null)
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
    public function getSalesTaxPercent(): ?float
    {
        return $this->SalesTaxPercent;
    }
    /**
     * Set SalesTaxPercent value
     * @param float $salesTaxPercent
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setSalesTaxPercent(?float $salesTaxPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($salesTaxPercent) && !(is_float($salesTaxPercent) || is_numeric($salesTaxPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salesTaxPercent, true), gettype($salesTaxPercent)), __LINE__);
        }
        $this->SalesTaxPercent = $salesTaxPercent;
        
        return $this;
    }
    /**
     * Get SalesTaxState value
     * @return string|null
     */
    public function getSalesTaxState(): ?string
    {
        return $this->SalesTaxState;
    }
    /**
     * Set SalesTaxState value
     * @param string $salesTaxState
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setSalesTaxState(?string $salesTaxState = null): self
    {
        // validation for constraint: string
        if (!is_null($salesTaxState) && !is_string($salesTaxState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesTaxState, true), gettype($salesTaxState)), __LINE__);
        }
        $this->SalesTaxState = $salesTaxState;
        
        return $this;
    }
    /**
     * Get ShippingIncludedInTax value
     * @return bool|null
     */
    public function getShippingIncludedInTax(): ?bool
    {
        return $this->ShippingIncludedInTax;
    }
    /**
     * Set ShippingIncludedInTax value
     * @param bool $shippingIncludedInTax
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setShippingIncludedInTax(?bool $shippingIncludedInTax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shippingIncludedInTax) && !is_bool($shippingIncludedInTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingIncludedInTax, true), gettype($shippingIncludedInTax)), __LINE__);
        }
        $this->ShippingIncludedInTax = $shippingIncludedInTax;
        
        return $this;
    }
    /**
     * Get SalesTaxAmount value
     * @return \macropage\ebaysdk\shopping\StructType\AmountType|null
     */
    public function getSalesTaxAmount(): ?\macropage\ebaysdk\shopping\StructType\AmountType
    {
        return $this->SalesTaxAmount;
    }
    /**
     * Set SalesTaxAmount value
     * @param \macropage\ebaysdk\shopping\StructType\AmountType $salesTaxAmount
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setSalesTaxAmount(?\macropage\ebaysdk\shopping\StructType\AmountType $salesTaxAmount = null): self
    {
        $this->SalesTaxAmount = $salesTaxAmount;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\shopping\StructType\SalesTaxType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
