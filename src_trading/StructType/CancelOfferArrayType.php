<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelOfferArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class CancelOfferArrayType extends AbstractStructBase
{
    /**
     * The CancelOffer
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CancelOfferType[]
     */
    public $CancelOffer;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CancelOfferArrayType
     * @uses CancelOfferArrayType::setCancelOffer()
     * @uses CancelOfferArrayType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\CancelOfferType[] $cancelOffer
     * @param \DOMDocument $any
     */
    public function __construct(array $cancelOffer = array(), \DOMDocument $any = null)
    {
        $this
            ->setCancelOffer($cancelOffer)
            ->setAny($any);
    }
    /**
     * Get CancelOffer value
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferType[]|null
     */
    public function getCancelOffer()
    {
        return $this->CancelOffer;
    }
    /**
     * Set CancelOffer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CancelOfferType[] $cancelOffer
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferArrayType
     */
    public function setCancelOffer(array $cancelOffer = array())
    {
        foreach ($cancelOffer as $cancelOfferArrayTypeCancelOfferItem) {
            // validation for constraint: itemType
            if (!$cancelOfferArrayTypeCancelOfferItem instanceof \macropage\ebaysdk\trading\StructType\CancelOfferType) {
                throw new \InvalidArgumentException(sprintf('The CancelOffer property can only contain items of \macropage\ebaysdk\trading\StructType\CancelOfferType, "%s" given', is_object($cancelOfferArrayTypeCancelOfferItem) ? get_class($cancelOfferArrayTypeCancelOfferItem) : gettype($cancelOfferArrayTypeCancelOfferItem)), __LINE__);
            }
        }
        $this->CancelOffer = $cancelOffer;
        return $this;
    }
    /**
     * Add item to CancelOffer value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CancelOfferType $item
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferArrayType
     */
    public function addToCancelOffer(\macropage\ebaysdk\trading\StructType\CancelOfferType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CancelOfferType) {
            throw new \InvalidArgumentException(sprintf('The CancelOffer property can only contain items of \macropage\ebaysdk\trading\StructType\CancelOfferType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelOffer[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\CancelOfferArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\CancelOfferArrayType
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
