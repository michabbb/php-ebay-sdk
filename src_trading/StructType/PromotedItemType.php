<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotedItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotedItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PictureURL;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $Position;
    /**
     * The SelectionType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SelectionType;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The ListingType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * The PromotionDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PromotionDetailsType[]
     */
    public $PromotionDetails;
    /**
     * The TimeLeft
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $TimeLeft;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $pictureURL = null, $position = null, $selectionType = null, $title = null, $listingType = null, array $promotionDetails = array(), $timeLeft = null, \DOMDocument $any = null)
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
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get PictureURL value
     * @return string|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @param string $pictureURL
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setPictureURL($pictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURL) && !is_string($pictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Get Position value
     * @return int|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setPosition($position = null)
    {
        // validation for constraint: int
        if (!is_null($position) && !is_numeric($position)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($position)), __LINE__);
        }
        $this->Position = $position;
        return $this;
    }
    /**
     * Get SelectionType value
     * @return string|null
     */
    public function getSelectionType()
    {
        return $this->SelectionType;
    }
    /**
     * Set SelectionType value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $selectionType
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setSelectionType($selectionType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType::valueIsValid($selectionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $selectionType, implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionItemSelectionCodeType::getValidValues())), __LINE__);
        }
        $this->SelectionType = $selectionType;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $listingType, implode(', ', \macropage\ebaysdk\trading\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
    /**
     * Get PromotionDetails value
     * @return \macropage\ebaysdk\trading\StructType\PromotionDetailsType[]|null
     */
    public function getPromotionDetails()
    {
        return $this->PromotionDetails;
    }
    /**
     * Set PromotionDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionDetailsType[] $promotionDetails
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setPromotionDetails(array $promotionDetails = array())
    {
        foreach ($promotionDetails as $promotedItemTypePromotionDetailsItem) {
            // validation for constraint: itemType
            if (!$promotedItemTypePromotionDetailsItem instanceof \macropage\ebaysdk\trading\StructType\PromotionDetailsType) {
                throw new \InvalidArgumentException(sprintf('The PromotionDetails property can only contain items of \macropage\ebaysdk\trading\StructType\PromotionDetailsType, "%s" given', is_object($promotedItemTypePromotionDetailsItem) ? get_class($promotedItemTypePromotionDetailsItem) : gettype($promotedItemTypePromotionDetailsItem)), __LINE__);
            }
        }
        $this->PromotionDetails = $promotionDetails;
        return $this;
    }
    /**
     * Add item to PromotionDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PromotionDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function addToPromotionDetails(\macropage\ebaysdk\trading\StructType\PromotionDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PromotionDetailsType) {
            throw new \InvalidArgumentException(sprintf('The PromotionDetails property can only contain items of \macropage\ebaysdk\trading\StructType\PromotionDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PromotionDetails[] = $item;
        return $this;
    }
    /**
     * Get TimeLeft value
     * @return string|null
     */
    public function getTimeLeft()
    {
        return $this->TimeLeft;
    }
    /**
     * Set TimeLeft value
     * @param string $timeLeft
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
     */
    public function setTimeLeft($timeLeft = null)
    {
        // validation for constraint: string
        if (!is_null($timeLeft) && !is_string($timeLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeLeft)), __LINE__);
        }
        $this->TimeLeft = $timeLeft;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PromotedItemType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
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
     * @return \macropage\ebaysdk\trading\StructType\PromotedItemType
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
