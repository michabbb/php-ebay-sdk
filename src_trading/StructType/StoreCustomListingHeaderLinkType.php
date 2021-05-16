<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomListingHeaderLinkType StructType
 * Meta information extracted from the WSDL
 * - documentation: Custom listing header link.
 * @subpackage Structs
 */
class StoreCustomListingHeaderLinkType extends AbstractStructBase
{
    /**
     * The LinkID
     * Meta information extracted from the WSDL
     * - documentation: Link ID for the listing header link. The ID is used when the link is a custom category or for a custom page, and it is not needed when the LinkType property is "AboutMe" or "None".
     * @var int|null
     */
    protected ?int $LinkID = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Order in which to show the custom listing header link.
     * @var int|null
     */
    protected ?int $Order = null;
    /**
     * The LinkType
     * Meta information extracted from the WSDL
     * - documentation: Type of link to include in the custom listing header.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LinkType = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreCustomListingHeaderLinkType
     * @uses StoreCustomListingHeaderLinkType::setLinkID()
     * @uses StoreCustomListingHeaderLinkType::setOrder()
     * @uses StoreCustomListingHeaderLinkType::setLinkType()
     * @uses StoreCustomListingHeaderLinkType::setAny()
     * @param int $linkID
     * @param int $order
     * @param string $linkType
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $linkID = null, ?int $order = null, ?string $linkType = null, $any = null)
    {
        $this
            ->setLinkID($linkID)
            ->setOrder($order)
            ->setLinkType($linkType)
            ->setAny($any);
    }
    /**
     * Get LinkID value
     * @return int|null
     */
    public function getLinkID(): ?int
    {
        return $this->LinkID;
    }
    /**
     * Set LinkID value
     * @param int $linkID
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
     */
    public function setLinkID(?int $linkID = null): self
    {
        // validation for constraint: int
        if (!is_null($linkID) && !(is_int($linkID) || ctype_digit($linkID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($linkID, true), gettype($linkID)), __LINE__);
        }
        $this->LinkID = $linkID;
        
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Get LinkType value
     * @return string|null
     */
    public function getLinkType(): ?string
    {
        return $this->LinkType;
    }
    /**
     * Set LinkType value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $linkType
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
     */
    public function setLinkType(?string $linkType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType::valueIsValid($linkType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType', is_array($linkType) ? implode(', ', $linkType) : var_export($linkType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCustomListingHeaderLinkCodeType::getValidValues())), __LINE__);
        }
        $this->LinkType = $linkType;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomListingHeaderLinkType
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
