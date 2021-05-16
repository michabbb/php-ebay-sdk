<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>QuantityInfo</b> container, which consists of the <b>MinimumRemnantSet</b> field, which is the minimum amount of event tickets that can remain in the multiple-quantity, fixed-price event-based listing's inventory
 * after a buyer purchases one or more tickets (but not all) from the listing.
 * @subpackage Structs
 */
class QuantityInfo extends AbstractStructBase
{
    /**
     * The MinimumRemnantSet
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the minimum ticket quantity that must remain after a buyer purchases one or more (but not all) tickets in an event-based listing. This feature helps the seller avoid the scenario of being left with only one
     * ticket in a multiple-quantity, fixed-priced event-based listing. In some cases, a solo seat to an event can be harder to sell, especially as the event date approaches. <br> <br> Based on the value of <b>MinimumRemnantSet</b> and the listing's
     * available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the quantity of tickets that a buyer can purchase. For example, suppose a seller lists 5 tickets, and wants at least 2 tickets remaining for the final buyer to purchase. In
     * this case, the seller would set <b>MinimumRemnantSet</b> to '2'. This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket). <br> <br> This field is currently only applicable for event ticket
     * listings in the US and CA marketplaces, but may apply to other categories in the future. It is only returned if set by the seller in the listing.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MinimumRemnantSet = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for QuantityInfo
     * @uses QuantityInfo::setMinimumRemnantSet()
     * @uses QuantityInfo::setAny()
     * @param int $minimumRemnantSet
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $minimumRemnantSet = null, $any = null)
    {
        $this
            ->setMinimumRemnantSet($minimumRemnantSet)
            ->setAny($any);
    }
    /**
     * Get MinimumRemnantSet value
     * @return int|null
     */
    public function getMinimumRemnantSet(): ?int
    {
        return $this->MinimumRemnantSet;
    }
    /**
     * Set MinimumRemnantSet value
     * @param int $minimumRemnantSet
     * @return \macropage\ebaysdk\shopping\StructType\QuantityInfo
     */
    public function setMinimumRemnantSet(?int $minimumRemnantSet = null): self
    {
        // validation for constraint: int
        if (!is_null($minimumRemnantSet) && !(is_int($minimumRemnantSet) || ctype_digit($minimumRemnantSet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minimumRemnantSet, true), gettype($minimumRemnantSet)), __LINE__);
        }
        $this->MinimumRemnantSet = $minimumRemnantSet;
        
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
     * @return \macropage\ebaysdk\shopping\StructType\QuantityInfo
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
