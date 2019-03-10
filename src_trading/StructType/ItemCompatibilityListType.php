<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A list of compatible applications specified as name and value pairs. Describes an assembly with which a part is compatible (i.e., parts compatibility by application). For example, to specify a part's compatibility with a vehicle, the
 * name would map to standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The values would desribe the specific vehicle, such as a 2006 Honda Accord.
 * @subpackage Structs
 */
class ItemCompatibilityListType extends AbstractStructBase
{
    /**
     * The Compatibility
     * Meta informations extracted from the WSDL
     * - documentation: Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility
     * nodes. <br/><br/> <span class="tablenote"> <strong>Note:</strong> For the <b>GetItem</b> call, <strong>Compatibility</strong> includes only parts compatibility details that were specified manually; that is, they do not correspond to an eBay catalog
     * product. To retrieve parts compatibility details that <em>do</em> correspond to eBay catalog products, use the eBay Product API's <b>getProductCompatibilities</b> call. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemCompatibilityType[]
     */
    public $Compatibility;
    /**
     * The ReplaceAll
     * Meta informations extracted from the WSDL
     * - documentation: Set this value to true to delete or replace all existing parts compatibility information when you revise or relist an item. If set to true, all existing item parts compatibility nodes are removed from the listing. If new item
     * compatibilities are specified in the request, they replace the removed compatibilities. <br/><br/> <span class="tablenote"> <strong>Note:</strong> To ensure that buyer expectations are upheld, you cannot delete or replace an item parts compatibility
     * list if the listing has bids or if the auction ends within 12 hours. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $ReplaceAll;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemCompatibilityListType
     * @uses ItemCompatibilityListType::setCompatibility()
     * @uses ItemCompatibilityListType::setReplaceAll()
     * @uses ItemCompatibilityListType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityType[] $compatibility
     * @param bool $replaceAll
     * @param \DOMDocument $any
     */
    public function __construct(array $compatibility = array(), $replaceAll = null, \DOMDocument $any = null)
    {
        $this
            ->setCompatibility($compatibility)
            ->setReplaceAll($replaceAll)
            ->setAny($any);
    }
    /**
     * Get Compatibility value
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityType[]|null
     */
    public function getCompatibility()
    {
        return $this->Compatibility;
    }
    /**
     * Set Compatibility value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityType[] $compatibility
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
     */
    public function setCompatibility(array $compatibility = array())
    {
        foreach ($compatibility as $itemCompatibilityListTypeCompatibilityItem) {
            // validation for constraint: itemType
            if (!$itemCompatibilityListTypeCompatibilityItem instanceof \macropage\ebaysdk\trading\StructType\ItemCompatibilityType) {
                throw new \InvalidArgumentException(sprintf('The Compatibility property can only contain items of \macropage\ebaysdk\trading\StructType\ItemCompatibilityType, "%s" given', is_object($itemCompatibilityListTypeCompatibilityItem) ? get_class($itemCompatibilityListTypeCompatibilityItem) : gettype($itemCompatibilityListTypeCompatibilityItem)), __LINE__);
            }
        }
        $this->Compatibility = $compatibility;
        return $this;
    }
    /**
     * Add item to Compatibility value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ItemCompatibilityType $item
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
     */
    public function addToCompatibility(\macropage\ebaysdk\trading\StructType\ItemCompatibilityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ItemCompatibilityType) {
            throw new \InvalidArgumentException(sprintf('The Compatibility property can only contain items of \macropage\ebaysdk\trading\StructType\ItemCompatibilityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Compatibility[] = $item;
        return $this;
    }
    /**
     * Get ReplaceAll value
     * @return bool|null
     */
    public function getReplaceAll()
    {
        return $this->ReplaceAll;
    }
    /**
     * Set ReplaceAll value
     * @param bool $replaceAll
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
     */
    public function setReplaceAll($replaceAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($replaceAll) && !is_bool($replaceAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($replaceAll)), __LINE__);
        }
        $this->ReplaceAll = $replaceAll;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
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
     * @return \macropage\ebaysdk\trading\StructType\ItemCompatibilityListType
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
