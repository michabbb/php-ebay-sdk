<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaginatedItemArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a paginated list of items.
 * @subpackage Structs
 */
class PaginatedItemArrayType extends AbstractStructBase
{
    /**
     * The ItemArray
     * Meta informations extracted from the WSDL
     * - documentation: Contains a list of Item types.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public $ItemArray;
    /**
     * The PaginationResult
     * Meta informations extracted from the WSDL
     * - documentation: Provides information about the list, including number of pages and number of entries.
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
     * Constructor method for PaginatedItemArrayType
     * @uses PaginatedItemArrayType::setItemArray()
     * @uses PaginatedItemArrayType::setPaginationResult()
     * @uses PaginatedItemArrayType::setAny()
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @param \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null, \macropage\ebaysdk\trading\StructType\PaginationResultType $paginationResult = null, \DOMDocument $any = null)
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
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
     */
    public function setItemArray(\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
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
     * @uses \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\PaginatedItemArrayType
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
