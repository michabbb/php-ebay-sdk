<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryItemSpecificsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>CategorySpecific</b> container in the <b>GetCategorySpecifics</b> request. The <b>CategorySpecific</b> container is used when a seller wants to pass in Item Specific name-value(s) pairs for a specific
 * category to discover if eBay has better name or value recommendations for that Item Specific.
 * @subpackage Structs
 */
class CategoryItemSpecificsType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: An eBay category ID is passed into this field to identify the eBay category for which the seller is providing Item Specific name-value(s) pairs. Multiple <b>CategoryID</b> fields can be passed in if the Item Specific name-value(s)
     * pairs are applicable for multiple categories. However, more categories can result in longer call response times. If your request times out, specify fewer category IDs. <br> <br> <span class="tablenote"><b>Note:</b> The call request requires either
     * one or more <b>CategoryID</b> values (at the root level), one or more <b>CategorySpecific.CategoryID</b> values, or the <b>CategorySpecificsFileInfo</b> boolean field. The <b>CategorySpecificsFileInfo</b> field is only used if the user plans to use
     * the <b>downloadFile</b> call of the <b>FileTransfer</b> API to retrieve Item Specifics. <b>CategoryID</b> and <b>CategorySpecific.CategoryID</b> can both be used in the same call request. </span>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The ItemSpecifics
     * Meta information extracted from the WSDL
     * - documentation: This container is used to input Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific. The Item Specific name can be an arbitrary name that the
     * user wants to check, or it could be a name that was returned in a prior <b>GetCategorySpecifics</b> response. At least one <b>NameValueList</b> container must be used if the <b>CategorySpecific</b> container is used.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $ItemSpecifics = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for CategoryItemSpecificsType
     * @uses CategoryItemSpecificsType::setCategoryID()
     * @uses CategoryItemSpecificsType::setItemSpecifics()
     * @uses CategoryItemSpecificsType::setAny()
     * @param string $categoryID
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $categoryID = null, ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null, $any = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setItemSpecifics($itemSpecifics)
            ->setAny($any);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get ItemSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getItemSpecifics(): ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
    {
        return $this->ItemSpecifics;
    }
    /**
     * Set ItemSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics
     * @return \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType
     */
    public function setItemSpecifics(?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $itemSpecifics = null): self
    {
        $this->ItemSpecifics = $itemSpecifics;
        
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
     * @return \macropage\ebaysdk\trading\StructType\CategoryItemSpecificsType
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
