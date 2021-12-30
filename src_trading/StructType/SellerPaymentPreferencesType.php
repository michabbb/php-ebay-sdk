<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerPaymentPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerPaymentPreferences</b> container, which consists of the seller's payment preferences. Payment preferences specified in a <b>SetUserPreferences</b> call override the settings in My eBay payment preferences.
 * @subpackage Structs
 */
class SellerPaymentPreferencesType extends AbstractStructBase
{
    /**
     * The AlwaysUseThisPaymentAddress
     * Meta information extracted from the WSDL
     * - documentation: Sellers include this field and set it to <code>true</code> if they want buyers to mail payment to the payment address specified in the <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment address only comes into play
     * if the listing's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AlwaysUseThisPaymentAddress = null;
    /**
     * The DisplayPayNowButton
     * Meta information extracted from the WSDL
     * - documentation: If set, this field determines whether a Pay Now button is displayed for all of the user's listings. <br><br> <span class="tablenote"><b>Note:</b> Although the <b>DisplayPayNowButton</b> value can still be set in
     * <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. </span> <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayPayNowButton = null;
    /**
     * The PayPalPreferred
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether a seller wants to let buyers know that PayPal payments are preferred. <br><br> <span class="tablenote"><b>Note:</b> Although the <b>PayPalPreferred</b> boolean value can still be set in <b>SetUserPreferences</b> and
     * returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PayPalPreferred = null;
    /**
     * The DefaultPayPalEmailAddress
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default email address the seller uses for receiving PayPal payments. <br><br> <span class="tablenote"><b>Note:</b> Although the <b>DefaultPayPalEmailAddress</b> value can still be set in <b>SetUserPreferences</b> and
     * returned in <b>GetUserPreferences</b>, the seller's PayPal email address is no longer required or applicable. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DefaultPayPalEmailAddress = null;
    /**
     * The PayPalAlwaysOn
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether PayPal is always accepted for the seller's listings. <br><br> <span class="tablenote"><b>Note:</b> Although the <b>PayPalAlwaysOn</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in
     * <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PayPalAlwaysOn = null;
    /**
     * The SellerPaymentAddress
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the seller's mailing address where the buyer will send payment for an order. A seller's payment address only comes into play if the listing's category allows offline payments, and the seller has allowed the
     * buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AddressType $SellerPaymentAddress = null;
    /**
     * The UPSRateOption
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the category/level of UPS shipping rates that are available to the seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UPSRateOption = null;
    /**
     * The FedExRateOption
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the category/level of Federal Express shipping rates that are available to the seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FedExRateOption = null;
    /**
     * The USPSRateOption
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the category/level of US Postal Service shipping rates that are available to the seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $USPSRateOption = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $alwaysUseThisPaymentAddress = null, ?string $displayPayNowButton = null, ?bool $payPalPreferred = null, ?string $defaultPayPalEmailAddress = null, ?bool $payPalAlwaysOn = null, ?\macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress = null, ?string $uPSRateOption = null, ?string $fedExRateOption = null, ?string $uSPSRateOption = null, $any = null)
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
    public function getAlwaysUseThisPaymentAddress(): ?bool
    {
        return $this->AlwaysUseThisPaymentAddress;
    }
    /**
     * Set AlwaysUseThisPaymentAddress value
     * @param bool $alwaysUseThisPaymentAddress
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setAlwaysUseThisPaymentAddress(?bool $alwaysUseThisPaymentAddress = null): self
    {
        // validation for constraint: boolean
        if (!is_null($alwaysUseThisPaymentAddress) && !is_bool($alwaysUseThisPaymentAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($alwaysUseThisPaymentAddress, true), gettype($alwaysUseThisPaymentAddress)), __LINE__);
        }
        $this->AlwaysUseThisPaymentAddress = $alwaysUseThisPaymentAddress;
        
        return $this;
    }
    /**
     * Get DisplayPayNowButton value
     * @return string|null
     */
    public function getDisplayPayNowButton(): ?string
    {
        return $this->DisplayPayNowButton;
    }
    /**
     * Set DisplayPayNowButton value
     * @uses \macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $displayPayNowButton
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setDisplayPayNowButton(?string $displayPayNowButton = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType::valueIsValid($displayPayNowButton)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType', is_array($displayPayNowButton) ? implode(', ', $displayPayNowButton) : var_export($displayPayNowButton, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DisplayPayNowButtonCodeType::getValidValues())), __LINE__);
        }
        $this->DisplayPayNowButton = $displayPayNowButton;
        
        return $this;
    }
    /**
     * Get PayPalPreferred value
     * @return bool|null
     */
    public function getPayPalPreferred(): ?bool
    {
        return $this->PayPalPreferred;
    }
    /**
     * Set PayPalPreferred value
     * @param bool $payPalPreferred
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setPayPalPreferred(?bool $payPalPreferred = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payPalPreferred) && !is_bool($payPalPreferred)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalPreferred, true), gettype($payPalPreferred)), __LINE__);
        }
        $this->PayPalPreferred = $payPalPreferred;
        
        return $this;
    }
    /**
     * Get DefaultPayPalEmailAddress value
     * @return string|null
     */
    public function getDefaultPayPalEmailAddress(): ?string
    {
        return $this->DefaultPayPalEmailAddress;
    }
    /**
     * Set DefaultPayPalEmailAddress value
     * @param string $defaultPayPalEmailAddress
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setDefaultPayPalEmailAddress(?string $defaultPayPalEmailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultPayPalEmailAddress) && !is_string($defaultPayPalEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultPayPalEmailAddress, true), gettype($defaultPayPalEmailAddress)), __LINE__);
        }
        $this->DefaultPayPalEmailAddress = $defaultPayPalEmailAddress;
        
        return $this;
    }
    /**
     * Get PayPalAlwaysOn value
     * @return bool|null
     */
    public function getPayPalAlwaysOn(): ?bool
    {
        return $this->PayPalAlwaysOn;
    }
    /**
     * Set PayPalAlwaysOn value
     * @param bool $payPalAlwaysOn
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setPayPalAlwaysOn(?bool $payPalAlwaysOn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payPalAlwaysOn) && !is_bool($payPalAlwaysOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalAlwaysOn, true), gettype($payPalAlwaysOn)), __LINE__);
        }
        $this->PayPalAlwaysOn = $payPalAlwaysOn;
        
        return $this;
    }
    /**
     * Get SellerPaymentAddress value
     * @return \macropage\ebaysdk\trading\StructType\AddressType|null
     */
    public function getSellerPaymentAddress(): ?\macropage\ebaysdk\trading\StructType\AddressType
    {
        return $this->SellerPaymentAddress;
    }
    /**
     * Set SellerPaymentAddress value
     * @param \macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setSellerPaymentAddress(?\macropage\ebaysdk\trading\StructType\AddressType $sellerPaymentAddress = null): self
    {
        $this->SellerPaymentAddress = $sellerPaymentAddress;
        
        return $this;
    }
    /**
     * Get UPSRateOption value
     * @return string|null
     */
    public function getUPSRateOption(): ?string
    {
        return $this->UPSRateOption;
    }
    /**
     * Set UPSRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uPSRateOption
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setUPSRateOption(?string $uPSRateOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType::valueIsValid($uPSRateOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType', is_array($uPSRateOption) ? implode(', ', $uPSRateOption) : var_export($uPSRateOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\UPSRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->UPSRateOption = $uPSRateOption;
        
        return $this;
    }
    /**
     * Get FedExRateOption value
     * @return string|null
     */
    public function getFedExRateOption(): ?string
    {
        return $this->FedExRateOption;
    }
    /**
     * Set FedExRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fedExRateOption
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setFedExRateOption(?string $fedExRateOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType::valueIsValid($fedExRateOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType', is_array($fedExRateOption) ? implode(', ', $fedExRateOption) : var_export($fedExRateOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\FedExRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->FedExRateOption = $fedExRateOption;
        
        return $this;
    }
    /**
     * Get USPSRateOption value
     * @return string|null
     */
    public function getUSPSRateOption(): ?string
    {
        return $this->USPSRateOption;
    }
    /**
     * Set USPSRateOption value
     * @uses \macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uSPSRateOption
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
     */
    public function setUSPSRateOption(?string $uSPSRateOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType::valueIsValid($uSPSRateOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType', is_array($uSPSRateOption) ? implode(', ', $uSPSRateOption) : var_export($uSPSRateOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\USPSRateOptionCodeType::getValidValues())), __LINE__);
        }
        $this->USPSRateOption = $uSPSRateOption;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerPaymentPreferencesType
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
