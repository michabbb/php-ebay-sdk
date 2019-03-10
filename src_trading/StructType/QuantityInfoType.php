<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>QuantityInfo</b> container, which consists of the <b>MinimumRemnantSet</b> field, which sets the minimum amount of event tickets that can remain in the fixed-price listing's inventory after a buyer purchases one
 * or more tickets (but not all) from the listing.
 * @subpackage Structs
 */
class QuantityInfoType extends AbstractStructBase
{
    /**
     * The MinimumRemnantSet
     * Meta informations extracted from the WSDL
     * - documentation: Enables a seller to avoid being left with quanity of <code>1</code> in an event listing. A typical use case is event tickets in reserved, adjacent seats, or items that typically only sell if more than one can be purchased at once.
     * <br> <br> Specify the minimum number of items that should remain if a buyer doesn't purchase all the items. Based on the value of <b>MinimumRemnantSet</b> and the listing's available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the
     * quantity that a buyer can purchase in one transaction. For example, suppose you list 5 tickets, and you want at least 2 tickets remaining for the final buyer to purchase. In this case, you would set <b>MinimumRemnantSet</b> value to <code>2</code>.
     * This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket).<br> <br> To remove this restriction when you revise or relist, set <b>MinimumRemnantSet</b> to 1.<br> <br> Applicable to
     * multiple-quantity, fixed-price listings. Currently supported for US and CA event ticket listings. <br>
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
     * Constructor method for QuantityInfoType
     * @uses QuantityInfoType::setMinimumRemnantSet()
     * @uses QuantityInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\QuantityInfoType
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
     * @uses \macropage\ebaysdk\trading\StructType\QuantityInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\QuantityInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\QuantityInfoType
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
