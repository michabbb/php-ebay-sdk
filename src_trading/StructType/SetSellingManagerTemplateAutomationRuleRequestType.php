<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetSellingManagerTemplateAutomationRuleRequestType
 * StructType
 * Meta informations extracted from the WSDL
 * - documentation: Revises, or adds to, the Selling Manager automation rules associated with a template. <br> <br> This call is subject to change without notice; the deprecation process is inapplicable to this call. You must have a Selling Manager Pro
 * subscription to use this call. <br> <br> Using this call, you can add either an automated listing or relisting rule, but not both. You also can add a Second Chance Offer rule. <br> <br> This call also enables you to specify particular information
 * about automation rules. <br> <br> If a node is not passed in the call, the setting for the corresponding automation rule remains unchanged.
 * @subpackage Structs
 */
class SetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: The ID of the Selling Manager template whose automation rules you want to change. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * The AutomatedListingRule
     * Meta informations extracted from the WSDL
     * - documentation: The information for the automated listing rule to be associated with the template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
     */
    public $AutomatedListingRule;
    /**
     * The AutomatedRelistingRule
     * Meta informations extracted from the WSDL
     * - documentation: The information for the automated relisting rule to be associated with the template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType
     */
    public $AutomatedRelistingRule;
    /**
     * The AutomatedSecondChanceOfferRule
     * Meta informations extracted from the WSDL
     * - documentation: The information for the automated Second Chance Offer rule to be associated with the template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType
     */
    public $AutomatedSecondChanceOfferRule;
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
    public function __construct($saleTemplateID = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType $automatedListingRule = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoRelistType $automatedRelistingRule = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule = null)
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
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
     */
    public function setSaleTemplateID($saleTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !is_numeric($saleTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\SetSellingManagerTemplateAutomationRuleRequestType
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
