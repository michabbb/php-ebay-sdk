<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateInvocationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DuplicateInvocationDetails</b> container that is returned in some calls if a duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> is used in the call request.
 * @subpackage Structs
 */
class DuplicateInvocationDetailsType extends AbstractStructBase
{
    /**
     * The DuplicateInvocationID
     * Meta information extracted from the WSDL
     * - documentation: This value represents the duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> that was used in the call request. | Specifies a universally unique identifier for an item. This is used to ensure that you only list a particular
     * item once, particularly if you are listing many items at once. The identifier can contain only digits from 0-9 and letters from A-F. The identifier must be 32 characters long. For example, 9CEBD9A6825644EC8D06C436D6CF494B.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DuplicateInvocationID = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the status of the previous call that used the <b>InvocationID</b> or <b>InvocationTrackingID</b> specified in the <b>DuplicateInvocationID</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The InvocationTrackingID
     * Meta information extracted from the WSDL
     * - documentation: This unique identifier identifies the business item the previous API invocation created. For example, the Item ID of the item created by an <b>AddItem</b> call.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InvocationTrackingID = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DuplicateInvocationDetailsType
     * @uses DuplicateInvocationDetailsType::setDuplicateInvocationID()
     * @uses DuplicateInvocationDetailsType::setStatus()
     * @uses DuplicateInvocationDetailsType::setInvocationTrackingID()
     * @uses DuplicateInvocationDetailsType::setAny()
     * @param string $duplicateInvocationID
     * @param string $status
     * @param string $invocationTrackingID
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $duplicateInvocationID = null, ?string $status = null, ?string $invocationTrackingID = null, $any = null)
    {
        $this
            ->setDuplicateInvocationID($duplicateInvocationID)
            ->setStatus($status)
            ->setInvocationTrackingID($invocationTrackingID)
            ->setAny($any);
    }
    /**
     * Get DuplicateInvocationID value
     * @return string|null
     */
    public function getDuplicateInvocationID(): ?string
    {
        return $this->DuplicateInvocationID;
    }
    /**
     * Set DuplicateInvocationID value
     * @param string $duplicateInvocationID
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
     */
    public function setDuplicateInvocationID(?string $duplicateInvocationID = null): self
    {
        // validation for constraint: string
        if (!is_null($duplicateInvocationID) && !is_string($duplicateInvocationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duplicateInvocationID, true), gettype($duplicateInvocationID)), __LINE__);
        }
        $this->DuplicateInvocationID = $duplicateInvocationID;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\InvocationStatusType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\InvocationStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\InvocationStatusType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\InvocationStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\InvocationStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get InvocationTrackingID value
     * @return string|null
     */
    public function getInvocationTrackingID(): ?string
    {
        return $this->InvocationTrackingID;
    }
    /**
     * Set InvocationTrackingID value
     * @param string $invocationTrackingID
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
     */
    public function setInvocationTrackingID(?string $invocationTrackingID = null): self
    {
        // validation for constraint: string
        if (!is_null($invocationTrackingID) && !is_string($invocationTrackingID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invocationTrackingID, true), gettype($invocationTrackingID)), __LINE__);
        }
        $this->InvocationTrackingID = $invocationTrackingID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DuplicateInvocationDetailsType
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
