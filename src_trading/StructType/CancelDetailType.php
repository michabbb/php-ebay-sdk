<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>CancelDetail</b> container, which consists of details related to an eBay order that has been cancelled or is in the process of possibly being cancelled.
 * @subpackage Structs
 */
class CancelDetailType extends AbstractStructBase
{
    /**
     * The CancelReason
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the reason why the order cancellation was initiated. This field is always returned with the <b>CancelDetail</b> container. Typical buyer-initiated cancellation reasons include <code>OrderPlacedByMistake</code>,
     * <code>WontArriveInTime</code>, or <code>FoundCheaperPrice</code>. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as <code>BuyerCancelOrder</code>. If the seller is
     * cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as <code>OutOfStock</code>. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. Other
     * order cancellation reasons are specific to eBay Scheduled Delivery orders. eBay Scheduled Delivery is similar to the eBay Now service in the US (now retired), and is only available in the UK. See <a
     * href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field. <br><br> <span class="tablenote"><strong>Note:</strong> Currently, the <b>CancelReason</b> field is being
     * returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from <b>OrderType</b> in the future. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelReason = null;
    /**
     * The CancelReasonDetails
     * Meta information extracted from the WSDL
     * - documentation: The detailed reason of why the order cancellation was initiated. This field is only returned if it is available for an order that has been cancelled, or if an order is going through the cancellation process. <br><br> <span
     * class="tablenote"><strong>Note:</strong> Currently, the <b>CancelReasonDetails</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from
     * <b>OrderType</b> in the future. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelReasonDetails = null;
    /**
     * The CancelIntiator
     * Meta information extracted from the WSDL
     * - documentation: This value indicates which party initiated the cancellation of the eBay order. It will usually be <code>Buyer</code> or <code>Seller</code>, but it can also be <code>CS</code> (eBay Customer Support). See <a
     * href="types/CancelInitiatorCodeType.html">CancelInitiatorCodeType</a> for the complete list of enumeration values that can be returned in this field. This field is always returned with the <b>CancelDetail</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelIntiator = null;
    /**
     * The CancelIntiationDate
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates when the cancellation of the eBay order was initiated. This field is always returned with the <b>CancelDetail</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelIntiationDate = null;
    /**
     * The CancelCompleteDate
     * Meta information extracted from the WSDL
     * - documentation: Timestamp indicating when the cancellation process of an eBay order has been completed, which will be indicated if the <b>Order.CancelStatus</b> field has a value of <code>CancelComplete</code>. This field will not be returned until
     * the cancellation process is completed.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CancelCompleteDate = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CancelDetailType
     * @uses CancelDetailType::setCancelReason()
     * @uses CancelDetailType::setCancelReasonDetails()
     * @uses CancelDetailType::setCancelIntiator()
     * @uses CancelDetailType::setCancelIntiationDate()
     * @uses CancelDetailType::setCancelCompleteDate()
     * @uses CancelDetailType::setAny()
     * @param string $cancelReason
     * @param string $cancelReasonDetails
     * @param string $cancelIntiator
     * @param string $cancelIntiationDate
     * @param string $cancelCompleteDate
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $cancelReason = null, ?string $cancelReasonDetails = null, ?string $cancelIntiator = null, ?string $cancelIntiationDate = null, ?string $cancelCompleteDate = null, $any = null)
    {
        $this
            ->setCancelReason($cancelReason)
            ->setCancelReasonDetails($cancelReasonDetails)
            ->setCancelIntiator($cancelIntiator)
            ->setCancelIntiationDate($cancelIntiationDate)
            ->setCancelCompleteDate($cancelCompleteDate)
            ->setAny($any);
    }
    /**
     * Get CancelReason value
     * @return string|null
     */
    public function getCancelReason(): ?string
    {
        return $this->CancelReason;
    }
    /**
     * Set CancelReason value
     * @param string $cancelReason
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelReason(?string $cancelReason = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelReason) && !is_string($cancelReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelReason, true), gettype($cancelReason)), __LINE__);
        }
        $this->CancelReason = $cancelReason;
        
        return $this;
    }
    /**
     * Get CancelReasonDetails value
     * @return string|null
     */
    public function getCancelReasonDetails(): ?string
    {
        return $this->CancelReasonDetails;
    }
    /**
     * Set CancelReasonDetails value
     * @param string $cancelReasonDetails
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelReasonDetails(?string $cancelReasonDetails = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelReasonDetails) && !is_string($cancelReasonDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelReasonDetails, true), gettype($cancelReasonDetails)), __LINE__);
        }
        $this->CancelReasonDetails = $cancelReasonDetails;
        
        return $this;
    }
    /**
     * Get CancelIntiator value
     * @return string|null
     */
    public function getCancelIntiator(): ?string
    {
        return $this->CancelIntiator;
    }
    /**
     * Set CancelIntiator value
     * @param string $cancelIntiator
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelIntiator(?string $cancelIntiator = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelIntiator) && !is_string($cancelIntiator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelIntiator, true), gettype($cancelIntiator)), __LINE__);
        }
        $this->CancelIntiator = $cancelIntiator;
        
        return $this;
    }
    /**
     * Get CancelIntiationDate value
     * @return string|null
     */
    public function getCancelIntiationDate(): ?string
    {
        return $this->CancelIntiationDate;
    }
    /**
     * Set CancelIntiationDate value
     * @param string $cancelIntiationDate
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelIntiationDate(?string $cancelIntiationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelIntiationDate) && !is_string($cancelIntiationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelIntiationDate, true), gettype($cancelIntiationDate)), __LINE__);
        }
        $this->CancelIntiationDate = $cancelIntiationDate;
        
        return $this;
    }
    /**
     * Get CancelCompleteDate value
     * @return string|null
     */
    public function getCancelCompleteDate(): ?string
    {
        return $this->CancelCompleteDate;
    }
    /**
     * Set CancelCompleteDate value
     * @param string $cancelCompleteDate
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelCompleteDate(?string $cancelCompleteDate = null): self
    {
        // validation for constraint: string
        if (!is_null($cancelCompleteDate) && !is_string($cancelCompleteDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cancelCompleteDate, true), gettype($cancelCompleteDate)), __LINE__);
        }
        $this->CancelCompleteDate = $cancelCompleteDate;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
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
