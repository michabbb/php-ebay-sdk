<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for data on one listing category. Many of the <b>CategoryType</b> fields are only returned in the <b>GetCategories</b> response. Add/Revise/Relist calls only use the <b>CategoryID</b> field to specify which eBay category in
 * which to list the item.
 * @subpackage Structs
 */
class CategoryType extends AbstractStructBase
{
    /**
     * The BestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category supports Best Offers. If this field is not present, the category does not support Best Offers. This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BestOfferEnabled = null;
    /**
     * The AutoPayEnabled
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category supports immediate payment for listings. The immediate payment feature is applicable to fixed-price listings, to auction listings with the Buy It Now option
     * enabled, and for a motor vehicle listing that requires an initial deposit. If the immediate payment feature is enabled for a listing, the buyer must pay immediately after clicking the 'Buy it Now' button. This field is only returned when
     * <code>true</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AutoPayEnabled = null;
    /**
     * The B2BVATEnabled
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category supports business-to-business (B2B) VAT listings. If this field is not present, the category does not B2B VAT listings. This field is not returned when
     * <code>false</code>. This feature is applicable to the eBay Germany (DE), Austria (AT), and Switzerland (CH) sites only.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $B2BVATEnabled = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: This string value is the unique identifier of an eBay category. In <b>GetItem</b> and related calls, see the <b>CategoryName</b> field for the text name of the category. The parent category of this eBay category is only shown in
     * <b>GetCategories</b>. <br> <span class="tablenote"><b>Note: </b> When listing in categoryID 173651 (Auto Performance Tuning Devices & Software), use of catalog products is required. For more information, see <a
     * href="../../../../../api-docs/user-guides/static/trading-user-guide/tuning-devices-and-software.html" target="_blank">Tuning devices and software</a>. </span> In an Add call, the <b>PrimaryCategory.CategoryID</b> is conditionally required unless the
     * seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing
     * category, and stock photo defined in the catalog product is used to create the listing. <br> <br> In an Add/Revise/Relist call, the <b>SecondaryCategory.CategoryID</b> is conditionally required if a Secondary Category is used. Using a Secondary
     * Category can incur a listing fee. <br><br> <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a
     * multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing
     * has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The CategoryLevel
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the level where the category fits in the eBay site's category hierarchy. For example, if this field has a value of <code>2</code>, then the category is two levels below the root category in the eBay
     * site's category hierarchy.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CategoryLevel = null;
    /**
     * The CategoryName
     * Meta information extracted from the WSDL
     * - documentation: This string value is the display name of the eBay primary category, as it would appear on the eBay site. In <b>GetItem</b>, this will be a fully-qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryName = null;
    /**
     * The CategoryParentID
     * Meta information extracted from the WSDL
     * - documentation: This string value is the Category ID of the primary category's (indicated in the <b>CategoryID</b> field) parent category. The number of <b>CategoryParentID</b> values that are returned will depend on the <b>LevelLimit</b> value that
     * is set (in <b>GetCategories</b>) and on how far up the primary category is in the eBay category hierarchy. <b>CategoryParentID</b> values are returned in correct sequence, starting from the root category and ending with the category that is the
     * direct parent of the primary category specified in <b>CategoryID</b>. The <b>CategoryID</b> and <b>CategoryParentID</b> values will be the same if the <b>LevelLimit</b> value is set to <code>1</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $CategoryParentID = null;
    /**
     * The Expired
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is no longer a valid eBay category on the site, and items may not be listed in this category. This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Expired = null;
    /**
     * The LeafCategory
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is an eBay leaf category, a category in which items may be listed. This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LeafCategory = null;
    /**
     * The Virtual
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is an eBay virtual category, a category in which items may not be listed. This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Virtual = null;
    /**
     * The NumOfItems
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumOfItems = null;
    /**
     * The ORPA
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reserve Price policy on auction listings. For example, if the site's default setting is to allow setting a Reserve
     * Price, but <b>ORPA</b> is returned as <code>true</code>, this particular category does not support setting a Reserve Price. Or, if the site's default setting is not to allow setting a Reserve Price, but <b>ORPA</b> is returned as <code>true</code>,
     * this particular category is the exception to that rule and does support setting a Reserve Price. If <b>ORPA</b> is <code>true</code> for the corresponding category, you can generally assume that the category's subcategories inherit the same setting.
     * 'ORPA' is an acronym for 'Override Reserve Price Allowed'. <br> <br> This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ORPA = null;
    /**
     * The ORRA
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category is an exception to the eBay site's standard Reduce Reserve Price (on active auction listing) policy. For example, if the site's default setting is to allow
     * reducing a Reserve Price for the active auction listing, but <b>ORRA</b> is returned as <code>true</code>, this particular category does not support reducing a Reserve Price. Or, if the site's default setting is not to allow reducting a Reserve
     * Price, but <b>ORRA</b> is returned as <code>true</code>, this particular category is the exception to that rule and does support reducing a Reserve Price. If <b>ORRA</b> is <code>true</code> for the corresponding category, you can generally assume
     * that the category's subcategories inherit the same setting. 'ORRA' is an acronym for 'Override Reduce Reserve Allowed'. <br> <br> This field is not returned when <code>false</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ORRA = null;
    /**
     * The LSD
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned as <code>true</code>, the corresponding category does not support lot listings. A lot listing is a listing that features multiple related items that must be purchased by one buyer in one transaction. 'LSD'
     * is an acronym for 'Lot Size Disabled'. 'Lot Size' refers to the <b>LotSize</b> field in the Add/Revise/Relisting calls that is conditionally required if the seller is creating a lot listing. The <b>LSD</b> field is not returned when
     * <code>false</code>.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LSD = null;
    /**
     * The Keywords
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Keywords = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CategoryType
     * @uses CategoryType::setBestOfferEnabled()
     * @uses CategoryType::setAutoPayEnabled()
     * @uses CategoryType::setB2BVATEnabled()
     * @uses CategoryType::setCategoryID()
     * @uses CategoryType::setCategoryLevel()
     * @uses CategoryType::setCategoryName()
     * @uses CategoryType::setCategoryParentID()
     * @uses CategoryType::setExpired()
     * @uses CategoryType::setLeafCategory()
     * @uses CategoryType::setVirtual()
     * @uses CategoryType::setNumOfItems()
     * @uses CategoryType::setORPA()
     * @uses CategoryType::setORRA()
     * @uses CategoryType::setLSD()
     * @uses CategoryType::setKeywords()
     * @uses CategoryType::setAny()
     * @param bool $bestOfferEnabled
     * @param bool $autoPayEnabled
     * @param bool $b2BVATEnabled
     * @param string $categoryID
     * @param int $categoryLevel
     * @param string $categoryName
     * @param string[] $categoryParentID
     * @param bool $expired
     * @param bool $leafCategory
     * @param bool $virtual
     * @param int $numOfItems
     * @param bool $oRPA
     * @param bool $oRRA
     * @param bool $lSD
     * @param string $keywords
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $bestOfferEnabled = null, ?bool $autoPayEnabled = null, ?bool $b2BVATEnabled = null, ?string $categoryID = null, ?int $categoryLevel = null, ?string $categoryName = null, ?array $categoryParentID = null, ?bool $expired = null, ?bool $leafCategory = null, ?bool $virtual = null, ?int $numOfItems = null, ?bool $oRPA = null, ?bool $oRRA = null, ?bool $lSD = null, ?string $keywords = null, $any = null)
    {
        $this
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setAutoPayEnabled($autoPayEnabled)
            ->setB2BVATEnabled($b2BVATEnabled)
            ->setCategoryID($categoryID)
            ->setCategoryLevel($categoryLevel)
            ->setCategoryName($categoryName)
            ->setCategoryParentID($categoryParentID)
            ->setExpired($expired)
            ->setLeafCategory($leafCategory)
            ->setVirtual($virtual)
            ->setNumOfItems($numOfItems)
            ->setORPA($oRPA)
            ->setORRA($oRRA)
            ->setLSD($lSD)
            ->setKeywords($keywords)
            ->setAny($any);
    }
    /**
     * Get BestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled(): ?bool
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setBestOfferEnabled(?bool $bestOfferEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferEnabled, true), gettype($bestOfferEnabled)), __LINE__);
        }
        $this->BestOfferEnabled = $bestOfferEnabled;
        
        return $this;
    }
    /**
     * Get AutoPayEnabled value
     * @return bool|null
     */
    public function getAutoPayEnabled(): ?bool
    {
        return $this->AutoPayEnabled;
    }
    /**
     * Set AutoPayEnabled value
     * @param bool $autoPayEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setAutoPayEnabled(?bool $autoPayEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($autoPayEnabled) && !is_bool($autoPayEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoPayEnabled, true), gettype($autoPayEnabled)), __LINE__);
        }
        $this->AutoPayEnabled = $autoPayEnabled;
        
        return $this;
    }
    /**
     * Get B2BVATEnabled value
     * @return bool|null
     */
    public function getB2BVATEnabled(): ?bool
    {
        return $this->B2BVATEnabled;
    }
    /**
     * Set B2BVATEnabled value
     * @param bool $b2BVATEnabled
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setB2BVATEnabled(?bool $b2BVATEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($b2BVATEnabled) && !is_bool($b2BVATEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($b2BVATEnabled, true), gettype($b2BVATEnabled)), __LINE__);
        }
        $this->B2BVATEnabled = $b2BVATEnabled;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
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
     * @return string[]
     */
    public function getCategoryParentID(): ?array
    {
        return $this->CategoryParentID;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryParentID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryParentID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryParentIDForArrayConstraintsFromSetCategoryParentID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $categoryTypeCategoryParentIDItem) {
            // validation for constraint: itemType
            if (!is_string($categoryTypeCategoryParentIDItem)) {
                $invalidValues[] = is_object($categoryTypeCategoryParentIDItem) ? get_class($categoryTypeCategoryParentIDItem) : sprintf('%s(%s)', gettype($categoryTypeCategoryParentIDItem), var_export($categoryTypeCategoryParentIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryParentID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryParentID value
     * @throws InvalidArgumentException
     * @param string[] $categoryParentID
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setCategoryParentID(?array $categoryParentID = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryParentIDArrayErrorMessage = self::validateCategoryParentIDForArrayConstraintsFromSetCategoryParentID($categoryParentID))) {
            throw new InvalidArgumentException($categoryParentIDArrayErrorMessage, __LINE__);
        }
        $this->CategoryParentID = $categoryParentID;
        
        return $this;
    }
    /**
     * Add item to CategoryParentID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function addToCategoryParentID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CategoryParentID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryParentID[] = $item;
        
        return $this;
    }
    /**
     * Get Expired value
     * @return bool|null
     */
    public function getExpired(): ?bool
    {
        return $this->Expired;
    }
    /**
     * Set Expired value
     * @param bool $expired
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setExpired(?bool $expired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expired) && !is_bool($expired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expired, true), gettype($expired)), __LINE__);
        }
        $this->Expired = $expired;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
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
     * Get Virtual value
     * @return bool|null
     */
    public function getVirtual(): ?bool
    {
        return $this->Virtual;
    }
    /**
     * Set Virtual value
     * @param bool $virtual
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setVirtual(?bool $virtual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($virtual) && !is_bool($virtual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($virtual, true), gettype($virtual)), __LINE__);
        }
        $this->Virtual = $virtual;
        
        return $this;
    }
    /**
     * Get NumOfItems value
     * @return int|null
     */
    public function getNumOfItems(): ?int
    {
        return $this->NumOfItems;
    }
    /**
     * Set NumOfItems value
     * @param int $numOfItems
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setNumOfItems(?int $numOfItems = null): self
    {
        // validation for constraint: int
        if (!is_null($numOfItems) && !(is_int($numOfItems) || ctype_digit($numOfItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numOfItems, true), gettype($numOfItems)), __LINE__);
        }
        $this->NumOfItems = $numOfItems;
        
        return $this;
    }
    /**
     * Get ORPA value
     * @return bool|null
     */
    public function getORPA(): ?bool
    {
        return $this->ORPA;
    }
    /**
     * Set ORPA value
     * @param bool $oRPA
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setORPA(?bool $oRPA = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oRPA) && !is_bool($oRPA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oRPA, true), gettype($oRPA)), __LINE__);
        }
        $this->ORPA = $oRPA;
        
        return $this;
    }
    /**
     * Get ORRA value
     * @return bool|null
     */
    public function getORRA(): ?bool
    {
        return $this->ORRA;
    }
    /**
     * Set ORRA value
     * @param bool $oRRA
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setORRA(?bool $oRRA = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oRRA) && !is_bool($oRRA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oRRA, true), gettype($oRRA)), __LINE__);
        }
        $this->ORRA = $oRRA;
        
        return $this;
    }
    /**
     * Get LSD value
     * @return bool|null
     */
    public function getLSD(): ?bool
    {
        return $this->LSD;
    }
    /**
     * Set LSD value
     * @param bool $lSD
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setLSD(?bool $lSD = null): self
    {
        // validation for constraint: boolean
        if (!is_null($lSD) && !is_bool($lSD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lSD, true), gettype($lSD)), __LINE__);
        }
        $this->LSD = $lSD;
        
        return $this;
    }
    /**
     * Get Keywords value
     * @return string|null
     */
    public function getKeywords(): ?string
    {
        return $this->Keywords;
    }
    /**
     * Set Keywords value
     * @param string $keywords
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
     */
    public function setKeywords(?string $keywords = null): self
    {
        // validation for constraint: string
        if (!is_null($keywords) && !is_string($keywords)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keywords, true), gettype($keywords)), __LINE__);
        }
        $this->Keywords = $keywords;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryType
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
