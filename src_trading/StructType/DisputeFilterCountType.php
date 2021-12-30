<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeFilterCountType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <strong>DisputeFilterCount</strong> containers of the <b>GetUserDisputes</b> response to show how many disputes of a certain type that the user is involved in. <br/><br/> <span
 * class="tablenote"><strong>Note:</strong> The <b>GetUserDisputes</b> call now only retrieves Unpaid Item cases, and is no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay
 * buyers. However, the <b>GetUserDisputes</b> call is still currently returning counts for <b>ItemNotReceivedDisputes</b>, but the count is most likely to be 0. </span>
 * @subpackage Structs
 */
class DisputeFilterCountType extends AbstractStructBase
{
    /**
     * The DisputeFilterType
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value returned here indicates the type/category of the dispute for which a count is being shown. For example, disputes awaiting a response, closed disputes, disputes eligible for Final Value Fee credit, etc.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisputeFilterType = null;
    /**
     * The TotalAvailable
     * Meta information extracted from the WSDL
     * - documentation: This integer value indicates the number of disputes that match the input criteria for the corresponding type/category of dispute. <br/><br/> Note that this field will not be returned for the type/category of dispute that was used as
     * a filter in the <b>DisputeFilterType</b> field of the request, or if this filter is not used at all, this field (with the count) will not be returned for <code>DisputesAwaitingMyResponse</code>, which is the default value.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalAvailable = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DisputeFilterCountType
     * @uses DisputeFilterCountType::setDisputeFilterType()
     * @uses DisputeFilterCountType::setTotalAvailable()
     * @uses DisputeFilterCountType::setAny()
     * @param string $disputeFilterType
     * @param int $totalAvailable
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $disputeFilterType = null, ?int $totalAvailable = null, $any = null)
    {
        $this
            ->setDisputeFilterType($disputeFilterType)
            ->setTotalAvailable($totalAvailable)
            ->setAny($any);
    }
    /**
     * Get DisputeFilterType value
     * @return string|null
     */
    public function getDisputeFilterType(): ?string
    {
        return $this->DisputeFilterType;
    }
    /**
     * Set DisputeFilterType value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $disputeFilterType
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType
     */
    public function setDisputeFilterType(?string $disputeFilterType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::valueIsValid($disputeFilterType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType', is_array($disputeFilterType) ? implode(', ', $disputeFilterType) : var_export($disputeFilterType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeFilterTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeFilterType = $disputeFilterType;
        
        return $this;
    }
    /**
     * Get TotalAvailable value
     * @return int|null
     */
    public function getTotalAvailable(): ?int
    {
        return $this->TotalAvailable;
    }
    /**
     * Set TotalAvailable value
     * @param int $totalAvailable
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType
     */
    public function setTotalAvailable(?int $totalAvailable = null): self
    {
        // validation for constraint: int
        if (!is_null($totalAvailable) && !(is_int($totalAvailable) || ctype_digit($totalAvailable))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalAvailable, true), gettype($totalAvailable)), __LINE__);
        }
        $this->TotalAvailable = $totalAvailable;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DisputeFilterCountType
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
