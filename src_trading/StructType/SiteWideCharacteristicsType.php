<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteWideCharacteristicsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SiteWideCharacteristicsType extends AbstractStructBase
{
    /**
     * The CharacteristicsSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharacteristicsSetType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $CharacteristicsSet = null;
    /**
     * The ExcludeCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ExcludeCategoryID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SiteWideCharacteristicsType
     * @uses SiteWideCharacteristicsType::setCharacteristicsSet()
     * @uses SiteWideCharacteristicsType::setExcludeCategoryID()
     * @uses SiteWideCharacteristicsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet
     * @param string[] $excludeCategoryID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet = null, ?array $excludeCategoryID = null, $any = null)
    {
        $this
            ->setCharacteristicsSet($characteristicsSet)
            ->setExcludeCategoryID($excludeCategoryID)
            ->setAny($any);
    }
    /**
     * Get CharacteristicsSet value
     * @return \macropage\ebaysdk\trading\StructType\CharacteristicsSetType|null
     */
    public function getCharacteristicsSet(): ?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType
    {
        return $this->CharacteristicsSet;
    }
    /**
     * Set CharacteristicsSet value
     * @param \macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
     */
    public function setCharacteristicsSet(?\macropage\ebaysdk\trading\StructType\CharacteristicsSetType $characteristicsSet = null): self
    {
        $this->CharacteristicsSet = $characteristicsSet;
        
        return $this;
    }
    /**
     * Get ExcludeCategoryID value
     * @return string[]
     */
    public function getExcludeCategoryID(): ?array
    {
        return $this->ExcludeCategoryID;
    }
    /**
     * This method is responsible for validating the values passed to the setExcludeCategoryID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludeCategoryID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludeCategoryIDForArrayConstraintsFromSetExcludeCategoryID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteWideCharacteristicsTypeExcludeCategoryIDItem) {
            // validation for constraint: itemType
            if (!is_string($siteWideCharacteristicsTypeExcludeCategoryIDItem)) {
                $invalidValues[] = is_object($siteWideCharacteristicsTypeExcludeCategoryIDItem) ? get_class($siteWideCharacteristicsTypeExcludeCategoryIDItem) : sprintf('%s(%s)', gettype($siteWideCharacteristicsTypeExcludeCategoryIDItem), var_export($siteWideCharacteristicsTypeExcludeCategoryIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExcludeCategoryID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExcludeCategoryID value
     * @throws InvalidArgumentException
     * @param string[] $excludeCategoryID
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
     */
    public function setExcludeCategoryID(?array $excludeCategoryID = null): self
    {
        // validation for constraint: array
        if ('' !== ($excludeCategoryIDArrayErrorMessage = self::validateExcludeCategoryIDForArrayConstraintsFromSetExcludeCategoryID($excludeCategoryID))) {
            throw new InvalidArgumentException($excludeCategoryIDArrayErrorMessage, __LINE__);
        }
        $this->ExcludeCategoryID = $excludeCategoryID;
        
        return $this;
    }
    /**
     * Add item to ExcludeCategoryID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
     */
    public function addToExcludeCategoryID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ExcludeCategoryID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExcludeCategoryID[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SiteWideCharacteristicsType
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
