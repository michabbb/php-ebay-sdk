<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerTemplateAutomationRuleRequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves the set of Selling Manager automation rules associated with a Selling Manager template. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling
 * Manager Pro subscription to use this call.
 * @subpackage Structs
 */
class GetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique ID of the Selling Manager Template whose Selling Manager automation rules you want to retrieve. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaleTemplateID = null;
    /**
     * Constructor method for GetSellingManagerTemplateAutomationRuleRequestType
     * @uses GetSellingManagerTemplateAutomationRuleRequestType::setSaleTemplateID()
     * @param int $saleTemplateID
     */
    public function __construct(?int $saleTemplateID = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID);
    }
    /**
     * Get SaleTemplateID value
     * @return int|null
     */
    public function getSaleTemplateID(): ?int
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setSaleTemplateID(?int $saleTemplateID = null): self
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !(is_int($saleTemplateID) || ctype_digit($saleTemplateID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleTemplateID, true), gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        
        return $this;
    }
}
