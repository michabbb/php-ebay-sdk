<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscriptionType StructType
 * @subpackage Structs
 */
class SubscriptionType extends AbstractStructBase
{
    /**
     * The EIASToken
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EIASToken;
    /**
     * The SiteID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SiteID;
    /**
     * The Active
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Active;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SubscriptionType
     * @uses SubscriptionType::setEIASToken()
     * @uses SubscriptionType::setSiteID()
     * @uses SubscriptionType::setActive()
     * @uses SubscriptionType::setAny()
     * @param string $eIASToken
     * @param string $siteID
     * @param bool $active
     * @param \DOMDocument $any
     */
    public function __construct($eIASToken = null, $siteID = null, $active = null, \DOMDocument $any = null)
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
    public function getEIASToken()
    {
        return $this->EIASToken;
    }
    /**
     * Set EIASToken value
     * @param string $eIASToken
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
     */
    public function setEIASToken($eIASToken = null)
    {
        // validation for constraint: string
        if (!is_null($eIASToken) && !is_string($eIASToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eIASToken)), __LINE__);
        }
        $this->EIASToken = $eIASToken;
        return $this;
    }
    /**
     * Get SiteID value
     * @return string|null
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $siteID
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($siteID)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $siteID, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->SiteID = $siteID;
        return $this;
    }
    /**
     * Get Active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($active)), __LINE__);
        }
        $this->Active = $active;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SubscriptionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
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
     * @return \macropage\ebaysdk\trading\StructType\SubscriptionType
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
