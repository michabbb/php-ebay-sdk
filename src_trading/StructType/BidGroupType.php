<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidGroupType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidGroupType extends AbstractStructBase
{
    /**
     * The BidGroupItem
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BidGroupItemType[]
     */
    public $BidGroupItem;
    /**
     * The BidGroupID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $BidGroupID;
    /**
     * The BidGroupName
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $BidGroupName;
    /**
     * The BidGroupStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $BidGroupStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidGroupType
     * @uses BidGroupType::setBidGroupItem()
     * @uses BidGroupType::setBidGroupID()
     * @uses BidGroupType::setBidGroupName()
     * @uses BidGroupType::setBidGroupStatus()
     * @uses BidGroupType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\BidGroupItemType[] $bidGroupItem
     * @param int $bidGroupID
     * @param string $bidGroupName
     * @param string $bidGroupStatus
     * @param \DOMDocument $any
     */
    public function __construct(array $bidGroupItem = array(), $bidGroupID = null, $bidGroupName = null, $bidGroupStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setBidGroupItem($bidGroupItem)
            ->setBidGroupID($bidGroupID)
            ->setBidGroupName($bidGroupName)
            ->setBidGroupStatus($bidGroupStatus)
            ->setAny($any);
    }
    /**
     * Get BidGroupItem value
     * @return \macropage\ebaysdk\trading\StructType\BidGroupItemType[]|null
     */
    public function getBidGroupItem()
    {
        return $this->BidGroupItem;
    }
    /**
     * Set BidGroupItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidGroupItemType[] $bidGroupItem
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function setBidGroupItem(array $bidGroupItem = array())
    {
        foreach ($bidGroupItem as $bidGroupTypeBidGroupItemItem) {
            // validation for constraint: itemType
            if (!$bidGroupTypeBidGroupItemItem instanceof \macropage\ebaysdk\trading\StructType\BidGroupItemType) {
                throw new \InvalidArgumentException(sprintf('The BidGroupItem property can only contain items of \macropage\ebaysdk\trading\StructType\BidGroupItemType, "%s" given', is_object($bidGroupTypeBidGroupItemItem) ? get_class($bidGroupTypeBidGroupItemItem) : gettype($bidGroupTypeBidGroupItemItem)), __LINE__);
            }
        }
        $this->BidGroupItem = $bidGroupItem;
        return $this;
    }
    /**
     * Add item to BidGroupItem value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BidGroupItemType $item
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function addToBidGroupItem(\macropage\ebaysdk\trading\StructType\BidGroupItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BidGroupItemType) {
            throw new \InvalidArgumentException(sprintf('The BidGroupItem property can only contain items of \macropage\ebaysdk\trading\StructType\BidGroupItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BidGroupItem[] = $item;
        return $this;
    }
    /**
     * Get BidGroupID value
     * @return int|null
     */
    public function getBidGroupID()
    {
        return $this->BidGroupID;
    }
    /**
     * Set BidGroupID value
     * @param int $bidGroupID
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function setBidGroupID($bidGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($bidGroupID) && !is_numeric($bidGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidGroupID)), __LINE__);
        }
        $this->BidGroupID = $bidGroupID;
        return $this;
    }
    /**
     * Get BidGroupName value
     * @return string|null
     */
    public function getBidGroupName()
    {
        return $this->BidGroupName;
    }
    /**
     * Set BidGroupName value
     * @param string $bidGroupName
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function setBidGroupName($bidGroupName = null)
    {
        // validation for constraint: string
        if (!is_null($bidGroupName) && !is_string($bidGroupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bidGroupName)), __LINE__);
        }
        $this->BidGroupName = $bidGroupName;
        return $this;
    }
    /**
     * Get BidGroupStatus value
     * @return string|null
     */
    public function getBidGroupStatus()
    {
        return $this->BidGroupStatus;
    }
    /**
     * Set BidGroupStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bidGroupStatus
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
     */
    public function setBidGroupStatus($bidGroupStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType::valueIsValid($bidGroupStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bidGroupStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\BidGroupStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BidGroupStatus = $bidGroupStatus;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BidGroupType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
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
     * @return \macropage\ebaysdk\trading\StructType\BidGroupType
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
