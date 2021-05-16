<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by each eBay category that is returned in the response of the <b>GetCategoryInfo</b> call. This type is used by the <b>Category</b> container, and consists of high-level details of a category, including its category
 * ID value and information on its parent category, child categories, and its level in the eBay site's category hierarchy.
 * @subpackage Structs
 */
class CategoryType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: The numeric identifier of a category on an eBay marketplace. For the root category of an eBay marketplace, the value will be <code>-1</code>. <br> <br> This field is always returned with each <b>Category</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The CategoryLevel
     * Meta information extracted from the WSDL
     * - documentation: The level where the category fits in the eBay marketplace's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category. For the root category of an eBay
     * marketplace, the value will be <code>0</code>. <br> <br> This field is always returned with each <b>Category</b> container.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CategoryLevel = null;
    /**
     * The CategoryName
     * Meta information extracted from the WSDL
     * - documentation: The display name of the category as it would appear on the eBay marketplace. For the root category of an eBay marketplace, the value will be <code>Root</code>. <br> <br> This field is always returned with each <b>Category</b>
     * container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryName = null;
    /**
     * The CategoryParentID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the category's parent category. Note that <code>-1</code> is returned for Level 1 categories, and <code>0</code> is returned for the root category of an eBay marketplace. <br> <br> This field is always
     * returned with each <b>Category</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryParentID = null;
    /**
     * The CategoryParentName
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. Instead, the name of the category's parent category can be derived from the <b>CategoryNamePath</b> field
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryParentName = null;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemCount = null;
    /**
     * The CategoryNamePath
     * Meta information extracted from the WSDL
     * - documentation: The fully-qualified category name path for the eBay category, including the display name for the category and the display name for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay
     * category name is separated with a colon (:). An example is shown below: <br> <br> <code> &lt;CategoryNamePath&gt;Clothing, Shoes & Accessories:Men's Clothing:Shirts:T-Shirts&lt;/CategoryNamePath&gt; </code> <br> <br> This field is always returned for
     * any eBay category, but is not returned for the root (Level 0) of an eBay marketplace.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryNamePath = null;
    /**
     * The CategoryIDPath
     * Meta information extracted from the WSDL
     * - documentation: The eBay category ID path for the eBay category, including the category ID for the corresponding category and the category IDs for all ancestor categories, all the way to the top-level (category Level 1) eBay category. Each eBay
     * category ID is separated with a colon (:). An example is shown below: <br> <br> <code> &lt;CategoryIDPath&gt;11450:1059:185100:15687&lt;/CategoryIDPath&gt; </code> <br> <br> This field is always returned for any eBay category, but is not returned for
     * the root (Level 0) of an eBay marketplace.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryIDPath = null;
    /**
     * The LeafCategory
     * Meta information extracted from the WSDL
     * - documentation: This boolean field indicates if the corresponding category is a leaf category. eBay listings can only be created in leaf categories. If the value is <code>true</code>, the eBay category is a leaf category. <br> <br> This field is
     * always returned with each <b>Category</b> container.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LeafCategory = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CategoryType
     * @uses CategoryType::setCategoryID()
     * @uses CategoryType::setCategoryLevel()
     * @uses CategoryType::setCategoryName()
     * @uses CategoryType::setCategoryParentID()
     * @uses CategoryType::setCategoryParentName()
     * @uses CategoryType::setItemCount()
     * @uses CategoryType::setCategoryNamePath()
     * @uses CategoryType::setCategoryIDPath()
     * @uses CategoryType::setLeafCategory()
     * @uses CategoryType::setAny()
     * @param string $categoryID
     * @param int $categoryLevel
     * @param string $categoryName
     * @param string $categoryParentID
     * @param string $categoryParentName
     * @param int $itemCount
     * @param string $categoryNamePath
     * @param string $categoryIDPath
     * @param bool $leafCategory
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $categoryID = null, ?int $categoryLevel = null, ?string $categoryName = null, ?string $categoryParentID = null, ?string $categoryParentName = null, ?int $itemCount = null, ?string $categoryNamePath = null, ?string $categoryIDPath = null, ?bool $leafCategory = null, $any = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setCategoryLevel($categoryLevel)
            ->setCategoryName($categoryName)
            ->setCategoryParentID($categoryParentID)
            ->setCategoryParentName($categoryParentName)
            ->setItemCount($itemCount)
            ->setCategoryNamePath($categoryNamePath)
            ->setCategoryIDPath($categoryIDPath)
            ->setLeafCategory($leafCategory)
            ->setAny($any);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get CategoryLevel value
     * @return int|null
     */
    public function getCategoryLevel(): ?int
    {
        return $this->CategoryLevel;
    }
    /**
     * Set CategoryLevel value
     * @param int $categoryLevel
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryLevel(?int $categoryLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryLevel) && !(is_int($categoryLevel) || ctype_digit($categoryLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryLevel, true), gettype($categoryLevel)), __LINE__);
        }
        $this->CategoryLevel = $categoryLevel;
        
        return $this;
    }
    /**
     * Get CategoryName value
     * @return string|null
     */
    public function getCategoryName(): ?string
    {
        return $this->CategoryName;
    }
    /**
     * Set CategoryName value
     * @param string $categoryName
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryName(?string $categoryName = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryName, true), gettype($categoryName)), __LINE__);
        }
        $this->CategoryName = $categoryName;
        
        return $this;
    }
    /**
     * Get CategoryParentID value
     * @return string|null
     */
    public function getCategoryParentID(): ?string
    {
        return $this->CategoryParentID;
    }
    /**
     * Set CategoryParentID value
     * @param string $categoryParentID
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryParentID(?string $categoryParentID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryParentID) && !is_string($categoryParentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryParentID, true), gettype($categoryParentID)), __LINE__);
        }
        $this->CategoryParentID = $categoryParentID;
        
        return $this;
    }
    /**
     * Get CategoryParentName value
     * @return string|null
     */
    public function getCategoryParentName(): ?string
    {
        return $this->CategoryParentName;
    }
    /**
     * Set CategoryParentName value
     * @param string $categoryParentName
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryParentName(?string $categoryParentName = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryParentName) && !is_string($categoryParentName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryParentName, true), gettype($categoryParentName)), __LINE__);
        }
        $this->CategoryParentName = $categoryParentName;
        
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int|null
     */
    public function getItemCount(): ?int
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setItemCount(?int $itemCount = null): self
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !(is_int($itemCount) || ctype_digit($itemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemCount, true), gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        
        return $this;
    }
    /**
     * Get CategoryNamePath value
     * @return string|null
     */
    public function getCategoryNamePath(): ?string
    {
        return $this->CategoryNamePath;
    }
    /**
     * Set CategoryNamePath value
     * @param string $categoryNamePath
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryNamePath(?string $categoryNamePath = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryNamePath) && !is_string($categoryNamePath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryNamePath, true), gettype($categoryNamePath)), __LINE__);
        }
        $this->CategoryNamePath = $categoryNamePath;
        
        return $this;
    }
    /**
     * Get CategoryIDPath value
     * @return string|null
     */
    public function getCategoryIDPath(): ?string
    {
        return $this->CategoryIDPath;
    }
    /**
     * Set CategoryIDPath value
     * @param string $categoryIDPath
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setCategoryIDPath(?string $categoryIDPath = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryIDPath) && !is_string($categoryIDPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryIDPath, true), gettype($categoryIDPath)), __LINE__);
        }
        $this->CategoryIDPath = $categoryIDPath;
        
        return $this;
    }
    /**
     * Get LeafCategory value
     * @return bool|null
     */
    public function getLeafCategory(): ?bool
    {
        return $this->LeafCategory;
    }
    /**
     * Set LeafCategory value
     * @param bool $leafCategory
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
     */
    public function setLeafCategory(?bool $leafCategory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($leafCategory) && !is_bool($leafCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($leafCategory, true), gettype($leafCategory)), __LINE__);
        }
        $this->LeafCategory = $leafCategory;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\CategoryType
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
