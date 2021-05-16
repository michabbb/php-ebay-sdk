<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KTypeSupportedDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>KTypeSupported</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as <b>KTypeSupported</b> is included as a <b>FeatureID</b> value in the
 * call request, or no <b>FeatureID</b> values are passed into the call request). The <b>KTypeSupported</b> field is returned as an empty element (a boolean value is not returned) if one or more eBay API-enabled sites support specifying parts
 * compatibility through a K Type vehicle number. <br><br> At this time, this feature is only supported for car and truck listings on the Germany site. <br><br> To verify if a specific category supports specifying parts compatibility through a K Type
 * vehicle number, pass in a <b>KTypeSupported</b> value in the request, and then look for a <code>true</code> value in the <b>KTypeSupported</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one
 * category ID was passed in the request).
 * @subpackage Structs
 */
class KTypeSupportedDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for KTypeSupportedDefinitionType
     * @uses KTypeSupportedDefinitionType::setAny()
     * @param \DOMDocument|string|null $any
     */
    public function __construct($any = null)
    {
        $this
            ->setAny($any);
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\KTypeSupportedDefinitionType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
