<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemFilter StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains the specifications for limiting the number of items returned by a find request. Use <b class="con">itemFilter</b> to specify name/value pairs. You can include multiple item filters in a single request.
 * @subpackage Structs
 */
class ItemFilter extends AbstractStructBase
{
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: Specify the name of the item filter you want to use. The <b>itemFilter</b> name must have a corresponding value. You can apply multiple <b>itemFilter</b> Name/Value pairs in a single request. <br><br> <b>Item Filter Names</b>:
     * <br><br> <ul> <li>AvailableTo</li> <li>BestOfferOnly</li> <li>CharityOnly</li> <li>Condition</li> <li>Currency</li> <li>EndTimeFrom</li> <li>EndTimeTo</li> <li>ExcludeAutoPay</li> <li>ExcludeCategory</li> <li>ExcludeSeller</li>
     * <li>ExpeditedShippingType</li> <li>FeaturedOnly</li> <li>FeedbackScoreMax</li> <li>FeedbackScoreMin</li> <li>FreeShippingOnly</li> <li>GetItFastOnly</li> <li>HideDuplicateItems</li> <li>ListedIn</li> <li>ListingType</li> <li>LocalPickupOnly</li>
     * <li>LocalSearchOnly</li> <li>LocatedIn</li> <li>LotsOnly</li> <li>MaxBids</li> <li>MaxDistance</li> <li>MaxHandlingTime</li> <li>MaxPrice</li> <li>MaxQuantity</li> <li>MinBids</li> <li>MinPrice</li> <li>MinQuantity</li> <li>ModTimeFrom</li>
     * <li>PaymentMethod</li> <li>ReturnsAcceptedOnly</li> <li>Seller</li> <li>SellerBusinessType</li> <li>TopRatedSellerOnly</li> <li>ValueBoxInventory</li> <li>WorldOfGoodOnly</li> </ul>
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $name;
    /**
     * The paramName
     * Meta informations extracted from the WSDL
     * - documentation: In addition to filter Name/Value pairs, some <b>itemFilter</b>s use an additional parameter Name/Value pair. Specifically, filters that use currency values (MaxPrice and MinPrice) make use of addition parameters. When you use these
     * <b>itemFilter</b>s, set <b class="con">paramName</b> to Currency and provide the currency ID in paramValue. <br><br> For example, if you use the MaxPrice <b>itemFilter</b>, you will need to specify a parameter Name of Currency with a parameter Value
     * that specifies the type of currency desired. <br><br> Note that for MaxPrice and MinPrice <b>itemFilter</b>s, the default value for <b class="con">paramName</b> is Currency.
     * - minOccurs: 0
     * @var string
     */
    public $paramName;
    /**
     * The paramValue
     * Meta informations extracted from the WSDL
     * - documentation: The currency value associated with the respective <b>itemFilter</b> parameter Name. <br><br> Usually <b class="con">paramName</b> is set to <code>Currency</code> and <b>paramValue</b> is set to the currency type in which the monetary
     * transaction occurs. <br><br> <span class="tablenote"><strong>Note:</strong> For <b>MaxPrice</b> and <b>MinPrice</b> <b>itemFilter</b>s, the default value for <b>paramValue</b> is USD.</span>
     * - minOccurs: 0
     * @var string
     */
    public $paramValue;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - documentation: The value associated with the respective item filter name. Allowed values and datatypes vary for a given filter name.
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $value;
    /**
     * The delimiter
     * @var string
     */
    public $delimiter;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemFilter
     * @uses ItemFilter::setName()
     * @uses ItemFilter::setParamName()
     * @uses ItemFilter::setParamValue()
     * @uses ItemFilter::setValue()
     * @uses ItemFilter::setDelimiter()
     * @uses ItemFilter::setAny()
     * @param string $name
     * @param string $paramName
     * @param string $paramValue
     * @param string[] $value
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $paramName = null, $paramValue = null, array $value = array(), $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setParamName($paramName)
            ->setParamValue($paramValue)
            ->setValue($value)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get name value
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @uses \macropage\ebaysdk\finding\EnumType\ItemFilterType::valueIsValid()
     * @uses \macropage\ebaysdk\finding\EnumType\ItemFilterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\finding\EnumType\ItemFilterType::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \macropage\ebaysdk\finding\EnumType\ItemFilterType::getValidValues())), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get paramName value
     * @return string|null
     */
    public function getParamName()
    {
        return $this->paramName;
    }
    /**
     * Set paramName value
     * @param string $paramName
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter
     */
    public function setParamName($paramName = null)
    {
        // validation for constraint: string
        if (!is_null($paramName) && !is_string($paramName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paramName)), __LINE__);
        }
        $this->paramName = $paramName;
        return $this;
    }
    /**
     * Get paramValue value
     * @return string|null
     */
    public function getParamValue()
    {
        return $this->paramValue;
    }
    /**
     * Set paramValue value
     * @param string $paramValue
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter
     */
    public function setParamValue($paramValue = null)
    {
        // validation for constraint: string
        if (!is_null($paramValue) && !is_string($paramValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paramValue)), __LINE__);
        }
        $this->paramValue = $paramValue;
        return $this;
    }
    /**
     * Get value value
     * @return string[]|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @throws \InvalidArgumentException
     * @param string[] $value
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter
     */
    public function setValue(array $value = array())
    {
        foreach ($value as $itemFilterValueItem) {
            // validation for constraint: itemType
            if (!is_string($itemFilterValueItem)) {
                throw new \InvalidArgumentException(sprintf('The value property can only contain items of string, "%s" given', is_object($itemFilterValueItem) ? get_class($itemFilterValueItem) : gettype($itemFilterValueItem)), __LINE__);
            }
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Add item to value value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter
     */
    public function addToValue($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The value property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->value[] = $item;
        return $this;
    }
    /**
     * Get delimiter value
     * @return string|null
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }
    /**
     * Set delimiter value
     * @param string $delimiter
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: string
        if (!is_null($delimiter) && !is_string($delimiter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($delimiter)), __LINE__);
        }
        $this->delimiter = $delimiter;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\finding\StructType\ItemFilter::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter
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
     * @return \macropage\ebaysdk\finding\StructType\ItemFilter
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
