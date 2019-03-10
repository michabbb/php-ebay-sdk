<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProStoresDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProStoresDetailsType extends AbstractStructBase
{
    /**
     * The SellerThirdPartyUsername
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $SellerThirdPartyUsername;
    /**
     * The StoreName
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $StoreName;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProStoresDetailsType
     * @uses ProStoresDetailsType::setSellerThirdPartyUsername()
     * @uses ProStoresDetailsType::setStoreName()
     * @uses ProStoresDetailsType::setStatus()
     * @uses ProStoresDetailsType::setAny()
     * @param string $sellerThirdPartyUsername
     * @param string $storeName
     * @param string $status
     * @param \DOMDocument $any
     */
    public function __construct($sellerThirdPartyUsername = null, $storeName = null, $status = null, \DOMDocument $any = null)
    {
        $this
            ->setSellerThirdPartyUsername($sellerThirdPartyUsername)
            ->setStoreName($storeName)
            ->setStatus($status)
            ->setAny($any);
    }
    /**
     * Get SellerThirdPartyUsername value
     * @return string|null
     */
    public function getSellerThirdPartyUsername()
    {
        return $this->SellerThirdPartyUsername;
    }
    /**
     * Set SellerThirdPartyUsername value
     * @param string $sellerThirdPartyUsername
     * @return \macropage\ebaysdk\trading\StructType\ProStoresDetailsType
     */
    public function setSellerThirdPartyUsername($sellerThirdPartyUsername = null)
    {
        // validation for constraint: string
        if (!is_null($sellerThirdPartyUsername) && !is_string($sellerThirdPartyUsername)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sellerThirdPartyUsername)), __LINE__);
        }
        $this->SellerThirdPartyUsername = $sellerThirdPartyUsername;
        return $this;
    }
    /**
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \macropage\ebaysdk\trading\StructType\ProStoresDetailsType
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\ProStoresDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\EnableCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\EnableCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ProStoresDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProStoresDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ProStoresDetailsType
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
