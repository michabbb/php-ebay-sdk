<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipType extends AbstractStructBase
{
    /**
     * The ListingTipID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingTipID = null;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Priority = null;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingTipMessageType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ListingTipMessageType $Message = null;
    /**
     * The Field
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ListingTipFieldType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ListingTipFieldType $Field = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ListingTipType
     * @uses ListingTipType::setListingTipID()
     * @uses ListingTipType::setPriority()
     * @uses ListingTipType::setMessage()
     * @uses ListingTipType::setField()
     * @uses ListingTipType::setAny()
     * @param string $listingTipID
     * @param int $priority
     * @param \macropage\ebaysdk\trading\StructType\ListingTipMessageType $message
     * @param \macropage\ebaysdk\trading\StructType\ListingTipFieldType $field
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $listingTipID = null, ?int $priority = null, ?\macropage\ebaysdk\trading\StructType\ListingTipMessageType $message = null, ?\macropage\ebaysdk\trading\StructType\ListingTipFieldType $field = null, $any = null)
    {
        $this
            ->setListingTipID($listingTipID)
            ->setPriority($priority)
            ->setMessage($message)
            ->setField($field)
            ->setAny($any);
    }
    /**
     * Get ListingTipID value
     * @return string|null
     */
    public function getListingTipID(): ?string
    {
        return $this->ListingTipID;
    }
    /**
     * Set ListingTipID value
     * @param string $listingTipID
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
     */
    public function setListingTipID(?string $listingTipID = null): self
    {
        // validation for constraint: string
        if (!is_null($listingTipID) && !is_string($listingTipID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listingTipID, true), gettype($listingTipID)), __LINE__);
        }
        $this->ListingTipID = $listingTipID;
        
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        
        return $this;
    }
    /**
     * Get Message value
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType|null
     */
    public function getMessage(): ?\macropage\ebaysdk\trading\StructType\ListingTipMessageType
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param \macropage\ebaysdk\trading\StructType\ListingTipMessageType $message
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
     */
    public function setMessage(?\macropage\ebaysdk\trading\StructType\ListingTipMessageType $message = null): self
    {
        $this->Message = $message;
        
        return $this;
    }
    /**
     * Get Field value
     * @return \macropage\ebaysdk\trading\StructType\ListingTipFieldType|null
     */
    public function getField(): ?\macropage\ebaysdk\trading\StructType\ListingTipFieldType
    {
        return $this->Field;
    }
    /**
     * Set Field value
     * @param \macropage\ebaysdk\trading\StructType\ListingTipFieldType $field
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
     */
    public function setField(?\macropage\ebaysdk\trading\StructType\ListingTipFieldType $field = null): self
    {
        $this->Field = $field;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipType
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
