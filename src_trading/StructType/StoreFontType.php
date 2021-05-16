<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreFontType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store font set.
 * @subpackage Structs
 */
class StoreFontType extends AbstractStructBase
{
    /**
     * The NameFace
     * Meta information extracted from the WSDL
     * - documentation: Font for the Store name.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NameFace = null;
    /**
     * The NameSize
     * Meta information extracted from the WSDL
     * - documentation: Font size for the Store name.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NameSize = null;
    /**
     * The NameColor
     * Meta information extracted from the WSDL
     * - documentation: Font color for the Store name. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NameColor = null;
    /**
     * The TitleFace
     * Meta information extracted from the WSDL
     * - documentation: Font for the Store section title.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TitleFace = null;
    /**
     * The TitleSize
     * Meta information extracted from the WSDL
     * - documentation: Font size for the Store section title.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TitleSize = null;
    /**
     * The TitleColor
     * Meta information extracted from the WSDL
     * - documentation: Font color for the Store section title. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TitleColor = null;
    /**
     * The DescFace
     * Meta information extracted from the WSDL
     * - documentation: Font for the Store description.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DescFace = null;
    /**
     * The DescSize
     * Meta information extracted from the WSDL
     * - documentation: Font size for the Store description.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DescSize = null;
    /**
     * The DescColor
     * Meta information extracted from the WSDL
     * - documentation: Font color for the Store description. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DescColor = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $nameFace = null, ?string $nameSize = null, ?string $nameColor = null, ?string $titleFace = null, ?string $titleSize = null, ?string $titleColor = null, ?string $descFace = null, ?string $descSize = null, ?string $descColor = null, $any = null)
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
    public function getNameFace(): ?string
    {
        return $this->NameFace;
    }
    /**
     * Set NameFace value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $nameFace
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setNameFace(?string $nameFace = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid($nameFace)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType', is_array($nameFace) ? implode(', ', $nameFace) : var_export($nameFace, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->NameFace = $nameFace;
        
        return $this;
    }
    /**
     * Get NameSize value
     * @return string|null
     */
    public function getNameSize(): ?string
    {
        return $this->NameSize;
    }
    /**
     * Set NameSize value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $nameSize
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setNameSize(?string $nameSize = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid($nameSize)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType', is_array($nameSize) ? implode(', ', $nameSize) : var_export($nameSize, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->NameSize = $nameSize;
        
        return $this;
    }
    /**
     * Get NameColor value
     * @return string|null
     */
    public function getNameColor(): ?string
    {
        return $this->NameColor;
    }
    /**
     * Set NameColor value
     * @param string $nameColor
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setNameColor(?string $nameColor = null): self
    {
        // validation for constraint: string
        if (!is_null($nameColor) && !is_string($nameColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameColor, true), gettype($nameColor)), __LINE__);
        }
        $this->NameColor = $nameColor;
        
        return $this;
    }
    /**
     * Get TitleFace value
     * @return string|null
     */
    public function getTitleFace(): ?string
    {
        return $this->TitleFace;
    }
    /**
     * Set TitleFace value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $titleFace
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setTitleFace(?string $titleFace = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid($titleFace)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType', is_array($titleFace) ? implode(', ', $titleFace) : var_export($titleFace, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->TitleFace = $titleFace;
        
        return $this;
    }
    /**
     * Get TitleSize value
     * @return string|null
     */
    public function getTitleSize(): ?string
    {
        return $this->TitleSize;
    }
    /**
     * Set TitleSize value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $titleSize
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setTitleSize(?string $titleSize = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid($titleSize)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType', is_array($titleSize) ? implode(', ', $titleSize) : var_export($titleSize, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->TitleSize = $titleSize;
        
        return $this;
    }
    /**
     * Get TitleColor value
     * @return string|null
     */
    public function getTitleColor(): ?string
    {
        return $this->TitleColor;
    }
    /**
     * Set TitleColor value
     * @param string $titleColor
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setTitleColor(?string $titleColor = null): self
    {
        // validation for constraint: string
        if (!is_null($titleColor) && !is_string($titleColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($titleColor, true), gettype($titleColor)), __LINE__);
        }
        $this->TitleColor = $titleColor;
        
        return $this;
    }
    /**
     * Get DescFace value
     * @return string|null
     */
    public function getDescFace(): ?string
    {
        return $this->DescFace;
    }
    /**
     * Set DescFace value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $descFace
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setDescFace(?string $descFace = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::valueIsValid($descFace)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType', is_array($descFace) ? implode(', ', $descFace) : var_export($descFace, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontFaceCodeType::getValidValues())), __LINE__);
        }
        $this->DescFace = $descFace;
        
        return $this;
    }
    /**
     * Get DescSize value
     * @return string|null
     */
    public function getDescSize(): ?string
    {
        return $this->DescSize;
    }
    /**
     * Set DescSize value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $descSize
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setDescSize(?string $descSize = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::valueIsValid($descSize)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType', is_array($descSize) ? implode(', ', $descSize) : var_export($descSize, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreFontSizeCodeType::getValidValues())), __LINE__);
        }
        $this->DescSize = $descSize;
        
        return $this;
    }
    /**
     * Get DescColor value
     * @return string|null
     */
    public function getDescColor(): ?string
    {
        return $this->DescColor;
    }
    /**
     * Set DescColor value
     * @param string $descColor
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setDescColor(?string $descColor = null): self
    {
        // validation for constraint: string
        if (!is_null($descColor) && !is_string($descColor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descColor, true), gettype($descColor)), __LINE__);
        }
        $this->DescColor = $descColor;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
