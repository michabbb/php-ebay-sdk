<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerProtectionDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <strong>ApplyBuyerProtection</strong> container, which consists of details related to whether or not the item is eligible for buyer protection and which of the buyer protection programs will cover the item.
 * @subpackage Structs
 */
class BuyerProtectionDetailsType extends AbstractStructBase
{
    /**
     * The BuyerProtectionSource
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the type of buyer protection program applicable for the item. This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerProtectionSource;
    /**
     * The BuyerProtectionStatus
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the item's eligibility for the buyer protection program listed in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field. This field is always returned with the
     * <strong>ApplyBuyerProtection</strong> container.
     * - minOccurs: 0
     * @var string
     */
    public $BuyerProtectionStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerProtectionDetailsType
     * @uses BuyerProtectionDetailsType::setBuyerProtectionSource()
     * @uses BuyerProtectionDetailsType::setBuyerProtectionStatus()
     * @uses BuyerProtectionDetailsType::setAny()
     * @param string $buyerProtectionSource
     * @param string $buyerProtectionStatus
     * @param \DOMDocument $any
     */
    public function __construct($buyerProtectionSource = null, $buyerProtectionStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setBuyerProtectionSource($buyerProtectionSource)
            ->setBuyerProtectionStatus($buyerProtectionStatus)
            ->setAny($any);
    }
    /**
     * Get BuyerProtectionSource value
     * @return string|null
     */
    public function getBuyerProtectionSource()
    {
        return $this->BuyerProtectionSource;
    }
    /**
     * Set BuyerProtectionSource value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyerProtectionSource
     * @return \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType
     */
    public function setBuyerProtectionSource($buyerProtectionSource = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType::valueIsValid($buyerProtectionSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buyerProtectionSource, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerProtectionSourceCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerProtectionSource = $buyerProtectionSource;
        return $this;
    }
    /**
     * Get BuyerProtectionStatus value
     * @return string|null
     */
    public function getBuyerProtectionStatus()
    {
        return $this->BuyerProtectionStatus;
    }
    /**
     * Set BuyerProtectionStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buyerProtectionStatus
     * @return \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType
     */
    public function setBuyerProtectionStatus($buyerProtectionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::valueIsValid($buyerProtectionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buyerProtectionStatus, implode(', ', \macropage\ebaysdk\trading\EnumType\BuyerProtectionCodeType::getValidValues())), __LINE__);
        }
        $this->BuyerProtectionStatus = $buyerProtectionStatus;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerProtectionDetailsType
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
