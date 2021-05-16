<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmIdentityRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the ID of a user who has gone through an application's consent flow process for obtaining an authorization token.
 * @subpackage Structs
 */
class ConfirmIdentityRequestType extends AbstractRequestType
{
    /**
     * The SessionID
     * Meta information extracted from the WSDL
     * - documentation: A string obtained by making a <b>GetSessionID</b> call, passed in redirect URL to the eBay signin page.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SessionID = null;
    /**
     * Constructor method for ConfirmIdentityRequestType
     * @uses ConfirmIdentityRequestType::setSessionID()
     * @param string $sessionID
     */
    public function __construct(?string $sessionID = null)
    {
        $this
            ->setSessionID($sessionID);
    }
    /**
     * Get SessionID value
     * @return string|null
     */
    public function getSessionID(): ?string
    {
        return $this->SessionID;
    }
    /**
     * Set SessionID value
     * @param string $sessionID
     * @return \macropage\ebaysdk\trading\StructType\ConfirmIdentityRequestType
     */
    public function setSessionID(?string $sessionID = null): self
    {
        // validation for constraint: string
        if (!is_null($sessionID) && !is_string($sessionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionID, true), gettype($sessionID)), __LINE__);
        }
        $this->SessionID = $sessionID;
        
        return $this;
    }
}
