<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>PaymentDetails</b> container, which is used by the seller to specify the amount of the initial deposit, and the due dates for the deposit and the full payment for a motor vehicle listing. <br/> <br/> <span
 * class="tablenote"><b>Note:</b> The seller may not use the <b>PaymentDetails</b> container if selling a motor vehicle through a Classified Ad listing. If it is used in a Trading call, it will be dropped and the seller will get a warning that it was
 * dropped. For a Classified Ad listing, the buyer and seller directly discuss amongst themselves any details on a deposit, or due dates for a deposit and full balance. eBay will not be involved in this process for a Classified Ad listing.</span>
 * @subpackage Structs
 */
class PaymentDetailsType extends AbstractStructBase
{
    /**
     * The HoursToDeposit
     * Meta information extracted from the WSDL
     * - documentation: This field is used to set the due date (in hours) for the motor vehicle deposit. The deposit amount is specified in the <b>DepositAmount</b> field. The "clock starts" on the deposit due date as soon as the buyer commits to buying the
     * vehicle by clicking the <b>Buy It Now</b> button, by winning the auction, or by the seller accepting that buyer's Best Offer/counteroffer. The three supported values here are <code>24</code>, <code>48</code> (default), and <code>72</code> hours.
     * <br/><br/> <span class="tablenote"><b>Note:</b> If the immediate payment requirement is set for the listing (see <b>Item.AutoPay</b> description), and the listing qualifies for immediate payment (e.g. the <b>Buy It Now</b> button is used), the
     * <b>HoursToDeposit</b> field will not be applicable, since the buyer will be required to pay any deposit amount immediately (and not within 1, 2 or 3 days).</span> <br>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $HoursToDeposit = null;
    /**
     * The DaysToFullPayment
     * Meta information extracted from the WSDL
     * - documentation: This field is used to set the due date (in days) for the buyer to pay off the full balance of the motor vehicle. The "clock starts" on the full payment due date as soon as the buyer commits to buying the vehicle by clicking the
     * <b>Buy It Now</b> button, by winning the auction, or by the seller accepting that buyer's Best Offer/counteroffer. The three supported values here are <code>3</code>, <code>7</code> (default), <code>10</code>, and <code>14</code> days. <br/><br/> The
     * seller must specify one or more of the following offline payment methods in the listing. The buyer will be expected to use one of these payment method options to pay the full balance of the motor vehicle. <ul> <li>CashOnPickup</li> <li>MOCC (money
     * order or cashier's check)</li> <li>PersonalCheck</li> </ul>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DaysToFullPayment = null;
    /**
     * The DepositAmount
     * Meta information extracted from the WSDL
     * - documentation: This dollar value indicates the amount of the initial deposit on the vehicle required from the buyer. <br/><br/> If the immediate payment requirement is set for the listing (see <b>Item.AutoPay</b> description), and the listing
     * qualifies for immediate payment (e.g. the <b>Buy It Now</b> button is used), the deposit will be required immediately, and the <b>HoursToDeposit</b> field (if set) will not be applicable. If immediate payment is required for a motor vehicle deposit,
     * the value input into this field cannot exceed '500.0', or an error will occur. <br/><br/> If there is no immediate payment requirement set for the listing the deposit will be required in 24, 48, or 72 hours after commitment to purchase (see the
     * <b>HoursToDeposit</b> field). If immediate payment is not required for a motor vehicle deposit, the value input into this field cannot exceed '2000.0', or an error will occur. <br/><br/> If this field is not included in an Add/Revise call, its value
     * defaults to '0.0', which would technically mean that a deposit is not required, even if the <b>DepositType</b> and <b>HoursToDeposit</b> fields were included. <br> <br> Motor vehicle deposit details will be shown to prospective buyers in the listing.
     * The available payment methods for the deposit will be shown on the checkout page once the buyer clicks the the <b>Buy It Now</b> button. <br> <br> <b>For ReviseItem and related calls</b>: If the listing has no bids, the seller can add or lower a
     * deposit; and they can increase the deposit if the listing doesn't require immediate payment. The seller can also remove the immediate payment option (if any). If the listing has bids, the seller can only lower an existing deposit; but not add or
     * increase a deposit. The seller can't remove immediate payment when a listing with a deposit has bids. <br>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\AmountType $DepositAmount = null;
    /**
     * The DepositType
     * Meta information extracted from the WSDL
     * - documentation: In order for a seller to require a motor vehicle deposit from a buyer, this field must be included and set to <code>OtherMethod</code>. Otherwise, the field will default to <code>None</code> and a deposit will not be required.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DepositType = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PaymentDetailsType
     * @uses PaymentDetailsType::setHoursToDeposit()
     * @uses PaymentDetailsType::setDaysToFullPayment()
     * @uses PaymentDetailsType::setDepositAmount()
     * @uses PaymentDetailsType::setDepositType()
     * @uses PaymentDetailsType::setAny()
     * @param int $hoursToDeposit
     * @param int $daysToFullPayment
     * @param \macropage\ebaysdk\trading\StructType\AmountType $depositAmount
     * @param string $depositType
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $hoursToDeposit = null, ?int $daysToFullPayment = null, ?\macropage\ebaysdk\trading\StructType\AmountType $depositAmount = null, ?string $depositType = null, $any = null)
    {
        $this
            ->setHoursToDeposit($hoursToDeposit)
            ->setDaysToFullPayment($daysToFullPayment)
            ->setDepositAmount($depositAmount)
            ->setDepositType($depositType)
            ->setAny($any);
    }
    /**
     * Get HoursToDeposit value
     * @return int|null
     */
    public function getHoursToDeposit(): ?int
    {
        return $this->HoursToDeposit;
    }
    /**
     * Set HoursToDeposit value
     * @param int $hoursToDeposit
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public function setHoursToDeposit(?int $hoursToDeposit = null): self
    {
        // validation for constraint: int
        if (!is_null($hoursToDeposit) && !(is_int($hoursToDeposit) || ctype_digit($hoursToDeposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hoursToDeposit, true), gettype($hoursToDeposit)), __LINE__);
        }
        $this->HoursToDeposit = $hoursToDeposit;
        
        return $this;
    }
    /**
     * Get DaysToFullPayment value
     * @return int|null
     */
    public function getDaysToFullPayment(): ?int
    {
        return $this->DaysToFullPayment;
    }
    /**
     * Set DaysToFullPayment value
     * @param int $daysToFullPayment
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public function setDaysToFullPayment(?int $daysToFullPayment = null): self
    {
        // validation for constraint: int
        if (!is_null($daysToFullPayment) && !(is_int($daysToFullPayment) || ctype_digit($daysToFullPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysToFullPayment, true), gettype($daysToFullPayment)), __LINE__);
        }
        $this->DaysToFullPayment = $daysToFullPayment;
        
        return $this;
    }
    /**
     * Get DepositAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getDepositAmount(): ?\macropage\ebaysdk\trading\StructType\AmountType
    {
        return $this->DepositAmount;
    }
    /**
     * Set DepositAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $depositAmount
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public function setDepositAmount(?\macropage\ebaysdk\trading\StructType\AmountType $depositAmount = null): self
    {
        $this->DepositAmount = $depositAmount;
        
        return $this;
    }
    /**
     * Get DepositType value
     * @return string|null
     */
    public function getDepositType(): ?string
    {
        return $this->DepositType;
    }
    /**
     * Set DepositType value
     * @uses \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $depositType
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public function setDepositType(?string $depositType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::valueIsValid($depositType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType', is_array($depositType) ? implode(', ', $depositType) : var_export($depositType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DepositType = $depositType;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
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
