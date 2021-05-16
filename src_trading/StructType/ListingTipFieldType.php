<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipFieldType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipFieldType extends AbstractStructBase
{
    /**
     * The ListingTipFieldID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingTipFieldID = null;
    /**
     * The FieldTip
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FieldTip = null;
    /**
     * The CurrentFieldText
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CurrentFieldText = null;
    /**
     * The CurrentFieldValue
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CurrentFieldValue = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ListingTipFieldType
     * @uses ListingTipFieldType::setListingTipFieldID()
     * @uses ListingTipFieldType::setFieldTip()
     * @uses ListingTipFieldType::setCurrentFieldText()
     * @uses ListingTipFieldType::setCurrentFieldValue()
     * @uses ListingTipFieldType::setAny()
     * @param string $listingTipFieldID
     * @param string $fieldTip
     * @param string $currentFieldText
     * @param string $currentFieldValue
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $listingTipFieldID = null, ?string $fieldTip = null, ?string $currentFieldText = null, ?string $currentFieldValue = null, $any = null)
    {
        $this
            ->setListingTipFieldID($listingTipFieldID)
            ->setFieldTip($fieldTip)
            ->setCurrentFieldText($currentFieldText)
            ->setCurrentFieldValue($currentFieldValue)
            ->setAny($any);
    }
    /**
     * Get ListingTipFieldID value
     * @return string|null
     */
    public function getListingTipFieldID(): ?string
    {
        return $this->ListingTipFieldID;
    }
    /**
     * Set ListingTipFieldID value
     * @param string $listingTipFieldID
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public function setListingTipFieldID(?string $listingTipFieldID = null): self
    {
        // validation for constraint: string
        if (!is_null($listingTipFieldID) && !is_string($listingTipFieldID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listingTipFieldID, true), gettype($listingTipFieldID)), __LINE__);
        }
        $this->ListingTipFieldID = $listingTipFieldID;
        
        return $this;
    }
    /**
     * Get FieldTip value
     * @return string|null
     */
    public function getFieldTip(): ?string
    {
        return $this->FieldTip;
    }
    /**
     * Set FieldTip value
     * @param string $fieldTip
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public function setFieldTip(?string $fieldTip = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldTip) && !is_string($fieldTip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldTip, true), gettype($fieldTip)), __LINE__);
        }
        $this->FieldTip = $fieldTip;
        
        return $this;
    }
    /**
     * Get CurrentFieldText value
     * @return string|null
     */
    public function getCurrentFieldText(): ?string
    {
        return $this->CurrentFieldText;
    }
    /**
     * Set CurrentFieldText value
     * @param string $currentFieldText
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public function setCurrentFieldText(?string $currentFieldText = null): self
    {
        // validation for constraint: string
        if (!is_null($currentFieldText) && !is_string($currentFieldText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentFieldText, true), gettype($currentFieldText)), __LINE__);
        }
        $this->CurrentFieldText = $currentFieldText;
        
        return $this;
    }
    /**
     * Get CurrentFieldValue value
     * @return string|null
     */
    public function getCurrentFieldValue(): ?string
    {
        return $this->CurrentFieldValue;
    }
    /**
     * Set CurrentFieldValue value
     * @param string $currentFieldValue
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
     */
    public function setCurrentFieldValue(?string $currentFieldValue = null): self
    {
        // validation for constraint: string
        if (!is_null($currentFieldValue) && !is_string($currentFieldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentFieldValue, true), gettype($currentFieldValue)), __LINE__);
        }
        $this->CurrentFieldValue = $currentFieldValue;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType
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
