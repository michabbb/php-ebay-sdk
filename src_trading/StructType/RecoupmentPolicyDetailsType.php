<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecoupmentPolicyDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details the recoupment policy on this site. There are two sites involved in recoupment - the listing site and the user registration site, each of which must agree before eBay enforces recoupment for a seller and listing.
 * @subpackage Structs
 */
class RecoupmentPolicyDetailsType extends AbstractStructBase
{
    /**
     * The EnforcedOnListingSite
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether recoupment policy is enforced on the site on which the item is listed.
     * - minOccurs: 0
     * @var bool
     */
    public $EnforcedOnListingSite;
    /**
     * The EnforcedOnRegistrationSite
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether recoupment policy is enforced on the registration site for which the call is made.
     * - minOccurs: 0
     * @var bool
     */
    public $EnforcedOnRegistrationSite;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($enforcedOnListingSite = null, $enforcedOnRegistrationSite = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
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
    public function getEnforcedOnListingSite()
    {
        return $this->EnforcedOnListingSite;
    }
    /**
     * Set EnforcedOnListingSite value
     * @param bool $enforcedOnListingSite
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
     */
    public function setEnforcedOnListingSite($enforcedOnListingSite = null)
    {
        // validation for constraint: boolean
        if (!is_null($enforcedOnListingSite) && !is_bool($enforcedOnListingSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enforcedOnListingSite)), __LINE__);
        }
        $this->EnforcedOnListingSite = $enforcedOnListingSite;
        return $this;
    }
    /**
     * Get EnforcedOnRegistrationSite value
     * @return bool|null
     */
    public function getEnforcedOnRegistrationSite()
    {
        return $this->EnforcedOnRegistrationSite;
    }
    /**
     * Set EnforcedOnRegistrationSite value
     * @param bool $enforcedOnRegistrationSite
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
     */
    public function setEnforcedOnRegistrationSite($enforcedOnRegistrationSite = null)
    {
        // validation for constraint: boolean
        if (!is_null($enforcedOnRegistrationSite) && !is_bool($enforcedOnRegistrationSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enforcedOnRegistrationSite)), __LINE__);
        }
        $this->EnforcedOnRegistrationSite = $enforcedOnRegistrationSite;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyDetailsType
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
