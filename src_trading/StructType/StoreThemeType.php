<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreThemeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store theme.
 * @subpackage Structs
 */
class StoreThemeType extends AbstractStructBase
{
    /**
     * The ThemeID
     * Meta information extracted from the WSDL
     * - documentation: Store theme ID (use GetStoreOptions to get the list of valid theme IDs).
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ThemeID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Store theme name. Provides a user-friendly name for the theme.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The ColorScheme
     * Meta information extracted from the WSDL
     * - documentation: Theme color scheme.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType $ColorScheme = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreThemeType
     * @uses StoreThemeType::setThemeID()
     * @uses StoreThemeType::setName()
     * @uses StoreThemeType::setColorScheme()
     * @uses StoreThemeType::setAny()
     * @param int $themeID
     * @param string $name
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType $colorScheme
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $themeID = null, ?string $name = null, ?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType $colorScheme = null, $any = null)
    {
        $this
            ->setThemeID($themeID)
            ->setName($name)
            ->setColorScheme($colorScheme)
            ->setAny($any);
    }
    /**
     * Get ThemeID value
     * @return int|null
     */
    public function getThemeID(): ?int
    {
        return $this->ThemeID;
    }
    /**
     * Set ThemeID value
     * @param int $themeID
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
     */
    public function setThemeID(?int $themeID = null): self
    {
        // validation for constraint: int
        if (!is_null($themeID) && !(is_int($themeID) || ctype_digit($themeID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($themeID, true), gettype($themeID)), __LINE__);
        }
        $this->ThemeID = $themeID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
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
     * Get ColorScheme value
     * @return \macropage\ebaysdk\trading\StructType\StoreColorSchemeType|null
     */
    public function getColorScheme(): ?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType
    {
        return $this->ColorScheme;
    }
    /**
     * Set ColorScheme value
     * @param \macropage\ebaysdk\trading\StructType\StoreColorSchemeType $colorScheme
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
     */
    public function setColorScheme(?\macropage\ebaysdk\trading\StructType\StoreColorSchemeType $colorScheme = null): self
    {
        $this->ColorScheme = $colorScheme;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType
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
