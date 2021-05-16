<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>TaxDetails</b> container, which consists of detailed tax information for an order line item, including the tax type and description, tax on the item cost, and tax related to shipping and handling. The information
 * in this container supercedes/overrides the sales tax information in the <b>ShippingDetails.SalesTax</b> container (if returned).
 * @subpackage Structs
 */
class TaxDetailsType extends AbstractStructBase
{
    /**
     * The Imposition
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the tax type. A separate <b>TaxDetails</b> container is returned for each unique imposition (tax type).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Imposition = null;
    /**
     * The TaxDescription
     * Meta information extracted from the WSDL
     * - documentation: This enumeration indicates the type of tax.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TaxDescription = null;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is the total amount of sales tax for the order line item for the corresponding impositiion (tax type). <br><br> <b>TaxAmount</b> = <b>TaxOnSubtotalAmount</b> + <b>TaxOnShippingAmount</b> + <b>TaxOnHandlingAmount</b>
     * <br><br> <span class="tablenote"><b>Note: </b> If the corresponding tax type is <code>GST</code> or <code>SalesTax</code> (if found under both the <b>eBayCollectAndRemitTaxes.TaxDetails</b> and <b>Taxes.TaxDetails</b> containers), the order is
     * subject to 'eBay Collect and Remit' tax, and a change in logic has been rolled out as of early November 2019. For orders that are subject to 'eBay Collect and Remit' tax, which includes US sales tax for numerous states, and 'Good and Services' tax
     * that is applicable to Australian and New Zealand sellers, the tax amount in this field will be included in the <b>Order.Total</b>, <b>Order.AmountPaid</b>, and <b>Transaction.AmountPaid</b> fields. <br><br> Sellers should be aware that the sales tax
     * that the buyer pays for the order will initially be included when the order funds are distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the
     * appropriate taxing authority. Previous to this change, PayPal would strip out the 'Collect and Remit' tax before distributing order funds to the seller's account. <br><br> This logic change does not apply to sellers who are in eBay managed payments,
     * so the amount in this field will never reflect any 'Collect and Remit' tax, even if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TaxAmount = null;
    /**
     * The TaxOnSubtotalAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on the unit cost of the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TaxOnSubtotalAmount = null;
    /**
     * The TaxOnShippingAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on shipping costs for the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TaxOnShippingAmount = null;
    /**
     * The TaxOnHandlingAmount
     * Meta information extracted from the WSDL
     * - documentation: This value is the amount of sales tax applied based on handling costs for the order line item for the corresponding impositiion (tax type).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TaxOnHandlingAmount = null;
    /**
     * The TaxCode
     * Meta information extracted from the WSDL
     * - documentation: This value is the actual tax ID for the buyer. This field will generally only be returned if a seller on the Italy or Spain sites required that the buyer supply a tax ID during the checkout process. If the
     * <b>Order.BuyerTaxIdentifier</b> container is returned, the type of tax ID can be found in the <b>BuyerTaxIdentifier.Type</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TaxCode = null;
    /**
     * The CollectionMethod
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the collection method used to collect the 'Collect and Remit' or 'Good and Services' tax for the order. This field is always returned for orders subject to 'Collect and Remit' or 'Good and Services' tax, and its
     * value is always <code>NET</code>. <br> <br> <span class="tablenote"><b>Note: </b> Although the <b>CollectionMethod</b> field is returned for all orders subject to 'Collect and Remit' sales tax or 'Good and Services' tax, the <b>CollectionMethod</b>
     * field and <b>CollectionMethodCodeType</b> are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release
     * Notes. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CollectionMethod = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TaxDetailsType
     * @uses TaxDetailsType::setImposition()
     * @uses TaxDetailsType::setTaxDescription()
     * @uses TaxDetailsType::setTaxAmount()
     * @uses TaxDetailsType::setTaxOnSubtotalAmount()
     * @uses TaxDetailsType::setTaxOnShippingAmount()
     * @uses TaxDetailsType::setTaxOnHandlingAmount()
     * @uses TaxDetailsType::setTaxCode()
     * @uses TaxDetailsType::setCollectionMethod()
     * @uses TaxDetailsType::setAny()
     * @param string $imposition
     * @param string $taxDescription
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnSubtotalAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnShippingAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnHandlingAmount
     * @param string $taxCode
     * @param string $collectionMethod
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $imposition = null, ?string $taxDescription = null, ?\macropage\ebaysdk\trading\StructType\AmountType $taxAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $taxOnSubtotalAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $taxOnShippingAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $taxOnHandlingAmount = null, ?string $taxCode = null, ?string $collectionMethod = null, $any = null)
    {
        $this
            ->setImposition($imposition)
            ->setTaxDescription($taxDescription)
            ->setTaxAmount($taxAmount)
            ->setTaxOnSubtotalAmount($taxOnSubtotalAmount)
            ->setTaxOnShippingAmount($taxOnShippingAmount)
            ->setTaxOnHandlingAmount($taxOnHandlingAmount)
            ->setTaxCode($taxCode)
            ->setCollectionMethod($collectionMethod)
            ->setAny($any);
    }
    /**
     * Get Imposition value
     * @return string|null
     */
    public function getImposition(): ?string
    {
        return $this->Imposition;
    }
    /**
     * Set Imposition value
     * @uses \macropage\ebaysdk\trading\EnumType\TaxTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TaxTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $imposition
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setImposition(?string $imposition = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TaxTypeCodeType::valueIsValid($imposition)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TaxTypeCodeType', is_array($imposition) ? implode(', ', $imposition) : var_export($imposition, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TaxTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Imposition = $imposition;
        
        return $this;
    }
    /**
     * Get TaxDescription value
     * @return string|null
     */
    public function getTaxDescription(): ?string
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @uses \macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $taxDescription
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxDescription(?string $taxDescription = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType::valueIsValid($taxDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType', is_array($taxDescription) ? implode(', ', $taxDescription) : var_export($taxDescription, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TaxDescriptionCodeType::getValidValues())), __LINE__);
        }
        $this->TaxDescription = $taxDescription;
        
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTaxAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxAmount(?\macropage\ebaysdk\trading\StructType\AmountType $taxAmount = null): self
    {
        $this->TaxAmount = $taxAmount;
        
        return $this;
    }
    /**
     * Get TaxOnSubtotalAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTaxOnSubtotalAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TaxOnSubtotalAmount;
    }
    /**
     * Set TaxOnSubtotalAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnSubtotalAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxOnSubtotalAmount(?\macropage\ebaysdk\trading\StructType\AmountType $taxOnSubtotalAmount = null): self
    {
        $this->TaxOnSubtotalAmount = $taxOnSubtotalAmount;
        
        return $this;
    }
    /**
     * Get TaxOnShippingAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTaxOnShippingAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TaxOnShippingAmount;
    }
    /**
     * Set TaxOnShippingAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnShippingAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxOnShippingAmount(?\macropage\ebaysdk\trading\StructType\AmountType $taxOnShippingAmount = null): self
    {
        $this->TaxOnShippingAmount = $taxOnShippingAmount;
        
        return $this;
    }
    /**
     * Get TaxOnHandlingAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTaxOnHandlingAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TaxOnHandlingAmount;
    }
    /**
     * Set TaxOnHandlingAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $taxOnHandlingAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxOnHandlingAmount(?\macropage\ebaysdk\trading\StructType\AmountType $taxOnHandlingAmount = null): self
    {
        $this->TaxOnHandlingAmount = $taxOnHandlingAmount;
        
        return $this;
    }
    /**
     * Get TaxCode value
     * @return string|null
     */
    public function getTaxCode(): ?string
    {
        return $this->TaxCode;
    }
    /**
     * Set TaxCode value
     * @param string $taxCode
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setTaxCode(?string $taxCode = null): self
    {
        // validation for constraint: string
        if (!is_null($taxCode) && !is_string($taxCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxCode, true), gettype($taxCode)), __LINE__);
        }
        $this->TaxCode = $taxCode;
        
        return $this;
    }
    /**
     * Get CollectionMethod value
     * @return string|null
     */
    public function getCollectionMethod(): ?string
    {
        return $this->CollectionMethod;
    }
    /**
     * Set CollectionMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\CollectionMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\CollectionMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $collectionMethod
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
     */
    public function setCollectionMethod(?string $collectionMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\CollectionMethodCodeType::valueIsValid($collectionMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\CollectionMethodCodeType', is_array($collectionMethod) ? implode(', ', $collectionMethod) : var_export($collectionMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\CollectionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->CollectionMethod = $collectionMethod;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType
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
