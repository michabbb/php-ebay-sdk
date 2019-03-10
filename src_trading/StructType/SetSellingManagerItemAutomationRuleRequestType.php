<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSellingManagerItemAutomationRuleRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Revises, or adds to, the set of Selling Manager automation rules associated with an item. <br> <br> This call is subject to change without notice; the deprecation process is inapplicable to this call. You must have a Selling Manager
 * Pro subscription to use this call. <br> <br> Using this call, you can add an automated relisting rule. You also can add a Second Chance Offer rule. Note that automated relisting rules can only be set on templates. An automated relisting rule for an
 * item is inherited from a template. <br> <br> This call also enables you to specify particular information about automation rules. <br> <br> If a node is not passed in the call, the setting for the corresponding automation rule remains unchanged.
 * @subpackage Structs
 */
class SetSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the listing whose automation rules you want to change. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The AutomatedRelistingRule
     * Meta informations extracted from the WSDL
     * - documentation: The information for the automated relisting rule to be associated with the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public $AutomatedRelistingRule;
    /**
     * The AutomatedSecondChanceOfferRule
     * Meta informations extracted from the WSDL
     * - documentation: The information for the automated Second Chance Offer rule to be associated with the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public $AutomatedSecondChanceOfferRule;
    /**
     * Constructor method for SetSellingManagerItemAutomationRuleRequestType
     * @uses SetSellingManagerItemAutomationRuleRequestType::setItemID()
     * @uses SetSellingManagerItemAutomationRuleRequestType::setAutomatedRelistingRule()
     * @uses SetSellingManagerItemAutomationRuleRequestType::setAutomatedSecondChanceOfferRule()
     * @param string $itemID
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     */
    public function __construct($itemID = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null)
    {
        $this
            ->setItemID($itemID)
            ->setAutomatedRelistingRule($automatedRelistingRule)
            ->setAutomatedSecondChanceOfferRule($automatedSecondChanceOfferRule);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
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
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleRequestType
     */
    public function setAutomatedSecondChanceOfferRule(\macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null)
    {
        $this->AutomatedSecondChanceOfferRule = $automatedSecondChanceOfferRule;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerItemAutomationRuleRequestType
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
