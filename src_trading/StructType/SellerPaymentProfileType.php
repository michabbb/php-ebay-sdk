<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerPaymentProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerPaymentProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a Business Policies payment profile.
 * @subpackage Structs
 */
class SellerPaymentProfileType extends AbstractStructBase
{
    /**
     * The PaymentProfileID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment policy values of a
     * Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence. <br/><br/> Payment profile IDs can be retrieved with the <b>getPaymentPolicies</b> call of the <b>Account
     * API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay. <br/><br/> In the 'Get' calls, the <b>PaymentProfileID</b>
     * value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile.
     * - minOccurs: 0
     * @var int
     */
    public $PaymentProfileID;
    /**
     * The PaymentProfileName
     * Meta informations extracted from the WSDL
     * - documentation: The name of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment policy values of a Business Policies
     * payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence. <br/><br/> In the 'Get' calls, the <b>PaymentProfileID</b> value will always be returned if Business Policies are set for the
     * listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentProfileName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerPaymentProfileType
     * @uses SellerPaymentProfileType::setPaymentProfileID()
     * @uses SellerPaymentProfileType::setPaymentProfileName()
     * @uses SellerPaymentProfileType::setAny()
     * @param int $paymentProfileID
     * @param string $paymentProfileName
     * @param \DOMDocument $any
     */
    public function __construct($paymentProfileID = null, $paymentProfileName = null, \DOMDocument $any = null)
    {
        $this
            ->setPaymentProfileID($paymentProfileID)
            ->setPaymentProfileName($paymentProfileName)
            ->setAny($any);
    }
    /**
     * Get PaymentProfileID value
     * @return int|null
     */
    public function getPaymentProfileID()
    {
        return $this->PaymentProfileID;
    }
    /**
     * Set PaymentProfileID value
     * @param int $paymentProfileID
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
     */
    public function setPaymentProfileID($paymentProfileID = null)
    {
        // validation for constraint: int
        if (!is_null($paymentProfileID) && !is_numeric($paymentProfileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($paymentProfileID)), __LINE__);
        }
        $this->PaymentProfileID = $paymentProfileID;
        return $this;
    }
    /**
     * Get PaymentProfileName value
     * @return string|null
     */
    public function getPaymentProfileName()
    {
        return $this->PaymentProfileName;
    }
    /**
     * Set PaymentProfileName value
     * @param string $paymentProfileName
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
     */
    public function setPaymentProfileName($paymentProfileName = null)
    {
        // validation for constraint: string
        if (!is_null($paymentProfileName) && !is_string($paymentProfileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentProfileName)), __LINE__);
        }
        $this->PaymentProfileName = $paymentProfileName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentProfileType
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
