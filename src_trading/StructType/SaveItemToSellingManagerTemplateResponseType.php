<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveItemToSellingManagerTemplateResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response of the <b>SaveItemToSellingManagerTemplate</b> call. A successful call will return a <b>TemplateID</b> value for the newly-created Selling Manager template.
 * @subpackage Structs
 */
class SaveItemToSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The TemplateID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the newly-created Selling Manager template. As long as the call was successful, this field is always returned.
     * - minOccurs: 0
     * @var int
     */
    public $TemplateID;
    /**
     * Constructor method for SaveItemToSellingManagerTemplateResponseType
     * @uses SaveItemToSellingManagerTemplateResponseType::setTemplateID()
     * @param int $templateID
     */
    public function __construct($templateID = null)
    {
        $this
            ->setTemplateID($templateID);
    }
    /**
     * Get TemplateID value
     * @return int|null
     */
    public function getTemplateID()
    {
        return $this->TemplateID;
    }
    /**
     * Set TemplateID value
     * @param int $templateID
     * @return \macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateResponseType
     */
    public function setTemplateID($templateID = null)
    {
        // validation for constraint: int
        if (!is_null($templateID) && !is_numeric($templateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($templateID)), __LINE__);
        }
        $this->TemplateID = $templateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\SaveItemToSellingManagerTemplateResponseType
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
