<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxTableType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Sales tax details for zero or more jurisdictions (states, provinces, etc).
 * @subpackage Structs
 */
class TaxTableType extends AbstractStructBase
{
    /**
     * The TaxJurisdiction
     * Meta informations extracted from the WSDL
     * - documentation: Sales tax details for zero or more jurisdictions (states, provinces, etc). <br><br> For GetTaxTable: If <b>DetailLevel</b> is not specified, information is returned only for the jurisdictions for which the user provided tax
     * information. If <b>DetailLevel</b> is <code>ReturnAll</code>, tax information is returned for all possible jurisdictions, whether specified by the user or not. <b>ShippingIncludedInTax</b> and <b>SalesTaxPercent</b> are returned, but are empty.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[]
     */
    public $TaxJurisdiction;
    /**
     * Constructor method for TaxTableType
     * @uses TaxTableType::setTaxJurisdiction()
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[] $taxJurisdiction
     */
    public function __construct(array $taxJurisdiction = array())
    {
        $this
            ->setTaxJurisdiction($taxJurisdiction);
    }
    /**
     * Get TaxJurisdiction value
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[]|null
     */
    public function getTaxJurisdiction()
    {
        return $this->TaxJurisdiction;
    }
    /**
     * Set TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[] $taxJurisdiction
     * @return \macropage\ebaysdk\trading\StructType\TaxTableType
     */
    public function setTaxJurisdiction(array $taxJurisdiction = array())
    {
        foreach ($taxJurisdiction as $taxTableTypeTaxJurisdictionItem) {
            // validation for constraint: itemType
            if (!$taxTableTypeTaxJurisdictionItem instanceof \macropage\ebaysdk\trading\StructType\TaxJurisdictionType) {
                throw new \InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of \macropage\ebaysdk\trading\StructType\TaxJurisdictionType, "%s" given', is_object($taxTableTypeTaxJurisdictionItem) ? get_class($taxTableTypeTaxJurisdictionItem) : gettype($taxTableTypeTaxJurisdictionItem)), __LINE__);
            }
        }
        $this->TaxJurisdiction = $taxJurisdiction;
        return $this;
    }
    /**
     * Add item to TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType $item
     * @return \macropage\ebaysdk\trading\StructType\TaxTableType
     */
    public function addToTaxJurisdiction(\macropage\ebaysdk\trading\StructType\TaxJurisdictionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxJurisdictionType) {
            throw new \InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of \macropage\ebaysdk\trading\StructType\TaxJurisdictionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxJurisdiction[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\TaxTableType
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
