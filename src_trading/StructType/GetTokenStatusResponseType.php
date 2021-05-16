<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTokenStatusResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>GetTokenStatus</b> call. This call retrieves the status of a user token.
 * @subpackage Structs
 */
class GetTokenStatusResponseType extends AbstractResponseType
{
    /**
     * The TokenStatus
     * Meta information extracted from the WSDL
     * - documentation: This container value indicates the status and expiration date of a user token. If a user token was revoked, the date/time of the revocation is also returned under this container.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TokenStatusType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\TokenStatusType $TokenStatus = null;
    /**
     * Constructor method for GetTokenStatusResponseType
     * @uses GetTokenStatusResponseType::setTokenStatus()
     * @param \macropage\ebaysdk\trading\StructType\TokenStatusType $tokenStatus
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\TokenStatusType $tokenStatus = null)
    {
        $this
            ->setTokenStatus($tokenStatus);
    }
    /**
     * Get TokenStatus value
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType|null
     */
    public function getTokenStatus(): ?\macropage\ebaysdk\trading\StructType\TokenStatusType
    {
        return $this->TokenStatus;
    }
    /**
     * Set TokenStatus value
     * @param \macropage\ebaysdk\trading\StructType\TokenStatusType $tokenStatus
     * @return \macropage\ebaysdk\trading\StructType\GetTokenStatusResponseType
     */
    public function setTokenStatus(?\macropage\ebaysdk\trading\StructType\TokenStatusType $tokenStatus = null): self
    {
        $this->TokenStatus = $tokenStatus;
        
        return $this;
    }
}
