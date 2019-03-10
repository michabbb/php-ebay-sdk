<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the name and cost of a listing feature that a member pays to eBay. These listing feature names, fees, and possible discounts are intended only as an aid to help estimate the fees for a listing.
 * @subpackage Structs
 */
class FeeType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: This is the name of the listing feature, such as <code>ListingFee</code>, <code>SubtitleFee</code>, or <code>BoldFee</code>.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - documentation: Amount of the fee that eBay will charge the member for the associated listing feature.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Fee;
    /**
     * The PromotionalDiscount
     * Meta informations extracted from the WSDL
     * - documentation: This field exists in the response when the user has selected a feature that participates in a promotional discount. <br/><br/> <span class="tablenote"><b>Note: </b> Verify calls might not return the PromotionalDiscount fee in the
     * response. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $PromotionalDiscount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FeeType
     * @uses FeeType::setName()
     * @uses FeeType::setFee()
     * @uses FeeType::setPromotionalDiscount()
     * @uses FeeType::setAny()
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @param \macropage\ebaysdk\trading\StructType\AmountType $promotionalDiscount
     * @param \DOMDocument $any
     */
    public function __construct($name = null, \macropage\ebaysdk\trading\StructType\AmountType $fee = null, \macropage\ebaysdk\trading\StructType\AmountType $promotionalDiscount = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setFee($fee)
            ->setPromotionalDiscount($promotionalDiscount)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\FeeType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Fee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @return \macropage\ebaysdk\trading\StructType\FeeType
     */
    public function setFee(\macropage\ebaysdk\trading\StructType\AmountType $fee = null)
    {
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Get PromotionalDiscount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPromotionalDiscount()
    {
        return $this->PromotionalDiscount;
    }
    /**
     * Set PromotionalDiscount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $promotionalDiscount
     * @return \macropage\ebaysdk\trading\StructType\FeeType
     */
    public function setPromotionalDiscount(\macropage\ebaysdk\trading\StructType\AmountType $promotionalDiscount = null)
    {
        $this->PromotionalDiscount = $promotionalDiscount;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FeeType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\FeeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\FeeType
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
