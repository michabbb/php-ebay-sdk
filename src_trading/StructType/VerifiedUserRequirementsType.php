<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifiedUserRequirementsType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Verified User Buyer Requirement has been deprecated, so this type is no longer applicable.
 * @subpackage Structs
 */
class VerifiedUserRequirementsType extends AbstractStructBase
{
    /**
     * The VerifiedUser
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $VerifiedUser = null;
    /**
     * The MinimumFeedbackScore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinimumFeedbackScore = null;
    /**
     * Constructor method for VerifiedUserRequirementsType
     * @uses VerifiedUserRequirementsType::setVerifiedUser()
     * @uses VerifiedUserRequirementsType::setMinimumFeedbackScore()
     * @param bool $verifiedUser
     * @param int $minimumFeedbackScore
     */
    public function __construct(?bool $verifiedUser = null, ?int $minimumFeedbackScore = null)
    {
        $this
            ->setVerifiedUser($verifiedUser)
            ->setMinimumFeedbackScore($minimumFeedbackScore);
    }
    /**
     * Get VerifiedUser value
     * @return bool|null
     */
    public function getVerifiedUser(): ?bool
    {
        return $this->VerifiedUser;
    }
    /**
     * Set VerifiedUser value
     * @param bool $verifiedUser
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsType
     */
    public function setVerifiedUser(?bool $verifiedUser = null): self
    {
        // validation for constraint: boolean
        if (!is_null($verifiedUser) && !is_bool($verifiedUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verifiedUser, true), gettype($verifiedUser)), __LINE__);
        }
        $this->VerifiedUser = $verifiedUser;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VerifiedUserRequirementsType
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
