<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemsAwaitingFeedbackResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is the base response type of the <b>GetItemsAwaitingFeedback</b> call. This call retrieves all completed order line items for which the user (buyer or seller) still needs to leave Feedback for their order partner.
 * @subpackage Structs
 */
class GetItemsAwaitingFeedbackResponseType extends AbstractResponseType
{
    /**
     * The ItemsAwaitingFeedback
     * Meta informations extracted from the WSDL
     * - documentation: This container consists of one or more order line items that are awaiting Feedback from the user that made the call. Each order line item is returned in its own <b>TransactionArray.Transaction</b> container. <br><br> This container
     * will not be returned if no order line items are awaiting Feedback from the user who made the call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType
     */
    public $ItemsAwaitingFeedback;
    /**
     * Constructor method for GetItemsAwaitingFeedbackResponseType
     * @uses GetItemsAwaitingFeedbackResponseType::setItemsAwaitingFeedback()
     * @param \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $itemsAwaitingFeedback
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $itemsAwaitingFeedback = null)
    {
        $this
            ->setItemsAwaitingFeedback($itemsAwaitingFeedback);
    }
    /**
     * Get ItemsAwaitingFeedback value
     * @return \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType|null
     */
    public function getItemsAwaitingFeedback()
    {
        return $this->ItemsAwaitingFeedback;
    }
    /**
     * Set ItemsAwaitingFeedback value
     * @param \macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $itemsAwaitingFeedback
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackResponseType
     */
    public function setItemsAwaitingFeedback(\macropage\ebaysdk\trading\StructType\PaginatedTransactionArrayType $itemsAwaitingFeedback = null)
    {
        $this->ItemsAwaitingFeedback = $itemsAwaitingFeedback;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetItemsAwaitingFeedbackResponseType
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
