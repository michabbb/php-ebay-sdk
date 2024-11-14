<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponsiblePersonCodeTypes StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for collection of possible responsible person enumerations.
 * @subpackage Structs
 */
class ResponsiblePersonCodeTypes extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of Responsible Person associated with the listing. <br /> <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $Type;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ResponsiblePersonCodeTypes
     * @uses ResponsiblePersonCodeTypes::setType()
     * @uses ResponsiblePersonCodeTypes::setAny()
     * @param string[] $type
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $type, $any = null)
    {
        $this
            ->setType($type)
            ->setAny($any);
    }
    /**
     * Get Type value
     * @return string[]
     */
    public function getType(): array
    {
        return $this->Type;
    }
    /**
     * This method is responsible for validating the values passed to the setType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTypeForArrayConstraintsFromSetType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responsiblePersonCodeTypesTypeItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType::valueIsValid($responsiblePersonCodeTypesTypeItem)) {
                $invalidValues[] = is_object($responsiblePersonCodeTypesTypeItem) ? get_class($responsiblePersonCodeTypesTypeItem) : sprintf('%s(%s)', gettype($responsiblePersonCodeTypesTypeItem), var_export($responsiblePersonCodeTypesTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $type
     * @return \macropage\ebaysdk\trading\StructType\ResponsiblePersonCodeTypes
     */
    public function setType(array $type): self
    {
        // validation for constraint: array
        if ('' !== ($typeArrayErrorMessage = self::validateTypeForArrayConstraintsFromSetType($type))) {
            throw new InvalidArgumentException($typeArrayErrorMessage, __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Add item to Type value
     * @uses \macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ResponsiblePersonCodeTypes
     */
    public function addToType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ResponsiblePersonCodeType::getValidValues())), __LINE__);
        }
        $this->Type[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ResponsiblePersonCodeTypes
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
