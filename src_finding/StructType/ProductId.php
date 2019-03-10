<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductId StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type that represents the unique identifier for a single product.
 * @subpackage Structs
 */
class ProductId extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: The nature of the product identifier being used. Applies to findCompletedItems and findItemsByProduct. <dl> <dt> <strong>productId values:</strong> </dt> <dt> ReferenceID </dt> <dd> The eBay Product ID (ePID) for an eBay catalog
     * product. Use FindProducts in the Shopping API to determine valid ePID values that you can use as input to findItemsByProduct or findCompletedItems. Each product in the response includes its ePID. </dd> <dt> ISBN </dt> <dd> ISBN-10 or ISBN-13 value
     * for books. (The string length of ProductID indicates whether the ID is 10 or 13 characters.) If you know a book's ISBN, you can use this instead of the eBay Reference ID to search for that book. Max length of corresponding value: 13 </dd> <dt> UPC
     * </dt> <dd> UPC value for products in Music (for example, CDs), DVDs & Movies, and Video Games categories. If you know a product's UPC, you can use this instead of the eBay Reference ID to search for that product. Max length of corresponding value: 12
     * </dd> <dt> EAN </dt> <dd> EAN value for books. (This is used more commonly in European countries.) If you know a book's EAN, you can use this instead of the eBay Reference ID to search for that book. Max length of corresponding value: 13 </dd> </dl>
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for ProductId
     * @uses ProductId::setType()
     * @uses ProductId::set_()
     * @param string $type
     * @param string $_
     */
    public function __construct($type = null, $_ = null)
    {
        $this
            ->setType($type)
            ->set_($_);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \macropage\ebaysdk\finding\StructType\ProductId
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \macropage\ebaysdk\finding\StructType\ProductId
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\ProductId
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
