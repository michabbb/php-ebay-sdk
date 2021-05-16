<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerPictureDisplayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerPictureDisplayType extends AbstractStructBase
{
    /**
     * The DisplayType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayType = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Size = null;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Height = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Width = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $displayType = null, ?string $uRL = null, ?int $size = null, ?int $height = null, ?int $width = null, $any = null)
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
    public function getDisplayType(): ?string
    {
        return $this->DisplayType;
    }
    /**
     * Set DisplayType value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $displayType
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setDisplayType(?string $displayType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType::valueIsValid($displayType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType', is_array($displayType) ? implode(', ', $displayType) : var_export($displayType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PictureManagerPictureDisplayTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayType = $displayType;
        
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setURL(?string $uRL = null): self
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        
        return $this;
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setHeight(?int $height = null): self
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
     */
    public function setWidth(?int $width = null): self
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType
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
