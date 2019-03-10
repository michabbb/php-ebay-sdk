<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecoupmentPolicyConsentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <strong>RecoupmentPolicyConsent</strong> container that is returned in the <strong>GetItem</strong> call response to indicate which sites the user (specified in <strong>UserID</strong> field of call request) has
 * signed a cross-border trade Recoupment Policy Agreement.
 * @subpackage Structs
 */
class RecoupmentPolicyConsentType extends AbstractStructBase
{
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for an eBay site. Each site where the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement is returned. The enumeration values that
     * represent these eBay sites can be found in <strong>SiteCodeType</strong>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Site;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RecoupmentPolicyConsentType
     * @uses RecoupmentPolicyConsentType::setSite()
     * @uses RecoupmentPolicyConsentType::setAny()
     * @param string[] $site
     * @param \DOMDocument $any
     */
    public function __construct(array $site = array(), \DOMDocument $any = null)
    {
        $this
            ->setSite($site)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string[]|null
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
     * @param string[] $site
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType
     */
    public function setSite(array $site = array())
    {
        $invalidValues = array();
        foreach ($site as $recoupmentPolicyConsentTypeSiteItem) {
            if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($recoupmentPolicyConsentTypeSiteItem)) {
                $invalidValues[] = var_export($recoupmentPolicyConsentTypeSiteItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Add item to Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType
     */
    public function addToSite($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType
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
     * @return \macropage\ebaysdk\trading\StructType\RecoupmentPolicyConsentType
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
