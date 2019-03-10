<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for information about this listing's seller.
 * @subpackage Structs
 */
class SellerInfo extends AbstractStructBase
{
    /**
     * The sellerUserName
     * Meta informations extracted from the WSDL
     * - documentation: The seller's eBay user name; a unique value.
     * - minOccurs: 0
     * @var string
     */
    public $sellerUserName;
    /**
     * The feedbackScore
     * Meta informations extracted from the WSDL
     * - documentation: The aggregate feedback score of the seller. A seller's feedback score is their net positive feedback minus their net negative feedback. Feedback scores are a quantitative expression of the desirability of dealing with a seller in a
     * transaction.
     * - minOccurs: 0
     * @var int
     */
    public $feedbackScore;
    /**
     * The positiveFeedbackPercent
     * Meta informations extracted from the WSDL
     * - documentation: The percentage value of a user's positive feedback (their positive feedbackScore divided by their total positive plus negative feedback).
     * - minOccurs: 0
     * @var float
     */
    public $positiveFeedbackPercent;
    /**
     * The feedbackRatingStar
     * Meta informations extracted from the WSDL
     * - documentation: Visual indicator of user's feedback score. <dl> <dt> <strong>feedbackRatingStar values:</strong> </dt> <dt> None </dt> <dd> No graphic displayed, feedback score 0-9. </dd> <dt> Yellow </dt> <dd> Yellow Star, feedback score 10-49.
     * </dd> <dt> Blue </dt> <dd> Blue Star, feedback score 50-99. </dd> <dt> Turquoise </dt> <dd> Turquoise Star, feedback score 100-499. </dd> <dt> Purple </dt> <dd> Purple Star, feedback score 500-999. </dd> <dt> Red </dt> <dd> Red Star, feedback score
     * 1,000-4,999. </dd> <dt> Green </dt> <dd> Green Star, feedback score 5,000-9,999. </dd> <dt> YellowShooting </dt> <dd> Yellow Shooting Star, feedback score 10,000-24,999. </dd> <dt> TurquoiseShooting </dt> <dd> Turquoise Shooting Star, feedback score
     * 25,000-49,999. </dd> <dt> PurpleShooting </dt> <dd> Purple Shooting Star, feedback score 50,000-99,999. </dd> <dt> RedShooting </dt> <dd> Red Shooting Star, feedback score 100,000-499,000 and above. </dd> <dt> GreenShooting </dt> <dd> Green Shooting
     * Star, feedback score 500,000-999,000 and above. </dd> <dt> SilverShooting </dt> <dd> Silver Shooting Star, feedback score 1,000,000 or more. </dd> </dl>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $feedbackRatingStar;
    /**
     * The topRatedSeller
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the seller of the item is top rated. A <b>Top Rated Seller</b>: <ul> <li>Consistently receives highest buyers' ratings</li> <li>Ships items quickly</li> <li>Has earned a track record of excellent service</li> </ul>
     * eBay regularly reviews the performance of these sellers to confirm they continue to meet the program's requirements. <br><br> This field is returned for the following sites only: US (EBAY-US), Motors (EBAY-MOTOR), DE (EBAY-DE), AT (EBAY-AT), and CH
     * (EBAY-CH).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $topRatedSeller;
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
     * Constructor method for SellerInfo
     * @uses SellerInfo::setSellerUserName()
     * @uses SellerInfo::setFeedbackScore()
     * @uses SellerInfo::setPositiveFeedbackPercent()
     * @uses SellerInfo::setFeedbackRatingStar()
     * @uses SellerInfo::setTopRatedSeller()
     * @uses SellerInfo::setDelimiter()
     * @uses SellerInfo::setAny()
     * @param string $sellerUserName
     * @param int $feedbackScore
     * @param float $positiveFeedbackPercent
     * @param string $feedbackRatingStar
     * @param bool $topRatedSeller
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($sellerUserName = null, $feedbackScore = null, $positiveFeedbackPercent = null, $feedbackRatingStar = null, $topRatedSeller = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setSellerUserName($sellerUserName)
            ->setFeedbackScore($feedbackScore)
            ->setPositiveFeedbackPercent($positiveFeedbackPercent)
            ->setFeedbackRatingStar($feedbackRatingStar)
            ->setTopRatedSeller($topRatedSeller)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get sellerUserName value
     * @return string|null
     */
    public function getSellerUserName()
    {
        return $this->sellerUserName;
    }
    /**
     * Set sellerUserName value
     * @param string $sellerUserName
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo
     */
    public function setSellerUserName($sellerUserName = null)
    {
        // validation for constraint: string
        if (!is_null($sellerUserName) && !is_string($sellerUserName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerUserName)), __LINE__);
        }
        $this->sellerUserName = $sellerUserName;
        return $this;
    }
    /**
     * Get feedbackScore value
     * @return int|null
     */
    public function getFeedbackScore()
    {
        return $this->feedbackScore;
    }
    /**
     * Set feedbackScore value
     * @param int $feedbackScore
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo
     */
    public function setFeedbackScore($feedbackScore = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackScore) && !is_numeric($feedbackScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($feedbackScore)), __LINE__);
        }
        $this->feedbackScore = $feedbackScore;
        return $this;
    }
    /**
     * Get positiveFeedbackPercent value
     * @return float|null
     */
    public function getPositiveFeedbackPercent()
    {
        return $this->positiveFeedbackPercent;
    }
    /**
     * Set positiveFeedbackPercent value
     * @param float $positiveFeedbackPercent
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo
     */
    public function setPositiveFeedbackPercent($positiveFeedbackPercent = null)
    {
        $this->positiveFeedbackPercent = $positiveFeedbackPercent;
        return $this;
    }
    /**
     * Get feedbackRatingStar value
     * @return string|null
     */
    public function getFeedbackRatingStar()
    {
        return $this->feedbackRatingStar;
    }
    /**
     * Set feedbackRatingStar value
     * @param string $feedbackRatingStar
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo
     */
    public function setFeedbackRatingStar($feedbackRatingStar = null)
    {
        // validation for constraint: string
        if (!is_null($feedbackRatingStar) && !is_string($feedbackRatingStar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feedbackRatingStar)), __LINE__);
        }
        $this->feedbackRatingStar = $feedbackRatingStar;
        return $this;
    }
    /**
     * Get topRatedSeller value
     * @return bool|null
     */
    public function getTopRatedSeller()
    {
        return $this->topRatedSeller;
    }
    /**
     * Set topRatedSeller value
     * @param bool $topRatedSeller
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo
     */
    public function setTopRatedSeller($topRatedSeller = null)
    {
        // validation for constraint: boolean
        if (!is_null($topRatedSeller) && !is_bool($topRatedSeller)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($topRatedSeller)), __LINE__);
        }
        $this->topRatedSeller = $topRatedSeller;
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
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo
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
     * @uses \macropage\ebaysdk\finding\StructType\SellerInfo::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo
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
     * @return \macropage\ebaysdk\finding\StructType\SellerInfo
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
