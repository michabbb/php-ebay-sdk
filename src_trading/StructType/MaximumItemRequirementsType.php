<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumItemRequirementsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>MaximumItemRequirements</b> container to specify the maximum quantity of an order line item that a prospective buyer may purchase during any given 10-day period.
 * @subpackage Structs
 */
class MaximumItemRequirementsType extends AbstractStructBase
{
    /**
     * The MaximumItemCount
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the maximum quantity of a line item that one prospective buyer may purchase from the listing. <br/><br/> This buyer requirement is only applicable to fixed-price listings where multiple quantity is available for
     * purchase. <br/><br/> If the <b>MinimumFeedbackScore</b> field is also set/returned, the maximum quantity threshold value will only apply to those prospective buyers who don't meet or exceed the minimum Feedback score threshold returned in that field.
     * If the <b>MinimumFeedbackScore</b> field not set/returned, the maximum quantity threshold value will apply to all prospective buyers. <br/><br/> This field is always returned along with the <b>MaximumItemRequirements</b> container.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaximumItemCount = null;
    /**
     * The MinimumFeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: If this field is returned, it indicates that the seller has set a maximum quantity threshold value, but this maximum quantity threshold value (returned in <b>MaximumItemCount</b> will only apply to those prospective buyers who don't
     * meet or exceed the minimum Feedback score threshold returned in this field. If this field is not returned, the maximum quantity threshold value will apply to all prospective buyers.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinimumFeedbackScore = null;
    /**
     * Constructor method for MaximumItemRequirementsType
     * @uses MaximumItemRequirementsType::setMaximumItemCount()
     * @uses MaximumItemRequirementsType::setMinimumFeedbackScore()
     * @param int $maximumItemCount
     * @param int $minimumFeedbackScore
     */
    public function __construct(?int $maximumItemCount = null, ?int $minimumFeedbackScore = null)
    {
        $this
            ->setMaximumItemCount($maximumItemCount)
            ->setMinimumFeedbackScore($minimumFeedbackScore);
    }
    /**
     * Get MaximumItemCount value
     * @return int|null
     */
    public function getMaximumItemCount(): ?int
    {
        return $this->MaximumItemCount;
    }
    /**
     * Set MaximumItemCount value
     * @param int $maximumItemCount
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType
     */
    public function setMaximumItemCount(?int $maximumItemCount = null): self
    {
        // validation for constraint: int
        if (!is_null($maximumItemCount) && !(is_int($maximumItemCount) || ctype_digit($maximumItemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumItemCount, true), gettype($maximumItemCount)), __LINE__);
        }
        $this->MaximumItemCount = $maximumItemCount;
        
        return $this;
    }
    /**
     * Get MinimumFeedbackScore value
     * @return int|null
     */
    public function getMinimumFeedbackScore(): ?int
    {
        return $this->MinimumFeedbackScore;
    }
    /**
     * Set MinimumFeedbackScore value
     * @param int $minimumFeedbackScore
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType
     */
    public function setMinimumFeedbackScore(?int $minimumFeedbackScore = null): self
    {
        // validation for constraint: int
        if (!is_null($minimumFeedbackScore) && !(is_int($minimumFeedbackScore) || ctype_digit($minimumFeedbackScore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minimumFeedbackScore, true), gettype($minimumFeedbackScore)), __LINE__);
        }
        $this->MinimumFeedbackScore = $minimumFeedbackScore;
        
        return $this;
    }
}
