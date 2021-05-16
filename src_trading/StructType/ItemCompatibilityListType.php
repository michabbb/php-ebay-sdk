<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityListType StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of compatible applications specified as name and value pairs. Describes an assembly with which a part is compatible (i.e., parts compatibility by application). For example, to specify a part's compatibility with a vehicle, the
 * name would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values would desribe the specific vehicle, such as a 2006 Honda Accord.
 * @subpackage Structs
 */
class ItemCompatibilityListType extends AbstractStructBase
{
    /**
     * The Compatibility
     * Meta information extracted from the WSDL
     * - documentation: Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility
     * nodes. <br/><br/> <span class="tablenote"> <strong>Note:</strong> For the <b>GetItem</b> call, <strong>Compatibility</strong> includes only parts compatibility details that were specified manually; that is, they do not correspond to an eBay catalog
     * product. To retrieve parts compatibility details that <em>do</em> correspond to eBay catalog products, use the eBay Product API's <b>getProductCompatibilities</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemCompatibilityType[]
     */
    protected array $Compatibility = [];
    /**
     * The ReplaceAll
     * Meta information extracted from the WSDL
     * - documentation: Set this value to true to delete or replace all existing parts compatibility information when you revise or relist an item. If set to true, all existing item parts compatibility nodes are removed from the listing. If new item
     * compatibilities are specified in the request, they replace the removed compatibilities. <br/><br/> <span class="tablenote"> <strong>Note:</strong> To ensure that buyer expectations are upheld, you cannot delete or replace an item parts compatibility
     * list if the listing has bids or if the auction ends within 12 hours. </span>
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReplaceAll = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ItemCompatibilityListType
     * @uses ItemCompatibilityListType::setCompatibility()
     * @uses ItemCompatibilityListType::setReplaceAll()
     * @uses ItemCompatibilityListType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityType[] $compatibility
     * @param bool $replaceAll
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $compatibility = [], ?bool $replaceAll = null, $any = null)
    {
        $this
            ->setCompatibility($compatibility)
            ->setReplaceAll($replaceAll)
            ->setAny($any);
    }
    /**
     * Get Compatibility value
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityType[]
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
            if (!$itemCompatibilityListTypeCompatibilityItem instanceof \macropage\ebaysdk\trading\StructType\ItemCompatibilityType) {
                $invalidValues[] = is_object($itemCompatibilityListTypeCompatibilityItem) ? get_class($itemCompatibilityListTypeCompatibilityItem) : sprintf('%s(%s)', gettype($itemCompatibilityListTypeCompatibilityItem), var_export($itemCompatibilityListTypeCompatibilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Compatibility property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemCompatibilityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Compatibility value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityType[] $compatibility
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
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
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityType $item
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
     */
    public function addToCompatibility(\macropage\ebaysdk\trading\StructType\ItemCompatibilityType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemCompatibilityType) {
            throw new InvalidArgumentException(sprintf('The Compatibility property can only contain items of type \macropage\ebaysdk\trading\StructType\ItemCompatibilityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Compatibility[] = $item;
        
        return $this;
    }
    /**
     * Get ReplaceAll value
     * @return bool|null
     */
    public function getReplaceAll(): ?bool
    {
        return $this->ReplaceAll;
    }
    /**
     * Set ReplaceAll value
     * @param bool $replaceAll
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
     */
    public function setReplaceAll(?bool $replaceAll = null): self
    {
        // validation for constraint: boolean
        if (!is_null($replaceAll) && !is_bool($replaceAll)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replaceAll, true), gettype($replaceAll)), __LINE__);
        }
        $this->ReplaceAll = $replaceAll;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
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
