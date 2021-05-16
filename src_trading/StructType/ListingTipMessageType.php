<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingTipMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ListingTipMessageType extends AbstractStructBase
{
    /**
     * The ListingTipMessageID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ListingTipMessageID = null;
    /**
     * The ShortMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShortMessage = null;
    /**
     * The LongMessage
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LongMessage = null;
    /**
     * The HelpURLPath
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HelpURLPath = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ListingTipMessageType
     * @uses ListingTipMessageType::setListingTipMessageID()
     * @uses ListingTipMessageType::setShortMessage()
     * @uses ListingTipMessageType::setLongMessage()
     * @uses ListingTipMessageType::setHelpURLPath()
     * @uses ListingTipMessageType::setAny()
     * @param string $listingTipMessageID
     * @param string $shortMessage
     * @param string $longMessage
     * @param string $helpURLPath
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $listingTipMessageID = null, ?string $shortMessage = null, ?string $longMessage = null, ?string $helpURLPath = null, $any = null)
    {
        $this
            ->setListingTipMessageID($listingTipMessageID)
            ->setShortMessage($shortMessage)
            ->setLongMessage($longMessage)
            ->setHelpURLPath($helpURLPath)
            ->setAny($any);
    }
    /**
     * Get ListingTipMessageID value
     * @return string|null
     */
    public function getListingTipMessageID(): ?string
    {
        return $this->ListingTipMessageID;
    }
    /**
     * Set ListingTipMessageID value
     * @param string $listingTipMessageID
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public function setListingTipMessageID(?string $listingTipMessageID = null): self
    {
        // validation for constraint: string
        if (!is_null($listingTipMessageID) && !is_string($listingTipMessageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listingTipMessageID, true), gettype($listingTipMessageID)), __LINE__);
        }
        $this->ListingTipMessageID = $listingTipMessageID;
        
        return $this;
    }
    /**
     * Get ShortMessage value
     * @return string|null
     */
    public function getShortMessage(): ?string
    {
        return $this->ShortMessage;
    }
    /**
     * Set ShortMessage value
     * @param string $shortMessage
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public function setShortMessage(?string $shortMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortMessage, true), gettype($shortMessage)), __LINE__);
        }
        $this->ShortMessage = $shortMessage;
        
        return $this;
    }
    /**
     * Get LongMessage value
     * @return string|null
     */
    public function getLongMessage(): ?string
    {
        return $this->LongMessage;
    }
    /**
     * Set LongMessage value
     * @param string $longMessage
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public function setLongMessage(?string $longMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longMessage, true), gettype($longMessage)), __LINE__);
        }
        $this->LongMessage = $longMessage;
        
        return $this;
    }
    /**
     * Get HelpURLPath value
     * @return string|null
     */
    public function getHelpURLPath(): ?string
    {
        return $this->HelpURLPath;
    }
    /**
     * Set HelpURLPath value
     * @param string $helpURLPath
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
     */
    public function setHelpURLPath(?string $helpURLPath = null): self
    {
        // validation for constraint: string
        if (!is_null($helpURLPath) && !is_string($helpURLPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($helpURLPath, true), gettype($helpURLPath)), __LINE__);
        }
        $this->HelpURLPath = $helpURLPath;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ListingTipMessageType
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
