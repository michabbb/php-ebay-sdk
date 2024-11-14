<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponsiblePersonsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type that provides an array of each EU-based Responsible Person or entity associated with the listing. <br /> <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on
 * December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For more
 * information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
 * @subpackage Structs
 */
class ResponsiblePersonsType extends AbstractStructBase
{
    /**
     * The ResponsiblePerson
     * Meta information extracted from the WSDL
     * - documentation: This container consists of the detailed contact information for each Responsible Person or entity associated with the listing. <br /><br /> A maximum of 5 EU Responsible Persons are supported.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ResponsiblePersonType[]
     */
    protected ?array $ResponsiblePerson = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ResponsiblePersonsType
     * @uses ResponsiblePersonsType::setResponsiblePerson()
     * @uses ResponsiblePersonsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ResponsiblePersonType[] $responsiblePerson
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $responsiblePerson = null, $any = null)
    {
        $this
            ->setResponsiblePerson($responsiblePerson)
            ->setAny($any);
    }
    /**
     * Get ResponsiblePerson value
     * @return \macropage\ebaysdk\trading\StructType\ResponsiblePersonType[]
     */
    public function getResponsiblePerson(): ?array
    {
        return $this->ResponsiblePerson;
    }
    /**
     * This method is responsible for validating the values passed to the setResponsiblePerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponsiblePerson method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponsiblePersonForArrayConstraintsFromSetResponsiblePerson(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $responsiblePersonsTypeResponsiblePersonItem) {
            // validation for constraint: itemType
            if (!$responsiblePersonsTypeResponsiblePersonItem instanceof \macropage\ebaysdk\trading\StructType\ResponsiblePersonType) {
                $invalidValues[] = is_object($responsiblePersonsTypeResponsiblePersonItem) ? get_class($responsiblePersonsTypeResponsiblePersonItem) : sprintf('%s(%s)', gettype($responsiblePersonsTypeResponsiblePersonItem), var_export($responsiblePersonsTypeResponsiblePersonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResponsiblePerson property can only contain items of type \macropage\ebaysdk\trading\StructType\ResponsiblePersonType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ResponsiblePerson value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ResponsiblePersonType[] $responsiblePerson
     * @return \macropage\ebaysdk\trading\StructType\ResponsiblePersonsType
     */
    public function setResponsiblePerson(?array $responsiblePerson = null): self
    {
        // validation for constraint: array
        if ('' !== ($responsiblePersonArrayErrorMessage = self::validateResponsiblePersonForArrayConstraintsFromSetResponsiblePerson($responsiblePerson))) {
            throw new InvalidArgumentException($responsiblePersonArrayErrorMessage, __LINE__);
        }
        $this->ResponsiblePerson = $responsiblePerson;
        
        return $this;
    }
    /**
     * Add item to ResponsiblePerson value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ResponsiblePersonType $item
     * @return \macropage\ebaysdk\trading\StructType\ResponsiblePersonsType
     */
    public function addToResponsiblePerson(\macropage\ebaysdk\trading\StructType\ResponsiblePersonType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ResponsiblePersonType) {
            throw new InvalidArgumentException(sprintf('The ResponsiblePerson property can only contain items of type \macropage\ebaysdk\trading\StructType\ResponsiblePersonType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ResponsiblePerson[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\ResponsiblePersonsType
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
