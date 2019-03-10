<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChallengeTokenResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetChallengeToken</b> call. This call retrieves a botblock token and URLs for an image or audio clip that the user is to match.
 * @subpackage Structs
 */
class GetChallengeTokenResponseType extends AbstractResponseType
{
    /**
     * The ChallengeToken
     * Meta informations extracted from the WSDL
     * - documentation: Botblock token that is used to validate that the user is a human and not a bot.
     * - minOccurs: 0
     * @var string
     */
    public $ChallengeToken;
    /**
     * The ImageChallengeURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the image your application should display to the user for a botblock challenge.
     * - minOccurs: 0
     * @var string
     */
    public $ImageChallengeURL;
    /**
     * The AudioChallengeURL
     * Meta informations extracted from the WSDL
     * - documentation: The URL of the audio clip your application should provide for sight-impaired users. The audio clip corresponds to the image.
     * - minOccurs: 0
     * @var string
     */
    public $AudioChallengeURL;
    /**
     * Constructor method for GetChallengeTokenResponseType
     * @uses GetChallengeTokenResponseType::setChallengeToken()
     * @uses GetChallengeTokenResponseType::setImageChallengeURL()
     * @uses GetChallengeTokenResponseType::setAudioChallengeURL()
     * @param string $challengeToken
     * @param string $imageChallengeURL
     * @param string $audioChallengeURL
     */
    public function __construct($challengeToken = null, $imageChallengeURL = null, $audioChallengeURL = null)
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
    public function getChallengeToken()
    {
        return $this->ChallengeToken;
    }
    /**
     * Set ChallengeToken value
     * @param string $challengeToken
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType
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
     * Get ImageChallengeURL value
     * @return string|null
     */
    public function getImageChallengeURL()
    {
        return $this->ImageChallengeURL;
    }
    /**
     * Set ImageChallengeURL value
     * @param string $imageChallengeURL
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType
     */
    public function setImageChallengeURL($imageChallengeURL = null)
    {
        // validation for constraint: string
        if (!is_null($imageChallengeURL) && !is_string($imageChallengeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imageChallengeURL)), __LINE__);
        }
        $this->ImageChallengeURL = $imageChallengeURL;
        return $this;
    }
    /**
     * Get AudioChallengeURL value
     * @return string|null
     */
    public function getAudioChallengeURL()
    {
        return $this->AudioChallengeURL;
    }
    /**
     * Set AudioChallengeURL value
     * @param string $audioChallengeURL
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType
     */
    public function setAudioChallengeURL($audioChallengeURL = null)
    {
        // validation for constraint: string
        if (!is_null($audioChallengeURL) && !is_string($audioChallengeURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($audioChallengeURL)), __LINE__);
        }
        $this->AudioChallengeURL = $audioChallengeURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetChallengeTokenResponseType
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
