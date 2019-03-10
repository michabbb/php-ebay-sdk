<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserAgreementInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UserAgreementInfoType extends AbstractStructBase
{
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The SellereBayPaymentProcessStatus
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellereBayPaymentProcessStatus;
    /**
     * The AcceptedTime
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AcceptedTime;
    /**
     * The SellereBayPaymentProcessEnableTime
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellereBayPaymentProcessEnableTime;
    /**
     * The UserAgreementURL
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $UserAgreementURL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UserAgreementInfoType
     * @uses UserAgreementInfoType::setSite()
     * @uses UserAgreementInfoType::setSellereBayPaymentProcessStatus()
     * @uses UserAgreementInfoType::setAcceptedTime()
     * @uses UserAgreementInfoType::setSellereBayPaymentProcessEnableTime()
     * @uses UserAgreementInfoType::setUserAgreementURL()
     * @uses UserAgreementInfoType::setAny()
     * @param string $site
     * @param string $sellereBayPaymentProcessStatus
     * @param string $acceptedTime
     * @param string $sellereBayPaymentProcessEnableTime
     * @param string $userAgreementURL
     * @param \DOMDocument $any
     */
    public function __construct($site = null, $sellereBayPaymentProcessStatus = null, $acceptedTime = null, $sellereBayPaymentProcessEnableTime = null, $userAgreementURL = null, \DOMDocument $any = null)
    {
        $this
            ->setSite($site)
            ->setSellereBayPaymentProcessStatus($sellereBayPaymentProcessStatus)
            ->setAcceptedTime($acceptedTime)
            ->setSellereBayPaymentProcessEnableTime($sellereBayPaymentProcessEnableTime)
            ->setUserAgreementURL($userAgreementURL)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $site, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Get SellereBayPaymentProcessStatus value
     * @return string|null
     */
    public function getSellereBayPaymentProcessStatus()
    {
        return $this->SellereBayPaymentProcessStatus;
    }
    /**
     * Set SellereBayPaymentProcessStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sellereBayPaymentProcessStatus
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setSellereBayPaymentProcessStatus($sellereBayPaymentProcessStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::valueIsValid($sellereBayPaymentProcessStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sellereBayPaymentProcessStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::getValidValues())), __LINE__);
        }
        $this->SellereBayPaymentProcessStatus = $sellereBayPaymentProcessStatus;
        return $this;
    }
    /**
     * Get AcceptedTime value
     * @return string|null
     */
    public function getAcceptedTime()
    {
        return $this->AcceptedTime;
    }
    /**
     * Set AcceptedTime value
     * @param string $acceptedTime
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setAcceptedTime($acceptedTime = null)
    {
        // validation for constraint: string
        if (!is_null($acceptedTime) && !is_string($acceptedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acceptedTime)), __LINE__);
        }
        $this->AcceptedTime = $acceptedTime;
        return $this;
    }
    /**
     * Get SellereBayPaymentProcessEnableTime value
     * @return string|null
     */
    public function getSellereBayPaymentProcessEnableTime()
    {
        return $this->SellereBayPaymentProcessEnableTime;
    }
    /**
     * Set SellereBayPaymentProcessEnableTime value
     * @param string $sellereBayPaymentProcessEnableTime
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setSellereBayPaymentProcessEnableTime($sellereBayPaymentProcessEnableTime = null)
    {
        // validation for constraint: string
        if (!is_null($sellereBayPaymentProcessEnableTime) && !is_string($sellereBayPaymentProcessEnableTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellereBayPaymentProcessEnableTime)), __LINE__);
        }
        $this->SellereBayPaymentProcessEnableTime = $sellereBayPaymentProcessEnableTime;
        return $this;
    }
    /**
     * Get UserAgreementURL value
     * @return string|null
     */
    public function getUserAgreementURL()
    {
        return $this->UserAgreementURL;
    }
    /**
     * Set UserAgreementURL value
     * @param string $userAgreementURL
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setUserAgreementURL($userAgreementURL = null)
    {
        // validation for constraint: string
        if (!is_null($userAgreementURL) && !is_string($userAgreementURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userAgreementURL)), __LINE__);
        }
        $this->UserAgreementURL = $userAgreementURL;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UserAgreementInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
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
