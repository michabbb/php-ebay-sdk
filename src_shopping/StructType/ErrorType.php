<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * Meta informations extracted from the WSDL
 * - documentation: These are request errors (as opposed to system errors) that occur due to problems with business-level data (e.g., an invalid combination of arguments) that the application passed in.
 * @subpackage Structs
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The ShortMessage
     * Meta informations extracted from the WSDL
     * - documentation: A brief description of the condition that raised the error.
     * - minOccurs: 0
     * @var string
     */
    public $ShortMessage;
    /**
     * The LongMessage
     * Meta informations extracted from the WSDL
     * - documentation: A more detailed description of the condition that raised the error.
     * - minOccurs: 0
     * @var string
     */
    public $LongMessage;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - documentation: A unique code that identifies the particular error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
     * - minOccurs: 0
     * @var string
     */
    public $ErrorCode;
    /**
     * The UserDisplayHint
     * Meta informations extracted from the WSDL
     * - documentation: This field is not currently in use for eBay Shopping API. Indicates whether the error message text is intended to be displayed to an end user or intended only to be parsed by the application. If true or not present (the default), the
     * message text is intended for the end user. If false, the message text is intended for the application, and the application should translate the error into a more appropriate message.
     * - minOccurs: 0
     * @var bool
     */
    public $UserDisplayHint;
    /**
     * The SeverityCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the error caused the request to fail.<br> <br> If the request fails and the source of the problem is within the application (such as a missing required element), please change the application before you retry the
     * request. If the problem is due to end-user input data, please alert the end-user to the problem and provide the means for them to correct the data. Once the problem in the application or data is resolved, you can attempt to re-send the request to
     * eBay.<br> <br> If the source of the problem is on eBay's side, you can retry the request as-is a reasonable number of times (eBay recommends twice). If the error persists, contact Developer Technical Support. Once the problem has been resolved, the
     * request may be resent in its original form.<br> <br> When a warning occurs, the error is returned in addition to the business data. In this case, you do not need to retry the request (as the original request was successful). However, depending on the
     * cause or nature of the warning, you might need to contact either the end user or eBay to effect a long term solution to the problem to prevent it from reoccurring in the future.
     * - minOccurs: 0
     * @var string
     */
    public $SeverityCode;
    /**
     * The ErrorParameters
     * Meta informations extracted from the WSDL
     * - documentation: Some warning and error messages return one or more variables that contain contextual information about the error. This is often the field or value that triggered the error. You can usually predict where these will occur by looking at
     * the "replaceable_value" indicators in our Errors by Number page.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ErrorParameterType[]
     */
    public $ErrorParameters;
    /**
     * The ErrorClassification
     * Meta informations extracted from the WSDL
     * - documentation: API errors are divided between two classes: system errors and request errors.
     * - minOccurs: 0
     * @var string
     */
    public $ErrorClassification;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ErrorType
     * @uses ErrorType::setShortMessage()
     * @uses ErrorType::setLongMessage()
     * @uses ErrorType::setErrorCode()
     * @uses ErrorType::setUserDisplayHint()
     * @uses ErrorType::setSeverityCode()
     * @uses ErrorType::setErrorParameters()
     * @uses ErrorType::setErrorClassification()
     * @uses ErrorType::setAny()
     * @param string $shortMessage
     * @param string $longMessage
     * @param string $errorCode
     * @param bool $userDisplayHint
     * @param string $severityCode
     * @param \macropage\ebaysdk\shopping\StructType\ErrorParameterType[] $errorParameters
     * @param string $errorClassification
     * @param \DOMDocument $any
     */
    public function __construct($shortMessage = null, $longMessage = null, $errorCode = null, $userDisplayHint = null, $severityCode = null, array $errorParameters = array(), $errorClassification = null, \DOMDocument $any = null)
    {
        $this
            ->setShortMessage($shortMessage)
            ->setLongMessage($longMessage)
            ->setErrorCode($errorCode)
            ->setUserDisplayHint($userDisplayHint)
            ->setSeverityCode($severityCode)
            ->setErrorParameters($errorParameters)
            ->setErrorClassification($errorClassification)
            ->setAny($any);
    }
    /**
     * Get ShortMessage value
     * @return string|null
     */
    public function getShortMessage()
    {
        return $this->ShortMessage;
    }
    /**
     * Set ShortMessage value
     * @param string $shortMessage
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setShortMessage($shortMessage = null)
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortMessage)), __LINE__);
        }
        $this->ShortMessage = $shortMessage;
        return $this;
    }
    /**
     * Get LongMessage value
     * @return string|null
     */
    public function getLongMessage()
    {
        return $this->LongMessage;
    }
    /**
     * Set LongMessage value
     * @param string $longMessage
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setLongMessage($longMessage = null)
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($longMessage)), __LINE__);
        }
        $this->LongMessage = $longMessage;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param string $errorCode
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get UserDisplayHint value
     * @return bool|null
     */
    public function getUserDisplayHint()
    {
        return $this->UserDisplayHint;
    }
    /**
     * Set UserDisplayHint value
     * @param bool $userDisplayHint
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setUserDisplayHint($userDisplayHint = null)
    {
        // validation for constraint: boolean
        if (!is_null($userDisplayHint) && !is_bool($userDisplayHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($userDisplayHint)), __LINE__);
        }
        $this->UserDisplayHint = $userDisplayHint;
        return $this;
    }
    /**
     * Get SeverityCode value
     * @return string|null
     */
    public function getSeverityCode()
    {
        return $this->SeverityCode;
    }
    /**
     * Set SeverityCode value
     * @uses \macropage\ebaysdk\shopping\EnumType\SeverityCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SeverityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $severityCode
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setSeverityCode($severityCode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SeverityCodeType::valueIsValid($severityCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $severityCode, implode(', ', \macropage\ebaysdk\shopping\EnumType\SeverityCodeType::getValidValues())), __LINE__);
        }
        $this->SeverityCode = $severityCode;
        return $this;
    }
    /**
     * Get ErrorParameters value
     * @return \macropage\ebaysdk\shopping\StructType\ErrorParameterType[]|null
     */
    public function getErrorParameters()
    {
        return $this->ErrorParameters;
    }
    /**
     * Set ErrorParameters value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ErrorParameterType[] $errorParameters
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setErrorParameters(array $errorParameters = array())
    {
        foreach ($errorParameters as $errorTypeErrorParametersItem) {
            // validation for constraint: itemType
            if (!$errorTypeErrorParametersItem instanceof \macropage\ebaysdk\shopping\StructType\ErrorParameterType) {
                throw new \InvalidArgumentException(sprintf('The ErrorParameters property can only contain items of \macropage\ebaysdk\shopping\StructType\ErrorParameterType, "%s" given', is_object($errorTypeErrorParametersItem) ? get_class($errorTypeErrorParametersItem) : gettype($errorTypeErrorParametersItem)), __LINE__);
            }
        }
        $this->ErrorParameters = $errorParameters;
        return $this;
    }
    /**
     * Add item to ErrorParameters value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ErrorParameterType $item
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function addToErrorParameters(\macropage\ebaysdk\shopping\StructType\ErrorParameterType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ErrorParameterType) {
            throw new \InvalidArgumentException(sprintf('The ErrorParameters property can only contain items of \macropage\ebaysdk\shopping\StructType\ErrorParameterType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ErrorParameters[] = $item;
        return $this;
    }
    /**
     * Get ErrorClassification value
     * @return string|null
     */
    public function getErrorClassification()
    {
        return $this->ErrorClassification;
    }
    /**
     * Set ErrorClassification value
     * @uses \macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorClassification
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setErrorClassification($errorClassification = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType::valueIsValid($errorClassification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $errorClassification, implode(', ', \macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorClassification = $errorClassification;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\ErrorType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
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
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
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
