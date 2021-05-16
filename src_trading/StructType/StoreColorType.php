<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreColorType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store color set.
 * @subpackage Structs
 */
class StoreColorType extends AbstractStructBase
{
    /**
     * The Primary
     * Meta information extracted from the WSDL
     * - documentation: Primary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Primary = null;
    /**
     * The Secondary
     * Meta information extracted from the WSDL
     * - documentation: Secondary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Secondary = null;
    /**
     * The Accent
     * Meta information extracted from the WSDL
     * - documentation: Accent color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Accent = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreColorType
     * @uses StoreColorType::setPrimary()
     * @uses StoreColorType::setSecondary()
     * @uses StoreColorType::setAccent()
     * @uses StoreColorType::setAny()
     * @param string $primary
     * @param string $secondary
     * @param string $accent
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $primary = null, ?string $secondary = null, ?string $accent = null, $any = null)
    {
        $this
            ->setPrimary($primary)
            ->setSecondary($secondary)
            ->setAccent($accent)
            ->setAny($any);
    }
    /**
     * Get Primary value
     * @return string|null
     */
    public function getPrimary(): ?string
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param string $primary
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
     */
    public function setPrimary(?string $primary = null): self
    {
        // validation for constraint: string
        if (!is_null($primary) && !is_string($primary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primary, true), gettype($primary)), __LINE__);
        }
        $this->Primary = $primary;
        
        return $this;
    }
    /**
     * Get Secondary value
     * @return string|null
     */
    public function getSecondary(): ?string
    {
        return $this->Secondary;
    }
    /**
     * Set Secondary value
     * @param string $secondary
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
     */
    public function setSecondary(?string $secondary = null): self
    {
        // validation for constraint: string
        if (!is_null($secondary) && !is_string($secondary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondary, true), gettype($secondary)), __LINE__);
        }
        $this->Secondary = $secondary;
        
        return $this;
    }
    /**
     * Get Accent value
     * @return string|null
     */
    public function getAccent(): ?string
    {
        return $this->Accent;
    }
    /**
     * Set Accent value
     * @param string $accent
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
     */
    public function setAccent(?string $accent = null): self
    {
        // validation for constraint: string
        if (!is_null($accent) && !is_string($accent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accent, true), gettype($accent)), __LINE__);
        }
        $this->Accent = $accent;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType
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
