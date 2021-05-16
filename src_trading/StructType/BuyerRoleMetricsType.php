<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerRoleMetricsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRoleMetrics</b> container, which consists of details relating to the eBay buyer's one-year history of leaving feedback for the seller.
 * @subpackage Structs
 */
class BuyerRoleMetricsType extends AbstractStructBase
{
    /**
     * The PositiveFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of positive feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PositiveFeedbackLeftCount = null;
    /**
     * The NegativeFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of negative feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NegativeFeedbackLeftCount = null;
    /**
     * The NeutralFeedbackLeftCount
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of neutral feedback entries that the eBay user, acting in the buying role, has left for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NeutralFeedbackLeftCount = null;
    /**
     * The FeedbackLeftPercent
     * Meta information extracted from the WSDL
     * - documentation: This float value indicates the percentage of time that the eBay user, acting in the buying role, has left feedback for their order partner (seller) during the last one-year period, counting back from the present date.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $FeedbackLeftPercent = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $positiveFeedbackLeftCount = null, ?int $negativeFeedbackLeftCount = null, ?int $neutralFeedbackLeftCount = null, ?float $feedbackLeftPercent = null, $any = null)
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
    public function getPositiveFeedbackLeftCount(): ?int
    {
        return $this->PositiveFeedbackLeftCount;
    }
    /**
     * Set PositiveFeedbackLeftCount value
     * @param int $positiveFeedbackLeftCount
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerRoleMetricsType
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
