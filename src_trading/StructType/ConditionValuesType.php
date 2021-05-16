<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionValuesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Fields in this type provide condition values and display names.
 * @subpackage Structs
 */
class ConditionValuesType extends AbstractStructBase
{
    /**
     * The Condition
     * Meta information extracted from the WSDL
     * - documentation: This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category. <br> <br> <span class="tablenote"><strong>Note:</strong> In all eBay marketplaces, Condition
     * ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature
     * will be blocked if they try to create a new listing or revise an existing listing with this item condition. Any active listings on any eBay marketplace that had 'Manufacturer Refurbished' as the item condition should have been automatically updated
     * by eBay to the 'Seller Refurbished' item condition (Condition ID 2500). <br> <br> Any seller that is interested in eligibility requirements to list with 'Certified Refurbished' should see the <a
     * href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html" target="_blank">Certified refurbished program</a> page in Seller Center. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ConditionType[]
     */
    protected array $Condition = [];
    /**
     * The ConditionHelpURL
     * Meta information extracted from the WSDL
     * - documentation: URL to the eBay Web site's item condition help for the category. This may include policies about how to assess the condition of an item in the category. To reduce item-not-as-described disputes, we recommend that you refer sellers
     * (and buyers) to these help pages. These help pages may vary for some categories.<br> <br> The Sandbox might not return valid help URLs.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConditionHelpURL = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ConditionValuesType
     * @uses ConditionValuesType::setCondition()
     * @uses ConditionValuesType::setConditionHelpURL()
     * @uses ConditionValuesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ConditionType[] $condition
     * @param string $conditionHelpURL
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $condition = [], ?string $conditionHelpURL = null, $any = null)
    {
        $this
            ->setCondition($condition)
            ->setConditionHelpURL($conditionHelpURL)
            ->setAny($any);
    }
    /**
     * Get Condition value
     * @return \macropage\ebaysdk\trading\StructType\ConditionType[]
     */
    public function getCondition(): array
    {
        return $this->Condition;
    }
    /**
     * This method is responsible for validating the values passed to the setCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConditionForArrayConstraintsFromSetCondition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $conditionValuesTypeConditionItem) {
            // validation for constraint: itemType
            if (!$conditionValuesTypeConditionItem instanceof \macropage\ebaysdk\trading\StructType\ConditionType) {
                $invalidValues[] = is_object($conditionValuesTypeConditionItem) ? get_class($conditionValuesTypeConditionItem) : sprintf('%s(%s)', gettype($conditionValuesTypeConditionItem), var_export($conditionValuesTypeConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Condition property can only contain items of type \macropage\ebaysdk\trading\StructType\ConditionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Condition value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ConditionType[] $condition
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
     */
    public function setCondition(array $condition = []): self
    {
        // validation for constraint: array
        if ('' !== ($conditionArrayErrorMessage = self::validateConditionForArrayConstraintsFromSetCondition($condition))) {
            throw new InvalidArgumentException($conditionArrayErrorMessage, __LINE__);
        }
        $this->Condition = $condition;
        
        return $this;
    }
    /**
     * Add item to Condition value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ConditionType $item
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
     */
    public function addToCondition(\macropage\ebaysdk\trading\StructType\ConditionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ConditionType) {
            throw new InvalidArgumentException(sprintf('The Condition property can only contain items of type \macropage\ebaysdk\trading\StructType\ConditionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Condition[] = $item;
        
        return $this;
    }
    /**
     * Get ConditionHelpURL value
     * @return string|null
     */
    public function getConditionHelpURL(): ?string
    {
        return $this->ConditionHelpURL;
    }
    /**
     * Set ConditionHelpURL value
     * @param string $conditionHelpURL
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
     */
    public function setConditionHelpURL(?string $conditionHelpURL = null): self
    {
        // validation for constraint: string
        if (!is_null($conditionHelpURL) && !is_string($conditionHelpURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conditionHelpURL, true), gettype($conditionHelpURL)), __LINE__);
        }
        $this->ConditionHelpURL = $conditionHelpURL;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ConditionValuesType
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
