<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionDescriptorsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains the data for condition descriptors associated with an item.
 * @subpackage Structs
 */
class ConditionDescriptorsType extends AbstractStructBase
{
    /**
     * The ConditionDescriptor
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br
     * />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br> <span
     * class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card categories (<b>CategoryID</b>):<br /> <ul><li>Non-Sport Trading Card Singles (<code>183050</code>)</li> <li>CCG Individual
     * Cards (<code>183454</code>)</li> <li>Sports Trading Card Singles (<code>261328</code>)</li></ul> </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionDescriptorType[]
     */
    protected ?array $ConditionDescriptor = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ConditionDescriptorsType
     * @uses ConditionDescriptorsType::setConditionDescriptor()
     * @uses ConditionDescriptorsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ConditionDescriptorType[] $conditionDescriptor
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $conditionDescriptor = null, $any = null)
    {
        $this
            ->setConditionDescriptor($conditionDescriptor)
            ->setAny($any);
    }
    /**
     * Get ConditionDescriptor value
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorType[]
     */
    public function getConditionDescriptor(): ?array
    {
        return $this->ConditionDescriptor;
    }
    /**
     * This method is responsible for validating the values passed to the setConditionDescriptor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConditionDescriptor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConditionDescriptorForArrayConstraintsFromSetConditionDescriptor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $conditionDescriptorsTypeConditionDescriptorItem) {
            // validation for constraint: itemType
            if (!$conditionDescriptorsTypeConditionDescriptorItem instanceof \macropage\ebaysdk\trading\StructType\ConditionDescriptorType) {
                $invalidValues[] = is_object($conditionDescriptorsTypeConditionDescriptorItem) ? get_class($conditionDescriptorsTypeConditionDescriptorItem) : sprintf('%s(%s)', gettype($conditionDescriptorsTypeConditionDescriptorItem), var_export($conditionDescriptorsTypeConditionDescriptorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConditionDescriptor property can only contain items of type \macropage\ebaysdk\trading\StructType\ConditionDescriptorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ConditionDescriptor value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ConditionDescriptorType[] $conditionDescriptor
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorsType
     */
    public function setConditionDescriptor(?array $conditionDescriptor = null): self
    {
        // validation for constraint: array
        if ('' !== ($conditionDescriptorArrayErrorMessage = self::validateConditionDescriptorForArrayConstraintsFromSetConditionDescriptor($conditionDescriptor))) {
            throw new InvalidArgumentException($conditionDescriptorArrayErrorMessage, __LINE__);
        }
        $this->ConditionDescriptor = $conditionDescriptor;
        
        return $this;
    }
    /**
     * Add item to ConditionDescriptor value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ConditionDescriptorType $item
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorsType
     */
    public function addToConditionDescriptor(\macropage\ebaysdk\trading\StructType\ConditionDescriptorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ConditionDescriptorType) {
            throw new InvalidArgumentException(sprintf('The ConditionDescriptor property can only contain items of type \macropage\ebaysdk\trading\StructType\ConditionDescriptorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ConditionDescriptor[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ConditionDescriptorsType
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
