<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellereBayPaymentProcessConsentCodeType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SellereBayPaymentProcessConsentCodeType extends AbstractStructBase
{
    /**
     * The PayoutMethodSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PayoutMethodSet = null;
    /**
     * The PayoutMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PayoutMethod = null;
    /**
     * The UserAgreementInfo
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserAgreementInfoType[]
     */
    protected array $UserAgreementInfo = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellereBayPaymentProcessConsentCodeType
     * @uses SellereBayPaymentProcessConsentCodeType::setPayoutMethodSet()
     * @uses SellereBayPaymentProcessConsentCodeType::setPayoutMethod()
     * @uses SellereBayPaymentProcessConsentCodeType::setUserAgreementInfo()
     * @uses SellereBayPaymentProcessConsentCodeType::setAny()
     * @param bool $payoutMethodSet
     * @param string $payoutMethod
     * @param \macropage\ebaysdk\trading\StructType\UserAgreementInfoType[] $userAgreementInfo
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $payoutMethodSet = null, ?string $payoutMethod = null, array $userAgreementInfo = [], $any = null)
    {
        $this
            ->setPayoutMethodSet($payoutMethodSet)
            ->setPayoutMethod($payoutMethod)
            ->setUserAgreementInfo($userAgreementInfo)
            ->setAny($any);
    }
    /**
     * Get PayoutMethodSet value
     * @return bool|null
     */
    public function getPayoutMethodSet(): ?bool
    {
        return $this->PayoutMethodSet;
    }
    /**
     * Set PayoutMethodSet value
     * @param bool $payoutMethodSet
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setPayoutMethodSet(?bool $payoutMethodSet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($payoutMethodSet) && !is_bool($payoutMethodSet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payoutMethodSet, true), gettype($payoutMethodSet)), __LINE__);
        }
        $this->PayoutMethodSet = $payoutMethodSet;
        
        return $this;
    }
    /**
     * Get PayoutMethod value
     * @return string|null
     */
    public function getPayoutMethod(): ?string
    {
        return $this->PayoutMethod;
    }
    /**
     * Set PayoutMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\PayoutMethodType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PayoutMethodType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $payoutMethod
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setPayoutMethod(?string $payoutMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PayoutMethodType::valueIsValid($payoutMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PayoutMethodType', is_array($payoutMethod) ? implode(', ', $payoutMethod) : var_export($payoutMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PayoutMethodType::getValidValues())), __LINE__);
        }
        $this->PayoutMethod = $payoutMethod;
        
        return $this;
    }
    /**
     * Get UserAgreementInfo value
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType[]
     */
    public function getUserAgreementInfo(): array
    {
        return $this->UserAgreementInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setUserAgreementInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserAgreementInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserAgreementInfoForArrayConstraintsFromSetUserAgreementInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) {
            // validation for constraint: itemType
            if (!$sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem instanceof \macropage\ebaysdk\trading\StructType\UserAgreementInfoType) {
                $invalidValues[] = is_object($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) ? get_class($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) : sprintf('%s(%s)', gettype($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem), var_export($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserAgreementInfo property can only contain items of type \macropage\ebaysdk\trading\StructType\UserAgreementInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserAgreementInfo value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UserAgreementInfoType[] $userAgreementInfo
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setUserAgreementInfo(array $userAgreementInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($userAgreementInfoArrayErrorMessage = self::validateUserAgreementInfoForArrayConstraintsFromSetUserAgreementInfo($userAgreementInfo))) {
            throw new InvalidArgumentException($userAgreementInfoArrayErrorMessage, __LINE__);
        }
        $this->UserAgreementInfo = $userAgreementInfo;
        
        return $this;
    }
    /**
     * Add item to UserAgreementInfo value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UserAgreementInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function addToUserAgreementInfo(\macropage\ebaysdk\trading\StructType\UserAgreementInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\UserAgreementInfoType) {
            throw new InvalidArgumentException(sprintf('The UserAgreementInfo property can only contain items of type \macropage\ebaysdk\trading\StructType\UserAgreementInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserAgreementInfo[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
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
