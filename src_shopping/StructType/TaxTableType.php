<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxTableType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by <b>TaxTable</b> container that is returned in the <b>GetShippingCosts</b> response. The <b>TaxTable</b> container consists of an array of <b>TaxJurisdiction</b> containers; one returned for each tax jurisdiction where
 * the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay). The <b>TaxTable</b> container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
 * @subpackage Structs
 */
class TaxTableType extends AbstractStructBase
{
    /**
     * The TaxJurisdiction
     * Meta informations extracted from the WSDL
     * - documentation: A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the
     * corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType[]
     */
    public $TaxJurisdiction;
    /**
     * Constructor method for TaxTableType
     * @uses TaxTableType::setTaxJurisdiction()
     * @param \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType[] $taxJurisdiction
     */
    public function __construct(array $taxJurisdiction = array())
    {
        $this
            ->setTaxJurisdiction($taxJurisdiction);
    }
    /**
     * Get TaxJurisdiction value
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType[]|null
     */
    public function getTaxJurisdiction()
    {
        return $this->TaxJurisdiction;
    }
    /**
     * Set TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType[] $taxJurisdiction
     * @return \macropage\ebaysdk\shopping\StructType\TaxTableType
     */
    public function setTaxJurisdiction(array $taxJurisdiction = array())
    {
        foreach ($taxJurisdiction as $taxTableTypeTaxJurisdictionItem) {
            // validation for constraint: itemType
            if (!$taxTableTypeTaxJurisdictionItem instanceof \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType) {
                throw new \InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType, "%s" given', is_object($taxTableTypeTaxJurisdictionItem) ? get_class($taxTableTypeTaxJurisdictionItem) : gettype($taxTableTypeTaxJurisdictionItem)), __LINE__);
            }
        }
        $this->TaxJurisdiction = $taxJurisdiction;
        return $this;
    }
    /**
     * Add item to TaxJurisdiction value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType $item
     * @return \macropage\ebaysdk\shopping\StructType\TaxTableType
     */
    public function addToTaxJurisdiction(\macropage\ebaysdk\shopping\StructType\TaxJurisdictionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType) {
            throw new \InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \macropage\ebaysdk\shopping\StructType\TaxTableType
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
