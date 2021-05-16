<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmIdentityResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Confirms the identity of the user by returning the <b>UserID</b> and the <b>EIASToken</b> belonging to the user.
 * @subpackage Structs
 */
class ConfirmIdentityResponseType extends AbstractResponseType
{
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: Unique eBay user ID for the user.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * Constructor method for ConfirmIdentityResponseType
     * @uses ConfirmIdentityResponseType::setUserID()
     * @param string $userID
     */
    public function __construct(?string $userID = null)
    {
        $this
            ->setUserID($userID);
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \macropage\ebaysdk\trading\StructType\ConfirmIdentityResponseType
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        
        return $this;
    }
}
