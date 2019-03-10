<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerPictureDisplayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerPictureDisplayType extends AbstractStructBase
{
    /**
     * The DisplayType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayType;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Size;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Height;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Width;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerPictureDisplayType
     * @uses PictureManagerPictureDisplayType::setDisplayType()
     * @uses PictureManagerPictureDisplayType::setURL()
     * @uses PictureManagerPictureDisplayType::setSize()
     * @uses PictureManagerPictureDisplayType::setHeight()
     * @uses PictureManagerPictureDisplayType::setWidth()
     * @uses PictureManagerPictureDisplayType::setAny()
     * @param string $displayType
     * @param string $uRL
     * @param int $size
     * @param int $height
     * @param int $width
     * @param \DOMDocument $any
     */
    public function __construct($displayType = null, $uRL = null, $size = null, $height = null, $width = null, \DOMDocument $any = null)
    {
        $this
            ->setDisplayType($displayType)
            ->setURL($uRL)
            ->setSize($size)
            ->setHeight($height)
            ->setWidth($width)
            ->setAny($any);
    }
    /**
     * Get DisplayType value
     * @return string|null
     */
    public function getDisplayType()
    {
        return $this->DisplayType;
    }
    /**
     * Set DisplayType value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $displayType
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setDisplayType($displayType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType::valueIsValid($displayType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $displayType, implode(', ', \macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayType = $displayType;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
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
