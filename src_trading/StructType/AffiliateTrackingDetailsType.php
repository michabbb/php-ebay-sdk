<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AffiliateTrackingDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>AffiliateTrackingDetails</b> container, which is included in the <b>PlaceOffer</b> call to pass in eBay Partner Network affiliate-related data, so affiliates can earn commissions based on user activity and the
 * number of calls made by the user's application.
 * @subpackage Structs
 */
class AffiliateTrackingDetailsType extends AbstractStructBase
{
    /**
     * The TrackingID
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> If you are using affiliate tracking, this field is required. </span><br> The value you specify in this field is obtained from your tracking partner. For the eBay Partner Network, the
     * <b>TrackingID</b> is the Campaign ID ("campid") provided by the eBay Partner Network. A Campaign ID is a 10-digit, unique number for associating traffic. A Campaign ID is valid across all programs to which you have been accepted.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingID;
    /**
     * The TrackingPartnerCode
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> If you are using affiliate tracking, this field is required. </span><br> Specifies your tracking partner for affiliate commissions. Depending on your tracking partner, specify one of the
     * following values. Not all partners are valid for all sites. For <b>PlaceOffer</b>, only eBay Partner Network and Mediaplex are valid: <br> <br>2 = Be Free <br>3 = Affilinet <br>4 = TradeDoubler <br>5 = Mediaplex <br>6 = DoubleClick <br>7 = Allyes
     * <br>8 = BJMT <br>9 = eBay Partner Network <br> <br> For information about the eBay Partner Network, see <a href="https://www.ebaypartnernetwork.com" target="_blank">eBay Partner Network</a>.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingPartnerCode;
    /**
     * The ApplicationDeviceType
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> If you are using affiliate tracking, this field is required. </span> Type of device or platform from which the call originated.
     * - minOccurs: 0
     * @var string
     */
    public $ApplicationDeviceType;
    /**
     * The AffiliateUserID
     * Meta informations extracted from the WSDL
     * - documentation: This field is not required, but an affiliate may want to use this identifier to better monitor marketing efforts. If you are using the eBay Partner Network, and you provide an <b>AffiliateUserID</b>, the tracking URL returned by eBay
     * Partner Network will contain the <b>AffiliateUserID</b>, but it will be referred to as a "customid".
     * - minOccurs: 0
     * @var string
     */
    public $AffiliateUserID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AffiliateTrackingDetailsType
     * @uses AffiliateTrackingDetailsType::setTrackingID()
     * @uses AffiliateTrackingDetailsType::setTrackingPartnerCode()
     * @uses AffiliateTrackingDetailsType::setApplicationDeviceType()
     * @uses AffiliateTrackingDetailsType::setAffiliateUserID()
     * @uses AffiliateTrackingDetailsType::setAny()
     * @param string $trackingID
     * @param string $trackingPartnerCode
     * @param string $applicationDeviceType
     * @param string $affiliateUserID
     * @param \DOMDocument $any
     */
    public function __construct($trackingID = null, $trackingPartnerCode = null, $applicationDeviceType = null, $affiliateUserID = null, \DOMDocument $any = null)
    {
        $this
            ->setTrackingID($trackingID)
            ->setTrackingPartnerCode($trackingPartnerCode)
            ->setApplicationDeviceType($applicationDeviceType)
            ->setAffiliateUserID($affiliateUserID)
            ->setAny($any);
    }
    /**
     * Get TrackingID value
     * @return string|null
     */
    public function getTrackingID()
    {
        return $this->TrackingID;
    }
    /**
     * Set TrackingID value
     * @param string $trackingID
     * @return \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType
     */
    public function setTrackingID($trackingID = null)
    {
        // validation for constraint: string
        if (!is_null($trackingID) && !is_string($trackingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingID)), __LINE__);
        }
        $this->TrackingID = $trackingID;
        return $this;
    }
    /**
     * Get TrackingPartnerCode value
     * @return string|null
     */
    public function getTrackingPartnerCode()
    {
        return $this->TrackingPartnerCode;
    }
    /**
     * Set TrackingPartnerCode value
     * @param string $trackingPartnerCode
     * @return \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType
     */
    public function setTrackingPartnerCode($trackingPartnerCode = null)
    {
        // validation for constraint: string
        if (!is_null($trackingPartnerCode) && !is_string($trackingPartnerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingPartnerCode)), __LINE__);
        }
        $this->TrackingPartnerCode = $trackingPartnerCode;
        return $this;
    }
    /**
     * Get ApplicationDeviceType value
     * @return string|null
     */
    public function getApplicationDeviceType()
    {
        return $this->ApplicationDeviceType;
    }
    /**
     * Set ApplicationDeviceType value
     * @uses \macropage\ebaysdk\trading\EnumType\ApplicationDeviceTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ApplicationDeviceTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $applicationDeviceType
     * @return \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType
     */
    public function setApplicationDeviceType($applicationDeviceType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ApplicationDeviceTypeCodeType::valueIsValid($applicationDeviceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $applicationDeviceType, implode(', ', \macropage\ebaysdk\trading\EnumType\ApplicationDeviceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ApplicationDeviceType = $applicationDeviceType;
        return $this;
    }
    /**
     * Get AffiliateUserID value
     * @return string|null
     */
    public function getAffiliateUserID()
    {
        return $this->AffiliateUserID;
    }
    /**
     * Set AffiliateUserID value
     * @param string $affiliateUserID
     * @return \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType
     */
    public function setAffiliateUserID($affiliateUserID = null)
    {
        // validation for constraint: string
        if (!is_null($affiliateUserID) && !is_string($affiliateUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($affiliateUserID)), __LINE__);
        }
        $this->AffiliateUserID = $affiliateUserID;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\AffiliateTrackingDetailsType
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
