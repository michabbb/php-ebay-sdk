<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifiedUserRequirementsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 * @subpackage Structs
 */
class VerifiedUserRequirementsType extends AbstractStructBase
{
    /**
     * The VerifiedUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $VerifiedUser;
    /**
     * The MinimumFeedbackScore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimumFeedbackScore;
    /**
     * Constructor method for VerifiedUserRequirementsType
     * @uses VerifiedUserRequirementsType::setVerifiedUser()
     * @uses VerifiedUserRequirementsType::setMinimumFeedbackScore()
     * @param bool $verifiedUser
     * @param int $minimumFeedbackScore
     */
    public function __construct($verifiedUser = null, $minimumFeedbackScore = null)
    {
        $this
            ->setVerifiedUser($verifiedUser)
            ->setMinimumFeedbackScore($minimumFeedbackScore);
    }
    /**
     * Get VerifiedUser value
     * @return bool|null
     */
    public function getVerifiedUser()
    {
        return $this->VerifiedUser;
    }
    /**
     * Set VerifiedUser value
     * @param bool $verifiedUser
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsType
     */
    public function setVerifiedUser($verifiedUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($verifiedUser) && !is_bool($verifiedUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($verifiedUser)), __LINE__);
        }
        $this->VerifiedUser = $verifiedUser;
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsType
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsType
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
