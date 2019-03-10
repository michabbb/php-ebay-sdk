<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonProfitSocialAddressType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>NonProfitSocialAddress</b> container, which identifies the nonprofit organization's social networking site account ID. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the
 * charity organization is associated with.
 * @subpackage Structs
 */
class NonProfitSocialAddressType extends AbstractStructBase
{
    /**
     * The SocialAddressType
     * Meta informations extracted from the WSDL
     * - documentation: Enumeration value that indicates the social networking site that the nonprofit charity organization is associated with. This is a required field for each social networking account associated with the nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $SocialAddressType;
    /**
     * The SocialAddressId
     * Meta informations extracted from the WSDL
     * - documentation: The account ID/handle associated with the nonprofit charity organization's social networking site. This is a required field for each social networking account associated with the nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $SocialAddressId;
    /**
     * Constructor method for NonProfitSocialAddressType
     * @uses NonProfitSocialAddressType::setSocialAddressType()
     * @uses NonProfitSocialAddressType::setSocialAddressId()
     * @param string $socialAddressType
     * @param string $socialAddressId
     */
    public function __construct($socialAddressType = null, $socialAddressId = null)
    {
        $this
            ->setSocialAddressType($socialAddressType)
            ->setSocialAddressId($socialAddressId);
    }
    /**
     * Get SocialAddressType value
     * @return string|null
     */
    public function getSocialAddressType()
    {
        return $this->SocialAddressType;
    }
    /**
     * Set SocialAddressType value
     * @uses \macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $socialAddressType
     * @return \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType
     */
    public function setSocialAddressType($socialAddressType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType::valueIsValid($socialAddressType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $socialAddressType, implode(', ', \macropage\ebaysdk\trading\EnumType\SocialAddressTypeCodeType::getValidValues())), __LINE__);
        }
        $this->SocialAddressType = $socialAddressType;
        return $this;
    }
    /**
     * Get SocialAddressId value
     * @return string|null
     */
    public function getSocialAddressId()
    {
        return $this->SocialAddressId;
    }
    /**
     * Set SocialAddressId value
     * @param string $socialAddressId
     * @return \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType
     */
    public function setSocialAddressId($socialAddressId = null)
    {
        // validation for constraint: string
        if (!is_null($socialAddressId) && !is_string($socialAddressId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($socialAddressId)), __LINE__);
        }
        $this->SocialAddressId = $socialAddressId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\NonProfitSocialAddressType
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
