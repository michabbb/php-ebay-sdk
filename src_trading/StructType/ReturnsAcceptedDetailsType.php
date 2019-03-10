<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnsAcceptedDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ReturnPolicyDetails.ReturnsAccepted</b> container that is returned in <b>GeteBayDetails</b>. This container contains the values that may be used in the <b>ReturnPolicy.ReturnsAcceptedOption</b> field of
 * Add/Revise/Relist API calls. <br><br> <span class="tablenote"><b>Note:</b> The <b>GeteBayDetails</b> call returns site-default Return Policy settings. For most categories within a given eBay site, the supported Return Policy options/values are the
 * same, but there a few exceptions. To discover what returns accepted options that a particular category supports, call <b>GetCategoryFeatures</b> and include <code>DomesticReturnsAcceptedValues</code> and/or
 * <code>InternationalReturnsAcceptedValues</code> as <b>FeatureID</b> values to see the returns accepted options available for domestic and international returns, respectively. </span>
 * @subpackage Structs
 */
class ReturnsAcceptedDetailsType extends AbstractStructBase
{
    /**
     * The ReturnsAcceptedOption
     * Meta informations extracted from the WSDL
     * - documentation: Whether the seller allows the buyer to return the item. This value can be passed in the AddItem family of calls.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsAcceptedOption;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Display string that applications can use to present ReturnsAcceptedOption in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReturnsAcceptedDetailsType
     * @uses ReturnsAcceptedDetailsType::setReturnsAcceptedOption()
     * @uses ReturnsAcceptedDetailsType::setDescription()
     * @uses ReturnsAcceptedDetailsType::setAny()
     * @param string $returnsAcceptedOption
     * @param string $description
     * @param \DOMDocument $any
     */
    public function __construct($returnsAcceptedOption = null, $description = null, \DOMDocument $any = null)
    {
        $this
            ->setReturnsAcceptedOption($returnsAcceptedOption)
            ->setDescription($description)
            ->setAny($any);
    }
    /**
     * Get ReturnsAcceptedOption value
     * @return string|null
     */
    public function getReturnsAcceptedOption()
    {
        return $this->ReturnsAcceptedOption;
    }
    /**
     * Set ReturnsAcceptedOption value
     * @param string $returnsAcceptedOption
     * @return \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption = null)
    {
        // validation for constraint: string
        if (!is_null($returnsAcceptedOption) && !is_string($returnsAcceptedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnsAcceptedOption)), __LINE__);
        }
        $this->ReturnsAcceptedOption = $returnsAcceptedOption;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ReturnsAcceptedDetailsType
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
