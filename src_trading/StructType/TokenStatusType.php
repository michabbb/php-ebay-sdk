<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TokenStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns token status.
 * @subpackage Structs
 */
class TokenStatusType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Current token status.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The EIASToken
     * Meta information extracted from the WSDL
     * - documentation: Identifies the user to whom the token belongs.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EIASToken = null;
    /**
     * The ExpirationTime
     * Meta information extracted from the WSDL
     * - documentation: Original expiration time for the token.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpirationTime = null;
    /**
     * The RevocationTime
     * Meta information extracted from the WSDL
     * - documentation: Token revocation time, if the token has been revoked.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RevocationTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TokenStatusType
     * @uses TokenStatusType::setStatus()
     * @uses TokenStatusType::setEIASToken()
     * @uses TokenStatusType::setExpirationTime()
     * @uses TokenStatusType::setRevocationTime()
     * @uses TokenStatusType::setAny()
     * @param string $status
     * @param string $eIASToken
     * @param string $expirationTime
     * @param string $revocationTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $status = null, ?string $eIASToken = null, ?string $expirationTime = null, ?string $revocationTime = null, $any = null)
    {
        $this
            ->setStatus($status)
            ->setEIASToken($eIASToken)
            ->setExpirationTime($expirationTime)
            ->setRevocationTime($revocationTime)
            ->setAny($any);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\TokenStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\TokenStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\TokenStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\TokenStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\TokenStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken(): ?string
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setEIASToken(?string $eIASToken = null): self
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIASToken, true), gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        
        return $this;
    }
    /**
     * Get ExpirationTime value
     * @return string|null
     */
    public function getExpirationTime(): ?string
    {
        return $this->ExpirationTime;
    }
    /**
     * Set ExpirationTime value
     * @param string $expirationTime
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setExpirationTime(?string $expirationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationTime) && !is_string($expirationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationTime, true), gettype($expirationTime)), __LINE__);
        }
        $this->ExpirationTime = $expirationTime;
        
        return $this;
    }
    /**
     * Get RevocationTime value
     * @return string|null
     */
    public function getRevocationTime(): ?string
    {
        return $this->RevocationTime;
    }
    /**
     * Set RevocationTime value
     * @param string $revocationTime
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setRevocationTime(?string $revocationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($revocationTime) && !is_string($revocationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($revocationTime, true), gettype($revocationTime)), __LINE__);
        }
        $this->RevocationTime = $revocationTime;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\TokenStatusType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
