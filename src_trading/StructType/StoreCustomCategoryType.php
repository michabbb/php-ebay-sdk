<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomCategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Configuration of a store custom category.
 * @subpackage Structs
 */
class StoreCustomCategoryType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: Custom category ID. For SetStoreCategories, required only if Action is set to Rename, Move or Delete.
     * @var int|null
     */
    protected ?int $CategoryID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the custom category.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: Order in which the custom category appears in the list of store categories.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Order = null;
    /**
     * The ChildCategory
     * Meta information extracted from the WSDL
     * - documentation: Contains the properties of a custom subcategory for an eBay Store. eBay Stores support three category levels.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[]
     */
    protected ?array $ChildCategory = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $categoryID = null, ?string $name = null, ?int $order = null, ?array $childCategory = null, $any = null)
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
    public function getCategoryID(): ?int
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function setCategoryID(?int $categoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !(is_int($categoryID) || ctype_digit($categoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
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
     * Get Order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Get ChildCategory value
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[]
     */
    public function getChildCategory(): ?array
    {
        return $this->ChildCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setChildCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildCategoryForArrayConstraintsFromSetChildCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $storeCustomCategoryTypeChildCategoryItem) {
            // validation for constraint: itemType
            if (!$storeCustomCategoryTypeChildCategoryItem instanceof \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType) {
                $invalidValues[] = is_object($storeCustomCategoryTypeChildCategoryItem) ? get_class($storeCustomCategoryTypeChildCategoryItem) : sprintf('%s(%s)', gettype($storeCustomCategoryTypeChildCategoryItem), var_export($storeCustomCategoryTypeChildCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ChildCategory property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ChildCategory value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType[] $childCategory
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function setChildCategory(?array $childCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($childCategoryArrayErrorMessage = self::validateChildCategoryForArrayConstraintsFromSetChildCategory($childCategory))) {
            throw new InvalidArgumentException($childCategoryArrayErrorMessage, __LINE__);
        }
        $this->ChildCategory = $childCategory;
        
        return $this;
    }
    /**
     * Add item to ChildCategory value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType $item
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
     */
    public function addToChildCategory(\macropage\ebaysdk\trading\StructType\StoreCustomCategoryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType) {
            throw new InvalidArgumentException(sprintf('The ChildCategory property can only contain items of type \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ChildCategory[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomCategoryType
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
