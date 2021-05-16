<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaxItemCompatibilityDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines the maximum limit on compatible applications as part of the parts compatibility feature. If the field is present, the corresponding feature applies to the site. The field is returned as an empty element (e.g., a boolean value
 * is not returned). <br><br> Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed witih parts compatibility can be matched with vehicles (e.g.,
 * specific years, makes, and models) with which the part or accessory can be used. <br><br> There are two ways to enter parts compatibility: by application and by specification. <ul> <li> Entering parts compatibility by application specifies the
 * assemblies (e.g., a specific year, make, and model of car) to which the item applies. This can be done automatically by listing with a catalog product that supports parts compatibility, or manually, using <b class="con">Item.ItemCompatibilityList</b>
 * when listing or revising an item. </li> <li>Entering parts compatibility by specification involves specifying the part's relevant dimensions and characteristics necessary to determine the assemblies with which the part is compatible (e.g., Section
 * Width, Aspect Ratio, Rim Diammeter, Load Index, and Speed Rating values for a tire) using attributes.</li> </ul>
 * @subpackage Structs
 */
class MaxItemCompatibilityDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MaxItemCompatibilityDefinitionType
     * @uses MaxItemCompatibilityDefinitionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MaxItemCompatibilityDefinitionType
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
