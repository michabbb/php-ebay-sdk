<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChallengeTokenResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetChallengeToken</b> call. This call retrieves a botblock token and URLs for an image or audio clip that the user is to match.
 * @subpackage Structs
 */
class GetChallengeTokenResponseType extends AbstractResponseType
{
    /**
     * The ChallengeToken
     * Meta information extracted from the WSDL
     * - documentation: Botblock token that is used to validate that the user is a human and not a bot.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ChallengeToken = null;
    /**
     * The ImageChallengeURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the image your application should display to the user for a botblock challenge.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ImageChallengeURL = null;
    /**
     * The AudioChallengeURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the audio clip your application should provide for sight-impaired users. The audio clip corresponds to the image.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AudioChallengeURL = null;
    /**
     * Constructor method for GetChallengeTokenResponseType
     * @uses GetChallengeTokenResponseType::setChallengeToken()
     * @uses GetChallengeTokenResponseType::setImageChallengeURL()
     * @uses GetChallengeTokenResponseType::setAudioChallengeURL()
     * @param string $challengeToken
     * @param string $imageChallengeURL
     * @param string $audioChallengeURL
     */
    public function __construct(?string $challengeToken = null, ?string $imageChallengeURL = null, ?string $audioChallengeURL = null)
    {
        $this
            ->setChallengeToken($challengeToken)
            ->setImageChallengeURL($imageChallengeURL)
            ->setAudioChallengeURL($audioChallengeURL);
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
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType
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
     * Get ImageChallengeURL value
     * @return string|null
     */
    public function getImageChallengeURL(): ?string
    {
        return $this->ImageChallengeURL;
    }
    /**
     * Set ImageChallengeURL value
     * @param string $imageChallengeURL
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType
     */
    public function setImageChallengeURL(?string $imageChallengeURL = null): self
    {
        // validation for constraint: string
        if (!is_null($imageChallengeURL) && !is_string($imageChallengeURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageChallengeURL, true), gettype($imageChallengeURL)), __LINE__);
        }
        $this->ImageChallengeURL = $imageChallengeURL;
        
        return $this;
    }
    /**
     * Get AudioChallengeURL value
     * @return string|null
     */
    public function getAudioChallengeURL(): ?string
    {
        return $this->AudioChallengeURL;
    }
    /**
     * Set AudioChallengeURL value
     * @param string $audioChallengeURL
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType
     */
    public function setAudioChallengeURL(?string $audioChallengeURL = null): self
    {
        // validation for constraint: string
        if (!is_null($audioChallengeURL) && !is_string($audioChallengeURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($audioChallengeURL, true), gettype($audioChallengeURL)), __LINE__);
        }
        $this->AudioChallengeURL = $audioChallengeURL;
        
        return $this;
    }
}
