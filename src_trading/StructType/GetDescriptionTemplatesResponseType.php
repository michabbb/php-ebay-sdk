<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDescriptionTemplatesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetDescriptionTemplates</b> call. This call retrieves the Listing Designer templates that are available for use by the seller. The user has the option of retrieving all available Listing
 * Designer templates for all categories, for all motor vehicle categories, or for a specific eBay category. <br> <br> <span class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create
 * or revise listings. Existing listings that are already using a Listing Designer template will remain unchanged. The <b>GetDescriptionTemplates</b> call will eventually get deprecated and decommissioned, and more information will be provided on timing
 * at a later date. The <b>GetDescriptionTemplates</b> call will still retrieve Listing Designer template data, but none of retrieved templates will be usable to create or revise a listing.</span>
 * @subpackage Structs
 */
class GetDescriptionTemplatesResponseType extends AbstractResponseType
{
    /**
     * The DescriptionTemplate
     * Meta information extracted from the WSDL
     * - documentation: A <b>DescriptionTemplate</b> container is retrieved for each available Listing Designer template. Each <b>DescriptionTemplate</b> container includes the unique identifier of the template, the Listing Designer Theme Group that it
     * belongs to, the CDATA representation of the Listing Designer template, and the URL to an image that serves as an example of the Listing Designer template.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DescriptionTemplateType[]
     */
    protected ?array $DescriptionTemplate = null;
    /**
     * The LayoutTotal
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of Listing Designer Layout templates that were retrieved. This field is always returned, even if it is <code>0</code>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $LayoutTotal = null;
    /**
     * The ObsoleteLayoutID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a Listing Designer Layout template that is now obsolete. An <b>ObsoleteLayoutID</b> field is returned for each obsolete Listing Designer Layout template.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $ObsoleteLayoutID = null;
    /**
     * The ObsoleteThemeID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a Listing Designer Theme template that is now obsolete. An <b>ObsoleteThemeID</b> field is returned for each obsolete Listing Designer Theme template.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $ObsoleteThemeID = null;
    /**
     * The ThemeGroup
     * Meta information extracted from the WSDL
     * - documentation: A <b>ThemeGroup</b> container is retrieved for each available Listing Designer Theme Group. Each <b>ThemeGroup</b> container includes the unique identifier of the Theme Group, the Theme Group name, and all of the Listing Designer
     * Theme template that belong to that Theme Group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ThemeGroupType[]
     */
    protected ?array $ThemeGroup = null;
    /**
     * The ThemeTotal
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the total number of Listing Designer Theme templates that were retrieved. This field is always returned, even if it is <code>0</code>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ThemeTotal = null;
    /**
     * Constructor method for GetDescriptionTemplatesResponseType
     * @uses GetDescriptionTemplatesResponseType::setDescriptionTemplate()
     * @uses GetDescriptionTemplatesResponseType::setLayoutTotal()
     * @uses GetDescriptionTemplatesResponseType::setObsoleteLayoutID()
     * @uses GetDescriptionTemplatesResponseType::setObsoleteThemeID()
     * @uses GetDescriptionTemplatesResponseType::setThemeGroup()
     * @uses GetDescriptionTemplatesResponseType::setThemeTotal()
     * @param \macropage\ebaysdk\trading\StructType\DescriptionTemplateType[] $descriptionTemplate
     * @param int $layoutTotal
     * @param int[] $obsoleteLayoutID
     * @param int[] $obsoleteThemeID
     * @param \macropage\ebaysdk\trading\StructType\ThemeGroupType[] $themeGroup
     * @param int $themeTotal
     */
    public function __construct(?array $descriptionTemplate = null, ?int $layoutTotal = null, ?array $obsoleteLayoutID = null, ?array $obsoleteThemeID = null, ?array $themeGroup = null, ?int $themeTotal = null)
    {
        $this
            ->setDescriptionTemplate($descriptionTemplate)
            ->setLayoutTotal($layoutTotal)
            ->setObsoleteLayoutID($obsoleteLayoutID)
            ->setObsoleteThemeID($obsoleteThemeID)
            ->setThemeGroup($themeGroup)
            ->setThemeTotal($themeTotal);
    }
    /**
     * Get DescriptionTemplate value
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType[]
     */
    public function getDescriptionTemplate(): ?array
    {
        return $this->DescriptionTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setDescriptionTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDescriptionTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDescriptionTemplateForArrayConstraintsFromSetDescriptionTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDescriptionTemplatesResponseTypeDescriptionTemplateItem) {
            // validation for constraint: itemType
            if (!$getDescriptionTemplatesResponseTypeDescriptionTemplateItem instanceof \macropage\ebaysdk\trading\StructType\DescriptionTemplateType) {
                $invalidValues[] = is_object($getDescriptionTemplatesResponseTypeDescriptionTemplateItem) ? get_class($getDescriptionTemplatesResponseTypeDescriptionTemplateItem) : sprintf('%s(%s)', gettype($getDescriptionTemplatesResponseTypeDescriptionTemplateItem), var_export($getDescriptionTemplatesResponseTypeDescriptionTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DescriptionTemplate property can only contain items of type \macropage\ebaysdk\trading\StructType\DescriptionTemplateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DescriptionTemplate value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DescriptionTemplateType[] $descriptionTemplate
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setDescriptionTemplate(?array $descriptionTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($descriptionTemplateArrayErrorMessage = self::validateDescriptionTemplateForArrayConstraintsFromSetDescriptionTemplate($descriptionTemplate))) {
            throw new InvalidArgumentException($descriptionTemplateArrayErrorMessage, __LINE__);
        }
        $this->DescriptionTemplate = $descriptionTemplate;
        
        return $this;
    }
    /**
     * Add item to DescriptionTemplate value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DescriptionTemplateType $item
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function addToDescriptionTemplate(\macropage\ebaysdk\trading\StructType\DescriptionTemplateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DescriptionTemplateType) {
            throw new InvalidArgumentException(sprintf('The DescriptionTemplate property can only contain items of type \macropage\ebaysdk\trading\StructType\DescriptionTemplateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DescriptionTemplate[] = $item;
        
        return $this;
    }
    /**
     * Get LayoutTotal value
     * @return int|null
     */
    public function getLayoutTotal(): ?int
    {
        return $this->LayoutTotal;
    }
    /**
     * Set LayoutTotal value
     * @param int $layoutTotal
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setLayoutTotal(?int $layoutTotal = null): self
    {
        // validation for constraint: int
        if (!is_null($layoutTotal) && !(is_int($layoutTotal) || ctype_digit($layoutTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($layoutTotal, true), gettype($layoutTotal)), __LINE__);
        }
        $this->LayoutTotal = $layoutTotal;
        
        return $this;
    }
    /**
     * Get ObsoleteLayoutID value
     * @return int[]
     */
    public function getObsoleteLayoutID(): ?array
    {
        return $this->ObsoleteLayoutID;
    }
    /**
     * This method is responsible for validating the values passed to the setObsoleteLayoutID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setObsoleteLayoutID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateObsoleteLayoutIDForArrayConstraintsFromSetObsoleteLayoutID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem) {
            // validation for constraint: itemType
            if (!(is_int($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem) || ctype_digit($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem))) {
                $invalidValues[] = is_object($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem) ? get_class($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem) : sprintf('%s(%s)', gettype($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem), var_export($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ObsoleteLayoutID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ObsoleteLayoutID value
     * @throws InvalidArgumentException
     * @param int[] $obsoleteLayoutID
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setObsoleteLayoutID(?array $obsoleteLayoutID = null): self
    {
        // validation for constraint: array
        if ('' !== ($obsoleteLayoutIDArrayErrorMessage = self::validateObsoleteLayoutIDForArrayConstraintsFromSetObsoleteLayoutID($obsoleteLayoutID))) {
            throw new InvalidArgumentException($obsoleteLayoutIDArrayErrorMessage, __LINE__);
        }
        $this->ObsoleteLayoutID = $obsoleteLayoutID;
        
        return $this;
    }
    /**
     * Add item to ObsoleteLayoutID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function addToObsoleteLayoutID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The ObsoleteLayoutID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ObsoleteLayoutID[] = $item;
        
        return $this;
    }
    /**
     * Get ObsoleteThemeID value
     * @return int[]
     */
    public function getObsoleteThemeID(): ?array
    {
        return $this->ObsoleteThemeID;
    }
    /**
     * This method is responsible for validating the values passed to the setObsoleteThemeID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setObsoleteThemeID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateObsoleteThemeIDForArrayConstraintsFromSetObsoleteThemeID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDescriptionTemplatesResponseTypeObsoleteThemeIDItem) {
            // validation for constraint: itemType
            if (!(is_int($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem) || ctype_digit($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem))) {
                $invalidValues[] = is_object($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem) ? get_class($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem) : sprintf('%s(%s)', gettype($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem), var_export($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ObsoleteThemeID property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ObsoleteThemeID value
     * @throws InvalidArgumentException
     * @param int[] $obsoleteThemeID
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setObsoleteThemeID(?array $obsoleteThemeID = null): self
    {
        // validation for constraint: array
        if ('' !== ($obsoleteThemeIDArrayErrorMessage = self::validateObsoleteThemeIDForArrayConstraintsFromSetObsoleteThemeID($obsoleteThemeID))) {
            throw new InvalidArgumentException($obsoleteThemeIDArrayErrorMessage, __LINE__);
        }
        $this->ObsoleteThemeID = $obsoleteThemeID;
        
        return $this;
    }
    /**
     * Add item to ObsoleteThemeID value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function addToObsoleteThemeID(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The ObsoleteThemeID property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ObsoleteThemeID[] = $item;
        
        return $this;
    }
    /**
     * Get ThemeGroup value
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType[]
     */
    public function getThemeGroup(): ?array
    {
        return $this->ThemeGroup;
    }
    /**
     * This method is responsible for validating the values passed to the setThemeGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThemeGroup method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThemeGroupForArrayConstraintsFromSetThemeGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDescriptionTemplatesResponseTypeThemeGroupItem) {
            // validation for constraint: itemType
            if (!$getDescriptionTemplatesResponseTypeThemeGroupItem instanceof \macropage\ebaysdk\trading\StructType\ThemeGroupType) {
                $invalidValues[] = is_object($getDescriptionTemplatesResponseTypeThemeGroupItem) ? get_class($getDescriptionTemplatesResponseTypeThemeGroupItem) : sprintf('%s(%s)', gettype($getDescriptionTemplatesResponseTypeThemeGroupItem), var_export($getDescriptionTemplatesResponseTypeThemeGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ThemeGroup property can only contain items of type \macropage\ebaysdk\trading\StructType\ThemeGroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ThemeGroup value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ThemeGroupType[] $themeGroup
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setThemeGroup(?array $themeGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($themeGroupArrayErrorMessage = self::validateThemeGroupForArrayConstraintsFromSetThemeGroup($themeGroup))) {
            throw new InvalidArgumentException($themeGroupArrayErrorMessage, __LINE__);
        }
        $this->ThemeGroup = $themeGroup;
        
        return $this;
    }
    /**
     * Add item to ThemeGroup value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ThemeGroupType $item
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function addToThemeGroup(\macropage\ebaysdk\trading\StructType\ThemeGroupType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ThemeGroupType) {
            throw new InvalidArgumentException(sprintf('The ThemeGroup property can only contain items of type \macropage\ebaysdk\trading\StructType\ThemeGroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ThemeGroup[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
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
}
