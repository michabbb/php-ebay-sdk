<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerPackageEnclosuresType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>BuyerPackageEnclosures</b> container, which is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment
 * instructions in the shipping package(s). A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
 * @subpackage Structs
 */
class BuyerPackageEnclosuresType extends AbstractStructBase
{
    /**
     * The BuyerPackageEnclosure
     * Meta informations extracted from the WSDL
     * - documentation: A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType[]
     */
    public $BuyerPackageEnclosure;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerPackageEnclosuresType
     * @uses BuyerPackageEnclosuresType::setBuyerPackageEnclosure()
     * @uses BuyerPackageEnclosuresType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     * @param \DOMDocument $any
     */
    public function __construct(array $buyerPackageEnclosure = array(), \DOMDocument $any = null)
    {
        $this
            ->setBuyerPackageEnclosure($buyerPackageEnclosure)
            ->setAny($any);
    }
    /**
     * Get BuyerPackageEnclosure value
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType[]|null
     */
    public function getBuyerPackageEnclosure()
    {
        return $this->BuyerPackageEnclosure;
    }
    /**
     * Set BuyerPackageEnclosure value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
     */
    public function setBuyerPackageEnclosure(array $buyerPackageEnclosure = array())
    {
        foreach ($buyerPackageEnclosure as $buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) {
            // validation for constraint: itemType
            if (!$buyerPackageEnclosuresTypeBuyerPackageEnclosureItem instanceof \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType) {
                throw new \InvalidArgumentException(sprintf('The BuyerPackageEnclosure property can only contain items of \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType, "%s" given', is_object($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) ? get_class($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem) : gettype($buyerPackageEnclosuresTypeBuyerPackageEnclosureItem)), __LINE__);
            }
        }
        $this->BuyerPackageEnclosure = $buyerPackageEnclosure;
        return $this;
    }
    /**
     * Add item to BuyerPackageEnclosure value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType $item
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
     */
    public function addToBuyerPackageEnclosure(\macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType) {
            throw new \InvalidArgumentException(sprintf('The BuyerPackageEnclosure property can only contain items of \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosureType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BuyerPackageEnclosure[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyerPackageEnclosuresType
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
