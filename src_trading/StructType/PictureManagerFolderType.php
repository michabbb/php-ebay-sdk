<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerFolderType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerFolderType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Picture
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictureManagerPictureType[]
     */
    protected ?array $Picture = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PictureManagerFolderType
     * @uses PictureManagerFolderType::setFolderID()
     * @uses PictureManagerFolderType::setName()
     * @uses PictureManagerFolderType::setPicture()
     * @uses PictureManagerFolderType::setAny()
     * @param int $folderID
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureType[] $picture
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $folderID = null, ?string $name = null, ?array $picture = null, $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setName($name)
            ->setPicture($picture)
            ->setAny($any);
    }
    /**
     * Get FolderID value
     * @return int|null
     */
    public function getFolderID(): ?int
    {
        return $this->FolderID;
    }
    /**
     * Set FolderID value
     * @param int $folderID
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
     */
    public function setFolderID(?int $folderID = null): self
    {
        // validation for constraint: int
        if (!is_null($folderID) && !(is_int($folderID) || ctype_digit($folderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderID, true), gettype($folderID)), __LINE__);
        }
        $this->FolderID = $folderID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
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
     * Get Picture value
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerPictureType[]
     */
    public function getPicture(): ?array
    {
        return $this->Picture;
    }
    /**
     * This method is responsible for validating the values passed to the setPicture method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPicture method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureForArrayConstraintsFromSetPicture(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictureManagerFolderTypePictureItem) {
            // validation for constraint: itemType
            if (!$pictureManagerFolderTypePictureItem instanceof \macropage\ebaysdk\trading\StructType\PictureManagerPictureType) {
                $invalidValues[] = is_object($pictureManagerFolderTypePictureItem) ? get_class($pictureManagerFolderTypePictureItem) : sprintf('%s(%s)', gettype($pictureManagerFolderTypePictureItem), var_export($pictureManagerFolderTypePictureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Picture property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureManagerPictureType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Picture value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureType[] $picture
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
     */
    public function setPicture(?array $picture = null): self
    {
        // validation for constraint: array
        if ('' !== ($pictureArrayErrorMessage = self::validatePictureForArrayConstraintsFromSetPicture($picture))) {
            throw new InvalidArgumentException($pictureArrayErrorMessage, __LINE__);
        }
        $this->Picture = $picture;
        
        return $this;
    }
    /**
     * Add item to Picture value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PictureManagerPictureType $item
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
     */
    public function addToPicture(\macropage\ebaysdk\trading\StructType\PictureManagerPictureType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PictureManagerPictureType) {
            throw new InvalidArgumentException(sprintf('The Picture property can only contain items of type \macropage\ebaysdk\trading\StructType\PictureManagerPictureType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Picture[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerFolderType
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
