<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserAgreementInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UserAgreementInfoType extends AbstractStructBase
{
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Site = null;
    /**
     * The SellereBayPaymentProcessStatus
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellereBayPaymentProcessStatus = null;
    /**
     * The AcceptedTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AcceptedTime = null;
    /**
     * The SellereBayPaymentProcessEnableTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SellereBayPaymentProcessEnableTime = null;
    /**
     * The UserAgreementURL
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserAgreementURL = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
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
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $site = null, ?string $sellereBayPaymentProcessStatus = null, ?string $acceptedTime = null, ?string $sellereBayPaymentProcessEnableTime = null, ?string $userAgreementURL = null, $any = null)
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
    public function getSite(): ?string
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setSite(?string $site = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteCodeType', is_array($site) ? implode(', ', $site) : var_export($site, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        
        return $this;
    }
    /**
     * Get SellereBayPaymentProcessStatus value
     * @return string|null
     */
    public function getSellereBayPaymentProcessStatus(): ?string
    {
        return $this->SellereBayPaymentProcessStatus;
    }
    /**
     * Set SellereBayPaymentProcessStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sellereBayPaymentProcessStatus
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setSellereBayPaymentProcessStatus(?string $sellereBayPaymentProcessStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::valueIsValid($sellereBayPaymentProcessStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType', is_array($sellereBayPaymentProcessStatus) ? implode(', ', $sellereBayPaymentProcessStatus) : var_export($sellereBayPaymentProcessStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SellereBayPaymentProcessStatusCodeType::getValidValues())), __LINE__);
        }
        $this->SellereBayPaymentProcessStatus = $sellereBayPaymentProcessStatus;
        
        return $this;
    }
    /**
     * Get AcceptedTime value
     * @return string|null
     */
    public function getAcceptedTime(): ?string
    {
        return $this->AcceptedTime;
    }
    /**
     * Set AcceptedTime value
     * @param string $acceptedTime
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setAcceptedTime(?string $acceptedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($acceptedTime) && !is_string($acceptedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($acceptedTime, true), gettype($acceptedTime)), __LINE__);
        }
        $this->AcceptedTime = $acceptedTime;
        
        return $this;
    }
    /**
     * Get SellereBayPaymentProcessEnableTime value
     * @return string|null
     */
    public function getSellereBayPaymentProcessEnableTime(): ?string
    {
        return $this->SellereBayPaymentProcessEnableTime;
    }
    /**
     * Set SellereBayPaymentProcessEnableTime value
     * @param string $sellereBayPaymentProcessEnableTime
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setSellereBayPaymentProcessEnableTime(?string $sellereBayPaymentProcessEnableTime = null): self
    {
        // validation for constraint: string
        if (!is_null($sellereBayPaymentProcessEnableTime) && !is_string($sellereBayPaymentProcessEnableTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellereBayPaymentProcessEnableTime, true), gettype($sellereBayPaymentProcessEnableTime)), __LINE__);
        }
        $this->SellereBayPaymentProcessEnableTime = $sellereBayPaymentProcessEnableTime;
        
        return $this;
    }
    /**
     * Get UserAgreementURL value
     * @return string|null
     */
    public function getUserAgreementURL(): ?string
    {
        return $this->UserAgreementURL;
    }
    /**
     * Set UserAgreementURL value
     * @param string $userAgreementURL
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
     */
    public function setUserAgreementURL(?string $userAgreementURL = null): self
    {
        // validation for constraint: string
        if (!is_null($userAgreementURL) && !is_string($userAgreementURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userAgreementURL, true), gettype($userAgreementURL)), __LINE__);
        }
        $this->UserAgreementURL = $userAgreementURL;
        
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
     * @return \macropage\ebaysdk\trading\StructType\UserAgreementInfoType
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
