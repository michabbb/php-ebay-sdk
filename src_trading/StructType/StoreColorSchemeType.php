<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreColorSchemeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store color scheme.
 * @subpackage Structs
 */
class StoreColorSchemeType extends AbstractStructBase
{
    /**
     * The ColorSchemeID
     * Meta information extracted from the WSDL
     * - documentation: Store color scheme ID. (use GetStoreOptions to get the list of valid theme color scheme IDs).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ColorSchemeID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Store color scheme name. Provides a user-friendly name for the color scheme.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Color
     * Meta information extracted from the WSDL
     * - documentation: Store color set.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreColorType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreColorType $Color = null;
    /**
     * The Font
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the Store's font properties. This container is not returned if an eBay predefined store theme is used 'as is'. Use the <b>GetStoreOptions</b> call to retrieve the complete set of data for the list of
     * predefined eBay Stores options, including the themes and color schemes.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreFontType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreFontType $Font = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreColorSchemeType
     * @uses StoreColorSchemeType::setColorSchemeID()
     * @uses StoreColorSchemeType::setName()
     * @uses StoreColorSchemeType::setColor()
     * @uses StoreColorSchemeType::setFont()
     * @uses StoreColorSchemeType::setAny()
     * @param int $colorSchemeID
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\StoreColorType $color
     * @param \macropage\ebaysdk\trading\StructType\StoreFontType $font
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $colorSchemeID = null, ?string $name = null, ?\macropage\ebaysdk\trading\StructType\StoreColorType $color = null, ?\macropage\ebaysdk\trading\StructType\StoreFontType $font = null, $any = null)
    {
        $this
            ->setColorSchemeID($colorSchemeID)
            ->setName($name)
            ->setColor($color)
            ->setFont($font)
            ->setAny($any);
    }
    /**
     * Get ColorSchemeID value
     * @return int|null
     */
    public function getColorSchemeID(): ?int
    {
        return $this->ColorSchemeID;
    }
    /**
     * Set ColorSchemeID value
     * @param int $colorSchemeID
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
     */
    public function setColorSchemeID(?int $colorSchemeID = null): self
    {
        // validation for constraint: int
        if (!is_null($colorSchemeID) && !(is_int($colorSchemeID) || ctype_digit($colorSchemeID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($colorSchemeID, true), gettype($colorSchemeID)), __LINE__);
        }
        $this->ColorSchemeID = $colorSchemeID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
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
     * Get Color value
     * @return \macropage\ebaysdk\trading\StructType\StoreColorType|null
     */
    public function getColor(): ?\macropage\ebaysdk\trading\StructType\StoreColorType
    {
        return $this->Color;
    }
    /**
     * Set Color value
     * @param \macropage\ebaysdk\trading\StructType\StoreColorType $color
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
     */
    public function setColor(?\macropage\ebaysdk\trading\StructType\StoreColorType $color = null): self
    {
        $this->Color = $color;
        
        return $this;
    }
    /**
     * Get Font value
     * @return \macropage\ebaysdk\trading\StructType\StoreFontType|null
     */
    public function getFont(): ?\macropage\ebaysdk\trading\StructType\StoreFontType
    {
        return $this->Font;
    }
    /**
     * Set Font value
     * @param \macropage\ebaysdk\trading\StructType\StoreFontType $font
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
     */
    public function setFont(?\macropage\ebaysdk\trading\StructType\StoreFontType $font = null): self
    {
        $this->Font = $font;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType
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
