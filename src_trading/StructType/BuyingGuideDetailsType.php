<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyingGuideDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class BuyingGuideDetailsType extends AbstractStructBase
{
    /**
     * The BuyingGuide
     * Meta informations extracted from the WSDL
     * - documentation: Information that identifies a buying guide. A buying guide contains content about particular product areas, categories, or subjects to help buyers decide which type of item to purchase based on their particular interests. Buying
     * guides are useful to buyers who do not have a specific product in mind. For example, a digital camera buying guide could help a buyer determine what kind of digital camera is right for them.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\BuyingGuideType[]
     */
    public $BuyingGuide;
    /**
     * The BuyingGuideHub
     * Meta informations extracted from the WSDL
     * - documentation: URL of the buying guide home page for the site being searched. Your application can present this URL as a link. Optionally, you can use a value like "See all buying guides" as the link's display name.
     * - minOccurs: 0
     * @var string
     */
    public $BuyingGuideHub;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyingGuideDetailsType
     * @uses BuyingGuideDetailsType::setBuyingGuide()
     * @uses BuyingGuideDetailsType::setBuyingGuideHub()
     * @uses BuyingGuideDetailsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\BuyingGuideType[] $buyingGuide
     * @param string $buyingGuideHub
     * @param \DOMDocument $any
     */
    public function __construct(array $buyingGuide = array(), $buyingGuideHub = null, \DOMDocument $any = null)
    {
        $this
            ->setBuyingGuide($buyingGuide)
            ->setBuyingGuideHub($buyingGuideHub)
            ->setAny($any);
    }
    /**
     * Get BuyingGuide value
     * @return \macropage\ebaysdk\trading\StructType\BuyingGuideType[]|null
     */
    public function getBuyingGuide()
    {
        return $this->BuyingGuide;
    }
    /**
     * Set BuyingGuide value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BuyingGuideType[] $buyingGuide
     * @return \macropage\ebaysdk\trading\StructType\BuyingGuideDetailsType
     */
    public function setBuyingGuide(array $buyingGuide = array())
    {
        foreach ($buyingGuide as $buyingGuideDetailsTypeBuyingGuideItem) {
            // validation for constraint: itemType
            if (!$buyingGuideDetailsTypeBuyingGuideItem instanceof \macropage\ebaysdk\trading\StructType\BuyingGuideType) {
                throw new \InvalidArgumentException(sprintf('The BuyingGuide property can only contain items of \macropage\ebaysdk\trading\StructType\BuyingGuideType, "%s" given', is_object($buyingGuideDetailsTypeBuyingGuideItem) ? get_class($buyingGuideDetailsTypeBuyingGuideItem) : gettype($buyingGuideDetailsTypeBuyingGuideItem)), __LINE__);
            }
        }
        $this->BuyingGuide = $buyingGuide;
        return $this;
    }
    /**
     * Add item to BuyingGuide value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\BuyingGuideType $item
     * @return \macropage\ebaysdk\trading\StructType\BuyingGuideDetailsType
     */
    public function addToBuyingGuide(\macropage\ebaysdk\trading\StructType\BuyingGuideType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\BuyingGuideType) {
            throw new \InvalidArgumentException(sprintf('The BuyingGuide property can only contain items of \macropage\ebaysdk\trading\StructType\BuyingGuideType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BuyingGuide[] = $item;
        return $this;
    }
    /**
     * Get BuyingGuideHub value
     * @return string|null
     */
    public function getBuyingGuideHub()
    {
        return $this->BuyingGuideHub;
    }
    /**
     * Set BuyingGuideHub value
     * @param string $buyingGuideHub
     * @return \macropage\ebaysdk\trading\StructType\BuyingGuideDetailsType
     */
    public function setBuyingGuideHub($buyingGuideHub = null)
    {
        // validation for constraint: string
        if (!is_null($buyingGuideHub) && !is_string($buyingGuideHub)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyingGuideHub)), __LINE__);
        }
        $this->BuyingGuideHub = $buyingGuideHub;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\BuyingGuideDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\BuyingGuideDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\BuyingGuideDetailsType
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
