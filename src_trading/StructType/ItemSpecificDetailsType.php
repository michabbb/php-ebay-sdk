<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemSpecificDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details about custom Item Specifics validation rules.
 * @subpackage Structs
 */
class ItemSpecificDetailsType extends AbstractStructBase
{
    /**
     * The MaxItemSpecificsPerItem
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of custom Item Specifics allowed when you list an item. Also the maximum returned per category in <b>GetCategorySpecifics</b>.
     * - minOccurs: 0
     * @var int
     */
    public $MaxItemSpecificsPerItem;
    /**
     * The MaxValuesPerName
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of values returned for each custom Item Specific in <b>GetCategorySpecifics</b>.
     * - minOccurs: 0
     * @var int
     */
    public $MaxValuesPerName;
    /**
     * The MaxCharactersPerValue
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of characters the site supports per custom Item Specific value.
     * - minOccurs: 0
     * @var int
     */
    public $MaxCharactersPerValue;
    /**
     * The MaxCharactersPerName
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of characters the site supports per custom Item Specific name.
     * - minOccurs: 0
     * @var int
     */
    public $MaxCharactersPerName;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($maxItemSpecificsPerItem = null, $maxValuesPerName = null, $maxCharactersPerValue = null, $maxCharactersPerName = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
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
    public function getMaxItemSpecificsPerItem()
    {
        return $this->MaxItemSpecificsPerItem;
    }
    /**
     * Set MaxItemSpecificsPerItem value
     * @param int $maxItemSpecificsPerItem
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setMaxItemSpecificsPerItem($maxItemSpecificsPerItem = null)
    {
        // validation for constraint: int
        if (!is_null($maxItemSpecificsPerItem) && !is_numeric($maxItemSpecificsPerItem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxItemSpecificsPerItem)), __LINE__);
        }
        $this->MaxItemSpecificsPerItem = $maxItemSpecificsPerItem;
        return $this;
    }
    /**
     * Get MaxValuesPerName value
     * @return int|null
     */
    public function getMaxValuesPerName()
    {
        return $this->MaxValuesPerName;
    }
    /**
     * Set MaxValuesPerName value
     * @param int $maxValuesPerName
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setMaxValuesPerName($maxValuesPerName = null)
    {
        // validation for constraint: int
        if (!is_null($maxValuesPerName) && !is_numeric($maxValuesPerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxValuesPerName)), __LINE__);
        }
        $this->MaxValuesPerName = $maxValuesPerName;
        return $this;
    }
    /**
     * Get MaxCharactersPerValue value
     * @return int|null
     */
    public function getMaxCharactersPerValue()
    {
        return $this->MaxCharactersPerValue;
    }
    /**
     * Set MaxCharactersPerValue value
     * @param int $maxCharactersPerValue
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setMaxCharactersPerValue($maxCharactersPerValue = null)
    {
        // validation for constraint: int
        if (!is_null($maxCharactersPerValue) && !is_numeric($maxCharactersPerValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCharactersPerValue)), __LINE__);
        }
        $this->MaxCharactersPerValue = $maxCharactersPerValue;
        return $this;
    }
    /**
     * Get MaxCharactersPerName value
     * @return int|null
     */
    public function getMaxCharactersPerName()
    {
        return $this->MaxCharactersPerName;
    }
    /**
     * Set MaxCharactersPerName value
     * @param int $maxCharactersPerName
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setMaxCharactersPerName($maxCharactersPerName = null)
    {
        // validation for constraint: int
        if (!is_null($maxCharactersPerName) && !is_numeric($maxCharactersPerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxCharactersPerName)), __LINE__);
        }
        $this->MaxCharactersPerName = $maxCharactersPerName;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemSpecificDetailsType
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
