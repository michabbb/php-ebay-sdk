<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the unique identifier of a regulatory document associated with the listing.
 * @subpackage Structs
 */
class DocumentType extends AbstractStructBase
{
    /**
     * The DocumentID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a regulatory document associated with the listing. <br /><br /> This value can be found in the response of the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument"
     * target="_blank">createDocument</a> method of the Media API.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DocumentID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DocumentType
     * @uses DocumentType::setDocumentID()
     * @uses DocumentType::setAny()
     * @param string $documentID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $documentID = null, $any = null)
    {
        $this
            ->setDocumentID($documentID)
            ->setAny($any);
    }
    /**
     * Get DocumentID value
     * @return string|null
     */
    public function getDocumentID(): ?string
    {
        return $this->DocumentID;
    }
    /**
     * Set DocumentID value
     * @param string $documentID
     * @return \macropage\ebaysdk\trading\StructType\DocumentType
     */
    public function setDocumentID(?string $documentID = null): self
    {
        // validation for constraint: string
        if (!is_null($documentID) && !is_string($documentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentID, true), gettype($documentID)), __LINE__);
        }
        $this->DocumentID = $documentID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DocumentType
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
