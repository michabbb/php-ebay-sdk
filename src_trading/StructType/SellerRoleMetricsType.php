<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerRoleMetricsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies 1 year feedback metrics for a seller.
 * @subpackage Structs
 */
class SellerRoleMetricsType extends AbstractStructBase
{
    /**
     * The PositiveFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: Count of positive feedback entries given as a seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PositiveFeedbackLeftCount = null;
    /**
     * The NegativeFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: Count of negative feedback entries given as a seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NegativeFeedbackLeftCount = null;
    /**
     * The NeutralFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: Count of neutral feedback entries given as a seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NeutralFeedbackLeftCount = null;
    /**
     * The FeedbackLeftPercent
     * Meta information extracted from the WSDL
     * - documentation: Percentage of leaving feedback as a seller.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $FeedbackLeftPercent = null;
    /**
     * The RepeatBuyerCount
     * Meta information extracted from the WSDL
     * - documentation: Number of buyers who bought more than once from this seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RepeatBuyerCount = null;
    /**
     * The RepeatBuyerPercent
     * Meta information extracted from the WSDL
     * - documentation: Percentage of repeat buyers.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $RepeatBuyerPercent = null;
    /**
     * The UniqueBuyerCount
     * Meta information extracted from the WSDL
     * - documentation: Count of unique buyers from this seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UniqueBuyerCount = null;
    /**
     * The TransactionPercent
     * Meta information extracted from the WSDL
     * - documentation: Percentage of number of times a member has sold successfully vs. the number of times a member has bought an item in the preceding 365 days.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $TransactionPercent = null;
    /**
     * The CrossBorderTransactionCount
     * Meta information extracted from the WSDL
     * - documentation: The count of Cross-Border Trade order line items.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CrossBorderTransactionCount = null;
    /**
     * The CrossBorderTransactionPercent
     * Meta information extracted from the WSDL
     * - documentation: The percentage of order line items that are Cross-Border Trade order line items.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $CrossBorderTransactionPercent = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $positiveFeedbackLeftCount = null, ?int $negativeFeedbackLeftCount = null, ?int $neutralFeedbackLeftCount = null, ?float $feedbackLeftPercent = null, ?int $repeatBuyerCount = null, ?float $repeatBuyerPercent = null, ?int $uniqueBuyerCount = null, ?float $transactionPercent = null, ?int $crossBorderTransactionCount = null, ?float $crossBorderTransactionPercent = null, $any = null)
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
    public function getPositiveFeedbackLeftCount(): ?int
    {
        return $this->PositiveFeedbackLeftCount;
    }
    /**
     * Set PositiveFeedbackLeftCount value
     * @param int $positiveFeedbackLeftCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setPositiveFeedbackLeftCount(?int $positiveFeedbackLeftCount = null): self
    {
        // validation for constraint: int
        if (!is_null($positiveFeedbackLeftCount) && !(is_int($positiveFeedbackLeftCount) || ctype_digit($positiveFeedbackLeftCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positiveFeedbackLeftCount, true), gettype($positiveFeedbackLeftCount)), __LINE__);
        }
        $this->PositiveFeedbackLeftCount = $positiveFeedbackLeftCount;
        
        return $this;
    }
    /**
     * Get NegativeFeedbackLeftCount value
     * @return int|null
     */
    public function getNegativeFeedbackLeftCount(): ?int
    {
        return $this->NegativeFeedbackLeftCount;
    }
    /**
     * Set NegativeFeedbackLeftCount value
     * @param int $negativeFeedbackLeftCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setNegativeFeedbackLeftCount(?int $negativeFeedbackLeftCount = null): self
    {
        // validation for constraint: int
        if (!is_null($negativeFeedbackLeftCount) && !(is_int($negativeFeedbackLeftCount) || ctype_digit($negativeFeedbackLeftCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($negativeFeedbackLeftCount, true), gettype($negativeFeedbackLeftCount)), __LINE__);
        }
        $this->NegativeFeedbackLeftCount = $negativeFeedbackLeftCount;
        
        return $this;
    }
    /**
     * Get NeutralFeedbackLeftCount value
     * @return int|null
     */
    public function getNeutralFeedbackLeftCount(): ?int
    {
        return $this->NeutralFeedbackLeftCount;
    }
    /**
     * Set NeutralFeedbackLeftCount value
     * @param int $neutralFeedbackLeftCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setNeutralFeedbackLeftCount(?int $neutralFeedbackLeftCount = null): self
    {
        // validation for constraint: int
        if (!is_null($neutralFeedbackLeftCount) && !(is_int($neutralFeedbackLeftCount) || ctype_digit($neutralFeedbackLeftCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($neutralFeedbackLeftCount, true), gettype($neutralFeedbackLeftCount)), __LINE__);
        }
        $this->NeutralFeedbackLeftCount = $neutralFeedbackLeftCount;
        
        return $this;
    }
    /**
     * Get FeedbackLeftPercent value
     * @return float|null
     */
    public function getFeedbackLeftPercent(): ?float
    {
        return $this->FeedbackLeftPercent;
    }
    /**
     * Set FeedbackLeftPercent value
     * @param float $feedbackLeftPercent
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setFeedbackLeftPercent(?float $feedbackLeftPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($feedbackLeftPercent) && !(is_float($feedbackLeftPercent) || is_numeric($feedbackLeftPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feedbackLeftPercent, true), gettype($feedbackLeftPercent)), __LINE__);
        }
        $this->FeedbackLeftPercent = $feedbackLeftPercent;
        
        return $this;
    }
    /**
     * Get RepeatBuyerCount value
     * @return int|null
     */
    public function getRepeatBuyerCount(): ?int
    {
        return $this->RepeatBuyerCount;
    }
    /**
     * Set RepeatBuyerCount value
     * @param int $repeatBuyerCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setRepeatBuyerCount(?int $repeatBuyerCount = null): self
    {
        // validation for constraint: int
        if (!is_null($repeatBuyerCount) && !(is_int($repeatBuyerCount) || ctype_digit($repeatBuyerCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repeatBuyerCount, true), gettype($repeatBuyerCount)), __LINE__);
        }
        $this->RepeatBuyerCount = $repeatBuyerCount;
        
        return $this;
    }
    /**
     * Get RepeatBuyerPercent value
     * @return float|null
     */
    public function getRepeatBuyerPercent(): ?float
    {
        return $this->RepeatBuyerPercent;
    }
    /**
     * Set RepeatBuyerPercent value
     * @param float $repeatBuyerPercent
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setRepeatBuyerPercent(?float $repeatBuyerPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($repeatBuyerPercent) && !(is_float($repeatBuyerPercent) || is_numeric($repeatBuyerPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($repeatBuyerPercent, true), gettype($repeatBuyerPercent)), __LINE__);
        }
        $this->RepeatBuyerPercent = $repeatBuyerPercent;
        
        return $this;
    }
    /**
     * Get UniqueBuyerCount value
     * @return int|null
     */
    public function getUniqueBuyerCount(): ?int
    {
        return $this->UniqueBuyerCount;
    }
    /**
     * Set UniqueBuyerCount value
     * @param int $uniqueBuyerCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setUniqueBuyerCount(?int $uniqueBuyerCount = null): self
    {
        // validation for constraint: int
        if (!is_null($uniqueBuyerCount) && !(is_int($uniqueBuyerCount) || ctype_digit($uniqueBuyerCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uniqueBuyerCount, true), gettype($uniqueBuyerCount)), __LINE__);
        }
        $this->UniqueBuyerCount = $uniqueBuyerCount;
        
        return $this;
    }
    /**
     * Get TransactionPercent value
     * @return float|null
     */
    public function getTransactionPercent(): ?float
    {
        return $this->TransactionPercent;
    }
    /**
     * Set TransactionPercent value
     * @param float $transactionPercent
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setTransactionPercent(?float $transactionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($transactionPercent) && !(is_float($transactionPercent) || is_numeric($transactionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($transactionPercent, true), gettype($transactionPercent)), __LINE__);
        }
        $this->TransactionPercent = $transactionPercent;
        
        return $this;
    }
    /**
     * Get CrossBorderTransactionCount value
     * @return int|null
     */
    public function getCrossBorderTransactionCount(): ?int
    {
        return $this->CrossBorderTransactionCount;
    }
    /**
     * Set CrossBorderTransactionCount value
     * @param int $crossBorderTransactionCount
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setCrossBorderTransactionCount(?int $crossBorderTransactionCount = null): self
    {
        // validation for constraint: int
        if (!is_null($crossBorderTransactionCount) && !(is_int($crossBorderTransactionCount) || ctype_digit($crossBorderTransactionCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($crossBorderTransactionCount, true), gettype($crossBorderTransactionCount)), __LINE__);
        }
        $this->CrossBorderTransactionCount = $crossBorderTransactionCount;
        
        return $this;
    }
    /**
     * Get CrossBorderTransactionPercent value
     * @return float|null
     */
    public function getCrossBorderTransactionPercent(): ?float
    {
        return $this->CrossBorderTransactionPercent;
    }
    /**
     * Set CrossBorderTransactionPercent value
     * @param float $crossBorderTransactionPercent
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
     */
    public function setCrossBorderTransactionPercent(?float $crossBorderTransactionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($crossBorderTransactionPercent) && !(is_float($crossBorderTransactionPercent) || is_numeric($crossBorderTransactionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($crossBorderTransactionPercent, true), gettype($crossBorderTransactionPercent)), __LINE__);
        }
        $this->CrossBorderTransactionPercent = $crossBorderTransactionPercent;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerRoleMetricsType
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
