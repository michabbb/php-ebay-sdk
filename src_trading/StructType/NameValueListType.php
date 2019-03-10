<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameValueListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used to set or identify either an Item Specific name/value pair for a category/item/variation, or to identify a Parts Compatibility name/value pair.
 * @subpackage Structs
 */
class NameValueListType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Depending on the call and context, this value is either a name of an Item/Category/Variation Specific, or a Parts Compatibility name. <br> <br> <b>For the AddItem and AddFixedPriceItem families of calls:</b> In the
     * <b>Item.ItemSpecifics</b> context, this can be any name that the seller wants to use. However, to help buyers find items more easily, it is a good idea to try to use a recommended name when possible (see <b>GetCategorySpecifics</b>). You can't
     * specify the same name twice within the same listing. <br> <br> <b>For the <b>AddFixedPriceItem</b> family of calls:</b> In the <b>VariationSpecifics</b> context, this can be any name that the seller wants to use, unless the <b>VariationsEnabled</b>
     * flag is false for the name in the <b>GetCategorySpecifics</b> response. For example, for some categories eBay may recommend that you only use "Brand" as a shared name at the Item level, not in variations. <br> <br> <b>For the <b>AddFixedPriceItem</b>
     * family of calls:</b> In the <b>Compatibility.NameValueList</b> context, this value is a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle
     * parts and accessories listings. <br> <br> <b>For GetCategorySpecifics:</b> This is a recommended (popular) name to use for items in the specified category (e.g., "Brand" might be recommended, not "Manufacturer"). </span> <br> <br> <b>For
     * PlaceOffer:</b> Required if the item being purchased includes Item Variations. <br> <br> <span class="tablenote"><b>Note:</b> For mandatory and recommended item specifics that are returned in the <b>GetCategorySpecifics</b> call, the seller should
     * pass in the name of these item specifics just as they are shown in the <b>GetCategorySpecifics</b> response. Similarly, for PBSE categories, the seller should pass in the name of instance aspects just as they are shown in the
     * <b>GetCategorySpecifics</b> response. Instance aspects are additional details unique to a specific item or listing that a seller can include along with the product aspects that are already defined in the eBay Catalog product associated with the
     * listing. Instance aspects common to many PBSE categories include 'Bundle Description' and 'Modification Description'. As of August 30, 2018, eBay US sellers who ship to California are required to pass in a 'California Prop 65 Warning' item specific
     * if the item in the listing contains one or more chemicals known to be harmful to human health. This item specific is passed at the listing level for both single-variation and multiple-variation listings. The 'California Prop 65 Warning' is considered
     * an instance specific because it will be retained on the listing even when the seller lists in a PBSE category. This requirement is applicable to most eBay US categories, including eBay Motors, Motors Parts & Accessories, and PBSE-enforced categories.
     * </span> <span class="tablenote"><b>Note:</b> If Brand and MPN (Manufacturer Part Number) are being used to identify product variations in a multiple-variation listing, the Brand must be specified at the item level (<b>ItemSpecifics</b> container) and
     * the MPN for each product variation must be specified at the variation level (<b>VariationSpecifics</b> container). The Brand name must be the same for all variations within a single listing. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: Depending on the call and context, this value is either the value of an Item/Category/Variation Specific, a Parts Compatibility value, or a product identifier.<br> <br> <b>For the <b>AddItem</b> family of calls:</b> If you specify
     * multiple values for Item Specifics, eBay only stores the first one, unless <b>GetCategorySpecifics</b> indicates that the corresponding name supports multiple values. <br> <br> <b>For the <b>AddFixedPriceItem</b> family of calls:</b> If you specify
     * multiple values for Item Specifics or Variation Specifics, eBay only stores the first one, unless <b>GetCategorySpecifics</b> indicates that the corresponding name supports multiple values.<br> <br> In <b>VariationSpecificSet</b>, you typically
     * specify multiple Value fields for each name. For example, if <b>Name</b> = <code>Size</code>, you would specify all size values that you wan to offer in the listing. <br> <br> For the <b>Compatibility.NameValueList</b> context, this is the
     * corresponding value of a motor vehicle aspect such as <em>Year</em>, <em>Make</em>, and <em>Model</em>. A <b>Compatibility.NameValueList</b> container is applicable for motor vehicle parts and accessories listings. <br> <br> <b>For
     * GetCategorySpecifics:</b> The most highly recommended values are returned first. For these calls, Value is only returned when recommended values are available.<br> <br> <b>For PlaceOffer:</b> Required if the item being purchased includes Item
     * Variations.<br> <br> <br> <span class="tablenote"><b>Note:</b> The standard maximum length for the value of an item specific is 65, but the maximum allowed length increases for instance aspects such as 'Bundle Description' and 'Modification
     * Description'. The maximum allowed length for these instance aspects are returned in the <b>GetCategorySpecifics</b> call. The maximum allowed length for the new 'California Prop 65 Warning' item specific is 800 characters. For more information about
     * the 'California Prop 65 Warning' item specific, see the <b>ItemSpecifics.NameValueList</b> field description. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Value;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: The origin of this Item Specific. Only returned if the source is not custom Item Specifics.
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for NameValueListType
     * @uses NameValueListType::setName()
     * @uses NameValueListType::setValue()
     * @uses NameValueListType::setSource()
     * @uses NameValueListType::setAny()
     * @param string $name
     * @param string[] $value
     * @param string $source
     * @param \DOMDocument $any
     */
    public function __construct($name = null, array $value = array(), $source = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
            ->setSource($source)
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
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType
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
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType
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
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType
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
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \macropage\ebaysdk\trading\EnumType\ItemSpecificSourceCodeType::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\NameValueListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType
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
     * @return \macropage\ebaysdk\trading\StructType\NameValueListType
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
