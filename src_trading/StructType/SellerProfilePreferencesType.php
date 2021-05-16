<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerProfilePreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerProfilePreferences</b> container. This container consists of a flag that indicates whether or not the seller has opted into Business Policies, as well as a list of Business Policies profiles that have been
 * set up for the seller's account.
 * @subpackage Structs
 */
class SellerProfilePreferencesType extends AbstractStructBase
{
    /**
     * The SellerProfileOptedIn
     * Meta information extracted from the WSDL
     * - documentation: Boolean flag indicating whether or not a seller has opted in to Business Policies. Sellers must opt in to Business Policies to create and manage payment, return policy, and shipping profiles.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SellerProfileOptedIn = null;
    /**
     * The SupportedSellerProfiles
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of one or more Business Policies profiles active for a seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences and the seller has one or more Business Policies
     * profiles active on the account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $SupportedSellerProfiles = null;
    /**
     * Constructor method for SellerProfilePreferencesType
     * @uses SellerProfilePreferencesType::setSellerProfileOptedIn()
     * @uses SellerProfilePreferencesType::setSupportedSellerProfiles()
     * @param bool $sellerProfileOptedIn
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $supportedSellerProfiles
     */
    public function __construct(?bool $sellerProfileOptedIn = null, ?\macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $supportedSellerProfiles = null)
    {
        $this
            ->setSellerProfileOptedIn($sellerProfileOptedIn)
            ->setSupportedSellerProfiles($supportedSellerProfiles);
    }
    /**
     * Get SellerProfileOptedIn value
     * @return bool|null
     */
    public function getSellerProfileOptedIn(): ?bool
    {
        return $this->SellerProfileOptedIn;
    }
    /**
     * Set SellerProfileOptedIn value
     * @param bool $sellerProfileOptedIn
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType
     */
    public function setSellerProfileOptedIn(?bool $sellerProfileOptedIn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sellerProfileOptedIn) && !is_bool($sellerProfileOptedIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerProfileOptedIn, true), gettype($sellerProfileOptedIn)), __LINE__);
        }
        $this->SellerProfileOptedIn = $sellerProfileOptedIn;
        
        return $this;
    }
    /**
     * Get SupportedSellerProfiles value
     * @return \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType|null
     */
    public function getSupportedSellerProfiles(): ?\macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType
    {
        return $this->SupportedSellerProfiles;
    }
    /**
     * Set SupportedSellerProfiles value
     * @param \macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $supportedSellerProfiles
     * @return \macropage\ebaysdk\trading\StructType\SellerProfilePreferencesType
     */
    public function setSupportedSellerProfiles(?\macropage\ebaysdk\trading\StructType\SupportedSellerProfilesType $supportedSellerProfiles = null): self
    {
        $this->SupportedSellerProfiles = $supportedSellerProfiles;
        
        return $this;
    }
}
