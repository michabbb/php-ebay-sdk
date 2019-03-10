<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerTemplateAutomationRuleRequestType
 * StructType
 * Meta informations extracted from the WSDL
 * - documentation: Removes the association of Selling Manager automation rules to a template. Returns the remaining rules in the response. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager template from which you want to remove automation rules. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * The DeleteAutomatedListingRule
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated listing rule for the Selling Manager template.
     * - minOccurs: 0
     * @var bool
     */
    public $DeleteAutomatedListingRule;
    /**
     * The DeleteAutomatedRelistingRule
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the Selling Manager template.
     * - minOccurs: 0
     * @var bool
     */
    public $DeleteAutomatedRelistingRule;
    /**
     * The DeleteAutomatedSecondChanceOfferRule
     * Meta informations extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the Selling Manager template.
     * - minOccurs: 0
     * @var bool
     */
    public $DeleteAutomatedSecondChanceOfferRule;
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
    public function __construct($saleTemplateID = null, $deleteAutomatedListingRule = null, $deleteAutomatedRelistingRule = null, $deleteAutomatedSecondChanceOfferRule = null)
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
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
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
     * Get DeleteAutomatedListingRule value
     * @return bool|null
     */
    public function getDeleteAutomatedListingRule()
    {
        return $this->DeleteAutomatedListingRule;
    }
    /**
     * Set DeleteAutomatedListingRule value
     * @param bool $deleteAutomatedListingRule
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
     */
    public function setDeleteAutomatedListingRule($deleteAutomatedListingRule = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleteAutomatedListingRule) && !is_bool($deleteAutomatedListingRule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deleteAutomatedListingRule)), __LINE__);
        }
        $this->DeleteAutomatedListingRule = $deleteAutomatedListingRule;
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateAutomationRuleRequestType
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
