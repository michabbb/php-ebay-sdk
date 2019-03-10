<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerProfilePreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerProfilePreferences</b> container. This container consists of a flag that indicates whether or not the seller has opted into Business Policies, as well as a list of Business Policies profiles that have been
 * set up for the seller's account.
 * @subpackage Structs
 */
class SellerProfilePreferencesType extends AbstractStructBase
{
    /**
     * The SellerProfileOptedIn
     * Meta informations extracted from the WSDL
     * - documentation: Boolean flag indicating whether or not a seller has opted in to Business Policies. Sellers must opt in to Business Policies to create and manage payment, return policy, and shipping profiles.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerProfileOptedIn;
    /**
     * The SupportedSellerProfiles
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of one or more Business Policies profiles active for a seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences and the seller has one or more Business Policies
     * profiles active on the account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType
     */
    public $SupportedSellerProfiles;
    /**
     * Constructor method for SellerProfilePreferencesType
     * @uses SellerProfilePreferencesType::setSellerProfileOptedIn()
     * @uses SellerProfilePreferencesType::setSupportedSellerProfiles()
     * @param bool $sellerProfileOptedIn
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $supportedSellerProfiles
     */
    public function __construct($sellerProfileOptedIn = null, \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $supportedSellerProfiles = null)
    {
        $this
            ->setSellerProfileOptedIn($sellerProfileOptedIn)
            ->setSupportedSellerProfiles($supportedSellerProfiles);
    }
    /**
     * Get SellerProfileOptedIn value
     * @return bool|null
     */
    public function getSellerProfileOptedIn()
    {
        return $this->SellerProfileOptedIn;
    }
    /**
     * Set SellerProfileOptedIn value
     * @param bool $sellerProfileOptedIn
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType
     */
    public function setSellerProfileOptedIn($sellerProfileOptedIn = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerProfileOptedIn) && !is_bool($sellerProfileOptedIn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sellerProfileOptedIn)), __LINE__);
        }
        $this->SellerProfileOptedIn = $sellerProfileOptedIn;
        return $this;
    }
    /**
     * Get SupportedSellerProfiles value
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType|null
     */
    public function getSupportedSellerProfiles()
    {
        return $this->SupportedSellerProfiles;
    }
    /**
     * Set SupportedSellerProfiles value
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $supportedSellerProfiles
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType
     */
    public function setSupportedSellerProfiles(\macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $supportedSellerProfiles = null)
    {
        $this->SupportedSellerProfiles = $supportedSellerProfiles;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType
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
