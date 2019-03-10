<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpressItemRequirementsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ExpressItemRequirementsType extends AbstractStructBase
{
    /**
     * The SellerExpressEligible
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerExpressEligible;
    /**
     * The ExpressOptOut
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressOptOut;
    /**
     * The ExpressApproved
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressApproved;
    /**
     * The ExpressEligibleListingType
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressEligibleListingType;
    /**
     * The ExpressEnabledCategory
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressEnabledCategory;
    /**
     * The EligiblePayPalAccount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $EligiblePayPalAccount;
    /**
     * The DomesticShippingCost
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DomesticShippingCost;
    /**
     * The EligibleReturnPolicy
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleReturnPolicy;
    /**
     * The Picture
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $Picture;
    /**
     * The EligibleItemCondition
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleItemCondition;
    /**
     * The PriceAboveMinimum
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PriceAboveMinimum;
    /**
     * The PriceBelowMaximum
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PriceBelowMaximum;
    /**
     * The EligibleCheckout
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $EligibleCheckout;
    /**
     * The NoPreapprovedBidderList
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $NoPreapprovedBidderList;
    /**
     * The NoCharity
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $NoCharity;
    /**
     * The CombinedShippingDiscount
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $CombinedShippingDiscount;
    /**
     * The ShipFromEligibleCountry
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ShipFromEligibleCountry;
    /**
     * The PayPalAccountAcceptsUnconfirmedAddress
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalAccountAcceptsUnconfirmedAddress;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($sellerExpressEligible = null, $expressOptOut = null, $expressApproved = null, $expressEligibleListingType = null, $expressEnabledCategory = null, $eligiblePayPalAccount = null, $domesticShippingCost = null, $eligibleReturnPolicy = null, $picture = null, $eligibleItemCondition = null, $priceAboveMinimum = null, $priceBelowMaximum = null, $eligibleCheckout = null, $noPreapprovedBidderList = null, $noCharity = null, $combinedShippingDiscount = null, $shipFromEligibleCountry = null, $payPalAccountAcceptsUnconfirmedAddress = null, \DOMDocument $any = null)
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
    public function getSellerExpressEligible()
    {
        return $this->SellerExpressEligible;
    }
    /**
     * Set SellerExpressEligible value
     * @param bool $sellerExpressEligible
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setSellerExpressEligible($sellerExpressEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerExpressEligible) && !is_bool($sellerExpressEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sellerExpressEligible)), __LINE__);
        }
        $this->SellerExpressEligible = $sellerExpressEligible;
        return $this;
    }
    /**
     * Get ExpressOptOut value
     * @return bool|null
     */
    public function getExpressOptOut()
    {
        return $this->ExpressOptOut;
    }
    /**
     * Set ExpressOptOut value
     * @param bool $expressOptOut
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setExpressOptOut($expressOptOut = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressOptOut) && !is_bool($expressOptOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expressOptOut)), __LINE__);
        }
        $this->ExpressOptOut = $expressOptOut;
        return $this;
    }
    /**
     * Get ExpressApproved value
     * @return bool|null
     */
    public function getExpressApproved()
    {
        return $this->ExpressApproved;
    }
    /**
     * Set ExpressApproved value
     * @param bool $expressApproved
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setExpressApproved($expressApproved = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressApproved) && !is_bool($expressApproved)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expressApproved)), __LINE__);
        }
        $this->ExpressApproved = $expressApproved;
        return $this;
    }
    /**
     * Get ExpressEligibleListingType value
     * @return bool|null
     */
    public function getExpressEligibleListingType()
    {
        return $this->ExpressEligibleListingType;
    }
    /**
     * Set ExpressEligibleListingType value
     * @param bool $expressEligibleListingType
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setExpressEligibleListingType($expressEligibleListingType = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressEligibleListingType) && !is_bool($expressEligibleListingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expressEligibleListingType)), __LINE__);
        }
        $this->ExpressEligibleListingType = $expressEligibleListingType;
        return $this;
    }
    /**
     * Get ExpressEnabledCategory value
     * @return bool|null
     */
    public function getExpressEnabledCategory()
    {
        return $this->ExpressEnabledCategory;
    }
    /**
     * Set ExpressEnabledCategory value
     * @param bool $expressEnabledCategory
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setExpressEnabledCategory($expressEnabledCategory = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressEnabledCategory) && !is_bool($expressEnabledCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expressEnabledCategory)), __LINE__);
        }
        $this->ExpressEnabledCategory = $expressEnabledCategory;
        return $this;
    }
    /**
     * Get EligiblePayPalAccount value
     * @return bool|null
     */
    public function getEligiblePayPalAccount()
    {
        return $this->EligiblePayPalAccount;
    }
    /**
     * Set EligiblePayPalAccount value
     * @param bool $eligiblePayPalAccount
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setEligiblePayPalAccount($eligiblePayPalAccount = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligiblePayPalAccount) && !is_bool($eligiblePayPalAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligiblePayPalAccount)), __LINE__);
        }
        $this->EligiblePayPalAccount = $eligiblePayPalAccount;
        return $this;
    }
    /**
     * Get DomesticShippingCost value
     * @return bool|null
     */
    public function getDomesticShippingCost()
    {
        return $this->DomesticShippingCost;
    }
    /**
     * Set DomesticShippingCost value
     * @param bool $domesticShippingCost
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setDomesticShippingCost($domesticShippingCost = null)
    {
        // validation for constraint: boolean
        if (!is_null($domesticShippingCost) && !is_bool($domesticShippingCost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($domesticShippingCost)), __LINE__);
        }
        $this->DomesticShippingCost = $domesticShippingCost;
        return $this;
    }
    /**
     * Get EligibleReturnPolicy value
     * @return bool|null
     */
    public function getEligibleReturnPolicy()
    {
        return $this->EligibleReturnPolicy;
    }
    /**
     * Set EligibleReturnPolicy value
     * @param bool $eligibleReturnPolicy
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setEligibleReturnPolicy($eligibleReturnPolicy = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligibleReturnPolicy) && !is_bool($eligibleReturnPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligibleReturnPolicy)), __LINE__);
        }
        $this->EligibleReturnPolicy = $eligibleReturnPolicy;
        return $this;
    }
    /**
     * Get Picture value
     * @return bool|null
     */
    public function getPicture()
    {
        return $this->Picture;
    }
    /**
     * Set Picture value
     * @param bool $picture
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setPicture($picture = null)
    {
        // validation for constraint: boolean
        if (!is_null($picture) && !is_bool($picture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($picture)), __LINE__);
        }
        $this->Picture = $picture;
        return $this;
    }
    /**
     * Get EligibleItemCondition value
     * @return bool|null
     */
    public function getEligibleItemCondition()
    {
        return $this->EligibleItemCondition;
    }
    /**
     * Set EligibleItemCondition value
     * @param bool $eligibleItemCondition
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setEligibleItemCondition($eligibleItemCondition = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligibleItemCondition) && !is_bool($eligibleItemCondition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligibleItemCondition)), __LINE__);
        }
        $this->EligibleItemCondition = $eligibleItemCondition;
        return $this;
    }
    /**
     * Get PriceAboveMinimum value
     * @return bool|null
     */
    public function getPriceAboveMinimum()
    {
        return $this->PriceAboveMinimum;
    }
    /**
     * Set PriceAboveMinimum value
     * @param bool $priceAboveMinimum
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setPriceAboveMinimum($priceAboveMinimum = null)
    {
        // validation for constraint: boolean
        if (!is_null($priceAboveMinimum) && !is_bool($priceAboveMinimum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($priceAboveMinimum)), __LINE__);
        }
        $this->PriceAboveMinimum = $priceAboveMinimum;
        return $this;
    }
    /**
     * Get PriceBelowMaximum value
     * @return bool|null
     */
    public function getPriceBelowMaximum()
    {
        return $this->PriceBelowMaximum;
    }
    /**
     * Set PriceBelowMaximum value
     * @param bool $priceBelowMaximum
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setPriceBelowMaximum($priceBelowMaximum = null)
    {
        // validation for constraint: boolean
        if (!is_null($priceBelowMaximum) && !is_bool($priceBelowMaximum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($priceBelowMaximum)), __LINE__);
        }
        $this->PriceBelowMaximum = $priceBelowMaximum;
        return $this;
    }
    /**
     * Get EligibleCheckout value
     * @return bool|null
     */
    public function getEligibleCheckout()
    {
        return $this->EligibleCheckout;
    }
    /**
     * Set EligibleCheckout value
     * @param bool $eligibleCheckout
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setEligibleCheckout($eligibleCheckout = null)
    {
        // validation for constraint: boolean
        if (!is_null($eligibleCheckout) && !is_bool($eligibleCheckout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($eligibleCheckout)), __LINE__);
        }
        $this->EligibleCheckout = $eligibleCheckout;
        return $this;
    }
    /**
     * Get NoPreapprovedBidderList value
     * @return bool|null
     */
    public function getNoPreapprovedBidderList()
    {
        return $this->NoPreapprovedBidderList;
    }
    /**
     * Set NoPreapprovedBidderList value
     * @param bool $noPreapprovedBidderList
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setNoPreapprovedBidderList($noPreapprovedBidderList = null)
    {
        // validation for constraint: boolean
        if (!is_null($noPreapprovedBidderList) && !is_bool($noPreapprovedBidderList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($noPreapprovedBidderList)), __LINE__);
        }
        $this->NoPreapprovedBidderList = $noPreapprovedBidderList;
        return $this;
    }
    /**
     * Get NoCharity value
     * @return bool|null
     */
    public function getNoCharity()
    {
        return $this->NoCharity;
    }
    /**
     * Set NoCharity value
     * @param bool $noCharity
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setNoCharity($noCharity = null)
    {
        // validation for constraint: boolean
        if (!is_null($noCharity) && !is_bool($noCharity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($noCharity)), __LINE__);
        }
        $this->NoCharity = $noCharity;
        return $this;
    }
    /**
     * Get CombinedShippingDiscount value
     * @return bool|null
     */
    public function getCombinedShippingDiscount()
    {
        return $this->CombinedShippingDiscount;
    }
    /**
     * Set CombinedShippingDiscount value
     * @param bool $combinedShippingDiscount
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setCombinedShippingDiscount($combinedShippingDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($combinedShippingDiscount) && !is_bool($combinedShippingDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($combinedShippingDiscount)), __LINE__);
        }
        $this->CombinedShippingDiscount = $combinedShippingDiscount;
        return $this;
    }
    /**
     * Get ShipFromEligibleCountry value
     * @return bool|null
     */
    public function getShipFromEligibleCountry()
    {
        return $this->ShipFromEligibleCountry;
    }
    /**
     * Set ShipFromEligibleCountry value
     * @param bool $shipFromEligibleCountry
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setShipFromEligibleCountry($shipFromEligibleCountry = null)
    {
        // validation for constraint: boolean
        if (!is_null($shipFromEligibleCountry) && !is_bool($shipFromEligibleCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shipFromEligibleCountry)), __LINE__);
        }
        $this->ShipFromEligibleCountry = $shipFromEligibleCountry;
        return $this;
    }
    /**
     * Get PayPalAccountAcceptsUnconfirmedAddress value
     * @return bool|null
     */
    public function getPayPalAccountAcceptsUnconfirmedAddress()
    {
        return $this->PayPalAccountAcceptsUnconfirmedAddress;
    }
    /**
     * Set PayPalAccountAcceptsUnconfirmedAddress value
     * @param bool $payPalAccountAcceptsUnconfirmedAddress
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
     */
    public function setPayPalAccountAcceptsUnconfirmedAddress($payPalAccountAcceptsUnconfirmedAddress = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalAccountAcceptsUnconfirmedAddress) && !is_bool($payPalAccountAcceptsUnconfirmedAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payPalAccountAcceptsUnconfirmedAddress)), __LINE__);
        }
        $this->PayPalAccountAcceptsUnconfirmedAddress = $payPalAccountAcceptsUnconfirmedAddress;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
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
     * @return \macropage\ebaysdk\trading\StructType\ExpressItemRequirementsType
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
