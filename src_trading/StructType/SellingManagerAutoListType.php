<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoListType StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides information about an automated listing rule. Automated listing rules cannot be combined with automated relisting rules. A template can have one set of information per automated listing rule specified.
 * @subpackage Structs
 */
class SellingManagerAutoListType extends AbstractStructBase
{
    /**
     * The SourceSaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The source template ID for the rule that was retrieved. In the case of automated listing rules retrieved for an item, even if the item does not have an associated automation rule, an automated listing rule is inherited from the
     * source template.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SourceSaleTemplateID = null;
    /**
     * The KeepMinActive
     * Meta information extracted from the WSDL
     * - documentation: Specifies an automated listing rule that keeps a minimum number of listings on the site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $KeepMinActive = null;
    /**
     * The ListAccordingToSchedule
     * Meta information extracted from the WSDL
     * - documentation: Specifies an automated listing rule that lists items according to a specified schedule.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $ListAccordingToSchedule = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for SellingManagerAutoListType
     * @uses SellingManagerAutoListType::setSourceSaleTemplateID()
     * @uses SellingManagerAutoListType::setKeepMinActive()
     * @uses SellingManagerAutoListType::setListAccordingToSchedule()
     * @uses SellingManagerAutoListType::setAny()
     * @param int $sourceSaleTemplateID
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $sourceSaleTemplateID = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive = null, ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule = null, $any = null)
    {
        $this
            ->setSourceSaleTemplateID($sourceSaleTemplateID)
            ->setKeepMinActive($keepMinActive)
            ->setListAccordingToSchedule($listAccordingToSchedule)
            ->setAny($any);
    }
    /**
     * Get SourceSaleTemplateID value
     * @return int|null
     */
    public function getSourceSaleTemplateID(): ?int
    {
        return $this->SourceSaleTemplateID;
    }
    /**
     * Set SourceSaleTemplateID value
     * @param int $sourceSaleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
     */
    public function setSourceSaleTemplateID(?int $sourceSaleTemplateID = null): self
    {
        // validation for constraint: int
        if (!is_null($sourceSaleTemplateID) && !(is_int($sourceSaleTemplateID) || ctype_digit($sourceSaleTemplateID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sourceSaleTemplateID, true), gettype($sourceSaleTemplateID)), __LINE__);
        }
        $this->SourceSaleTemplateID = $sourceSaleTemplateID;
        
        return $this;
    }
    /**
     * Get KeepMinActive value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType|null
     */
    public function getKeepMinActive(): ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType
    {
        return $this->KeepMinActive;
    }
    /**
     * Set KeepMinActive value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
     */
    public function setKeepMinActive(?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive = null): self
    {
        $this->KeepMinActive = $keepMinActive;
        
        return $this;
    }
    /**
     * Get ListAccordingToSchedule value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType|null
     */
    public function getListAccordingToSchedule(): ?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
    {
        return $this->ListAccordingToSchedule;
    }
    /**
     * Set ListAccordingToSchedule value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
     */
    public function setListAccordingToSchedule(?\macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule = null): self
    {
        $this->ListAccordingToSchedule = $listAccordingToSchedule;
        
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
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
