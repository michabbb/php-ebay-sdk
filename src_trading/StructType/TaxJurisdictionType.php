<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxJurisdictionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Tax-related details for a region or jurisdiction.
 * @subpackage Structs
 */
class TaxJurisdictionType extends AbstractStructBase
{
    /**
     * The JurisdictionID
     * Meta informations extracted from the WSDL
     * - documentation: Representative identifier for the jurisdiction. Typically an abbreviation (for example, CA for California).
     * - minOccurs: 0
     * @var string
     */
    public $JurisdictionID;
    /**
     * The SalesTaxPercent
     * Meta informations extracted from the WSDL
     * - documentation: The tax percent to apply for a listing shipped to this jurisdiction. The value passed in is stored with a precision of 3 digits after the decimal point (##.###). <br> For GetTaxTable: this tag has no value if the user's tax table has
     * not been set.
     * - minOccurs: 0
     * @var float
     */
    public $SalesTaxPercent;
    /**
     * The ShippingIncludedInTax
     * Meta informations extracted from the WSDL
     * - documentation: Whether shipping costs are to be part of the base amount that is taxed. <br> For GetTaxTable: This tag is empty if the user did not previously provide information.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIncludedInTax;
    /**
     * The JurisdictionName
     * Meta informations extracted from the WSDL
     * - documentation: Full name for the jurisdiction or region for display purposes.
     * - minOccurs: 0
     * @var string
     */
    public $JurisdictionName;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the latest version number for this feature. Use the version to determine if and when to refresh your cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: The time in GMT when the details for this feature were last updated. Use this timestamp to determine if and when to refresh your cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($jurisdictionID = null, $salesTaxPercent = null, $shippingIncludedInTax = null, $jurisdictionName = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
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
    public function getJurisdictionID()
    {
        return $this->JurisdictionID;
    }
    /**
     * Set JurisdictionID value
     * @param string $jurisdictionID
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
     */
    public function setJurisdictionID($jurisdictionID = null)
    {
        // validation for constraint: string
        if (!is_null($jurisdictionID) && !is_string($jurisdictionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jurisdictionID)), __LINE__);
        }
        $this->JurisdictionID = $jurisdictionID;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
     */
    public function setSalesTaxPercent($salesTaxPercent = null)
    {
        $this->SalesTaxPercent = $salesTaxPercent;
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
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
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
     * Get JurisdictionName value
     * @return string|null
     */
    public function getJurisdictionName()
    {
        return $this->JurisdictionName;
    }
    /**
     * Set JurisdictionName value
     * @param string $jurisdictionName
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
     */
    public function setJurisdictionName($jurisdictionName = null)
    {
        // validation for constraint: string
        if (!is_null($jurisdictionName) && !is_string($jurisdictionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jurisdictionName)), __LINE__);
        }
        $this->JurisdictionName = $jurisdictionName;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TaxJurisdictionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
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
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType
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
