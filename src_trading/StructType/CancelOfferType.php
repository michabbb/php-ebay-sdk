<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelOfferType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CancelOfferType extends AbstractStructBase
{
    /**
     * The Offer
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\OfferType
     */
    public $Offer;
    /**
     * The Explanation
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $Explanation;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CancelOfferType
     * @uses CancelOfferType::setOffer()
     * @uses CancelOfferType::setExplanation()
     * @uses CancelOfferType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\OfferType $offer
     * @param string $explanation
     * @param \DOMDocument $any
     */
    public function __construct(\macropage\ebaysdk\trading\StructType\OfferType $offer = null, $explanation = null, \DOMDocument $any = null)
    {
        $this
            ->setOffer($offer)
            ->setExplanation($explanation)
            ->setAny($any);
    }
    /**
     * Get Offer value
     * @return \macropage\ebaysdk\trading\StructType\OfferType|null
     */
    public function getOffer()
    {
        return $this->Offer;
    }
    /**
     * Set Offer value
     * @param \macropage\ebaysdk\trading\StructType\OfferType $offer
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType
     */
    public function setOffer(\macropage\ebaysdk\trading\StructType\OfferType $offer = null)
    {
        $this->Offer = $offer;
        return $this;
    }
    /**
     * Get Explanation value
     * @return string|null
     */
    public function getExplanation()
    {
        return $this->Explanation;
    }
    /**
     * Set Explanation value
     * @param string $explanation
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType
     */
    public function setExplanation($explanation = null)
    {
        // validation for constraint: string
        if (!is_null($explanation) && !is_string($explanation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($explanation)), __LINE__);
        }
        $this->Explanation = $explanation;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CancelOfferType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType
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
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType
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
