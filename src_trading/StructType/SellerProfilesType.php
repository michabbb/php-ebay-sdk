<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerProfilesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerProfiles</b> container, which consists of references to a seller's payment, shipping, and return policy profiles.
 * @subpackage Structs
 */
class SellerProfilesType extends AbstractStructBase
{
    /**
     * The SellerShippingProfile
     * Meta information extracted from the WSDL
     * - documentation: The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a specific shipping business policy. Shipping business policies contain detailed
     * information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations. Muliple shipping business policies can be created and saved at the account
     * level by sellers, and it is possible to make one policy the default policy. <br/><br/> This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerShippingProfileType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerShippingProfileType $SellerShippingProfile = null;
    /**
     * The SellerReturnProfile
     * Meta information extracted from the WSDL
     * - documentation: The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a return policy business policy. Return policy business policies contain detailed
     * information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return
     * the item for a refund, and who pays the return shipping costs. Muliple return policy business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy. <br/><br/> This container is
     * only returned in 'Get' calls if Business Policies are set for the listing and the person making the API call is the seller of the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerReturnProfileType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerReturnProfileType $SellerReturnProfile = null;
    /**
     * The SellerPaymentProfile
     * Meta information extracted from the WSDL
     * - documentation: The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a payment business policy. Payment business policies contain accepted payment methods, a
     * flag to set up the immediate payment feature, a payment instructions field, and a field to specify the seller's PayPal email address. Muliple payment business policies can be created and saved at the account level by sellers, and it is possible to
     * make one policy the default policy. <br/><br/> This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing. <br> <br> <span
     * class="tablenote"><b>Note:</b> For sellers onboarded for eBay managed payments, payment methods do not need to be specified, and the PayPal email address is never relevant. The immediate payment boolean field is available to managed payments sellers
     * if they want to required immediate payment for 'Buy it Now' items. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $SellerPaymentProfile = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerProfilesType
     * @uses SellerProfilesType::setSellerShippingProfile()
     * @uses SellerProfilesType::setSellerReturnProfile()
     * @uses SellerProfilesType::setSellerPaymentProfile()
     * @uses SellerProfilesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\SellerShippingProfileType $sellerShippingProfile
     * @param \macropage\ebaysdk\trading\StructType\SellerReturnProfileType $sellerReturnProfile
     * @param \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $sellerPaymentProfile
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellerShippingProfileType $sellerShippingProfile = null, ?\macropage\ebaysdk\trading\StructType\SellerReturnProfileType $sellerReturnProfile = null, ?\macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $sellerPaymentProfile = null, $any = null)
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
    public function getSellerShippingProfile(): ?\macropage\ebaysdk\trading\StructType\SellerShippingProfileType
    {
        return $this->SellerShippingProfile;
    }
    /**
     * Set SellerShippingProfile value
     * @param \macropage\ebaysdk\trading\StructType\SellerShippingProfileType $sellerShippingProfile
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
     */
    public function setSellerShippingProfile(?\macropage\ebaysdk\trading\StructType\SellerShippingProfileType $sellerShippingProfile = null): self
    {
        $this->SellerShippingProfile = $sellerShippingProfile;
        
        return $this;
    }
    /**
     * Get SellerReturnProfile value
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnProfileType|null
     */
    public function getSellerReturnProfile(): ?\macropage\ebaysdk\trading\StructType\SellerReturnProfileType
    {
        return $this->SellerReturnProfile;
    }
    /**
     * Set SellerReturnProfile value
     * @param \macropage\ebaysdk\trading\StructType\SellerReturnProfileType $sellerReturnProfile
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
     */
    public function setSellerReturnProfile(?\macropage\ebaysdk\trading\StructType\SellerReturnProfileType $sellerReturnProfile = null): self
    {
        $this->SellerReturnProfile = $sellerReturnProfile;
        
        return $this;
    }
    /**
     * Get SellerPaymentProfile value
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType|null
     */
    public function getSellerPaymentProfile(): ?\macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
    {
        return $this->SellerPaymentProfile;
    }
    /**
     * Set SellerPaymentProfile value
     * @param \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $sellerPaymentProfile
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
     */
    public function setSellerPaymentProfile(?\macropage\ebaysdk\trading\StructType\SellerPaymentProfileType $sellerPaymentProfile = null): self
    {
        $this->SellerPaymentProfile = $sellerPaymentProfile;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilesType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
