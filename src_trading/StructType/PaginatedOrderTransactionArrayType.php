<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedOrderTransactionArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a paginated list of orders.
 * @subpackage Structs
 */
class PaginatedOrderTransactionArrayType extends AbstractStructBase
{
    /**
     * The OrderTransactionArray
     * Meta informations extracted from the WSDL
     * - documentation: Contains the list of orders.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType
     */
    public $OrderTransactionArray;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Specifies information about the list, including number of pages and number of entries.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PaginatedOrderTransactionArrayType
     * @uses PaginatedOrderTransactionArrayType::setOrderTransactionArray()
     * @uses PaginatedOrderTransactionArrayType::setPaginationResult()
     * @uses PaginatedOrderTransactionArrayType::setAny()
     * @param \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $orderTransactionArray
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $orderTransactionArray = null, \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, \DOMDocument $any = null)
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
    public function getOrderTransactionArray()
    {
        return $this->OrderTransactionArray;
    }
    /**
     * Set OrderTransactionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $orderTransactionArray
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
     */
    public function setOrderTransactionArray(\macropage\ebaysdk\trading\ArrayType\OrderTransactionArrayType $orderTransactionArray = null)
    {
        $this->OrderTransactionArray = $orderTransactionArray;
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \macropage\ebaysdk\trading\StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
     */
    public function setPaginationResult(\macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\PaginatedOrderTransactionArrayType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
