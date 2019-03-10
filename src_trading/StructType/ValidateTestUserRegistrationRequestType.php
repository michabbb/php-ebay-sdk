<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateTestUserRegistrationRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Requests to enable a test user to sell items in the Sandbox environment.
 * @subpackage Structs
 */
class ValidateTestUserRegistrationRequestType extends AbstractRequestType
{
    /**
     * The FeedbackScore
     * Meta informations extracted from the WSDL
     * - documentation: Value for the feedback score of a user. If no value is passed in the request, or if the value is zero, the feedback score is unchanged. This element is not intended for regularly testing feedback because the feedback value can change
     * after the request.
     * - minOccurs: 0
     * @var int
     */
    public $FeedbackScore;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - documentation: Value for the date and time that a user's registration begins.
     * - minOccurs: 0
     * @var string
     */
    public $RegistrationDate;
    /**
     * The SubscribeSA
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if a user subscribes to Seller's Assistant. You cannot request to subscribe a user to both Seller's Assistant and Seller's Assistant Pro. You cannot request to unsubscribe a user.
     * - minOccurs: 0
     * @var bool
     */
    public $SubscribeSA;
    /**
     * The SubscribeSAPro
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if a user subscribes to Seller's Assistant Pro. You cannot request to subscribe a user to both Seller's Assistant and Seller's Assistant Pro. You cannot request to unsubscribe a user.
     * - minOccurs: 0
     * @var bool
     */
    public $SubscribeSAPro;
    /**
     * The SubscribeSM
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if a user subscribes to Selling Manager. You cannot request to subscribe a user to both Selling Manager and Selling Manager Pro. You cannot request to unsubscribe a user.
     * - minOccurs: 0
     * @var bool
     */
    public $SubscribeSM;
    /**
     * The SubscribeSMPro
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if a user subscribes to Selling Manager Pro. You cannot request to subscribe a user to both Selling Manager and Selling Manager Pro. You cannot request to unsubscribe a user.
     * - minOccurs: 0
     * @var bool
     */
    public $SubscribeSMPro;
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
    public function __construct($feedbackScore = null, $registrationDate = null, $subscribeSA = null, $subscribeSAPro = null, $subscribeSM = null, $subscribeSMPro = null)
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
    public function getFeedbackScore()
    {
        return $this->FeedbackScore;
    }
    /**
     * Set FeedbackScore value
     * @param int $feedbackScore
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setFeedbackScore($feedbackScore = null)
    {
        // validation for constraint: int
        if (!is_null($feedbackScore) && !is_numeric($feedbackScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($feedbackScore)), __LINE__);
        }
        $this->FeedbackScore = $feedbackScore;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string|null
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setRegistrationDate($registrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get SubscribeSA value
     * @return bool|null
     */
    public function getSubscribeSA()
    {
        return $this->SubscribeSA;
    }
    /**
     * Set SubscribeSA value
     * @param bool $subscribeSA
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSA($subscribeSA = null)
    {
        // validation for constraint: boolean
        if (!is_null($subscribeSA) && !is_bool($subscribeSA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($subscribeSA)), __LINE__);
        }
        $this->SubscribeSA = $subscribeSA;
        return $this;
    }
    /**
     * Get SubscribeSAPro value
     * @return bool|null
     */
    public function getSubscribeSAPro()
    {
        return $this->SubscribeSAPro;
    }
    /**
     * Set SubscribeSAPro value
     * @param bool $subscribeSAPro
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSAPro($subscribeSAPro = null)
    {
        // validation for constraint: boolean
        if (!is_null($subscribeSAPro) && !is_bool($subscribeSAPro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($subscribeSAPro)), __LINE__);
        }
        $this->SubscribeSAPro = $subscribeSAPro;
        return $this;
    }
    /**
     * Get SubscribeSM value
     * @return bool|null
     */
    public function getSubscribeSM()
    {
        return $this->SubscribeSM;
    }
    /**
     * Set SubscribeSM value
     * @param bool $subscribeSM
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSM($subscribeSM = null)
    {
        // validation for constraint: boolean
        if (!is_null($subscribeSM) && !is_bool($subscribeSM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($subscribeSM)), __LINE__);
        }
        $this->SubscribeSM = $subscribeSM;
        return $this;
    }
    /**
     * Get SubscribeSMPro value
     * @return bool|null
     */
    public function getSubscribeSMPro()
    {
        return $this->SubscribeSMPro;
    }
    /**
     * Set SubscribeSMPro value
     * @param bool $subscribeSMPro
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
     */
    public function setSubscribeSMPro($subscribeSMPro = null)
    {
        // validation for constraint: boolean
        if (!is_null($subscribeSMPro) && !is_bool($subscribeSMPro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($subscribeSMPro)), __LINE__);
        }
        $this->SubscribeSMPro = $subscribeSMPro;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ValidateTestUserRegistrationRequestType
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
