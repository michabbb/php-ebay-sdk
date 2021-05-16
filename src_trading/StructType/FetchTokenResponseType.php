<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FetchTokenResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Includes the authentication token for the user and the date it expires.
 * @subpackage Structs
 */
class FetchTokenResponseType extends AbstractResponseType
{
    /**
     * The eBayAuthToken
     * Meta information extracted from the WSDL
     * - documentation: The authentication token for the user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $eBayAuthToken = null;
    /**
     * The HardExpirationTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time at which the token returned in eBayAuthToken expires and can no longer be used to authenticate the user for that application.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $HardExpirationTime = null;
    /**
     * The RESTToken
     * Meta information extracted from the WSDL
     * - documentation: The REST authentication token for the user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RESTToken = null;
    /**
     * Constructor method for FetchTokenResponseType
     * @uses FetchTokenResponseType::setEBayAuthToken()
     * @uses FetchTokenResponseType::setHardExpirationTime()
     * @uses FetchTokenResponseType::setRESTToken()
     * @param string $eBayAuthToken
     * @param string $hardExpirationTime
     * @param string $rESTToken
     */
    public function __construct(?string $eBayAuthToken = null, ?string $hardExpirationTime = null, ?string $rESTToken = null)
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
    public function getEBayAuthToken(): ?string
    {
        return $this->eBayAuthToken;
    }
    /**
     * Set eBayAuthToken value
     * @param string $eBayAuthToken
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType
     */
    public function setEBayAuthToken(?string $eBayAuthToken = null): self
    {
        // validation for constraint: string
        if (!is_null($eBayAuthToken) && !is_string($eBayAuthToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eBayAuthToken, true), gettype($eBayAuthToken)), __LINE__);
        }
        $this->eBayAuthToken = $eBayAuthToken;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType
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
    /**
     * Get RESTToken value
     * @return string|null
     */
    public function getRESTToken(): ?string
    {
        return $this->RESTToken;
    }
    /**
     * Set RESTToken value
     * @param string $rESTToken
     * @return \macropage\ebaysdk\trading\StructType\FetchTokenResponseType
     */
    public function setRESTToken(?string $rESTToken = null): self
    {
        // validation for constraint: string
        if (!is_null($rESTToken) && !is_string($rESTToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rESTToken, true), gettype($rESTToken)), __LINE__);
        }
        $this->RESTToken = $rESTToken;
        
        return $this;
    }
}
