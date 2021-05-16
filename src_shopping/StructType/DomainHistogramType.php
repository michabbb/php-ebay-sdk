<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomainHistogramType StructType
 * Meta information extracted from the WSDL
 * - documentation: A generic type used for histograms.
 * @subpackage Structs
 */
class DomainHistogramType extends AbstractStructBase
{
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - documentation: Each histogram entry shows how many matching products were found in each matching domain. A domain is like a high-level category, or a group of categories whose items share the same basic product characteristics.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\HistogramEntryType[]
     */
    protected array $Domain = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DomainHistogramType
     * @uses DomainHistogramType::setDomain()
     * @uses DomainHistogramType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\HistogramEntryType[] $domain
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $domain = [], $any = null)
    {
        $this
            ->setDomain($domain)
            ->setAny($any);
    }
    /**
     * Get Domain value
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType[]
     */
    public function getDomain(): array
    {
        return $this->Domain;
    }
    /**
     * This method is responsible for validating the values passed to the setDomain method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDomain method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDomainForArrayConstraintsFromSetDomain(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $domainHistogramTypeDomainItem) {
            // validation for constraint: itemType
            if (!$domainHistogramTypeDomainItem instanceof \macropage\ebaysdk\shopping\StructType\HistogramEntryType) {
                $invalidValues[] = is_object($domainHistogramTypeDomainItem) ? get_class($domainHistogramTypeDomainItem) : sprintf('%s(%s)', gettype($domainHistogramTypeDomainItem), var_export($domainHistogramTypeDomainItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Domain property can only contain items of type \macropage\ebaysdk\shopping\StructType\HistogramEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Domain value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\HistogramEntryType[] $domain
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType
     */
    public function setDomain(array $domain = []): self
    {
        // validation for constraint: array
        if ('' !== ($domainArrayErrorMessage = self::validateDomainForArrayConstraintsFromSetDomain($domain))) {
            throw new InvalidArgumentException($domainArrayErrorMessage, __LINE__);
        }
        $this->Domain = $domain;
        
        return $this;
    }
    /**
     * Add item to Domain value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\HistogramEntryType $item
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType
     */
    public function addToDomain(\macropage\ebaysdk\shopping\StructType\HistogramEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\HistogramEntryType) {
            throw new InvalidArgumentException(sprintf('The Domain property can only contain items of type \macropage\ebaysdk\shopping\StructType\HistogramEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Domain[] = $item;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType
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
