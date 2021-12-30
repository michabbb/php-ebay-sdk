<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelOfferArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CancelOfferArrayType extends AbstractStructBase
{
    /**
     * The CancelOffer
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CancelOfferType[]
     */
    protected ?array $CancelOffer = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CancelOfferArrayType
     * @uses CancelOfferArrayType::setCancelOffer()
     * @uses CancelOfferArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CancelOfferType[] $cancelOffer
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $cancelOffer = null, $any = null)
    {
        $this
            ->setCancelOffer($cancelOffer)
            ->setAny($any);
    }
    /**
     * Get CancelOffer value
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType[]
     */
    public function getCancelOffer(): ?array
    {
        return $this->CancelOffer;
    }
    /**
     * This method is responsible for validating the values passed to the setCancelOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCancelOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCancelOfferForArrayConstraintsFromSetCancelOffer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cancelOfferArrayTypeCancelOfferItem) {
            // validation for constraint: itemType
            if (!$cancelOfferArrayTypeCancelOfferItem instanceof \macropage\ebaysdk\trading\StructType\CancelOfferType) {
                $invalidValues[] = is_object($cancelOfferArrayTypeCancelOfferItem) ? get_class($cancelOfferArrayTypeCancelOfferItem) : sprintf('%s(%s)', gettype($cancelOfferArrayTypeCancelOfferItem), var_export($cancelOfferArrayTypeCancelOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CancelOffer property can only contain items of type \macropage\ebaysdk\trading\StructType\CancelOfferType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CancelOffer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CancelOfferType[] $cancelOffer
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferArrayType
     */
    public function setCancelOffer(?array $cancelOffer = null): self
    {
        // validation for constraint: array
        if ('' !== ($cancelOfferArrayErrorMessage = self::validateCancelOfferForArrayConstraintsFromSetCancelOffer($cancelOffer))) {
            throw new InvalidArgumentException($cancelOfferArrayErrorMessage, __LINE__);
        }
        $this->CancelOffer = $cancelOffer;
        
        return $this;
    }
    /**
     * Add item to CancelOffer value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CancelOfferType $item
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferArrayType
     */
    public function addToCancelOffer(\macropage\ebaysdk\trading\StructType\CancelOfferType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CancelOfferType) {
            throw new InvalidArgumentException(sprintf('The CancelOffer property can only contain items of type \macropage\ebaysdk\trading\StructType\CancelOfferType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CancelOffer[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferArrayType
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
