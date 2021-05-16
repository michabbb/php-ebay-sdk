<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerVendorDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes vendor information.
 * @subpackage Structs
 */
class SellingManagerVendorDetailsType extends AbstractStructBase
{
    /**
     * The VendorName
     * Meta information extracted from the WSDL
     * - documentation: Primary vendor name. Vendor information is returned only if it has been set.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VendorName = null;
    /**
     * The VendorContactInfo
     * Meta information extracted from the WSDL
     * - documentation: Contact information of vendor. Vendor information is returned only if it has been set.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VendorContactInfo = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerVendorDetailsType
     * @uses SellingManagerVendorDetailsType::setVendorName()
     * @uses SellingManagerVendorDetailsType::setVendorContactInfo()
     * @uses SellingManagerVendorDetailsType::setAny()
     * @param string $vendorName
     * @param string $vendorContactInfo
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $vendorName = null, ?string $vendorContactInfo = null, $any = null)
    {
        $this
            ->setVendorName($vendorName)
            ->setVendorContactInfo($vendorContactInfo)
            ->setAny($any);
    }
    /**
     * Get VendorName value
     * @return string|null
     */
    public function getVendorName(): ?string
    {
        return $this->VendorName;
    }
    /**
     * Set VendorName value
     * @param string $vendorName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType
     */
    public function setVendorName(?string $vendorName = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorName) && !is_string($vendorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorName, true), gettype($vendorName)), __LINE__);
        }
        $this->VendorName = $vendorName;
        
        return $this;
    }
    /**
     * Get VendorContactInfo value
     * @return string|null
     */
    public function getVendorContactInfo(): ?string
    {
        return $this->VendorContactInfo;
    }
    /**
     * Set VendorContactInfo value
     * @param string $vendorContactInfo
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType
     */
    public function setVendorContactInfo(?string $vendorContactInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorContactInfo) && !is_string($vendorContactInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorContactInfo, true), gettype($vendorContactInfo)), __LINE__);
        }
        $this->VendorContactInfo = $vendorContactInfo;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerVendorDetailsType
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
