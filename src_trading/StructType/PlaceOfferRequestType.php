<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlaceOfferRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Enables the authenticated user to to make a bid on an auction item, propose a Best Offer, or purchase a fixed-price/Buy It Now item. Note that this call cannot be used to purchase items that require immediate payment.
 * @subpackage Structs
 */
class PlaceOfferRequestType extends AbstractRequestType
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to specifies the type of offer being made for the listing specified in the <b>ItemID</b> field. The <b>Offer.Action</b> is used to set the action that is being taken on the listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OfferType
     */
    public $Offer;
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier that identifies the listing for which the action is being submitted. <br><br> For a multiple-variation listing, you must also identify the specific variation within that listing using the <b>VariationSpecifics</b>
     * container. | Type that represents the unique identifier for an eBay listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The BlockOnWarning
     * Meta informations extracted from the WSDL
     * - documentation: If a warning message is generated when the call is made, this <b>BlockOnWarning</b> will block the bid/buy action if set to <code>true</code>. If <b>BlockOnWarning</b> is <code>false</code> or omitted, the bid/buy action is allowed,
     * regardless of whether or not a warning message occurs. <br>
     * - minOccurs: 0
     * @var bool
     */
    public $BlockOnWarning;
    /**
     * The AffiliateTrackingDetails
     * Meta informations extracted from the WSDL
     * - documentation: Container for affiliate-related tags, which enable the tracking of user activity. If you include the <b>AffiliateTrackingDetails</b> container in your <b>PlaceOffer</b> call, then it is possible to receive affiliate commissions based
     * on calls made by your application. (See the <a href= "http://www.ebaypartnernetwork.com/" target="_blank">eBay Partner Network</a> for information about commissions.) Please note that affiliate tracking is not available in the Sandbox environment,
     * and that affiliate tracking is not available when you make a Best Offer.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType
     */
    public $AffiliateTrackingDetails;
    /**
     * The VariationSpecifics
     * Meta informations extracted from the WSDL
     * - documentation: This container is used to identify a specific variation within a multiple-variation listing identified by the <b>ItemID</b> value. This container is required when attempting to perform an action on a multiple-variation listing.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
     */
    public $VariationSpecifics;
    /**
     * Constructor method for PlaceOfferRequestType
     * @uses PlaceOfferRequestType::setOffer()
     * @uses PlaceOfferRequestType::setItemID()
     * @uses PlaceOfferRequestType::setBlockOnWarning()
     * @uses PlaceOfferRequestType::setAffiliateTrackingDetails()
     * @uses PlaceOfferRequestType::setVariationSpecifics()
     * @param \macropage\ebaysdk\trading\StructType\OfferType $offer
     * @param string $itemID
     * @param bool $blockOnWarning
     * @param \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType $affiliateTrackingDetails
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\OfferType $offer = null, $itemID = null, $blockOnWarning = null, \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType $affiliateTrackingDetails = null, \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null)
    {
        $this
            ->setOffer($offer)
            ->setItemID($itemID)
            ->setBlockOnWarning($blockOnWarning)
            ->setAffiliateTrackingDetails($affiliateTrackingDetails)
            ->setVariationSpecifics($variationSpecifics);
    }
    /**
     * Get Offer value
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \macropage\ebaysdk\trading\StructType\OfferType $offer
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferRequestType
     */
    public function setOffer(\macropage\ebaysdk\trading\StructType\OfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get BlockOnWarning value
     * @return bool|null
     */
    public function getBlockOnWarning()
    {
        return $this->BlockOnWarning;
    }
    /**
     * Set BlockOnWarning value
     * @param bool $blockOnWarning
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferRequestType
     */
    public function setBlockOnWarning($blockOnWarning = null)
    {
        // validation for constraint: boolean
        if (!is_null($blockOnWarning) && !is_bool($blockOnWarning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($blockOnWarning)), __LINE__);
        }
        $this->BlockOnWarning = $blockOnWarning;
        return $this;
    }
    /**
     * Get AffiliateTrackingDetails value
     * @return \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType|null
     */
    public function getAffiliateTrackingDetails()
    {
        return $this->AffiliateTrackingDetails;
    }
    /**
     * Set AffiliateTrackingDetails value
     * @param \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType $affiliateTrackingDetails
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferRequestType
     */
    public function setAffiliateTrackingDetails(\macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType $affiliateTrackingDetails = null)
    {
        $this->AffiliateTrackingDetails = $affiliateTrackingDetails;
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics()
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferRequestType
     */
    public function setVariationSpecifics(\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null)
    {
        $this->VariationSpecifics = $variationSpecifics;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\PlaceOfferRequestType
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
