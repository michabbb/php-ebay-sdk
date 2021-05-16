<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSearchResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductSearchResultType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The NumProducts
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NumProducts = null;
    /**
     * The AttributeSet
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType[]
     */
    protected array $AttributeSet = [];
    /**
     * The DisplayStockPhotos
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DisplayStockPhotos = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ProductSearchResultType
     * @uses ProductSearchResultType::setID()
     * @uses ProductSearchResultType::setNumProducts()
     * @uses ProductSearchResultType::setAttributeSet()
     * @uses ProductSearchResultType::setDisplayStockPhotos()
     * @uses ProductSearchResultType::setAny()
     * @param string $iD
     * @param string $numProducts
     * @param \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType[] $attributeSet
     * @param bool $displayStockPhotos
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $iD = null, ?string $numProducts = null, array $attributeSet = [], ?bool $displayStockPhotos = null, $any = null)
    {
        $this
            ->setID($iD)
            ->setNumProducts($numProducts)
            ->setAttributeSet($attributeSet)
            ->setDisplayStockPhotos($displayStockPhotos)
            ->setAny($any);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get NumProducts value
     * @return string|null
     */
    public function getNumProducts(): ?string
    {
        return $this->NumProducts;
    }
    /**
     * Set NumProducts value
     * @param string $numProducts
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function setNumProducts(?string $numProducts = null): self
    {
        // validation for constraint: string
        if (!is_null($numProducts) && !is_string($numProducts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numProducts, true), gettype($numProducts)), __LINE__);
        }
        $this->NumProducts = $numProducts;
        
        return $this;
    }
    /**
     * Get AttributeSet value
     * @return \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType[]
     */
    public function getAttributeSet(): array
    {
        return $this->AttributeSet;
    }
    /**
     * This method is responsible for validating the values passed to the setAttributeSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttributeSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeSetForArrayConstraintsFromSetAttributeSet(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productSearchResultTypeAttributeSetItem) {
            // validation for constraint: itemType
            if (!$productSearchResultTypeAttributeSetItem instanceof \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType) {
                $invalidValues[] = is_object($productSearchResultTypeAttributeSetItem) ? get_class($productSearchResultTypeAttributeSetItem) : sprintf('%s(%s)', gettype($productSearchResultTypeAttributeSetItem), var_export($productSearchResultTypeAttributeSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttributeSet property can only contain items of type \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AttributeSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType[] $attributeSet
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function setAttributeSet(array $attributeSet = []): self
    {
        // validation for constraint: array
        if ('' !== ($attributeSetArrayErrorMessage = self::validateAttributeSetForArrayConstraintsFromSetAttributeSet($attributeSet))) {
            throw new InvalidArgumentException($attributeSetArrayErrorMessage, __LINE__);
        }
        $this->AttributeSet = $attributeSet;
        
        return $this;
    }
    /**
     * Add item to AttributeSet value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType $item
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function addToAttributeSet(\macropage\ebaysdk\trading\StructType\ResponseAttributeSetType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType) {
            throw new InvalidArgumentException(sprintf('The AttributeSet property can only contain items of type \macropage\ebaysdk\trading\StructType\ResponseAttributeSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AttributeSet[] = $item;
        
        return $this;
    }
    /**
     * Get DisplayStockPhotos value
     * @return bool|null
     */
    public function getDisplayStockPhotos(): ?bool
    {
        return $this->DisplayStockPhotos;
    }
    /**
     * Set DisplayStockPhotos value
     * @param bool $displayStockPhotos
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
     */
    public function setDisplayStockPhotos(?bool $displayStockPhotos = null): self
    {
        // validation for constraint: boolean
        if (!is_null($displayStockPhotos) && !is_bool($displayStockPhotos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayStockPhotos, true), gettype($displayStockPhotos)), __LINE__);
        }
        $this->DisplayStockPhotos = $displayStockPhotos;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSearchResultType
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
