<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesTaxType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * @subpackage Structs
 */
class SalesTaxType extends AbstractStructBase
{
    /**
     * The SalesTaxPercent
     * Meta information extracted from the WSDL
     * - documentation: This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction (US state or Canadian province). Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax
     * rate comes into play when a buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###). <br><br> This field is only returned in order management calls
     * if sales tax applies to the order line item, and is only in <b>GetItem</b> (and other 'Get' calls) if sales tax is applicable to the listing or order line item, and the seller is the person making the call. <br><br> Although this field will be
     * returned at the order level in order management calls for a single line item order, sales tax is applied at the line item level and not order level. For multiple line item orders, this field will not be returned at all at the order level. <br><br>
     * <span class="tablenote"><b>Note: </b> As of September 1, 2020, buyers in over 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf.
     * So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of the US states that are currently
     * subject to 'eBay Collect and Remit', see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SalesTaxPercent = null;
    /**
     * The SalesTaxState
     * Meta information extracted from the WSDL
     * - documentation: This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all two-digit identifiers for all states/territories/provinces for a site, a seller can either use a <b>GetTaxTable</b> call
     * with <b>DetailLevel</b> set to <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>. Please note that both <b>GetTaxTable</b> and <b>GeteBayDetails</b> calls use a
     * <b>JurisdictionID</b> field to express these tax jurisdiction identifiers instead of <b>SalesTaxState</b>, but the values used in these fields are the same. <br/><br/> The <b>SalesTaxState</b> field is conditionallly required in an
     * Add/Revise/Relist/Verify call if the seller is applying sales tax to a listing for a particular jurisdiction, and is returned with each <b>SalesTax</b> container to identify the tax jurisdiction.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SalesTaxState = null;
    /**
     * The ShippingIncludedInTax
     * Meta information extracted from the WSDL
     * - documentation: This field is included in an Add/Revise/Relist/Verify call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to
     * <code>false</code> if not specified. <br><br> This field is always returned with the <b>SalesTax</b> container (whether <code>true</code> or <code>false</code>). <br><br> <span class="tablenote"><b>Note: </b> As of September 1, 2020, buyers in over
     * 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. With 'eBay Collect and Remit' sales tax, the sales tax is applied against the
     * full cost of the order, including any shipping and handling charges. So, if this field is included for a state that is subject to 'eBay Collect and Remit', this setting is ignored by eBay during checkout process. For a list of the US states that are
     * currently subject to 'eBay Collect and Remit', see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShippingIncludedInTax = null;
    /**
     * The SalesTaxAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount of sales tax calculated for an order line item based on the sale price and the sales tax rate for the buyer's tax jurisdiction. For a multiple line item order, the <b>SalesTaxAmount</b> returned at the order level will be
     * the cumulative amount for all line items in the order. <br><br> GetItemTransactions can return incorrect sales tax if the name of a state is not abbreviated (e.g. if the value is "Illinois" rather than "IL") in
     * <b>TransactionArray.Transaction.Buyer.BuyerInfo.ShippingAddress.StateOrProvince</b>. If the name of a state is not abbreviated, sales tax should be obtained by using the <b>OrderLineItemID</b> to call <b>GetOrderTransactions</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $SalesTaxAmount = null;
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
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salesTaxAmount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?float $salesTaxPercent = null, ?string $salesTaxState = null, ?bool $shippingIncludedInTax = null, ?\macropage\ebaysdk\trading\StructType\AmountType $salesTaxAmount = null, $any = null)
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getSalesTaxAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->SalesTaxAmount;
    }
    /**
     * Set SalesTaxAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $salesTaxAmount
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
     */
    public function setSalesTaxAmount(?\macropage\ebaysdk\trading\StructType\AmountType $salesTaxAmount = null): self
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
     * @return \macropage\ebaysdk\trading\StructType\SalesTaxType
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
