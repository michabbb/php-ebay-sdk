<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerItemAutomationRuleResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the set of automation rules associated with the specified listing.
 * @subpackage Structs
 */
class GetSellingManagerItemAutomationRuleResponseType extends AbstractResponseType
{
    /**
     * The AutomatedListingRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated listing rule associated with the item. This field is only returned if the item was listed from a template. The value in this field refers to that template's automated listing rule.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $AutomatedListingRule = null;
    /**
     * The AutomatedRelistingRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated relisting rule associated with the item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $AutomatedRelistingRule = null;
    /**
     * The AutomatedSecondChanceOfferRule
     * Meta information extracted from the WSDL
     * - documentation: The information for the automated Second Chance Offer rule associated with the item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $AutomatedSecondChanceOfferRule = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: Contains fees that may be incurred when items are listed using the automation rule (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\FeesType $Fees = null;
    /**
     * Constructor method for GetSellingManagerItemAutomationRuleResponseType
     * @uses GetSellingManagerItemAutomationRuleResponseType::setAutomatedListingRule()
     * @uses GetSellingManagerItemAutomationRuleResponseType::setAutomatedRelistingRule()
     * @uses GetSellingManagerItemAutomationRuleResponseType::setAutomatedSecondChanceOfferRule()
     * @uses GetSellingManagerItemAutomationRuleResponseType::setFees()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null, ?\macropage\ebaysdk\trading\StructType\FeesType $fees = null)
    {
        $this
            ->setAutomatedListingRule($automatedListingRule)
            ->setAutomatedRelistingRule($automatedRelistingRule)
            ->setAutomatedSecondChanceOfferRule($automatedSecondChanceOfferRule)
            ->setFees($fees);
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleResponseType
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
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleResponseType
     */
    public function setAutomatedSecondChanceOfferRule(?\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null): self
    {
        $this->AutomatedSecondChanceOfferRule = $automatedSecondChanceOfferRule;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    public function getFees(): ?\macropage\ebaysdk\trading\StructType\FeesType
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerItemAutomationRuleResponseType
     */
    public function setFees(?\macropage\ebaysdk\trading\StructType\FeesType $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
}
