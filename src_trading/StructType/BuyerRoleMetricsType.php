<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerRoleMetricsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRoleMetrics</b> container, which consists of details relating to the eBay buyer's one-year history of leaving feedback for the seller.
 * @subpackage Structs
 */
class BuyerRoleMetricsType extends AbstractStructBase
{
    /**
     * The PositiveFeedbackLeftCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the number of positive feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int
     */
    public $PositiveFeedbackLeftCount;
    /**
     * The NegativeFeedbackLeftCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the number of negative feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int
     */
    public $NegativeFeedbackLeftCount;
    /**
     * The NeutralFeedbackLeftCount
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the number of neutral feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int
     */
    public $NeutralFeedbackLeftCount;
    /**
     * The FeedbackLeftPercent
     * Meta informations extracted from the WSDL
     * - documentation: This float value indicates the percentage of time that the eBay user, acting in the buying role, has left feedback for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var float
     */
    public $FeedbackLeftPercent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerRoleMetricsType
     * @uses BuyerRoleMetricsType::setPositiveFeedbackLeftCount()
     * @uses BuyerRoleMetricsType::setNegativeFeedbackLeftCount()
     * @uses BuyerRoleMetricsType::setNeutralFeedbackLeftCount()
     * @uses BuyerRoleMetricsType::setFeedbackLeftPercent()
     * @uses BuyerRoleMetricsType::setAny()
     * @param int $positiveFeedbackLeftCount
     * @param int $negativeFeedbackLeftCount
     * @param int $neutralFeedbackLeftCount
     * @param float $feedbackLeftPercent
     * @param \DOMDocument $any
     */
    public function __construct($positiveFeedbackLeftCount = null, $negativeFeedbackLeftCount = null, $neutralFeedbackLeftCount = null, $feedbackLeftPercent = null, \DOMDocument $any = null)
    {
        $this
            ->setPositiveFeedbackLeftCount($positiveFeedbackLeftCount)
            ->setNegativeFeedbackLeftCount($negativeFeedbackLeftCount)
            ->setNeutralFeedbackLeftCount($neutralFeedbackLeftCount)
            ->setFeedbackLeftPercent($feedbackLeftPercent)
            ->setAny($any);
    }
    /**
     * Get PositiveFeedbackLeftCount value
     * @return int|null
     */
    public function getPositiveFeedbackLeftCount()
    {
        return $this->PositiveFeedbackLeftCount;
    }
    /**
     * Set PositiveFeedbackLeftCount value
     * @param int $positiveFeedbackLeftCount
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
     */
    public function setPositiveFeedbackLeftCount($positiveFeedbackLeftCount = null)
    {
        // validation for constraint: int
        if (!is_null($positiveFeedbackLeftCount) && !is_numeric($positiveFeedbackLeftCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($positiveFeedbackLeftCount)), __LINE__);
        }
        $this->PositiveFeedbackLeftCount = $positiveFeedbackLeftCount;
        return $this;
    }
    /**
     * Get NegativeFeedbackLeftCount value
     * @return int|null
     */
    public function getNegativeFeedbackLeftCount()
    {
        return $this->NegativeFeedbackLeftCount;
    }
    /**
     * Set NegativeFeedbackLeftCount value
     * @param int $negativeFeedbackLeftCount
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
     */
    public function setNegativeFeedbackLeftCount($negativeFeedbackLeftCount = null)
    {
        // validation for constraint: int
        if (!is_null($negativeFeedbackLeftCount) && !is_numeric($negativeFeedbackLeftCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($negativeFeedbackLeftCount)), __LINE__);
        }
        $this->NegativeFeedbackLeftCount = $negativeFeedbackLeftCount;
        return $this;
    }
    /**
     * Get NeutralFeedbackLeftCount value
     * @return int|null
     */
    public function getNeutralFeedbackLeftCount()
    {
        return $this->NeutralFeedbackLeftCount;
    }
    /**
     * Set NeutralFeedbackLeftCount value
     * @param int $neutralFeedbackLeftCount
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
     */
    public function setNeutralFeedbackLeftCount($neutralFeedbackLeftCount = null)
    {
        // validation for constraint: int
        if (!is_null($neutralFeedbackLeftCount) && !is_numeric($neutralFeedbackLeftCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($neutralFeedbackLeftCount)), __LINE__);
        }
        $this->NeutralFeedbackLeftCount = $neutralFeedbackLeftCount;
        return $this;
    }
    /**
     * Get FeedbackLeftPercent value
     * @return float|null
     */
    public function getFeedbackLeftPercent()
    {
        return $this->FeedbackLeftPercent;
    }
    /**
     * Set FeedbackLeftPercent value
     * @param float $feedbackLeftPercent
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
     */
    public function setFeedbackLeftPercent($feedbackLeftPercent = null)
    {
        $this->FeedbackLeftPercent = $feedbackLeftPercent;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
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
