<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemindersType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains the counts of various eBay Buying and Seller Reminders that are returned in the <b>GetMyeBayReminders</b> call.
 * @subpackage Structs
 */
class RemindersType extends AbstractStructBase
{
    /**
     * The PaymentToSendCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting that the buyer send payment.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PaymentToSendCount = null;
    /**
     * The FeedbackToReceiveCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders that feedback has not yet been received by the buyer or seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FeedbackToReceiveCount = null;
    /**
     * The FeedbackToSendCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders that feedback has not yet been sent by the buyer or seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FeedbackToSendCount = null;
    /**
     * The OutbidCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders advising the buyer that the buyer has been outbid.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OutbidCount = null;
    /**
     * The PaymentToReceiveCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders that the seller has not yet received a payment.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PaymentToReceiveCount = null;
    /**
     * The SecondChanceOfferCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting that the seller review second chance offers.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SecondChanceOfferCount = null;
    /**
     * The ShippingNeededCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders advising the seller that shipping is needed.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingNeededCount = null;
    /**
     * The RelistingNeededCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders advising the seller that relisting is needed.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RelistingNeededCount = null;
    /**
     * The TotalNewLeadsCount
     * Meta information extracted from the WSDL
     * - documentation: The number of new leads the seller has recieved.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalNewLeadsCount = null;
    /**
     * The DocsForCCProcessingToSendCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders advising the buyer to send documents for credit card processing.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DocsForCCProcessingToSendCount = null;
    /**
     * The RTEToProcessCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting the buyer to process request time extension submitted by the seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RTEToProcessCount = null;
    /**
     * The ItemReceiptToConfirmCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting the Buyer to confirm item receipt to seller.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemReceiptToConfirmCount = null;
    /**
     * The RefundOnHoldCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the buyer on refund on hold.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RefundOnHoldCount = null;
    /**
     * The RefundCancelledCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the buyer on refund cancelled.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RefundCancelledCount = null;
    /**
     * The ShippingDetailsToBeProvidedCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders requesting the seller to provide shipping details
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ShippingDetailsToBeProvidedCount = null;
    /**
     * The ItemReceiptConfirmationToReceiveCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the seller on item receipt confirmation pending from buyer
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ItemReceiptConfirmationToReceiveCount = null;
    /**
     * The RefundInitiatedCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the seller on refunds initiated
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RefundInitiatedCount = null;
    /**
     * The PendingRTERequestCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the seller on pending shipping time extension requests with the buyer
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PendingRTERequestCount = null;
    /**
     * The DeclinedRTERequestCount
     * Meta information extracted from the WSDL
     * - documentation: The number of reminders to the seller on declined shipping time extension requests by the buyer
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DeclinedRTERequestCount = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RemindersType
     * @uses RemindersType::setPaymentToSendCount()
     * @uses RemindersType::setFeedbackToReceiveCount()
     * @uses RemindersType::setFeedbackToSendCount()
     * @uses RemindersType::setOutbidCount()
     * @uses RemindersType::setPaymentToReceiveCount()
     * @uses RemindersType::setSecondChanceOfferCount()
     * @uses RemindersType::setShippingNeededCount()
     * @uses RemindersType::setRelistingNeededCount()
     * @uses RemindersType::setTotalNewLeadsCount()
     * @uses RemindersType::setDocsForCCProcessingToSendCount()
     * @uses RemindersType::setRTEToProcessCount()
     * @uses RemindersType::setItemReceiptToConfirmCount()
     * @uses RemindersType::setRefundOnHoldCount()
     * @uses RemindersType::setRefundCancelledCount()
     * @uses RemindersType::setShippingDetailsToBeProvidedCount()
     * @uses RemindersType::setItemReceiptConfirmationToReceiveCount()
     * @uses RemindersType::setRefundInitiatedCount()
     * @uses RemindersType::setPendingRTERequestCount()
     * @uses RemindersType::setDeclinedRTERequestCount()
     * @uses RemindersType::setAny()
     * @param int $paymentToSendCount
     * @param int $feedbackToReceiveCount
     * @param int $feedbackToSendCount
     * @param int $outbidCount
     * @param int $paymentToReceiveCount
     * @param int $secondChanceOfferCount
     * @param int $shippingNeededCount
     * @param int $relistingNeededCount
     * @param int $totalNewLeadsCount
     * @param int $docsForCCProcessingToSendCount
     * @param int $rTEToProcessCount
     * @param int $itemReceiptToConfirmCount
     * @param int $refundOnHoldCount
     * @param int $refundCancelledCount
     * @param int $shippingDetailsToBeProvidedCount
     * @param int $itemReceiptConfirmationToReceiveCount
     * @param int $refundInitiatedCount
     * @param int $pendingRTERequestCount
     * @param int $declinedRTERequestCount
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $paymentToSendCount = null, ?int $feedbackToReceiveCount = null, ?int $feedbackToSendCount = null, ?int $outbidCount = null, ?int $paymentToReceiveCount = null, ?int $secondChanceOfferCount = null, ?int $shippingNeededCount = null, ?int $relistingNeededCount = null, ?int $totalNewLeadsCount = null, ?int $docsForCCProcessingToSendCount = null, ?int $rTEToProcessCount = null, ?int $itemReceiptToConfirmCount = null, ?int $refundOnHoldCount = null, ?int $refundCancelledCount = null, ?int $shippingDetailsToBeProvidedCount = null, ?int $itemReceiptConfirmationToReceiveCount = null, ?int $refundInitiatedCount = null, ?int $pendingRTERequestCount = null, ?int $declinedRTERequestCount = null, $any = null)
    {
        $this
            ->setPaymentToSendCount($paymentToSendCount)
            ->setFeedbackToReceiveCount($feedbackToReceiveCount)
            ->setFeedbackToSendCount($feedbackToSendCount)
            ->setOutbidCount($outbidCount)
            ->setPaymentToReceiveCount($paymentToReceiveCount)
            ->setSecondChanceOfferCount($secondChanceOfferCount)
            ->setShippingNeededCount($shippingNeededCount)
            ->setRelistingNeededCount($relistingNeededCount)
            ->setTotalNewLeadsCount($totalNewLeadsCount)
            ->setDocsForCCProcessingToSendCount($docsForCCProcessingToSendCount)
            ->setRTEToProcessCount($rTEToProcessCount)
            ->setItemReceiptToConfirmCount($itemReceiptToConfirmCount)
            ->setRefundOnHoldCount($refundOnHoldCount)
            ->setRefundCancelledCount($refundCancelledCount)
            ->setShippingDetailsToBeProvidedCount($shippingDetailsToBeProvidedCount)
            ->setItemReceiptConfirmationToReceiveCount($itemReceiptConfirmationToReceiveCount)
            ->setRefundInitiatedCount($refundInitiatedCount)
            ->setPendingRTERequestCount($pendingRTERequestCount)
            ->setDeclinedRTERequestCount($declinedRTERequestCount)
            ->setAny($any);
    }
    /**
     * Get PaymentToSendCount value
     * @return int|null
     */
    public function getPaymentToSendCount(): ?int
    {
        return $this->PaymentToSendCount;
    }
    /**
     * Set PaymentToSendCount value
     * @param int $paymentToSendCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setPaymentToSendCount(?int $paymentToSendCount = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentToSendCount) && !(is_int($paymentToSendCount) || ctype_digit($paymentToSendCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentToSendCount, true), gettype($paymentToSendCount)), __LINE__);
        }
        $this->PaymentToSendCount = $paymentToSendCount;
        
        return $this;
    }
    /**
     * Get FeedbackToReceiveCount value
     * @return int|null
     */
    public function getFeedbackToReceiveCount(): ?int
    {
        return $this->FeedbackToReceiveCount;
    }
    /**
     * Set FeedbackToReceiveCount value
     * @param int $feedbackToReceiveCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setFeedbackToReceiveCount(?int $feedbackToReceiveCount = null): self
    {
        // validation for constraint: int
        if (!is_null($feedbackToReceiveCount) && !(is_int($feedbackToReceiveCount) || ctype_digit($feedbackToReceiveCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackToReceiveCount, true), gettype($feedbackToReceiveCount)), __LINE__);
        }
        $this->FeedbackToReceiveCount = $feedbackToReceiveCount;
        
        return $this;
    }
    /**
     * Get FeedbackToSendCount value
     * @return int|null
     */
    public function getFeedbackToSendCount(): ?int
    {
        return $this->FeedbackToSendCount;
    }
    /**
     * Set FeedbackToSendCount value
     * @param int $feedbackToSendCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setFeedbackToSendCount(?int $feedbackToSendCount = null): self
    {
        // validation for constraint: int
        if (!is_null($feedbackToSendCount) && !(is_int($feedbackToSendCount) || ctype_digit($feedbackToSendCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feedbackToSendCount, true), gettype($feedbackToSendCount)), __LINE__);
        }
        $this->FeedbackToSendCount = $feedbackToSendCount;
        
        return $this;
    }
    /**
     * Get OutbidCount value
     * @return int|null
     */
    public function getOutbidCount(): ?int
    {
        return $this->OutbidCount;
    }
    /**
     * Set OutbidCount value
     * @param int $outbidCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setOutbidCount(?int $outbidCount = null): self
    {
        // validation for constraint: int
        if (!is_null($outbidCount) && !(is_int($outbidCount) || ctype_digit($outbidCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($outbidCount, true), gettype($outbidCount)), __LINE__);
        }
        $this->OutbidCount = $outbidCount;
        
        return $this;
    }
    /**
     * Get PaymentToReceiveCount value
     * @return int|null
     */
    public function getPaymentToReceiveCount(): ?int
    {
        return $this->PaymentToReceiveCount;
    }
    /**
     * Set PaymentToReceiveCount value
     * @param int $paymentToReceiveCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setPaymentToReceiveCount(?int $paymentToReceiveCount = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentToReceiveCount) && !(is_int($paymentToReceiveCount) || ctype_digit($paymentToReceiveCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentToReceiveCount, true), gettype($paymentToReceiveCount)), __LINE__);
        }
        $this->PaymentToReceiveCount = $paymentToReceiveCount;
        
        return $this;
    }
    /**
     * Get SecondChanceOfferCount value
     * @return int|null
     */
    public function getSecondChanceOfferCount(): ?int
    {
        return $this->SecondChanceOfferCount;
    }
    /**
     * Set SecondChanceOfferCount value
     * @param int $secondChanceOfferCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setSecondChanceOfferCount(?int $secondChanceOfferCount = null): self
    {
        // validation for constraint: int
        if (!is_null($secondChanceOfferCount) && !(is_int($secondChanceOfferCount) || ctype_digit($secondChanceOfferCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($secondChanceOfferCount, true), gettype($secondChanceOfferCount)), __LINE__);
        }
        $this->SecondChanceOfferCount = $secondChanceOfferCount;
        
        return $this;
    }
    /**
     * Get ShippingNeededCount value
     * @return int|null
     */
    public function getShippingNeededCount(): ?int
    {
        return $this->ShippingNeededCount;
    }
    /**
     * Set ShippingNeededCount value
     * @param int $shippingNeededCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setShippingNeededCount(?int $shippingNeededCount = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingNeededCount) && !(is_int($shippingNeededCount) || ctype_digit($shippingNeededCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingNeededCount, true), gettype($shippingNeededCount)), __LINE__);
        }
        $this->ShippingNeededCount = $shippingNeededCount;
        
        return $this;
    }
    /**
     * Get RelistingNeededCount value
     * @return int|null
     */
    public function getRelistingNeededCount(): ?int
    {
        return $this->RelistingNeededCount;
    }
    /**
     * Set RelistingNeededCount value
     * @param int $relistingNeededCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setRelistingNeededCount(?int $relistingNeededCount = null): self
    {
        // validation for constraint: int
        if (!is_null($relistingNeededCount) && !(is_int($relistingNeededCount) || ctype_digit($relistingNeededCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($relistingNeededCount, true), gettype($relistingNeededCount)), __LINE__);
        }
        $this->RelistingNeededCount = $relistingNeededCount;
        
        return $this;
    }
    /**
     * Get TotalNewLeadsCount value
     * @return int|null
     */
    public function getTotalNewLeadsCount(): ?int
    {
        return $this->TotalNewLeadsCount;
    }
    /**
     * Set TotalNewLeadsCount value
     * @param int $totalNewLeadsCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setTotalNewLeadsCount(?int $totalNewLeadsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNewLeadsCount) && !(is_int($totalNewLeadsCount) || ctype_digit($totalNewLeadsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNewLeadsCount, true), gettype($totalNewLeadsCount)), __LINE__);
        }
        $this->TotalNewLeadsCount = $totalNewLeadsCount;
        
        return $this;
    }
    /**
     * Get DocsForCCProcessingToSendCount value
     * @return int|null
     */
    public function getDocsForCCProcessingToSendCount(): ?int
    {
        return $this->DocsForCCProcessingToSendCount;
    }
    /**
     * Set DocsForCCProcessingToSendCount value
     * @param int $docsForCCProcessingToSendCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setDocsForCCProcessingToSendCount(?int $docsForCCProcessingToSendCount = null): self
    {
        // validation for constraint: int
        if (!is_null($docsForCCProcessingToSendCount) && !(is_int($docsForCCProcessingToSendCount) || ctype_digit($docsForCCProcessingToSendCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($docsForCCProcessingToSendCount, true), gettype($docsForCCProcessingToSendCount)), __LINE__);
        }
        $this->DocsForCCProcessingToSendCount = $docsForCCProcessingToSendCount;
        
        return $this;
    }
    /**
     * Get RTEToProcessCount value
     * @return int|null
     */
    public function getRTEToProcessCount(): ?int
    {
        return $this->RTEToProcessCount;
    }
    /**
     * Set RTEToProcessCount value
     * @param int $rTEToProcessCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setRTEToProcessCount(?int $rTEToProcessCount = null): self
    {
        // validation for constraint: int
        if (!is_null($rTEToProcessCount) && !(is_int($rTEToProcessCount) || ctype_digit($rTEToProcessCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rTEToProcessCount, true), gettype($rTEToProcessCount)), __LINE__);
        }
        $this->RTEToProcessCount = $rTEToProcessCount;
        
        return $this;
    }
    /**
     * Get ItemReceiptToConfirmCount value
     * @return int|null
     */
    public function getItemReceiptToConfirmCount(): ?int
    {
        return $this->ItemReceiptToConfirmCount;
    }
    /**
     * Set ItemReceiptToConfirmCount value
     * @param int $itemReceiptToConfirmCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setItemReceiptToConfirmCount(?int $itemReceiptToConfirmCount = null): self
    {
        // validation for constraint: int
        if (!is_null($itemReceiptToConfirmCount) && !(is_int($itemReceiptToConfirmCount) || ctype_digit($itemReceiptToConfirmCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemReceiptToConfirmCount, true), gettype($itemReceiptToConfirmCount)), __LINE__);
        }
        $this->ItemReceiptToConfirmCount = $itemReceiptToConfirmCount;
        
        return $this;
    }
    /**
     * Get RefundOnHoldCount value
     * @return int|null
     */
    public function getRefundOnHoldCount(): ?int
    {
        return $this->RefundOnHoldCount;
    }
    /**
     * Set RefundOnHoldCount value
     * @param int $refundOnHoldCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setRefundOnHoldCount(?int $refundOnHoldCount = null): self
    {
        // validation for constraint: int
        if (!is_null($refundOnHoldCount) && !(is_int($refundOnHoldCount) || ctype_digit($refundOnHoldCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refundOnHoldCount, true), gettype($refundOnHoldCount)), __LINE__);
        }
        $this->RefundOnHoldCount = $refundOnHoldCount;
        
        return $this;
    }
    /**
     * Get RefundCancelledCount value
     * @return int|null
     */
    public function getRefundCancelledCount(): ?int
    {
        return $this->RefundCancelledCount;
    }
    /**
     * Set RefundCancelledCount value
     * @param int $refundCancelledCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setRefundCancelledCount(?int $refundCancelledCount = null): self
    {
        // validation for constraint: int
        if (!is_null($refundCancelledCount) && !(is_int($refundCancelledCount) || ctype_digit($refundCancelledCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refundCancelledCount, true), gettype($refundCancelledCount)), __LINE__);
        }
        $this->RefundCancelledCount = $refundCancelledCount;
        
        return $this;
    }
    /**
     * Get ShippingDetailsToBeProvidedCount value
     * @return int|null
     */
    public function getShippingDetailsToBeProvidedCount(): ?int
    {
        return $this->ShippingDetailsToBeProvidedCount;
    }
    /**
     * Set ShippingDetailsToBeProvidedCount value
     * @param int $shippingDetailsToBeProvidedCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setShippingDetailsToBeProvidedCount(?int $shippingDetailsToBeProvidedCount = null): self
    {
        // validation for constraint: int
        if (!is_null($shippingDetailsToBeProvidedCount) && !(is_int($shippingDetailsToBeProvidedCount) || ctype_digit($shippingDetailsToBeProvidedCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingDetailsToBeProvidedCount, true), gettype($shippingDetailsToBeProvidedCount)), __LINE__);
        }
        $this->ShippingDetailsToBeProvidedCount = $shippingDetailsToBeProvidedCount;
        
        return $this;
    }
    /**
     * Get ItemReceiptConfirmationToReceiveCount value
     * @return int|null
     */
    public function getItemReceiptConfirmationToReceiveCount(): ?int
    {
        return $this->ItemReceiptConfirmationToReceiveCount;
    }
    /**
     * Set ItemReceiptConfirmationToReceiveCount value
     * @param int $itemReceiptConfirmationToReceiveCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setItemReceiptConfirmationToReceiveCount(?int $itemReceiptConfirmationToReceiveCount = null): self
    {
        // validation for constraint: int
        if (!is_null($itemReceiptConfirmationToReceiveCount) && !(is_int($itemReceiptConfirmationToReceiveCount) || ctype_digit($itemReceiptConfirmationToReceiveCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemReceiptConfirmationToReceiveCount, true), gettype($itemReceiptConfirmationToReceiveCount)), __LINE__);
        }
        $this->ItemReceiptConfirmationToReceiveCount = $itemReceiptConfirmationToReceiveCount;
        
        return $this;
    }
    /**
     * Get RefundInitiatedCount value
     * @return int|null
     */
    public function getRefundInitiatedCount(): ?int
    {
        return $this->RefundInitiatedCount;
    }
    /**
     * Set RefundInitiatedCount value
     * @param int $refundInitiatedCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setRefundInitiatedCount(?int $refundInitiatedCount = null): self
    {
        // validation for constraint: int
        if (!is_null($refundInitiatedCount) && !(is_int($refundInitiatedCount) || ctype_digit($refundInitiatedCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refundInitiatedCount, true), gettype($refundInitiatedCount)), __LINE__);
        }
        $this->RefundInitiatedCount = $refundInitiatedCount;
        
        return $this;
    }
    /**
     * Get PendingRTERequestCount value
     * @return int|null
     */
    public function getPendingRTERequestCount(): ?int
    {
        return $this->PendingRTERequestCount;
    }
    /**
     * Set PendingRTERequestCount value
     * @param int $pendingRTERequestCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setPendingRTERequestCount(?int $pendingRTERequestCount = null): self
    {
        // validation for constraint: int
        if (!is_null($pendingRTERequestCount) && !(is_int($pendingRTERequestCount) || ctype_digit($pendingRTERequestCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pendingRTERequestCount, true), gettype($pendingRTERequestCount)), __LINE__);
        }
        $this->PendingRTERequestCount = $pendingRTERequestCount;
        
        return $this;
    }
    /**
     * Get DeclinedRTERequestCount value
     * @return int|null
     */
    public function getDeclinedRTERequestCount(): ?int
    {
        return $this->DeclinedRTERequestCount;
    }
    /**
     * Set DeclinedRTERequestCount value
     * @param int $declinedRTERequestCount
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
     */
    public function setDeclinedRTERequestCount(?int $declinedRTERequestCount = null): self
    {
        // validation for constraint: int
        if (!is_null($declinedRTERequestCount) && !(is_int($declinedRTERequestCount) || ctype_digit($declinedRTERequestCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($declinedRTERequestCount, true), gettype($declinedRTERequestCount)), __LINE__);
        }
        $this->DeclinedRTERequestCount = $declinedRTERequestCount;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RemindersType
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
