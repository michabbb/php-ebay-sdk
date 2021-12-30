<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerPictureType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerPictureType extends AbstractStructBase
{
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PictureURL = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The DisplayFormat
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType[]
     */
    protected ?array $DisplayFormat = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PictureManagerPictureType
     * @uses PictureManagerPictureType::setPictureURL()
     * @uses PictureManagerPictureType::setName()
     * @uses PictureManagerPictureType::setDate()
     * @uses PictureManagerPictureType::setDisplayFormat()
     * @uses PictureManagerPictureType::setAny()
     * @param string $pictureURL
     * @param string $name
     * @param string $date
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType[] $displayFormat
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $pictureURL = null, ?string $name = null, ?string $date = null, ?array $displayFormat = null, $any = null)
    {
        $this
            ->setPictureURL($pictureURL)
            ->setName($name)
            ->setDate($date)
            ->setDisplayFormat($displayFormat)
            ->setAny($any);
    }
    /**
     * Get PictureURL value
     * @return string|null
     */
    public function getPictureURL(): ?string
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @param string $pictureURL
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function setPictureURL(?string $pictureURL = null): self
    {
        // validation for constraint: string
        if (!is_null($pictureURL) && !is_string($pictureURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureURL, true), gettype($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get DisplayFormat value
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType[]
     */
    public function getDisplayFormat(): ?array
    {
        return $this->DisplayFormat;
    }
    /**
     * This method is responsible for validating the values passed to the setDisplayFormat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisplayFormat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisplayFormatForArrayConstraintsFromSetDisplayFormat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictureManagerPictureTypeDisplayFormatItem) {
            // validation for constraint: itemType
            if (!$pictureManagerPictureTypeDisplayFormatItem instanceof \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType) {
                $invalidValues[] = is_object($pictureManagerPictureTypeDisplayFormatItem) ? get_class($pictureManagerPictureTypeDisplayFormatItem) : sprintf('%s(%s)', gettype($pictureManagerPictureTypeDisplayFormatItem), var_export($pictureManagerPictureTypeDisplayFormatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisplayFormat property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DisplayFormat value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType[] $displayFormat
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function setDisplayFormat(?array $displayFormat = null): self
    {
        // validation for constraint: array
        if ('' !== ($displayFormatArrayErrorMessage = self::validateDisplayFormatForArrayConstraintsFromSetDisplayFormat($displayFormat))) {
            throw new InvalidArgumentException($displayFormatArrayErrorMessage, __LINE__);
        }
        $this->DisplayFormat = $displayFormat;
        
        return $this;
    }
    /**
     * Add item to DisplayFormat value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType $item
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
     */
    public function addToDisplayFormat(\macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType) {
            throw new InvalidArgumentException(sprintf('The DisplayFormat property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureManagerPictureDisplayType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DisplayFormat[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType
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
