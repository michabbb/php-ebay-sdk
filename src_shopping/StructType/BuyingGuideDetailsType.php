<?php

namespace macropage\ebaysdk\shopping\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyingGuideDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: <br/><br/> <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
 * @subpackage Structs
 */
class BuyingGuideDetailsType extends AbstractStructBase
{
    /**
     * The BuyingGuide
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\BuyingGuideType[]
     */
    public $BuyingGuide;
    /**
     * The BuyingGuideHub
     * Meta informations extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call. </span>
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
     * @param \macropage\ebaysdk\shopping\StructType\BuyingGuideType[] $buyingGuide
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
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideType[]|null
     */
    public function getBuyingGuide()
    {
        return $this->BuyingGuide;
    }
    /**
     * Set BuyingGuide value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\BuyingGuideType[] $buyingGuide
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
     */
    public function setBuyingGuide(array $buyingGuide = array())
    {
        foreach ($buyingGuide as $buyingGuideDetailsTypeBuyingGuideItem) {
            // validation for constraint: itemType
            if (!$buyingGuideDetailsTypeBuyingGuideItem instanceof \macropage\ebaysdk\shopping\StructType\BuyingGuideType) {
                throw new \InvalidArgumentException(sprintf('The BuyingGuide property can only contain items of \macropage\ebaysdk\shopping\StructType\BuyingGuideType, "%s" given', is_object($buyingGuideDetailsTypeBuyingGuideItem) ? get_class($buyingGuideDetailsTypeBuyingGuideItem) : gettype($buyingGuideDetailsTypeBuyingGuideItem)), __LINE__);
            }
        }
        $this->BuyingGuide = $buyingGuide;
        return $this;
    }
    /**
     * Add item to BuyingGuide value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\shopping\StructType\BuyingGuideType $item
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
     */
    public function addToBuyingGuide(\macropage\ebaysdk\shopping\StructType\BuyingGuideType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\shopping\StructType\BuyingGuideType) {
            throw new \InvalidArgumentException(sprintf('The BuyingGuide property can only contain items of \macropage\ebaysdk\shopping\StructType\BuyingGuideType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
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
     * @uses \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType::setAny()
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
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
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
     * @return \macropage\ebaysdk\shopping\StructType\BuyingGuideDetailsType
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
