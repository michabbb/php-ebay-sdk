<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpressItemRequirementsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ExpressItemRequirementsType extends AbstractStructBase
{
    /**
     * The SellerExpressEligible
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SellerExpressEligible = null;
    /**
     * The ExpressOptOut
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpressOptOut = null;
    /**
     * The ExpressApproved
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpressApproved = null;
    /**
     * The ExpressEligibleListingType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpressEligibleListingType = null;
    /**
     * The ExpressEnabledCategory
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ExpressEnabledCategory = null;
    /**
     * The EligiblePayPalAccount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EligiblePayPalAccount = null;
    /**
     * The DomesticShippingCost
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DomesticShippingCost = null;
    /**
     * The EligibleReturnPolicy
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EligibleReturnPolicy = null;
    /**
     * The Picture
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Picture = null;
    /**
     * The EligibleItemCondition
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EligibleItemCondition = null;
    /**
     * The PriceAboveMinimum
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PriceAboveMinimum = null;
    /**
     * The PriceBelowMaximum
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PriceBelowMaximum = null;
    /**
     * The EligibleCheckout
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EligibleCheckout = null;
    /**
     * The NoPreapprovedBidderList
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NoPreapprovedBidderList = null;
    /**
     * The NoCharity
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $NoCharity = null;
    /**
     * The CombinedShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $CombinedShippingDiscount = null;
    /**
     * The ShipFromEligibleCountry
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShipFromEligibleCountry = null;
    /**
     * The PayPalAccountAcceptsUnconfirmedAddress
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PayPalAccountAcceptsUnconfirmedAddress = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ExpressItemRequirementsType
     * @uses ExpressItemRequirementsType::setSellerExpressEligible()
     * @uses ExpressItemRequirementsType::setExpressOptOut()
     * @uses ExpressItemRequirementsType::setExpressApproved()
     * @uses ExpressItemRequirementsType::setExpressEligibleListingType()
     * @uses ExpressItemRequirementsType::setExpressEnabledCategory()
     * @uses ExpressItemRequirementsType::setEligiblePayPalAccount()
     * @uses ExpressItemRequirementsType::setDomesticShippingCost()
     * @uses ExpressItemRequirementsType::setEligibleReturnPolicy()
     * @uses ExpressItemRequirementsType::setPicture()
     * @uses ExpressItemRequirementsType::setEligibleItemCondition()
     * @uses ExpressItemRequirementsType::setPriceAboveMinimum()
     * @uses ExpressItemRequirementsType::setPriceBelowMaximum()
     * @uses ExpressItemRequirementsType::setEligibleCheckout()
     * @uses ExpressItemRequirementsType::setNoPreapprovedBidderList()
     * @uses ExpressItemRequirementsType::setNoCharity()
     * @uses ExpressItemRequirementsType::setCombinedShippingDiscount()
     * @uses ExpressItemRequirementsType::setShipFromEligibleCountry()
     * @uses ExpressItemRequirementsType::setPayPalAccountAcceptsUnconfirmedAddress()
     * @uses ExpressItemRequirementsType::setAny()
     * @param bool $sellerExpressEligible
     * @param bool $expressOptOut
     * @param bool $expressApproved
     * @param bool $expressEligibleListingType
     * @param bool $expressEnabledCategory
     * @param bool $eligiblePayPalAccount
     * @param bool $domesticShippingCost
     * @param bool $eligibleReturnPolicy
     * @param bool $picture
     * @param bool $eligibleItemCondition
     * @param bool $priceAboveMinimum
     * @param bool $priceBelowMaximum
     * @param bool $eligibleCheckout
     * @param bool $noPreapprovedBidderList
     * @param bool $noCharity
     * @param bool $combinedShippingDiscount
     * @param bool $shipFromEligibleCountry
     * @param bool $payPalAccountAcceptsUnconfirmedAddress
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $sellerExpressEligible = null, ?bool $expressOptOut = null, ?bool $expressApproved = null, ?bool $expressEligibleListingType = null, ?bool $expressEnabledCategory = null, ?bool $eligiblePayPalAccount = null, ?bool $domesticShippingCost = null, ?bool $eligibleReturnPolicy = null, ?bool $picture = null, ?bool $eligibleItemCondition = null, ?bool $priceAboveMinimum = null, ?bool $priceBelowMaximum = null, ?bool $eligibleCheckout = null, ?bool $noPreapprovedBidderList = null, ?bool $noCharity = null, ?bool $combinedShippingDiscount = null, ?bool $shipFromEligibleCountry = null, ?bool $payPalAccountAcceptsUnconfirmedAddress = null, $any = null)
    {
        $this
            ->setSellerExpressEligible($sellerExpressEligible)
            ->setExpressOptOut($expressOptOut)
            ->setExpressApproved($expressApproved)
            ->setExpressEligibleListingType($expressEligibleListingType)
            ->setExpressEnabledCategory($expressEnabledCategory)
            ->setEligiblePayPalAccount($eligiblePayPalAccount)
            ->setDomesticShippingCost($domesticShippingCost)
            ->setEligibleReturnPolicy($eligibleReturnPolicy)
            ->setPicture($picture)
            ->setEligibleItemCondition($eligibleItemCondition)
            ->setPriceAboveMinimum($priceAboveMinimum)
            ->setPriceBelowMaximum($priceBelowMaximum)
            ->setEligibleCheckout($eligibleCheckout)
            ->setNoPreapprovedBidderList($noPreapprovedBidderList)
            ->setNoCharity($noCharity)
            ->setCombinedShippingDiscount($combinedShippingDiscount)
            ->setShipFromEligibleCountry($shipFromEligibleCountry)
            ->setPayPalAccountAcceptsUnconfirmedAddress($payPalAccountAcceptsUnconfirmedAddress)
            ->setAny($any);
    }
    /**
     * Get SellerExpressEligible value
     * @return bool|null
     */
    public function getSellerExpressEligible(): ?bool
    {
        return $this->SellerExpressEligible;
    }
    /**
     * Set SellerExpressEligible value
     * @param bool $sellerExpressEligible
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setSellerExpressEligible(?bool $sellerExpressEligible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sellerExpressEligible) && !is_bool($sellerExpressEligible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerExpressEligible, true), gettype($sellerExpressEligible)), __LINE__);
        }
        $this->SellerExpressEligible = $sellerExpressEligible;
        
        return $this;
    }
    /**
     * Get ExpressOptOut value
     * @return bool|null
     */
    public function getExpressOptOut(): ?bool
    {
        return $this->ExpressOptOut;
    }
    /**
     * Set ExpressOptOut value
     * @param bool $expressOptOut
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setExpressOptOut(?bool $expressOptOut = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expressOptOut) && !is_bool($expressOptOut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressOptOut, true), gettype($expressOptOut)), __LINE__);
        }
        $this->ExpressOptOut = $expressOptOut;
        
        return $this;
    }
    /**
     * Get ExpressApproved value
     * @return bool|null
     */
    public function getExpressApproved(): ?bool
    {
        return $this->ExpressApproved;
    }
    /**
     * Set ExpressApproved value
     * @param bool $expressApproved
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setExpressApproved(?bool $expressApproved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expressApproved) && !is_bool($expressApproved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressApproved, true), gettype($expressApproved)), __LINE__);
        }
        $this->ExpressApproved = $expressApproved;
        
        return $this;
    }
    /**
     * Get ExpressEligibleListingType value
     * @return bool|null
     */
    public function getExpressEligibleListingType(): ?bool
    {
        return $this->ExpressEligibleListingType;
    }
    /**
     * Set ExpressEligibleListingType value
     * @param bool $expressEligibleListingType
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setExpressEligibleListingType(?bool $expressEligibleListingType = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expressEligibleListingType) && !is_bool($expressEligibleListingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressEligibleListingType, true), gettype($expressEligibleListingType)), __LINE__);
        }
        $this->ExpressEligibleListingType = $expressEligibleListingType;
        
        return $this;
    }
    /**
     * Get ExpressEnabledCategory value
     * @return bool|null
     */
    public function getExpressEnabledCategory(): ?bool
    {
        return $this->ExpressEnabledCategory;
    }
    /**
     * Set ExpressEnabledCategory value
     * @param bool $expressEnabledCategory
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setExpressEnabledCategory(?bool $expressEnabledCategory = null): self
    {
        // validation for constraint: boolean
        if (!is_null($expressEnabledCategory) && !is_bool($expressEnabledCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressEnabledCategory, true), gettype($expressEnabledCategory)), __LINE__);
        }
        $this->ExpressEnabledCategory = $expressEnabledCategory;
        
        return $this;
    }
    /**
     * Get EligiblePayPalAccount value
     * @return bool|null
     */
    public function getEligiblePayPalAccount(): ?bool
    {
        return $this->EligiblePayPalAccount;
    }
    /**
     * Set EligiblePayPalAccount value
     * @param bool $eligiblePayPalAccount
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setEligiblePayPalAccount(?bool $eligiblePayPalAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eligiblePayPalAccount) && !is_bool($eligiblePayPalAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligiblePayPalAccount, true), gettype($eligiblePayPalAccount)), __LINE__);
        }
        $this->EligiblePayPalAccount = $eligiblePayPalAccount;
        
        return $this;
    }
    /**
     * Get DomesticShippingCost value
     * @return bool|null
     */
    public function getDomesticShippingCost(): ?bool
    {
        return $this->DomesticShippingCost;
    }
    /**
     * Set DomesticShippingCost value
     * @param bool $domesticShippingCost
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setDomesticShippingCost(?bool $domesticShippingCost = null): self
    {
        // validation for constraint: boolean
        if (!is_null($domesticShippingCost) && !is_bool($domesticShippingCost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($domesticShippingCost, true), gettype($domesticShippingCost)), __LINE__);
        }
        $this->DomesticShippingCost = $domesticShippingCost;
        
        return $this;
    }
    /**
     * Get EligibleReturnPolicy value
     * @return bool|null
     */
    public function getEligibleReturnPolicy(): ?bool
    {
        return $this->EligibleReturnPolicy;
    }
    /**
     * Set EligibleReturnPolicy value
     * @param bool $eligibleReturnPolicy
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setEligibleReturnPolicy(?bool $eligibleReturnPolicy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eligibleReturnPolicy) && !is_bool($eligibleReturnPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligibleReturnPolicy, true), gettype($eligibleReturnPolicy)), __LINE__);
        }
        $this->EligibleReturnPolicy = $eligibleReturnPolicy;
        
        return $this;
    }
    /**
     * Get Picture value
     * @return bool|null
     */
    public function getPicture(): ?bool
    {
        return $this->Picture;
    }
    /**
     * Set Picture value
     * @param bool $picture
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setPicture(?bool $picture = null): self
    {
        // validation for constraint: boolean
        if (!is_null($picture) && !is_bool($picture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($picture, true), gettype($picture)), __LINE__);
        }
        $this->Picture = $picture;
        
        return $this;
    }
    /**
     * Get EligibleItemCondition value
     * @return bool|null
     */
    public function getEligibleItemCondition(): ?bool
    {
        return $this->EligibleItemCondition;
    }
    /**
     * Set EligibleItemCondition value
     * @param bool $eligibleItemCondition
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setEligibleItemCondition(?bool $eligibleItemCondition = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eligibleItemCondition) && !is_bool($eligibleItemCondition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligibleItemCondition, true), gettype($eligibleItemCondition)), __LINE__);
        }
        $this->EligibleItemCondition = $eligibleItemCondition;
        
        return $this;
    }
    /**
     * Get PriceAboveMinimum value
     * @return bool|null
     */
    public function getPriceAboveMinimum(): ?bool
    {
        return $this->PriceAboveMinimum;
    }
    /**
     * Set PriceAboveMinimum value
     * @param bool $priceAboveMinimum
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setPriceAboveMinimum(?bool $priceAboveMinimum = null): self
    {
        // validation for constraint: boolean
        if (!is_null($priceAboveMinimum) && !is_bool($priceAboveMinimum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($priceAboveMinimum, true), gettype($priceAboveMinimum)), __LINE__);
        }
        $this->PriceAboveMinimum = $priceAboveMinimum;
        
        return $this;
    }
    /**
     * Get PriceBelowMaximum value
     * @return bool|null
     */
    public function getPriceBelowMaximum(): ?bool
    {
        return $this->PriceBelowMaximum;
    }
    /**
     * Set PriceBelowMaximum value
     * @param bool $priceBelowMaximum
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setPriceBelowMaximum(?bool $priceBelowMaximum = null): self
    {
        // validation for constraint: boolean
        if (!is_null($priceBelowMaximum) && !is_bool($priceBelowMaximum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($priceBelowMaximum, true), gettype($priceBelowMaximum)), __LINE__);
        }
        $this->PriceBelowMaximum = $priceBelowMaximum;
        
        return $this;
    }
    /**
     * Get EligibleCheckout value
     * @return bool|null
     */
    public function getEligibleCheckout(): ?bool
    {
        return $this->EligibleCheckout;
    }
    /**
     * Set EligibleCheckout value
     * @param bool $eligibleCheckout
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setEligibleCheckout(?bool $eligibleCheckout = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eligibleCheckout) && !is_bool($eligibleCheckout)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligibleCheckout, true), gettype($eligibleCheckout)), __LINE__);
        }
        $this->EligibleCheckout = $eligibleCheckout;
        
        return $this;
    }
    /**
     * Get NoPreapprovedBidderList value
     * @return bool|null
     */
    public function getNoPreapprovedBidderList(): ?bool
    {
        return $this->NoPreapprovedBidderList;
    }
    /**
     * Set NoPreapprovedBidderList value
     * @param bool $noPreapprovedBidderList
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setNoPreapprovedBidderList(?bool $noPreapprovedBidderList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noPreapprovedBidderList) && !is_bool($noPreapprovedBidderList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noPreapprovedBidderList, true), gettype($noPreapprovedBidderList)), __LINE__);
        }
        $this->NoPreapprovedBidderList = $noPreapprovedBidderList;
        
        return $this;
    }
    /**
     * Get NoCharity value
     * @return bool|null
     */
    public function getNoCharity(): ?bool
    {
        return $this->NoCharity;
    }
    /**
     * Set NoCharity value
     * @param bool $noCharity
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setNoCharity(?bool $noCharity = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noCharity) && !is_bool($noCharity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noCharity, true), gettype($noCharity)), __LINE__);
        }
        $this->NoCharity = $noCharity;
        
        return $this;
    }
    /**
     * Get CombinedShippingDiscount value
     * @return bool|null
     */
    public function getCombinedShippingDiscount(): ?bool
    {
        return $this->CombinedShippingDiscount;
    }
    /**
     * Set CombinedShippingDiscount value
     * @param bool $combinedShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setCombinedShippingDiscount(?bool $combinedShippingDiscount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($combinedShippingDiscount) && !is_bool($combinedShippingDiscount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($combinedShippingDiscount, true), gettype($combinedShippingDiscount)), __LINE__);
        }
        $this->CombinedShippingDiscount = $combinedShippingDiscount;
        
        return $this;
    }
    /**
     * Get ShipFromEligibleCountry value
     * @return bool|null
     */
    public function getShipFromEligibleCountry(): ?bool
    {
        return $this->ShipFromEligibleCountry;
    }
    /**
     * Set ShipFromEligibleCountry value
     * @param bool $shipFromEligibleCountry
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setShipFromEligibleCountry(?bool $shipFromEligibleCountry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($shipFromEligibleCountry) && !is_bool($shipFromEligibleCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shipFromEligibleCountry, true), gettype($shipFromEligibleCountry)), __LINE__);
        }
        $this->ShipFromEligibleCountry = $shipFromEligibleCountry;
        
        return $this;
    }
    /**
     * Get PayPalAccountAcceptsUnconfirmedAddress value
     * @return bool|null
     */
    public function getPayPalAccountAcceptsUnconfirmedAddress(): ?bool
    {
        return $this->PayPalAccountAcceptsUnconfirmedAddress;
    }
    /**
     * Set PayPalAccountAcceptsUnconfirmedAddress value
     * @param bool $payPalAccountAcceptsUnconfirmedAddress
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setPayPalAccountAcceptsUnconfirmedAddress(?bool $payPalAccountAcceptsUnconfirmedAddress = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payPalAccountAcceptsUnconfirmedAddress) && !is_bool($payPalAccountAcceptsUnconfirmedAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalAccountAcceptsUnconfirmedAddress, true), gettype($payPalAccountAcceptsUnconfirmedAddress)), __LINE__);
        }
        $this->PayPalAccountAcceptsUnconfirmedAddress = $payPalAccountAcceptsUnconfirmedAddress;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
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
