<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameValueListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Depending on the call and listing, this type is used to identify the following through name/value pairs: <ul> <li>Listing-level Item Specific name-value pairs </li> <li>Variation-level name-value pairs identifying the individual
 * variation within a multiple-variation listing </li> <li>Item Specific name-value pairs for an eBay catalog product</li> <li>Name-value pairs identifying a specific motor vehicle that is compatible with a motor vehicle part or accessory</li> </ul>
 * @subpackage Structs
 */
class NameValueListType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The name of the Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, and individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor
     * vehicle part or accessory listing. <br> <br> <span class="tablenote"><b>Note:</b> To control the data that is returned in a <b>GetSingleItem</b> or <b>GetMultipleItems</b> response, the <b>IncludeSelector</b> filter should be included. To see
     * listing-level Item Specifics, include the <b>IncludeSelector</b> field and set its value to <b>ItemSpecifics</b>. To see variation-level Item Specifics (only applicable for multiple-variation listings), include the <b>IncludeSelector</b> field and
     * set its value to <b>Variations</b>. To see Parts Compatibility name/value pairs (only applicable for motor vehicle part or accessory listings with a compatible vehicle list), include the <b>IncludeSelector</b> field and set its value to
     * <b>Compatibility</b>. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: The corresponding value of an Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, an individual variation within a multiple-variation listing, or a Parts Compatibility aspect
     * for a motor vehicle part or accessory listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Value;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NameValueListType
     * @uses NameValueListType::setName()
     * @uses NameValueListType::setValue()
     * @uses NameValueListType::setAny()
     * @param string $name
     * @param string[] $value
     * @param \DOMDocument $any
     */
    public function __construct($name = null, array $value = array(), \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Value value
     * @return string[]|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @throws \InvalidArgumentException
     * @param string[] $value
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
     */
    public function setValue(array $value = array())
    {
        foreach ($value as $nameValueListTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($nameValueListTypeValueItem)) {
                throw new \InvalidArgumentException(sprintf('The Value property can only contain items of string, "%s" given', is_object($nameValueListTypeValueItem) ? get_class($nameValueListTypeValueItem) : gettype($nameValueListTypeValueItem)), __LINE__);
            }
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
     */
    public function addToValue($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Value[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\NameValueListType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
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
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
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
