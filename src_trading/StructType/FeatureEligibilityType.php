<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeatureEligibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates whether the seller making the request can list with certain features. A seller's eligibility is determined by their Feedback score.
 * @subpackage Structs
 */
class FeatureEligibilityType extends AbstractStructBase
{
    /**
     * The QualifiesForBuyItNow
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create auction listings enabled with the 'Buy It Now' option. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not
     * eligible.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $QualifiesForBuyItNow = null;
    /**
     * The QualifiesForBuyItNowMultiple
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to specify the 'Buy It Now' option for multiple-quantity listings. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not
     * eligible.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $QualifiesForBuyItNowMultiple = null;
    /**
     * The QualifiedForFixedPriceOneDayDuration
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create fixed-price listings with a one-day listing duration. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that the seller is not
     * eligible. Note that this field only controls user eligibility. The listing type and category must support this feature for this field to be applicable.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $QualifiedForFixedPriceOneDayDuration = null;
    /**
     * The QualifiesForVariations
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the seller is eligible to create multiple-variation, fixed-price listings.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $QualifiesForVariations = null;
    /**
     * The QualifiedForAuctionOneDayDuration
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create an auction listing with a one-day duration. Limitation: the Adult-Only and Motor Vehicle categories do not support one-day auctions, so the seller cannot create one-day auction
     * listings in these categories, even if the seller has the eligibility.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $QualifiedForAuctionOneDayDuration = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FeatureEligibilityType
     * @uses FeatureEligibilityType::setQualifiesForBuyItNow()
     * @uses FeatureEligibilityType::setQualifiesForBuyItNowMultiple()
     * @uses FeatureEligibilityType::setQualifiedForFixedPriceOneDayDuration()
     * @uses FeatureEligibilityType::setQualifiesForVariations()
     * @uses FeatureEligibilityType::setQualifiedForAuctionOneDayDuration()
     * @uses FeatureEligibilityType::setAny()
     * @param bool $qualifiesForBuyItNow
     * @param bool $qualifiesForBuyItNowMultiple
     * @param bool $qualifiedForFixedPriceOneDayDuration
     * @param bool $qualifiesForVariations
     * @param bool $qualifiedForAuctionOneDayDuration
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $qualifiesForBuyItNow = null, ?bool $qualifiesForBuyItNowMultiple = null, ?bool $qualifiedForFixedPriceOneDayDuration = null, ?bool $qualifiesForVariations = null, ?bool $qualifiedForAuctionOneDayDuration = null, $any = null)
    {
        $this
            ->setQualifiesForBuyItNow($qualifiesForBuyItNow)
            ->setQualifiesForBuyItNowMultiple($qualifiesForBuyItNowMultiple)
            ->setQualifiedForFixedPriceOneDayDuration($qualifiedForFixedPriceOneDayDuration)
            ->setQualifiesForVariations($qualifiesForVariations)
            ->setQualifiedForAuctionOneDayDuration($qualifiedForAuctionOneDayDuration)
            ->setAny($any);
    }
    /**
     * Get QualifiesForBuyItNow value
     * @return bool|null
     */
    public function getQualifiesForBuyItNow(): ?bool
    {
        return $this->QualifiesForBuyItNow;
    }
    /**
     * Set QualifiesForBuyItNow value
     * @param bool $qualifiesForBuyItNow
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiesForBuyItNow(?bool $qualifiesForBuyItNow = null): self
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForBuyItNow) && !is_bool($qualifiesForBuyItNow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiesForBuyItNow, true), gettype($qualifiesForBuyItNow)), __LINE__);
        }
        $this->QualifiesForBuyItNow = $qualifiesForBuyItNow;
        
        return $this;
    }
    /**
     * Get QualifiesForBuyItNowMultiple value
     * @return bool|null
     */
    public function getQualifiesForBuyItNowMultiple(): ?bool
    {
        return $this->QualifiesForBuyItNowMultiple;
    }
    /**
     * Set QualifiesForBuyItNowMultiple value
     * @param bool $qualifiesForBuyItNowMultiple
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiesForBuyItNowMultiple(?bool $qualifiesForBuyItNowMultiple = null): self
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForBuyItNowMultiple) && !is_bool($qualifiesForBuyItNowMultiple)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiesForBuyItNowMultiple, true), gettype($qualifiesForBuyItNowMultiple)), __LINE__);
        }
        $this->QualifiesForBuyItNowMultiple = $qualifiesForBuyItNowMultiple;
        
        return $this;
    }
    /**
     * Get QualifiedForFixedPriceOneDayDuration value
     * @return bool|null
     */
    public function getQualifiedForFixedPriceOneDayDuration(): ?bool
    {
        return $this->QualifiedForFixedPriceOneDayDuration;
    }
    /**
     * Set QualifiedForFixedPriceOneDayDuration value
     * @param bool $qualifiedForFixedPriceOneDayDuration
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiedForFixedPriceOneDayDuration(?bool $qualifiedForFixedPriceOneDayDuration = null): self
    {
        // validation for constraint: boolean
        if (!is_null($qualifiedForFixedPriceOneDayDuration) && !is_bool($qualifiedForFixedPriceOneDayDuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiedForFixedPriceOneDayDuration, true), gettype($qualifiedForFixedPriceOneDayDuration)), __LINE__);
        }
        $this->QualifiedForFixedPriceOneDayDuration = $qualifiedForFixedPriceOneDayDuration;
        
        return $this;
    }
    /**
     * Get QualifiesForVariations value
     * @return bool|null
     */
    public function getQualifiesForVariations(): ?bool
    {
        return $this->QualifiesForVariations;
    }
    /**
     * Set QualifiesForVariations value
     * @param bool $qualifiesForVariations
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiesForVariations(?bool $qualifiesForVariations = null): self
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForVariations) && !is_bool($qualifiesForVariations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiesForVariations, true), gettype($qualifiesForVariations)), __LINE__);
        }
        $this->QualifiesForVariations = $qualifiesForVariations;
        
        return $this;
    }
    /**
     * Get QualifiedForAuctionOneDayDuration value
     * @return bool|null
     */
    public function getQualifiedForAuctionOneDayDuration(): ?bool
    {
        return $this->QualifiedForAuctionOneDayDuration;
    }
    /**
     * Set QualifiedForAuctionOneDayDuration value
     * @param bool $qualifiedForAuctionOneDayDuration
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiedForAuctionOneDayDuration(?bool $qualifiedForAuctionOneDayDuration = null): self
    {
        // validation for constraint: boolean
        if (!is_null($qualifiedForAuctionOneDayDuration) && !is_bool($qualifiedForAuctionOneDayDuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($qualifiedForAuctionOneDayDuration, true), gettype($qualifiedForAuctionOneDayDuration)), __LINE__);
        }
        $this->QualifiedForAuctionOneDayDuration = $qualifiedForAuctionOneDayDuration;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
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
