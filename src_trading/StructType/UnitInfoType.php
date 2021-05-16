<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type provides information about the weight, volume or other quantity measurement of a listed item. The European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare
 * prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to calculate and display the per-unit price on eBay EU sites.
 * @subpackage Structs
 */
class UnitInfoType extends AbstractStructBase
{
    /**
     * The UnitType
     * Meta information extracted from the WSDL
     * - documentation: Designation of size, weight, volume or count to be used to specify the unit quantity of the item. This value can be one of the following: <br/> <pre> Kg 100g 10g L 100ml 10ml M M2 M3 Unit </pre> With <b>GetItem</b>, this field is
     * returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UnitType = null;
    /**
     * The UnitQuantity
     * Meta information extracted from the WSDL
     * - documentation: Number of units of size, weight, volume or count of the specified unit type for the item. eBay divides the item price by this number to get the price per unit to be displayed in the item listing for comparison purposes. <br/><br/>
     * With GetItem, this field is returned only when you provide <strong>IncludeItemSpecifics</strong> in the request and set it to <code>true</code>.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $UnitQuantity = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for UnitInfoType
     * @uses UnitInfoType::setUnitType()
     * @uses UnitInfoType::setUnitQuantity()
     * @uses UnitInfoType::setAny()
     * @param string $unitType
     * @param float $unitQuantity
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $unitType = null, ?float $unitQuantity = null, $any = null)
    {
        $this
            ->setUnitType($unitType)
            ->setUnitQuantity($unitQuantity)
            ->setAny($any);
    }
    /**
     * Get UnitType value
     * @return string|null
     */
    public function getUnitType(): ?string
    {
        return $this->UnitType;
    }
    /**
     * Set UnitType value
     * @param string $unitType
     * @return \macropage\ebaysdk\trading\StructType\UnitInfoType
     */
    public function setUnitType(?string $unitType = null): self
    {
        // validation for constraint: string
        if (!is_null($unitType) && !is_string($unitType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitType, true), gettype($unitType)), __LINE__);
        }
        $this->UnitType = $unitType;
        
        return $this;
    }
    /**
     * Get UnitQuantity value
     * @return float|null
     */
    public function getUnitQuantity(): ?float
    {
        return $this->UnitQuantity;
    }
    /**
     * Set UnitQuantity value
     * @param float $unitQuantity
     * @return \macropage\ebaysdk\trading\StructType\UnitInfoType
     */
    public function setUnitQuantity(?float $unitQuantity = null): self
    {
        // validation for constraint: float
        if (!is_null($unitQuantity) && !(is_float($unitQuantity) || is_numeric($unitQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitQuantity, true), gettype($unitQuantity)), __LINE__);
        }
        $this->UnitQuantity = $unitQuantity;
        
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
     * @return \macropage\ebaysdk\trading\StructType\UnitInfoType
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
