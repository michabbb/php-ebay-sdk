<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomainHistogramType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A generic type used for histograms.
 * @subpackage Structs
 */
class DomainHistogramType extends AbstractStructBase
{
    /**
     * The Domain
     * Meta informations extracted from the WSDL
     * - documentation: Each histogram entry shows how many matching products were found in each matching domain. A domain is like a high-level category, or a group of categories whose items share the same basic product characteristics.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\HistogramEntryType[]
     */
    public $Domain;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomainHistogramType
     * @uses DomainHistogramType::setDomain()
     * @uses DomainHistogramType::setAny()
     * @param \macropage\ebaysdk\shopping\StructType\HistogramEntryType[] $domain
     * @param \DOMDocument $any
     */
    public function __construct(array $domain = array(), \DOMDocument $any = null)
    {
        $this
            ->setDomain($domain)
            ->setAny($any);
    }
    /**
     * Get Domain value
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType[]|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\HistogramEntryType[] $domain
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType
     */
    public function setDomain(array $domain = array())
    {
        foreach ($domain as $domainHistogramTypeDomainItem) {
            // validation for constraint: itemType
            if (!$domainHistogramTypeDomainItem instanceof \macropage\ebaysdk\shopping\StructType\HistogramEntryType) {
                throw new \InvalidArgumentException(sprintf('The Domain property can only contain items of \macropage\ebaysdk\shopping\StructType\HistogramEntryType, "%s" given', is_object($domainHistogramTypeDomainItem) ? get_class($domainHistogramTypeDomainItem) : gettype($domainHistogramTypeDomainItem)), __LINE__);
            }
        }
        $this->Domain = $domain;
        return $this;
    }
    /**
     * Add item to Domain value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\HistogramEntryType $item
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType
     */
    public function addToDomain(\macropage\ebaysdk\shopping\StructType\HistogramEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\HistogramEntryType) {
            throw new \InvalidArgumentException(sprintf('The Domain property can only contain items of \macropage\ebaysdk\shopping\StructType\HistogramEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Domain[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\DomainHistogramType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\shopping\StructType\DomainHistogramType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
