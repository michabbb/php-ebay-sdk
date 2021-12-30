<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentOptionDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>PaymentOptionDetails</b> containers that are returned in <b>GeteBayDetails</b> if the <code>PaymentOptionDetails</code> value is used in a <b>DetailName</b> field in the call request. <br><br> <span
 * class="tablenote"><b>Note: </b> Although site-level payment options are still returned in <b>GeteBayDetails</b>, it may be better to use the <b>GetCategoryFeatures</b> call instead, as this call returns the specific payment options that are accepted
 * in specific categories. </span> <br> <span class="tablenote"><b>Note: </b> Sellers no longer have to specify any electronic payment methods for listings, so one or more <b>PaymentMethods</b> fields will only be needed for listings that
 * require/support payments off of eBay's platform. If an electronic payment is supplied in a <b>PaymentMethods</b> field, a warning will be triggered and the payment method will be dropped. </span>
 * @subpackage Structs
 */
class PaymentOptionDetailsType extends AbstractStructBase
{
    /**
     * The PaymentOption
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is the enumeration that the seller would pass in to one of the <b>PaymentMethods</b> fields in an Add/Revise/Relist call (or in to a Payment busines policy).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentOption = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field is a text-based/user-friendly description of the payment option.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: This string value indicates the version number of the update made to any payment options returned in <b>GeteBayDetails</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date and time of the last update made to any payment options returned in <b>GeteBayDetails</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaymentOptionDetailsType
     * @uses PaymentOptionDetailsType::setPaymentOption()
     * @uses PaymentOptionDetailsType::setDescription()
     * @uses PaymentOptionDetailsType::setDetailVersion()
     * @uses PaymentOptionDetailsType::setUpdateTime()
     * @uses PaymentOptionDetailsType::setAny()
     * @param string $paymentOption
     * @param string $description
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $paymentOption = null, ?string $description = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setPaymentOption($paymentOption)
            ->setDescription($description)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get PaymentOption value
     * @return string|null
     */
    public function getPaymentOption(): ?string
    {
        return $this->PaymentOption;
    }
    /**
     * Set PaymentOption value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentOption
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType
     */
    public function setPaymentOption(?string $paymentOption = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType', is_array($paymentOption) ? implode(', ', $paymentOption) : var_export($paymentOption, true), implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentOption = $paymentOption;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentOptionDetailsType
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
