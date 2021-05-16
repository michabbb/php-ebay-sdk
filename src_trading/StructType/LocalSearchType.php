<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocalSearchType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class LocalSearchType extends AbstractStructBase
{
    /**
     * The MaxDistance
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $MaxDistance = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var string|null
     */
    protected ?string $PostalCode = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for LocalSearchType
     * @uses LocalSearchType::setMaxDistance()
     * @uses LocalSearchType::setPostalCode()
     * @uses LocalSearchType::setAny()
     * @param int $maxDistance
     * @param string $postalCode
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $maxDistance = null, ?string $postalCode = null, $any = null)
    {
        $this
            ->setMaxDistance($maxDistance)
            ->setPostalCode($postalCode)
            ->setAny($any);
    }
    /**
     * Get MaxDistance value
     * @return int|null
     */
    public function getMaxDistance(): ?int
    {
        return $this->MaxDistance;
    }
    /**
     * Set MaxDistance value
     * @param int $maxDistance
     * @return \macropage\ebaysdk\trading\StructType\LocalSearchType
     */
    public function setMaxDistance(?int $maxDistance = null): self
    {
        // validation for constraint: int
        if (!is_null($maxDistance) && !(is_int($maxDistance) || ctype_digit($maxDistance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxDistance, true), gettype($maxDistance)), __LINE__);
        }
        $this->MaxDistance = $maxDistance;
        
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \macropage\ebaysdk\trading\StructType\LocalSearchType
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        
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
     * @return \macropage\ebaysdk\trading\StructType\LocalSearchType
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
