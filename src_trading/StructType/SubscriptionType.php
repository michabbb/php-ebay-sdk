<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscriptionType StructType
 * @subpackage Structs
 */
class SubscriptionType extends AbstractStructBase
{
    /**
     * The EIASToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EIASToken = null;
    /**
     * The SiteID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SiteID = null;
    /**
     * The Active
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Active = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SubscriptionType
     * @uses SubscriptionType::setEIASToken()
     * @uses SubscriptionType::setSiteID()
     * @uses SubscriptionType::setActive()
     * @uses SubscriptionType::setAny()
     * @param string $eIASToken
     * @param string $siteID
     * @param bool $active
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $eIASToken = null, ?string $siteID = null, ?bool $active = null, $any = null)
    {
        $this
            ->setEIASToken($eIASToken)
            ->setSiteID($siteID)
            ->setActive($active)
            ->setAny($any);
    }
    /**
     * Get EIASToken value
     * @return string|null
     */
    public function getEIASToken(): ?string
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
     */
    public function setEIASToken(?string $eIASToken = null): self
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIASToken, true), gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        
        return $this;
    }
    /**
     * Get SiteID value
     * @return string|null
     */
    public function getSiteID(): ?string
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $siteID
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
     */
    public function setSiteID(?string $siteID = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($siteID)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteCodeType', is_array($siteID) ? implode(', ', $siteID) : var_export($siteID, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->SiteID = $siteID;
        
        return $this;
    }
    /**
     * Get Active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->Active = $active;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
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
