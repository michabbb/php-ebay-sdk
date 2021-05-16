<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxJurisdictionType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to show sales tax-related details for a tax jurisdiction. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * @subpackage Structs
 */
class TaxJurisdictionType extends AbstractStructBase
{
    /**
     * The JurisdictionID
     * Meta information extracted from the WSDL
     * - documentation: This is the unique, two-digit identifier of the tax jurisdiction (such as 'CA' for California). To retrieve all <b>JurisdictionID</b> values for a site, a seller can either use a <b>GetTaxTable</b> call with <b>DetailLevel</b> set to
     * <code>ReturnAll</code>, or they can use the <b>GeteBayDetails</b> call with <b>DetailLevel</b> name set to <code>TaxJurisdiction</code>. <br/><br/> The <b>JurisdictionID</b> field is always required in a <b>SetTaxTable</b> call, and always returned
     * with each <b>TaxJurisdiction</b> container to identify the tax jurisdiction.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JurisdictionID = null;
    /**
     * The SalesTaxPercent
     * Meta information extracted from the WSDL
     * - documentation: This float value is the sales tax percentage rate applicable to the corresponding tax jurisdiction. Sellers are responsible for providing accurate sales tax rates for each jurisdiction. This sales tax rate comes into play when a
     * buyer from that tax jurisdiction makes a purchase from the seller. The value passed in is stored with a precision of 3 digits after the decimal point (##.###). <br><br> This field is only returned in <b>GetTaxTable</b> (and other 'Get' calls) if a
     * sales tax percentage rate has been set. <br><br> <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40 US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper
     * taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a
     * list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic.
     * </span>
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SalesTaxPercent = null;
    /**
     * The ShippingIncludedInTax
     * Meta information extracted from the WSDL
     * - documentation: This field is included in a <b>SetTaxTable</b> call and set to <code>true</code> if the seller wants sales tax for the jurisdiction to apply to the cumulative amount of item cost and shipping charges. This value defaults to
     * <code>false</code> if not specified. <br><br> This field is always returned with each <b>TaxJurisdiction</b> container (whether <code>true</code> or <code>false</code>). <br><br> <span class="tablenote"><b>Note: </b> As of April 1, 2020, buyers in 40
     * US states will automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is
     * subject to eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShippingIncludedInTax = null;
    /**
     * The JurisdictionName
     * Meta information extracted from the WSDL
     * - documentation: Full name for the jurisdiction or region for display purposes.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JurisdictionName = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this feature. Use the version to determine if and when to refresh your cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: The time in GMT when the details for this feature were last updated. Use this timestamp to determine if and when to refresh your cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
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
     * @uses TaxJurisdictionType::setJurisdictionName()
     * @uses TaxJurisdictionType::setDetailVersion()
     * @uses TaxJurisdictionType::setUpdateTime()
     * @uses TaxJurisdictionType::setAny()
     * @param string $jurisdictionID
     * @param float $salesTaxPercent
     * @param bool $shippingIncludedInTax
     * @param string $jurisdictionName
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $jurisdictionID = null, ?float $salesTaxPercent = null, ?bool $shippingIncludedInTax = null, ?string $jurisdictionName = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setJurisdictionID($jurisdictionID)
            ->setSalesTaxPercent($salesTaxPercent)
            ->setShippingIncludedInTax($shippingIncludedInTax)
            ->setJurisdictionName($jurisdictionName)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
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
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
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
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
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
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
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
     * Get JurisdictionName value
     * @return string|null
     */
    public function getJurisdictionName(): ?string
    {
        return $this->JurisdictionName;
    }
    /**
     * Set JurisdictionName value
     * @param string $jurisdictionName
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
     */
    public function setJurisdictionName(?string $jurisdictionName = null): self
    {
        // validation for constraint: string
        if (!is_null($jurisdictionName) && !is_string($jurisdictionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jurisdictionName, true), gettype($jurisdictionName)), __LINE__);
        }
        $this->JurisdictionName = $jurisdictionName;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
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
