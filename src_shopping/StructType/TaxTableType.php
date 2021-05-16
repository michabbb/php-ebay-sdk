<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxTableType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by <b>TaxTable</b> container that is returned in the <b>GetShippingCosts</b> response. The <b>TaxTable</b> container consists of an array of <b>TaxJurisdiction</b> containers; one returned for each tax jurisdiction where
 * the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay). The <b>TaxTable</b> container is returned as an empty element if no sales tax rates have been set up for any jurisdictions.
 * @subpackage Structs
 */
class TaxTableType extends AbstractStructBase
{
    /**
     * The TaxJurisdiction
     * Meta information extracted from the WSDL
     * - documentation: A <b>TaxJurisdiction</b> container is returned for each tax jurisdiction where the seller has defined a sales tax rate (using the <b>Sales Tax Table </b> UI in My eBay), and each of these containers show the sales tax rate for the
     * corresponding tax jurisdiction (and not just the tax jurisdiction associated with the specified <b>DestinationPostalCode</b> in the call request). <br><br> <span class="tablenote"><b>Note: </b> As of November 1, 2019, buyers in over 30 US states will
     * automatically be charged sales tax for eBay purchases. eBay will collect and remit this sales tax to the proper taxing authority on the buyer's behalf. So, if a sales tax rate is applied to the listing by the seller for a state that is subject to
     * eBay 'Collect and Remit', the sales tax rate in this field is ignored by eBay during the checkout process. For a list of US states that are subject to eBay 'Collect and Remit' taxes (and effective dates), see the <a
     * href="https://www.ebay.com/help/selling/fees-credits-invoices/taxes-import-charges?id=4121#section4">eBay sales tax collection</a> help topic. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType[]
     */
    protected array $TaxJurisdiction = [];
    /**
     * Constructor method for TaxTableType
     * @uses TaxTableType::setTaxJurisdiction()
     * @param \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType[] $taxJurisdiction
     */
    public function __construct(array $taxJurisdiction = [])
    {
        $this
            ->setTaxJurisdiction($taxJurisdiction);
    }
    /**
     * Get TaxJurisdiction value
     * @return \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType[]
     */
    public function getTaxJurisdiction(): array
    {
        return $this->TaxJurisdiction;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxJurisdiction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxJurisdiction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxTableTypeTaxJurisdictionItem) {
            // validation for constraint: itemType
            if (!$taxTableTypeTaxJurisdictionItem instanceof \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType) {
                $invalidValues[] = is_object($taxTableTypeTaxJurisdictionItem) ? get_class($taxTableTypeTaxJurisdictionItem) : sprintf('%s(%s)', gettype($taxTableTypeTaxJurisdictionItem), var_export($taxTableTypeTaxJurisdictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxJurisdiction property can only contain items of type \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxJurisdiction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType[] $taxJurisdiction
     * @return \macropage\ebaysdk\shopping\StructType\TaxTableType
     */
    public function setTaxJurisdiction(array $taxJurisdiction = []): self
    {
        // validation for constraint: array
        if ('' !== ($taxJurisdictionArrayErrorMessage = self::validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction($taxJurisdiction))) {
            throw new InvalidArgumentException($taxJurisdictionArrayErrorMessage, __LINE__);
        }
        $this->TaxJurisdiction = $taxJurisdiction;
        
        return $this;
    }
    /**
     * Add item to TaxJurisdiction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType $item
     * @return \macropage\ebaysdk\shopping\StructType\TaxTableType
     */
    public function addToTaxJurisdiction(\macropage\ebaysdk\shopping\StructType\TaxJurisdictionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType) {
            throw new InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of type \macropage\ebaysdk\shopping\StructType\TaxJurisdictionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxJurisdiction[] = $item;
        
        return $this;
    }
}
