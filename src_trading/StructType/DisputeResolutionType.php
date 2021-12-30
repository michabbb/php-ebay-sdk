<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeResolutionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <strong>DisputeResolution</strong> container of <strong>GetUserDisputes</strong>, which provides details about the resolution of an Unpaid Item case. An Unpaid Item case can have a resolution even if the seller does
 * not receive payment. A separate <strong>DisputeResolution</strong> container is returned for each different outcome. For example, if the resolution including the seller getting a Final Value Fee credit and the buyer getting an Unpaid Item strike, a
 * separate <strong>DisputeResolution</strong> container is returned for each of these outcomes. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <strong>GetUserDisputes</strong> call of the Trading API now only supports Unpaid Item cases,
 * and no longer supports Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR or SNAD case through eBay's Resolution Center,
 * and this call also does not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case
 * Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Structs
 */
class DisputeResolutionType extends AbstractStructBase
{
    /**
     * The DisputeResolutionRecordType
     * Meta information extracted from the WSDL
     * - documentation: The action resulting from the resolution, affecting either the buyer or the seller.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisputeResolutionRecordType = null;
    /**
     * The DisputeResolutionReason
     * Meta information extracted from the WSDL
     * - documentation: The reason for the resolution.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisputeResolutionReason = null;
    /**
     * The ResolutionTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time of the outcome that resulted from the resolution of the Unpaid Item case, in GMT.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResolutionTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DisputeResolutionType
     * @uses DisputeResolutionType::setDisputeResolutionRecordType()
     * @uses DisputeResolutionType::setDisputeResolutionReason()
     * @uses DisputeResolutionType::setResolutionTime()
     * @uses DisputeResolutionType::setAny()
     * @param string $disputeResolutionRecordType
     * @param string $disputeResolutionReason
     * @param string $resolutionTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $disputeResolutionRecordType = null, ?string $disputeResolutionReason = null, ?string $resolutionTime = null, $any = null)
    {
        $this
            ->setDisputeResolutionRecordType($disputeResolutionRecordType)
            ->setDisputeResolutionReason($disputeResolutionReason)
            ->setResolutionTime($resolutionTime)
            ->setAny($any);
    }
    /**
     * Get DisputeResolutionRecordType value
     * @return string|null
     */
    public function getDisputeResolutionRecordType(): ?string
    {
        return $this->DisputeResolutionRecordType;
    }
    /**
     * Set DisputeResolutionRecordType value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $disputeResolutionRecordType
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
     */
    public function setDisputeResolutionRecordType(?string $disputeResolutionRecordType = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType::valueIsValid($disputeResolutionRecordType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType', is_array($disputeResolutionRecordType) ? implode(', ', $disputeResolutionRecordType) : var_export($disputeResolutionRecordType, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeResolutionRecordTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionRecordType = $disputeResolutionRecordType;
        
        return $this;
    }
    /**
     * Get DisputeResolutionReason value
     * @return string|null
     */
    public function getDisputeResolutionReason(): ?string
    {
        return $this->DisputeResolutionReason;
    }
    /**
     * Set DisputeResolutionReason value
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $disputeResolutionReason
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
     */
    public function setDisputeResolutionReason(?string $disputeResolutionReason = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::valueIsValid($disputeResolutionReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType', is_array($disputeResolutionReason) ? implode(', ', $disputeResolutionReason) : var_export($disputeResolutionReason, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DisputeResolutionReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionReason = $disputeResolutionReason;
        
        return $this;
    }
    /**
     * Get ResolutionTime value
     * @return string|null
     */
    public function getResolutionTime(): ?string
    {
        return $this->ResolutionTime;
    }
    /**
     * Set ResolutionTime value
     * @param string $resolutionTime
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
     */
    public function setResolutionTime(?string $resolutionTime = null): self
    {
        // validation for constraint: string
        if (!is_null($resolutionTime) && !is_string($resolutionTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resolutionTime, true), gettype($resolutionTime)), __LINE__);
        }
        $this->ResolutionTime = $resolutionTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DisputeResolutionType
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
