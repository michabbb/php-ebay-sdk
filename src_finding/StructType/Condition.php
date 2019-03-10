<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Condition StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information that describes an item's condition.
 * @subpackage Structs
 */
class Condition extends AbstractStructBase
{
    /**
     * The conditionDisplayName
     * Meta informations extracted from the WSDL
     * - documentation: The human-readable label for the item condition. Display names are localized for the site on which they're listed (not necessarily the site on which they're viewed).<br> <br> In item results, this is only returned when the seller
     * specified the item's condition using a structured format eBay recognizes (e.g., conditionId or an older item specifics format).<br> <br> <b>When conditionId is also present:</b> Most categories use the same display name for the same condition ID.
     * Some categories may override the display name based on buyer expectations for items in the category. For example, condition ID 1000 could be called "New" in one category and "New with tags" in another. If an item is listed in two categories, the
     * primary category controls the display name.<br> <br> Behind the scenes, eBay's search engine uses the ID (not the display name) to determine whether items are new, used, or refurbished. So, if you need to normalize the conditions across categories
     * (such as to group items by condition), it may be easier to use the ID and then show the varying display names for reference.<br> <br> <b>In condition histograms:</b> If you search against a specific category and some items match based on their
     * secondary category, the histogram only shows the display name if the secondary category supports the condition. (Condition IDs and names are dependent on the primary category.) However, the histogram shows the condition ID and item counts. This
     * should only occur in a very small percent of results. Histograms may support display names in these cases later in 2011. As a workaround, you can fill in the missing name based on the "Item Condition IDs and Names" (link below) or based on the
     * condition from an applicable item in the results.<br> <br> For example, suppose a seller lists a concert T-shirt in a clothing category with the condition "New without tags" (1500), and also in a music accessories secondary category (where "New
     * without tags" isn't a recognized condition). If you specify the music accessories category in your request, the condition ID (1500) is shown in the histogram, but not the display name. However, the display name is shown within the items.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $conditionDisplayName;
    /**
     * The conditionId
     * Meta informations extracted from the WSDL
     * - documentation: The numeric ID (for example, 1000) for the item condition.<br> <br> In item results, this is only returned when the seller listed the item with a condition ID. Some categories don't support or require condition IDs (for example, most
     * Antiques categories don't). <br> <br> If you specify Condition in <b>itemFilter</b>, the response returns items with the correctly matching condition(s), even if conditionId is not returned. For example, if you specify a value of "New" or "1000" in
     * the item filter, the response only returns new items.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $conditionId;
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
     * Constructor method for Condition
     * @uses Condition::setConditionDisplayName()
     * @uses Condition::setConditionId()
     * @uses Condition::setDelimiter()
     * @uses Condition::setAny()
     * @param string $conditionDisplayName
     * @param int $conditionId
     * @param string $delimiter
     * @param \DOMDocument $any
     */
    public function __construct($conditionDisplayName = null, $conditionId = null, $delimiter = null, \DOMDocument $any = null)
    {
        $this
            ->setConditionDisplayName($conditionDisplayName)
            ->setConditionId($conditionId)
            ->setDelimiter($delimiter)
            ->setAny($any);
    }
    /**
     * Get conditionDisplayName value
     * @return string
     */
    public function getConditionDisplayName()
    {
        return $this->conditionDisplayName;
    }
    /**
     * Set conditionDisplayName value
     * @param string $conditionDisplayName
     * @return \macropage\ebaysdk\finding\StructType\Condition
     */
    public function setConditionDisplayName($conditionDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($conditionDisplayName) && !is_string($conditionDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conditionDisplayName)), __LINE__);
        }
        $this->conditionDisplayName = $conditionDisplayName;
        return $this;
    }
    /**
     * Get conditionId value
     * @return int|null
     */
    public function getConditionId()
    {
        return $this->conditionId;
    }
    /**
     * Set conditionId value
     * @param int $conditionId
     * @return \macropage\ebaysdk\finding\StructType\Condition
     */
    public function setConditionId($conditionId = null)
    {
        // validation for constraint: int
        if (!is_null($conditionId) && !is_numeric($conditionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($conditionId)), __LINE__);
        }
        $this->conditionId = $conditionId;
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
     * @return \macropage\ebaysdk\finding\StructType\Condition
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
     * @uses \macropage\ebaysdk\finding\StructType\Condition::setAny()
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
     * @return \macropage\ebaysdk\finding\StructType\Condition
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
     * @return \macropage\ebaysdk\finding\StructType\Condition
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
