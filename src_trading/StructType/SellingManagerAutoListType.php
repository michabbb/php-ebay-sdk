<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerAutoListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information about an automated listing rule. Automated listing rules cannot be combined with automated relisting rules. A template can have one set of information per automated listing rule specified.
 * @subpackage Structs
 */
class SellingManagerAutoListType extends AbstractStructBase
{
    /**
     * The SourceSaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: The source template ID for the rule that was retrieved. In the case of automated listing rules retrieved for an item, even if the item does not have an associated automation rule, an automated listing rule is inherited from the
     * source template.
     * - minOccurs: 0
     * @var int
     */
    public $SourceSaleTemplateID;
    /**
     * The KeepMinActive
     * Meta informations extracted from the WSDL
     * - documentation: Specifies an automated listing rule that keeps a minimum number of listings on the site.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType
     */
    public $KeepMinActive;
    /**
     * The ListAccordingToSchedule
     * Meta informations extracted from the WSDL
     * - documentation: Specifies an automated listing rule that lists items according to a specified schedule.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType
     */
    public $ListAccordingToSchedule;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerAutoListType
     * @uses SellingManagerAutoListType::setSourceSaleTemplateID()
     * @uses SellingManagerAutoListType::setKeepMinActive()
     * @uses SellingManagerAutoListType::setListAccordingToSchedule()
     * @uses SellingManagerAutoListType::setAny()
     * @param int $sourceSaleTemplateID
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule
     * @param \DOMDocument $any
     */
    public function __construct($sourceSaleTemplateID = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive = null, \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule = null, \DOMDocument $any = null)
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
    public function getSourceSaleTemplateID()
    {
        return $this->SourceSaleTemplateID;
    }
    /**
     * Set SourceSaleTemplateID value
     * @param int $sourceSaleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
     */
    public function setSourceSaleTemplateID($sourceSaleTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($sourceSaleTemplateID) && !is_numeric($sourceSaleTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sourceSaleTemplateID)), __LINE__);
        }
        $this->SourceSaleTemplateID = $sourceSaleTemplateID;
        return $this;
    }
    /**
     * Get KeepMinActive value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType|null
     */
    public function getKeepMinActive()
    {
        return $this->KeepMinActive;
    }
    /**
     * Set KeepMinActive value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
     */
    public function setKeepMinActive(\macropage\ebaysdk\trading\StructType\SellingManagerAutoListMinActiveItemsType $keepMinActive = null)
    {
        $this->KeepMinActive = $keepMinActive;
        return $this;
    }
    /**
     * Get ListAccordingToSchedule value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType|null
     */
    public function getListAccordingToSchedule()
    {
        return $this->ListAccordingToSchedule;
    }
    /**
     * Set ListAccordingToSchedule value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
     */
    public function setListAccordingToSchedule(\macropage\ebaysdk\trading\StructType\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule = null)
    {
        $this->ListAccordingToSchedule = $listAccordingToSchedule;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAutoListType
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
