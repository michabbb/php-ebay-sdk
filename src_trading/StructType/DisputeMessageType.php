<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeMessageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by a <strong>DisputeMessage</strong> container, which provides details on a message left by the buyer, the seller, or eBay related to an Unpaid Item case. <br/><br/> <span class="tablenote"><strong>Note:</strong> The
 * <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases. They are no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must
 * create an INR case through eBay's Resolution Center, and these calls also do not support eBay Money Back Guarantee cases. </span>
 * @subpackage Structs
 */
class DisputeMessageType extends AbstractStructBase
{
    /**
     * The MessageID
     * Meta information extracted from the WSDL
     * - documentation: An ID that uniquely identifies the message.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MessageID = null;
    /**
     * The MessageSource
     * Meta information extracted from the WSDL
     * - documentation: The party who posted the message: the buyer, the seller, or an eBay representative.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageSource = null;
    /**
     * The MessageCreationTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time the message was created, in GMT.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageCreationTime = null;
    /**
     * The MessageText
     * Meta information extracted from the WSDL
     * - documentation: The text of the message.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MessageText = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DisputeMessageType
     * @uses DisputeMessageType::setMessageID()
     * @uses DisputeMessageType::setMessageSource()
     * @uses DisputeMessageType::setMessageCreationTime()
     * @uses DisputeMessageType::setMessageText()
     * @uses DisputeMessageType::setAny()
     * @param int $messageID
     * @param string $messageSource
     * @param string $messageCreationTime
     * @param string $messageText
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $messageID = null, ?string $messageSource = null, ?string $messageCreationTime = null, ?string $messageText = null, $any = null)
    {
        $this
            ->setMessageID($messageID)
            ->setMessageSource($messageSource)
            ->setMessageCreationTime($messageCreationTime)
            ->setMessageText($messageText)
            ->setAny($any);
    }
    /**
     * Get MessageID value
     * @return int|null
     */
    public function getMessageID(): ?int
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param int $messageID
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setMessageID(?int $messageID = null): self
    {
        // validation for constraint: int
        if (!is_null($messageID) && !(is_int($messageID) || ctype_digit($messageID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($messageID, true), gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        
        return $this;
    }
    /**
     * Get MessageSource value
     * @return string|null
     */
    public function getMessageSource(): ?string
    {
        return $this->MessageSource;
    }
    /**
     * Set MessageSource value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $messageSource
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setMessageSource(?string $messageSource = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType::valueIsValid($messageSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType', is_array($messageSource) ? implode(', ', $messageSource) : var_export($messageSource, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType::getValidValues())), __LINE__);
        }
        $this->MessageSource = $messageSource;
        
        return $this;
    }
    /**
     * Get MessageCreationTime value
     * @return string|null
     */
    public function getMessageCreationTime(): ?string
    {
        return $this->MessageCreationTime;
    }
    /**
     * Set MessageCreationTime value
     * @param string $messageCreationTime
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setMessageCreationTime(?string $messageCreationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($messageCreationTime) && !is_string($messageCreationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageCreationTime, true), gettype($messageCreationTime)), __LINE__);
        }
        $this->MessageCreationTime = $messageCreationTime;
        
        return $this;
    }
    /**
     * Get MessageText value
     * @return string|null
     */
    public function getMessageText(): ?string
    {
        return $this->MessageText;
    }
    /**
     * Set MessageText value
     * @param string $messageText
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setMessageText(?string $messageText = null): self
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageText, true), gettype($messageText)), __LINE__);
        }
        $this->MessageText = $messageText;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
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
