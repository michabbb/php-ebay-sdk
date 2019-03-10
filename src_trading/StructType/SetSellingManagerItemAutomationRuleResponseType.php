<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSellingManagerItemAutomationRuleResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the set of automation rules associated with the specified item.
 * @subpackage Structs
 */
class SetSellingManagerItemAutomationRuleResponseType extends AbstractResponseType
{
    /**
     * The AutomatedListingRule
     * Meta informations extracted from the WSDL
     * - documentation: Contains the automated listing rule associated with this item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
     */
    public $AutomatedListingRule;
    /**
     * The AutomatedRelistingRule
     * Meta informations extracted from the WSDL
     * - documentation: Contains the automated relisting rule associated with this item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public $AutomatedRelistingRule;
    /**
     * The AutomatedSecondChanceOfferRule
     * Meta informations extracted from the WSDL
     * - documentation: Contains the automated Second Chance Offer rule associated with this item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public $AutomatedSecondChanceOfferRule;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\FeesType
     */
    public $Fees;
    /**
     * Constructor method for SetSellingManagerItemAutomationRuleResponseType
     * @uses SetSellingManagerItemAutomationRuleResponseType::setAutomatedListingRule()
     * @uses SetSellingManagerItemAutomationRuleResponseType::setAutomatedRelistingRule()
     * @uses SetSellingManagerItemAutomationRuleResponseType::setAutomatedSecondChanceOfferRule()
     * @uses SetSellingManagerItemAutomationRuleResponseType::setFees()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null, \macropage\ebaysdk\trading\StructType\FeesType $fees = null)
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
    public function getAutomatedListingRule()
    {
        return $this->AutomatedListingRule;
    }
    /**
     * Set AutomatedListingRule value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleResponseType
     */
    public function setAutomatedListingRule(\macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule = null)
    {
        $this->AutomatedListingRule = $automatedListingRule;
        return $this;
    }
    /**
     * Get AutomatedRelistingRule value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType|null
     */
    public function getAutomatedRelistingRule()
    {
        return $this->AutomatedRelistingRule;
    }
    /**
     * Set AutomatedRelistingRule value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleResponseType
     */
    public function setAutomatedRelistingRule(\macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule = null)
    {
        $this->AutomatedRelistingRule = $automatedRelistingRule;
        return $this;
    }
    /**
     * Get AutomatedSecondChanceOfferRule value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType|null
     */
    public function getAutomatedSecondChanceOfferRule()
    {
        return $this->AutomatedSecondChanceOfferRule;
    }
    /**
     * Set AutomatedSecondChanceOfferRule value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleResponseType
     */
    public function setAutomatedSecondChanceOfferRule(\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null)
    {
        $this->AutomatedSecondChanceOfferRule = $automatedSecondChanceOfferRule;
        return $this;
    }
    /**
     * Get Fees value
     * @return \macropage\ebaysdk\trading\StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \macropage\ebaysdk\trading\StructType\FeesType $fees
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleResponseType
     */
    public function setFees(\macropage\ebaysdk\trading\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleResponseType
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
