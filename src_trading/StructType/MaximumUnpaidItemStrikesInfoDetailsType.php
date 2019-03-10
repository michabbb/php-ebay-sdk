<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesInfoDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of a buyer's maximum unpaid item strikes in a pre-defined time period. This is applicable only to sellers.
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesInfoDetailsType extends AbstractStructBase
{
    /**
     * The MaximumUnpaidItemStrikesCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of the maximum unpaid item strikes. This is applicable only to sellers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType
     */
    public $MaximumUnpaidItemStrikesCount;
    /**
     * The MaximumUnpaidItemStrikesDuration
     * Meta informations extracted from the WSDL
     * - documentation: Range of time used to determine maximum unpaid item count. This is applicable only to sellers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType[]
     */
    public $MaximumUnpaidItemStrikesDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaximumUnpaidItemStrikesInfoDetailsType
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setMaximumUnpaidItemStrikesCount()
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setMaximumUnpaidItemStrikesDuration()
     * @uses MaximumUnpaidItemStrikesInfoDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType[] $maximumUnpaidItemStrikesDuration
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount = null, array $maximumUnpaidItemStrikesDuration = array(), \DOMDocument $any = null)
    {
        $this
            ->setMaximumUnpaidItemStrikesCount($maximumUnpaidItemStrikesCount)
            ->setMaximumUnpaidItemStrikesDuration($maximumUnpaidItemStrikesDuration)
            ->setAny($any);
    }
    /**
     * Get MaximumUnpaidItemStrikesCount value
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType|null
     */
    public function getMaximumUnpaidItemStrikesCount()
    {
        return $this->MaximumUnpaidItemStrikesCount;
    }
    /**
     * Set MaximumUnpaidItemStrikesCount value
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setMaximumUnpaidItemStrikesCount(\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesCountDetailsType $maximumUnpaidItemStrikesCount = null)
    {
        $this->MaximumUnpaidItemStrikesCount = $maximumUnpaidItemStrikesCount;
        return $this;
    }
    /**
     * Get MaximumUnpaidItemStrikesDuration value
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType[]|null
     */
    public function getMaximumUnpaidItemStrikesDuration()
    {
        return $this->MaximumUnpaidItemStrikesDuration;
    }
    /**
     * Set MaximumUnpaidItemStrikesDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType[] $maximumUnpaidItemStrikesDuration
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function setMaximumUnpaidItemStrikesDuration(array $maximumUnpaidItemStrikesDuration = array())
    {
        foreach ($maximumUnpaidItemStrikesDuration as $maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) {
            // validation for constraint: itemType
            if (!$maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem instanceof \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType) {
                throw new \InvalidArgumentException(sprintf('The MaximumUnpaidItemStrikesDuration property can only contain items of \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType, "%s" given', is_object($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) ? get_class($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem) : gettype($maximumUnpaidItemStrikesInfoDetailsTypeMaximumUnpaidItemStrikesDurationItem)), __LINE__);
            }
        }
        $this->MaximumUnpaidItemStrikesDuration = $maximumUnpaidItemStrikesDuration;
        return $this;
    }
    /**
     * Add item to MaximumUnpaidItemStrikesDuration value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function addToMaximumUnpaidItemStrikesDuration(\macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The MaximumUnpaidItemStrikesDuration property can only contain items of \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MaximumUnpaidItemStrikesDuration[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoDetailsType
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
