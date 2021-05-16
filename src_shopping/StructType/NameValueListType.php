<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameValueListType StructType
 * Meta information extracted from the WSDL
 * - documentation: Depending on the call and listing, this type is used to identify the following through name/value pairs: <ul> <li>Listing-level Item Specific name-value pairs </li> <li>Variation-level name-value pairs identifying the individual
 * variation within a multiple-variation listing </li> <li>Item Specific name-value pairs for an eBay catalog product</li> <li>Name-value pairs identifying a specific motor vehicle that is compatible with a motor vehicle part or accessory</li> </ul>
 * @subpackage Structs
 */
class NameValueListType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, and individual variation within a multiple-variation listing, or a Parts Compatibility aspect for a motor
     * vehicle part or accessory listing. <br> <br> <span class="tablenote"><b>Note:</b> To control the data that is returned in a <b>GetSingleItem</b> or <b>GetMultipleItems</b> response, the <b>IncludeSelector</b> filter should be included. To see
     * listing-level Item Specifics, include the <b>IncludeSelector</b> field and set its value to <b>ItemSpecifics</b>. To see variation-level Item Specifics (only applicable for multiple-variation listings), include the <b>IncludeSelector</b> field and
     * set its value to <b>Variations</b>. To see Parts Compatibility name/value pairs (only applicable for motor vehicle part or accessory listings with a compatible vehicle list), include the <b>IncludeSelector</b> field and set its value to
     * <b>Compatibility</b>. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: The corresponding value of an Item Specific for either an eBay Catalog Product (<b>FindProducts</b> call only), a single-variation listing, an individual variation within a multiple-variation listing, or a Parts Compatibility aspect
     * for a motor vehicle part or accessory listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Value = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for NameValueListType
     * @uses NameValueListType::setName()
     * @uses NameValueListType::setValue()
     * @uses NameValueListType::setAny()
     * @param string $name
     * @param string[] $value
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, array $value = [], $any = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string[]
     */
    public function getValue(): array
    {
        return $this->Value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nameValueListTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($nameValueListTypeValueItem)) {
                $invalidValues[] = is_object($nameValueListTypeValueItem) ? get_class($nameValueListTypeValueItem) : sprintf('%s(%s)', gettype($nameValueListTypeValueItem), var_export($nameValueListTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Value value
     * @throws InvalidArgumentException
     * @param string[] $value
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
     */
    public function setValue(array $value = []): self
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Add item to Value value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
     */
    public function addToValue(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Value[] = $item;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\NameValueListType
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
