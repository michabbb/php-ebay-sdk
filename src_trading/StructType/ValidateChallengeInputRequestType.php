<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateChallengeInputRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Validates the user response to a <b class="con">GetChallengeToken</b> botblock challenge.
 * @subpackage Structs
 */
class ValidateChallengeInputRequestType extends AbstractRequestType
{
    /**
     * The ChallengeToken
     * Meta information extracted from the WSDL
     * - documentation: Botblock token that was returned by <b>GetChallengeToken</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChallengeToken = null;
    /**
     * The UserInput
     * Meta information extracted from the WSDL
     * - documentation: User response to a bot block challenge.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserInput = null;
    /**
     * The KeepTokenValid
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is included and set to 'true' if the challenge token should remain valid for up to two minutes.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $KeepTokenValid = null;
    /**
     * Constructor method for ValidateChallengeInputRequestType
     * @uses ValidateChallengeInputRequestType::setChallengeToken()
     * @uses ValidateChallengeInputRequestType::setUserInput()
     * @uses ValidateChallengeInputRequestType::setKeepTokenValid()
     * @param string $challengeToken
     * @param string $userInput
     * @param bool $keepTokenValid
     */
    public function __construct(?string $challengeToken = null, ?string $userInput = null, ?bool $keepTokenValid = null)
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
    public function getChallengeToken(): ?string
    {
        return $this->ChallengeToken;
    }
    /**
     * Set ChallengeToken value
     * @param string $challengeToken
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType
     */
    public function setChallengeToken(?string $challengeToken = null): self
    {
        // validation for constraint: string
        if (!is_null($challengeToken) && !is_string($challengeToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($challengeToken, true), gettype($challengeToken)), __LINE__);
        }
        $this->ChallengeToken = $challengeToken;
        
        return $this;
    }
    /**
     * Get UserInput value
     * @return string|null
     */
    public function getUserInput(): ?string
    {
        return $this->UserInput;
    }
    /**
     * Set UserInput value
     * @param string $userInput
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType
     */
    public function setUserInput(?string $userInput = null): self
    {
        // validation for constraint: string
        if (!is_null($userInput) && !is_string($userInput)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userInput, true), gettype($userInput)), __LINE__);
        }
        $this->UserInput = $userInput;
        
        return $this;
    }
    /**
     * Get KeepTokenValid value
     * @return bool|null
     */
    public function getKeepTokenValid(): ?bool
    {
        return $this->KeepTokenValid;
    }
    /**
     * Set KeepTokenValid value
     * @param bool $keepTokenValid
     * @return \macropage\ebaysdk\trading\StructType\ValidateChallengeInputRequestType
     */
    public function setKeepTokenValid(?bool $keepTokenValid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keepTokenValid) && !is_bool($keepTokenValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepTokenValid, true), gettype($keepTokenValid)), __LINE__);
        }
        $this->KeepTokenValid = $keepTokenValid;
        
        return $this;
    }
}
