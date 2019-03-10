<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreOwnerExtendedListingDurationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the extended listing durations available to store owners. If the field is present, the corresponding feature applies to the category. The field is returned as an empty element (e.g., a boolean value is not returned). Applies
 * to Fixed Price Listings.
 * @subpackage Structs
 */
class StoreOwnerExtendedListingDurationsType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the length of time an auction can be open, in days. The allowed durations vary according to the type of listing. The value GTC means Good Til Canceled.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Duration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreOwnerExtendedListingDurationsType
     * @uses StoreOwnerExtendedListingDurationsType::setDuration()
     * @uses StoreOwnerExtendedListingDurationsType::setAny()
     * @param string[] $duration
     * @param \DOMDocument $any
     */
    public function __construct(array $duration = array(), \DOMDocument $any = null)
    {
        $this
            ->setDuration($duration)
            ->setAny($any);
    }
    /**
     * Get Duration value
     * @return string[]|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @throws \InvalidArgumentException
     * @param string[] $duration
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
     */
    public function setDuration(array $duration = array())
    {
        foreach ($duration as $storeOwnerExtendedListingDurationsTypeDurationItem) {
            // validation for constraint: itemType
            if (!is_string($storeOwnerExtendedListingDurationsTypeDurationItem)) {
                throw new \InvalidArgumentException(sprintf('The Duration property can only contain items of token, "%s" given', is_object($storeOwnerExtendedListingDurationsTypeDurationItem) ? get_class($storeOwnerExtendedListingDurationsTypeDurationItem) : gettype($storeOwnerExtendedListingDurationsTypeDurationItem)), __LINE__);
            }
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Add item to Duration value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
     */
    public function addToDuration($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Duration property can only contain items of token, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Duration[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreOwnerExtendedListingDurationsType
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
