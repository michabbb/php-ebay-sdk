<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>MaximumUnpaidItemStrikesInfo</b> container, which is used by the seller as a mechanism to block prospective buyers who have unpaid item strikes on their account exceeding the value set in the <b>Count</b> field
 * during a specified time period (set in the <b>Period</b> field).
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesInfoType extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This integer value sets the maximum number of unpaid item strikes that a prospective buyer is allowed to have during a specified time period (<b>MaximumUnpaidItemStrikesInfo.Period</b>) before being blocked from buying/bidding on the
     * item. <br><br> To retrieve a list of allowed values for this field, the seller should call <b>GeteBayDetails</b>, including <b>BuyerRequirementDetails</b> in the <b>DetailName</b> field of the request, and then look for the
     * <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.MaximumUnpaidItemStrikesCount.Count</b> fields in the response. <br>
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - documentation: This enumerated value defines the length of time over which a prospective buyer's unpaid item strikes will be counted. If the prospective buyer's number of unpaid item strikes during this defined period exceeds the value set in the
     * <b>Count</b> field, that prospective buyer is blocked from buying/bidding on the item. <br/><br/> If the <b>Count</b> value is 2, and the specified <b>Period</b> is 'Days_30' (counting back 30 days from the present day), any prospective buyer that
     * has had three or more unpaid item strikes is blocked from buying/bidding on the item. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Period = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MaximumUnpaidItemStrikesInfoType
     * @uses MaximumUnpaidItemStrikesInfoType::setCount()
     * @uses MaximumUnpaidItemStrikesInfoType::setPeriod()
     * @uses MaximumUnpaidItemStrikesInfoType::setAny()
     * @param int $count
     * @param string $period
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $count = null, ?string $period = null, $any = null)
    {
        $this
            ->setCount($count)
            ->setPeriod($period)
            ->setAny($any);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Period value
     * @return string|null
     */
    public function getPeriod(): ?string
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @uses \macropage\ebaysdk\trading\EnumType\PeriodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PeriodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $period
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType
     */
    public function setPeriod(?string $period = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PeriodCodeType::valueIsValid($period)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PeriodCodeType', is_array($period) ? implode(', ', $period) : var_export($period, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PeriodCodeType::getValidValues())), __LINE__);
        }
        $this->Period = $period;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesInfoType
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
