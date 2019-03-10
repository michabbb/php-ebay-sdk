<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreFontType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Store font set.
 * @subpackage Structs
 */
class StoreFontType extends AbstractStructBase
{
    /**
     * The NameFace
     * Meta informations extracted from the WSDL
     * - documentation: Font for the Store name.
     * - minOccurs: 0
     * @var string
     */
    public $NameFace;
    /**
     * The NameSize
     * Meta informations extracted from the WSDL
     * - documentation: Font size for the Store name.
     * - minOccurs: 0
     * @var string
     */
    public $NameSize;
    /**
     * The NameColor
     * Meta informations extracted from the WSDL
     * - documentation: Font color for the Store name. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $NameColor;
    /**
     * The TitleFace
     * Meta informations extracted from the WSDL
     * - documentation: Font for the Store section title.
     * - minOccurs: 0
     * @var string
     */
    public $TitleFace;
    /**
     * The TitleSize
     * Meta informations extracted from the WSDL
     * - documentation: Font size for the Store section title.
     * - minOccurs: 0
     * @var string
     */
    public $TitleSize;
    /**
     * The TitleColor
     * Meta informations extracted from the WSDL
     * - documentation: Font color for the Store section title. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $TitleColor;
    /**
     * The DescFace
     * Meta informations extracted from the WSDL
     * - documentation: Font for the Store description.
     * - minOccurs: 0
     * @var string
     */
    public $DescFace;
    /**
     * The DescSize
     * Meta informations extracted from the WSDL
     * - documentation: Font size for the Store description.
     * - minOccurs: 0
     * @var string
     */
    public $DescSize;
    /**
     * The DescColor
     * Meta informations extracted from the WSDL
     * - documentation: Font color for the Store description. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string
     */
    public $DescColor;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreFontType
     * @uses StoreFontType::setNameFace()
     * @uses StoreFontType::setNameSize()
     * @uses StoreFontType::setNameColor()
     * @uses StoreFontType::setTitleFace()
     * @uses StoreFontType::setTitleSize()
     * @uses StoreFontType::setTitleColor()
     * @uses StoreFontType::setDescFace()
     * @uses StoreFontType::setDescSize()
     * @uses StoreFontType::setDescColor()
     * @uses StoreFontType::setAny()
     * @param string $nameFace
     * @param string $nameSize
     * @param string $nameColor
     * @param string $titleFace
     * @param string $titleSize
     * @param string $titleColor
     * @param string $descFace
     * @param string $descSize
     * @param string $descColor
     * @param \DOMDocument $any
     */
    public function __construct($nameFace = null, $nameSize = null, $nameColor = null, $titleFace = null, $titleSize = null, $titleColor = null, $descFace = null, $descSize = null, $descColor = null, \DOMDocument $any = null)
    {
        $this
            ->setNameFace($nameFace)
            ->setNameSize($nameSize)
            ->setNameColor($nameColor)
            ->setTitleFace($titleFace)
            ->setTitleSize($titleSize)
            ->setTitleColor($titleColor)
            ->setDescFace($descFace)
            ->setDescSize($descSize)
            ->setDescColor($descColor)
            ->setAny($any);
    }
    /**
     * Get NameFace value
     * @return string|null
     */
    public function getNameFace()
    {
        return $this->NameFace;
    }
    /**
     * Set NameFace value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nameFace
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setNameFace($nameFace = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid($nameFace)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $nameFace, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->NameFace = $nameFace;
        return $this;
    }
    /**
     * Get NameSize value
     * @return string|null
     */
    public function getNameSize()
    {
        return $this->NameSize;
    }
    /**
     * Set NameSize value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nameSize
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setNameSize($nameSize = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid($nameSize)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $nameSize, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->NameSize = $nameSize;
        return $this;
    }
    /**
     * Get NameColor value
     * @return string|null
     */
    public function getNameColor()
    {
        return $this->NameColor;
    }
    /**
     * Set NameColor value
     * @param string $nameColor
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setNameColor($nameColor = null)
    {
        // validation for constraint: string
        if (!is_null($nameColor) && !is_string($nameColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameColor)), __LINE__);
        }
        $this->NameColor = $nameColor;
        return $this;
    }
    /**
     * Get TitleFace value
     * @return string|null
     */
    public function getTitleFace()
    {
        return $this->TitleFace;
    }
    /**
     * Set TitleFace value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $titleFace
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setTitleFace($titleFace = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid($titleFace)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $titleFace, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->TitleFace = $titleFace;
        return $this;
    }
    /**
     * Get TitleSize value
     * @return string|null
     */
    public function getTitleSize()
    {
        return $this->TitleSize;
    }
    /**
     * Set TitleSize value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $titleSize
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setTitleSize($titleSize = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid($titleSize)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $titleSize, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->TitleSize = $titleSize;
        return $this;
    }
    /**
     * Get TitleColor value
     * @return string|null
     */
    public function getTitleColor()
    {
        return $this->TitleColor;
    }
    /**
     * Set TitleColor value
     * @param string $titleColor
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setTitleColor($titleColor = null)
    {
        // validation for constraint: string
        if (!is_null($titleColor) && !is_string($titleColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($titleColor)), __LINE__);
        }
        $this->TitleColor = $titleColor;
        return $this;
    }
    /**
     * Get DescFace value
     * @return string|null
     */
    public function getDescFace()
    {
        return $this->DescFace;
    }
    /**
     * Set DescFace value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $descFace
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setDescFace($descFace = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid($descFace)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $descFace, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->DescFace = $descFace;
        return $this;
    }
    /**
     * Get DescSize value
     * @return string|null
     */
    public function getDescSize()
    {
        return $this->DescSize;
    }
    /**
     * Set DescSize value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $descSize
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setDescSize($descSize = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid($descSize)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $descSize, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->DescSize = $descSize;
        return $this;
    }
    /**
     * Get DescColor value
     * @return string|null
     */
    public function getDescColor()
    {
        return $this->DescColor;
    }
    /**
     * Set DescColor value
     * @param string $descColor
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setDescColor($descColor = null)
    {
        // validation for constraint: string
        if (!is_null($descColor) && !is_string($descColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descColor)), __LINE__);
        }
        $this->DescColor = $descColor;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreFontType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
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
