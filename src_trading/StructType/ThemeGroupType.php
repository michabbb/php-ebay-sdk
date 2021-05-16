<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThemeGroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for one theme group. Returned for <b>GetDescriptionTemplates</b> if theme groups are requested.
 * @subpackage Structs
 */
class ThemeGroupType extends AbstractStructBase
{
    /**
     * The GroupID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for this theme group.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GroupID = null;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - documentation: Name of this theme group (localized to the language associated with the eBay site).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GroupName = null;
    /**
     * The ThemeID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for each theme in this group. There is at least one theme in a theme group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $ThemeID = [];
    /**
     * The ThemeTotal
     * Meta information extracted from the WSDL
     * - documentation: The number of <b>ThemeID</b> elements in this group.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ThemeTotal = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ThemeGroupType
     * @uses ThemeGroupType::setGroupID()
     * @uses ThemeGroupType::setGroupName()
     * @uses ThemeGroupType::setThemeID()
     * @uses ThemeGroupType::setThemeTotal()
     * @uses ThemeGroupType::setAny()
     * @param int $groupID
     * @param string $groupName
     * @param int[] $themeID
     * @param int $themeTotal
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $groupID = null, ?string $groupName = null, array $themeID = [], ?int $themeTotal = null, $any = null)
    {
        $this
            ->setGroupID($groupID)
            ->setGroupName($groupName)
            ->setThemeID($themeID)
            ->setThemeTotal($themeTotal)
            ->setAny($any);
    }
    /**
     * Get GroupID value
     * @return int|null
     */
    public function getGroupID(): ?int
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param int $groupID
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function setGroupID(?int $groupID = null): self
    {
        // validation for constraint: int
        if (!is_null($groupID) && !(is_int($groupID) || ctype_digit($groupID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupID, true), gettype($groupID)), __LINE__);
        }
        $this->GroupID = $groupID;
        
        return $this;
    }
    /**
     * Get GroupName value
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return $this->GroupName;
    }
    /**
     * Set GroupName value
     * @param string $groupName
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function setGroupName(?string $groupName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        $this->GroupName = $groupName;
        
        return $this;
    }
    /**
     * Get ThemeID value
     * @return int[]
     */
    public function getThemeID(): array
    {
        return $this->ThemeID;
    }
    /**
     * This method is responsible for validating the values passed to the setThemeID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThemeID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThemeIDForArrayConstraintsFromSetThemeID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $themeGroupTypeThemeIDItem) {
            // validation for constraint: itemType
            if (!(is_int($themeGroupTypeThemeIDItem) || ctype_digit($themeGroupTypeThemeIDItem))) {
                $invalidValues[] = is_object($themeGroupTypeThemeIDItem) ? get_class($themeGroupTypeThemeIDItem) : sprintf('%s(%s)', gettype($themeGroupTypeThemeIDItem), var_export($themeGroupTypeThemeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ThemeID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ThemeID value
     * @throws InvalidArgumentException
     * @param int[] $themeID
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function setThemeID(array $themeID = []): self
    {
        // validation for constraint: array
        if ('' !== ($themeIDArrayErrorMessage = self::validateThemeIDForArrayConstraintsFromSetThemeID($themeID))) {
            throw new InvalidArgumentException($themeIDArrayErrorMessage, __LINE__);
        }
        $this->ThemeID = $themeID;
        
        return $this;
    }
    /**
     * Add item to ThemeID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function addToThemeID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The ThemeID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ThemeID[] = $item;
        
        return $this;
    }
    /**
     * Get ThemeTotal value
     * @return int|null
     */
    public function getThemeTotal(): ?int
    {
        return $this->ThemeTotal;
    }
    /**
     * Set ThemeTotal value
     * @param int $themeTotal
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
     */
    public function setThemeTotal(?int $themeTotal = null): self
    {
        // validation for constraint: int
        if (!is_null($themeTotal) && !(is_int($themeTotal) || ctype_digit($themeTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($themeTotal, true), gettype($themeTotal)), __LINE__);
        }
        $this->ThemeTotal = $themeTotal;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType
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
