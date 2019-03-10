<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FetchTokenResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Includes the authentication token for the user and the date it expires.
 * @subpackage Structs
 */
class FetchTokenResponseType extends AbstractResponseType
{
    /**
     * The eBayAuthToken
     * Meta informations extracted from the WSDL
     * - documentation: The authentication token for the user.
     * - minOccurs: 0
     * @var string
     */
    public $eBayAuthToken;
    /**
     * The HardExpirationTime
     * Meta informations extracted from the WSDL
     * - documentation: Date and time at which the token returned in eBayAuthToken expires and can no longer be used to authenticate the user for that application.
     * - minOccurs: 0
     * @var string
     */
    public $HardExpirationTime;
    /**
     * The RESTToken
     * Meta informations extracted from the WSDL
     * - documentation: The REST authentication token for the user.
     * - minOccurs: 0
     * @var string
     */
    public $RESTToken;
    /**
     * Constructor method for FetchTokenResponseType
     * @uses FetchTokenResponseType::setEBayAuthToken()
     * @uses FetchTokenResponseType::setHardExpirationTime()
     * @uses FetchTokenResponseType::setRESTToken()
     * @param string $eBayAuthToken
     * @param string $hardExpirationTime
     * @param string $rESTToken
     */
    public function __construct($eBayAuthToken = null, $hardExpirationTime = null, $rESTToken = null)
    {
        $this
            ->setEBayAuthToken($eBayAuthToken)
            ->setHardExpirationTime($hardExpirationTime)
            ->setRESTToken($rESTToken);
    }
    /**
     * Get eBayAuthToken value
     * @return string|null
     */
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }
    /**
     * Set eBayAuthToken value
     * @param string $eBayAuthToken
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType
     */
    public function setEBayAuthToken($eBayAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($eBayAuthToken) && !is_string($eBayAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eBayAuthToken)), __LINE__);
        }
        $this->eBayAuthToken = $eBayAuthToken;
        return $this;
    }
    /**
     * Get HardExpirationTime value
     * @return string|null
     */
    public function getHardExpirationTime()
    {
        return $this->HardExpirationTime;
    }
    /**
     * Set HardExpirationTime value
     * @param string $hardExpirationTime
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType
     */
    public function setHardExpirationTime($hardExpirationTime = null)
    {
        // validation for constraint: string
        if (!is_null($hardExpirationTime) && !is_string($hardExpirationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hardExpirationTime)), __LINE__);
        }
        $this->HardExpirationTime = $hardExpirationTime;
        return $this;
    }
    /**
     * Get RESTToken value
     * @return string|null
     */
    public function getRESTToken()
    {
        return $this->RESTToken;
    }
    /**
     * Set RESTToken value
     * @param string $rESTToken
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType
     */
    public function setRESTToken($rESTToken = null)
    {
        // validation for constraint: string
        if (!is_null($rESTToken) && !is_string($rESTToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rESTToken)), __LINE__);
        }
        $this->RESTToken = $rESTToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType
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
