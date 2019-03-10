<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerEmailLogType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains list of Email log.
 * @subpackage Structs
 */
class SellingManagerEmailLogType extends AbstractStructBase
{
    /**
     * The EmailType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of Selling Manager email.
     * - minOccurs: 0
     * @var string
     */
    public $EmailType;
    /**
     * The CustomEmailName
     * Meta informations extracted from the WSDL
     * - documentation: Template name of the custom email.
     * - minOccurs: 0
     * @var string
     */
    public $CustomEmailName;
    /**
     * The EmailState
     * Meta informations extracted from the WSDL
     * - documentation: Success or failure state of this email.
     * - minOccurs: 0
     * @var string
     */
    public $EmailState;
    /**
     * The EventTime
     * Meta informations extracted from the WSDL
     * - documentation: Date on which this email event occurred.
     * - minOccurs: 0
     * @var string
     */
    public $EventTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($emailType = null, $customEmailName = null, $emailState = null, $eventTime = null, \DOMDocument $any = null)
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
    public function getEmailType()
    {
        return $this->EmailType;
    }
    /**
     * Set EmailType value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $emailType
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
     */
    public function setEmailType($emailType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType::valueIsValid($emailType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $emailType, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerEmailTypeCodeType::getValidValues())), __LINE__);
        }
        $this->EmailType = $emailType;
        return $this;
    }
    /**
     * Get CustomEmailName value
     * @return string|null
     */
    public function getCustomEmailName()
    {
        return $this->CustomEmailName;
    }
    /**
     * Set CustomEmailName value
     * @param string $customEmailName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
     */
    public function setCustomEmailName($customEmailName = null)
    {
        // validation for constraint: string
        if (!is_null($customEmailName) && !is_string($customEmailName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customEmailName)), __LINE__);
        }
        $this->CustomEmailName = $customEmailName;
        return $this;
    }
    /**
     * Get EmailState value
     * @return string|null
     */
    public function getEmailState()
    {
        return $this->EmailState;
    }
    /**
     * Set EmailState value
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $emailState
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
     */
    public function setEmailState($emailState = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType::valueIsValid($emailState)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $emailState, implode(', ', \macropage\ebaysdk\trading\EnumType\SellingManagerEmailSentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->EmailState = $emailState;
        return $this;
    }
    /**
     * Get EventTime value
     * @return string|null
     */
    public function getEventTime()
    {
        return $this->EventTime;
    }
    /**
     * Set EventTime value
     * @param string $eventTime
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
     */
    public function setEventTime($eventTime = null)
    {
        // validation for constraint: string
        if (!is_null($eventTime) && !is_string($eventTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventTime)), __LINE__);
        }
        $this->EventTime = $eventTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerEmailLogType
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
