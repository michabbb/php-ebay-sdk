<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HistogramEntryType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DomainHistogram</b> container that is returned in the <b>FindProducts</b> response. <br/><br/> <span class="tablenote"><b>Important:</b> The use of domain histograms and <b>DomainName</b> filters is no
 * longer recommended, as the domain histogram data that is returned in the <b>FindProducts</b> response, and filtering by domain logic is no longer reliable. </span>
 * @subpackage Structs
 */
class HistogramEntryType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: This is the name of eBay category domain. An eBay catalog product can be mapped to more than one eBay category domain.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: This is the number of eBay catalog products associated with eBay category domain. If an eBay catalog product is mapped to more than one eBay category domain, it is counted separately for each domain. For example, if the same eBay
     * catalog product appears in both <code>Children's Books</code> and <code>Fiction Books</code> domains, the count for both of these domains will include that eBay catalog product.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for HistogramEntryType
     * @uses HistogramEntryType::setName()
     * @uses HistogramEntryType::setCount()
     * @uses HistogramEntryType::setAny()
     * @param string $name
     * @param int $count
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?int $count = null, $any = null)
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
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\HistogramEntryType
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
