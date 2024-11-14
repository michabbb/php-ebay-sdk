<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegulatoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the regulatory containers that are used at the listing level to provide Energy Efficiency Label information, hazardous material related information, product safety related information, manufacturer and responsible
 * person information, and the repair score.
 * @subpackage Structs
 */
class RegulatoryType extends AbstractStructBase
{
    /**
     * The EnergyEfficiencyLabel
     * Meta information extracted from the WSDL
     * - documentation: This container provides information about the energy efficiency for certain durable goods.<br /> <span class="tablenote"><b>Note: </b> As a part of Digital Services Act (DSA) requirements, all sellers who list products in Germany
     * (DE) must provide Energy Efficiency Label information and Product Information Sheets for listings for certain durable goods.</span> <span class="tablenote"><b>Note: </b> Energy efficiency information is not required for all categories. Use the <a
     * href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return
     * metadata on the eBay categories that recommend or require energy efficiency-related fields. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EnergyEfficiencyType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EnergyEfficiencyType $EnergyEfficiencyLabel = null;
    /**
     * The EconomicOperator
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> Economic Operator and its associated fields have been deprecated for the Add/Revise/Relist/Verify and GetItem family of calls and will be decommissioned on October 21, 2024. It has been replaced
     * by the <b>Manufacturer</b> and <b>ResponsiblePersons</b> containers. Economic Operator related fields should no longer be used for the Add/Revise/Relist and VerifyItem family of calls. As it is currently still supported, Economic Operator-related
     * fields will be returned if applicable for the GetItem call. </span> This container provides Economic Operator (EO) information about the manufacturer and/or supplier of the item. The EO is a corporate entity that is related to, has some
     * responsibility for, the product being listed for sale. For additional information, see <a href = "https://www.ebay.com/help/selling/selling/CE-mark-EU?id=5225#operator" target="_blank">What is an economic operator?</a>.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\EconomicOperatorType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\EconomicOperatorType $EconomicOperator = null;
    /**
     * The Hazmat
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to provide hazardous material information for the listing. Three elements are required to complete the Hazmat section of a listing: <b>Pictograms</b>, <b>SignalWord</b>, and <b>Statements</b>. The
     * fourth element, <b>Component</b>, is optional. For more information, see <a href=" /api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html" target="_blank">Specifying hazardous material related information</a>. <br /> <span
     * class="tablenote"><b>Note: </b> Hazmat information is not required for all categories. Use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a
     * href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on the eBay categories that recommend or require Hazmat-related fields. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\HazmatType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\HazmatType $Hazmat = null;
    /**
     * The ProductSafety
     * Meta information extracted from the WSDL
     * - documentation: This container is used to provide product safety information for the listing. One of the following elements is required to complete the product safety section for a listing: <b>Pictograms</b> or <b>Statements</b>. The
     * <b>Component</b> element is optional. <br /> <br /> <b>For Revise and Relist calls:</b> To delete all product safety information when you revise or relist, specify <b>Item.Regulatory.ProductSafety</b> in <b>DeletedField</b>, and don't pass
     * <b>ProductSafety</b> in the request. <br /> <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or
     * Northern Ireland are conditionally required to provide product manufacturer information in their eBay listings. Product safety information is not required for all categories. Use the <a href =
     * "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on
     * the eBay categories that recommend or require product safety-related fields. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation
     * (GPSR)</a>.</span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ProductSafetyType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ProductSafetyType $ProductSafety = null;
    /**
     * The RepairScore
     * Meta information extracted from the WSDL
     * - documentation: This field represents the repair index for the listing.<br><br>The repair index identifies the manufacturer's repair score for a product (how easy is it to repair the product). This field is a floating point value between 0 and 10
     * but may only have one digit beyond the decimal point, for example: <code>7.9</code><br><span class="tablenote"><b>Note: </b><code>0</code> should not be used as a default value, as it implies that the product is not repairable.</span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $RepairScore = null;
    /**
     * The Manufacturer
     * Meta information extracted from the WSDL
     * - documentation: This container provides information about the manufacturer of the item. <br /><br /> <b>For Revise and Relist calls:</b> To delete all manufacturer information when you revise or relist, specify <b>Item.Regulatory.Manufacturer</b> in
     * <b>DeletedField</b>, and don't pass <b>Manufacturer</b> in the request. <br /> <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers operating in, or
     * shipping to, EU-based countries or Northern Ireland are conditionally required to provide product manufacturer information in their eBay listings. Manufacturer information is not required for all categories. Use the <a href =
     * "/api-docs/sell/metadata/resources/marketplace/methods/getRegulatoryPolicies" target="_blank">getRegulatoryPolicies</a> method of the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to return metadata on
     * the eBay categories that recommend or require manufacturer-related fields. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation
     * (GPSR)</a>.</span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ManufacturerType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ManufacturerType $Manufacturer = null;
    /**
     * The ResponsiblePersons
     * Meta information extracted from the WSDL
     * - documentation: This container provides information about the EU-based Responsible Persons or entities associated with the listing. <br /><br /> <b>For Revise and Relist calls:</b> To delete all Responsible Persons information when you revise or
     * relist, specify <b>Item.Regulatory.ResponsiblePersons</b> in <b>DeletedField</b>, and don't pass <b>ResponsiblePersons</b> in the request. <br /> <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements
     * effective on December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide Responsible Persons information in their eBay listings if the manufacture is not based in the EU. For
     * more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ResponsiblePersonsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ResponsiblePersonsType $ResponsiblePersons = null;
    /**
     * The Documents
     * Meta information extracted from the WSDL
     * - documentation: This container provides a collection of regulatory documents associated with the listing. <br /><br /> <b>For Revise and Relist calls:</b> For information on removing one or more files using a Revise/Relist call, see <a href=
     * "/api-docs/sell/static/inventory/managing-document-media.html#revise" target="_blank">Remove documents from listings.</a> <br /> <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on
     * December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide regulatory document information in their eBay listings. For more information on GPSR, see <a href =
     * "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DocumentsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\DocumentsType $Documents = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for RegulatoryType
     * @uses RegulatoryType::setEnergyEfficiencyLabel()
     * @uses RegulatoryType::setEconomicOperator()
     * @uses RegulatoryType::setHazmat()
     * @uses RegulatoryType::setProductSafety()
     * @uses RegulatoryType::setRepairScore()
     * @uses RegulatoryType::setManufacturer()
     * @uses RegulatoryType::setResponsiblePersons()
     * @uses RegulatoryType::setDocuments()
     * @uses RegulatoryType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\EnergyEfficiencyType $energyEfficiencyLabel
     * @param \macropage\ebaysdk\trading\StructType\EconomicOperatorType $economicOperator
     * @param \macropage\ebaysdk\trading\StructType\HazmatType $hazmat
     * @param \macropage\ebaysdk\trading\StructType\ProductSafetyType $productSafety
     * @param float $repairScore
     * @param \macropage\ebaysdk\trading\StructType\ManufacturerType $manufacturer
     * @param \macropage\ebaysdk\trading\StructType\ResponsiblePersonsType $responsiblePersons
     * @param \macropage\ebaysdk\trading\StructType\DocumentsType $documents
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\EnergyEfficiencyType $energyEfficiencyLabel = null, ?\macropage\ebaysdk\trading\StructType\EconomicOperatorType $economicOperator = null, ?\macropage\ebaysdk\trading\StructType\HazmatType $hazmat = null, ?\macropage\ebaysdk\trading\StructType\ProductSafetyType $productSafety = null, ?float $repairScore = null, ?\macropage\ebaysdk\trading\StructType\ManufacturerType $manufacturer = null, ?\macropage\ebaysdk\trading\StructType\ResponsiblePersonsType $responsiblePersons = null, ?\macropage\ebaysdk\trading\StructType\DocumentsType $documents = null, $any = null)
    {
        $this
            ->setEnergyEfficiencyLabel($energyEfficiencyLabel)
            ->setEconomicOperator($economicOperator)
            ->setHazmat($hazmat)
            ->setProductSafety($productSafety)
            ->setRepairScore($repairScore)
            ->setManufacturer($manufacturer)
            ->setResponsiblePersons($responsiblePersons)
            ->setDocuments($documents)
            ->setAny($any);
    }
    /**
     * Get EnergyEfficiencyLabel value
     * @return \macropage\ebaysdk\trading\StructType\EnergyEfficiencyType|null
     */
    public function getEnergyEfficiencyLabel(): ?\macropage\ebaysdk\trading\StructType\EnergyEfficiencyType
    {
        return $this->EnergyEfficiencyLabel;
    }
    /**
     * Set EnergyEfficiencyLabel value
     * @param \macropage\ebaysdk\trading\StructType\EnergyEfficiencyType $energyEfficiencyLabel
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
     */
    public function setEnergyEfficiencyLabel(?\macropage\ebaysdk\trading\StructType\EnergyEfficiencyType $energyEfficiencyLabel = null): self
    {
        $this->EnergyEfficiencyLabel = $energyEfficiencyLabel;
        
        return $this;
    }
    /**
     * Get EconomicOperator value
     * @return \macropage\ebaysdk\trading\StructType\EconomicOperatorType|null
     */
    public function getEconomicOperator(): ?\macropage\ebaysdk\trading\StructType\EconomicOperatorType
    {
        return $this->EconomicOperator;
    }
    /**
     * Set EconomicOperator value
     * @param \macropage\ebaysdk\trading\StructType\EconomicOperatorType $economicOperator
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
     */
    public function setEconomicOperator(?\macropage\ebaysdk\trading\StructType\EconomicOperatorType $economicOperator = null): self
    {
        $this->EconomicOperator = $economicOperator;
        
        return $this;
    }
    /**
     * Get Hazmat value
     * @return \macropage\ebaysdk\trading\StructType\HazmatType|null
     */
    public function getHazmat(): ?\macropage\ebaysdk\trading\StructType\HazmatType
    {
        return $this->Hazmat;
    }
    /**
     * Set Hazmat value
     * @param \macropage\ebaysdk\trading\StructType\HazmatType $hazmat
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
     */
    public function setHazmat(?\macropage\ebaysdk\trading\StructType\HazmatType $hazmat = null): self
    {
        $this->Hazmat = $hazmat;
        
        return $this;
    }
    /**
     * Get ProductSafety value
     * @return \macropage\ebaysdk\trading\StructType\ProductSafetyType|null
     */
    public function getProductSafety(): ?\macropage\ebaysdk\trading\StructType\ProductSafetyType
    {
        return $this->ProductSafety;
    }
    /**
     * Set ProductSafety value
     * @param \macropage\ebaysdk\trading\StructType\ProductSafetyType $productSafety
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
     */
    public function setProductSafety(?\macropage\ebaysdk\trading\StructType\ProductSafetyType $productSafety = null): self
    {
        $this->ProductSafety = $productSafety;
        
        return $this;
    }
    /**
     * Get RepairScore value
     * @return float|null
     */
    public function getRepairScore(): ?float
    {
        return $this->RepairScore;
    }
    /**
     * Set RepairScore value
     * @param float $repairScore
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
     */
    public function setRepairScore(?float $repairScore = null): self
    {
        // validation for constraint: float
        if (!is_null($repairScore) && !(is_float($repairScore) || is_numeric($repairScore))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($repairScore, true), gettype($repairScore)), __LINE__);
        }
        $this->RepairScore = $repairScore;
        
        return $this;
    }
    /**
     * Get Manufacturer value
     * @return \macropage\ebaysdk\trading\StructType\ManufacturerType|null
     */
    public function getManufacturer(): ?\macropage\ebaysdk\trading\StructType\ManufacturerType
    {
        return $this->Manufacturer;
    }
    /**
     * Set Manufacturer value
     * @param \macropage\ebaysdk\trading\StructType\ManufacturerType $manufacturer
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
     */
    public function setManufacturer(?\macropage\ebaysdk\trading\StructType\ManufacturerType $manufacturer = null): self
    {
        $this->Manufacturer = $manufacturer;
        
        return $this;
    }
    /**
     * Get ResponsiblePersons value
     * @return \macropage\ebaysdk\trading\StructType\ResponsiblePersonsType|null
     */
    public function getResponsiblePersons(): ?\macropage\ebaysdk\trading\StructType\ResponsiblePersonsType
    {
        return $this->ResponsiblePersons;
    }
    /**
     * Set ResponsiblePersons value
     * @param \macropage\ebaysdk\trading\StructType\ResponsiblePersonsType $responsiblePersons
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
     */
    public function setResponsiblePersons(?\macropage\ebaysdk\trading\StructType\ResponsiblePersonsType $responsiblePersons = null): self
    {
        $this->ResponsiblePersons = $responsiblePersons;
        
        return $this;
    }
    /**
     * Get Documents value
     * @return \macropage\ebaysdk\trading\StructType\DocumentsType|null
     */
    public function getDocuments(): ?\macropage\ebaysdk\trading\StructType\DocumentsType
    {
        return $this->Documents;
    }
    /**
     * Set Documents value
     * @param \macropage\ebaysdk\trading\StructType\DocumentsType $documents
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
     */
    public function setDocuments(?\macropage\ebaysdk\trading\StructType\DocumentsType $documents = null): self
    {
        $this->Documents = $documents;
        
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
     * @return \macropage\ebaysdk\trading\StructType\RegulatoryType
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
