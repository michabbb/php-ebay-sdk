<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumItemRequirementsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>MaximumItemRequirements</b> container to specify the maximum quantity of an order line item that a prospective buyer may purchase during any given 10-day period.
 * @subpackage Structs
 */
class MaximumItemRequirementsType extends AbstractStructBase
{
    /**
     * The MaximumItemCount
     * Meta informations extracted from the WSDL
     * - documentation: This field is conditionally required if the <b>MaximumItemRequirements</b> container is used. <br/><br/> The value of this field specifies the maximum quantity of an order line item that a prospective buyer may purchase from the
     * seller during any given 10-day period. The prospective buyer will be blocked from bidding/buying once this value is reached. <br/><br/> <b>Valid values for the US site:</b> 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 25, 50, 75, and 100. <br/> To see the valid
     * values for your site, call <b>GeteBayDetails</b> with <b>DetailName</b> set to <b>BuyerRequirementDetails</b>, and then look for the <b>BuyerRequirementDetails.MaximumItemRequirements.MaximumItemCount</b> fields. <br/><br/> If the
     * <b>MaximumItemRequirements.MinimumFeedbackScore</b> field is also specified, the <b>MaximumItemCount</b> limit will only apply to those prospective buyers who don't meet the specified Minimum Feedback Score threshold.
     * - minOccurs: 0
     * @var int
     */
    public $MaximumItemCount;
    /**
     * The MinimumFeedbackScore
     * Meta informations extracted from the WSDL
     * - documentation: This is an optional field that is ignored if a <b>MaximumItemCount</b> value has not been provided. <br><br> If this field is used, a prospective buyer is blocked from bidding/buying if they have reached or exceeded the
     * <b>MaximumItemCount</b> and their feedback score is less than the value of this field. <br/><br/> <b>Valid values for the US site:</b> 0, 1, 2, 3, 4, and 5. <br/> To see the valid values for your site, call <b>GeteBayDetails</b> with
     * <b>DetailName</b> set to <b>BuyerRequirementDetails</b>, and then look for the <b>BuyerRequirementDetails.MaximumItemRequirements.MinimumFeedbackScore</b> fields.
     * - minOccurs: 0
     * @var int
     */
    public $MinimumFeedbackScore;
    /**
     * Constructor method for MaximumItemRequirementsType
     * @uses MaximumItemRequirementsType::setMaximumItemCount()
     * @uses MaximumItemRequirementsType::setMinimumFeedbackScore()
     * @param int $maximumItemCount
     * @param int $minimumFeedbackScore
     */
    public function __construct($maximumItemCount = null, $minimumFeedbackScore = null)
    {
        $this
            ->setMaximumItemCount($maximumItemCount)
            ->setMinimumFeedbackScore($minimumFeedbackScore);
    }
    /**
     * Get MaximumItemCount value
     * @return int|null
     */
    public function getMaximumItemCount()
    {
        return $this->MaximumItemCount;
    }
    /**
     * Set MaximumItemCount value
     * @param int $maximumItemCount
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType
     */
    public function setMaximumItemCount($maximumItemCount = null)
    {
        // validation for constraint: int
        if (!is_null($maximumItemCount) && !is_numeric($maximumItemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumItemCount)), __LINE__);
        }
        $this->MaximumItemCount = $maximumItemCount;
        return $this;
    }
    /**
     * Get MinimumFeedbackScore value
     * @return int|null
     */
    public function getMinimumFeedbackScore()
    {
        return $this->MinimumFeedbackScore;
    }
    /**
     * Set MinimumFeedbackScore value
     * @param int $minimumFeedbackScore
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType
     */
    public function setMinimumFeedbackScore($minimumFeedbackScore = null)
    {
        // validation for constraint: int
        if (!is_null($minimumFeedbackScore) && !is_numeric($minimumFeedbackScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumFeedbackScore)), __LINE__);
        }
        $this->MinimumFeedbackScore = $minimumFeedbackScore;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\MaximumItemRequirementsType
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
