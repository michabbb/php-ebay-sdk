<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDescriptionTemplatesResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetDescriptionTemplates</b> call. This call retrieves the Listing Designer templates that are available for use by the seller. The user has the option of retrieving all available Listing
 * Designer templates for all categories, for all motor vehicle categories, or for a specific eBay category.
 * @subpackage Structs
 */
class GetDescriptionTemplatesResponseType extends AbstractResponseType
{
    /**
     * The DescriptionTemplate
     * Meta informations extracted from the WSDL
     * - documentation: A <b>DescriptionTemplate</b> container is retrieved for each available Listing Designer template. Each <b>DescriptionTemplate</b> container includes the unique identifier of the template, the Listing Designer Theme Group that it
     * belongs to, the CDATA representation of the Listing Designer template, and the URL to an image that serves as an example of the Listing Designer template.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DescriptionTemplateType[]
     */
    public $DescriptionTemplate;
    /**
     * The LayoutTotal
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of Listing Designer Layout templates that were retrieved. This field is always returned, even if it is <code>0</code>
     * - minOccurs: 0
     * @var int
     */
    public $LayoutTotal;
    /**
     * The ObsoleteLayoutID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of a Listing Designer Layout template that is now obsolete. An <b>ObsoleteLayoutID</b> field is returned for each obsolete Listing Designer Layout template.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $ObsoleteLayoutID;
    /**
     * The ObsoleteThemeID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of a Listing Designer Theme template that is now obsolete. An <b>ObsoleteThemeID</b> field is returned for each obsolete Listing Designer Theme template.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $ObsoleteThemeID;
    /**
     * The ThemeGroup
     * Meta informations extracted from the WSDL
     * - documentation: A <b>ThemeGroup</b> container is retrieved for each available Listing Designer Theme Group. Each <b>ThemeGroup</b> container includes the unique identifier of the Theme Group, the Theme Group name, and all of the Listing Designer
     * Theme template that belong to that Theme Group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ThemeGroupType[]
     */
    public $ThemeGroup;
    /**
     * The ThemeTotal
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of Listing Designer Theme templates that were retrieved. This field is always returned, even if it is <code>0</code>
     * - minOccurs: 0
     * @var int
     */
    public $ThemeTotal;
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
    public function __construct(array $descriptionTemplate = array(), $layoutTotal = null, array $obsoleteLayoutID = array(), array $obsoleteThemeID = array(), array $themeGroup = array(), $themeTotal = null)
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
     * @return \macropage\ebaysdk\trading\StructType\DescriptionTemplateType[]|null
     */
    public function getDescriptionTemplate()
    {
        return $this->DescriptionTemplate;
    }
    /**
     * Set DescriptionTemplate value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DescriptionTemplateType[] $descriptionTemplate
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setDescriptionTemplate(array $descriptionTemplate = array())
    {
        foreach ($descriptionTemplate as $getDescriptionTemplatesResponseTypeDescriptionTemplateItem) {
            // validation for constraint: itemType
            if (!$getDescriptionTemplatesResponseTypeDescriptionTemplateItem instanceof \macropage\ebaysdk\trading\StructType\DescriptionTemplateType) {
                throw new \InvalidArgumentException(sprintf('The DescriptionTemplate property can only contain items of \macropage\ebaysdk\trading\StructType\DescriptionTemplateType, "%s" given', is_object($getDescriptionTemplatesResponseTypeDescriptionTemplateItem) ? get_class($getDescriptionTemplatesResponseTypeDescriptionTemplateItem) : gettype($getDescriptionTemplatesResponseTypeDescriptionTemplateItem)), __LINE__);
            }
        }
        $this->DescriptionTemplate = $descriptionTemplate;
        return $this;
    }
    /**
     * Add item to DescriptionTemplate value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DescriptionTemplateType $item
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function addToDescriptionTemplate(\macropage\ebaysdk\trading\StructType\DescriptionTemplateType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DescriptionTemplateType) {
            throw new \InvalidArgumentException(sprintf('The DescriptionTemplate property can only contain items of \macropage\ebaysdk\trading\StructType\DescriptionTemplateType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DescriptionTemplate[] = $item;
        return $this;
    }
    /**
     * Get LayoutTotal value
     * @return int|null
     */
    public function getLayoutTotal()
    {
        return $this->LayoutTotal;
    }
    /**
     * Set LayoutTotal value
     * @param int $layoutTotal
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setLayoutTotal($layoutTotal = null)
    {
        // validation for constraint: int
        if (!is_null($layoutTotal) && !is_numeric($layoutTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($layoutTotal)), __LINE__);
        }
        $this->LayoutTotal = $layoutTotal;
        return $this;
    }
    /**
     * Get ObsoleteLayoutID value
     * @return int[]|null
     */
    public function getObsoleteLayoutID()
    {
        return $this->ObsoleteLayoutID;
    }
    /**
     * Set ObsoleteLayoutID value
     * @throws \InvalidArgumentException
     * @param int[] $obsoleteLayoutID
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setObsoleteLayoutID(array $obsoleteLayoutID = array())
    {
        foreach ($obsoleteLayoutID as $getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem) {
            // validation for constraint: itemType
            if (!is_numeric($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ObsoleteLayoutID property can only contain items of int, "%s" given', is_object($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem) ? get_class($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem) : gettype($getDescriptionTemplatesResponseTypeObsoleteLayoutIDItem)), __LINE__);
            }
        }
        $this->ObsoleteLayoutID = $obsoleteLayoutID;
        return $this;
    }
    /**
     * Add item to ObsoleteLayoutID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function addToObsoleteLayoutID($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The ObsoleteLayoutID property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ObsoleteLayoutID[] = $item;
        return $this;
    }
    /**
     * Get ObsoleteThemeID value
     * @return int[]|null
     */
    public function getObsoleteThemeID()
    {
        return $this->ObsoleteThemeID;
    }
    /**
     * Set ObsoleteThemeID value
     * @throws \InvalidArgumentException
     * @param int[] $obsoleteThemeID
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setObsoleteThemeID(array $obsoleteThemeID = array())
    {
        foreach ($obsoleteThemeID as $getDescriptionTemplatesResponseTypeObsoleteThemeIDItem) {
            // validation for constraint: itemType
            if (!is_numeric($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem)) {
                throw new \InvalidArgumentException(sprintf('The ObsoleteThemeID property can only contain items of int, "%s" given', is_object($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem) ? get_class($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem) : gettype($getDescriptionTemplatesResponseTypeObsoleteThemeIDItem)), __LINE__);
            }
        }
        $this->ObsoleteThemeID = $obsoleteThemeID;
        return $this;
    }
    /**
     * Add item to ObsoleteThemeID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function addToObsoleteThemeID($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The ObsoleteThemeID property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ObsoleteThemeID[] = $item;
        return $this;
    }
    /**
     * Get ThemeGroup value
     * @return \macropage\ebaysdk\trading\StructType\ThemeGroupType[]|null
     */
    public function getThemeGroup()
    {
        return $this->ThemeGroup;
    }
    /**
     * Set ThemeGroup value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ThemeGroupType[] $themeGroup
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setThemeGroup(array $themeGroup = array())
    {
        foreach ($themeGroup as $getDescriptionTemplatesResponseTypeThemeGroupItem) {
            // validation for constraint: itemType
            if (!$getDescriptionTemplatesResponseTypeThemeGroupItem instanceof \macropage\ebaysdk\trading\StructType\ThemeGroupType) {
                throw new \InvalidArgumentException(sprintf('The ThemeGroup property can only contain items of \macropage\ebaysdk\trading\StructType\ThemeGroupType, "%s" given', is_object($getDescriptionTemplatesResponseTypeThemeGroupItem) ? get_class($getDescriptionTemplatesResponseTypeThemeGroupItem) : gettype($getDescriptionTemplatesResponseTypeThemeGroupItem)), __LINE__);
            }
        }
        $this->ThemeGroup = $themeGroup;
        return $this;
    }
    /**
     * Add item to ThemeGroup value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ThemeGroupType $item
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function addToThemeGroup(\macropage\ebaysdk\trading\StructType\ThemeGroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ThemeGroupType) {
            throw new \InvalidArgumentException(sprintf('The ThemeGroup property can only contain items of \macropage\ebaysdk\trading\StructType\ThemeGroupType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ThemeGroup[] = $item;
        return $this;
    }
    /**
     * Get ThemeTotal value
     * @return int|null
     */
    public function getThemeTotal()
    {
        return $this->ThemeTotal;
    }
    /**
     * Set ThemeTotal value
     * @param int $themeTotal
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public function setThemeTotal($themeTotal = null)
    {
        // validation for constraint: int
        if (!is_null($themeTotal) && !is_numeric($themeTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($themeTotal)), __LINE__);
        }
        $this->ThemeTotal = $themeTotal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetDescriptionTemplatesResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
