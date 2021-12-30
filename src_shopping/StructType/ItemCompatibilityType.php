<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: All information corresponding to an individual compatibility by application. <br><br> Each <b>Compatibility</b> container consists of the specifications for a motor vehicle that is compatible with the motor part or accessory.
 * @subpackage Structs
 */
class ItemCompatibilityType extends AbstractStructBase
{
    /**
     * The NameValueList
     * Meta information extracted from the WSDL
     * - documentation: Each <b>NameValueList</b> container will contain one aspect of a motor vehicle that is compatible with the motor vehicle part or accessory. For example, the allowed names might include 'Year', 'Make', and 'Model', 'Trim', and
     * 'Engine'.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\NameValueListType[]
     */
    protected ?array $NameValueList = null;
    /**
     * The CompatibilityNotes
     * Meta information extracted from the WSDL
     * - documentation: This field contains any notes pertaining to the compatibility being specified. This field is only returned if set for the compatible vehicle.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CompatibilityNotes = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemCompatibilityType
     * @uses ItemCompatibilityType::setNameValueList()
     * @uses ItemCompatibilityType::setCompatibilityNotes()
     * @uses ItemCompatibilityType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType[] $nameValueList
     * @param string $compatibilityNotes
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $nameValueList = null, ?string $compatibilityNotes = null, $any = null)
    {
        $this
            ->setNameValueList($nameValueList)
            ->setCompatibilityNotes($compatibilityNotes)
            ->setAny($any);
    }
    /**
     * Get NameValueList value
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType[]
     */
    public function getNameValueList(): ?array
    {
        return $this->NameValueList;
    }
    /**
     * This method is responsible for validating the values passed to the setNameValueList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameValueList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameValueListForArrayConstraintsFromSetNameValueList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemCompatibilityTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$itemCompatibilityTypeNameValueListItem instanceof \macropage\ebaysdk\shopping\StructType\NameValueListType) {
                $invalidValues[] = is_object($itemCompatibilityTypeNameValueListItem) ? get_class($itemCompatibilityTypeNameValueListItem) : sprintf('%s(%s)', gettype($itemCompatibilityTypeNameValueListItem), var_export($itemCompatibilityTypeNameValueListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameValueList property can only contain items of type \macropage\ebaysdk\shopping\StructType\NameValueListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NameValueList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType[] $nameValueList
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
     */
    public function setNameValueList(?array $nameValueList = null): self
    {
        // validation for constraint: array
        if ('' !== ($nameValueListArrayErrorMessage = self::validateNameValueListForArrayConstraintsFromSetNameValueList($nameValueList))) {
            throw new InvalidArgumentException($nameValueListArrayErrorMessage, __LINE__);
        }
        $this->NameValueList = $nameValueList;
        
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\NameValueListType $item
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
     */
    public function addToNameValueList(\macropage\ebaysdk\shopping\StructType\NameValueListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\NameValueListType) {
            throw new InvalidArgumentException(sprintf('The NameValueList property can only contain items of type \macropage\ebaysdk\shopping\StructType\NameValueListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NameValueList[] = $item;
        
        return $this;
    }
    /**
     * Get CompatibilityNotes value
     * @return string|null
     */
    public function getCompatibilityNotes(): ?string
    {
        return $this->CompatibilityNotes;
    }
    /**
     * Set CompatibilityNotes value
     * @param string $compatibilityNotes
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
     */
    public function setCompatibilityNotes(?string $compatibilityNotes = null): self
    {
        // validation for constraint: string
        if (!is_null($compatibilityNotes) && !is_string($compatibilityNotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compatibilityNotes, true), gettype($compatibilityNotes)), __LINE__);
        }
        $this->CompatibilityNotes = $compatibilityNotes;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\ItemCompatibilityType
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
