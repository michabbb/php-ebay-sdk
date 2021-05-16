<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnpaidItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <strong>UnpaidItem</strong> container, which consists of details related to the type and status of an Unpaid Item case.
 * @subpackage Structs
 */
class UnpaidItemType extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the status of the Unpaid Item case. This field is always returned with the <strong>UnpaidItem</strong> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: This field indicates if the Unpaid Item case was opened manually by the customer or opened automatically by eBay's Unpaid Item Assistant feature. This field is always returned with the <strong>UnpaidItem</strong> container.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for UnpaidItemType
     * @uses UnpaidItemType::setStatus()
     * @uses UnpaidItemType::setType()
     * @uses UnpaidItemType::setAny()
     * @param string $status
     * @param string $type
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $status = null, ?string $type = null, $any = null)
    {
        $this
            ->setStatus($status)
            ->setType($type)
            ->setAny($any);
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
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseStatusTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \macropage\ebaysdk\trading\EnumType\UnpaidItemCaseOpenTypeCodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
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
     * @return \macropage\ebaysdk\trading\StructType\UnpaidItemType
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
