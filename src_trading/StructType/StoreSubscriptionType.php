<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreSubscriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the Subscription container that is returned in GetStoreOptions to indicate the subscription level and monthly fee associated with the eBay Store.
 * @subpackage Structs
 */
class StoreSubscriptionType extends AbstractStructBase
{
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - documentation: Store subscription level.
     * - minOccurs: 0
     * @var string
     */
    public $Level;
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - documentation: Monthly fee for the Store subscription level.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $Fee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreSubscriptionType
     * @uses StoreSubscriptionType::setLevel()
     * @uses StoreSubscriptionType::setFee()
     * @uses StoreSubscriptionType::setAny()
     * @param string $level
     * @param \macropage\ebaysdk\trading\StructType\AmountType $fee
     * @param \DOMDocument $any
     */
    public function __construct($level = null, \macropage\ebaysdk\trading\StructType\AmountType $fee = null, \DOMDocument $any = null)
    {
        $this
            ->setLevel($level)
            ->setFee($fee)
            ->setAny($any);
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $level, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
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
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType
     */
    public function setFee(\macropage\ebaysdk\trading\StructType\AmountType $fee = null)
    {
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreSubscriptionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreSubscriptionType
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
