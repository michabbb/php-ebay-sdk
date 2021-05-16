<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerTemplateAutomationRuleRequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Removes the association of Selling Manager automation rules to a template. Returns the remaining rules in the response. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager template from which you want to remove automation rules. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaleTemplateID = null;
    /**
     * The DeleteAutomatedListingRule
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated listing rule for the Selling Manager template.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DeleteAutomatedListingRule = null;
    /**
     * The DeleteAutomatedRelistingRule
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the Selling Manager template.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DeleteAutomatedRelistingRule = null;
    /**
     * The DeleteAutomatedSecondChanceOfferRule
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the Selling Manager template.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DeleteAutomatedSecondChanceOfferRule = null;
    /**
     * Constructor method for DeleteSellingManagerTemplateAutomationRuleRequestType
     * @uses DeleteSellingManagerTemplateAutomationRuleRequestType::setSaleTemplateID()
     * @uses DeleteSellingManagerTemplateAutomationRuleRequestType::setDeleteAutomatedListingRule()
     * @uses DeleteSellingManagerTemplateAutomationRuleRequestType::setDeleteAutomatedRelistingRule()
     * @uses DeleteSellingManagerTemplateAutomationRuleRequestType::setDeleteAutomatedSecondChanceOfferRule()
     * @param int $saleTemplateID
     * @param bool $deleteAutomatedListingRule
     * @param bool $deleteAutomatedRelistingRule
     * @param bool $deleteAutomatedSecondChanceOfferRule
     */
    public function __construct(?int $saleTemplateID = null, ?bool $deleteAutomatedListingRule = null, ?bool $deleteAutomatedRelistingRule = null, ?bool $deleteAutomatedSecondChanceOfferRule = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setDeleteAutomatedListingRule($deleteAutomatedListingRule)
            ->setDeleteAutomatedRelistingRule($deleteAutomatedRelistingRule)
            ->setDeleteAutomatedSecondChanceOfferRule($deleteAutomatedSecondChanceOfferRule);
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
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
    /**
     * Get DeleteAutomatedListingRule value
     * @return bool|null
     */
    public function getDeleteAutomatedListingRule(): ?bool
    {
        return $this->DeleteAutomatedListingRule;
    }
    /**
     * Set DeleteAutomatedListingRule value
     * @param bool $deleteAutomatedListingRule
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
     */
    public function setDeleteAutomatedListingRule(?bool $deleteAutomatedListingRule = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deleteAutomatedListingRule) && !is_bool($deleteAutomatedListingRule)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteAutomatedListingRule, true), gettype($deleteAutomatedListingRule)), __LINE__);
        }
        $this->DeleteAutomatedListingRule = $deleteAutomatedListingRule;
        
        return $this;
    }
    /**
     * Get DeleteAutomatedRelistingRule value
     * @return bool|null
     */
    public function getDeleteAutomatedRelistingRule(): ?bool
    {
        return $this->DeleteAutomatedRelistingRule;
    }
    /**
     * Set DeleteAutomatedRelistingRule value
     * @param bool $deleteAutomatedRelistingRule
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
     */
    public function setDeleteAutomatedRelistingRule(?bool $deleteAutomatedRelistingRule = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deleteAutomatedRelistingRule) && !is_bool($deleteAutomatedRelistingRule)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteAutomatedRelistingRule, true), gettype($deleteAutomatedRelistingRule)), __LINE__);
        }
        $this->DeleteAutomatedRelistingRule = $deleteAutomatedRelistingRule;
        
        return $this;
    }
    /**
     * Get DeleteAutomatedSecondChanceOfferRule value
     * @return bool|null
     */
    public function getDeleteAutomatedSecondChanceOfferRule(): ?bool
    {
        return $this->DeleteAutomatedSecondChanceOfferRule;
    }
    /**
     * Set DeleteAutomatedSecondChanceOfferRule value
     * @param bool $deleteAutomatedSecondChanceOfferRule
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
     */
    public function setDeleteAutomatedSecondChanceOfferRule(?bool $deleteAutomatedSecondChanceOfferRule = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deleteAutomatedSecondChanceOfferRule) && !is_bool($deleteAutomatedSecondChanceOfferRule)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteAutomatedSecondChanceOfferRule, true), gettype($deleteAutomatedSecondChanceOfferRule)), __LINE__);
        }
        $this->DeleteAutomatedSecondChanceOfferRule = $deleteAutomatedSecondChanceOfferRule;
        
        return $this;
    }
}
