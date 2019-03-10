<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomCategoryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Configuration of a store custom category.
 * @subpackage Structs
 */
class StoreCustomCategoryType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta informations extracted from the WSDL
     * - documentation: Custom category ID. For SetStoreCategories, required only if Action is set to Rename, Move or Delete.
     * @var int
     */
    public $CategoryID;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Name of the custom category.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - documentation: Order in which the custom category appears in the list of store categories.
     * - minOccurs: 0
     * @var int
     */
    public $Order;
    /**
     * The ChildCategory
     * Meta informations extracted from the WSDL
     * - documentation: Contains the properties of a custom subcategory for an eBay Store. eBay Stores support three category levels.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[]
     */
    public $ChildCategory;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreCustomCategoryType
     * @uses StoreCustomCategoryType::setCategoryID()
     * @uses StoreCustomCategoryType::setName()
     * @uses StoreCustomCategoryType::setOrder()
     * @uses StoreCustomCategoryType::setChildCategory()
     * @uses StoreCustomCategoryType::setAny()
     * @param int $categoryID
     * @param string $name
     * @param int $order
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[] $childCategory
     * @param \DOMDocument $any
     */
    public function __construct($categoryID = null, $name = null, $order = null, array $childCategory = array(), \DOMDocument $any = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setName($name)
            ->setOrder($order)
            ->setChildCategory($childCategory)
            ->setAny($any);
    }
    /**
     * Get CategoryID value
     * @return int|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !is_numeric($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !is_numeric($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order)), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get ChildCategory value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[]|null
     */
    public function getChildCategory()
    {
        return $this->ChildCategory;
    }
    /**
     * Set ChildCategory value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[] $childCategory
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function setChildCategory(array $childCategory = array())
    {
        foreach ($childCategory as $storeCustomCategoryTypeChildCategoryItem) {
            // validation for constraint: itemType
            if (!$storeCustomCategoryTypeChildCategoryItem instanceof \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType) {
                throw new \InvalidArgumentException(sprintf('The ChildCategory property can only contain items of \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType, "%s" given', is_object($storeCustomCategoryTypeChildCategoryItem) ? get_class($storeCustomCategoryTypeChildCategoryItem) : gettype($storeCustomCategoryTypeChildCategoryItem)), __LINE__);
            }
        }
        $this->ChildCategory = $childCategory;
        return $this;
    }
    /**
     * Add item to ChildCategory value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType $item
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function addToChildCategory(\macropage\ebaysdk\trading\StructType\StoreCustomCategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType) {
            throw new \InvalidArgumentException(sprintf('The ChildCategory property can only contain items of \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ChildCategory[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
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
