<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DigitalGoodInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DigitalGoodInfo</b> container, which is used in <b>Add</b>/<b>Relist</b>/<b>Revise</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing.
 * @subpackage Structs
 */
class DigitalGoodInfoType extends AbstractStructBase
{
    /**
     * The DigitalDelivery
     * Meta information extracted from the WSDL
     * - documentation: This field must be included in the request and set to <code>true</code> if the seller plans to list a digital gift card in a category that supports digital gift cards. <br><br> To verify if a specific category on a specific eBay site
     * supports digital gift card listings, use the <a href="https://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in a <b>CategoryID</b> value and a <b>DigitalGoodDeliveryEnabled</b>
     * value in the <b>FeatureID</b> field. Look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the
     * request).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $DigitalDelivery = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for DigitalGoodInfoType
     * @uses DigitalGoodInfoType::setDigitalDelivery()
     * @uses DigitalGoodInfoType::setAny()
     * @param bool $digitalDelivery
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $digitalDelivery = null, $any = null)
    {
        $this
            ->setDigitalDelivery($digitalDelivery)
            ->setAny($any);
    }
    /**
     * Get DigitalDelivery value
     * @return bool|null
     */
    public function getDigitalDelivery(): ?bool
    {
        return $this->DigitalDelivery;
    }
    /**
     * Set DigitalDelivery value
     * @param bool $digitalDelivery
     * @return \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType
     */
    public function setDigitalDelivery(?bool $digitalDelivery = null): self
    {
        // validation for constraint: boolean
        if (!is_null($digitalDelivery) && !is_bool($digitalDelivery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($digitalDelivery, true), gettype($digitalDelivery)), __LINE__);
        }
        $this->DigitalDelivery = $digitalDelivery;
        
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
     * @return \macropage\ebaysdk\trading\StructType\DigitalGoodInfoType
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
