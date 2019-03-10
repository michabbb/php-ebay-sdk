<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductRequiredEnabledDefinitionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ProductRequiredEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>ProductRequiredEnabled</b> is included as a <a
 * href="types/FeatureIDCodeType.html">FeatureID</a> value in the call request or no <b>FeatureID</b> values are passed into the call request). The <b>ProductRequiredEnabled</b> field is returned as an empty element (a boolean value is not returned) if
 * one or more eBay API-enabled sites support the Product-Based Shopping Experience. <br><br> To verify if a specific eBay site supports Product-Based Shopping Experience, look for a <code>Enabled</code> value in the
 * <b>SiteDefaults.ProductRequiredEnabled</b> field. <br><br> To verify if a specific category on a specific eBay site requires listings to be associated with an eBay Catalog product, pass in a <b>ProductRequiredEnabled</b> value in the request, and
 * then look for a <code>Enabled</code> value in the <b>ProductRequiredEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one category ID was passed in the request).
 * @subpackage Structs
 */
class ProductRequiredEnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ProductRequiredEnabledDefinitionType
     * @uses ProductRequiredEnabledDefinitionType::setAny()
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
     * @uses \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType
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
     * @return \macropage\ebaysdk\trading\StructType\ProductRequiredEnabledDefinitionType
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
