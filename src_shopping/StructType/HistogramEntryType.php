<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HistogramEntryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is used by the <b>DomainHistogram</b> container that is returned in the <b>FindProducts</b> response. <br/><br/> <span class="tablenote"><b>Important:</b> The use of domain histograms and <b>DomainName</b> filters is no
 * longer recommended, as the domain histogram data that is returned in the <b>FindProducts</b> response, and filtering by domain logic is no longer reliable. </span>
 * @subpackage Structs
 */
class HistogramEntryType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: This is the name of eBay category domain. An eBay catalog product can be mapped to more than one eBay category domain.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: This is the number of eBay catalog products associated with eBay category domain. If an eBay catalog product is mapped to more than one eBay category domain, it is counted separately for each domain. For example, if the same eBay
     * catalog product appears in both <code>Children's Books</code> and <code>Fiction Books</code> domains, the count for both of these domains will include that eBay catalog product.
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for HistogramEntryType
     * @uses HistogramEntryType::setName()
     * @uses HistogramEntryType::setCount()
     * @uses HistogramEntryType::setAny()
     * @param string $name
     * @param int $count
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $count = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setCount($count)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\shopping\StructType\HistogramEntryType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType
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
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType
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
