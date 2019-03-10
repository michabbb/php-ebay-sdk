<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitOfMeasurementDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UnitOfMeasurementDetailsType extends AbstractStructBase
{
    /**
     * The UnitOfMeasurement
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType[]
     */
    public $UnitOfMeasurement;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
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
     * Constructor method for UnitOfMeasurementDetailsType
     * @uses UnitOfMeasurementDetailsType::setUnitOfMeasurement()
     * @uses UnitOfMeasurementDetailsType::setDetailVersion()
     * @uses UnitOfMeasurementDetailsType::setUpdateTime()
     * @uses UnitOfMeasurementDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType[] $unitOfMeasurement
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct(array $unitOfMeasurement = array(), $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setUnitOfMeasurement($unitOfMeasurement)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get UnitOfMeasurement value
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType[]|null
     */
    public function getUnitOfMeasurement()
    {
        return $this->UnitOfMeasurement;
    }
    /**
     * Set UnitOfMeasurement value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType[] $unitOfMeasurement
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
     */
    public function setUnitOfMeasurement(array $unitOfMeasurement = array())
    {
        foreach ($unitOfMeasurement as $unitOfMeasurementDetailsTypeUnitOfMeasurementItem) {
            // validation for constraint: itemType
            if (!$unitOfMeasurementDetailsTypeUnitOfMeasurementItem instanceof \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType) {
                throw new \InvalidArgumentException(sprintf('The UnitOfMeasurement property can only contain items of \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType, "%s" given', is_object($unitOfMeasurementDetailsTypeUnitOfMeasurementItem) ? get_class($unitOfMeasurementDetailsTypeUnitOfMeasurementItem) : gettype($unitOfMeasurementDetailsTypeUnitOfMeasurementItem)), __LINE__);
            }
        }
        $this->UnitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * Add item to UnitOfMeasurement value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType $item
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
     */
    public function addToUnitOfMeasurement(\macropage\ebaysdk\trading\StructType\UnitOfMeasurementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType) {
            throw new \InvalidArgumentException(sprintf('The UnitOfMeasurement property can only contain items of \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UnitOfMeasurement[] = $item;
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
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
     * @uses \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
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
