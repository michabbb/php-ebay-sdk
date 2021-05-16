<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: SOAP faults are used to indicate that an infrastructure error has occurred, such as a problem on eBay's side with database or server going down, or a problem with the client or server-side SOAP framework.
 * @subpackage Structs
 */
class FaultDetailsType extends AbstractStructBase
{
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - documentation: Error code can be used by a receiving application to debug a SOAP response message that contains one or more SOAP fault details. Each error code is uniquely defined for each fault scenario. See the eBay documentation for more
     * information. Your application can use error codes as identifiers in your customized error-handling algorithms.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorCode = null;
    /**
     * The Severity
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the error is a severe error (causing the request to fail) or an informational error (a warning).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Severity = null;
    /**
     * The DetailedMessage
     * Meta information extracted from the WSDL
     * - documentation: Description of the condition that caused the SOAP fault.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailedMessage = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FaultDetailsType
     * @uses FaultDetailsType::setErrorCode()
     * @uses FaultDetailsType::setSeverity()
     * @uses FaultDetailsType::setDetailedMessage()
     * @uses FaultDetailsType::setAny()
     * @param string $errorCode
     * @param string $severity
     * @param string $detailedMessage
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $errorCode = null, ?string $severity = null, ?string $detailedMessage = null, $any = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setSeverity($severity)
            ->setDetailedMessage($detailedMessage)
            ->setAny($any);
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param string $errorCode
     * @return \macropage\ebaysdk\trading\StructType\FaultDetailsType
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity(): ?string
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @param string $severity
     * @return \macropage\ebaysdk\trading\StructType\FaultDetailsType
     */
    public function setSeverity(?string $severity = null): self
    {
        // validation for constraint: string
        if (!is_null($severity) && !is_string($severity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($severity, true), gettype($severity)), __LINE__);
        }
        $this->Severity = $severity;
        
        return $this;
    }
    /**
     * Get DetailedMessage value
     * @return string|null
     */
    public function getDetailedMessage(): ?string
    {
        return $this->DetailedMessage;
    }
    /**
     * Set DetailedMessage value
     * @param string $detailedMessage
     * @return \macropage\ebaysdk\trading\StructType\FaultDetailsType
     */
    public function setDetailedMessage(?string $detailedMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($detailedMessage) && !is_string($detailedMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailedMessage, true), gettype($detailedMessage)), __LINE__);
        }
        $this->DetailedMessage = $detailedMessage;
        
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
     * @return \macropage\ebaysdk\trading\StructType\FaultDetailsType
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
