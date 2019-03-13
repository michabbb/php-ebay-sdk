<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxJurisdictionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by each <b>TaxJurisdiction</b> container that is returned in the <b>GetShippingCosts</b> response. A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate
 * (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call
 * request).
 * @subpackage Structs
 */
class TaxJurisdictionType extends AbstractStructBase
{
    /**
     * The JurisdictionID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the sales tax jurisdiction (typically, a state or province). In the US, the two-digit acronyms for the states are used (such as 'CA' for California).
     * - minOccurs: 0
     * @var string
     */
    public $JurisdictionID;
    /**
     * The SalesTaxPercent
     * Meta informations extracted from the WSDL
     * - documentation: The sales tax percentage that will be applied to orders shipped to this jurisdiction. Sellers define sales tax rates for different tax jurisdictions using the <b>Sales Tax Table </b> UI in My eBay. The sales tax percent value
     * supports a precision of 3 digits after the decimal point (##.###).
     * - minOccurs: 0
     * @var float
     */
    public $SalesTaxPercent;
    /**
     * The ShippingIncludedInTax
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field indicates whether or not shipping costs are to be part of the base order amount that is taxed. This value is 'false' by default, and the seller will have to mark this setting to 'true' in the <b>Sales Tax Table
     * </b> UI in My eBay.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingIncludedInTax;
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
     * @uses TaxJurisdictionType::setAny()
     * @param string $jurisdictionID
     * @param float $salesTaxPercent
     * @param bool $shippingIncludedInTax
     * @param \DOMDocument $any
     */
    public function __construct($jurisdictionID = null, $salesTaxPercent = null, $shippingIncludedInTax = null, \DOMDocument $any = null)
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
    public function getJurisdictionID()
    {
        return $this->JurisdictionID;
    }
    /**
     * Set JurisdictionID value
     * @param string $jurisdictionID
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
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
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
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
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
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
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType
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
