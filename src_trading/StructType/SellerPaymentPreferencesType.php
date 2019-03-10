<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerPaymentPreferencesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>SellerPaymentPreferences</b> container, which consists of the seller's payment preferences. Payment preferences specified in a <b>SetUserPreferences</b> call override the settings in My eBay payment preferences.
 * @subpackage Structs
 */
class SellerPaymentPreferencesType extends AbstractStructBase
{
    /**
     * The AlwaysUseThisPaymentAddress
     * Meta informations extracted from the WSDL
     * - documentation: Sellers include this field and set it to <code>true</code> if they want buyers to mail payment to the payment address specified in the <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment address only comes into play
     * if the item's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
     * - minOccurs: 0
     * @var bool
     */
    public $AlwaysUseThisPaymentAddress;
    /**
     * The DisplayPayNowButton
     * Meta informations extracted from the WSDL
     * - documentation: If set, this field determines whether a Pay Now button is displayed for all of the user's listings. The user has the option of using a PayPal only version of the Pay Now button or a Pay Now button for all payment methods.
     * - minOccurs: 0
     * @var string
     */
    public $DisplayPayNowButton;
    /**
     * The PayPalPreferred
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether a seller wants to let buyers know that PayPal payments are preferred.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalPreferred;
    /**
     * The DefaultPayPalEmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the default email address the seller uses for receiving PayPal payments.
     * - minOccurs: 0
     * @var string
     */
    public $DefaultPayPalEmailAddress;
    /**
     * The PayPalAlwaysOn
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether PayPal is always accepted for the seller's listings.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalAlwaysOn;
    /**
     * The SellerPaymentAddress
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the address the seller uses to receive mailed payments from buyers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType
     */
    public $SellerPaymentAddress;
    /**
     * The UPSRateOption
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of United Parcel Service rates to use.
     * - minOccurs: 0
     * @var string
     */
    public $UPSRateOption;
    /**
     * The FedExRateOption
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of FedEx rates to use.
     * - minOccurs: 0
     * @var string
     */
    public $FedExRateOption;
    /**
     * The USPSRateOption
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of USPS rates to use.
     * - minOccurs: 0
     * @var string
     */
    public $USPSRateOption;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellerPaymentPreferencesType
     * @uses SellerPaymentPreferencesType::setAlwaysUseThisPaymentAddress()
     * @uses SellerPaymentPreferencesType::setDisplayPayNowButton()
     * @uses SellerPaymentPreferencesType::setPayPalPreferred()
     * @uses SellerPaymentPreferencesType::setDefaultPayPalEmailAddress()
     * @uses SellerPaymentPreferencesType::setPayPalAlwaysOn()
     * @uses SellerPaymentPreferencesType::setSellerPaymentAddress()
     * @uses SellerPaymentPreferencesType::setUPSRateOption()
     * @uses SellerPaymentPreferencesType::setFedExRateOption()
     * @uses SellerPaymentPreferencesType::setUSPSRateOption()
     * @uses SellerPaymentPreferencesType::setAny()
     * @param bool $alwaysUseThisPaymentAddress
     * @param string $displayPayNowButton
     * @param bool $payPalPreferred
     * @param string $defaultPayPalEmailAddress
     * @param bool $payPalAlwaysOn
     * @param \macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress
     * @param string $uPSRateOption
     * @param string $fedExRateOption
     * @param string $uSPSRateOption
     * @param \DOMDocument $any
     */
    public function __construct($alwaysUseThisPaymentAddress = null, $displayPayNowButton = null, $payPalPreferred = null, $defaultPayPalEmailAddress = null, $payPalAlwaysOn = null, \macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress = null, $uPSRateOption = null, $fedExRateOption = null, $uSPSRateOption = null, \DOMDocument $any = null)
    {
        $this
            ->setAlwaysUseThisPaymentAddress($alwaysUseThisPaymentAddress)
            ->setDisplayPayNowButton($displayPayNowButton)
            ->setPayPalPreferred($payPalPreferred)
            ->setDefaultPayPalEmailAddress($defaultPayPalEmailAddress)
            ->setPayPalAlwaysOn($payPalAlwaysOn)
            ->setSellerPaymentAddress($sellerPaymentAddress)
            ->setUPSRateOption($uPSRateOption)
            ->setFedExRateOption($fedExRateOption)
            ->setUSPSRateOption($uSPSRateOption)
            ->setAny($any);
    }
    /**
     * Get AlwaysUseThisPaymentAddress value
     * @return bool|null
     */
    public function getAlwaysUseThisPaymentAddress()
    {
        return $this->AlwaysUseThisPaymentAddress;
    }
    /**
     * Set AlwaysUseThisPaymentAddress value
     * @param bool $alwaysUseThisPaymentAddress
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setAlwaysUseThisPaymentAddress($alwaysUseThisPaymentAddress = null)
    {
        // validation for constraint: boolean
        if (!is_null($alwaysUseThisPaymentAddress) && !is_bool($alwaysUseThisPaymentAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($alwaysUseThisPaymentAddress)), __LINE__);
        }
        $this->AlwaysUseThisPaymentAddress = $alwaysUseThisPaymentAddress;
        return $this;
    }
    /**
     * Get DisplayPayNowButton value
     * @return string|null
     */
    public function getDisplayPayNowButton()
    {
        return $this->DisplayPayNowButton;
    }
    /**
     * Set DisplayPayNowButton value
     * @uses \macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $displayPayNowButton
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setDisplayPayNowButton($displayPayNowButton = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType::valueIsValid($displayPayNowButton)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $displayPayNowButton, implode(', ', \macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayPayNowButton = $displayPayNowButton;
        return $this;
    }
    /**
     * Get PayPalPreferred value
     * @return bool|null
     */
    public function getPayPalPreferred()
    {
        return $this->PayPalPreferred;
    }
    /**
     * Set PayPalPreferred value
     * @param bool $payPalPreferred
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setPayPalPreferred($payPalPreferred = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalPreferred) && !is_bool($payPalPreferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payPalPreferred)), __LINE__);
        }
        $this->PayPalPreferred = $payPalPreferred;
        return $this;
    }
    /**
     * Get DefaultPayPalEmailAddress value
     * @return string|null
     */
    public function getDefaultPayPalEmailAddress()
    {
        return $this->DefaultPayPalEmailAddress;
    }
    /**
     * Set DefaultPayPalEmailAddress value
     * @param string $defaultPayPalEmailAddress
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setDefaultPayPalEmailAddress($defaultPayPalEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($defaultPayPalEmailAddress) && !is_string($defaultPayPalEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultPayPalEmailAddress)), __LINE__);
        }
        $this->DefaultPayPalEmailAddress = $defaultPayPalEmailAddress;
        return $this;
    }
    /**
     * Get PayPalAlwaysOn value
     * @return bool|null
     */
    public function getPayPalAlwaysOn()
    {
        return $this->PayPalAlwaysOn;
    }
    /**
     * Set PayPalAlwaysOn value
     * @param bool $payPalAlwaysOn
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setPayPalAlwaysOn($payPalAlwaysOn = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalAlwaysOn) && !is_bool($payPalAlwaysOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payPalAlwaysOn)), __LINE__);
        }
        $this->PayPalAlwaysOn = $payPalAlwaysOn;
        return $this;
    }
    /**
     * Get SellerPaymentAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getSellerPaymentAddress()
    {
        return $this->SellerPaymentAddress;
    }
    /**
     * Set SellerPaymentAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setSellerPaymentAddress(\macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress = null)
    {
        $this->SellerPaymentAddress = $sellerPaymentAddress;
        return $this;
    }
    /**
     * Get UPSRateOption value
     * @return string|null
     */
    public function getUPSRateOption()
    {
        return $this->UPSRateOption;
    }
    /**
     * Set UPSRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uPSRateOption
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setUPSRateOption($uPSRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType::valueIsValid($uPSRateOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $uPSRateOption, implode(', ', \macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->UPSRateOption = $uPSRateOption;
        return $this;
    }
    /**
     * Get FedExRateOption value
     * @return string|null
     */
    public function getFedExRateOption()
    {
        return $this->FedExRateOption;
    }
    /**
     * Set FedExRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fedExRateOption
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setFedExRateOption($fedExRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType::valueIsValid($fedExRateOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fedExRateOption, implode(', ', \macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->FedExRateOption = $fedExRateOption;
        return $this;
    }
    /**
     * Get USPSRateOption value
     * @return string|null
     */
    public function getUSPSRateOption()
    {
        return $this->USPSRateOption;
    }
    /**
     * Set USPSRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uSPSRateOption
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setUSPSRateOption($uSPSRateOption = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType::valueIsValid($uSPSRateOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $uSPSRateOption, implode(', ', \macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->USPSRateOption = $uSPSRateOption;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
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
