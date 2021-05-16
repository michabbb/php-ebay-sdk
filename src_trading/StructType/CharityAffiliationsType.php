<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CharityAffiliationsType extends AbstractStructBase
{
    /**
     * The CharityID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityIDType[]
     */
    protected array $CharityID = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CharityAffiliationsType
     * @uses CharityAffiliationsType::setCharityID()
     * @uses CharityAffiliationsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CharityIDType[] $charityID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $charityID = [], $any = null)
    {
        $this
            ->setCharityID($charityID)
            ->setAny($any);
    }
    /**
     * Get CharityID value
     * @return \macropage\ebaysdk\trading\StructType\CharityIDType[]
     */
    public function getCharityID(): array
    {
        return $this->CharityID;
    }
    /**
     * This method is responsible for validating the values passed to the setCharityID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharityID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharityIDForArrayConstraintsFromSetCharityID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $charityAffiliationsTypeCharityIDItem) {
            // validation for constraint: itemType
            if (!$charityAffiliationsTypeCharityIDItem instanceof \macropage\ebaysdk\trading\StructType\CharityIDType) {
                $invalidValues[] = is_object($charityAffiliationsTypeCharityIDItem) ? get_class($charityAffiliationsTypeCharityIDItem) : sprintf('%s(%s)', gettype($charityAffiliationsTypeCharityIDItem), var_export($charityAffiliationsTypeCharityIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CharityID property can only contain items of type \macropage\ebaysdk\trading\StructType\CharityIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CharityID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityIDType[] $charityID
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType
     */
    public function setCharityID(array $charityID = []): self
    {
        // validation for constraint: array
        if ('' !== ($charityIDArrayErrorMessage = self::validateCharityIDForArrayConstraintsFromSetCharityID($charityID))) {
            throw new InvalidArgumentException($charityIDArrayErrorMessage, __LINE__);
        }
        $this->CharityID = $charityID;
        
        return $this;
    }
    /**
     * Add item to CharityID value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityIDType $item
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType
     */
    public function addToCharityID(\macropage\ebaysdk\trading\StructType\CharityIDType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharityIDType) {
            throw new InvalidArgumentException(sprintf('The CharityID property can only contain items of type \macropage\ebaysdk\trading\StructType\CharityIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CharityID[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationsType
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
