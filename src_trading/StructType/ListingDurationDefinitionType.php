<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDurationDefinitionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>ListingDurations</b> container that is returned for each listing type supported for the eBay site. <b>ListingDurations</b> container shows the supported listing duration times for each listing type.
 * @subpackage Structs
 */
class ListingDurationDefinitionType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: All values returned in the <b>Duration</b> fields indicate the listing durations that are supported for that listing type. The allowed durations vary according to the type of listing. The value <code>GTC</code> means Good 'Til
     * Canceled. The complete list of enumeration values that may be returned in this field is shown in <b>ListingDurationCodeType</b>.
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
     * The durationSetID
     * Meta informations extracted from the WSDL
     * - documentation: The integer value in this attribute identifies the type of listing to which the set of durations applies. To match a <b>durationSetID</b> value to a specific listing type, see the <b>Category.ListingDuration</b> field in the call
     * response.
     * @var int
     */
    public $durationSetID;
    /**
     * Constructor method for ListingDurationDefinitionType
     * @uses ListingDurationDefinitionType::setDuration()
     * @uses ListingDurationDefinitionType::setAny()
     * @uses ListingDurationDefinitionType::setDurationSetID()
     * @param string[] $duration
     * @param \DOMDocument $any
     * @param int $durationSetID
     */
    public function __construct(array $duration = array(), \DOMDocument $any = null, $durationSetID = null)
    {
        $this
            ->setDuration($duration)
            ->setAny($any)
            ->setDurationSetID($durationSetID);
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
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
     */
    public function setDuration(array $duration = array())
    {
        foreach ($duration as $listingDurationDefinitionTypeDurationItem) {
            // validation for constraint: itemType
            if (!is_string($listingDurationDefinitionTypeDurationItem)) {
                throw new \InvalidArgumentException(sprintf('The Duration property can only contain items of token, "%s" given', is_object($listingDurationDefinitionTypeDurationItem) ? get_class($listingDurationDefinitionTypeDurationItem) : gettype($listingDurationDefinitionTypeDurationItem)), __LINE__);
            }
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Add item to Duration value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
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
     * @uses \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get durationSetID value
     * @return int|null
     */
    public function getDurationSetID()
    {
        return $this->durationSetID;
    }
    /**
     * Set durationSetID value
     * @param int $durationSetID
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
     */
    public function setDurationSetID($durationSetID = null)
    {
        // validation for constraint: int
        if (!is_null($durationSetID) && !is_numeric($durationSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($durationSetID)), __LINE__);
        }
        $this->durationSetID = $durationSetID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ListingDurationDefinitionType
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
