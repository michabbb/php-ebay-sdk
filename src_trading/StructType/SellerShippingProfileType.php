<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerShippingProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerShippingProfile</b> container, which is used in an Add/Revise/Relist Trading API call to reference a Business Policies shipping policy profile. Business Policies shipping profiles contain detailed
 * information on domestic and international shipping, including shipping service options, handling time, package handling costs, excluded ship-to locations, and shipping insurance information.
 * @subpackage Structs
 */
class SellerShippingProfileType extends AbstractStructBase
{
    /**
     * The ShippingProfileID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of a Business Policies shipping profile. A <b>ShippingProfileID</b> and/or a <b>ShipppingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the Shippping values of a Business
     * Policies shipping profile. If both fields are provided and their values don't match, the <b>ShipppingProfileID</b> takes precedence. <br/><br/> Shipping profile IDs can be retrieved with the <b>getFulfillmentPolicies</b> call of the <b>Account
     * API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay. <br/><br/> In the 'Get' calls, the <b>ShipppingProfileID</b>
     * value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShipppingProfileName</b> value will be returned if a name is assigned to the shipping profile.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingProfileID;
    /**
     * The ShippingProfileName
     * Meta informations extracted from the WSDL
     * - documentation: The name of a Business Policies shipping profile. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shipping values of a Business Policies
     * shipping profile. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence. <br/><br/> In the 'Get' calls, the <b>ShippingProfileID</b> value will always be returned if Business Policies are set for the
     * listing, and the person making the API call is the seller of the listing. The <b>ShippingProfileName</b> value will be returned if a name is assigned to the payment profile.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingProfileName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerShippingProfileType
     * @uses SellerShippingProfileType::setShippingProfileID()
     * @uses SellerShippingProfileType::setShippingProfileName()
     * @uses SellerShippingProfileType::setAny()
     * @param int $shippingProfileID
     * @param string $shippingProfileName
     * @param \DOMDocument $any
     */
    public function __construct($shippingProfileID = null, $shippingProfileName = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingProfileID($shippingProfileID)
            ->setShippingProfileName($shippingProfileName)
            ->setAny($any);
    }
    /**
     * Get ShippingProfileID value
     * @return int|null
     */
    public function getShippingProfileID()
    {
        return $this->ShippingProfileID;
    }
    /**
     * Set ShippingProfileID value
     * @param int $shippingProfileID
     * @return \macropage\ebaysdk\trading\StructType\SellerShippingProfileType
     */
    public function setShippingProfileID($shippingProfileID = null)
    {
        // validation for constraint: int
        if (!is_null($shippingProfileID) && !is_numeric($shippingProfileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingProfileID)), __LINE__);
        }
        $this->ShippingProfileID = $shippingProfileID;
        return $this;
    }
    /**
     * Get ShippingProfileName value
     * @return string|null
     */
    public function getShippingProfileName()
    {
        return $this->ShippingProfileName;
    }
    /**
     * Set ShippingProfileName value
     * @param string $shippingProfileName
     * @return \macropage\ebaysdk\trading\StructType\SellerShippingProfileType
     */
    public function setShippingProfileName($shippingProfileName = null)
    {
        // validation for constraint: string
        if (!is_null($shippingProfileName) && !is_string($shippingProfileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingProfileName)), __LINE__);
        }
        $this->ShippingProfileName = $shippingProfileName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerShippingProfileType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerShippingProfileType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerShippingProfileType
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
