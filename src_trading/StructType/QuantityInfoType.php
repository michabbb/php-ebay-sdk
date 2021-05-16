<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>QuantityInfo</b> container, which consists of the <b>MinimumRemnantSet</b> field, which sets the minimum amount of event tickets that can remain in the fixed-price listing's inventory after a buyer purchases one
 * or more tickets (but not all) from the listing.
 * @subpackage Structs
 */
class QuantityInfoType extends AbstractStructBase
{
    /**
     * The MinimumRemnantSet
     * Meta information extracted from the WSDL
     * - documentation: Enables a seller to avoid being left with quanity of <code>1</code> in an event listing. A typical use case is event tickets in reserved, adjacent seats, or items that typically only sell if more than one can be purchased at once.
     * <br> <br> Specify the minimum number of items that should remain if a buyer doesn't purchase all the items. Based on the value of <b>MinimumRemnantSet</b> and the listing's available quantity (<b>Quantity</b>-<b>QuantitySold</b>), eBay calculates the
     * quantity that a buyer can purchase in one transaction. For example, suppose you list 5 tickets, and you want at least 2 tickets remaining for the final buyer to purchase. In this case, you would set <b>MinimumRemnantSet</b> value to <code>2</code>.
     * This means a buyer can purchase 1, 2, 3, or 5 tickets, but not 4 (because 4 would leave the seller with 1 ticket).<br> <br> To remove this restriction when you revise or relist, set <b>MinimumRemnantSet</b> to 1.<br> <br> Applicable to
     * multiple-quantity, fixed-price listings. Currently supported for US and CA event ticket listings. <br>
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
     * Constructor method for QuantityInfoType
     * @uses QuantityInfoType::setMinimumRemnantSet()
     * @uses QuantityInfoType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\QuantityInfoType
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
     * @return \macropage\ebaysdk\trading\StructType\QuantityInfoType
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
