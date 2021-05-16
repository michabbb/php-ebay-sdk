<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbstractResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base type definition of a response payload that can carry any type of payload content with following optional elements:<br> - timestamp of response message<br> - application-level acknowledgement<br> - application-level
 * (business-level) errors and warnings
 * @subpackage Structs
 */
abstract class AbstractResponseType extends AbstractStructBase
{
    /**
     * The Timestamp
     * Meta information extracted from the WSDL
     * - documentation: This value represents the date and time when eBay processed the request. The time zone of this value is <a href="http://developer.ebay.com/DevZone/shopping/docs/CallRef/types/simpleTypes.html#dateTime">GMT</a> and the format is the
     * ISO 8601 date and time format (YYYY-MM-DDTHH:MM:SS.SSSZ). See the "dateTime" type for information about this time format and converting to and from the GMT time zone.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Timestamp = null;
    /**
     * The Ack
     * Meta information extracted from the WSDL
     * - documentation: A token representing the application-level acknowledgement code that indicates the response status (e.g., success). The <b>AckCodeType</b> list specifies the possible values for the <b>Ack</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Ack = null;
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - documentation: A list of application-level errors or warnings (if any) that were raised when eBay processed the request. <br> <br> Application-level errors occur due to problems with business-level data on the client side or on the eBay server
     * side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal
     * business logic while processing the request.<br> <br> Only returned if there were warnings or errors.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ErrorType[]
     */
    protected array $Errors = [];
    /**
     * The Build
     * Meta information extracted from the WSDL
     * - documentation: This refers to the particular software build that eBay used when processing the request and generating the response. This includes the version number plus additional information. eBay Developer Support may request the build
     * information when helping you resolve technical issues.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Build = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: The version of the API call that eBay used to process the request. <br> <br> <span class="tablenote"><b>Note:</b> Note that some calls are not always updated with each WSDL release, so it is possible that version numbers will differ
     * by API call.</span> <br> If a field in the response returns the token "CustomCode", it usually means that the field is a code type (a token or enumeration), and that in your request URL (or HTTP header) you specified a version that is older than the
     * version in which the token was added to the call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Version = null;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: If you pass a value in MessageID in a request, we will return the same value in CorrelationID in the response. You can use this for tracking that a response is returned for every request and to match particular responses to
     * particular requests. Only returned if MessageID was used.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CorrelationID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $timestamp = null, ?string $ack = null, array $errors = [], ?string $build = null, ?string $version = null, ?string $correlationID = null, $any = null)
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
    public function getTimestamp(): ?string
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get Ack value
     * @return string|null
     */
    public function getAck(): ?string
    {
        return $this->Ack;
    }
    /**
     * Set Ack value
     * @uses \macropage\ebaysdk\shopping\EnumType\AckCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\shopping\EnumType\AckCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ack
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setAck(?string $ack = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\shopping\EnumType\AckCodeType::valueIsValid($ack)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\shopping\EnumType\AckCodeType', is_array($ack) ? implode(', ', $ack) : var_export($ack, true), implode(', ', \macropage\ebaysdk\shopping\EnumType\AckCodeType::getValidValues())), __LINE__);
        }
        $this->Ack = $ack;
        
        return $this;
    }
    /**
     * Get Errors value
     * @return \macropage\ebaysdk\shopping\StructType\ErrorType[]
     */
    public function getErrors(): array
    {
        return $this->Errors;
    }
    /**
     * This method is responsible for validating the values passed to the setErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorsForArrayConstraintsFromSetErrors(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $abstractResponseTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$abstractResponseTypeErrorsItem instanceof \macropage\ebaysdk\shopping\StructType\ErrorType) {
                $invalidValues[] = is_object($abstractResponseTypeErrorsItem) ? get_class($abstractResponseTypeErrorsItem) : sprintf('%s(%s)', gettype($abstractResponseTypeErrorsItem), var_export($abstractResponseTypeErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Errors property can only contain items of type \macropage\ebaysdk\shopping\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Errors value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ErrorType[] $errors
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setErrors(array $errors = []): self
    {
        // validation for constraint: array
        if ('' !== ($errorsArrayErrorMessage = self::validateErrorsForArrayConstraintsFromSetErrors($errors))) {
            throw new InvalidArgumentException($errorsArrayErrorMessage, __LINE__);
        }
        $this->Errors = $errors;
        
        return $this;
    }
    /**
     * Add item to Errors value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ErrorType $item
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function addToErrors(\macropage\ebaysdk\shopping\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The Errors property can only contain items of type \macropage\ebaysdk\shopping\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Errors[] = $item;
        
        return $this;
    }
    /**
     * Get Build value
     * @return string|null
     */
    public function getBuild(): ?string
    {
        return $this->Build;
    }
    /**
     * Set Build value
     * @param string $build
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setBuild(?string $build = null): self
    {
        // validation for constraint: string
        if (!is_null($build) && !is_string($build)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($build, true), gettype($build)), __LINE__);
        }
        $this->Build = $build;
        
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID(): ?string
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
     */
    public function setCorrelationID(?string $correlationID = null): self
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($correlationID, true), gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\AbstractResponseType
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
