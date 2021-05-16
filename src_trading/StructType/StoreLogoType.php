<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreLogoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store logo.
 * @subpackage Structs
 */
class StoreLogoType extends AbstractStructBase
{
    /**
     * The LogoID
     * Meta information extracted from the WSDL
     * - documentation: Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LogoID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Store logo name. Provides a user-friendly name for the logo.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: URL of the logo. Must have a .gif or .jpg extention. Specified when you are using a customized logo.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreLogoType
     * @uses StoreLogoType::setLogoID()
     * @uses StoreLogoType::setName()
     * @uses StoreLogoType::setURL()
     * @uses StoreLogoType::setAny()
     * @param int $logoID
     * @param string $name
     * @param string $uRL
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $logoID = null, ?string $name = null, ?string $uRL = null, $any = null)
    {
        $this
            ->setLogoID($logoID)
            ->setName($name)
            ->setURL($uRL)
            ->setAny($any);
    }
    /**
     * Get LogoID value
     * @return int|null
     */
    public function getLogoID(): ?int
    {
        return $this->LogoID;
    }
    /**
     * Set LogoID value
     * @param int $logoID
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
     */
    public function setLogoID(?int $logoID = null): self
    {
        // validation for constraint: int
        if (!is_null($logoID) && !(is_int($logoID) || ctype_digit($logoID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($logoID, true), gettype($logoID)), __LINE__);
        }
        $this->LogoID = $logoID;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
     */
    public function setURL(?string $uRL = null): self
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType
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
