<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingCarrierDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details about type of Carrier used to ship an item.
 * @subpackage Structs
 */
class ShippingCarrierDetailsType extends AbstractStructBase
{
    /**
     * The ShippingCarrierID
     * Meta informations extracted from the WSDL
     * - documentation: Numeric identifier. Some applications use this ID to look up shipping Carriers more efficiently.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingCarrierID;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping carriers in a more user-friendly format (such as in a drop-down list).
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ShippingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: The code for the shipping carrier. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to
     * <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCarrier;
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
     * Constructor method for ShippingCarrierDetailsType
     * @uses ShippingCarrierDetailsType::setShippingCarrierID()
     * @uses ShippingCarrierDetailsType::setDescription()
     * @uses ShippingCarrierDetailsType::setShippingCarrier()
     * @uses ShippingCarrierDetailsType::setDetailVersion()
     * @uses ShippingCarrierDetailsType::setUpdateTime()
     * @uses ShippingCarrierDetailsType::setAny()
     * @param int $shippingCarrierID
     * @param string $description
     * @param string $shippingCarrier
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($shippingCarrierID = null, $description = null, $shippingCarrier = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingCarrierID($shippingCarrierID)
            ->setDescription($description)
            ->setShippingCarrier($shippingCarrier)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get ShippingCarrierID value
     * @return int|null
     */
    public function getShippingCarrierID()
    {
        return $this->ShippingCarrierID;
    }
    /**
     * Set ShippingCarrierID value
     * @param int $shippingCarrierID
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
     */
    public function setShippingCarrierID($shippingCarrierID = null)
    {
        // validation for constraint: int
        if (!is_null($shippingCarrierID) && !is_numeric($shippingCarrierID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingCarrierID)), __LINE__);
        }
        $this->ShippingCarrierID = $shippingCarrierID;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ShippingCarrier value
     * @return string|null
     */
    public function getShippingCarrier()
    {
        return $this->ShippingCarrier;
    }
    /**
     * Set ShippingCarrier value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingCarrier
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
     */
    public function setShippingCarrier($shippingCarrier = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::valueIsValid($shippingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingCarrier, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingCarrier = $shippingCarrier;
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
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
     * @uses \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingCarrierDetailsType
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
