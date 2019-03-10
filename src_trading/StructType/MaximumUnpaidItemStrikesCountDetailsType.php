<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesCountDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>MaximumUnpaidItemStrikesCount</b> container that is returned in the <b>GeteBayDetails</b> response. The <b>MaximumUnpaidItemStrikesCount</b> container consists of multiple <b>Count</b> fields with values that can
 * be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b> field when using the Trading API to add, revise, or relist an item. <br><br> The <b>Item.MaximumUnpaidItemStrikesInfo</b> container in Add/Revise/Relist API calls is
 * used to block buyers with unpaid item strikes equal to or exceeding the specified <b>Count</b> value during the specified <b>Period</b> value from buying/bidding on the item.
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesCountDetailsType extends AbstractStructBase
{
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b> field when using the Trading API to add, revise, or relist an item.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $Count;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumUnpaidItemStrikesCountDetailsType
     * @uses MaximumUnpaidItemStrikesCountDetailsType::setCount()
     * @uses MaximumUnpaidItemStrikesCountDetailsType::setAny()
     * @param int[] $count
     * @param \DOMDocument $any
     */
    public function __construct(array $count = array(), \DOMDocument $any = null)
    {
        $this
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get Count value
     * @return int[]|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @throws \InvalidArgumentException
     * @param int[] $count
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType
     */
    public function setCount(array $count = array())
    {
        foreach ($count as $maximumUnpaidItemStrikesCountDetailsTypeCountItem) {
            // validation for constraint: itemType
            if (!is_numeric($maximumUnpaidItemStrikesCountDetailsTypeCountItem)) {
                throw new \InvalidArgumentException(sprintf('The Count property can only contain items of int, "%s" given', is_object($maximumUnpaidItemStrikesCountDetailsTypeCountItem) ? get_class($maximumUnpaidItemStrikesCountDetailsTypeCountItem) : gettype($maximumUnpaidItemStrikesCountDetailsTypeCountItem)), __LINE__);
            }
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Add item to Count value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType
     */
    public function addToCount($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The Count property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Count[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType
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
