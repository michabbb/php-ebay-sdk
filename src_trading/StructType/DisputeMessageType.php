<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a message posted to a dispute. The message can be posted by the buyer, the seller, or an eBay representative. <br/><br/> <span class="tablenote"><strong>Note:</strong> These are not eBay money back guarantee disputes.
 * </span>
 * @subpackage Structs
 */
class DisputeMessageType extends AbstractStructBase
{
    /**
     * The MessageID
     * Meta informations extracted from the WSDL
     * - documentation: An ID that uniquely identifies the message.
     * - minOccurs: 0
     * @var int
     */
    public $MessageID;
    /**
     * The MessageSource
     * Meta informations extracted from the WSDL
     * - documentation: The party who posted the message: the buyer, the seller, or an eBay representative.
     * - minOccurs: 0
     * @var string
     */
    public $MessageSource;
    /**
     * The MessageCreationTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time the message was created, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $MessageCreationTime;
    /**
     * The MessageText
     * Meta informations extracted from the WSDL
     * - documentation: The text of the message.
     * - minOccurs: 0
     * @var string
     */
    public $MessageText;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($messageID = null, $messageSource = null, $messageCreationTime = null, $messageText = null, \DOMDocument $any = null)
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
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param int $messageID
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setMessageID($messageID = null)
    {
        // validation for constraint: int
        if (!is_null($messageID) && !is_numeric($messageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($messageID)), __LINE__);
        }
        $this->MessageID = $messageID;
        return $this;
    }
    /**
     * Get MessageSource value
     * @return string|null
     */
    public function getMessageSource()
    {
        return $this->MessageSource;
    }
    /**
     * Set MessageSource value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $messageSource
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setMessageSource($messageSource = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType::valueIsValid($messageSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $messageSource, implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeMessageSourceCodeType::getValidValues())), __LINE__);
        }
        $this->MessageSource = $messageSource;
        return $this;
    }
    /**
     * Get MessageCreationTime value
     * @return string|null
     */
    public function getMessageCreationTime()
    {
        return $this->MessageCreationTime;
    }
    /**
     * Set MessageCreationTime value
     * @param string $messageCreationTime
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setMessageCreationTime($messageCreationTime = null)
    {
        // validation for constraint: string
        if (!is_null($messageCreationTime) && !is_string($messageCreationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageCreationTime)), __LINE__);
        }
        $this->MessageCreationTime = $messageCreationTime;
        return $this;
    }
    /**
     * Get MessageText value
     * @return string|null
     */
    public function getMessageText()
    {
        return $this->MessageText;
    }
    /**
     * Set MessageText value
     * @param string $messageText
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setMessageText($messageText = null)
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageText)), __LINE__);
        }
        $this->MessageText = $messageText;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\DisputeMessageType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DisputeMessageType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
