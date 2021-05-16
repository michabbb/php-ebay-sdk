<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BestOfferDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BestOfferDetails</b> container, which consists of Best Offer details associated with a listing. The <b>BestOfferEnabled</b> field in this container is used by <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls to
 * enable the Best Offer feature on a listing.
 * @subpackage Structs
 */
class BestOfferDetailsType extends AbstractStructBase
{
    /**
     * The BestOfferCount
     * Meta information extracted from the WSDL
     * - documentation: The number of Best Offers made for this item, if any. In other words, if there are no Best Offers made, this field will not appear in the response. This field is not applicable to the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $BestOfferCount = null;
    /**
     * The BestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether or not the Best Offer feature is enabled for the listing. A seller can enable the Best Offer feature for a listing as long as the category supports the Best Offer feature. To see if an eBay category
     * supports the Best Offer feature, run a <b>GetCategoryFeatures</b> call, including <code>BestOfferEnabled</code> as a <b>FeatureID</b> value in the call request payload. <br/><br/> A listing enabled with the Best Offer feature allows a buyer to
     * bargain with the seller and make a lower-priced offer than the fixed price or the starting bid price for an auction listing. The seller can then decide whether to accept the buyer's Best Offer price or propose a counter offer higher than the Best
     * Offer price, but lower than the fixed price or starting bid price. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France,
     * Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. If an auction listing is enabled with Best Offer, this feature will no
     * longer be applicable once the listing receives its first qualifying bid. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BestOfferEnabled = null;
    /**
     * The BestOffer
     * Meta information extracted from the WSDL
     * - documentation: This is the amount of the buyer's current Best Offer. This field will not appear in the <b>GetMyeBayBuying</b> response if the buyer has not made a Best Offer. This field is also not applicable to the
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $BestOffer = null;
    /**
     * The BestOfferStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the status of the latest Best Offer from the buyer. This field is only applicable to the <b>GetMyeBayBuying</b> call, and will not appear in the response if the buyer has not made a Best Offer.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BestOfferStatus = null;
    /**
     * The BestOfferType
     * Meta information extracted from the WSDL
     * - documentation: Note: this field is no longer used. The Best Offer type is only returned in the <b>BestOfferCodeType</b> field of the <b>GetBestOffers</b> call, and the applicable values for Best Offer type (<code>BuyerBestOffer</code>,
     * <code>BuyerCounterOffer</code>, <code>SellerCounterOffer</code>, etc.) are defined in <b>BestOfferTypeCodeType</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BestOfferType = null;
    /**
     * The NewBestOffer
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NewBestOffer = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BestOfferDetailsType
     * @uses BestOfferDetailsType::setBestOfferCount()
     * @uses BestOfferDetailsType::setBestOfferEnabled()
     * @uses BestOfferDetailsType::setBestOffer()
     * @uses BestOfferDetailsType::setBestOfferStatus()
     * @uses BestOfferDetailsType::setBestOfferType()
     * @uses BestOfferDetailsType::setNewBestOffer()
     * @uses BestOfferDetailsType::setAny()
     * @param int $bestOfferCount
     * @param bool $bestOfferEnabled
     * @param \macropage\ebaysdk\trading\StructType\AmountType $bestOffer
     * @param string $bestOfferStatus
     * @param string $bestOfferType
     * @param bool $newBestOffer
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $bestOfferCount = null, ?bool $bestOfferEnabled = null, ?\macropage\ebaysdk\trading\StructType\AmountType $bestOffer = null, ?string $bestOfferStatus = null, ?string $bestOfferType = null, ?bool $newBestOffer = null, $any = null)
    {
        $this
            ->setBestOfferCount($bestOfferCount)
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setBestOffer($bestOffer)
            ->setBestOfferStatus($bestOfferStatus)
            ->setBestOfferType($bestOfferType)
            ->setNewBestOffer($newBestOffer)
            ->setAny($any);
    }
    /**
     * Get BestOfferCount value
     * @return int|null
     */
    public function getBestOfferCount(): ?int
    {
        return $this->BestOfferCount;
    }
    /**
     * Set BestOfferCount value
     * @param int $bestOfferCount
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOfferCount(?int $bestOfferCount = null): self
    {
        // validation for constraint: int
        if (!is_null($bestOfferCount) && !(is_int($bestOfferCount) || ctype_digit($bestOfferCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bestOfferCount, true), gettype($bestOfferCount)), __LINE__);
        }
        $this->BestOfferCount = $bestOfferCount;
        
        return $this;
    }
    /**
     * Get BestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled(): ?bool
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOfferEnabled(?bool $bestOfferEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferEnabled, true), gettype($bestOfferEnabled)), __LINE__);
        }
        $this->BestOfferEnabled = $bestOfferEnabled;
        
        return $this;
    }
    /**
     * Get BestOffer value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getBestOffer(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->BestOffer;
    }
    /**
     * Set BestOffer value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $bestOffer
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOffer(?\macropage\ebaysdk\trading\StructType\AmountType $bestOffer = null): self
    {
        $this->BestOffer = $bestOffer;
        
        return $this;
    }
    /**
     * Get BestOfferStatus value
     * @return string|null
     */
    public function getBestOfferStatus(): ?string
    {
        return $this->BestOfferStatus;
    }
    /**
     * Set BestOfferStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bestOfferStatus
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOfferStatus(?string $bestOfferStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::valueIsValid($bestOfferStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType', is_array($bestOfferStatus) ? implode(', ', $bestOfferStatus) : var_export($bestOfferStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BestOfferStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferStatus = $bestOfferStatus;
        
        return $this;
    }
    /**
     * Get BestOfferType value
     * @return string|null
     */
    public function getBestOfferType(): ?string
    {
        return $this->BestOfferType;
    }
    /**
     * Set BestOfferType value
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bestOfferType
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setBestOfferType(?string $bestOfferType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::valueIsValid($bestOfferType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType', is_array($bestOfferType) ? implode(', ', $bestOfferType) : var_export($bestOfferType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BestOfferTypeCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferType = $bestOfferType;
        
        return $this;
    }
    /**
     * Get NewBestOffer value
     * @return bool|null
     */
    public function getNewBestOffer(): ?bool
    {
        return $this->NewBestOffer;
    }
    /**
     * Set NewBestOffer value
     * @param bool $newBestOffer
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
     */
    public function setNewBestOffer(?bool $newBestOffer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($newBestOffer) && !is_bool($newBestOffer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newBestOffer, true), gettype($newBestOffer)), __LINE__);
        }
        $this->NewBestOffer = $newBestOffer;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BestOfferDetailsType
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
