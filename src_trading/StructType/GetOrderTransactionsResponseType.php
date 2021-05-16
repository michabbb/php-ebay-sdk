<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTransactionsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more eBay.com orders. An <b>OrderArray.Order</b> container is returned for each order that matches the input
 * criteria in the call request.
 * @subpackage Structs
 */
class GetOrderTransactionsResponseType extends AbstractResponseType
{
    /**
     * The OrderArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\OrderArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\OrderArrayType $OrderArray = null;
    /**
     * Constructor method for GetOrderTransactionsResponseType
     * @uses GetOrderTransactionsResponseType::setOrderArray()
     * @param \macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray
     */
    public function __construct(?\macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray = null)
    {
        $this
            ->setOrderArray($orderArray);
    }
    /**
     * Get OrderArray value
     * @return \macropage\ebaysdk\trading\ArrayType\OrderArrayType|null
     */
    public function getOrderArray(): ?\macropage\ebaysdk\trading\ArrayType\OrderArrayType
    {
        return $this->OrderArray;
    }
    /**
     * Set OrderArray value
     * @param \macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray
     * @return \macropage\ebaysdk\trading\StructType\GetOrderTransactionsResponseType
     */
    public function setOrderArray(?\macropage\ebaysdk\trading\ArrayType\OrderArrayType $orderArray = null): self
    {
        $this->OrderArray = $orderArray;
        
        return $this;
    }
}
