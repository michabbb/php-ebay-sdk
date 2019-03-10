<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IntegratedMerchantCreditCardInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the sites on which a seller is eligible to offer IMCC as a payment method.
 * @subpackage Structs
 */
class IntegratedMerchantCreditCardInfoType extends AbstractStructBase
{
    /**
     * The SupportedSite
     * Meta informations extracted from the WSDL
     * - documentation: Indicates a site on which a seller has a payment gateway account (and thus a site on which the seller can use the IntegratedMerchantCreditCard payment method).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SupportedSite;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for IntegratedMerchantCreditCardInfoType
     * @uses IntegratedMerchantCreditCardInfoType::setSupportedSite()
     * @uses IntegratedMerchantCreditCardInfoType::setAny()
     * @param string[] $supportedSite
     * @param \DOMDocument $any
     */
    public function __construct(array $supportedSite = array(), \DOMDocument $any = null)
    {
        $this
            ->setSupportedSite($supportedSite)
            ->setAny($any);
    }
    /**
     * Get SupportedSite value
     * @return string[]|null
     */
    public function getSupportedSite()
    {
        return $this->SupportedSite;
    }
    /**
     * Set SupportedSite value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $supportedSite
     * @return \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType
     */
    public function setSupportedSite(array $supportedSite = array())
    {
        $invalidValues = array();
        foreach ($supportedSite as $integratedMerchantCreditCardInfoTypeSupportedSiteItem) {
            if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($integratedMerchantCreditCardInfoTypeSupportedSiteItem)) {
                $invalidValues[] = var_export($integratedMerchantCreditCardInfoTypeSupportedSiteItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->SupportedSite = $supportedSite;
        return $this;
    }
    /**
     * Add item to SupportedSite value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType
     */
    public function addToSupportedSite($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->SupportedSite[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\IntegratedMerchantCreditCardInfoType
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
