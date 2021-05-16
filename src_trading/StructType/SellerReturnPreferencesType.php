<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReturnPreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>SellerReturnPreferences</b> container, which consists of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns.
 * @subpackage Structs
 */
class SellerReturnPreferencesType extends AbstractStructBase
{
    /**
     * The OptedIn
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates whether or not an eligible seller has opted in to eBay Managed Returns through the Return Preferences of My eBay.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $OptedIn = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellerReturnPreferencesType
     * @uses SellerReturnPreferencesType::setOptedIn()
     * @uses SellerReturnPreferencesType::setAny()
     * @param bool $optedIn
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $optedIn = null, $any = null)
    {
        $this
            ->setOptedIn($optedIn)
            ->setAny($any);
    }
    /**
     * Get OptedIn value
     * @return bool|null
     */
    public function getOptedIn(): ?bool
    {
        return $this->OptedIn;
    }
    /**
     * Set OptedIn value
     * @param bool $optedIn
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType
     */
    public function setOptedIn(?bool $optedIn = null): self
    {
        // validation for constraint: boolean
        if (!is_null($optedIn) && !is_bool($optedIn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optedIn, true), gettype($optedIn)), __LINE__);
        }
        $this->OptedIn = $optedIn;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellerReturnPreferencesType
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
