<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerTemplateDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Describes a Selling Manager Template
 * @subpackage Structs
 */
class SellingManagerTemplateDetailsType extends AbstractStructBase
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: ID of the template.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SaleTemplateID = null;
    /**
     * The SaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: Name of the template.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SaleTemplateName = null;
    /**
     * The SuccessPercent
     * Meta information extracted from the WSDL
     * - documentation: Success ratio.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $SuccessPercent = null;
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: The details of the product that this template belongs to.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $SellingManagerProductDetails = null;
    /**
     * The Template
     * Meta information extracted from the WSDL
     * - documentation: ItemType object that contains the data for the specified template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Template = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerTemplateDetailsType
     * @uses SellingManagerTemplateDetailsType::setSaleTemplateID()
     * @uses SellingManagerTemplateDetailsType::setSaleTemplateName()
     * @uses SellingManagerTemplateDetailsType::setSuccessPercent()
     * @uses SellingManagerTemplateDetailsType::setSellingManagerProductDetails()
     * @uses SellingManagerTemplateDetailsType::setTemplate()
     * @uses SellingManagerTemplateDetailsType::setAny()
     * @param string $saleTemplateID
     * @param string $saleTemplateName
     * @param float $successPercent
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \macropage\ebaysdk\trading\StructType\ItemType $template
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $saleTemplateID = null, ?string $saleTemplateName = null, ?float $successPercent = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, ?\macropage\ebaysdk\trading\StructType\ItemType $template = null, $any = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setSaleTemplateName($saleTemplateName)
            ->setSuccessPercent($successPercent)
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setTemplate($template)
            ->setAny($any);
    }
    /**
     * Get SaleTemplateID value
     * @return string|null
     */
    public function getSaleTemplateID(): ?string
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param string $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setSaleTemplateID(?string $saleTemplateID = null): self
    {
        // validation for constraint: string
        if (!is_null($saleTemplateID) && !is_string($saleTemplateID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleTemplateID, true), gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        
        return $this;
    }
    /**
     * Get SaleTemplateName value
     * @return string|null
     */
    public function getSaleTemplateName(): ?string
    {
        return $this->SaleTemplateName;
    }
    /**
     * Set SaleTemplateName value
     * @param string $saleTemplateName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setSaleTemplateName(?string $saleTemplateName = null): self
    {
        // validation for constraint: string
        if (!is_null($saleTemplateName) && !is_string($saleTemplateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleTemplateName, true), gettype($saleTemplateName)), __LINE__);
        }
        $this->SaleTemplateName = $saleTemplateName;
        
        return $this;
    }
    /**
     * Get SuccessPercent value
     * @return float|null
     */
    public function getSuccessPercent(): ?float
    {
        return $this->SuccessPercent;
    }
    /**
     * Set SuccessPercent value
     * @param float $successPercent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setSuccessPercent(?float $successPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($successPercent) && !(is_float($successPercent) || is_numeric($successPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($successPercent, true), gettype($successPercent)), __LINE__);
        }
        $this->SuccessPercent = $successPercent;
        
        return $this;
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails(): ?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setSellingManagerProductDetails(?\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null): self
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        
        return $this;
    }
    /**
     * Get Template value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getTemplate(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return $this->Template;
    }
    /**
     * Set Template value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $template
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setTemplate(?\macropage\ebaysdk\trading\StructType\ItemType $template = null): self
    {
        $this->Template = $template;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
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
