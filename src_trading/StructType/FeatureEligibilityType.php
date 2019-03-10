<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeatureEligibilityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates whether the seller making the request can list with certain features. A seller's eligibility is determined by their Feedback score.
 * @subpackage Structs
 */
class FeatureEligibilityType extends AbstractStructBase
{
    /**
     * The QualifiesForBuyItNow
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create auction listings enabled with the 'Buy It Now' option. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not
     * eligible.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiesForBuyItNow;
    /**
     * The QualifiesForBuyItNowMultiple
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to specify the 'Buy It Now' option for multiple-quantity listings. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not
     * eligible.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiesForBuyItNowMultiple;
    /**
     * The QualifiedForFixedPriceOneDayDuration
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create fixed-price listings with a one-day listing duration. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that the seller is not
     * eligible. Note that this field only controls user eligibility. The listing type and category must support this feature for this field to be applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiedForFixedPriceOneDayDuration;
    /**
     * The QualifiesForVariations
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether or not the seller is eligible to create multiple-variation, fixed-price listings.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiesForVariations;
    /**
     * The QualifiedForAuctionOneDayDuration
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the seller is eligible to create an auction listing with a one-day duration. Limitation: the Adult-Only and Motor Vehicle categories do not support one-day auctions, so the seller cannot create one-day auction
     * listings in these categories, even if the seller has the eligibility.
     * - minOccurs: 0
     * @var bool
     */
    public $QualifiedForAuctionOneDayDuration;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($qualifiesForBuyItNow = null, $qualifiesForBuyItNowMultiple = null, $qualifiedForFixedPriceOneDayDuration = null, $qualifiesForVariations = null, $qualifiedForAuctionOneDayDuration = null, \DOMDocument $any = null)
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
    public function getQualifiesForBuyItNow()
    {
        return $this->QualifiesForBuyItNow;
    }
    /**
     * Set QualifiesForBuyItNow value
     * @param bool $qualifiesForBuyItNow
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiesForBuyItNow($qualifiesForBuyItNow = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForBuyItNow) && !is_bool($qualifiesForBuyItNow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiesForBuyItNow)), __LINE__);
        }
        $this->QualifiesForBuyItNow = $qualifiesForBuyItNow;
        return $this;
    }
    /**
     * Get QualifiesForBuyItNowMultiple value
     * @return bool|null
     */
    public function getQualifiesForBuyItNowMultiple()
    {
        return $this->QualifiesForBuyItNowMultiple;
    }
    /**
     * Set QualifiesForBuyItNowMultiple value
     * @param bool $qualifiesForBuyItNowMultiple
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiesForBuyItNowMultiple($qualifiesForBuyItNowMultiple = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForBuyItNowMultiple) && !is_bool($qualifiesForBuyItNowMultiple)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiesForBuyItNowMultiple)), __LINE__);
        }
        $this->QualifiesForBuyItNowMultiple = $qualifiesForBuyItNowMultiple;
        return $this;
    }
    /**
     * Get QualifiedForFixedPriceOneDayDuration value
     * @return bool|null
     */
    public function getQualifiedForFixedPriceOneDayDuration()
    {
        return $this->QualifiedForFixedPriceOneDayDuration;
    }
    /**
     * Set QualifiedForFixedPriceOneDayDuration value
     * @param bool $qualifiedForFixedPriceOneDayDuration
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiedForFixedPriceOneDayDuration($qualifiedForFixedPriceOneDayDuration = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiedForFixedPriceOneDayDuration) && !is_bool($qualifiedForFixedPriceOneDayDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiedForFixedPriceOneDayDuration)), __LINE__);
        }
        $this->QualifiedForFixedPriceOneDayDuration = $qualifiedForFixedPriceOneDayDuration;
        return $this;
    }
    /**
     * Get QualifiesForVariations value
     * @return bool|null
     */
    public function getQualifiesForVariations()
    {
        return $this->QualifiesForVariations;
    }
    /**
     * Set QualifiesForVariations value
     * @param bool $qualifiesForVariations
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiesForVariations($qualifiesForVariations = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiesForVariations) && !is_bool($qualifiesForVariations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiesForVariations)), __LINE__);
        }
        $this->QualifiesForVariations = $qualifiesForVariations;
        return $this;
    }
    /**
     * Get QualifiedForAuctionOneDayDuration value
     * @return bool|null
     */
    public function getQualifiedForAuctionOneDayDuration()
    {
        return $this->QualifiedForAuctionOneDayDuration;
    }
    /**
     * Set QualifiedForAuctionOneDayDuration value
     * @param bool $qualifiedForAuctionOneDayDuration
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
     */
    public function setQualifiedForAuctionOneDayDuration($qualifiedForAuctionOneDayDuration = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiedForAuctionOneDayDuration) && !is_bool($qualifiedForAuctionOneDayDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiedForAuctionOneDayDuration)), __LINE__);
        }
        $this->QualifiedForAuctionOneDayDuration = $qualifiedForAuctionOneDayDuration;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FeatureEligibilityType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
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
     * @return \macropage\ebaysdk\trading\StructType\FeatureEligibilityType
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
