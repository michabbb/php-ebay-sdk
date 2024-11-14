<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxTableType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to express sales tax details for one or more tax jurisdictions. The concept of 'sales tax' is only applicable to eBay US and Canada (English and French) sites.
 * @subpackage Structs
 */
class TaxTableType extends AbstractStructBase
{
    /**
     * The TaxJurisdiction
     * Meta information extracted from the WSDL
     * - documentation: In a <b>SetTaxTable</b>, a <b>TaxJurisdiction</b> container is required for each tax jurisdiction that the seller wishes to make additions/changes. Sales tax details for zero or more jurisdictions (states, provinces, etc). This can
     * be just one jurisdiction, up to all jurisdictions defined for the site's country. Any values specified through a <b>TaxJurisdiction</b> container will override any existing values defined in the seller's Sales Tax Table. <br><br> If
     * <b>GetTaxTable</b> is called without the <b>DetailLevel</b> field, only tax jurisdictions where sales tax rates have been set up are returned. However, if the <b>DetailLevel</b> field is included in the request and set to <code>ReturnAll</code>, all
     * tax jurisdictions are returned, regardless of whether or not the seller has modified settings for any/all of these jurisdictions. <br><br> This container is only returned in order-related 'Get' calls if sales tax is applicable to the order line item.
     * <br><br> <span class="tablenote"><b>Note: </b> Buyers in all 50 US states and DC are automatically charged sales tax for eBay purchases, and eBay collects and remits this sales tax to the proper taxing authority on the buyer's behalf. Because of
     * this, if a sales tax percentage rate is applied to a listing by a seller in one of these states, this field will be ignored during the checkout process. <br><br> Currently, sales tax percentage rates can only be specified by sellers in Canada and 5
     * US territories, including American Samoa (AS), Guam (GU), Northern Mariana Islands (MP), Palau (PW), and Virgin Islands (VI). </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[]
     */
    protected ?array $TaxJurisdiction = null;
    /**
     * Constructor method for TaxTableType
     * @uses TaxTableType::setTaxJurisdiction()
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[] $taxJurisdiction
     */
    public function __construct(?array $taxJurisdiction = null)
    {
        $this
            ->setTaxJurisdiction($taxJurisdiction);
    }
    /**
     * Get TaxJurisdiction value
     * @return \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[]
     */
    public function getTaxJurisdiction(): ?array
    {
        return $this->TaxJurisdiction;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxJurisdiction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxJurisdiction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxJurisdictionForArrayConstraintsFromSetTaxJurisdiction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxTableTypeTaxJurisdictionItem) {
            // validation for constraint: itemType
            if (!$taxTableTypeTaxJurisdictionItem instanceof \macropage\ebaysdk\trading\StructType\TaxJurisdictionType) {
                $invalidValues[] = is_object($taxTableTypeTaxJurisdictionItem) ? get_class($taxTableTypeTaxJurisdictionItem) : sprintf('%s(%s)', gettype($taxTableTypeTaxJurisdictionItem), var_export($taxTableTypeTaxJurisdictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxJurisdiction property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxJurisdictionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxJurisdiction value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType[] $taxJurisdiction
     * @return \macropage\ebaysdk\trading\StructType\TaxTableType
     */
    public function setTaxJurisdiction(?array $taxJurisdiction = null): self
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
     * @param \macropage\ebaysdk\trading\StructType\TaxJurisdictionType $item
     * @return \macropage\ebaysdk\trading\StructType\TaxTableType
     */
    public function addToTaxJurisdiction(\macropage\ebaysdk\trading\StructType\TaxJurisdictionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxJurisdictionType) {
            throw new InvalidArgumentException(sprintf('The TaxJurisdiction property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxJurisdictionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxJurisdiction[] = $item;
        
        return $this;
    }
}
