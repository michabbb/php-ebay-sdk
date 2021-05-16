<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetTaxTableRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call allows you to add or modify sales tax rates for one or more tax jurisdictions within the specified site. Any additions or modifications made with this call is saved in the seller's Sales Tax Table in My eBay. <br/><br/>
 * Sales Tax Tables are only supported on the US and Canada (English and French versions) sites, so this call is only applicable to those sites. To view their current Sales Tax Table, a seller may go to the Sales Tax Table in My eBay, or they can make a
 * <b>GetTaxTable</b> call.
 * @subpackage Structs
 */
class SetTaxTableRequestType extends AbstractRequestType
{
    /**
     * The TaxTable
     * Meta information extracted from the WSDL
     * - documentation: This table is used to set or modify sales tax rates for one or more tax jurisdictions within that country. A <b>TaxJurisdiction</b> container is required for each tax jurisdiction that is being added/updated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxTableType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TaxTableType $TaxTable = null;
    /**
     * Constructor method for SetTaxTableRequestType
     * @uses SetTaxTableRequestType::setTaxTable()
     * @param \macropage\ebaysdk\trading\StructType\TaxTableType $taxTable
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\TaxTableType $taxTable = null)
    {
        $this
            ->setTaxTable($taxTable);
    }
    /**
     * Get TaxTable value
     * @return \macropage\ebaysdk\trading\StructType\TaxTableType|null
     */
    public function getTaxTable(): ?\macropage\ebaysdk\trading\StructType\TaxTableType
    {
        return $this->TaxTable;
    }
    /**
     * Set TaxTable value
     * @param \macropage\ebaysdk\trading\StructType\TaxTableType $taxTable
     * @return \macropage\ebaysdk\trading\StructType\SetTaxTableRequestType
     */
    public function setTaxTable(?\macropage\ebaysdk\trading\StructType\TaxTableType $taxTable = null): self
    {
        $this->TaxTable = $taxTable;
        
        return $this;
    }
}
