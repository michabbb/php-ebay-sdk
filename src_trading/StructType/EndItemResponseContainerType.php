<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndItemResponseContainerType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type includes the acknowledgement of the date and time when an eBay listing was ended due to the call to <b>EndItems</b>.
 * @subpackage Structs
 */
class EndItemResponseContainerType extends AbstractStructBase
{
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * The CorrelationID
     * Meta information extracted from the WSDL
     * - documentation: Most Trading API calls support a <b>MessageID</b> element in the request and a <b>CorrelationID</b> element in the response. With <b>EndItems</b>, the seller can pass in a different <b>MessageID</b> value for each
     * <b>EndItemRequestContainer</b> container that is used in the request. The <b>CorrelationID</b> value returned under each <b>EndItemResponseContainer</b> container is used to correlate each End Item request container with its corresponding End Item
     * response container. The same <b>MessageID</b> value that you pass into a request will be returned in the <b>CorrelationID</b> field in the response. <br> <br> If you do not pass in a <b>MessageID</b> value in the request, <b>CorrelationID</b> is not
     * returned.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CorrelationID = null;
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - documentation: A list of application-level errors or warnings (if any) that were raised when eBay processed the request. <br> <br> Application-level errors occur due to problems with business-level data on the client side or on the eBay server
     * side. For example, an error would occur if the request contains an invalid combination of fields, or it is missing a required field, or the value of the field is not recognized. An error could also occur if eBay encountered a problem in our internal
     * business logic while processing the request.<br> <br> Only returned if there were warnings or errors.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ErrorType[]
     */
    protected array $Errors = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for EndItemResponseContainerType
     * @uses EndItemResponseContainerType::setEndTime()
     * @uses EndItemResponseContainerType::setCorrelationID()
     * @uses EndItemResponseContainerType::setErrors()
     * @uses EndItemResponseContainerType::setAny()
     * @param string $endTime
     * @param string $correlationID
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $endTime = null, ?string $correlationID = null, array $errors = [], $any = null)
    {
        $this
            ->setEndTime($endTime)
            ->setCorrelationID($correlationID)
            ->setErrors($errors)
            ->setAny($any);
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType
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
     * Get Errors value
     * @return \macropage\ebaysdk\trading\StructType\ErrorType[]
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
        foreach ($values as $endItemResponseContainerTypeErrorsItem) {
            // validation for constraint: itemType
            if (!$endItemResponseContainerTypeErrorsItem instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
                $invalidValues[] = is_object($endItemResponseContainerTypeErrorsItem) ? get_class($endItemResponseContainerTypeErrorsItem) : sprintf('%s(%s)', gettype($endItemResponseContainerTypeErrorsItem), var_export($endItemResponseContainerTypeErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Errors property can only contain items of type \macropage\ebaysdk\trading\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Errors value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ErrorType[] $errors
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType
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
     * @param \macropage\ebaysdk\trading\StructType\ErrorType $item
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType
     */
    public function addToErrors(\macropage\ebaysdk\trading\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The Errors property can only contain items of type \macropage\ebaysdk\trading\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Errors[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\EndItemResponseContainerType
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
