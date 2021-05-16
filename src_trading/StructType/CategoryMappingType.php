<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryMappingType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>CategoryMapping</b> fields that are returned in the <b>GetCategoryMappings</b> response to indicate any eBay Category IDs that have changed recently.
 * @subpackage Structs
 */
class CategoryMappingType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * The oldID
     * Meta information extracted from the WSDL
     * - documentation: This attribute value is the unique identifier of an eBay category that has been recently updated to a new Category ID, which is specified in the <b>id</b> attribute. The user will want to use the Category ID value in the <b>id</b>
     * attribute the next time they run a call that requires a Category ID. Note that Category IDs are unique to each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field.
     * @var string|null
     */
    protected ?string $oldID = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: This attribute value is the unique identifier of the currently active eBay category. The user will want to use this Category ID value the next time they run a call that requires a Category ID. Note that Category IDs are unique to
     * each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field. <br><br> <span class="tablenote"><b>Note:</b> Note that more than one <b>OldID</b> values may map into the same new category (same <b>id</b> value) since
     * sometimes multiple eBay categories may be consolidated into a new, expanded category. </span>
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * Constructor method for CategoryMappingType
     * @uses CategoryMappingType::setAny()
     * @uses CategoryMappingType::setOldID()
     * @uses CategoryMappingType::setId()
     * @param \DOMDocument|string|null $any
     * @param string $oldID
     * @param string $id
     */
    public function __construct($any = null, ?string $oldID = null, ?string $id = null)
    {
        $this
            ->setAny($any)
            ->setOldID($oldID)
            ->setId($id);
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryMappingType
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
    /**
     * Get oldID value
     * @return string|null
     */
    public function getOldID(): ?string
    {
        return $this->oldID;
    }
    /**
     * Set oldID value
     * @param string $oldID
     * @return \macropage\ebaysdk\trading\StructType\CategoryMappingType
     */
    public function setOldID(?string $oldID = null): self
    {
        // validation for constraint: string
        if (!is_null($oldID) && !is_string($oldID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldID, true), gettype($oldID)), __LINE__);
        }
        $this->oldID = $oldID;
        
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \macropage\ebaysdk\trading\StructType\CategoryMappingType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
}
