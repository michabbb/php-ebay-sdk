<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>QuantityInfo</b> container, which consists of the <b>MinimumRemnantSet</b> field, which is the minimum amount of event tickets that can remain in the multiple-quantity, fixed-price event-based listing's inventory
 * after a buyer purchases one or more tickets (but not all) from the listing.
 * @subpackage Structs
 */
class QuantityInfo extends AbstractStructBase
{
    /**
     * The MinimumRemnantSet
     * Meta informations extracted from the WSDL
     * - documentation: This field indicates the minimum ticket quantity that must remain after a buyer purchases one or more (but not all) tickets in an event-based listing. This feature helps the seller avoid the scenario of being left with only one
     * ticket in a multiple-quantity, fixed-priced event-based listing. In some cases, a solo seat to an event can be harder to sell, especially as the event date approaches. <br> <br> Based on the value of <b>MinimumRemnantSet</b> and the listing's
     * available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the quantity of tickets that a buyer can purchase. For example, suppose a seller lists 5 tickets, and wants at least 2 tickets remaining for the final buyer to purchase. In
     * this case, the seller would set <b>MinimumRemnantSet</b> to '2'. This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket). <br> <br> This field is currently only applicable for event ticket
     * listings in the US and CA marketplaces, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
     * - minOccurs: 0
     * @var int
     */
    public $MinimumRemnantSet;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for QuantityInfo
     * @uses QuantityInfo::setMinimumRemnantSet()
     * @uses QuantityInfo::setAny()
     * @param int $minimumRemnantSet
     * @param \DOMDocument $any
     */
    public function __construct($minimumRemnantSet = null, \DOMDocument $any = null)
    {
        $this
            ->setMinimumRemnantSet($minimumRemnantSet)
            ->setAny($any);
    }
    /**
     * Get MinimumRemnantSet value
     * @return int|null
     */
    public function getMinimumRemnantSet()
    {
        return $this->MinimumRemnantSet;
    }
    /**
     * Set MinimumRemnantSet value
     * @param int $minimumRemnantSet
     * @return \macropage\ebaysdk\shopping\StructType\QuantityInfo
     */
    public function setMinimumRemnantSet($minimumRemnantSet = null)
    {
        // validation for constraint: int
        if (!is_null($minimumRemnantSet) && !is_numeric($minimumRemnantSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumRemnantSet)), __LINE__);
        }
        $this->MinimumRemnantSet = $minimumRemnantSet;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\QuantityInfo::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\QuantityInfo
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
     * @return \macropage\ebaysdk\shopping\StructType\QuantityInfo
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
