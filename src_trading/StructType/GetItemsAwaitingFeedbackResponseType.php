<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemsAwaitingFeedbackResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetItemsAwaitingFeedback</b> call. This call retrieves all completed order line items for which the user (buyer or seller) still needs to leave Feedback for their order partner.
 * @subpackage Structs
 */
class GetItemsAwaitingFeedbackResponseType extends AbstractResponseType
{
    /**
     * The ItemsAwaitingFeedback
     * Meta information extracted from the WSDL
     * - documentation: This container consists of one or more order line items that are awaiting Feedback from the user that made the call. Each order line item is returned in its own <b>TransactionArray.Transaction</b> container. <br><br> This container
     * will not be returned if no order line items are awaiting Feedback from the user who made the call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $ItemsAwaitingFeedback = null;
    /**
     * Constructor method for GetItemsAwaitingFeedbackResponseType
     * @uses GetItemsAwaitingFeedbackResponseType::setItemsAwaitingFeedback()
     * @param \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $itemsAwaitingFeedback
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $itemsAwaitingFeedback = null)
    {
        $this
            ->setItemsAwaitingFeedback($itemsAwaitingFeedback);
    }
    /**
     * Get ItemsAwaitingFeedback value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType|null
     */
    public function getItemsAwaitingFeedback(): ?\macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType
    {
        return $this->ItemsAwaitingFeedback;
    }
    /**
     * Set ItemsAwaitingFeedback value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $itemsAwaitingFeedback
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackResponseType
     */
    public function setItemsAwaitingFeedback(?\macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $itemsAwaitingFeedback = null): self
    {
        $this->ItemsAwaitingFeedback = $itemsAwaitingFeedback;
        
        return $this;
    }
}
