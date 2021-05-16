<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateTestUserRegistrationRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Requests to enable a test user to sell items in the Sandbox environment.
 * @subpackage Structs
 */
class ValidateTestUserRegistrationRequestType extends AbstractRequestType
{
    /**
     * The FeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: Value for the feedback score of a user. If no value is passed in the request, or if the value is zero, the feedback score is unchanged. This element is not intended for regularly testing feedback because the feedback value can change
     * after the request.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FeedbackScore = null;
    /**
     * The RegistrationDate
     * Meta information extracted from the WSDL
     * - documentation: Value for the date and time that a user's registration begins.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RegistrationDate = null;
    /**
     * The SubscribeSA
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable since the Seller Assistant feature is no longer available.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SubscribeSA = null;
    /**
     * The SubscribeSAPro
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable since the Seller Assistant Pro feature is no longer available.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SubscribeSAPro = null;
    /**
     * The SubscribeSM
     * Meta information extracted from the WSDL
     * - documentation: Indicates if a user subscribes to Selling Manager. You cannot request to subscribe a user to both Selling Manager and Selling Manager Pro. You cannot request to unsubscribe a user.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SubscribeSM = null;
    /**
     * The SubscribeSMPro
     * Meta information extracted from the WSDL
     * - documentation: Indicates if a user subscribes to Selling Manager Pro. You cannot request to subscribe a user to both Selling Manager and Selling Manager Pro. You cannot request to unsubscribe a user.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SubscribeSMPro = null;
    /**
     * Constructor method for ValidateTestUserRegistrationRequestType
     * @uses ValidateTestUserRegistrationRequestType::setFeedbackScore()
     * @uses ValidateTestUserRegistrationRequestType::setRegistrationDate()
     * @uses ValidateTestUserRegistrationRequestType::setSubscribeSA()
     * @uses ValidateTestUserRegistrationRequestType::setSubscribeSAPro()
     * @uses ValidateTestUserRegistrationRequestType::setSubscribeSM()
     * @uses ValidateTestUserRegistrationRequestType::setSubscribeSMPro()
     * @param int $feedbackScore
     * @param string $registrationDate
     * @param bool $subscribeSA
     * @param bool $subscribeSAPro
     * @param bool $subscribeSM
     * @param bool $subscribeSMPro
     */
    public function __construct(?int $feedbackScore = null, ?string $registrationDate = null, ?bool $subscribeSA = null, ?bool $subscribeSAPro = null, ?bool $subscribeSM = null, ?bool $subscribeSMPro = null)
    {
        $this
            ->setFeedbackScore($feedbackScore)
            ->setRegistrationDate($registrationDate)
            ->setSubscribeSA($subscribeSA)
            ->setSubscribeSAPro($subscribeSAPro)
            ->setSubscribeSM($subscribeSM)
            ->setSubscribeSMPro($subscribeSMPro);
    }
    /**
     * Get FeedbackScore value
     * @return int|null
     */
    public function getFeedbackScore(): ?int
    {
        return $this->FeedbackScore;
    }
    /**
     * Set FeedbackScore value
     * @param int $feedbackScore
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setFeedbackScore(?int $feedbackScore = null): self
    {
        // validation for constraint: int
        if (!is_null($feedbackScore) && !(is_int($feedbackScore) || ctype_digit($feedbackScore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackScore, true), gettype($feedbackScore)), __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
        
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string|null
     */
    public function getRegistrationDate(): ?string
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setRegistrationDate(?string $registrationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationDate, true), gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
        
        return $this;
    }
    /**
     * Get SubscribeSA value
     * @return bool|null
     */
    public function getSubscribeSA(): ?bool
    {
        return $this->SubscribeSA;
    }
    /**
     * Set SubscribeSA value
     * @param bool $subscribeSA
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSA(?bool $subscribeSA = null): self
    {
        // validation for constraint: boolean
        if (!is_null($subscribeSA) && !is_bool($subscribeSA)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscribeSA, true), gettype($subscribeSA)), __LINE__);
        }
        $this->SubscribeSA = $subscribeSA;
        
        return $this;
    }
    /**
     * Get SubscribeSAPro value
     * @return bool|null
     */
    public function getSubscribeSAPro(): ?bool
    {
        return $this->SubscribeSAPro;
    }
    /**
     * Set SubscribeSAPro value
     * @param bool $subscribeSAPro
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSAPro(?bool $subscribeSAPro = null): self
    {
        // validation for constraint: boolean
        if (!is_null($subscribeSAPro) && !is_bool($subscribeSAPro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscribeSAPro, true), gettype($subscribeSAPro)), __LINE__);
        }
        $this->SubscribeSAPro = $subscribeSAPro;
        
        return $this;
    }
    /**
     * Get SubscribeSM value
     * @return bool|null
     */
    public function getSubscribeSM(): ?bool
    {
        return $this->SubscribeSM;
    }
    /**
     * Set SubscribeSM value
     * @param bool $subscribeSM
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSM(?bool $subscribeSM = null): self
    {
        // validation for constraint: boolean
        if (!is_null($subscribeSM) && !is_bool($subscribeSM)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscribeSM, true), gettype($subscribeSM)), __LINE__);
        }
        $this->SubscribeSM = $subscribeSM;
        
        return $this;
    }
    /**
     * Get SubscribeSMPro value
     * @return bool|null
     */
    public function getSubscribeSMPro(): ?bool
    {
        return $this->SubscribeSMPro;
    }
    /**
     * Set SubscribeSMPro value
     * @param bool $subscribeSMPro
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSMPro(?bool $subscribeSMPro = null): self
    {
        // validation for constraint: boolean
        if (!is_null($subscribeSMPro) && !is_bool($subscribeSMPro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscribeSMPro, true), gettype($subscribeSMPro)), __LINE__);
        }
        $this->SubscribeSMPro = $subscribeSMPro;
        
        return $this;
    }
}
