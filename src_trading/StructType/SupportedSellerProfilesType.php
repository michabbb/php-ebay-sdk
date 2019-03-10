<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupportedSellerProfilesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SupportedSellerProfiles</b> container for all payment, return, and shipping policy profiles that a seller has defined for a site.
 * @subpackage Structs
 */
class SupportedSellerProfilesType extends AbstractStructBase
{
    /**
     * The SupportedSellerProfile
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of information related to specific Business Policies payment, return, and shipping policy profiles. The profile type is found in the <b>ProfileType</b> field.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType[]
     */
    public $SupportedSellerProfile;
    /**
     * Constructor method for SupportedSellerProfilesType
     * @uses SupportedSellerProfilesType::setSupportedSellerProfile()
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType[] $supportedSellerProfile
     */
    public function __construct(array $supportedSellerProfile = array())
    {
        $this
            ->setSupportedSellerProfile($supportedSellerProfile);
    }
    /**
     * Get SupportedSellerProfile value
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType[]|null
     */
    public function getSupportedSellerProfile()
    {
        return $this->SupportedSellerProfile;
    }
    /**
     * Set SupportedSellerProfile value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType[] $supportedSellerProfile
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType
     */
    public function setSupportedSellerProfile(array $supportedSellerProfile = array())
    {
        foreach ($supportedSellerProfile as $supportedSellerProfilesTypeSupportedSellerProfileItem) {
            // validation for constraint: itemType
            if (!$supportedSellerProfilesTypeSupportedSellerProfileItem instanceof \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType) {
                throw new \InvalidArgumentException(sprintf('The SupportedSellerProfile property can only contain items of \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType, "%s" given', is_object($supportedSellerProfilesTypeSupportedSellerProfileItem) ? get_class($supportedSellerProfilesTypeSupportedSellerProfileItem) : gettype($supportedSellerProfilesTypeSupportedSellerProfileItem)), __LINE__);
            }
        }
        $this->SupportedSellerProfile = $supportedSellerProfile;
        return $this;
    }
    /**
     * Add item to SupportedSellerProfile value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType $item
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType
     */
    public function addToSupportedSellerProfile(\macropage\ebaysdk\trading\StructType\SupportedSellerProfileType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType) {
            throw new \InvalidArgumentException(sprintf('The SupportedSellerProfile property can only contain items of \macropage\ebaysdk\trading\StructType\SupportedSellerProfileType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SupportedSellerProfile[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType
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
