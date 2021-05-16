<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerSaleRecordResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response to a <b>GetSellingManagerSaleRecord</b> call.
 * @subpackage Structs
 */
class GetSellingManagerSaleRecordResponseType extends AbstractResponseType
{
    /**
     * The SellingManagerSoldOrder
     * Meta information extracted from the WSDL
     * - documentation: Contains the data in a Selling Manager Sale Record.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $SellingManagerSoldOrder = null;
    /**
     * Constructor method for GetSellingManagerSaleRecordResponseType
     * @uses GetSellingManagerSaleRecordResponseType::setSellingManagerSoldOrder()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null)
    {
        $this
            ->setSellingManagerSoldOrder($sellingManagerSoldOrder);
    }
    /**
     * Get SellingManagerSoldOrder value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType|null
     */
    public function getSellingManagerSoldOrder(): ?\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType
    {
        return $this->SellingManagerSoldOrder;
    }
    /**
     * Set SellingManagerSoldOrder value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerSaleRecordResponseType
     */
    public function setSellingManagerSoldOrder(?\macropage\ebaysdk\trading\StructType\SellingManagerSoldOrderType $sellingManagerSoldOrder = null): self
    {
        $this->SellingManagerSoldOrder = $sellingManagerSoldOrder;
        
        return $this;
    }
}
