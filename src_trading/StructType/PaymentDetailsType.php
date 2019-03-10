<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>PaymentDetails</b> container, which is used by the seller to specify amounts and due dates for deposits and full payment on motor vehicle listings.
 * @subpackage Structs
 */
class PaymentDetailsType extends AbstractStructBase
{
    /**
     * The HoursToDeposit
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the number of hours that a buyer has (after he/she commits to buy) to make a deposit to the seller as a down payment on a motor vehicle. <b>Valid values:</b> 24, 48 (default), and 72. <br/><br/> The
     * deposit amount is specified in the <b>DepositAmount</b> field. If not specified, the <b>DepositAmount</b> value defaults to 0.0, in which case, a deposit on the vehicle is not required. <br>
     * - minOccurs: 0
     * @var int
     */
    public $HoursToDeposit;
    /**
     * The DaysToFullPayment
     * Meta informations extracted from the WSDL
     * - documentation: This integer value indicates the number of days that a buyer has (after he/she commits to buy) to make full payment to the seller and close the remaining balance on a motor vehicle. <b>Valid values:</b> 3, 7 (default), 10, and 14.
     * <br/><br/> In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>PaymentMethods</b> values must be specified for the listing: <ul> <li>CashInPerson</li> <li>LoanCheck</li> <li>MOCC (money order or
     * cashier's check)</li> <li><b>PaymentSeeDescription</b> (indicates to prospective buyers that payment instructions are in the item's description</li> <li>PersonalCheck</li> </ul>
     * - minOccurs: 0
     * @var int
     */
    public $DaysToFullPayment;
    /**
     * The DepositAmount
     * Meta informations extracted from the WSDL
     * - documentation: This dollar value indicates the amount of the deposit that a buyer must make on a purchased motor vehicle (eBay Motors US and CA). The deposit amount can be as high as $2,000.00. <br/><br/> If not specified, this value defaults to
     * '0.0'. If the seller is requiring that the buyer put down a deposit on the vehicle, the seller must include and set the <b>DepositType</b> field to <code>OtherMethod</code> and specify an <b>HoursToDeposit</b> value. If specified, then also specify
     * <b>HoursToDeposit</b> <br> <br> Deposits can only be paid using PayPal, so if <b>DepositAmount</b> is specified (and not '0.0'), then the listing must offer 'PayPal' as a payment method (in addition to the payment methods offered for the full
     * payment). Unlike other listings, PayPal is not automatically added to a Motors listing even if the seller has a PayPal preference set in My eBay. The seller also needs to have a linked PayPal account in order to require a deposit.<br> <br> The
     * deposit amount appears in the shipping, payment details and return policy section of the View Item page.<br> <br> <b>For ReviseItem and related calls</b>: If the listing has no bids, the seller can add or lower a deposit; and they can increase the
     * deposit if the listing doesn't require Immediate Payment. The seller can also remove the Immediate Payment option (if any). If the listing has bids, the seller can only lower an existing deposit; but not add or increase a deposit. The seller can't
     * remove Immediate Payment when a listing with a deposit has bids. <br>
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AmountType
     */
    public $DepositAmount;
    /**
     * The DepositType
     * Meta informations extracted from the WSDL
     * - documentation: This field applies to eBay Motors (US and CA) vehicles listings. If the seller is requiring that the buyer make a deposit on the vehicle, the <b>DepositType</b> value must be included and set to <code>OtherMethod</code>. Otherwise,
     * specify <code>None</code> (or don't pass in <b>DepositType</b>).
     * - minOccurs: 0
     * @var string
     */
    public $DepositType;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($hoursToDeposit = null, $daysToFullPayment = null, \macropage\ebaysdk\trading\StructType\AmountType $depositAmount = null, $depositType = null, \DOMDocument $any = null)
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
    public function getHoursToDeposit()
    {
        return $this->HoursToDeposit;
    }
    /**
     * Set HoursToDeposit value
     * @param int $hoursToDeposit
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public function setHoursToDeposit($hoursToDeposit = null)
    {
        // validation for constraint: int
        if (!is_null($hoursToDeposit) && !is_numeric($hoursToDeposit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hoursToDeposit)), __LINE__);
        }
        $this->HoursToDeposit = $hoursToDeposit;
        return $this;
    }
    /**
     * Get DaysToFullPayment value
     * @return int|null
     */
    public function getDaysToFullPayment()
    {
        return $this->DaysToFullPayment;
    }
    /**
     * Set DaysToFullPayment value
     * @param int $daysToFullPayment
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public function setDaysToFullPayment($daysToFullPayment = null)
    {
        // validation for constraint: int
        if (!is_null($daysToFullPayment) && !is_numeric($daysToFullPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($daysToFullPayment)), __LINE__);
        }
        $this->DaysToFullPayment = $daysToFullPayment;
        return $this;
    }
    /**
     * Get DepositAmount value
     * @return \macropage\ebaysdk\trading\StructType\AmountType|null
     */
    public function getDepositAmount()
    {
        return $this->DepositAmount;
    }
    /**
     * Set DepositAmount value
     * @param \macropage\ebaysdk\trading\StructType\AmountType $depositAmount
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public function setDepositAmount(\macropage\ebaysdk\trading\StructType\AmountType $depositAmount = null)
    {
        $this->DepositAmount = $depositAmount;
        return $this;
    }
    /**
     * Get DepositType value
     * @return string|null
     */
    public function getDepositType()
    {
        return $this->DepositType;
    }
    /**
     * Set DepositType value
     * @uses \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $depositType
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
     */
    public function setDepositType($depositType = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::valueIsValid($depositType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $depositType, implode(', ', \macropage\ebaysdk\trading\EnumType\DepositTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DepositType = $depositType;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\PaymentDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\PaymentDetailsType
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
