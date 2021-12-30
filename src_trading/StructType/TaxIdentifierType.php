<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxIdentifierType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>BuyerTaxIdentifier</b> container that is returned in order management calls. This container will either consist of VAT or Codice Fiscale taxpayer identification information for the buyer.
 * @subpackage Structs
 */
class TaxIdentifierType extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - documentation: This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related
     * to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType[]
     */
    protected ?array $Attribute = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for TaxIdentifierType
     * @uses TaxIdentifierType::setType()
     * @uses TaxIdentifierType::setID()
     * @uses TaxIdentifierType::setAttribute()
     * @uses TaxIdentifierType::setAny()
     * @param string $type
     * @param string $iD
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType[] $attribute
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $type = null, ?string $iD = null, ?array $attribute = null, $any = null)
    {
        $this
            ->setType($type)
            ->setID($iD)
            ->setAttribute($attribute)
            ->setAny($any);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get Attribute value
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType[]
     */
    public function getAttribute(): ?array
    {
        return $this->Attribute;
    }
    /**
     * This method is responsible for validating the values passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintsFromSetAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxIdentifierTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$taxIdentifierTypeAttributeItem instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType) {
                $invalidValues[] = is_object($taxIdentifierTypeAttributeItem) ? get_class($taxIdentifierTypeAttributeItem) : sprintf('%s(%s)', gettype($taxIdentifierTypeAttributeItem), var_export($taxIdentifierTypeAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribute property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attribute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType[] $attribute
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
     */
    public function setAttribute(?array $attribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintsFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->Attribute = $attribute;
        
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType $item
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
     */
    public function addToAttribute(\macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType) {
            throw new InvalidArgumentException(sprintf('The Attribute property can only contain items of type \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attribute[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
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
