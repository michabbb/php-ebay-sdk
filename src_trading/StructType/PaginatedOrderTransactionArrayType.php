<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedOrderTransactionArrayType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a paginated list of orders.
 * @subpackage Structs
 */
class PaginatedOrderTransactionArrayType extends AbstractStructBase
{
    /**
     * The OrderTransactionArray
     * Meta information extracted from the WSDL
     * - documentation: Contains the list of orders.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $OrderTransactionArray = null;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Specifies information about the list, including number of pages and number of entries.
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
     * Constructor method for PaginatedOrderTransactionArrayType
     * @uses PaginatedOrderTransactionArrayType::setOrderTransactionArray()
     * @uses PaginatedOrderTransactionArrayType::setPaginationResult()
     * @uses PaginatedOrderTransactionArrayType::setAny()
     * @param \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $orderTransactionArray
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $orderTransactionArray = null, ?\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, $any = null)
    {
        $this
            ->setOrderTransactionArray($orderTransactionArray)
            ->setPaginationResult($paginationResult)
            ->setAny($any);
    }
    /**
     * Get OrderTransactionArray value
     * @return \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType|null
     */
    public function getOrderTransactionArray(): ?\macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType
    {
        return $this->OrderTransactionArray;
    }
    /**
     * Set OrderTransactionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $orderTransactionArray
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
     */
    public function setOrderTransactionArray(?\macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $orderTransactionArray = null): self
    {
        $this->OrderTransactionArray = $orderTransactionArray;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
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
