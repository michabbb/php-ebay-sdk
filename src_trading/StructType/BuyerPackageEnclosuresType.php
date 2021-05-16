<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerPackageEnclosuresType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerPackageEnclosures</b> container, which is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment
 * instructions in the shipping package(s). A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
 * @subpackage Structs
 */
class BuyerPackageEnclosuresType extends AbstractStructBase
{
    /**
     * The BuyerPackageEnclosure
     * Meta information extracted from the WSDL
     * - documentation: A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType[]
     */
    protected array $BuyerPackageEnclosure = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for BuyerPackageEnclosuresType
     * @uses BuyerPackageEnclosuresType::setBuyerPackageEnclosure()
     * @uses BuyerPackageEnclosuresType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $buyerPackageEnclosure = [], $any = null)
    {
        $this
            ->setBuyerPackageEnclosure($buyerPackageEnclosure)
            ->setAny($any);
    }
    /**
     * Get BuyerPackageEnclosure value
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType[]
     */
    public function getBuyerPackageEnclosure(): array
    {
        return $this->BuyerPackageEnclosure;
    }
    /**
     * This method is responsible for validating the values passed to the setBuyerPackageEnclosure method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuyerPackageEnclosure method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBuyerPackageEnclosureForArrayConstraintsFromSetBuyerPackageEnclosure(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) {
            // validation for constraint: itemType
            if (!$buyerPackageEnclosuresTypeBuyerPackageEnclosureItem instanceof \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType) {
                $invalidValues[] = is_object($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) ? get_class($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) : sprintf('%s(%s)', gettype($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem), var_export($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BuyerPackageEnclosure property can only contain items of type \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BuyerPackageEnclosure value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
     */
    public function setBuyerPackageEnclosure(array $buyerPackageEnclosure = []): self
    {
        // validation for constraint: array
        if ('' !== ($buyerPackageEnclosureArrayErrorMessage = self::validateBuyerPackageEnclosureForArrayConstraintsFromSetBuyerPackageEnclosure($buyerPackageEnclosure))) {
            throw new InvalidArgumentException($buyerPackageEnclosureArrayErrorMessage, __LINE__);
        }
        $this->BuyerPackageEnclosure = $buyerPackageEnclosure;
        
        return $this;
    }
    /**
     * Add item to BuyerPackageEnclosure value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType $item
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
     */
    public function addToBuyerPackageEnclosure(\macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType) {
            throw new InvalidArgumentException(sprintf('The BuyerPackageEnclosure property can only contain items of type \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BuyerPackageEnclosure[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
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
