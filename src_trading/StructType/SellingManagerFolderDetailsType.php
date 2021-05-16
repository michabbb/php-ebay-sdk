<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerFolderDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about a Selling Manager folder.
 * @subpackage Structs
 */
class SellingManagerFolderDetailsType extends AbstractStructBase
{
    /**
     * The FolderID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of the folder. Originally returned in the AddSellingManagerInventoryFolder response.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderID = null;
    /**
     * The ParentFolderID
     * Meta information extracted from the WSDL
     * - documentation: Unique ID of the parent folder. If it exists, it is returned.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ParentFolderID = null;
    /**
     * The FolderLevel
     * Meta information extracted from the WSDL
     * - documentation: Level of this folder in the folder tree hierarchy. Root folder is at level 1.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FolderLevel = null;
    /**
     * The FolderName
     * Meta information extracted from the WSDL
     * - documentation: Name assigned to the folder by the user in the AddSellingManagerInventoryFolder or the ReviseSellingManagerInventoryFolder call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FolderName = null;
    /**
     * The FolderComment
     * Meta information extracted from the WSDL
     * - documentation: Comments associated with the folder. Returned if it exists.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FolderComment = null;
    /**
     * The ChildFolder
     * Meta information extracted from the WSDL
     * - documentation: Container for sub-folder information. Returned if requested.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType[]
     */
    protected array $ChildFolder = [];
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - documentation: Date when this folder was created.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerFolderDetailsType
     * @uses SellingManagerFolderDetailsType::setFolderID()
     * @uses SellingManagerFolderDetailsType::setParentFolderID()
     * @uses SellingManagerFolderDetailsType::setFolderLevel()
     * @uses SellingManagerFolderDetailsType::setFolderName()
     * @uses SellingManagerFolderDetailsType::setFolderComment()
     * @uses SellingManagerFolderDetailsType::setChildFolder()
     * @uses SellingManagerFolderDetailsType::setCreationTime()
     * @uses SellingManagerFolderDetailsType::setAny()
     * @param int $folderID
     * @param int $parentFolderID
     * @param int $folderLevel
     * @param string $folderName
     * @param string $folderComment
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType[] $childFolder
     * @param string $creationTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $folderID = null, ?int $parentFolderID = null, ?int $folderLevel = null, ?string $folderName = null, ?string $folderComment = null, array $childFolder = [], ?string $creationTime = null, $any = null)
    {
        $this
            ->setFolderID($folderID)
            ->setParentFolderID($parentFolderID)
            ->setFolderLevel($folderLevel)
            ->setFolderName($folderName)
            ->setFolderComment($folderComment)
            ->setChildFolder($childFolder)
            ->setCreationTime($creationTime)
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
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
     * Get ParentFolderID value
     * @return int|null
     */
    public function getParentFolderID(): ?int
    {
        return $this->ParentFolderID;
    }
    /**
     * Set ParentFolderID value
     * @param int $parentFolderID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setParentFolderID(?int $parentFolderID = null): self
    {
        // validation for constraint: int
        if (!is_null($parentFolderID) && !(is_int($parentFolderID) || ctype_digit($parentFolderID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentFolderID, true), gettype($parentFolderID)), __LINE__);
        }
        $this->ParentFolderID = $parentFolderID;
        
        return $this;
    }
    /**
     * Get FolderLevel value
     * @return int|null
     */
    public function getFolderLevel(): ?int
    {
        return $this->FolderLevel;
    }
    /**
     * Set FolderLevel value
     * @param int $folderLevel
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setFolderLevel(?int $folderLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($folderLevel) && !(is_int($folderLevel) || ctype_digit($folderLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folderLevel, true), gettype($folderLevel)), __LINE__);
        }
        $this->FolderLevel = $folderLevel;
        
        return $this;
    }
    /**
     * Get FolderName value
     * @return string|null
     */
    public function getFolderName(): ?string
    {
        return $this->FolderName;
    }
    /**
     * Set FolderName value
     * @param string $folderName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setFolderName(?string $folderName = null): self
    {
        // validation for constraint: string
        if (!is_null($folderName) && !is_string($folderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderName, true), gettype($folderName)), __LINE__);
        }
        $this->FolderName = $folderName;
        
        return $this;
    }
    /**
     * Get FolderComment value
     * @return string|null
     */
    public function getFolderComment(): ?string
    {
        return $this->FolderComment;
    }
    /**
     * Set FolderComment value
     * @param string $folderComment
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setFolderComment(?string $folderComment = null): self
    {
        // validation for constraint: string
        if (!is_null($folderComment) && !is_string($folderComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderComment, true), gettype($folderComment)), __LINE__);
        }
        $this->FolderComment = $folderComment;
        
        return $this;
    }
    /**
     * Get ChildFolder value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType[]
     */
    public function getChildFolder(): array
    {
        return $this->ChildFolder;
    }
    /**
     * This method is responsible for validating the values passed to the setChildFolder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildFolder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildFolderForArrayConstraintsFromSetChildFolder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellingManagerFolderDetailsTypeChildFolderItem) {
            // validation for constraint: itemType
            if (!$sellingManagerFolderDetailsTypeChildFolderItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType) {
                $invalidValues[] = is_object($sellingManagerFolderDetailsTypeChildFolderItem) ? get_class($sellingManagerFolderDetailsTypeChildFolderItem) : sprintf('%s(%s)', gettype($sellingManagerFolderDetailsTypeChildFolderItem), var_export($sellingManagerFolderDetailsTypeChildFolderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ChildFolder property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ChildFolder value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType[] $childFolder
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setChildFolder(array $childFolder = []): self
    {
        // validation for constraint: array
        if ('' !== ($childFolderArrayErrorMessage = self::validateChildFolderForArrayConstraintsFromSetChildFolder($childFolder))) {
            throw new InvalidArgumentException($childFolderArrayErrorMessage, __LINE__);
        }
        $this->ChildFolder = $childFolder;
        
        return $this;
    }
    /**
     * Add item to ChildFolder value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function addToChildFolder(\macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType) {
            throw new InvalidArgumentException(sprintf('The ChildFolder property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ChildFolder[] = $item;
        
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerFolderDetailsType
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
