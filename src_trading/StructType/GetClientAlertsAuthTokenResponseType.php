<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientAlertsAuthTokenResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns a Client Alerts token.
 * @subpackage Structs
 */
class GetClientAlertsAuthTokenResponseType extends AbstractResponseType
{
    /**
     * The ClientAlertsAuthToken
     * Meta informations extracted from the WSDL
     * - documentation: This token string is required for the Login call in the Client Alerts API. The Client Alerts GetUserAlerts call, which returns alerts about events associated with a specific user, requires Login.
     * - minOccurs: 0
     * @var string
     */
    public $ClientAlertsAuthToken;
    /**
     * The HardExpirationTime
     * Meta informations extracted from the WSDL
     * - documentation: A Client Alerts token expires after seven days.
     * - minOccurs: 0
     * @var string
     */
    public $HardExpirationTime;
    /**
     * Constructor method for GetClientAlertsAuthTokenResponseType
     * @uses GetClientAlertsAuthTokenResponseType::setClientAlertsAuthToken()
     * @uses GetClientAlertsAuthTokenResponseType::setHardExpirationTime()
     * @param string $clientAlertsAuthToken
     * @param string $hardExpirationTime
     */
    public function __construct($clientAlertsAuthToken = null, $hardExpirationTime = null)
    {
        $this
            ->setClientAlertsAuthToken($clientAlertsAuthToken)
            ->setHardExpirationTime($hardExpirationTime);
    }
    /**
     * Get ClientAlertsAuthToken value
     * @return string|null
     */
    public function getClientAlertsAuthToken()
    {
        return $this->ClientAlertsAuthToken;
    }
    /**
     * Set ClientAlertsAuthToken value
     * @param string $clientAlertsAuthToken
     * @return \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType
     */
    public function setClientAlertsAuthToken($clientAlertsAuthToken = null)
    {
        // validation for constraint: string
        if (!is_null($clientAlertsAuthToken) && !is_string($clientAlertsAuthToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientAlertsAuthToken)), __LINE__);
        }
        $this->ClientAlertsAuthToken = $clientAlertsAuthToken;
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
     * @return \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType
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
