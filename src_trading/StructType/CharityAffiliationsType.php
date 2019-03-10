<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharityAffiliationsType extends AbstractStructBase
{
    /**
     * The CharityID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityIDType[]
     */
    public $CharityID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CharityAffiliationsType
     * @uses CharityAffiliationsType::setCharityID()
     * @uses CharityAffiliationsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CharityIDType[] $charityID
     * @param \DOMDocument $any
     */
    public function __construct(array $charityID = array(), \DOMDocument $any = null)
    {
        $this
            ->setCharityID($charityID)
            ->setAny($any);
    }
    /**
     * Get CharityID value
     * @return \macropage\ebaysdk\trading\StructType\CharityIDType[]|null
     */
    public function getCharityID()
    {
        return $this->CharityID;
    }
    /**
     * Set CharityID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityIDType[] $charityID
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType
     */
    public function setCharityID(array $charityID = array())
    {
        foreach ($charityID as $charityAffiliationsTypeCharityIDItem) {
            // validation for constraint: itemType
            if (!$charityAffiliationsTypeCharityIDItem instanceof \macropage\ebaysdk\trading\StructType\CharityIDType) {
                throw new \InvalidArgumentException(sprintf('The CharityID property can only contain items of \macropage\ebaysdk\trading\StructType\CharityIDType, "%s" given', is_object($charityAffiliationsTypeCharityIDItem) ? get_class($charityAffiliationsTypeCharityIDItem) : gettype($charityAffiliationsTypeCharityIDItem)), __LINE__);
            }
        }
        $this->CharityID = $charityID;
        return $this;
    }
    /**
     * Add item to CharityID value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityIDType $item
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType
     */
    public function addToCharityID(\macropage\ebaysdk\trading\StructType\CharityIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharityIDType) {
            throw new \InvalidArgumentException(sprintf('The CharityID property can only contain items of \macropage\ebaysdk\trading\StructType\CharityIDType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CharityID[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CharityAffiliationsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType
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
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType
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
