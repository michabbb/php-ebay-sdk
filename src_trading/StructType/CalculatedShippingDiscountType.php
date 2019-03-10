<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculatedShippingDiscountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>CalculatedShippingDiscount</b> container, which is used in the <b>SetShippingDiscountProfiles</b> call to create one or more discounted calculated shipping rules. The <b>CalculatedShippingDiscount</b> container is
 * returned in the response of all other calls that use this type.
 * @subpackage Structs
 */
class CalculatedShippingDiscountType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the type of calculated shipping discount rule that is being applied. Each rule is explained below.
     * - minOccurs: 0
     * @var string
     */
    public $DiscountName;
    /**
     * The DiscountProfile
     * Meta informations extracted from the WSDL
     * - documentation: This container provides details of this particular calculated shipping discount profile. <br><br> <b>For SetShippingDiscountProfiles</b>: If the <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified
     * version of the profile must be provided. If the <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required, the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no
     * longer applicable. <br><br> Restrictions on how many profiles can exist for a given discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
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
     * Constructor method for CalculatedShippingDiscountType
     * @uses CalculatedShippingDiscountType::setDiscountName()
     * @uses CalculatedShippingDiscountType::setDiscountProfile()
     * @uses CalculatedShippingDiscountType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType
     */
    public function setDiscountProfile(array $discountProfile = array())
    {
        foreach ($discountProfile as $calculatedShippingDiscountTypeDiscountProfileItem) {
            // validation for constraint: itemType
            if (!$calculatedShippingDiscountTypeDiscountProfileItem instanceof \macropage\ebaysdk\trading\StructType\DiscountProfileType) {
                throw new \InvalidArgumentException(sprintf('The DiscountProfile property can only contain items of \macropage\ebaysdk\trading\StructType\DiscountProfileType, "%s" given', is_object($calculatedShippingDiscountTypeDiscountProfileItem) ? get_class($calculatedShippingDiscountTypeDiscountProfileItem) : gettype($calculatedShippingDiscountTypeDiscountProfileItem)), __LINE__);
            }
        }
        $this->DiscountProfile = $discountProfile;
        return $this;
    }
    /**
     * Add item to DiscountProfile value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DiscountProfileType $item
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType
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
     * @uses \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType
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
     * @return \macropage\ebaysdk\trading\StructType\CalculatedShippingDiscountType
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
