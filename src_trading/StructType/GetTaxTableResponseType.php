<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaxTableResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>GetTaxTable</b> call.
 * @subpackage Structs
 */
class GetTaxTableResponseType extends AbstractResponseType
{
    /**
     * The LastUpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: The last time (in GMT) that the tax table was updated. Only returned if the user previously created a tax table and if the site has jurisdictions. <b>LastUpdateTime</b> is useful for synchronization. If you cache the user's tax
     * table, you can use <b>GetTaxTable</b> to check if it has changed and whether you need to update the cached tax table.
     * - minOccurs: 0
     * @var string
     */
    public $LastUpdateTime;
    /**
     * The TaxTable
     * Meta informations extracted from the WSDL
     * - documentation: A container of tax jurisdiction information unique to a user/site combination. Returned as an empty container if no Sales Tax Table information exists for the seller's account and no <b>DetailLevel</b> is used. If <b>DetailLevel</b>
     * is not specified, information is only returned for the jurisdictions for which the user provided tax information. If <b>DetailLevel</b> is set to <b>ReturnAll</b>, tax information is returned for all possible jurisdictions, whether specified by the
     * user or not. <b>ShippingIncludedInTax</b> and <b>SalesTaxPercent</b> are returned but are empty.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxTableType
     */
    public $TaxTable;
    /**
     * Constructor method for GetTaxTableResponseType
     * @uses GetTaxTableResponseType::setLastUpdateTime()
     * @uses GetTaxTableResponseType::setTaxTable()
     * @param string $lastUpdateTime
     * @param \macropage\ebaysdk\trading\StructType\TaxTableType $taxTable
     */
    public function __construct($lastUpdateTime = null, \macropage\ebaysdk\trading\StructType\TaxTableType $taxTable = null)
    {
        $this
            ->setLastUpdateTime($lastUpdateTime)
            ->setTaxTable($taxTable);
    }
    /**
     * Get LastUpdateTime value
     * @return string|null
     */
    public function getLastUpdateTime()
    {
        return $this->LastUpdateTime;
    }
    /**
     * Set LastUpdateTime value
     * @param string $lastUpdateTime
     * @return \macropage\ebaysdk\trading\StructType\GetTaxTableResponseType
     */
    public function setLastUpdateTime($lastUpdateTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdateTime) && !is_string($lastUpdateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdateTime)), __LINE__);
        }
        $this->LastUpdateTime = $lastUpdateTime;
        return $this;
    }
    /**
     * Get TaxTable value
     * @return \macropage\ebaysdk\trading\StructType\TaxTableType|null
     */
    public function getTaxTable()
    {
        return $this->TaxTable;
    }
    /**
     * Set TaxTable value
     * @param \macropage\ebaysdk\trading\StructType\TaxTableType $taxTable
     * @return \macropage\ebaysdk\trading\StructType\GetTaxTableResponseType
     */
    public function setTaxTable(\macropage\ebaysdk\trading\StructType\TaxTableType $taxTable = null)
    {
        $this->TaxTable = $taxTable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetTaxTableResponseType
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
