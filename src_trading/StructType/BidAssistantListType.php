<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidAssistantListType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BidAssistantListType extends AbstractStructBase
{
    /**
     * The BidGroupID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BidGroupID = null;
    /**
     * The IncludeNotes
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeNotes = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BidAssistantListType
     * @uses BidAssistantListType::setBidGroupID()
     * @uses BidAssistantListType::setIncludeNotes()
     * @uses BidAssistantListType::setAny()
     * @param int $bidGroupID
     * @param bool $includeNotes
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $bidGroupID = null, ?bool $includeNotes = null, $any = null)
    {
        $this
            ->setBidGroupID($bidGroupID)
            ->setIncludeNotes($includeNotes)
            ->setAny($any);
    }
    /**
     * Get BidGroupID value
     * @return int|null
     */
    public function getBidGroupID(): ?int
    {
        return $this->BidGroupID;
    }
    /**
     * Set BidGroupID value
     * @param int $bidGroupID
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType
     */
    public function setBidGroupID(?int $bidGroupID = null): self
    {
        // validation for constraint: int
        if (!is_null($bidGroupID) && !(is_int($bidGroupID) || ctype_digit($bidGroupID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidGroupID, true), gettype($bidGroupID)), __LINE__);
        }
        $this->BidGroupID = $bidGroupID;
        
        return $this;
    }
    /**
     * Get IncludeNotes value
     * @return bool|null
     */
    public function getIncludeNotes(): ?bool
    {
        return $this->IncludeNotes;
    }
    /**
     * Set IncludeNotes value
     * @param bool $includeNotes
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType
     */
    public function setIncludeNotes(?bool $includeNotes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeNotes) && !is_bool($includeNotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeNotes, true), gettype($includeNotes)), __LINE__);
        }
        $this->IncludeNotes = $includeNotes;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BidAssistantListType
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
