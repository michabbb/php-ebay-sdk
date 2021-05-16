<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerItemAutomationRuleRequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Removes the association of Selling Manager automation rules to an item. Returns the remaining rules in the response. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the listing from which to delete automation rules. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The DeleteAutomatedRelistingRule
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DeleteAutomatedRelistingRule = null;
    /**
     * The DeleteAutomatedSecondChanceOfferRule
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DeleteAutomatedSecondChanceOfferRule = null;
    /**
     * Constructor method for DeleteSellingManagerItemAutomationRuleRequestType
     * @uses DeleteSellingManagerItemAutomationRuleRequestType::setItemID()
     * @uses DeleteSellingManagerItemAutomationRuleRequestType::setDeleteAutomatedRelistingRule()
     * @uses DeleteSellingManagerItemAutomationRuleRequestType::setDeleteAutomatedSecondChanceOfferRule()
     * @param string $itemID
     * @param bool $deleteAutomatedRelistingRule
     * @param bool $deleteAutomatedSecondChanceOfferRule
     */
    public function __construct(?string $itemID = null, ?bool $deleteAutomatedRelistingRule = null, ?bool $deleteAutomatedSecondChanceOfferRule = null)
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
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType
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
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerItemAutomationRuleRequestType
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
