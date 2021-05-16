<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSellingManagerTemplateAutomationRuleRequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Revises, or adds to, the Selling Manager automation rules associated with a template. <br> <br> This call is subject to change without notice; the deprecation process is inapplicable to this call. You must have a Selling Manager Pro
 * subscription to use this call. <br> <br> Using this call, you can add either an automated listing or relisting rule, but not both. You also can add a Second Chance Offer rule. <br> <br> This call also enables you to specify particular information
 * about automation rules. <br> <br> If a node is not passed in the call, the setting for the corresponding automation rule remains unchanged.
 * @subpackage Structs
 */
class SetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the Selling Manager template whose automation rules you want to change. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SaleTemplateID = null;
    /**
     * The AutomatedListingRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated listing rule to be associated with the template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $AutomatedListingRule = null;
    /**
     * The AutomatedRelistingRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated relisting rule to be associated with the template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $AutomatedRelistingRule = null;
    /**
     * The AutomatedSecondChanceOfferRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated Second Chance Offer rule to be associated with the template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule = null;
    /**
     * Constructor method for SetSellingManagerTemplateAutomationRuleRequestType
     * @uses SetSellingManagerTemplateAutomationRuleRequestType::setSaleTemplateID()
     * @uses SetSellingManagerTemplateAutomationRuleRequestType::setAutomatedListingRule()
     * @uses SetSellingManagerTemplateAutomationRuleRequestType::setAutomatedRelistingRule()
     * @uses SetSellingManagerTemplateAutomationRuleRequestType::setAutomatedSecondChanceOfferRule()
     * @param int $saleTemplateID
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     */
    public function __construct(?int $saleTemplateID = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setAutomatedListingRule($automatedListingRule)
            ->setAutomatedRelistingRule($automatedRelistingRule)
            ->setAutomatedSecondChanceOfferRule($automatedSecondChanceOfferRule);
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
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
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
     * Get AutomatedListingRule value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType|null
     */
    public function getAutomatedListingRule(): ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
    {
        return $this->AutomatedListingRule;
    }
    /**
     * Set AutomatedListingRule value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setAutomatedListingRule(?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule = null): self
    {
        $this->AutomatedListingRule = $automatedListingRule;
        
        return $this;
    }
    /**
     * Get AutomatedRelistingRule value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType|null
     */
    public function getAutomatedRelistingRule(): ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
    {
        return $this->AutomatedRelistingRule;
    }
    /**
     * Set AutomatedRelistingRule value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setAutomatedRelistingRule(?\macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule = null): self
    {
        $this->AutomatedRelistingRule = $automatedRelistingRule;
        
        return $this;
    }
    /**
     * Get AutomatedSecondChanceOfferRule value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType|null
     */
    public function getAutomatedSecondChanceOfferRule(): ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
    {
        return $this->AutomatedSecondChanceOfferRule;
    }
    /**
     * Set AutomatedSecondChanceOfferRule value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setAutomatedSecondChanceOfferRule(?\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null): self
    {
        $this->AutomatedSecondChanceOfferRule = $automatedSecondChanceOfferRule;
        
        return $this;
    }
}
