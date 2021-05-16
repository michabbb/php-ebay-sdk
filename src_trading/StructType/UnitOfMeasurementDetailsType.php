<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitOfMeasurementDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class UnitOfMeasurementDetailsType extends AbstractStructBase
{
    /**
     * The UnitOfMeasurement
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType[]
     */
    protected array $UnitOfMeasurement = [];
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
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
     * Constructor method for UnitOfMeasurementDetailsType
     * @uses UnitOfMeasurementDetailsType::setUnitOfMeasurement()
     * @uses UnitOfMeasurementDetailsType::setDetailVersion()
     * @uses UnitOfMeasurementDetailsType::setUpdateTime()
     * @uses UnitOfMeasurementDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType[] $unitOfMeasurement
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $unitOfMeasurement = [], ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setUnitOfMeasurement($unitOfMeasurement)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get UnitOfMeasurement value
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType[]
     */
    public function getUnitOfMeasurement(): array
    {
        return $this->UnitOfMeasurement;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitOfMeasurement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitOfMeasurement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitOfMeasurementForArrayConstraintsFromSetUnitOfMeasurement(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $unitOfMeasurementDetailsTypeUnitOfMeasurementItem) {
            // validation for constraint: itemType
            if (!$unitOfMeasurementDetailsTypeUnitOfMeasurementItem instanceof \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType) {
                $invalidValues[] = is_object($unitOfMeasurementDetailsTypeUnitOfMeasurementItem) ? get_class($unitOfMeasurementDetailsTypeUnitOfMeasurementItem) : sprintf('%s(%s)', gettype($unitOfMeasurementDetailsTypeUnitOfMeasurementItem), var_export($unitOfMeasurementDetailsTypeUnitOfMeasurementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitOfMeasurement property can only contain items of type \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitOfMeasurement value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType[] $unitOfMeasurement
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
     */
    public function setUnitOfMeasurement(array $unitOfMeasurement = []): self
    {
        // validation for constraint: array
        if ('' !== ($unitOfMeasurementArrayErrorMessage = self::validateUnitOfMeasurementForArrayConstraintsFromSetUnitOfMeasurement($unitOfMeasurement))) {
            throw new InvalidArgumentException($unitOfMeasurementArrayErrorMessage, __LINE__);
        }
        $this->UnitOfMeasurement = $unitOfMeasurement;
        
        return $this;
    }
    /**
     * Add item to UnitOfMeasurement value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType $item
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
     */
    public function addToUnitOfMeasurement(\macropage\ebaysdk\trading\StructType\UnitOfMeasurementType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType) {
            throw new InvalidArgumentException(sprintf('The UnitOfMeasurement property can only contain items of type \macropage\ebaysdk\trading\StructType\UnitOfMeasurementType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitOfMeasurement[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\UnitOfMeasurementDetailsType
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
