<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Affiliate StructType
 * Meta informations extracted from the WSDL
 * - documentation: eBay uses specified details to build a View Item URL and Product URL string in the response. These URLs include correctly formatted affiliate tracking information. When a user clicks through one of these URLs to eBay, the respective
 * affiliate might get a commission, based on the tasks performed by the user.
 * @subpackage Structs
 */
class Affiliate extends AbstractStructBase
{
    /**
     * The trackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specify the affiliate value obtained from your tracking partner. For the eBay Partner Network, the tracking ID is the provided Campaign ID ("campid"). A Campaign ID is a unique 10-digit number used for associating traffic and is
     * valid across all programs to which you have been accepted. Another example of this value is the Affiliate ID given to you by TradeDoubler.
     * - minOccurs: 0
     * @var string
     */
    public $trackingId;
    /**
     * The networkId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies your tracking partner for affiliate commissions. Affiliates earn money from eBay for driving traffic to eBay. This field is required if you specify a tracking ID. Depending on your tracking partner, specify one of the
     * following values. Not all partners are valid for all sites. For <b class="con">PlaceOffer</b>, only the eBay Partner Network and Mediaplex are valid: <br> <br>2 = Be Free <br>3 = Affilinet <br>4 = TradeDoubler <br>5 = Mediaplex <br>6 = DoubleClick
     * <br>7 = Allyes <br>8 = BJMT <br>9 = eBay Partner Network
     * - minOccurs: 0
     * @var string
     */
    public $networkId;
    /**
     * The customId
     * Meta informations extracted from the WSDL
     * - documentation: You can define an affiliate customId if you want an ID to monitor your marketing efforts. Chose an ID up to up to 256 characters in length. If you are using the eBay Partner Network, and you provide a customId, the tracking URL
     * returned by the eBay Partner Network will contain your customId value.
     * - minOccurs: 0
     * @var string
     */
    public $customId;
    /**
     * The geoTargeting
     * Meta informations extracted from the WSDL
     * - documentation: The geoTargeting parameter will be used for geographical targeting your affiliate programs. The geo-targeting feature works for English speaking countries (US, UK, CA, AU, and IE) only.
     * - minOccurs: 0
     * @var bool
     */
    public $geoTargeting;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for Affiliate
     * @uses Affiliate::setTrackingId()
     * @uses Affiliate::setNetworkId()
     * @uses Affiliate::setCustomId()
     * @uses Affiliate::setGeoTargeting()
     * @uses Affiliate::setDelimiter()
     * @uses Affiliate::setAny()
     * @param string $trackingId
     * @param string $networkId
     * @param string $customId
     * @param bool $geoTargeting
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($trackingId = null, $networkId = null, $customId = null, $geoTargeting = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setTrackingId($trackingId)
            ->setNetworkId($networkId)
            ->setCustomId($customId)
            ->setGeoTargeting($geoTargeting)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get trackingId value
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }
    /**
     * Set trackingId value
     * @param string $trackingId
     * @return \macropage\ebaysdk\finding\StructType\Affiliate
     */
    public function setTrackingId($trackingId = null)
    {
        // validation for constraint: string
        if (!is_null($trackingId) && !is_string($trackingId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingId)), __LINE__);
        }
        $this->trackingId = $trackingId;
        return $this;
    }
    /**
     * Get networkId value
     * @return string|null
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }
    /**
     * Set networkId value
     * @param string $networkId
     * @return \macropage\ebaysdk\finding\StructType\Affiliate
     */
    public function setNetworkId($networkId = null)
    {
        // validation for constraint: string
        if (!is_null($networkId) && !is_string($networkId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($networkId)), __LINE__);
        }
        $this->networkId = $networkId;
        return $this;
    }
    /**
     * Get customId value
     * @return string|null
     */
    public function getCustomId()
    {
        return $this->customId;
    }
    /**
     * Set customId value
     * @param string $customId
     * @return \macropage\ebaysdk\finding\StructType\Affiliate
     */
    public function setCustomId($customId = null)
    {
        // validation for constraint: string
        if (!is_null($customId) && !is_string($customId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customId)), __LINE__);
        }
        $this->customId = $customId;
        return $this;
    }
    /**
     * Get geoTargeting value
     * @return bool|null
     */
    public function getGeoTargeting()
    {
        return $this->geoTargeting;
    }
    /**
     * Set geoTargeting value
     * @param bool $geoTargeting
     * @return \macropage\ebaysdk\finding\StructType\Affiliate
     */
    public function setGeoTargeting($geoTargeting = null)
    {
        // validation for constraint: boolean
        if (!is_null($geoTargeting) && !is_bool($geoTargeting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($geoTargeting)), __LINE__);
        }
        $this->geoTargeting = $geoTargeting;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\Affiliate
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\Affiliate::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\Affiliate
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
     * @return \macropage\ebaysdk\finding\StructType\Affiliate
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
