<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SafePaymentRequiredDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: For the US, Canada and Australia sites, users are required to offer at least one safe payment method. <br><br> If a seller has a 'SafePaymentExempt' status, they are exempt from the category requirement to offer at least one safe
 * payment method when listing an item on a site that has the safe payment requirement. <br><br> <span class="tablenote"><b>Note: </b> Although the <b>SafePaymentRequired</b> field is still being returned for now, sellers never need to set the available
 * electronic payments, so this requirement is no longer applicable. </span>
 * @subpackage Structs
 */
class SafePaymentRequiredDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SafePaymentRequiredDefinitionType
     * @uses SafePaymentRequiredDefinitionType::setAny()
     * @param \DOMDocument|string|null $any
     */
    public function __construct($any = null)
    {
        $this
            ->setAny($any);
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
     * @return \macropage\ebaysdk\trading\StructType\SafePaymentRequiredDefinitionType
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
