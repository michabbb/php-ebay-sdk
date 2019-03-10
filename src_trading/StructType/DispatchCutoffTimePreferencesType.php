<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DispatchCutoffTimePreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a seller's cut off time preferences for same day handling for item shipping.
 * @subpackage Structs
 */
class DispatchCutoffTimePreferencesType extends AbstractStructBase
{
    /**
     * The CutoffTime
     * Meta informations extracted from the WSDL
     * - documentation: If the seller specifies a <strong>DispatchTimeMax</strong> value of <code>0</code> to indicate same day handling for an item, the seller's shipping commitment depends on the value of <strong>CutoffTime</strong> for the eBay site on
     * which the item is listed. <br/><br/> For orders placed (and cleared payment received) before the indicated cut off time, the item must be shipped by the end of the current day. For orders completed on or after the cut off time, the item must be
     * shipped by the end of the following day (excluding weekends and local holidays). <br/><br/> <span class="tablenote"> <strong>Note:</strong> This field is not applicable for sellers who have opted into the Handling Time Option of eBay Guaranteed
     * Delivery, as this field only shows a single order cutoff time, but with the Handling Time Option, a seller can set a different order cutoff time for each business day. Currently, eBay Guaranteed Delivery is only available in the US. </span>
     * <strong>CutoffTime</strong> has a default initial value for each eBay site, but you can use <strong>SetUserPreferences</strong> to override the default for individual sellers. The default value for most eBay sites is 2:00PM local time. Enter times in
     * 30 minute increments from the top of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be rounded down to the next closest 30 minute increment. Times entered should be local to the value
     * provided for <strong>TimeZoneID</strong>. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $CutoffTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DispatchCutoffTimePreferencesType
     * @uses DispatchCutoffTimePreferencesType::setCutoffTime()
     * @uses DispatchCutoffTimePreferencesType::setAny()
     * @param string $cutoffTime
     * @param \DOMDocument $any
     */
    public function __construct($cutoffTime = null, \DOMDocument $any = null)
    {
        $this
            ->setCutoffTime($cutoffTime)
            ->setAny($any);
    }
    /**
     * Get CutoffTime value
     * @return string|null
     */
    public function getCutoffTime()
    {
        return $this->CutoffTime;
    }
    /**
     * Set CutoffTime value
     * @param string $cutoffTime
     * @return \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType
     */
    public function setCutoffTime($cutoffTime = null)
    {
        // validation for constraint: string
        if (!is_null($cutoffTime) && !is_string($cutoffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cutoffTime)), __LINE__);
        }
        $this->CutoffTime = $cutoffTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\DispatchCutoffTimePreferencesType
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
