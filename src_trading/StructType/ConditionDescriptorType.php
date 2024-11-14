<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionDescriptorType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains details like name, value, and additional information, that is provided by the seller about the specific condition of an item.
 * @subpackage Structs
 */
class ConditionDescriptorType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve
     * all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading
     * cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For
     * ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Name;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br
     * /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In
     * the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Value = null;
    /**
     * The AdditionalInfo
     * Meta information extracted from the WSDL
     * - documentation: Open text is passed in this field. This text provides additional information about a condition descriptor.<br><br>In the case of trading cards, this field houses the optional <b>Certification Number</b> condition descriptor for
     * graded cards. <br />
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AdditionalInfo = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ConditionDescriptorType
     * @uses ConditionDescriptorType::setName()
     * @uses ConditionDescriptorType::setValue()
     * @uses ConditionDescriptorType::setAdditionalInfo()
     * @uses ConditionDescriptorType::setAny()
     * @param string $name
     * @param string[] $value
     * @param string $additionalInfo
     * @param \DOMDocument|string|null $any
     */
    public function __construct(string $name, ?array $value = null, ?string $additionalInfo = null, $any = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
            ->setAdditionalInfo($additionalInfo)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorType
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string[]
     */
    public function getValue(): ?array
    {
        return $this->Value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $conditionDescriptorTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($conditionDescriptorTypeValueItem)) {
                $invalidValues[] = is_object($conditionDescriptorTypeValueItem) ? get_class($conditionDescriptorTypeValueItem) : sprintf('%s(%s)', gettype($conditionDescriptorTypeValueItem), var_export($conditionDescriptorTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Value value
     * @throws InvalidArgumentException
     * @param string[] $value
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorType
     */
    public function setValue(?array $value = null): self
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Add item to Value value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorType
     */
    public function addToValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Value[] = $item;
        
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return string|null
     */
    public function getAdditionalInfo(): ?string
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param string $additionalInfo
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorType
     */
    public function setAdditionalInfo(?string $additionalInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalInfo) && !is_string($additionalInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalInfo, true), gettype($additionalInfo)), __LINE__);
        }
        $this->AdditionalInfo = $additionalInfo;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorType
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
