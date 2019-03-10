<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BiddingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>BiddingDetails</b> container, which consists of information about the buyer's bidding history on a single auction item.
 * @subpackage Structs
 */
class BiddingDetailsType extends AbstractStructBase
{
    /**
     * The ConvertedMaxBid
     * Meta informations extracted from the WSDL
     * - documentation: Converted value (from seller's currency to buyer's currency) of the amount in the <b>MaxBid</b> field. This field is only applicable and returned if the buyer purchased an item from an eBay site in another country. For active items,
     * it is recommended to refresh the listing's data every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $ConvertedMaxBid;
    /**
     * The MaxBid
     * Meta informations extracted from the WSDL
     * - documentation: This value is the dollar value of the highest bid that the buyer placed on the auction item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $MaxBid;
    /**
     * The QuantityBid
     * Meta informations extracted from the WSDL
     * - documentation: This value is the total number of bids that the buyer placed on the auction item throughout the duration of the listing.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityBid;
    /**
     * The QuantityWon
     * Meta informations extracted from the WSDL
     * - documentation: This field will only be returned if the buyer won the auction item, and if it is returned, its value will always be <code>1</code>.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityWon;
    /**
     * The Winning
     * Meta informations extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the prospective buyer is the current high bidder in an active listing.
     * - minOccurs: 0
     * @var bool
     */
    public $Winning;
    /**
     * The BidAssistant
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $BidAssistant;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BiddingDetailsType
     * @uses BiddingDetailsType::setConvertedMaxBid()
     * @uses BiddingDetailsType::setMaxBid()
     * @uses BiddingDetailsType::setQuantityBid()
     * @uses BiddingDetailsType::setQuantityWon()
     * @uses BiddingDetailsType::setWinning()
     * @uses BiddingDetailsType::setBidAssistant()
     * @uses BiddingDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedMaxBid
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBid
     * @param int $quantityBid
     * @param int $quantityWon
     * @param bool $winning
     * @param bool $bidAssistant
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\AmountType $convertedMaxBid = null, \macropage\ebaysdk\trading\StructType\AmountType $maxBid = null, $quantityBid = null, $quantityWon = null, $winning = null, $bidAssistant = null, \DOMDocument $any = null)
    {
        $this
            ->setConvertedMaxBid($convertedMaxBid)
            ->setMaxBid($maxBid)
            ->setQuantityBid($quantityBid)
            ->setQuantityWon($quantityWon)
            ->setWinning($winning)
            ->setBidAssistant($bidAssistant)
            ->setAny($any);
    }
    /**
     * Get ConvertedMaxBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getConvertedMaxBid()
    {
        return $this->ConvertedMaxBid;
    }
    /**
     * Set ConvertedMaxBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedMaxBid
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setConvertedMaxBid(\macropage\ebaysdk\trading\StructType\AmountType $convertedMaxBid = null)
    {
        $this->ConvertedMaxBid = $convertedMaxBid;
        return $this;
    }
    /**
     * Get MaxBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxBid()
    {
        return $this->MaxBid;
    }
    /**
     * Set MaxBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBid
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setMaxBid(\macropage\ebaysdk\trading\StructType\AmountType $maxBid = null)
    {
        $this->MaxBid = $maxBid;
        return $this;
    }
    /**
     * Get QuantityBid value
     * @return int|null
     */
    public function getQuantityBid()
    {
        return $this->QuantityBid;
    }
    /**
     * Set QuantityBid value
     * @param int $quantityBid
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setQuantityBid($quantityBid = null)
    {
        // validation for constraint: int
        if (!is_null($quantityBid) && !is_numeric($quantityBid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantityBid)), __LINE__);
        }
        $this->QuantityBid = $quantityBid;
        return $this;
    }
    /**
     * Get QuantityWon value
     * @return int|null
     */
    public function getQuantityWon()
    {
        return $this->QuantityWon;
    }
    /**
     * Set QuantityWon value
     * @param int $quantityWon
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setQuantityWon($quantityWon = null)
    {
        // validation for constraint: int
        if (!is_null($quantityWon) && !is_numeric($quantityWon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantityWon)), __LINE__);
        }
        $this->QuantityWon = $quantityWon;
        return $this;
    }
    /**
     * Get Winning value
     * @return bool|null
     */
    public function getWinning()
    {
        return $this->Winning;
    }
    /**
     * Set Winning value
     * @param bool $winning
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setWinning($winning = null)
    {
        // validation for constraint: boolean
        if (!is_null($winning) && !is_bool($winning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($winning)), __LINE__);
        }
        $this->Winning = $winning;
        return $this;
    }
    /**
     * Get BidAssistant value
     * @return bool|null
     */
    public function getBidAssistant()
    {
        return $this->BidAssistant;
    }
    /**
     * Set BidAssistant value
     * @param bool $bidAssistant
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setBidAssistant($bidAssistant = null)
    {
        // validation for constraint: boolean
        if (!is_null($bidAssistant) && !is_bool($bidAssistant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bidAssistant)), __LINE__);
        }
        $this->BidAssistant = $bidAssistant;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BiddingDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
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
