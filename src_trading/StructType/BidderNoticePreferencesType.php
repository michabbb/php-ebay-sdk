<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BidderNoticePreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>BidderNoticePreferences</b> container, which consists of the seller's preference for receiving contact information for unsuccessful bidders in auction listings.
 * @subpackage Structs
 */
class BidderNoticePreferencesType extends AbstractStructBase
{
    /**
     * The UnsuccessfulBidderNoticeIncludeMyItems
     * Meta information extracted from the WSDL
     * - documentation: This boolean field should be set to <b>true</b> in a <b>SetUserPreferences</b> call if the seller wishes to receive contact information for bidders who have bid on a seller's auction item, but did not win. This might be helpful to a
     * seller if that seller wishes to proposed Second Chance Offers to these unsuccessful bidders if the seller has multiple, identical items, or if the winning bidder does not pay for the original auction item. <br/><br/> This field is always returned
     * with <b>BidderNoticePreferences</b> container in the <b>GetUserPreferences</b> response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UnsuccessfulBidderNoticeIncludeMyItems = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BidderNoticePreferencesType
     * @uses BidderNoticePreferencesType::setUnsuccessfulBidderNoticeIncludeMyItems()
     * @uses BidderNoticePreferencesType::setAny()
     * @param bool $unsuccessfulBidderNoticeIncludeMyItems
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $unsuccessfulBidderNoticeIncludeMyItems = null, $any = null)
    {
        $this
            ->setUnsuccessfulBidderNoticeIncludeMyItems($unsuccessfulBidderNoticeIncludeMyItems)
            ->setAny($any);
    }
    /**
     * Get UnsuccessfulBidderNoticeIncludeMyItems value
     * @return bool|null
     */
    public function getUnsuccessfulBidderNoticeIncludeMyItems(): ?bool
    {
        return $this->UnsuccessfulBidderNoticeIncludeMyItems;
    }
    /**
     * Set UnsuccessfulBidderNoticeIncludeMyItems value
     * @param bool $unsuccessfulBidderNoticeIncludeMyItems
     * @return \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType
     */
    public function setUnsuccessfulBidderNoticeIncludeMyItems(?bool $unsuccessfulBidderNoticeIncludeMyItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($unsuccessfulBidderNoticeIncludeMyItems) && !is_bool($unsuccessfulBidderNoticeIncludeMyItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unsuccessfulBidderNoticeIncludeMyItems, true), gettype($unsuccessfulBidderNoticeIncludeMyItems)), __LINE__);
        }
        $this->UnsuccessfulBidderNoticeIncludeMyItems = $unsuccessfulBidderNoticeIncludeMyItems;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BidderNoticePreferencesType
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
