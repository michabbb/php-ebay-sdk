<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>CancelDetail</b> container, which consists of details related to an eBay order that has been cancelled or is in the process of possibly being cancelled.
 * @subpackage Structs
 */
class CancelDetailType extends AbstractStructBase
{
    /**
     * The CancelReason
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the reason why the order cancellation was initiated. This field is always returned with the <b>CancelDetail</b> container. Typical buyer-initiated cancellation reasons include <code>OrderPlacedByMistake</code>,
     * <code>WontArriveInTime</code>, or <code>FoundCheaperPrice</code>. Sellers may initiate an order cancellation on behalf of the buyer. In this scenario, the seller should state the cancellation reason as <code>BuyerCancelOrder</code>. If the seller is
     * cancelling an order because he/she is out of stock on an item, the seller should state the cancellation reason as <code>OutOfStock</code>. Unfortunately, in this scenario, the seller will receive a seller defect for this cancellation reason. Other
     * order cancellation reasons are specific to eBay Scheduled Delivery orders. eBay Scheduled Delivery is similar to the eBay Now service in the US (now retired), and is only available in the UK. See <a
     * href="types/CancelReasonCodeType.html">CancelReasonCodeType</a> for the complete list of enumeration values that can be returned in this field. <br><br> <span class="tablenote"><strong>Note:</strong> Currently, the <b>CancelReason</b> field is being
     * returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from <b>OrderType</b> in the future. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CancelReason;
    /**
     * The CancelReasonDetails
     * Meta informations extracted from the WSDL
     * - documentation: The detailed reason of why the order cancellation was initiated. This field is only returned if it is available for an order that has been cancelled, or if an order is going through the cancellation process. <br><br> <span
     * class="tablenote"><strong>Note:</strong> Currently, the <b>CancelReasonDetails</b> field is being returned under the <b>Order</b> container and under the <b>CancelDetail</b> container. However, there are plans to deprecate this field from
     * <b>OrderType</b> in the future. </span>
     * - minOccurs: 0
     * @var string
     */
    public $CancelReasonDetails;
    /**
     * The CancelIntiator
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates which party initiated the cancellation of the eBay order. It will usually be <code>Buyer</code> or <code>Seller</code>, but it can also be <code>CS</code> (eBay Customer Support). See <a
     * href="types/CancelInitiatorCodeType.html">CancelInitiatorCodeType</a> for the complete list of enumeration values that can be returned in this field. This field is always returned with the <b>CancelDetail</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $CancelIntiator;
    /**
     * The CancelIntiationDate
     * Meta informations extracted from the WSDL
     * - documentation: This timestamp indicates when the cancellation of the eBay order was initiated. This field is always returned with the <b>CancelDetail</b> container.
     * - minOccurs: 0
     * @var string
     */
    public $CancelIntiationDate;
    /**
     * The CancelCompleteDate
     * Meta informations extracted from the WSDL
     * - documentation: Timestamp indicating when the cancellation process of an eBay order has been completed, which will be indicated if the <b>Order.CancelStatus</b> field has a value of <code>CancelComplete</code>. This field will not be returned until
     * the cancellation process is completed.
     * - minOccurs: 0
     * @var string
     */
    public $CancelCompleteDate;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($cancelReason = null, $cancelReasonDetails = null, $cancelIntiator = null, $cancelIntiationDate = null, $cancelCompleteDate = null, \DOMDocument $any = null)
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
    public function getCancelReason()
    {
        return $this->CancelReason;
    }
    /**
     * Set CancelReason value
     * @param string $cancelReason
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelReason($cancelReason = null)
    {
        // validation for constraint: string
        if (!is_null($cancelReason) && !is_string($cancelReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelReason)), __LINE__);
        }
        $this->CancelReason = $cancelReason;
        return $this;
    }
    /**
     * Get CancelReasonDetails value
     * @return string|null
     */
    public function getCancelReasonDetails()
    {
        return $this->CancelReasonDetails;
    }
    /**
     * Set CancelReasonDetails value
     * @param string $cancelReasonDetails
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelReasonDetails($cancelReasonDetails = null)
    {
        // validation for constraint: string
        if (!is_null($cancelReasonDetails) && !is_string($cancelReasonDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelReasonDetails)), __LINE__);
        }
        $this->CancelReasonDetails = $cancelReasonDetails;
        return $this;
    }
    /**
     * Get CancelIntiator value
     * @return string|null
     */
    public function getCancelIntiator()
    {
        return $this->CancelIntiator;
    }
    /**
     * Set CancelIntiator value
     * @param string $cancelIntiator
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelIntiator($cancelIntiator = null)
    {
        // validation for constraint: string
        if (!is_null($cancelIntiator) && !is_string($cancelIntiator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelIntiator)), __LINE__);
        }
        $this->CancelIntiator = $cancelIntiator;
        return $this;
    }
    /**
     * Get CancelIntiationDate value
     * @return string|null
     */
    public function getCancelIntiationDate()
    {
        return $this->CancelIntiationDate;
    }
    /**
     * Set CancelIntiationDate value
     * @param string $cancelIntiationDate
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelIntiationDate($cancelIntiationDate = null)
    {
        // validation for constraint: string
        if (!is_null($cancelIntiationDate) && !is_string($cancelIntiationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelIntiationDate)), __LINE__);
        }
        $this->CancelIntiationDate = $cancelIntiationDate;
        return $this;
    }
    /**
     * Get CancelCompleteDate value
     * @return string|null
     */
    public function getCancelCompleteDate()
    {
        return $this->CancelCompleteDate;
    }
    /**
     * Set CancelCompleteDate value
     * @param string $cancelCompleteDate
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
     */
    public function setCancelCompleteDate($cancelCompleteDate = null)
    {
        // validation for constraint: string
        if (!is_null($cancelCompleteDate) && !is_string($cancelCompleteDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelCompleteDate)), __LINE__);
        }
        $this->CancelCompleteDate = $cancelCompleteDate;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CancelDetailType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
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
     * @return \macropage\ebaysdk\trading\StructType\CancelDetailType
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
