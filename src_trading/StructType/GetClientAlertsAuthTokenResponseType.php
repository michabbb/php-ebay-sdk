<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClientAlertsAuthTokenResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a Client Alerts token.
 * @subpackage Structs
 */
class GetClientAlertsAuthTokenResponseType extends AbstractResponseType
{
    /**
     * The ClientAlertsAuthToken
     * Meta information extracted from the WSDL
     * - documentation: This token string is required for the Login call in the Client Alerts API. The Client Alerts GetUserAlerts call, which returns alerts about events associated with a specific user, requires Login.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ClientAlertsAuthToken = null;
    /**
     * The HardExpirationTime
     * Meta information extracted from the WSDL
     * - documentation: A Client Alerts token expires after seven days.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HardExpirationTime = null;
    /**
     * Constructor method for GetClientAlertsAuthTokenResponseType
     * @uses GetClientAlertsAuthTokenResponseType::setClientAlertsAuthToken()
     * @uses GetClientAlertsAuthTokenResponseType::setHardExpirationTime()
     * @param string $clientAlertsAuthToken
     * @param string $hardExpirationTime
     */
    public function __construct(?string $clientAlertsAuthToken = null, ?string $hardExpirationTime = null)
    {
        $this
            ->setClientAlertsAuthToken($clientAlertsAuthToken)
            ->setHardExpirationTime($hardExpirationTime);
    }
    /**
     * Get ClientAlertsAuthToken value
     * @return string|null
     */
    public function getClientAlertsAuthToken(): ?string
    {
        return $this->ClientAlertsAuthToken;
    }
    /**
     * Set ClientAlertsAuthToken value
     * @param string $clientAlertsAuthToken
     * @return \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType
     */
    public function setClientAlertsAuthToken(?string $clientAlertsAuthToken = null): self
    {
        // validation for constraint: string
        if (!is_null($clientAlertsAuthToken) && !is_string($clientAlertsAuthToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientAlertsAuthToken, true), gettype($clientAlertsAuthToken)), __LINE__);
        }
        $this->ClientAlertsAuthToken = $clientAlertsAuthToken;
        
        return $this;
    }
    /**
     * Get HardExpirationTime value
     * @return string|null
     */
    public function getHardExpirationTime(): ?string
    {
        return $this->HardExpirationTime;
    }
    /**
     * Set HardExpirationTime value
     * @param string $hardExpirationTime
     * @return \macropage\ebaysdk\trading\StructType\GetClientAlertsAuthTokenResponseType
     */
    public function setHardExpirationTime(?string $hardExpirationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($hardExpirationTime) && !is_string($hardExpirationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardExpirationTime, true), gettype($hardExpirationTime)), __LINE__);
        }
        $this->HardExpirationTime = $hardExpirationTime;
        
        return $this;
    }
}
