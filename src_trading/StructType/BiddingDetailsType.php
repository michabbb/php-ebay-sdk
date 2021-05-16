<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BiddingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BiddingDetails</b> container, which consists of information about the buyer's bidding history on a single auction item.
 * @subpackage Structs
 */
class BiddingDetailsType extends AbstractStructBase
{
    /**
     * The ConvertedMaxBid
     * Meta information extracted from the WSDL
     * - documentation: Converted value (from seller's currency to buyer's currency) of the amount in the <b>MaxBid</b> field. This field is only applicable and returned if the buyer purchased an item from an eBay site in another country. For active items,
     * it is recommended to refresh the listing's data every 24 hours to pick up the current conversion rates.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $ConvertedMaxBid = null;
    /**
     * The MaxBid
     * Meta information extracted from the WSDL
     * - documentation: This value is the dollar value of the highest bid that the buyer placed on the auction item.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $MaxBid = null;
    /**
     * The QuantityBid
     * Meta information extracted from the WSDL
     * - documentation: This value is the total number of bids that the buyer placed on the auction item throughout the duration of the listing.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantityBid = null;
    /**
     * The QuantityWon
     * Meta information extracted from the WSDL
     * - documentation: This field will only be returned if the buyer won the auction item, and if it is returned, its value will always be <code>1</code>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $QuantityWon = null;
    /**
     * The Winning
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the prospective buyer is the current high bidder in an active listing.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Winning = null;
    /**
     * The BidAssistant
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BidAssistant = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\AmountType $convertedMaxBid = null, ?\macropage\ebaysdk\trading\StructType\AmountType $maxBid = null, ?int $quantityBid = null, ?int $quantityWon = null, ?bool $winning = null, ?bool $bidAssistant = null, $any = null)
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
    public function getConvertedMaxBid(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->ConvertedMaxBid;
    }
    /**
     * Set ConvertedMaxBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $convertedMaxBid
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setConvertedMaxBid(?\macropage\ebaysdk\trading\StructType\AmountType $convertedMaxBid = null): self
    {
        $this->ConvertedMaxBid = $convertedMaxBid;
        
        return $this;
    }
    /**
     * Get MaxBid value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getMaxBid(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->MaxBid;
    }
    /**
     * Set MaxBid value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $maxBid
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setMaxBid(?\macropage\ebaysdk\trading\StructType\AmountType $maxBid = null): self
    {
        $this->MaxBid = $maxBid;
        
        return $this;
    }
    /**
     * Get QuantityBid value
     * @return int|null
     */
    public function getQuantityBid(): ?int
    {
        return $this->QuantityBid;
    }
    /**
     * Set QuantityBid value
     * @param int $quantityBid
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setQuantityBid(?int $quantityBid = null): self
    {
        // validation for constraint: int
        if (!is_null($quantityBid) && !(is_int($quantityBid) || ctype_digit($quantityBid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityBid, true), gettype($quantityBid)), __LINE__);
        }
        $this->QuantityBid = $quantityBid;
        
        return $this;
    }
    /**
     * Get QuantityWon value
     * @return int|null
     */
    public function getQuantityWon(): ?int
    {
        return $this->QuantityWon;
    }
    /**
     * Set QuantityWon value
     * @param int $quantityWon
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setQuantityWon(?int $quantityWon = null): self
    {
        // validation for constraint: int
        if (!is_null($quantityWon) && !(is_int($quantityWon) || ctype_digit($quantityWon))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityWon, true), gettype($quantityWon)), __LINE__);
        }
        $this->QuantityWon = $quantityWon;
        
        return $this;
    }
    /**
     * Get Winning value
     * @return bool|null
     */
    public function getWinning(): ?bool
    {
        return $this->Winning;
    }
    /**
     * Set Winning value
     * @param bool $winning
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setWinning(?bool $winning = null): self
    {
        // validation for constraint: boolean
        if (!is_null($winning) && !is_bool($winning)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($winning, true), gettype($winning)), __LINE__);
        }
        $this->Winning = $winning;
        
        return $this;
    }
    /**
     * Get BidAssistant value
     * @return bool|null
     */
    public function getBidAssistant(): ?bool
    {
        return $this->BidAssistant;
    }
    /**
     * Set BidAssistant value
     * @param bool $bidAssistant
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
     */
    public function setBidAssistant(?bool $bidAssistant = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bidAssistant) && !is_bool($bidAssistant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bidAssistant, true), gettype($bidAssistant)), __LINE__);
        }
        $this->BidAssistant = $bidAssistant;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BiddingDetailsType
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
