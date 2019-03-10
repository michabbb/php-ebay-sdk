<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MetadataType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>Metadata</b> container to provide price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items.
 * @subpackage Structs
 */
class MetadataType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The name of the price guidance parameter is returned in this field. Any of the following price guidance parameters may be returned in a <b>Metadata</b> container: <ul> <li><b>AppliesTo</b>: this parameter indicates the type of
     * listing that the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values pertain to. The corresponding <b>value</b> values that can be returned with the <b>AppliesTo</b> parameter is 'Auction' and 'FixedPrice'. </li> <li><b>Currency</b>:
     * this parameter indicates the type of currency being used for the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> values. The currency values (returned in corresponding <b>value</b> field) are based on the currency codes defined in the <a
     * href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard. </li> <li><b>MaxRecommendedValue</b>: this parameter indicates the upper end of the recommended price range for the item. Based on the recent sales
     * of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is returned in the corresponding <b>value</b> field. </li> <li><b>MinRecommendedValue</b>: this parameter
     * indicates the lower end of the recommended price range for the item. Based on the recent sales of similar items, eBay recommends a price range through the <b>MaxRecommendedValue</b> and <b>MinRecommendedValue</b> parameters. A dollar value is
     * returned in the corresponding <b>value</b> field. </li> <li><b>SimilarItems</b>: this parameter and its corresponding <b>value</b> values indicates which eBay item listings were used to determine the <b>MinRecommendedValue</b> and
     * <b>MaxRecommendedValue</b> values. The values returned in the <b>value</b> fields are Item IDs.</li> </ul>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: The corresponding value(s) for the price guidance parameter (returned in <b>Name</b> field of the same <b>Metadata</b> container. For the <b>AppliesTo</b> parameter, this value will either be 'Auction' or 'FixedPrice'. For the
     * <b>Currency</b> parameter, this value will be a three-digit representation of a currency (as defined in the <a href="http://en.wikipedia.org/wiki/ISO_4217" target="_blank">ISO 4217 - Currency Codes</a> standard). For the <b>MaxRecommendedValue</b>
     * and <b>MinRecommendedValue</b> parameters, this value will be a dollar value. For the <b>SimilarItems</b> parameters, this value will be an Item ID value, and it's possible that numerous Item IDs will be returned.
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
     * Constructor method for MetadataType
     * @uses MetadataType::setName()
     * @uses MetadataType::setValue()
     * @uses MetadataType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MetadataType
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
     * @return \macropage\ebaysdk\trading\StructType\MetadataType
     */
    public function setValue(array $value = array())
    {
        foreach ($value as $metadataTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($metadataTypeValueItem)) {
                throw new \InvalidArgumentException(sprintf('The Value property can only contain items of string, "%s" given', is_object($metadataTypeValueItem) ? get_class($metadataTypeValueItem) : gettype($metadataTypeValueItem)), __LINE__);
            }
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\MetadataType
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
     * @uses \macropage\ebaysdk\trading\StructType\MetadataType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MetadataType
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
     * @return \macropage\ebaysdk\trading\StructType\MetadataType
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
