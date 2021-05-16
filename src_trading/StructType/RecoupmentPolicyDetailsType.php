<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecoupmentPolicyDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details the recoupment policy on this site. There are two sites involved in recoupment - the listing site and the user registration site, each of which must agree before eBay enforces recoupment for a seller and listing.
 * @subpackage Structs
 */
class RecoupmentPolicyDetailsType extends AbstractStructBase
{
    /**
     * The EnforcedOnListingSite
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether recoupment policy is enforced on the site on which the item is listed.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EnforcedOnListingSite = null;
    /**
     * The EnforcedOnRegistrationSite
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether recoupment policy is enforced on the registration site for which the call is made.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $EnforcedOnRegistrationSite = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
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
     * Constructor method for RecoupmentPolicyDetailsType
     * @uses RecoupmentPolicyDetailsType::setEnforcedOnListingSite()
     * @uses RecoupmentPolicyDetailsType::setEnforcedOnRegistrationSite()
     * @uses RecoupmentPolicyDetailsType::setDetailVersion()
     * @uses RecoupmentPolicyDetailsType::setUpdateTime()
     * @uses RecoupmentPolicyDetailsType::setAny()
     * @param bool $enforcedOnListingSite
     * @param bool $enforcedOnRegistrationSite
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $enforcedOnListingSite = null, ?bool $enforcedOnRegistrationSite = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setEnforcedOnListingSite($enforcedOnListingSite)
            ->setEnforcedOnRegistrationSite($enforcedOnRegistrationSite)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get EnforcedOnListingSite value
     * @return bool|null
     */
    public function getEnforcedOnListingSite(): ?bool
    {
        return $this->EnforcedOnListingSite;
    }
    /**
     * Set EnforcedOnListingSite value
     * @param bool $enforcedOnListingSite
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
     */
    public function setEnforcedOnListingSite(?bool $enforcedOnListingSite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enforcedOnListingSite) && !is_bool($enforcedOnListingSite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enforcedOnListingSite, true), gettype($enforcedOnListingSite)), __LINE__);
        }
        $this->EnforcedOnListingSite = $enforcedOnListingSite;
        
        return $this;
    }
    /**
     * Get EnforcedOnRegistrationSite value
     * @return bool|null
     */
    public function getEnforcedOnRegistrationSite(): ?bool
    {
        return $this->EnforcedOnRegistrationSite;
    }
    /**
     * Set EnforcedOnRegistrationSite value
     * @param bool $enforcedOnRegistrationSite
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
     */
    public function setEnforcedOnRegistrationSite(?bool $enforcedOnRegistrationSite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enforcedOnRegistrationSite) && !is_bool($enforcedOnRegistrationSite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enforcedOnRegistrationSite, true), gettype($enforcedOnRegistrationSite)), __LINE__);
        }
        $this->EnforcedOnRegistrationSite = $enforcedOnRegistrationSite;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
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
