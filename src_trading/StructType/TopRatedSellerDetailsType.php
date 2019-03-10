<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TopRatedSellerDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for Top-Rated Seller program information.
 * @subpackage Structs
 */
class TopRatedSellerDetailsType extends AbstractStructBase
{
    /**
     * The TopRatedProgram
     * Meta informations extracted from the WSDL
     * - documentation: A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $TopRatedProgram;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TopRatedSellerDetailsType
     * @uses TopRatedSellerDetailsType::setTopRatedProgram()
     * @uses TopRatedSellerDetailsType::setAny()
     * @param string[] $topRatedProgram
     * @param \DOMDocument $any
     */
    public function __construct(array $topRatedProgram = array(), \DOMDocument $any = null)
    {
        $this
            ->setTopRatedProgram($topRatedProgram)
            ->setAny($any);
    }
    /**
     * Get TopRatedProgram value
     * @return string[]|null
     */
    public function getTopRatedProgram()
    {
        return $this->TopRatedProgram;
    }
    /**
     * Set TopRatedProgram value
     * @uses \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $topRatedProgram
     * @return \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType
     */
    public function setTopRatedProgram(array $topRatedProgram = array())
    {
        $invalidValues = array();
        foreach ($topRatedProgram as $topRatedSellerDetailsTypeTopRatedProgramItem) {
            if (!\macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::valueIsValid($topRatedSellerDetailsTypeTopRatedProgramItem)) {
                $invalidValues[] = var_export($topRatedSellerDetailsTypeTopRatedProgramItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::getValidValues())), __LINE__);
        }
        $this->TopRatedProgram = $topRatedProgram;
        return $this;
    }
    /**
     * Add item to TopRatedProgram value
     * @uses \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType
     */
    public function addToTopRatedProgram($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\TopRatedProgramCodeType::getValidValues())), __LINE__);
        }
        $this->TopRatedProgram[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\TopRatedSellerDetailsType
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
