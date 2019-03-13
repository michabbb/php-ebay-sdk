<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base type definition of a response payload that can carry any type of payload content with following optional elements:<br> - timestamp of response message<br> - application-level acknowledgement<br> - application-level
 * (business-level) errors and warnings
 * @subpackage Structs
 */
abstract class AbstractResponseType extends AbstractStructBase
{
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - documentation: This value represents the date and time when eBay processed the request. The time zone of this value is <a href="http://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#dateTime">GMT</a> and the format is the
     * ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about this time format and converting to and from the GMT time zone.
     * - minOccurs: 0
     * @var string
     */
    public $Timestamp;
    /**
     * The Ack
     * Meta informations extracted from the WSDL
     * - documentation: A token representing the application-level acknowledgement code that indicates the response status (e.g., success). The <b>AckCodeType</b> list specifies the possible values for the <b>Ack</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $Ack;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - documentation: A list of application-level errors or warnings (if any) that were raised when eBay processed the request. <br> <br> Application-level errors occur due to problems with business-level data on the client side or on the eBay server
     * side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal
     * business logic while processing the request.<br> <br> Only returned if there were warnings or errors.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ErrorType[]
     */
    public $Errors;
    /**
     * The Build
     * Meta informations extracted from the WSDL
     * - documentation: This refers to the particular software build that eBay used when processing the request and generating the response. This includes the version number plus additional information. eBay Developer Support may request the build
     * information when helping you resolve technical issues.
     * - minOccurs: 0
     * @var string
     */
    public $Build;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The release version that eBay used to process the request. <br> <br> <span class="tablenote"><b>Note:</b> This is usually the latest release version, as specified in the release notes. (eBay releases the API to international sites
     * about a week after we release it to the US site.) </span><br> <br> If a field in the response returns the token "CustomCode", it usually means that the field is a code type (a token or enumeration), and that in your request URL (or HTTP header) you
     * specified a version that is older than the version in which the token was added to the call.
     * - minOccurs: 0
     * @var string
     */
    public $Version;
    /**
     * The CorrelationID
     * Meta informations extracted from the WSDL
     * - documentation: If you pass a value in MessageID in a request, we will return the same value in CorrelationID in the response. You can use this for tracking that a response is returned for every request and to match particular responses to
     * particular requests. Only returned if MessageID was used.
     * - minOccurs: 0
     * @var string
     */
    public $CorrelationID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AbstractResponseType
     * @uses AbstractResponseType::setTimestamp()
     * @uses AbstractResponseType::setAck()
     * @uses AbstractResponseType::setErrors()
     * @uses AbstractResponseType::setBuild()
     * @uses AbstractResponseType::setVersion()
     * @uses AbstractResponseType::setCorrelationID()
     * @uses AbstractResponseType::setAny()
     * @param string $timestamp
     * @param string $ack
     * @param \macropage\ebaysdk\shopping\StructType\ErrorType[] $errors
     * @param string $build
     * @param string $version
     * @param string $correlationID
     * @param \DOMDocument $any
     */
    public function __construct($timestamp = null, $ack = null, array $errors = array(), $build = null, $version = null, $correlationID = null, \DOMDocument $any = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setAck($ack)
            ->setErrors($errors)
            ->setBuild($build)
            ->setVersion($version)
            ->setCorrelationID($correlationID)
            ->setAny($any);
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get Ack value
     * @return string|null
     */
    public function getAck()
    {
        return $this->Ack;
    }
    /**
     * Set Ack value
     * @uses \macropage\ebaysdk\shopping\EnumType\AckCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\AckCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ack
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setAck($ack = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\AckCodeType::valueIsValid($ack)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ack, implode(', ', \macropage\ebaysdk\shopping\EnumType\AckCodeType::getValidValues())), __LINE__);
        }
        $this->Ack = $ack;
        return $this;
    }
    /**
     * Get Errors value
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType[]|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ErrorType[] $errors
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setErrors(array $errors = array())
    {
        foreach ($errors as $abstractResponseTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$abstractResponseTypeErrorsItem instanceof \macropage\ebaysdk\shopping\StructType\ErrorType) {
                throw new \InvalidArgumentException(sprintf('The Errors property can only contain items of \macropage\ebaysdk\shopping\StructType\ErrorType, "%s" given', is_object($abstractResponseTypeErrorsItem) ? get_class($abstractResponseTypeErrorsItem) : gettype($abstractResponseTypeErrorsItem)), __LINE__);
            }
        }
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Add item to Errors value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ErrorType $item
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function addToErrors(\macropage\ebaysdk\shopping\StructType\ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ErrorType) {
            throw new \InvalidArgumentException(sprintf('The Errors property can only contain items of \macropage\ebaysdk\shopping\StructType\ErrorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Errors[] = $item;
        return $this;
    }
    /**
     * Get Build value
     * @return string|null
     */
    public function getBuild()
    {
        return $this->Build;
    }
    /**
     * Set Build value
     * @param string $build
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setBuild($build = null)
    {
        // validation for constraint: string
        if (!is_null($build) && !is_string($build)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($build)), __LINE__);
        }
        $this->Build = $build;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\AbstractResponseType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
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
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
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
