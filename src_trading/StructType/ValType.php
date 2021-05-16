<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is only applicable for Half.com listings, and since the Half.com site has been shut down, this type is no longer applicable.
 * @subpackage Structs
 */
class ValType extends AbstractStructBase
{
    /**
     * The ValueLiteral
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span> For Half.com, use <b>AttributeArray.Attribute.Value.ValueLiteral</b> in listing
     * requests. <br/><br/> <b>AttributeArray.Attribute.Value.ValueLiteral</b> is required when you use <b>AddItem</b>. For the Half.com Notes attribute, the max length is 500 characters. You can revise <b>AttributeArray.Attribute.Value.ValueLiteral</b> for
     * Half.com listings.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ValueLiteral = null;
    /**
     * The SuggestedValueLiteral
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $SuggestedValueLiteral = [];
    /**
     * The ValueID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>ValType</b> and all of its fields are no longer applicable since the Half.com site has been shut down.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ValueID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ValType
     * @uses ValType::setValueLiteral()
     * @uses ValType::setSuggestedValueLiteral()
     * @uses ValType::setValueID()
     * @uses ValType::setAny()
     * @param string $valueLiteral
     * @param string[] $suggestedValueLiteral
     * @param int $valueID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $valueLiteral = null, array $suggestedValueLiteral = [], ?int $valueID = null, $any = null)
    {
        $this
            ->setValueLiteral($valueLiteral)
            ->setSuggestedValueLiteral($suggestedValueLiteral)
            ->setValueID($valueID)
            ->setAny($any);
    }
    /**
     * Get ValueLiteral value
     * @return string|null
     */
    public function getValueLiteral(): ?string
    {
        return $this->ValueLiteral;
    }
    /**
     * Set ValueLiteral value
     * @param string $valueLiteral
     * @return \macropage\ebaysdk\trading\StructType\ValType
     */
    public function setValueLiteral(?string $valueLiteral = null): self
    {
        // validation for constraint: string
        if (!is_null($valueLiteral) && !is_string($valueLiteral)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valueLiteral, true), gettype($valueLiteral)), __LINE__);
        }
        $this->ValueLiteral = $valueLiteral;
        
        return $this;
    }
    /**
     * Get SuggestedValueLiteral value
     * @return string[]
     */
    public function getSuggestedValueLiteral(): array
    {
        return $this->SuggestedValueLiteral;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestedValueLiteral method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestedValueLiteral method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestedValueLiteralForArrayConstraintsFromSetSuggestedValueLiteral(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $valTypeSuggestedValueLiteralItem) {
            // validation for constraint: itemType
            if (!is_string($valTypeSuggestedValueLiteralItem)) {
                $invalidValues[] = is_object($valTypeSuggestedValueLiteralItem) ? get_class($valTypeSuggestedValueLiteralItem) : sprintf('%s(%s)', gettype($valTypeSuggestedValueLiteralItem), var_export($valTypeSuggestedValueLiteralItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SuggestedValueLiteral property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SuggestedValueLiteral value
     * @throws InvalidArgumentException
     * @param string[] $suggestedValueLiteral
     * @return \macropage\ebaysdk\trading\StructType\ValType
     */
    public function setSuggestedValueLiteral(array $suggestedValueLiteral = []): self
    {
        // validation for constraint: array
        if ('' !== ($suggestedValueLiteralArrayErrorMessage = self::validateSuggestedValueLiteralForArrayConstraintsFromSetSuggestedValueLiteral($suggestedValueLiteral))) {
            throw new InvalidArgumentException($suggestedValueLiteralArrayErrorMessage, __LINE__);
        }
        $this->SuggestedValueLiteral = $suggestedValueLiteral;
        
        return $this;
    }
    /**
     * Add item to SuggestedValueLiteral value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ValType
     */
    public function addToSuggestedValueLiteral(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SuggestedValueLiteral property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SuggestedValueLiteral[] = $item;
        
        return $this;
    }
    /**
     * Get ValueID value
     * @return int|null
     */
    public function getValueID(): ?int
    {
        return $this->ValueID;
    }
    /**
     * Set ValueID value
     * @param int $valueID
     * @return \macropage\ebaysdk\trading\StructType\ValType
     */
    public function setValueID(?int $valueID = null): self
    {
        // validation for constraint: int
        if (!is_null($valueID) && !(is_int($valueID) || ctype_digit($valueID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($valueID, true), gettype($valueID)), __LINE__);
        }
        $this->ValueID = $valueID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ValType
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
