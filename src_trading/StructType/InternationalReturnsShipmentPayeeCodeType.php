<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InternationalReturnsShipmentPayeeCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the available options for who pays the return shipping costs for international returns.
 * @subpackage Structs
 */
class InternationalReturnsShipmentPayeeCodeType extends AbstractStructBase
{
    /**
     * The InternationalReturnsShipmentPayee
     * Meta information extracted from the WSDL
     * - documentation: Defines the available options for who pays the return shipping costs for international returns in the specified marketplace and category.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $InternationalReturnsShipmentPayee = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for InternationalReturnsShipmentPayeeCodeType
     * @uses InternationalReturnsShipmentPayeeCodeType::setInternationalReturnsShipmentPayee()
     * @uses InternationalReturnsShipmentPayeeCodeType::setAny()
     * @param string[] $internationalReturnsShipmentPayee
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $internationalReturnsShipmentPayee = [], $any = null)
    {
        $this
            ->setInternationalReturnsShipmentPayee($internationalReturnsShipmentPayee)
            ->setAny($any);
    }
    /**
     * Get InternationalReturnsShipmentPayee value
     * @return string[]
     */
    public function getInternationalReturnsShipmentPayee(): array
    {
        return $this->InternationalReturnsShipmentPayee;
    }
    /**
     * This method is responsible for validating the values passed to the setInternationalReturnsShipmentPayee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternationalReturnsShipmentPayee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternationalReturnsShipmentPayeeForArrayConstraintsFromSetInternationalReturnsShipmentPayee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem)) {
                $invalidValues[] = is_object($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem) ? get_class($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem) : sprintf('%s(%s)', gettype($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem), var_export($internationalReturnsShipmentPayeeCodeTypeInternationalReturnsShipmentPayeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InternationalReturnsShipmentPayee value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $internationalReturnsShipmentPayee
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public function setInternationalReturnsShipmentPayee(array $internationalReturnsShipmentPayee = []): self
    {
        // validation for constraint: array
        if ('' !== ($internationalReturnsShipmentPayeeArrayErrorMessage = self::validateInternationalReturnsShipmentPayeeForArrayConstraintsFromSetInternationalReturnsShipmentPayee($internationalReturnsShipmentPayee))) {
            throw new InvalidArgumentException($internationalReturnsShipmentPayeeArrayErrorMessage, __LINE__);
        }
        $this->InternationalReturnsShipmentPayee = $internationalReturnsShipmentPayee;
        
        return $this;
    }
    /**
     * Add item to InternationalReturnsShipmentPayee value
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public function addToInternationalReturnsShipmentPayee(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ReturnsShipmentPayeeCodeType::getValidValues())), __LINE__);
        }
        $this->InternationalReturnsShipmentPayee[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\InternationalReturnsShipmentPayeeCodeType
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
