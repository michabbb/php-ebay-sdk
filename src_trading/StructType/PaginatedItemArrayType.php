<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedItemArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a paginated list of items.
 * @subpackage Structs
 */
class PaginatedItemArrayType extends AbstractStructBase
{
    /**
     * The ItemArray
     * Meta information extracted from the WSDL
     * - documentation: An array of one or more items returned under one or more containers in a <b>GetMyeBayBuying</b> or <b>GetMyeBaySelling</b> call response.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $ItemArray = null;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: This container shows the total numer of items that matched the input criteria and the total number of the results set. Users can use the <b>Pagination.PageNumber</b> field in the request to toggle through different pages in the
     * results set.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginationResultType $PaginationResult = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaginatedItemArrayType
     * @uses PaginatedItemArrayType::setItemArray()
     * @uses PaginatedItemArrayType::setPaginationResult()
     * @uses PaginatedItemArrayType::setAny()
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null, ?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $any = null)
    {
        $this
            ->setItemArray($itemArray)
            ->setPaginationResult($paginationResult)
            ->setAny($any);
    }
    /**
     * Get ItemArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    public function getItemArray(): ?\macropage\ebaysdk\trading\ArrayType\ItemArrayType
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
     */
    public function setItemArray(?\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null): self
    {
        $this->ItemArray = $itemArray;
        
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult(): ?\macropage\ebaysdk\trading\StructType\PaginationResultType
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
     */
    public function setPaginationResult(?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null): self
    {
        $this->PaginationResult = $paginationResult;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
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
