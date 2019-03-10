<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingStatus StructType
 * Meta informations extracted from the WSDL
 * - documentation: Selling details pertaining to the respective item.
 * @subpackage Structs
 */
class SellingStatus extends AbstractStructBase
{
    /**
     * The currentPrice
     * Meta informations extracted from the WSDL
     * - documentation: The current price of the item given in the currency of the site on which the item is listed. That is, currentPrice is returned in the original listing currency. <br><br> For competitive-bid item listings, currentPrice is the current
     * minimum bid price if the listing has no bids, or the current high bid if the listing has bids. A Buy It Now price has no effect on currentPrice. <br><br> For Basic Fixed-Price (FixedPrice), Store Inventory (StoreInventory), Ad Format (AdFormat), and
     * Classified Ad (Classified) listings, currentPrice is the current fixed price.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Amount
     */
    public $currentPrice;
    /**
     * The convertedCurrentPrice
     * Meta informations extracted from the WSDL
     * - documentation: The listing's current price converted to the currency of the site specified in the find request (globalId).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\Amount
     */
    public $convertedCurrentPrice;
    /**
     * The bidCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of bids that have been placed on the item.
     * - minOccurs: 0
     * @var int
     */
    public $bidCount;
    /**
     * The sellingState
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the listing's status in eBay's processing workflow. If an item's EndTime is in the past, but there are no details about the buyer or high bidder (and the user is not anonymous), you can use sellingState information to
     * determine whether eBay has finished processing the listing. <dl> <dt> <strong>sellingState values:</strong> </dt> <dt> Active </dt> <dd> The listing is still live. It is also possible that the auction has recently ended, but eBay has not completed
     * the final processing (e.g., the high bidder is still being determined). </dd> <dt> Canceled </dt> <dd> The listing has been canceled by either the seller or eBay. </dd> <dt> Ended </dt> <dd> The listing has ended and eBay has completed the processing
     * of the sale (if any). </dd> <dt> EndedWithSales </dt> <dd> The listing has been ended with sales. </dd> <dt> EndedWithoutSales </dt> <dd> The listing has been ended without sales. </dd> </dl>
     * - minOccurs: 0
     * @var string
     */
    public $sellingState;
    /**
     * The timeLeft
     * Meta informations extracted from the WSDL
     * - documentation: Time left before the listing ends. The duration is represented in the ISO 8601 duration format (PnYnMnDTnHnMnS). For listings that have ended, the time left is PT0S (zero seconds). See the "duration" type for information about this
     * time format.
     * - minOccurs: 0
     * @var string
     */
    public $timeLeft;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingStatus
     * @uses SellingStatus::setCurrentPrice()
     * @uses SellingStatus::setConvertedCurrentPrice()
     * @uses SellingStatus::setBidCount()
     * @uses SellingStatus::setSellingState()
     * @uses SellingStatus::setTimeLeft()
     * @uses SellingStatus::setDelimiter()
     * @uses SellingStatus::setAny()
     * @param \macropage\ebaysdk\finding\StructType\Amount $currentPrice
     * @param \macropage\ebaysdk\finding\StructType\Amount $convertedCurrentPrice
     * @param int $bidCount
     * @param string $sellingState
     * @param string $timeLeft
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\Amount $currentPrice = null, \macropage\ebaysdk\finding\StructType\Amount $convertedCurrentPrice = null, $bidCount = null, $sellingState = null, $timeLeft = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setCurrentPrice($currentPrice)
            ->setConvertedCurrentPrice($convertedCurrentPrice)
            ->setBidCount($bidCount)
            ->setSellingState($sellingState)
            ->setTimeLeft($timeLeft)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get currentPrice value
     * @return \macropage\ebaysdk\finding\StructType\Amount|null
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }
    /**
     * Set currentPrice value
     * @param \macropage\ebaysdk\finding\StructType\Amount $currentPrice
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus
     */
    public function setCurrentPrice(\macropage\ebaysdk\finding\StructType\Amount $currentPrice = null)
    {
        $this->currentPrice = $currentPrice;
        return $this;
    }
    /**
     * Get convertedCurrentPrice value
     * @return \macropage\ebaysdk\finding\StructType\Amount|null
     */
    public function getConvertedCurrentPrice()
    {
        return $this->convertedCurrentPrice;
    }
    /**
     * Set convertedCurrentPrice value
     * @param \macropage\ebaysdk\finding\StructType\Amount $convertedCurrentPrice
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus
     */
    public function setConvertedCurrentPrice(\macropage\ebaysdk\finding\StructType\Amount $convertedCurrentPrice = null)
    {
        $this->convertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }
    /**
     * Get bidCount value
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->bidCount;
    }
    /**
     * Set bidCount value
     * @param int $bidCount
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus
     */
    public function setBidCount($bidCount = null)
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !is_numeric($bidCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bidCount)), __LINE__);
        }
        $this->bidCount = $bidCount;
        return $this;
    }
    /**
     * Get sellingState value
     * @return string|null
     */
    public function getSellingState()
    {
        return $this->sellingState;
    }
    /**
     * Set sellingState value
     * @param string $sellingState
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus
     */
    public function setSellingState($sellingState = null)
    {
        // validation for constraint: string
        if (!is_null($sellingState) && !is_string($sellingState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellingState)), __LINE__);
        }
        $this->sellingState = $sellingState;
        return $this;
    }
    /**
     * Get timeLeft value
     * @return string|null
     */
    public function getTimeLeft()
    {
        return $this->timeLeft;
    }
    /**
     * Set timeLeft value
     * @param string $timeLeft
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus
     */
    public function setTimeLeft($timeLeft = null)
    {
        // validation for constraint: string
        if (!is_null($timeLeft) && !is_string($timeLeft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeLeft)), __LINE__);
        }
        $this->timeLeft = $timeLeft;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\SellingStatus::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus
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
     * @return \macropage\ebaysdk\finding\StructType\SellingStatus
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
