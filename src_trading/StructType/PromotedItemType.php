<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotedItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotedItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PictureURL = null;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Position = null;
    /**
     * The SelectionType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SelectionType = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingType = null;
    /**
     * The PromotionDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionDetailsType[]
     */
    protected ?array $PromotionDetails = null;
    /**
     * The TimeLeft
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TimeLeft = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PromotedItemType
     * @uses PromotedItemType::setItemID()
     * @uses PromotedItemType::setPictureURL()
     * @uses PromotedItemType::setPosition()
     * @uses PromotedItemType::setSelectionType()
     * @uses PromotedItemType::setTitle()
     * @uses PromotedItemType::setListingType()
     * @uses PromotedItemType::setPromotionDetails()
     * @uses PromotedItemType::setTimeLeft()
     * @uses PromotedItemType::setAny()
     * @param string $itemID
     * @param string $pictureURL
     * @param int $position
     * @param string $selectionType
     * @param string $title
     * @param string $listingType
     * @param \macropage\ebaysdk\trading\StructType\PromotionDetailsType[] $promotionDetails
     * @param string $timeLeft
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $itemID = null, ?string $pictureURL = null, ?int $position = null, ?string $selectionType = null, ?string $title = null, ?string $listingType = null, ?array $promotionDetails = null, ?string $timeLeft = null, $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setPictureURL($pictureURL)
            ->setPosition($position)
            ->setSelectionType($selectionType)
            ->setTitle($title)
            ->setListingType($listingType)
            ->setPromotionDetails($promotionDetails)
            ->setTimeLeft($timeLeft)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
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
     * Get Position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->Position = $position;
        
        return $this;
    }
    /**
     * Get SelectionType value
     * @return string|null
     */
    public function getSelectionType(): ?string
    {
        return $this->SelectionType;
    }
    /**
     * Set SelectionType value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $selectionType
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setSelectionType(?string $selectionType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType::valueIsValid($selectionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType', is_array($selectionType) ? implode(', ', $selectionType) : var_export($selectionType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType::getValidValues())), __LINE__);
        }
        $this->SelectionType = $selectionType;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType(): ?string
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setListingType(?string $listingType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        
        return $this;
    }
    /**
     * Get PromotionDetails value
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType[]
     */
    public function getPromotionDetails(): ?array
    {
        return $this->PromotionDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotionDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotionDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotionDetailsForArrayConstraintsFromSetPromotionDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $promotedItemTypePromotionDetailsItem) {
            // validation for constraint: itemType
            if (!$promotedItemTypePromotionDetailsItem instanceof \macropage\ebaysdk\trading\StructType\PromotionDetailsType) {
                $invalidValues[] = is_object($promotedItemTypePromotionDetailsItem) ? get_class($promotedItemTypePromotionDetailsItem) : sprintf('%s(%s)', gettype($promotedItemTypePromotionDetailsItem), var_export($promotedItemTypePromotionDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotionDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\PromotionDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PromotionDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionDetailsType[] $promotionDetails
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setPromotionDetails(?array $promotionDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($promotionDetailsArrayErrorMessage = self::validatePromotionDetailsForArrayConstraintsFromSetPromotionDetails($promotionDetails))) {
            throw new InvalidArgumentException($promotionDetailsArrayErrorMessage, __LINE__);
        }
        $this->PromotionDetails = $promotionDetails;
        
        return $this;
    }
    /**
     * Add item to PromotionDetails value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function addToPromotionDetails(\macropage\ebaysdk\trading\StructType\PromotionDetailsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PromotionDetailsType) {
            throw new InvalidArgumentException(sprintf('The PromotionDetails property can only contain items of type \macropage\ebaysdk\trading\StructType\PromotionDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PromotionDetails[] = $item;
        
        return $this;
    }
    /**
     * Get TimeLeft value
     * @return string|null
     */
    public function getTimeLeft(): ?string
    {
        return $this->TimeLeft;
    }
    /**
     * Set TimeLeft value
     * @param string $timeLeft
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setTimeLeft(?string $timeLeft = null): self
    {
        // validation for constraint: string
        if (!is_null($timeLeft) && !is_string($timeLeft)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeLeft, true), gettype($timeLeft)), __LINE__);
        }
        $this->TimeLeft = $timeLeft;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
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
