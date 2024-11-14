<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazmatType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Pictograms</b> and <b>Statements</b> containers, and the <b>Component</b> and <b>SignalWord</b> fields, that provide hazardous material related information. For additional information, see <a
 * href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
 * @subpackage Structs
 */
class HazmatType extends AbstractStructBase
{
    /**
     * The Pictograms
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to provide pictograms for the listing. This field is required if hazmat information is supplied.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PictogramsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\PictogramsType $Pictograms = null;
    /**
     * The SignalWord
     * Meta information extracted from the WSDL
     * - documentation: This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data
     * Sheet. The selected hazard information will be displayed on your listing. This field is required if hazmat information is supplied. Example values include: <br> <ul><li> <code>Danger</code></li><li> <code>Warning</code></li></ul><span
     * class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a
     * href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For additional information, see <a
     * href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SignalWord = null;
    /**
     * The Statements
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StatementsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StatementsType $Statements = null;
    /**
     * The Component
     * Meta information extracted from the WSDL
     * - documentation: This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.
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
     * Constructor method for HazmatType
     * @uses HazmatType::setPictograms()
     * @uses HazmatType::setSignalWord()
     * @uses HazmatType::setStatements()
     * @uses HazmatType::setComponent()
     * @uses HazmatType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\PictogramsType $pictograms
     * @param string $signalWord
     * @param \macropage\ebaysdk\trading\StructType\StatementsType $statements
     * @param string $component
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\PictogramsType $pictograms = null, ?string $signalWord = null, ?\macropage\ebaysdk\trading\StructType\StatementsType $statements = null, ?string $component = null, $any = null)
    {
        $this
            ->setPictograms($pictograms)
            ->setSignalWord($signalWord)
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
     * @return \macropage\ebaysdk\trading\StructType\HazmatType
     */
    public function setPictograms(?\macropage\ebaysdk\trading\StructType\PictogramsType $pictograms = null): self
    {
        $this->Pictograms = $pictograms;
        
        return $this;
    }
    /**
     * Get SignalWord value
     * @return string|null
     */
    public function getSignalWord(): ?string
    {
        return $this->SignalWord;
    }
    /**
     * Set SignalWord value
     * @param string $signalWord
     * @return \macropage\ebaysdk\trading\StructType\HazmatType
     */
    public function setSignalWord(?string $signalWord = null): self
    {
        // validation for constraint: string
        if (!is_null($signalWord) && !is_string($signalWord)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signalWord, true), gettype($signalWord)), __LINE__);
        }
        $this->SignalWord = $signalWord;
        
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
     * @return \macropage\ebaysdk\trading\StructType\HazmatType
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
     * @return \macropage\ebaysdk\trading\StructType\HazmatType
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
     * @return \macropage\ebaysdk\trading\StructType\HazmatType
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
