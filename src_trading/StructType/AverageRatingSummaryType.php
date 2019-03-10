<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AverageRatingSummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>AverageRatingSummary</b> container that is returned in the <b>GetFeedback</b> call to display the seller's rating information across the four different Detail Seller Rating areas. The Detail Seller Rating
 * subject areas include Item as Described, Communication, Shipping Time, and Shipping and Handling charges.
 * @subpackage Structs
 */
class AverageRatingSummaryType extends AbstractStructBase
{
    /**
     * The FeedbackSummaryPeriod
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value will indicate whether the statistics in each AverageRatingDetails container is for the last year (<code>FiftyTwoWeeks</code>) or the last month (<code>ThirtyDays</code>).
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackSummaryPeriod;
    /**
     * The AverageRatingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Applicable to sites that support the Detailed Seller Ratings feature. Each <b>AverageRatingDetails</b> container consists of the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive,
     * neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[]
     */
    public $AverageRatingDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AverageRatingSummaryType
     * @uses AverageRatingSummaryType::setFeedbackSummaryPeriod()
     * @uses AverageRatingSummaryType::setAverageRatingDetails()
     * @uses AverageRatingSummaryType::setAny()
     * @param string $feedbackSummaryPeriod
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @param \DOMDocument $any
     */
    public function __construct($feedbackSummaryPeriod = null, array $averageRatingDetails = array(), \DOMDocument $any = null)
    {
        $this
            ->setFeedbackSummaryPeriod($feedbackSummaryPeriod)
            ->setAverageRatingDetails($averageRatingDetails)
            ->setAny($any);
    }
    /**
     * Get FeedbackSummaryPeriod value
     * @return string|null
     */
    public function getFeedbackSummaryPeriod()
    {
        return $this->FeedbackSummaryPeriod;
    }
    /**
     * Set FeedbackSummaryPeriod value
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackSummaryPeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FeedbackSummaryPeriodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $feedbackSummaryPeriod
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
     */
    public function setFeedbackSummaryPeriod($feedbackSummaryPeriod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FeedbackSummaryPeriodCodeType::valueIsValid($feedbackSummaryPeriod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $feedbackSummaryPeriod, implode(', ', \macropage\ebaysdk\trading\EnumType\FeedbackSummaryPeriodCodeType::getValidValues())), __LINE__);
        }
        $this->FeedbackSummaryPeriod = $feedbackSummaryPeriod;
        return $this;
    }
    /**
     * Get AverageRatingDetails value
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[]|null
     */
    public function getAverageRatingDetails()
    {
        return $this->AverageRatingDetails;
    }
    /**
     * Set AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType[] $averageRatingDetails
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
     */
    public function setAverageRatingDetails(array $averageRatingDetails = array())
    {
        foreach ($averageRatingDetails as $averageRatingSummaryTypeAverageRatingDetailsItem) {
            // validation for constraint: itemType
            if (!$averageRatingSummaryTypeAverageRatingDetailsItem instanceof \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType) {
                throw new \InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType, "%s" given', is_object($averageRatingSummaryTypeAverageRatingDetailsItem) ? get_class($averageRatingSummaryTypeAverageRatingDetailsItem) : gettype($averageRatingSummaryTypeAverageRatingDetailsItem)), __LINE__);
            }
        }
        $this->AverageRatingDetails = $averageRatingDetails;
        return $this;
    }
    /**
     * Add item to AverageRatingDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
     */
    public function addToAverageRatingDetails(\macropage\ebaysdk\trading\StructType\AverageRatingDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType) {
            throw new \InvalidArgumentException(sprintf('The AverageRatingDetails property can only contain items of \macropage\ebaysdk\trading\StructType\AverageRatingDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AverageRatingDetails[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
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
     * @return \macropage\ebaysdk\trading\StructType\AverageRatingSummaryType
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
