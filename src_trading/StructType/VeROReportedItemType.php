<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROReportedItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ReportedItem</b> container which is returned in the <b>GetVeROReportStatus</b> response. The <b>ReportedItem</b> container consists of the <b>ItemID</b> of the item that has infringed upon the seller's copyright,
 * trademark, or intellectual property rights, as well as the submission status of the VeRO Report.
 * @subpackage Structs
 */
class VeROReportedItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier (<b>ItemID</b>) of the listing reported for copyright, trademark, or intellectual property right infringment. <br><br> This field is always returned with the <b>ReportedItem</b> container. | Type that represents
     * the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The ItemStatus
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the current submission status of the VeRO Report. <br><br> This field is always returned with the <b>ReportedItem</b> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemStatus = null;
    /**
     * The ItemReasonForFailure
     * Meta information extracted from the WSDL
     * - documentation: This text explanation is submitted by eBay when the submission of an VeRO Report has failed or was blocked. <br><br> This field is only returned with the <b>ReportedItem</b> container if the <b>ItemStatus</b> value is
     * <b>SubmissionFailed</b> or <b>ClarificationRequired</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemReasonForFailure = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VeROReportedItemType
     * @uses VeROReportedItemType::setItemID()
     * @uses VeROReportedItemType::setItemStatus()
     * @uses VeROReportedItemType::setItemReasonForFailure()
     * @uses VeROReportedItemType::setAny()
     * @param string $itemID
     * @param string $itemStatus
     * @param string $itemReasonForFailure
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $itemID = null, ?string $itemStatus = null, ?string $itemReasonForFailure = null, $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setItemStatus($itemStatus)
            ->setItemReasonForFailure($itemReasonForFailure)
            ->setAny($any);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get ItemStatus value
     * @return string|null
     */
    public function getItemStatus(): ?string
    {
        return $this->ItemStatus;
    }
    /**
     * Set ItemStatus value
     * @uses \macropage\ebaysdk\trading\EnumType\VeROItemStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\VeROItemStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemStatus
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemType
     */
    public function setItemStatus(?string $itemStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\VeROItemStatusCodeType::valueIsValid($itemStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\VeROItemStatusCodeType', is_array($itemStatus) ? implode(', ', $itemStatus) : var_export($itemStatus, true), implode(', ', \macropage\ebaysdk\trading\EnumType\VeROItemStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ItemStatus = $itemStatus;
        
        return $this;
    }
    /**
     * Get ItemReasonForFailure value
     * @return string|null
     */
    public function getItemReasonForFailure(): ?string
    {
        return $this->ItemReasonForFailure;
    }
    /**
     * Set ItemReasonForFailure value
     * @param string $itemReasonForFailure
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemType
     */
    public function setItemReasonForFailure(?string $itemReasonForFailure = null): self
    {
        // validation for constraint: string
        if (!is_null($itemReasonForFailure) && !is_string($itemReasonForFailure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemReasonForFailure, true), gettype($itemReasonForFailure)), __LINE__);
        }
        $this->ItemReasonForFailure = $itemReasonForFailure;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VeROReportedItemType
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
