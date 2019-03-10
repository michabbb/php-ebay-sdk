<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerItemAutomationRuleRequestType
 * StructType
 * Meta informations extracted from the WSDL
 * - documentation: Removes the association of Selling Manager automation rules to an item. Returns the remaining rules in the response. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the listing from which to delete automation rules. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The DeleteAutomatedRelistingRule
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the listing.
     * - minOccurs: 0
     * @var bool
     */
    public $DeleteAutomatedRelistingRule;
    /**
     * The DeleteAutomatedSecondChanceOfferRule
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the listing.
     * - minOccurs: 0
     * @var bool
     */
    public $DeleteAutomatedSecondChanceOfferRule;
    /**
     * Constructor method for DeleteSellingManagerItemAutomationRuleRequestType
     * @uses DeleteSellingManagerItemAutomationRuleRequestType::setItemID()
     * @uses DeleteSellingManagerItemAutomationRuleRequestType::setDeleteAutomatedRelistingRule()
     * @uses DeleteSellingManagerItemAutomationRuleRequestType::setDeleteAutomatedSecondChanceOfferRule()
     * @param string $itemID
     * @param bool $deleteAutomatedRelistingRule
     * @param bool $deleteAutomatedSecondChanceOfferRule
     */
    public function __construct($itemID = null, $deleteAutomatedRelistingRule = null, $deleteAutomatedSecondChanceOfferRule = null)
    {
        $this
            ->setItemID($itemID)
            ->setDeleteAutomatedRelistingRule($deleteAutomatedRelistingRule)
            ->setDeleteAutomatedSecondChanceOfferRule($deleteAutomatedSecondChanceOfferRule);
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType
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
     * Get DeleteAutomatedRelistingRule value
     * @return bool|null
     */
    public function getDeleteAutomatedRelistingRule()
    {
        return $this->DeleteAutomatedRelistingRule;
    }
    /**
     * Set DeleteAutomatedRelistingRule value
     * @param bool $deleteAutomatedRelistingRule
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType
     */
    public function setDeleteAutomatedRelistingRule($deleteAutomatedRelistingRule = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleteAutomatedRelistingRule) && !is_bool($deleteAutomatedRelistingRule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deleteAutomatedRelistingRule)), __LINE__);
        }
        $this->DeleteAutomatedRelistingRule = $deleteAutomatedRelistingRule;
        return $this;
    }
    /**
     * Get DeleteAutomatedSecondChanceOfferRule value
     * @return bool|null
     */
    public function getDeleteAutomatedSecondChanceOfferRule()
    {
        return $this->DeleteAutomatedSecondChanceOfferRule;
    }
    /**
     * Set DeleteAutomatedSecondChanceOfferRule value
     * @param bool $deleteAutomatedSecondChanceOfferRule
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType
     */
    public function setDeleteAutomatedSecondChanceOfferRule($deleteAutomatedSecondChanceOfferRule = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleteAutomatedSecondChanceOfferRule) && !is_bool($deleteAutomatedSecondChanceOfferRule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deleteAutomatedSecondChanceOfferRule)), __LINE__);
        }
        $this->DeleteAutomatedSecondChanceOfferRule = $deleteAutomatedSecondChanceOfferRule;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType
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
