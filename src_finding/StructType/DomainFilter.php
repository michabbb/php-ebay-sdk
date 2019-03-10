<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DomainFilter StructType
 * Meta informations extracted from the WSDL
 * - documentation: <b>As of October 2014, domains will be deprecated and "category" is used instead. </b>
 * @subpackage Structs
 */
class DomainFilter extends AbstractStructBase
{
    /**
     * The domainName
     * Meta informations extracted from the WSDL
     * - documentation: <b>As of October 2014, domains will be deprecated and "category" is used instead. </b>
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $domainName;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DomainFilter
     * @uses DomainFilter::setDomainName()
     * @uses DomainFilter::setDelimiter()
     * @uses DomainFilter::setAny()
     * @param string[] $domainName
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct(array $domainName = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setDomainName($domainName)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get domainName value
     * @return string[]
     */
    public function getDomainName()
    {
        return $this->domainName;
    }
    /**
     * Set domainName value
     * @throws \InvalidArgumentException
     * @param string[] $domainName
     * @return \macropage\ebaysdk\finding\StructType\DomainFilter
     */
    public function setDomainName(array $domainName = array())
    {
        foreach ($domainName as $domainFilterDomainNameItem) {
            // validation for constraint: itemType
            if (!is_string($domainFilterDomainNameItem)) {
                throw new \InvalidArgumentException(sprintf('The domainName property can only contain items of string, "%s" given', is_object($domainFilterDomainNameItem) ? get_class($domainFilterDomainNameItem) : gettype($domainFilterDomainNameItem)), __LINE__);
            }
        }
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * Add item to domainName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\DomainFilter
     */
    public function addToDomainName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The domainName property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->domainName[] = $item;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\DomainFilter
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\DomainFilter::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\DomainFilter
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
     * @return \macropage\ebaysdk\finding\StructType\DomainFilter
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
