<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerEmailLogType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains list of Email log.
 * @subpackage Structs
 */
class SellingManagerEmailLogType extends AbstractStructBase
{
    /**
     * The EmailType
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of Selling Manager email.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmailType = null;
    /**
     * The CustomEmailName
     * Meta information extracted from the WSDL
     * - documentation: Template name of the custom email.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CustomEmailName = null;
    /**
     * The EmailState
     * Meta information extracted from the WSDL
     * - documentation: Success or failure state of this email.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmailState = null;
    /**
     * The EventTime
     * Meta information extracted from the WSDL
     * - documentation: Date on which this email event occurred.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EventTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerEmailLogType
     * @uses SellingManagerEmailLogType::setEmailType()
     * @uses SellingManagerEmailLogType::setCustomEmailName()
     * @uses SellingManagerEmailLogType::setEmailState()
     * @uses SellingManagerEmailLogType::setEventTime()
     * @uses SellingManagerEmailLogType::setAny()
     * @param string $emailType
     * @param string $customEmailName
     * @param string $emailState
     * @param string $eventTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $emailType = null, ?string $customEmailName = null, ?string $emailState = null, ?string $eventTime = null, $any = null)
    {
        $this
            ->setEmailType($emailType)
            ->setCustomEmailName($customEmailName)
            ->setEmailState($emailState)
            ->setEventTime($eventTime)
            ->setAny($any);
    }
    /**
     * Get EmailType value
     * @return string|null
     */
    public function getEmailType(): ?string
    {
        return $this->EmailType;
    }
    /**
     * Set EmailType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $emailType
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
     */
    public function setEmailType(?string $emailType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType::valueIsValid($emailType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType', is_array($emailType) ? implode(', ', $emailType) : var_export($emailType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EmailType = $emailType;
        
        return $this;
    }
    /**
     * Get CustomEmailName value
     * @return string|null
     */
    public function getCustomEmailName(): ?string
    {
        return $this->CustomEmailName;
    }
    /**
     * Set CustomEmailName value
     * @param string $customEmailName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
     */
    public function setCustomEmailName(?string $customEmailName = null): self
    {
        // validation for constraint: string
        if (!is_null($customEmailName) && !is_string($customEmailName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customEmailName, true), gettype($customEmailName)), __LINE__);
        }
        $this->CustomEmailName = $customEmailName;
        
        return $this;
    }
    /**
     * Get EmailState value
     * @return string|null
     */
    public function getEmailState(): ?string
    {
        return $this->EmailState;
    }
    /**
     * Set EmailState value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $emailState
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
     */
    public function setEmailState(?string $emailState = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType::valueIsValid($emailState)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType', is_array($emailState) ? implode(', ', $emailState) : var_export($emailState, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->EmailState = $emailState;
        
        return $this;
    }
    /**
     * Get EventTime value
     * @return string|null
     */
    public function getEventTime(): ?string
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
     */
    public function setEventTime(?string $eventTime = null): self
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventTime, true), gettype($eventTime)), __LINE__);
        }
        $this->EventTime = $eventTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
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
