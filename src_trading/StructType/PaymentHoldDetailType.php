<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentHoldDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>PaymentHoldDetails</b> container, which consists of information related to eBay holding the payment proceeds for an order, including the reason why eBay is holding the money, the expected release date of the
 * funds to the seller, and possible action(s) the seller can take to expedite the release of funds.
 * @subpackage Structs
 */
class PaymentHoldDetailType extends AbstractStructBase
{
    /**
     * The ExpectedReleaseDate
     * Meta information extracted from the WSDL
     * - documentation: Timestamp that indicates the expected date in which eBay will distribute the funds to the seller's account. This is not a firm date and is subject to change. This field is only returned after checkout is complete and if the
     * <b>PaymentHoldStatus</b> indicates a hold has been placed on payment.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExpectedReleaseDate = null;
    /**
     * The RequiredSellerActionArray
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of one or more <b>RequiredSellerAction</b> fields. <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to expedite the release of funds into their account.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType $RequiredSellerActionArray = null;
    /**
     * The NumOfReqSellerActions
     * Meta information extracted from the WSDL
     * - documentation: Integer value that indicates the number of possible actions that a seller can take to possibly expedite the release of funds into their account. This value should equal the number of <b>RequiredSellerAction</b> fields contained in
     * the <b>RequiredSellerActionArray</b> container.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumOfReqSellerActions = null;
    /**
     * The PaymentHoldReason
     * Meta information extracted from the WSDL
     * - documentation: Enumerated value that indicates why the buyer's payment for the order is being held by eBay instead of being distributed to the seller's account.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentHoldReason = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaymentHoldDetailType
     * @uses PaymentHoldDetailType::setExpectedReleaseDate()
     * @uses PaymentHoldDetailType::setRequiredSellerActionArray()
     * @uses PaymentHoldDetailType::setNumOfReqSellerActions()
     * @uses PaymentHoldDetailType::setPaymentHoldReason()
     * @uses PaymentHoldDetailType::setAny()
     * @param string $expectedReleaseDate
     * @param \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType $requiredSellerActionArray
     * @param int $numOfReqSellerActions
     * @param string $paymentHoldReason
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $expectedReleaseDate = null, ?\macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType $requiredSellerActionArray = null, ?int $numOfReqSellerActions = null, ?string $paymentHoldReason = null, $any = null)
    {
        $this
            ->setExpectedReleaseDate($expectedReleaseDate)
            ->setRequiredSellerActionArray($requiredSellerActionArray)
            ->setNumOfReqSellerActions($numOfReqSellerActions)
            ->setPaymentHoldReason($paymentHoldReason)
            ->setAny($any);
    }
    /**
     * Get ExpectedReleaseDate value
     * @return string|null
     */
    public function getExpectedReleaseDate(): ?string
    {
        return $this->ExpectedReleaseDate;
    }
    /**
     * Set ExpectedReleaseDate value
     * @param string $expectedReleaseDate
     * @return \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType
     */
    public function setExpectedReleaseDate(?string $expectedReleaseDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expectedReleaseDate) && !is_string($expectedReleaseDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expectedReleaseDate, true), gettype($expectedReleaseDate)), __LINE__);
        }
        $this->ExpectedReleaseDate = $expectedReleaseDate;
        
        return $this;
    }
    /**
     * Get RequiredSellerActionArray value
     * @return \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType|null
     */
    public function getRequiredSellerActionArray(): ?\macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType
    {
        return $this->RequiredSellerActionArray;
    }
    /**
     * Set RequiredSellerActionArray value
     * @param \macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType $requiredSellerActionArray
     * @return \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType
     */
    public function setRequiredSellerActionArray(?\macropage\ebaysdk\trading\ArrayType\RequiredSellerActionArrayType $requiredSellerActionArray = null): self
    {
        $this->RequiredSellerActionArray = $requiredSellerActionArray;
        
        return $this;
    }
    /**
     * Get NumOfReqSellerActions value
     * @return int|null
     */
    public function getNumOfReqSellerActions(): ?int
    {
        return $this->NumOfReqSellerActions;
    }
    /**
     * Set NumOfReqSellerActions value
     * @param int $numOfReqSellerActions
     * @return \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType
     */
    public function setNumOfReqSellerActions(?int $numOfReqSellerActions = null): self
    {
        // validation for constraint: int
        if (!is_null($numOfReqSellerActions) && !(is_int($numOfReqSellerActions) || ctype_digit($numOfReqSellerActions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numOfReqSellerActions, true), gettype($numOfReqSellerActions)), __LINE__);
        }
        $this->NumOfReqSellerActions = $numOfReqSellerActions;
        
        return $this;
    }
    /**
     * Get PaymentHoldReason value
     * @return string|null
     */
    public function getPaymentHoldReason(): ?string
    {
        return $this->PaymentHoldReason;
    }
    /**
     * Set PaymentHoldReason value
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PaymentHoldReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentHoldReason
     * @return \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType
     */
    public function setPaymentHoldReason(?string $paymentHoldReason = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PaymentHoldReasonCodeType::valueIsValid($paymentHoldReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PaymentHoldReasonCodeType', is_array($paymentHoldReason) ? implode(', ', $paymentHoldReason) : var_export($paymentHoldReason, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PaymentHoldReasonCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentHoldReason = $paymentHoldReason;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentHoldDetailType
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
