<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxJurisdictionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by each <b>TaxJurisdiction</b> container that is returned in the <b>GetShippingCosts</b> response. A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate
 * (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call
 * request).
 * @subpackage Structs
 */
class TaxJurisdictionType extends AbstractStructBase
{
    /**
     * The JurisdictionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the sales tax jurisdiction (typically, a state or province). In the US, the two-digit acronyms for the states are used (such as 'CA' for California).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JurisdictionID = null;
    /**
     * The SalesTaxPercent
     * Meta information extracted from the WSDL
     * - documentation: The sales tax percentage that will be applied to orders shipped to this jurisdiction. Sellers define sales tax rates for different tax jurisdictions using the <b>Sales Tax Table </b> UI in My eBay. The sales tax percent value
     * supports a precision of 3 digits after the decimal point (##.###). <br><br> <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and
     * remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay
     * during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales
     * tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SalesTaxPercent = null;
    /**
     * The ShippingIncludedInTax
     * Meta information extracted from the WSDL
     * - documentation: This boolean field indicates whether or not shipping costs are to be part of the base order amount that is taxed. This value is 'false' by default, and the seller will have to mark this setting to 'true' in the <b>Sales Tax Table
     * </b> UI in My eBay. <br><br> <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing
     * authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of
     * US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShippingIncludedInTax = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TaxJurisdictionType
     * @uses TaxJurisdictionType::setJurisdictionID()
     * @uses TaxJurisdictionType::setSalesTaxPercent()
     * @uses TaxJurisdictionType::setShippingIncludedInTax()
     * @uses TaxJurisdictionType::setAny()
     * @param string $jurisdictionID
     * @param float $salesTaxPercent
     * @param bool $shippingIncludedInTax
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $jurisdictionID = null, ?float $salesTaxPercent = null, ?bool $shippingIncludedInTax = null, $any = null)
    {
        $this
            ->setJurisdictionID($jurisdictionID)
            ->setSalesTaxPercent($salesTaxPercent)
            ->setShippingIncludedInTax($shippingIncludedInTax)
            ->setAny($any);
    }
    /**
     * Get JurisdictionID value
     * @return string|null
     */
    public function getJurisdictionID(): ?string
    {
        return $this->JurisdictionID;
    }
    /**
     * Set JurisdictionID value
     * @param string $jurisdictionID
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
     */
    public function setJurisdictionID(?string $jurisdictionID = null): self
    {
        // validation for constraint: string
        if (!is_null($jurisdictionID) && !is_string($jurisdictionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jurisdictionID, true), gettype($jurisdictionID)), __LINE__);
        }
        $this->JurisdictionID = $jurisdictionID;
        
        return $this;
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
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
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
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
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
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
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
