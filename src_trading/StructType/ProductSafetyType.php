<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductSafetyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Pictograms</b> and <b>Statements</b> containers, and the <b>Component</b> field, that provide product safety and compliance related information. <br /> <span class="tablenote"><b>Note: </b> As a part of General
 * Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide product safety and compliance information in
 * their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
 * @subpackage Structs
 */
class ProductSafetyType extends AbstractStructBase
{
    /**
     * The Pictograms
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to provide product safety pictograms for the listing. This field is conditionally required if product safety information is supplied. <br /> <span class="tablenote"><b>Note:</b> When supplying
     * product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span> A maximum of 2 pictograms are allowed for product safety.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictogramsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PictogramsType $Pictograms = null;
    /**
     * The Statements
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to provide product safety statements for the listing. This field is conditionally required if product safety information is supplied. <br /> <span class="tablenote"><b>Note:</b> When supplying
     * product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span> A maximum of 8 statements are allowed for product safety.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StatementsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StatementsType $Statements = null;
    /**
     * The Component
     * Meta information extracted from the WSDL
     * - documentation: This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. This field is
     * optional for Product Safety. <br /> <span class="tablenote"><b>Note: </b> Component information can only be specified if used with the <b>Pictograms</b> and/or <b>Statements</b> field; if the component is provided without one or both of these fields,
     * an error will occur. </span>
     * - maxOccur: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Component = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ProductSafetyType
     * @uses ProductSafetyType::setPictograms()
     * @uses ProductSafetyType::setStatements()
     * @uses ProductSafetyType::setComponent()
     * @uses ProductSafetyType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PictogramsType $pictograms
     * @param \macropage\ebaysdk\trading\StructType\StatementsType $statements
     * @param string $component
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\PictogramsType $pictograms = null, ?\macropage\ebaysdk\trading\StructType\StatementsType $statements = null, ?string $component = null, $any = null)
    {
        $this
            ->setPictograms($pictograms)
            ->setStatements($statements)
            ->setComponent($component)
            ->setAny($any);
    }
    /**
     * Get Pictograms value
     * @return \macropage\ebaysdk\trading\StructType\PictogramsType|null
     */
    public function getPictograms(): ?\macropage\ebaysdk\trading\StructType\PictogramsType
    {
        return $this->Pictograms;
    }
    /**
     * Set Pictograms value
     * @param \macropage\ebaysdk\trading\StructType\PictogramsType $pictograms
     * @return \macropage\ebaysdk\trading\StructType\ProductSafetyType
     */
    public function setPictograms(?\macropage\ebaysdk\trading\StructType\PictogramsType $pictograms = null): self
    {
        $this->Pictograms = $pictograms;
        
        return $this;
    }
    /**
     * Get Statements value
     * @return \macropage\ebaysdk\trading\StructType\StatementsType|null
     */
    public function getStatements(): ?\macropage\ebaysdk\trading\StructType\StatementsType
    {
        return $this->Statements;
    }
    /**
     * Set Statements value
     * @param \macropage\ebaysdk\trading\StructType\StatementsType $statements
     * @return \macropage\ebaysdk\trading\StructType\ProductSafetyType
     */
    public function setStatements(?\macropage\ebaysdk\trading\StructType\StatementsType $statements = null): self
    {
        $this->Statements = $statements;
        
        return $this;
    }
    /**
     * Get Component value
     * @return string|null
     */
    public function getComponent(): ?string
    {
        return $this->Component;
    }
    /**
     * Set Component value
     * @param string $component
     * @return \macropage\ebaysdk\trading\StructType\ProductSafetyType
     */
    public function setComponent(?string $component = null): self
    {
        // validation for constraint: string
        if (!is_null($component) && !is_string($component)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($component, true), gettype($component)), __LINE__);
        }
        $this->Component = $component;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\ProductSafetyType
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
