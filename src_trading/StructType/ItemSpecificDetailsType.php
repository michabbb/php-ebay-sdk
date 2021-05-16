<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSpecificDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ItemSpecificDetails</b> container that is returned in the <b>GeteBayDetails</b> call. The <b>ItemSpecificDetails</b> container consists of maximum threshold values that must be adhered to when creating,
 * revising, or relisting items with Item Specifics. Item Specifics are used to provide descriptive details of an item in a structured manner.
 * @subpackage Structs
 */
class ItemSpecificDetailsType extends AbstractStructBase
{
    /**
     * The MaxItemSpecificsPerItem
     * Meta information extracted from the WSDL
     * - documentation: This value is the maximum number of Item Specifics name-value pairs that can be used when creating, revising, or relisting an item on the specified site. Item Specifics are used to provide descriptive details of an item in a
     * structured manner.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxItemSpecificsPerItem = null;
    /**
     * The MaxValuesPerName
     * Meta information extracted from the WSDL
     * - documentation: This value is the maximum number of corresponding name values that can be used per Item Specific when creating, revising, or relisting an item on the specified site. An example of an Item Specific that might have multiple values is
     * 'Features'. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields. <br><br> Once you know the site threshold, it can also be helpful to know specific Item
     * Specifics in a listing category that can have more than value, such as 'Features'. To retrieve this information, you can call <b>GetCategorySpecifics</b> for a category and check the <b>NameRecommendation.ValidationRules.MaxValues</b> field for each
     * Item Specific in the response.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxValuesPerName = null;
    /**
     * The MaxCharactersPerValue
     * Meta information extracted from the WSDL
     * - documentation: This value is the maximum number of characters that can be used for an Item Specific value on the specified site.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxCharactersPerValue = null;
    /**
     * The MaxCharactersPerName
     * Meta information extracted from the WSDL
     * - documentation: This value is the maximum number of characters that can be used for an Item Specific name on the specified site.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxCharactersPerName = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: This string indicates the version of the Item Specifics metadata.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time when the Item Specifics metadata was last updated. Time is in Greenwich Mean Time (GMT) time. This timestamp can be useful in determining if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemSpecificDetailsType
     * @uses ItemSpecificDetailsType::setMaxItemSpecificsPerItem()
     * @uses ItemSpecificDetailsType::setMaxValuesPerName()
     * @uses ItemSpecificDetailsType::setMaxCharactersPerValue()
     * @uses ItemSpecificDetailsType::setMaxCharactersPerName()
     * @uses ItemSpecificDetailsType::setDetailVersion()
     * @uses ItemSpecificDetailsType::setUpdateTime()
     * @uses ItemSpecificDetailsType::setAny()
     * @param int $maxItemSpecificsPerItem
     * @param int $maxValuesPerName
     * @param int $maxCharactersPerValue
     * @param int $maxCharactersPerName
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $maxItemSpecificsPerItem = null, ?int $maxValuesPerName = null, ?int $maxCharactersPerValue = null, ?int $maxCharactersPerName = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setMaxItemSpecificsPerItem($maxItemSpecificsPerItem)
            ->setMaxValuesPerName($maxValuesPerName)
            ->setMaxCharactersPerValue($maxCharactersPerValue)
            ->setMaxCharactersPerName($maxCharactersPerName)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get MaxItemSpecificsPerItem value
     * @return int|null
     */
    public function getMaxItemSpecificsPerItem(): ?int
    {
        return $this->MaxItemSpecificsPerItem;
    }
    /**
     * Set MaxItemSpecificsPerItem value
     * @param int $maxItemSpecificsPerItem
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setMaxItemSpecificsPerItem(?int $maxItemSpecificsPerItem = null): self
    {
        // validation for constraint: int
        if (!is_null($maxItemSpecificsPerItem) && !(is_int($maxItemSpecificsPerItem) || ctype_digit($maxItemSpecificsPerItem))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItemSpecificsPerItem, true), gettype($maxItemSpecificsPerItem)), __LINE__);
        }
        $this->MaxItemSpecificsPerItem = $maxItemSpecificsPerItem;
        
        return $this;
    }
    /**
     * Get MaxValuesPerName value
     * @return int|null
     */
    public function getMaxValuesPerName(): ?int
    {
        return $this->MaxValuesPerName;
    }
    /**
     * Set MaxValuesPerName value
     * @param int $maxValuesPerName
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setMaxValuesPerName(?int $maxValuesPerName = null): self
    {
        // validation for constraint: int
        if (!is_null($maxValuesPerName) && !(is_int($maxValuesPerName) || ctype_digit($maxValuesPerName))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValuesPerName, true), gettype($maxValuesPerName)), __LINE__);
        }
        $this->MaxValuesPerName = $maxValuesPerName;
        
        return $this;
    }
    /**
     * Get MaxCharactersPerValue value
     * @return int|null
     */
    public function getMaxCharactersPerValue(): ?int
    {
        return $this->MaxCharactersPerValue;
    }
    /**
     * Set MaxCharactersPerValue value
     * @param int $maxCharactersPerValue
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setMaxCharactersPerValue(?int $maxCharactersPerValue = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCharactersPerValue) && !(is_int($maxCharactersPerValue) || ctype_digit($maxCharactersPerValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCharactersPerValue, true), gettype($maxCharactersPerValue)), __LINE__);
        }
        $this->MaxCharactersPerValue = $maxCharactersPerValue;
        
        return $this;
    }
    /**
     * Get MaxCharactersPerName value
     * @return int|null
     */
    public function getMaxCharactersPerName(): ?int
    {
        return $this->MaxCharactersPerName;
    }
    /**
     * Set MaxCharactersPerName value
     * @param int $maxCharactersPerName
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setMaxCharactersPerName(?int $maxCharactersPerName = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCharactersPerName) && !(is_int($maxCharactersPerName) || ctype_digit($maxCharactersPerName))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCharactersPerName, true), gettype($maxCharactersPerName)), __LINE__);
        }
        $this->MaxCharactersPerName = $maxCharactersPerName;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
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
