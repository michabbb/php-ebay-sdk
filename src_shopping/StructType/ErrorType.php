<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorType StructType
 * Meta information extracted from the WSDL
 * - documentation: These are request errors (as opposed to system errors) that occur due to problems with business-level data (e.g., an invalid combination of arguments) that the application passed in.
 * @subpackage Structs
 */
class ErrorType extends AbstractStructBase
{
    /**
     * The ShortMessage
     * Meta information extracted from the WSDL
     * - documentation: A brief description of the condition that raised the error.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ShortMessage = null;
    /**
     * The LongMessage
     * Meta information extracted from the WSDL
     * - documentation: A more detailed description of the condition that raised the error.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LongMessage = null;
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - documentation: A unique code that identifies the particular error condition that occurred. Your application can use error codes as identifiers in your customized error-handling algorithms.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorCode = null;
    /**
     * The UserDisplayHint
     * Meta information extracted from the WSDL
     * - documentation: This field is not currently in use for eBay Shopping API. Indicates whether the error message text is intended to be displayed to an end user or intended only to be parsed by the application. If true or not present (the default), the
     * message text is intended for the end user. If false, the message text is intended for the application, and the application should translate the error into a more appropriate message.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UserDisplayHint = null;
    /**
     * The SeverityCode
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the error caused the request to fail.<br> <br> If the request fails and the source of the problem is within the application (such as a missing required element), please change the application before you retry the
     * request. If the problem is due to end-user input data, please alert the end-user to the problem and provide the means for them to correct the data. Once the problem in the application or data is resolved, you can attempt to re-send the request to
     * eBay.<br> <br> If the source of the problem is on eBay's side, you can retry the request as-is a reasonable number of times (eBay recommends twice). If the error persists, contact Developer Technical Support. Once the problem has been resolved, the
     * request may be resent in its original form.<br> <br> When a warning occurs, the error is returned in addition to the business data. In this case, you do not need to retry the request (as the original request was successful). However, depending on the
     * cause or nature of the warning, you might need to contact either the end user or eBay to effect a long term solution to the problem to prevent it from reoccurring in the future.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SeverityCode = null;
    /**
     * The ErrorParameters
     * Meta information extracted from the WSDL
     * - documentation: Some warning and error messages return one or more variables that contain contextual information about the error. This is often the field or value that triggered the error. You can usually predict where these will occur by looking at
     * the "replaceable_value" indicators in our Errors by Number page.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ErrorParameterType[]
     */
    protected ?array $ErrorParameters = null;
    /**
     * The ErrorClassification
     * Meta information extracted from the WSDL
     * - documentation: API errors are divided between two classes: system errors and request errors.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorClassification = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $shortMessage = null, ?string $longMessage = null, ?string $errorCode = null, ?bool $userDisplayHint = null, ?string $severityCode = null, ?array $errorParameters = null, ?string $errorClassification = null, $any = null)
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
    public function getShortMessage(): ?string
    {
        return $this->ShortMessage;
    }
    /**
     * Set ShortMessage value
     * @param string $shortMessage
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setShortMessage(?string $shortMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($shortMessage) && !is_string($shortMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortMessage, true), gettype($shortMessage)), __LINE__);
        }
        $this->ShortMessage = $shortMessage;
        
        return $this;
    }
    /**
     * Get LongMessage value
     * @return string|null
     */
    public function getLongMessage(): ?string
    {
        return $this->LongMessage;
    }
    /**
     * Set LongMessage value
     * @param string $longMessage
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setLongMessage(?string $longMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($longMessage) && !is_string($longMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longMessage, true), gettype($longMessage)), __LINE__);
        }
        $this->LongMessage = $longMessage;
        
        return $this;
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
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
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
     * Get UserDisplayHint value
     * @return bool|null
     */
    public function getUserDisplayHint(): ?bool
    {
        return $this->UserDisplayHint;
    }
    /**
     * Set UserDisplayHint value
     * @param bool $userDisplayHint
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setUserDisplayHint(?bool $userDisplayHint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($userDisplayHint) && !is_bool($userDisplayHint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userDisplayHint, true), gettype($userDisplayHint)), __LINE__);
        }
        $this->UserDisplayHint = $userDisplayHint;
        
        return $this;
    }
    /**
     * Get SeverityCode value
     * @return string|null
     */
    public function getSeverityCode(): ?string
    {
        return $this->SeverityCode;
    }
    /**
     * Set SeverityCode value
     * @uses \macropage\ebaysdk\shopping\EnumType\SeverityCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\SeverityCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $severityCode
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setSeverityCode(?string $severityCode = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\SeverityCodeType::valueIsValid($severityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\SeverityCodeType', is_array($severityCode) ? implode(', ', $severityCode) : var_export($severityCode, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\SeverityCodeType::getValidValues())), __LINE__);
        }
        $this->SeverityCode = $severityCode;
        
        return $this;
    }
    /**
     * Get ErrorParameters value
     * @return \macropage\ebaysdk\shopping\StructType\ErrorParameterType[]
     */
    public function getErrorParameters(): ?array
    {
        return $this->ErrorParameters;
    }
    /**
     * This method is responsible for validating the values passed to the setErrorParameters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorParameters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorParametersForArrayConstraintsFromSetErrorParameters(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $errorTypeErrorParametersItem) {
            // validation for constraint: itemType
            if (!$errorTypeErrorParametersItem instanceof \macropage\ebaysdk\shopping\StructType\ErrorParameterType) {
                $invalidValues[] = is_object($errorTypeErrorParametersItem) ? get_class($errorTypeErrorParametersItem) : sprintf('%s(%s)', gettype($errorTypeErrorParametersItem), var_export($errorTypeErrorParametersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ErrorParameters property can only contain items of type \macropage\ebaysdk\shopping\StructType\ErrorParameterType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ErrorParameters value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ErrorParameterType[] $errorParameters
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setErrorParameters(?array $errorParameters = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorParametersArrayErrorMessage = self::validateErrorParametersForArrayConstraintsFromSetErrorParameters($errorParameters))) {
            throw new InvalidArgumentException($errorParametersArrayErrorMessage, __LINE__);
        }
        $this->ErrorParameters = $errorParameters;
        
        return $this;
    }
    /**
     * Add item to ErrorParameters value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ErrorParameterType $item
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function addToErrorParameters(\macropage\ebaysdk\shopping\StructType\ErrorParameterType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ErrorParameterType) {
            throw new InvalidArgumentException(sprintf('The ErrorParameters property can only contain items of type \macropage\ebaysdk\shopping\StructType\ErrorParameterType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ErrorParameters[] = $item;
        
        return $this;
    }
    /**
     * Get ErrorClassification value
     * @return string|null
     */
    public function getErrorClassification(): ?string
    {
        return $this->ErrorClassification;
    }
    /**
     * Set ErrorClassification value
     * @uses \macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $errorClassification
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
     */
    public function setErrorClassification(?string $errorClassification = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType::valueIsValid($errorClassification)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType', is_array($errorClassification) ? implode(', ', $errorClassification) : var_export($errorClassification, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\ErrorClassificationCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorClassification = $errorClassification;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType
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
