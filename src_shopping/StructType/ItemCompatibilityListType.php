<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A list of vehicles that are compatible with a motor vehicle part or accessory. Describes assemblies with which a part is compatible (i.e., compatibility by application). For example, to specify a part's compatibility with a vehicle,
 * the name would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values describe the specific vehicle, such as a 2006 Honda Accord. <br><br> The <b>ItemCompatibilityList</b> container will only be returned if a
 * parts compatibility list exists for the listing, and the <b>IncludeSelector </b>field is included and set to <code>Compatibility</code>
 * @subpackage Structs
 */
class ItemCompatibilityListType extends AbstractStructBase
{
    /**
     * The Compatibility
     * Meta informations extracted from the WSDL
     * - documentation: A <b>Compatibility</b> container is returned for each motor vehicle that is compatible with the motor vehicle part or accessory. The Year, Make, Model, Trim, and Engine type of the vehicle is expressed through name-value pairs, and
     * notes about compatibility (if available/applicable) is expressed through the <b>CompatibilityNotes</b> field.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType[]
     */
    public $Compatibility;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemCompatibilityListType
     * @uses ItemCompatibilityListType::setCompatibility()
     * @uses ItemCompatibilityListType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType[] $compatibility
     * @param \DOMDocument $any
     */
    public function __construct(array $compatibility = array(), \DOMDocument $any = null)
    {
        $this
            ->setCompatibility($compatibility)
            ->setAny($any);
    }
    /**
     * Get Compatibility value
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType[]|null
     */
    public function getCompatibility()
    {
        return $this->Compatibility;
    }
    /**
     * Set Compatibility value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType[] $compatibility
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType
     */
    public function setCompatibility(array $compatibility = array())
    {
        foreach ($compatibility as $itemCompatibilityListTypeCompatibilityItem) {
            // validation for constraint: itemType
            if (!$itemCompatibilityListTypeCompatibilityItem instanceof \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType) {
                throw new \InvalidArgumentException(sprintf('The Compatibility property can only contain items of \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType, "%s" given', is_object($itemCompatibilityListTypeCompatibilityItem) ? get_class($itemCompatibilityListTypeCompatibilityItem) : gettype($itemCompatibilityListTypeCompatibilityItem)), __LINE__);
            }
        }
        $this->Compatibility = $compatibility;
        return $this;
    }
    /**
     * Add item to Compatibility value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType $item
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType
     */
    public function addToCompatibility(\macropage\ebaysdk\shopping\StructType\ItemCompatibilityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType) {
            throw new \InvalidArgumentException(sprintf('The Compatibility property can only contain items of \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Compatibility[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType
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
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType
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
