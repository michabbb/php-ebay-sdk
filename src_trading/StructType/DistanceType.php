<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistanceType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class DistanceType extends AbstractStructBase
{
    /**
     * The DistanceMeasurement
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * @var int|null
     */
    protected ?int $DistanceMeasurement = null;
    /**
     * The DistanceUnit
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DistanceUnit = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DistanceType
     * @uses DistanceType::setDistanceMeasurement()
     * @uses DistanceType::setDistanceUnit()
     * @uses DistanceType::setAny()
     * @param int $distanceMeasurement
     * @param string $distanceUnit
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $distanceMeasurement = null, ?string $distanceUnit = null, $any = null)
    {
        $this
            ->setDistanceMeasurement($distanceMeasurement)
            ->setDistanceUnit($distanceUnit)
            ->setAny($any);
    }
    /**
     * Get DistanceMeasurement value
     * @return int|null
     */
    public function getDistanceMeasurement(): ?int
    {
        return $this->DistanceMeasurement;
    }
    /**
     * Set DistanceMeasurement value
     * @param int $distanceMeasurement
     * @return \macropage\ebaysdk\trading\StructType\DistanceType
     */
    public function setDistanceMeasurement(?int $distanceMeasurement = null): self
    {
        // validation for constraint: int
        if (!is_null($distanceMeasurement) && !(is_int($distanceMeasurement) || ctype_digit($distanceMeasurement))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($distanceMeasurement, true), gettype($distanceMeasurement)), __LINE__);
        }
        $this->DistanceMeasurement = $distanceMeasurement;
        
        return $this;
    }
    /**
     * Get DistanceUnit value
     * @return string|null
     */
    public function getDistanceUnit(): ?string
    {
        return $this->DistanceUnit;
    }
    /**
     * Set DistanceUnit value
     * @param string $distanceUnit
     * @return \macropage\ebaysdk\trading\StructType\DistanceType
     */
    public function setDistanceUnit(?string $distanceUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($distanceUnit) && !is_string($distanceUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distanceUnit, true), gettype($distanceUnit)), __LINE__);
        }
        $this->DistanceUnit = $distanceUnit;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DistanceType
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
