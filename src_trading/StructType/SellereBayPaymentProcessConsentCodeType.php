<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellereBayPaymentProcessConsentCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SellereBayPaymentProcessConsentCodeType extends AbstractStructBase
{
    /**
     * The PayoutMethodSet
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PayoutMethodSet;
    /**
     * The PayoutMethod
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $PayoutMethod;
    /**
     * The UserAgreementInfo
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UserAgreementInfoType[]
     */
    public $UserAgreementInfo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellereBayPaymentProcessConsentCodeType
     * @uses SellereBayPaymentProcessConsentCodeType::setPayoutMethodSet()
     * @uses SellereBayPaymentProcessConsentCodeType::setPayoutMethod()
     * @uses SellereBayPaymentProcessConsentCodeType::setUserAgreementInfo()
     * @uses SellereBayPaymentProcessConsentCodeType::setAny()
     * @param bool $payoutMethodSet
     * @param string $payoutMethod
     * @param \macropage\ebaysdk\trading\StructType\UserAgreementInfoType[] $userAgreementInfo
     * @param \DOMDocument $any
     */
    public function __construct($payoutMethodSet = null, $payoutMethod = null, array $userAgreementInfo = array(), \DOMDocument $any = null)
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
    public function getPayoutMethodSet()
    {
        return $this->PayoutMethodSet;
    }
    /**
     * Set PayoutMethodSet value
     * @param bool $payoutMethodSet
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setPayoutMethodSet($payoutMethodSet = null)
    {
        // validation for constraint: boolean
        if (!is_null($payoutMethodSet) && !is_bool($payoutMethodSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payoutMethodSet)), __LINE__);
        }
        $this->PayoutMethodSet = $payoutMethodSet;
        return $this;
    }
    /**
     * Get PayoutMethod value
     * @return string|null
     */
    public function getPayoutMethod()
    {
        return $this->PayoutMethod;
    }
    /**
     * Set PayoutMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\PayoutMethodType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PayoutMethodType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payoutMethod
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setPayoutMethod($payoutMethod = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PayoutMethodType::valueIsValid($payoutMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $payoutMethod, implode(', ', \macropage\ebaysdk\trading\EnumType\PayoutMethodType::getValidValues())), __LINE__);
        }
        $this->PayoutMethod = $payoutMethod;
        return $this;
    }
    /**
     * Get UserAgreementInfo value
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType[]|null
     */
    public function getUserAgreementInfo()
    {
        return $this->UserAgreementInfo;
    }
    /**
     * Set UserAgreementInfo value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UserAgreementInfoType[] $userAgreementInfo
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function setUserAgreementInfo(array $userAgreementInfo = array())
    {
        foreach ($userAgreementInfo as $sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) {
            // validation for constraint: itemType
            if (!$sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem instanceof \macropage\ebaysdk\trading\StructType\UserAgreementInfoType) {
                throw new \InvalidArgumentException(sprintf('The UserAgreementInfo property can only contain items of \macropage\ebaysdk\trading\StructType\UserAgreementInfoType, "%s" given', is_object($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) ? get_class($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem) : gettype($sellereBayPaymentProcessConsentCodeTypeUserAgreementInfoItem)), __LINE__);
            }
        }
        $this->UserAgreementInfo = $userAgreementInfo;
        return $this;
    }
    /**
     * Add item to UserAgreementInfo value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UserAgreementInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
     */
    public function addToUserAgreementInfo(\macropage\ebaysdk\trading\StructType\UserAgreementInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\UserAgreementInfoType) {
            throw new \InvalidArgumentException(sprintf('The UserAgreementInfo property can only contain items of \macropage\ebaysdk\trading\StructType\UserAgreementInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UserAgreementInfo[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
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
     * @return \macropage\ebaysdk\trading\StructType\SellereBayPaymentProcessConsentCodeType
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
