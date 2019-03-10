<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameValueRelationshipType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about a parent name-value pair that indicates the relationships between Item Specifics.
 * @subpackage Structs
 */
class NameValueRelationshipType extends AbstractStructBase
{
    /**
     * The ParentName
     * Meta informations extracted from the WSDL
     * - documentation: The name of another Item Specific that the current value depends on. For example, in a clothing category, "Size Type" could be recommended as a parent of Size.
     * - minOccurs: 0
     * @var string
     */
    public $ParentName;
    /**
     * The ParentValue
     * Meta informations extracted from the WSDL
     * - documentation: The value of another Item Specific that the current value depends on. For example, in a clothing category, if "Size Type" is the <b>ParentName</b>, then "Petite" could be recommended as a parent value for <b>Size</b> =
     * <code>Medium</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ParentValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NameValueRelationshipType
     * @uses NameValueRelationshipType::setParentName()
     * @uses NameValueRelationshipType::setParentValue()
     * @uses NameValueRelationshipType::setAny()
     * @param string $parentName
     * @param string $parentValue
     * @param \DOMDocument $any
     */
    public function __construct($parentName = null, $parentValue = null, \DOMDocument $any = null)
    {
        $this
            ->setParentName($parentName)
            ->setParentValue($parentValue)
            ->setAny($any);
    }
    /**
     * Get ParentName value
     * @return string|null
     */
    public function getParentName()
    {
        return $this->ParentName;
    }
    /**
     * Set ParentName value
     * @param string $parentName
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType
     */
    public function setParentName($parentName = null)
    {
        // validation for constraint: string
        if (!is_null($parentName) && !is_string($parentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentName)), __LINE__);
        }
        $this->ParentName = $parentName;
        return $this;
    }
    /**
     * Get ParentValue value
     * @return string|null
     */
    public function getParentValue()
    {
        return $this->ParentValue;
    }
    /**
     * Set ParentValue value
     * @param string $parentValue
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType
     */
    public function setParentValue($parentValue = null)
    {
        // validation for constraint: string
        if (!is_null($parentValue) && !is_string($parentValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentValue)), __LINE__);
        }
        $this->ParentValue = $parentValue;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NameValueRelationshipType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType
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
     * @return \macropage\ebaysdk\trading\StructType\NameValueRelationshipType
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
