<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSessionIDResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetSessionID</b> call. This response will include the generated <b>SessionID</b> value, which is a unique identifier for authenticating data entry during the process that creates a user token.
 * @subpackage Structs
 */
class GetSessionIDResponseType extends AbstractResponseType
{
    /**
     * The SessionID
     * Meta information extracted from the WSDL
     * - documentation: A 40-character identifier supplied by eBay to an application. Used to confirm the identities of the user and the application in a URL redirect during the process in which the user agrees to let the application wield a user token that
     * grants the application the right to access eBay data on behalf of the user. Subsequently also used as input for the <b>FetchToken</b> API call. The <b>SessionID</b> value is valid for five minutes after it is retrieved.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SessionID = null;
    /**
     * Constructor method for GetSessionIDResponseType
     * @uses GetSessionIDResponseType::setSessionID()
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
     * @return \macropage\ebaysdk\trading\StructType\GetSessionIDResponseType
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
