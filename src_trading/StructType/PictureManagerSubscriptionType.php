<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictureManagerSubscriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PictureManagerSubscriptionType extends AbstractStructBase
{
    /**
     * The SubscriptionLevel
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SubscriptionLevel;
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Fee;
    /**
     * The StorageSize
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $StorageSize;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictureManagerSubscriptionType
     * @uses PictureManagerSubscriptionType::setSubscriptionLevel()
     * @uses PictureManagerSubscriptionType::setFee()
     * @uses PictureManagerSubscriptionType::setStorageSize()
     * @uses PictureManagerSubscriptionType::setAny()
     * @param string $subscriptionLevel
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @param int $storageSize
     * @param \DOMDocument $any
     */
    public function __construct($subscriptionLevel = null, \macropage\ebaysdk\trading\StructType\AmountType $fee = null, $storageSize = null, \DOMDocument $any = null)
    {
        $this
            ->setSubscriptionLevel($subscriptionLevel)
            ->setFee($fee)
            ->setStorageSize($storageSize)
            ->setAny($any);
    }
    /**
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel()
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
     */
    public function setSubscriptionLevel($subscriptionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subscriptionLevel, implode(', ', \macropage\ebaysdk\trading\EnumType\PictureManagerSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
        return $this;
    }
    /**
     * Get Fee value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
     */
    public function setFee(\macropage\ebaysdk\trading\StructType\AmountType $fee = null)
    {
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Get StorageSize value
     * @return int|null
     */
    public function getStorageSize()
    {
        return $this->StorageSize;
    }
    /**
     * Set StorageSize value
     * @param int $storageSize
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
     */
    public function setStorageSize($storageSize = null)
    {
        // validation for constraint: int
        if (!is_null($storageSize) && !is_numeric($storageSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($storageSize)), __LINE__);
        }
        $this->StorageSize = $storageSize;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
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
     * @return \macropage\ebaysdk\trading\StructType\PictureManagerSubscriptionType
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
