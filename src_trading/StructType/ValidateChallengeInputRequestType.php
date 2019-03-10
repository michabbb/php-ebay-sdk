<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateChallengeInputRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Validates the user response to a <b class="con">GetChallengeToken</b> botblock challenge.
 * @subpackage Structs
 */
class ValidateChallengeInputRequestType extends AbstractRequestType
{
    /**
     * The ChallengeToken
     * Meta informations extracted from the WSDL
     * - documentation: Botblock token that was returned by <b>GetChallengeToken</b>.
     * - minOccurs: 0
     * @var string
     */
    public $ChallengeToken;
    /**
     * The UserInput
     * Meta informations extracted from the WSDL
     * - documentation: User response to a bot block challenge.
     * - minOccurs: 0
     * @var string
     */
    public $UserInput;
    /**
     * The KeepTokenValid
     * Meta informations extracted from the WSDL
     * - documentation: This boolean field is included and set to 'true' if the challenge token should remain valid for up to two minutes.
     * - minOccurs: 0
     * @var bool
     */
    public $KeepTokenValid;
    /**
     * Constructor method for ValidateChallengeInputRequestType
     * @uses ValidateChallengeInputRequestType::setChallengeToken()
     * @uses ValidateChallengeInputRequestType::setUserInput()
     * @uses ValidateChallengeInputRequestType::setKeepTokenValid()
     * @param string $challengeToken
     * @param string $userInput
     * @param bool $keepTokenValid
     */
    public function __construct($challengeToken = null, $userInput = null, $keepTokenValid = null)
    {
        $this
            ->setChallengeToken($challengeToken)
            ->setUserInput($userInput)
            ->setKeepTokenValid($keepTokenValid);
    }
    /**
     * Get ChallengeToken value
     * @return string|null
     */
    public function getChallengeToken()
    {
        return $this->ChallengeToken;
    }
    /**
     * Set ChallengeToken value
     * @param string $challengeToken
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType
     */
    public function setChallengeToken($challengeToken = null)
    {
        // validation for constraint: string
        if (!is_null($challengeToken) && !is_string($challengeToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($challengeToken)), __LINE__);
        }
        $this->ChallengeToken = $challengeToken;
        return $this;
    }
    /**
     * Get UserInput value
     * @return string|null
     */
    public function getUserInput()
    {
        return $this->UserInput;
    }
    /**
     * Set UserInput value
     * @param string $userInput
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType
     */
    public function setUserInput($userInput = null)
    {
        // validation for constraint: string
        if (!is_null($userInput) && !is_string($userInput)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userInput)), __LINE__);
        }
        $this->UserInput = $userInput;
        return $this;
    }
    /**
     * Get KeepTokenValid value
     * @return bool|null
     */
    public function getKeepTokenValid()
    {
        return $this->KeepTokenValid;
    }
    /**
     * Set KeepTokenValid value
     * @param bool $keepTokenValid
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType
     */
    public function setKeepTokenValid($keepTokenValid = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepTokenValid) && !is_bool($keepTokenValid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($keepTokenValid)), __LINE__);
        }
        $this->KeepTokenValid = $keepTokenValid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType
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
