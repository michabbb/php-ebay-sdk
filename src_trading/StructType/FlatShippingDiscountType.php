<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatShippingDiscountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of an individual discount profile defined by the user for flat-rate shipping.
 * @subpackage Structs
 */
class FlatShippingDiscountType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta informations extracted from the WSDL
     * - documentation: The type of discount or rule that is being used by the profile. The value corresponding to the selected rule is set in the same-named field of <b>FlatShippingDiscount.DiscountProfile</b>.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountName;
    /**
     * The DiscountProfile
     * Meta informations extracted from the WSDL
     * - documentation: Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is
     * <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DiscountProfileType[]
     */
    public $DiscountProfile;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for FlatShippingDiscountType
     * @uses FlatShippingDiscountType::setDiscountName()
     * @uses FlatShippingDiscountType::setDiscountProfile()
     * @uses FlatShippingDiscountType::setAny()
     * @param string $discountName
     * @param \macropage\ebaysdk\trading\StructType\DiscountProfileType[] $discountProfile
     * @param \DOMDocument $any
     */
    public function __construct($discountName = null, array $discountProfile = array(), \DOMDocument $any = null)
    {
        $this
            ->setDiscountName($discountName)
            ->setDiscountProfile($discountProfile)
            ->setAny($any);
    }
    /**
     * Get DiscountName value
     * @return string|null
     */
    public function getDiscountName()
    {
        return $this->DiscountName;
    }
    /**
     * Set DiscountName value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $discountName
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
     */
    public function setDiscountName($discountName = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::valueIsValid($discountName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $discountName, implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountName = $discountName;
        return $this;
    }
    /**
     * Get DiscountProfile value
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType[]|null
     */
    public function getDiscountProfile()
    {
        return $this->DiscountProfile;
    }
    /**
     * Set DiscountProfile value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DiscountProfileType[] $discountProfile
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
     */
    public function setDiscountProfile(array $discountProfile = array())
    {
        foreach ($discountProfile as $flatShippingDiscountTypeDiscountProfileItem) {
            // validation for constraint: itemType
            if (!$flatShippingDiscountTypeDiscountProfileItem instanceof \macropage\ebaysdk\trading\StructType\DiscountProfileType) {
                throw new \InvalidArgumentException(sprintf('The DiscountProfile property can only contain items of \macropage\ebaysdk\trading\StructType\DiscountProfileType, "%s" given', is_object($flatShippingDiscountTypeDiscountProfileItem) ? get_class($flatShippingDiscountTypeDiscountProfileItem) : gettype($flatShippingDiscountTypeDiscountProfileItem)), __LINE__);
            }
        }
        $this->DiscountProfile = $discountProfile;
        return $this;
    }
    /**
     * Add item to DiscountProfile value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DiscountProfileType $item
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
     */
    public function addToDiscountProfile(\macropage\ebaysdk\trading\StructType\DiscountProfileType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DiscountProfileType) {
            throw new \InvalidArgumentException(sprintf('The DiscountProfile property can only contain items of \macropage\ebaysdk\trading\StructType\DiscountProfileType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DiscountProfile[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
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
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
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
