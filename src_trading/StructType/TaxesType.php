<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Taxes</b> container, which contains detailed tax information (sales tax and VAT) for an order line item. The information in this container supercedes/overrides the sales tax information in the
 * <b>ShippingDetails.SalesTax</b> container.
 * @subpackage Structs
 */
class TaxesType extends AbstractStructBase
{
    /**
     * The eBayReference
     * Meta information extracted from the WSDL
     * - documentation: The value returned in this field is the VAT ID for eBay, and this value may vary based on the region or country. The <b>eBayReference</b> field's <b>name</b> attribute will show the type of VAT ID, such as <code>IOSS</code>,
     * <code>OSS</code>, or <code>ABN</code>. This field will be returned if VAT tax is applicable for the order. See the <a href="types/eBayTaxReferenceValue.html">eBayTaxReferenceValue</a> type page for more information on the VAT tax type strings that
     * may appear for the <b>name</b> attribute. <br> <br> <span class="tablenote"><b>Note: </b> For all VAT ID/VATIN values to be returned (except for France), developers will need to use a Trading WSDL with a version number of 1211 (or newer). For French
     * VAT ID/VATIN values to be returned, developers will need to use a Trading WSDL with a version number of 1225 (or newer). Otherwise, the VAT information will be returned in the <b>Order.ShippingAddress.Street2</b> field. Developers will also have the
     * option of using older version, but setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> header value to 1211 or 1225 or higher. <br> <br> On January 31, 2022, the <b>Order.ShippingAddress.Street2</b> will stop being used to return VAT information
     * regardless of WSDL version or compatibility level. </span> <br>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EBayTaxReferenceValue|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EBayTaxReferenceValue $eBayReference = null;
    /**
     * The TotalTaxAmount
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or
     * other fees like an electronic waste recycling fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $TotalTaxAmount = null;
    /**
     * The TaxDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxDetailsType[]
     */
    protected ?array $TaxDetails = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TaxesType
     * @uses TaxesType::setEBayReference()
     * @uses TaxesType::setTotalTaxAmount()
     * @uses TaxesType::setTaxDetails()
     * @uses TaxesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\EBayTaxReferenceValue $eBayReference
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount
     * @param \macropage\ebaysdk\trading\StructType\TaxDetailsType[] $taxDetails
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\EBayTaxReferenceValue $eBayReference = null, ?\macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount = null, ?array $taxDetails = null, $any = null)
    {
        $this
            ->setEBayReference($eBayReference)
            ->setTotalTaxAmount($totalTaxAmount)
            ->setTaxDetails($taxDetails)
            ->setAny($any);
    }
    /**
     * Get eBayReference value
     * @return \macropage\ebaysdk\trading\StructType\EBayTaxReferenceValue|null
     */
    public function getEBayReference(): ?\macropage\ebaysdk\trading\StructType\EBayTaxReferenceValue
    {
        return $this->eBayReference;
    }
    /**
     * Set eBayReference value
     * @param \macropage\ebaysdk\trading\StructType\EBayTaxReferenceValue $eBayReference
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public function setEBayReference(?\macropage\ebaysdk\trading\StructType\EBayTaxReferenceValue $eBayReference = null): self
    {
        $this->eBayReference = $eBayReference;
        
        return $this;
    }
    /**
     * Get TotalTaxAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getTotalTaxAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->TotalTaxAmount;
    }
    /**
     * Set TotalTaxAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public function setTotalTaxAmount(?\macropage\ebaysdk\trading\StructType\AmountType $totalTaxAmount = null): self
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        
        return $this;
    }
    /**
     * Get TaxDetails value
     * @return \macropage\ebaysdk\trading\StructType\TaxDetailsType[]
     */
    public function getTaxDetails(): ?array
    {
        return $this->TaxDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxDetailsForArrayConstraintsFromSetTaxDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxesTypeTaxDetailsItem) {
            // validation for constraint: itemType
            if (!$taxesTypeTaxDetailsItem instanceof \macropage\ebaysdk\trading\StructType\TaxDetailsType) {
                $invalidValues[] = is_object($taxesTypeTaxDetailsItem) ? get_class($taxesTypeTaxDetailsItem) : sprintf('%s(%s)', gettype($taxesTypeTaxDetailsItem), var_export($taxesTypeTaxDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxDetailsType[] $taxDetails
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public function setTaxDetails(?array $taxDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxDetailsArrayErrorMessage = self::validateTaxDetailsForArrayConstraintsFromSetTaxDetails($taxDetails))) {
            throw new InvalidArgumentException($taxDetailsArrayErrorMessage, __LINE__);
        }
        $this->TaxDetails = $taxDetails;
        
        return $this;
    }
    /**
     * Add item to TaxDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
     */
    public function addToTaxDetails(\macropage\ebaysdk\trading\StructType\TaxDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxDetailsType) {
            throw new InvalidArgumentException(sprintf('The TaxDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxDetails[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TaxesType
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
