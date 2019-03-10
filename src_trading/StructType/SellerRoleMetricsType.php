<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerRoleMetricsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies 1 year feedback metrics for a seller.
 * @subpackage Structs
 */
class SellerRoleMetricsType extends AbstractStructBase
{
    /**
     * The PositiveFeedbackLeftCount
     * Meta informations extracted from the WSDL
     * - documentation: Count of positive feedback entries given as a seller.
     * - minOccurs: 0
     * @var int
     */
    public $PositiveFeedbackLeftCount;
    /**
     * The NegativeFeedbackLeftCount
     * Meta informations extracted from the WSDL
     * - documentation: Count of negative feedback entries given as a seller.
     * - minOccurs: 0
     * @var int
     */
    public $NegativeFeedbackLeftCount;
    /**
     * The NeutralFeedbackLeftCount
     * Meta informations extracted from the WSDL
     * - documentation: Count of neutral feedback entries given as a seller.
     * - minOccurs: 0
     * @var int
     */
    public $NeutralFeedbackLeftCount;
    /**
     * The FeedbackLeftPercent
     * Meta informations extracted from the WSDL
     * - documentation: Percentage of leaving feedback as a seller.
     * - minOccurs: 0
     * @var float
     */
    public $FeedbackLeftPercent;
    /**
     * The RepeatBuyerCount
     * Meta informations extracted from the WSDL
     * - documentation: Number of buyers who bought more than once from this seller.
     * - minOccurs: 0
     * @var int
     */
    public $RepeatBuyerCount;
    /**
     * The RepeatBuyerPercent
     * Meta informations extracted from the WSDL
     * - documentation: Percentage of repeat buyers.
     * - minOccurs: 0
     * @var float
     */
    public $RepeatBuyerPercent;
    /**
     * The UniqueBuyerCount
     * Meta informations extracted from the WSDL
     * - documentation: Count of unique buyers from this seller.
     * - minOccurs: 0
     * @var int
     */
    public $UniqueBuyerCount;
    /**
     * The TransactionPercent
     * Meta informations extracted from the WSDL
     * - documentation: Percentage of number of times a member has sold successfully vs. the number of times a member has bought an item in the preceding 365 days.
     * - minOccurs: 0
     * @var float
     */
    public $TransactionPercent;
    /**
     * The CrossBorderTransactionCount
     * Meta informations extracted from the WSDL
     * - documentation: The count of Cross-Border Trade order line items.
     * - minOccurs: 0
     * @var int
     */
    public $CrossBorderTransactionCount;
    /**
     * The CrossBorderTransactionPercent
     * Meta informations extracted from the WSDL
     * - documentation: The percentage of order line items that are Cross-Border Trade order line items.
     * - minOccurs: 0
     * @var float
     */
    public $CrossBorderTransactionPercent;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerRoleMetricsType
     * @uses SellerRoleMetricsType::setPositiveFeedbackLeftCount()
     * @uses SellerRoleMetricsType::setNegativeFeedbackLeftCount()
     * @uses SellerRoleMetricsType::setNeutralFeedbackLeftCount()
     * @uses SellerRoleMetricsType::setFeedbackLeftPercent()
     * @uses SellerRoleMetricsType::setRepeatBuyerCount()
     * @uses SellerRoleMetricsType::setRepeatBuyerPercent()
     * @uses SellerRoleMetricsType::setUniqueBuyerCount()
     * @uses SellerRoleMetricsType::setTransactionPercent()
     * @uses SellerRoleMetricsType::setCrossBorderTransactionCount()
     * @uses SellerRoleMetricsType::setCrossBorderTransactionPercent()
     * @uses SellerRoleMetricsType::setAny()
     * @param int $positiveFeedbackLeftCount
     * @param int $negativeFeedbackLeftCount
     * @param int $neutralFeedbackLeftCount
     * @param float $feedbackLeftPercent
     * @param int $repeatBuyerCount
     * @param float $repeatBuyerPercent
     * @param int $uniqueBuyerCount
     * @param float $transactionPercent
     * @param int $crossBorderTransactionCount
     * @param float $crossBorderTransactionPercent
     * @param \DOMDocument $any
     */
    public function __construct($positiveFeedbackLeftCount = null, $negativeFeedbackLeftCount = null, $neutralFeedbackLeftCount = null, $feedbackLeftPercent = null, $repeatBuyerCount = null, $repeatBuyerPercent = null, $uniqueBuyerCount = null, $transactionPercent = null, $crossBorderTransactionCount = null, $crossBorderTransactionPercent = null, \DOMDocument $any = null)
    {
        $this
            ->setPositiveFeedbackLeftCount($positiveFeedbackLeftCount)
            ->setNegativeFeedbackLeftCount($negativeFeedbackLeftCount)
            ->setNeutralFeedbackLeftCount($neutralFeedbackLeftCount)
            ->setFeedbackLeftPercent($feedbackLeftPercent)
            ->setRepeatBuyerCount($repeatBuyerCount)
            ->setRepeatBuyerPercent($repeatBuyerPercent)
            ->setUniqueBuyerCount($uniqueBuyerCount)
            ->setTransactionPercent($transactionPercent)
            ->setCrossBorderTransactionCount($crossBorderTransactionCount)
            ->setCrossBorderTransactionPercent($crossBorderTransactionPercent)
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
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setFeedbackLeftPercent($feedbackLeftPercent = null)
    {
        $this->FeedbackLeftPercent = $feedbackLeftPercent;
        return $this;
    }
    /**
     * Get RepeatBuyerCount value
     * @return int|null
     */
    public function getRepeatBuyerCount()
    {
        return $this->RepeatBuyerCount;
    }
    /**
     * Set RepeatBuyerCount value
     * @param int $repeatBuyerCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setRepeatBuyerCount($repeatBuyerCount = null)
    {
        // validation for constraint: int
        if (!is_null($repeatBuyerCount) && !is_numeric($repeatBuyerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($repeatBuyerCount)), __LINE__);
        }
        $this->RepeatBuyerCount = $repeatBuyerCount;
        return $this;
    }
    /**
     * Get RepeatBuyerPercent value
     * @return float|null
     */
    public function getRepeatBuyerPercent()
    {
        return $this->RepeatBuyerPercent;
    }
    /**
     * Set RepeatBuyerPercent value
     * @param float $repeatBuyerPercent
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setRepeatBuyerPercent($repeatBuyerPercent = null)
    {
        $this->RepeatBuyerPercent = $repeatBuyerPercent;
        return $this;
    }
    /**
     * Get UniqueBuyerCount value
     * @return int|null
     */
    public function getUniqueBuyerCount()
    {
        return $this->UniqueBuyerCount;
    }
    /**
     * Set UniqueBuyerCount value
     * @param int $uniqueBuyerCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setUniqueBuyerCount($uniqueBuyerCount = null)
    {
        // validation for constraint: int
        if (!is_null($uniqueBuyerCount) && !is_numeric($uniqueBuyerCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($uniqueBuyerCount)), __LINE__);
        }
        $this->UniqueBuyerCount = $uniqueBuyerCount;
        return $this;
    }
    /**
     * Get TransactionPercent value
     * @return float|null
     */
    public function getTransactionPercent()
    {
        return $this->TransactionPercent;
    }
    /**
     * Set TransactionPercent value
     * @param float $transactionPercent
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setTransactionPercent($transactionPercent = null)
    {
        $this->TransactionPercent = $transactionPercent;
        return $this;
    }
    /**
     * Get CrossBorderTransactionCount value
     * @return int|null
     */
    public function getCrossBorderTransactionCount()
    {
        return $this->CrossBorderTransactionCount;
    }
    /**
     * Set CrossBorderTransactionCount value
     * @param int $crossBorderTransactionCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setCrossBorderTransactionCount($crossBorderTransactionCount = null)
    {
        // validation for constraint: int
        if (!is_null($crossBorderTransactionCount) && !is_numeric($crossBorderTransactionCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($crossBorderTransactionCount)), __LINE__);
        }
        $this->CrossBorderTransactionCount = $crossBorderTransactionCount;
        return $this;
    }
    /**
     * Get CrossBorderTransactionPercent value
     * @return float|null
     */
    public function getCrossBorderTransactionPercent()
    {
        return $this->CrossBorderTransactionPercent;
    }
    /**
     * Set CrossBorderTransactionPercent value
     * @param float $crossBorderTransactionPercent
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setCrossBorderTransactionPercent($crossBorderTransactionPercent = null)
    {
        $this->CrossBorderTransactionPercent = $crossBorderTransactionPercent;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
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
