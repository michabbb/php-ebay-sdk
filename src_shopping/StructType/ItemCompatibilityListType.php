<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of vehicles that are compatible with a motor vehicle part or accessory. Describes assemblies with which a part is compatible (i.e., compatibility by application). For example, to specify a part's compatibility with a vehicle,
 * the name would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values describe the specific vehicle, such as a 2006 Honda Accord. <br><br> The <b>ItemCompatibilityList</b> container will only be returned if a
 * parts compatibility list exists for the listing, and the <b>IncludeSelector </b>field is included and set to <code>Compatibility</code>
 * @subpackage Structs
 */
class ItemCompatibilityListType extends AbstractStructBase
{
    /**
     * The Compatibility
     * Meta information extracted from the WSDL
     * - documentation: A <b>Compatibility</b> container is returned for each motor vehicle that is compatible with the motor vehicle part or accessory. The Year, Make, Model, Trim, and Engine type of the vehicle is expressed through name-value pairs, and
     * notes about compatibility (if available/applicable) is expressed through the <b>CompatibilityNotes</b> field.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType[]
     */
    protected array $Compatibility = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemCompatibilityListType
     * @uses ItemCompatibilityListType::setCompatibility()
     * @uses ItemCompatibilityListType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType[] $compatibility
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $compatibility = [], $any = null)
    {
        $this
            ->setCompatibility($compatibility)
            ->setAny($any);
    }
    /**
     * Get Compatibility value
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType[]
     */
    public function getCompatibility(): array
    {
        return $this->Compatibility;
    }
    /**
     * This method is responsible for validating the values passed to the setCompatibility method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompatibility method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompatibilityForArrayConstraintsFromSetCompatibility(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemCompatibilityListTypeCompatibilityItem) {
            // validation for constraint: itemType
            if (!$itemCompatibilityListTypeCompatibilityItem instanceof \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType) {
                $invalidValues[] = is_object($itemCompatibilityListTypeCompatibilityItem) ? get_class($itemCompatibilityListTypeCompatibilityItem) : sprintf('%s(%s)', gettype($itemCompatibilityListTypeCompatibilityItem), var_export($itemCompatibilityListTypeCompatibilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Compatibility property can only contain items of type \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Compatibility value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType[] $compatibility
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType
     */
    public function setCompatibility(array $compatibility = []): self
    {
        // validation for constraint: array
        if ('' !== ($compatibilityArrayErrorMessage = self::validateCompatibilityForArrayConstraintsFromSetCompatibility($compatibility))) {
            throw new InvalidArgumentException($compatibilityArrayErrorMessage, __LINE__);
        }
        $this->Compatibility = $compatibility;
        
        return $this;
    }
    /**
     * Add item to Compatibility value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType $item
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType
     */
    public function addToCompatibility(\macropage\ebaysdk\shopping\StructType\ItemCompatibilityType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType) {
            throw new InvalidArgumentException(sprintf('The Compatibility property can only contain items of type \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Compatibility[] = $item;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityListType
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
