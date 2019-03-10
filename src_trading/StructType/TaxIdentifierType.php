<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxIdentifierType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the <b>BuyerTaxIdentifier</b> container that is returned in order management calls. This container consists of taxpayer identification information for the buyer and it is currently used by sellers selling on the
 * Italy or Spain site to retrieve the taxpayer ID of buyers registered on the Italy or Spain sites.
 * @subpackage Structs
 */
class TaxIdentifierType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value identifies the type of tax ID that was supplied by the buyer during the checkout process.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: This value is the actual tax ID for the buyer. The type of tax ID is shown in the <b>Type</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Attribute
     * Meta informations extracted from the WSDL
     * - documentation: This field shows an attribute, and its corresponding value for the buyer's tax identification card. Currently, this field is only used to indicate which country issued the buyer's tax ID, but in the future, other attributes related
     * to the tax ID may be returned in this field. This field's value will be an <a href="http://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">ISO 3166-1 two-digit code</a> that represents the issuing country.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType[]
     */
    public $Attribute;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TaxIdentifierType
     * @uses TaxIdentifierType::setType()
     * @uses TaxIdentifierType::setID()
     * @uses TaxIdentifierType::setAttribute()
     * @uses TaxIdentifierType::setAny()
     * @param string $type
     * @param string $iD
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType[] $attribute
     * @param \DOMDocument $any
     */
    public function __construct($type = null, $iD = null, array $attribute = array(), \DOMDocument $any = null)
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
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \macropage\ebaysdk\trading\EnumType\ValueTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Attribute value
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType[] $attribute
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $taxIdentifierTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$taxIdentifierTypeAttributeItem instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType) {
                throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType, "%s" given', is_object($taxIdentifierTypeAttributeItem) ? get_class($taxIdentifierTypeAttributeItem) : gettype($taxIdentifierTypeAttributeItem)), __LINE__);
            }
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType $item
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
     */
    public function addToAttribute(\macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \macropage\ebaysdk\trading\StructType\TaxIdentifierAttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attribute[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\TaxIdentifierType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
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
     * @return \macropage\ebaysdk\trading\StructType\TaxIdentifierType
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
