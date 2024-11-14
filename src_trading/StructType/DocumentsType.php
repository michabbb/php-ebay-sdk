<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type that provides an array of one or more regulatory documents associated with a listing for Regulatory Compliance. <br /> <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements
 * effective from December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide document information in their eBay listings. For more information on GPSR, see <a href =
 * "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
 * @subpackage Structs
 */
class DocumentsType extends AbstractStructBase
{
    /**
     * The Document
     * Meta information extracted from the WSDL
     * - documentation: A regulatory document associated with the listing.<br /><br />Regulatory documents can be created and uploaded using the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument"
     * target="_blank">createDocument</a> method of the Media API. A variety of document types can be provided for regulatory compliance. For a list of supported document types, see <a href = "/api-docs/commerce/media/types/api:DocumentTypeEnum"
     * target="_blank">DocumentTypeEnum</a>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DocumentType[]
     */
    protected ?array $Document = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DocumentsType
     * @uses DocumentsType::setDocument()
     * @uses DocumentsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\DocumentType[] $document
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?array $document = null, $any = null)
    {
        $this
            ->setDocument($document)
            ->setAny($any);
    }
    /**
     * Get Document value
     * @return \macropage\ebaysdk\trading\StructType\DocumentType[]
     */
    public function getDocument(): ?array
    {
        return $this->Document;
    }
    /**
     * This method is responsible for validating the values passed to the setDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentForArrayConstraintsFromSetDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $documentsTypeDocumentItem) {
            // validation for constraint: itemType
            if (!$documentsTypeDocumentItem instanceof \macropage\ebaysdk\trading\StructType\DocumentType) {
                $invalidValues[] = is_object($documentsTypeDocumentItem) ? get_class($documentsTypeDocumentItem) : sprintf('%s(%s)', gettype($documentsTypeDocumentItem), var_export($documentsTypeDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Document property can only contain items of type \macropage\ebaysdk\trading\StructType\DocumentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Document value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DocumentType[] $document
     * @return \macropage\ebaysdk\trading\StructType\DocumentsType
     */
    public function setDocument(?array $document = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentArrayErrorMessage = self::validateDocumentForArrayConstraintsFromSetDocument($document))) {
            throw new InvalidArgumentException($documentArrayErrorMessage, __LINE__);
        }
        $this->Document = $document;
        
        return $this;
    }
    /**
     * Add item to Document value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DocumentType $item
     * @return \macropage\ebaysdk\trading\StructType\DocumentsType
     */
    public function addToDocument(\macropage\ebaysdk\trading\StructType\DocumentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DocumentType) {
            throw new InvalidArgumentException(sprintf('The Document property can only contain items of type \macropage\ebaysdk\trading\StructType\DocumentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Document[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DocumentsType
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
