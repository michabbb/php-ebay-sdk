<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerProfilesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerProfiles</b> container, which consists of references to a seller's payment, shipping, and return policy profiles.
 * @subpackage Structs
 */
class SellerProfilesType extends AbstractStructBase
{
    /**
     * The SellerShippingProfile
     * Meta informations extracted from the WSDL
     * - documentation: The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the values of a Business Policies shipping policy profile. Business Policies shipping profiles contain detailed
     * information on domestic and international shipping, including shipping service options, handling time, package handling costs, excluded ship-to locations, and shipping insurance information. <br/><br/> This container is only returned in 'Get' calls
     * if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerShippingProfileType
     */
    public $SellerShippingProfile;
    /**
     * The SellerReturnProfile
     * Meta informations extracted from the WSDL
     * - documentation: The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the values of a Business Policies return policy profile. Business Policies return policy profiles contain detailed
     * information on the seller's return policy, including who pays for the return shipping, how many days the buyer has to return the item for a refund, and the refund option (if any). <br/><br/> This container is only returned in 'Get' calls if Business
     * Policies are set for the listing and the person making the API call is the seller of the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerReturnProfileType
     */
    public $SellerReturnProfile;
    /**
     * The SellerPaymentProfile
     * Meta informations extracted from the WSDL
     * - documentation: The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the values of a Business Policies payment profile. Business Policies payment profiles contain accepted payment
     * methods, a flag to set up the immediate payment feature, a payment instructions field, and a field to specify the seller's PayPal email address. <br/><br/> This container is only returned in 'Get' calls if Business Policies are set for the listing,
     * and the person making the API call is the seller of the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
     */
    public $SellerPaymentProfile;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerProfilesType
     * @uses SellerProfilesType::setSellerShippingProfile()
     * @uses SellerProfilesType::setSellerReturnProfile()
     * @uses SellerProfilesType::setSellerPaymentProfile()
     * @uses SellerProfilesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SellerShippingProfileType $sellerShippingProfile
     * @param \macropage\ebaysdk\trading\StructType\SellerReturnProfileType $sellerReturnProfile
     * @param \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $sellerPaymentProfile
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\SellerShippingProfileType $sellerShippingProfile = null, \macropage\ebaysdk\trading\StructType\SellerReturnProfileType $sellerReturnProfile = null, \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $sellerPaymentProfile = null, \DOMDocument $any = null)
    {
        $this
            ->setSellerShippingProfile($sellerShippingProfile)
            ->setSellerReturnProfile($sellerReturnProfile)
            ->setSellerPaymentProfile($sellerPaymentProfile)
            ->setAny($any);
    }
    /**
     * Get SellerShippingProfile value
     * @return \macropage\ebaysdk\trading\StructType\SellerShippingProfileType|null
     */
    public function getSellerShippingProfile()
    {
        return $this->SellerShippingProfile;
    }
    /**
     * Set SellerShippingProfile value
     * @param \macropage\ebaysdk\trading\StructType\SellerShippingProfileType $sellerShippingProfile
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
     */
    public function setSellerShippingProfile(\macropage\ebaysdk\trading\StructType\SellerShippingProfileType $sellerShippingProfile = null)
    {
        $this->SellerShippingProfile = $sellerShippingProfile;
        return $this;
    }
    /**
     * Get SellerReturnProfile value
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType|null
     */
    public function getSellerReturnProfile()
    {
        return $this->SellerReturnProfile;
    }
    /**
     * Set SellerReturnProfile value
     * @param \macropage\ebaysdk\trading\StructType\SellerReturnProfileType $sellerReturnProfile
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
     */
    public function setSellerReturnProfile(\macropage\ebaysdk\trading\StructType\SellerReturnProfileType $sellerReturnProfile = null)
    {
        $this->SellerReturnProfile = $sellerReturnProfile;
        return $this;
    }
    /**
     * Get SellerPaymentProfile value
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType|null
     */
    public function getSellerPaymentProfile()
    {
        return $this->SellerPaymentProfile;
    }
    /**
     * Set SellerPaymentProfile value
     * @param \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $sellerPaymentProfile
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
     */
    public function setSellerPaymentProfile(\macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $sellerPaymentProfile = null)
    {
        $this->SellerPaymentProfile = $sellerPaymentProfile;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerProfilesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
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
