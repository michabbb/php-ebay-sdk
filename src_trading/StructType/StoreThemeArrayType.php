<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreThemeArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Set of Store themes.
 * @subpackage Structs
 */
class StoreThemeArrayType extends AbstractStructBase
{
    /**
     * The Theme
     * Meta information extracted from the WSDL
     * - documentation: A Store theme.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreThemeType[]
     */
    protected array $Theme = [];
    /**
     * The GenericColorSchemeArray
     * Meta information extracted from the WSDL
     * - documentation: Set of color schemes. This set is for use with those themes that do not explicitly list a color scheme in the theme definition (these themes are also known as advanced themes).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $GenericColorSchemeArray = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreThemeArrayType
     * @uses StoreThemeArrayType::setTheme()
     * @uses StoreThemeArrayType::setGenericColorSchemeArray()
     * @uses StoreThemeArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType[] $theme
     * @param \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $theme = [], ?\macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray = null, $any = null)
    {
        $this
            ->setTheme($theme)
            ->setGenericColorSchemeArray($genericColorSchemeArray)
            ->setAny($any);
    }
    /**
     * Get Theme value
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeType[]
     */
    public function getTheme(): array
    {
        return $this->Theme;
    }
    /**
     * This method is responsible for validating the values passed to the setTheme method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTheme method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThemeForArrayConstraintsFromSetTheme(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeThemeArrayTypeThemeItem) {
            // validation for constraint: itemType
            if (!$storeThemeArrayTypeThemeItem instanceof \macropage\ebaysdk\trading\StructType\StoreThemeType) {
                $invalidValues[] = is_object($storeThemeArrayTypeThemeItem) ? get_class($storeThemeArrayTypeThemeItem) : sprintf('%s(%s)', gettype($storeThemeArrayTypeThemeItem), var_export($storeThemeArrayTypeThemeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Theme property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreThemeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Theme value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType[] $theme
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
     */
    public function setTheme(array $theme = []): self
    {
        // validation for constraint: array
        if ('' !== ($themeArrayErrorMessage = self::validateThemeForArrayConstraintsFromSetTheme($theme))) {
            throw new InvalidArgumentException($themeArrayErrorMessage, __LINE__);
        }
        $this->Theme = $theme;
        
        return $this;
    }
    /**
     * Add item to Theme value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreThemeType $item
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
     */
    public function addToTheme(\macropage\ebaysdk\trading\StructType\StoreThemeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreThemeType) {
            throw new InvalidArgumentException(sprintf('The Theme property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreThemeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Theme[] = $item;
        
        return $this;
    }
    /**
     * Get GenericColorSchemeArray value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType|null
     */
    public function getGenericColorSchemeArray(): ?\macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType
    {
        return $this->GenericColorSchemeArray;
    }
    /**
     * Set GenericColorSchemeArray value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
     */
    public function setGenericColorSchemeArray(?\macropage\ebaysdk\trading\ArrayType\StoreColorSchemeArrayType $genericColorSchemeArray = null): self
    {
        $this->GenericColorSchemeArray = $genericColorSchemeArray;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreThemeArrayType
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
