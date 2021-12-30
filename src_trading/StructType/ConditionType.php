<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>ConditionValues.Condition</b> and <b>SpecialFeatures.Condition</b> containers that are returned at the site default level and category level in the <b>GetCategoryFeatures</b> response if 'ConditionValues' is
 * specified as a <b>FeatureID</b> value, or if no <b>FeatureID</b> values are specified. A <b>ConditionValues.Condition</b> container is returned for each supported item condition value for each eBay category returned in the response, and a
 * <b>SpecialFeatures.Condition</b> container is returned for item condition values that a seller must be pre-qualified to use, such as the refurbished conditions.
 * @subpackage Structs
 */
class ConditionType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: The numeric identifier of the item condition (e.g., 1000). The numeric identifier is used in the <b>Item.ConditionID</b> field in Add/Revise/Relist calls to set the condition of an item.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ID = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - documentation: The human-readable label for the condition (e.g., "New"). This value is typically localized for each site. The display name can vary by category. For example, condition ID 1000 could be called "New: with Tags" in one category and
     * "Brand New" in another.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ConditionType
     * @uses ConditionType::setID()
     * @uses ConditionType::setDisplayName()
     * @uses ConditionType::setAny()
     * @param int $iD
     * @param string $displayName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $iD = null, ?string $displayName = null, $any = null)
    {
        $this
            ->setID($iD)
            ->setDisplayName($displayName)
            ->setAny($any);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \macropage\ebaysdk\trading\StructType\ConditionType
     */
    public function setID(?int $iD = null): self
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \macropage\ebaysdk\trading\StructType\ConditionType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\ConditionType
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
