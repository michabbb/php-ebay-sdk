<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidderNoticePreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>BidderNoticePreferences</b> container, which consists of the seller's preference for receiving contact information for unsuccessful bidders in auction listings.
 * @subpackage Structs
 */
class BidderNoticePreferencesType extends AbstractStructBase
{
    /**
     * The UnsuccessfulBidderNoticeIncludeMyItems
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field should be set to <b>true</b> in a <b>SetUserPreferences</b> call if the seller wishes to receive contact information for bidders who have bid on a seller's auction item, but did not win. This might be helpful to a
     * seller if that seller wishes to proposed Second Chance Offers to these unsuccessful bidders if the seller has multiple, identical items, or if the winning bidder does not pay for the original auction item. <br/><br/> This field is always returned
     * with <b>BidderNoticePreferences</b> container in the <b>GetUserPreferences</b> response.
     * - minOccurs: 0
     * @var bool
     */
    public $UnsuccessfulBidderNoticeIncludeMyItems;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BidderNoticePreferencesType
     * @uses BidderNoticePreferencesType::setUnsuccessfulBidderNoticeIncludeMyItems()
     * @uses BidderNoticePreferencesType::setAny()
     * @param bool $unsuccessfulBidderNoticeIncludeMyItems
     * @param \DOMDocument $any
     */
    public function __construct($unsuccessfulBidderNoticeIncludeMyItems = null, \DOMDocument $any = null)
    {
        $this
            ->setUnsuccessfulBidderNoticeIncludeMyItems($unsuccessfulBidderNoticeIncludeMyItems)
            ->setAny($any);
    }
    /**
     * Get UnsuccessfulBidderNoticeIncludeMyItems value
     * @return bool|null
     */
    public function getUnsuccessfulBidderNoticeIncludeMyItems()
    {
        return $this->UnsuccessfulBidderNoticeIncludeMyItems;
    }
    /**
     * Set UnsuccessfulBidderNoticeIncludeMyItems value
     * @param bool $unsuccessfulBidderNoticeIncludeMyItems
     * @return \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType
     */
    public function setUnsuccessfulBidderNoticeIncludeMyItems($unsuccessfulBidderNoticeIncludeMyItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($unsuccessfulBidderNoticeIncludeMyItems) && !is_bool($unsuccessfulBidderNoticeIncludeMyItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($unsuccessfulBidderNoticeIncludeMyItems)), __LINE__);
        }
        $this->UnsuccessfulBidderNoticeIncludeMyItems = $unsuccessfulBidderNoticeIncludeMyItems;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType
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
