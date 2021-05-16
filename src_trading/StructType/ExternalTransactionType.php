<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container consisting of details related to payment of an eBay order on an external system such as PayPal. This container is only returned if payment has been made on an order. For <b>GetSellerTransaactions</b> and
 * <b>GetItemTransactions</b>, this container is not returned for multiple line item orders.
 * @subpackage Structs
 */
class ExternalTransactionType extends AbstractStructBase
{
    /**
     * The ExternalTransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a PayPal payment of an eBay order. If the order was purchased with a payment method other than PayPal, "SIS" is returned, which stands for "Send Information To Seller." This field is only returned after payment
     * has been made.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalTransactionID = null;
    /**
     * The ExternalTransactionTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp for payment transaction.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalTransactionTime = null;
    /**
     * The FeeOrCreditAmount
     * Meta information extracted from the WSDL
     * - documentation: Fee Amount is a positive value and Credit Amount is a negative value.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $FeeOrCreditAmount = null;
    /**
     * The PaymentOrRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: If this dollar value is a positive amount, this is the amount that the buyer pays the seller through PayPal for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer. <br><br>
     * <span class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any 'Collect and Remit' tax (mandated US state sales tax or 'Goods and Services' tax in Australia or New Zealand) charged to the buyer
     * for one or more order line items, since this tax is collected by eBay and not by the seller. </span> <br> <span class="tablenote"><b>Note: </b> As of November 2019, for orders subject to eBay 'Collect and Remit' taxes, PayPal has begun distributing
     * order funds to the seller's account with the sales tax included. eBay 'Collect and Remit' tax includes US sales tax for numerous states, and 'Good and Services' tax that is applicable to Australian and New Zealand sellers. This 'Collect and Remit'
     * tax amount for the order will be included in the <b>PaymentOrRefundAmount</b> value (for the payment scenario). To determine if 'Collect and Remit' taxes were added into <b>PaymentOrRefundAmount</b> value, the user can check for the
     * <b>Transaction.eBayCollectAndRemitTaxes.TaxDetails</b> and the <b>Transaction.Taxes.TaxDetails</b> containers in the response. If both of these containers appear in the response with a <b>TaxDetails.TaxDescription</b> value of <code>SalesTax</code>
     * (in US) or <code>GST</code> (in Australia or New Zealand), the tax amount that the buyer paid is in this amount. <br><br> Sellers should be aware that the sales tax that the buyer pays for the order will initially be included when the order funds are
     * distributed to their PayPal account, but that PayPal will pull out the sales tax amount shortly after the payment clears, and will distribute the sales tax to the appropriate taxing authority. Previous to this change, PayPal would strip out the
     * 'Collect and Remit' tax before distributing order funds to the seller's account. <br><br> This logic change does not apply to sellers who are in eBay managed payments, so the amount in this field will never reflect any 'Collect and Remit' tax, even
     * if the order is subject to 'Collect and Remit' tax. </span>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $PaymentOrRefundAmount = null;
    /**
     * The ExternalTransactionStatus
     * Meta information extracted from the WSDL
     * - documentation: The current processing status of a PayPal payment for an eBay order.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalTransactionStatus = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ExternalTransactionType
     * @uses ExternalTransactionType::setExternalTransactionID()
     * @uses ExternalTransactionType::setExternalTransactionTime()
     * @uses ExternalTransactionType::setFeeOrCreditAmount()
     * @uses ExternalTransactionType::setPaymentOrRefundAmount()
     * @uses ExternalTransactionType::setExternalTransactionStatus()
     * @uses ExternalTransactionType::setAny()
     * @param string $externalTransactionID
     * @param string $externalTransactionTime
     * @param \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount
     * @param \macropage\ebaysdk\trading\StructType\AmountType $paymentOrRefundAmount
     * @param string $externalTransactionStatus
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $externalTransactionID = null, ?string $externalTransactionTime = null, ?\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null, ?\macropage\ebaysdk\trading\StructType\AmountType $paymentOrRefundAmount = null, ?string $externalTransactionStatus = null, $any = null)
    {
        $this
            ->setExternalTransactionID($externalTransactionID)
            ->setExternalTransactionTime($externalTransactionTime)
            ->setFeeOrCreditAmount($feeOrCreditAmount)
            ->setPaymentOrRefundAmount($paymentOrRefundAmount)
            ->setExternalTransactionStatus($externalTransactionStatus)
            ->setAny($any);
    }
    /**
     * Get ExternalTransactionID value
     * @return string|null
     */
    public function getExternalTransactionID(): ?string
    {
        return $this->ExternalTransactionID;
    }
    /**
     * Set ExternalTransactionID value
     * @param string $externalTransactionID
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setExternalTransactionID(?string $externalTransactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($externalTransactionID) && !is_string($externalTransactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalTransactionID, true), gettype($externalTransactionID)), __LINE__);
        }
        $this->ExternalTransactionID = $externalTransactionID;
        
        return $this;
    }
    /**
     * Get ExternalTransactionTime value
     * @return string|null
     */
    public function getExternalTransactionTime(): ?string
    {
        return $this->ExternalTransactionTime;
    }
    /**
     * Set ExternalTransactionTime value
     * @param string $externalTransactionTime
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setExternalTransactionTime(?string $externalTransactionTime = null): self
    {
        // validation for constraint: string
        if (!is_null($externalTransactionTime) && !is_string($externalTransactionTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalTransactionTime, true), gettype($externalTransactionTime)), __LINE__);
        }
        $this->ExternalTransactionTime = $externalTransactionTime;
        
        return $this;
    }
    /**
     * Get FeeOrCreditAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getFeeOrCreditAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->FeeOrCreditAmount;
    }
    /**
     * Set FeeOrCreditAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setFeeOrCreditAmount(?\macropage\ebaysdk\trading\StructType\AmountType $feeOrCreditAmount = null): self
    {
        $this->FeeOrCreditAmount = $feeOrCreditAmount;
        
        return $this;
    }
    /**
     * Get PaymentOrRefundAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getPaymentOrRefundAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->PaymentOrRefundAmount;
    }
    /**
     * Set PaymentOrRefundAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $paymentOrRefundAmount
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setPaymentOrRefundAmount(?\macropage\ebaysdk\trading\StructType\AmountType $paymentOrRefundAmount = null): self
    {
        $this->PaymentOrRefundAmount = $paymentOrRefundAmount;
        
        return $this;
    }
    /**
     * Get ExternalTransactionStatus value
     * @return string|null
     */
    public function getExternalTransactionStatus(): ?string
    {
        return $this->ExternalTransactionStatus;
    }
    /**
     * Set ExternalTransactionStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $externalTransactionStatus
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
     */
    public function setExternalTransactionStatus(?string $externalTransactionStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::valueIsValid($externalTransactionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType', is_array($externalTransactionStatus) ? implode(', ', $externalTransactionStatus) : var_export($externalTransactionStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentTransactionStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ExternalTransactionStatus = $externalTransactionStatus;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ExternalTransactionType
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
