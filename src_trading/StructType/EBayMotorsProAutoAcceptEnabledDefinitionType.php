<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayMotorsProAutoAcceptEnabledDefinitionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>eBayMotorsProAutoAcceptEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container if <code>eBayMotorsProAutoAcceptEnabled</code> is used as a <b>FeatureID</b> value in the request, or if no
 * <b>FeatureID</b> values are used in the request. This field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support the Best Offer Auto-Accept feature for eBay Motors Classified Ad listings.
 * Only eBay Motors Pro users are eligible to use eBay Motors Classified Ad listings. <br/><br/> To verify if a specific eBay site supports the Best Offer Auto-Accept feature for eBay Motors Classified Ad listings (for most categories), look for a
 * <code>true</code> value in the <b>SiteDefaults.eBayMotorsProAutoAcceptEnabled</b> field. <br/><br/> To verify if a specific category on a specific eBay site supports the Best Offer Auto-Accept feature for eBay Motors Classified Ad listings, pass in a
 * <b>CategoryID</b> value in the request, and then look for a <code>true</code> value in the <b>eBayMotorsProAutoAcceptEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were
 * passed in the request).
 * @subpackage Structs
 */
class EBayMotorsProAutoAcceptEnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for eBayMotorsProAutoAcceptEnabledDefinitionType
     * @uses EBayMotorsProAutoAcceptEnabledDefinitionType::setAny()
     * @param \DOMDocument $any
     */
    public function __construct(\DOMDocument $any = null)
    {
        $this
            ->setAny($any);
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType
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
     * @return \macropage\ebaysdk\trading\StructType\EBayMotorsProAutoAcceptEnabledDefinitionType
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
