<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerTemplateDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes a Selling Manager Template
 * @subpackage Structs
 */
class SellingManagerTemplateDetailsType extends AbstractStructBase
{
    /**
     * The SaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: ID of the template.
     * - minOccurs: 0
     * @var string
     */
    public $SaleTemplateID;
    /**
     * The SaleTemplateName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the template.
     * - minOccurs: 0
     * @var string
     */
    public $SaleTemplateName;
    /**
     * The SuccessPercent
     * Meta informations extracted from the WSDL
     * - documentation: Success ratio.
     * - minOccurs: 0
     * @var float
     */
    public $SuccessPercent;
    /**
     * The SellingManagerProductDetails
     * Meta informations extracted from the WSDL
     * - documentation: The details of the product that this template belongs to.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The Template
     * Meta informations extracted from the WSDL
     * - documentation: ItemType object that contains the data for the specified template.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType
     */
    public $Template;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerTemplateDetailsType
     * @uses SellingManagerTemplateDetailsType::setSaleTemplateID()
     * @uses SellingManagerTemplateDetailsType::setSaleTemplateName()
     * @uses SellingManagerTemplateDetailsType::setSuccessPercent()
     * @uses SellingManagerTemplateDetailsType::setSellingManagerProductDetails()
     * @uses SellingManagerTemplateDetailsType::setTemplate()
     * @uses SellingManagerTemplateDetailsType::setAny()
     * @param string $saleTemplateID
     * @param string $saleTemplateName
     * @param float $successPercent
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \macropage\ebaysdk\trading\StructType\ItemType $template
     * @param \DOMDocument $any
     */
    public function __construct($saleTemplateID = null, $saleTemplateName = null, $successPercent = null, \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \macropage\ebaysdk\trading\StructType\ItemType $template = null, \DOMDocument $any = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID)
            ->setSaleTemplateName($saleTemplateName)
            ->setSuccessPercent($successPercent)
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setTemplate($template)
            ->setAny($any);
    }
    /**
     * Get SaleTemplateID value
     * @return string|null
     */
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param string $saleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setSaleTemplateID($saleTemplateID = null)
    {
        // validation for constraint: string
        if (!is_null($saleTemplateID) && !is_string($saleTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
    }
    /**
     * Get SaleTemplateName value
     * @return string|null
     */
    public function getSaleTemplateName()
    {
        return $this->SaleTemplateName;
    }
    /**
     * Set SaleTemplateName value
     * @param string $saleTemplateName
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setSaleTemplateName($saleTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($saleTemplateName) && !is_string($saleTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($saleTemplateName)), __LINE__);
        }
        $this->SaleTemplateName = $saleTemplateName;
        return $this;
    }
    /**
     * Get SuccessPercent value
     * @return float|null
     */
    public function getSuccessPercent()
    {
        return $this->SuccessPercent;
    }
    /**
     * Set SuccessPercent value
     * @param float $successPercent
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setSuccessPercent($successPercent = null)
    {
        $this->SuccessPercent = $successPercent;
        return $this;
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setSellingManagerProductDetails(\macropage\ebaysdk\trading\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get Template value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getTemplate()
    {
        return $this->Template;
    }
    /**
     * Set Template value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $template
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
     */
    public function setTemplate(\macropage\ebaysdk\trading\StructType\ItemType $template = null)
    {
        $this->Template = $template;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerTemplateDetailsType
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
