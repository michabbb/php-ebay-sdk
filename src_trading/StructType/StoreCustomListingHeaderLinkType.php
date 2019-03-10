<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomListingHeaderLinkType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Custom listing header link.
 * @subpackage Structs
 */
class StoreCustomListingHeaderLinkType extends AbstractStructBase
{
    /**
     * The LinkID
     * Meta informations extracted from the WSDL
     * - documentation: Link ID for the listing header link. The ID is used when the link is a custom category or for a custom page, and it is not needed when the LinkType property is "AboutMe" or "None".
     * @var int
     */
    public $LinkID;
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - documentation: Order in which to show the custom listing header link.
     * @var int
     */
    public $Order;
    /**
     * The LinkType
     * Meta informations extracted from the WSDL
     * - documentation: Type of link to include in the custom listing header.
     * - minOccurs: 0
     * @var string
     */
    public $LinkType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreCustomListingHeaderLinkType
     * @uses StoreCustomListingHeaderLinkType::setLinkID()
     * @uses StoreCustomListingHeaderLinkType::setOrder()
     * @uses StoreCustomListingHeaderLinkType::setLinkType()
     * @uses StoreCustomListingHeaderLinkType::setAny()
     * @param int $linkID
     * @param int $order
     * @param string $linkType
     * @param \DOMDocument $any
     */
    public function __construct($linkID = null, $order = null, $linkType = null, \DOMDocument $any = null)
    {
        $this
            ->setLinkID($linkID)
            ->setOrder($order)
            ->setLinkType($linkType)
            ->setAny($any);
    }
    /**
     * Get LinkID value
     * @return int|null
     */
    public function getLinkID()
    {
        return $this->LinkID;
    }
    /**
     * Set LinkID value
     * @param int $linkID
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
     */
    public function setLinkID($linkID = null)
    {
        // validation for constraint: int
        if (!is_null($linkID) && !is_numeric($linkID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($linkID)), __LINE__);
        }
        $this->LinkID = $linkID;
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !is_numeric($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order)), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get LinkType value
     * @return string|null
     */
    public function getLinkType()
    {
        return $this->LinkType;
    }
    /**
     * Set LinkType value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $linkType
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
     */
    public function setLinkType($linkType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType::valueIsValid($linkType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $linkType, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType::getValidValues())), __LINE__);
        }
        $this->LinkType = $linkType;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
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
