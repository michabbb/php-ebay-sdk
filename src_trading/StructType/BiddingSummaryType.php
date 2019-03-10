<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BiddingSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>BiddingSummary</b> container, which is returned in the <b>GetAllBidders</b> response if the <b>IncludeBiddingSummary</b> boolean field is included and set to <code>true</code> in the call request. The
 * <b>BiddingSummary</b> container consists of bidding history information for a specific bidder (specified in the <b>User.UserID</b> field).
 * @subpackage Structs
 */
class BiddingSummaryType extends AbstractStructBase
{
    /**
     * The SummaryDays
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the length of time (in number of days) that is being used to calculate all counts in the <b>BiddingSummary</b> container. This value is generally <code>30</code> (days), which means that all counts in the
     * container have been calculated from the present time and going back 30 days in the past. <br/><br/> This field is always returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $SummaryDays;
    /**
     * The TotalBids
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of bids (from any and all eBay sellers) that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field). <br/><br/> This field is always
     * returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $TotalBids;
    /**
     * The BidActivityWithSeller
     * Meta informations extracted from the WSDL
     * - documentation: This integer value is actually a percentage value that indicates what percentage of the user's total number of bids during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field) has been placed on auction
     * items that the seller has listed. The percentage value is rounded up to the highest whole percentage number. <br/><br/> This field is always returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $BidActivityWithSeller;
    /**
     * The BidsToUniqueSellers
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of bids to unique sellers that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field). <br/><br/> This field is always returned with
     * the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $BidsToUniqueSellers;
    /**
     * The BidsToUniqueCategories
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of bids made with unique listing categories that the user has placed during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field). <br/><br/> This field is
     * always returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $BidsToUniqueCategories;
    /**
     * The BidRetractions
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the total number of bids that the user has retracted (from any and all sellers) during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field). <br/><br/> This field is always
     * returned with the <b>BiddingSummary</b> container.
     * - minOccurs: 0
     * @var int
     */
    public $BidRetractions;
    /**
     * The ItemBidDetails
     * Meta informations extracted from the WSDL
     * - documentation: This container provides information on each auction item that the user has placed a bid on during the last 30 days (or the number of days specified in the <b>SummaryDays</b> field).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemBidDetailsType[]
     */
    public $ItemBidDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BiddingSummaryType
     * @uses BiddingSummaryType::setSummaryDays()
     * @uses BiddingSummaryType::setTotalBids()
     * @uses BiddingSummaryType::setBidActivityWithSeller()
     * @uses BiddingSummaryType::setBidsToUniqueSellers()
     * @uses BiddingSummaryType::setBidsToUniqueCategories()
     * @uses BiddingSummaryType::setBidRetractions()
     * @uses BiddingSummaryType::setItemBidDetails()
     * @uses BiddingSummaryType::setAny()
     * @param int $summaryDays
     * @param int $totalBids
     * @param int $bidActivityWithSeller
     * @param int $bidsToUniqueSellers
     * @param int $bidsToUniqueCategories
     * @param int $bidRetractions
     * @param \macropage\ebaysdk\trading\StructType\ItemBidDetailsType[] $itemBidDetails
     * @param \DOMDocument $any
     */
    public function __construct($summaryDays = null, $totalBids = null, $bidActivityWithSeller = null, $bidsToUniqueSellers = null, $bidsToUniqueCategories = null, $bidRetractions = null, array $itemBidDetails = array(), \DOMDocument $any = null)
    {
        $this
            ->setSummaryDays($summaryDays)
            ->setTotalBids($totalBids)
            ->setBidActivityWithSeller($bidActivityWithSeller)
            ->setBidsToUniqueSellers($bidsToUniqueSellers)
            ->setBidsToUniqueCategories($bidsToUniqueCategories)
            ->setBidRetractions($bidRetractions)
            ->setItemBidDetails($itemBidDetails)
            ->setAny($any);
    }
    /**
     * Get SummaryDays value
     * @return int|null
     */
    public function getSummaryDays()
    {
        return $this->SummaryDays;
    }
    /**
     * Set SummaryDays value
     * @param int $summaryDays
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public function setSummaryDays($summaryDays = null)
    {
        // validation for constraint: int
        if (!is_null($summaryDays) && !is_numeric($summaryDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($summaryDays)), __LINE__);
        }
        $this->SummaryDays = $summaryDays;
        return $this;
    }
    /**
     * Get TotalBids value
     * @return int|null
     */
    public function getTotalBids()
    {
        return $this->TotalBids;
    }
    /**
     * Set TotalBids value
     * @param int $totalBids
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public function setTotalBids($totalBids = null)
    {
        // validation for constraint: int
        if (!is_null($totalBids) && !is_numeric($totalBids)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalBids)), __LINE__);
        }
        $this->TotalBids = $totalBids;
        return $this;
    }
    /**
     * Get BidActivityWithSeller value
     * @return int|null
     */
    public function getBidActivityWithSeller()
    {
        return $this->BidActivityWithSeller;
    }
    /**
     * Set BidActivityWithSeller value
     * @param int $bidActivityWithSeller
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public function setBidActivityWithSeller($bidActivityWithSeller = null)
    {
        // validation for constraint: int
        if (!is_null($bidActivityWithSeller) && !is_numeric($bidActivityWithSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidActivityWithSeller)), __LINE__);
        }
        $this->BidActivityWithSeller = $bidActivityWithSeller;
        return $this;
    }
    /**
     * Get BidsToUniqueSellers value
     * @return int|null
     */
    public function getBidsToUniqueSellers()
    {
        return $this->BidsToUniqueSellers;
    }
    /**
     * Set BidsToUniqueSellers value
     * @param int $bidsToUniqueSellers
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public function setBidsToUniqueSellers($bidsToUniqueSellers = null)
    {
        // validation for constraint: int
        if (!is_null($bidsToUniqueSellers) && !is_numeric($bidsToUniqueSellers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidsToUniqueSellers)), __LINE__);
        }
        $this->BidsToUniqueSellers = $bidsToUniqueSellers;
        return $this;
    }
    /**
     * Get BidsToUniqueCategories value
     * @return int|null
     */
    public function getBidsToUniqueCategories()
    {
        return $this->BidsToUniqueCategories;
    }
    /**
     * Set BidsToUniqueCategories value
     * @param int $bidsToUniqueCategories
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public function setBidsToUniqueCategories($bidsToUniqueCategories = null)
    {
        // validation for constraint: int
        if (!is_null($bidsToUniqueCategories) && !is_numeric($bidsToUniqueCategories)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidsToUniqueCategories)), __LINE__);
        }
        $this->BidsToUniqueCategories = $bidsToUniqueCategories;
        return $this;
    }
    /**
     * Get BidRetractions value
     * @return int|null
     */
    public function getBidRetractions()
    {
        return $this->BidRetractions;
    }
    /**
     * Set BidRetractions value
     * @param int $bidRetractions
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public function setBidRetractions($bidRetractions = null)
    {
        // validation for constraint: int
        if (!is_null($bidRetractions) && !is_numeric($bidRetractions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidRetractions)), __LINE__);
        }
        $this->BidRetractions = $bidRetractions;
        return $this;
    }
    /**
     * Get ItemBidDetails value
     * @return \macropage\ebaysdk\trading\StructType\ItemBidDetailsType[]|null
     */
    public function getItemBidDetails()
    {
        return $this->ItemBidDetails;
    }
    /**
     * Set ItemBidDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemBidDetailsType[] $itemBidDetails
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public function setItemBidDetails(array $itemBidDetails = array())
    {
        foreach ($itemBidDetails as $biddingSummaryTypeItemBidDetailsItem) {
            // validation for constraint: itemType
            if (!$biddingSummaryTypeItemBidDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ItemBidDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ItemBidDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ItemBidDetailsType, "%s" given', is_object($biddingSummaryTypeItemBidDetailsItem) ? get_class($biddingSummaryTypeItemBidDetailsItem) : gettype($biddingSummaryTypeItemBidDetailsItem)), __LINE__);
            }
        }
        $this->ItemBidDetails = $itemBidDetails;
        return $this;
    }
    /**
     * Add item to ItemBidDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemBidDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
     */
    public function addToItemBidDetails(\macropage\ebaysdk\trading\StructType\ItemBidDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemBidDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ItemBidDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ItemBidDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemBidDetails[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BiddingSummaryType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\BiddingSummaryType
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
