<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaximumUnpaidItemStrikesDurationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>MaximumUnpaidItemStrikesDuration</b> container that is returned in <b>GeteBayDetails</b>. The <b>MaximumUnpaidItemStrikesDuration</b> container indicates the periods of time that can be used when evaluating how
 * many unpaid item strikes against a buyer during this given period will exclude the prospective buyer from purchasing the line item.
 * @subpackage Structs
 */
class MaximumUnpaidItemStrikesDurationDetailsType extends AbstractStructBase
{
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - documentation: The period is the number of days (last 60 days, last 180 days, etc.) during which the buyer's unpaid item strikes are calculated. This is applicable only to sellers.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Period = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the period, such as 'month', 'quarter', or 'half a year'. The data in this field can be used as a label in your application's display. This is applicable only to sellers.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MaximumUnpaidItemStrikesDurationDetailsType
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setPeriod()
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setDescription()
     * @uses MaximumUnpaidItemStrikesDurationDetailsType::setAny()
     * @param string $period
     * @param string $description
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $period = null, ?string $description = null, $any = null)
    {
        $this
            ->setPeriod($period)
            ->setDescription($description)
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType
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
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
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
     * @return \macropage\ebaysdk\trading\StructType\MaximumUnpaidItemStrikesDurationDetailsType
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
