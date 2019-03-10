<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerTemplateResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response for deleting a Selling Manager template.
 * @subpackage Structs
 */
class DeleteSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The DeletedSaleTemplateID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager template.
     * - minOccurs: 0
     * @var string
     */
    public $DeletedSaleTemplateID;
    /**
     * The DeletedSaleTemplateName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the Selling Manager template.
     * - minOccurs: 0
     * @var string
     */
    public $DeletedSaleTemplateName;
    /**
     * Constructor method for DeleteSellingManagerTemplateResponseType
     * @uses DeleteSellingManagerTemplateResponseType::setDeletedSaleTemplateID()
     * @uses DeleteSellingManagerTemplateResponseType::setDeletedSaleTemplateName()
     * @param string $deletedSaleTemplateID
     * @param string $deletedSaleTemplateName
     */
    public function __construct($deletedSaleTemplateID = null, $deletedSaleTemplateName = null)
    {
        $this
            ->setDeletedSaleTemplateID($deletedSaleTemplateID)
            ->setDeletedSaleTemplateName($deletedSaleTemplateName);
    }
    /**
     * Get DeletedSaleTemplateID value
     * @return string|null
     */
    public function getDeletedSaleTemplateID()
    {
        return $this->DeletedSaleTemplateID;
    }
    /**
     * Set DeletedSaleTemplateID value
     * @param string $deletedSaleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateResponseType
     */
    public function setDeletedSaleTemplateID($deletedSaleTemplateID = null)
    {
        // validation for constraint: string
        if (!is_null($deletedSaleTemplateID) && !is_string($deletedSaleTemplateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deletedSaleTemplateID)), __LINE__);
        }
        $this->DeletedSaleTemplateID = $deletedSaleTemplateID;
        return $this;
    }
    /**
     * Get DeletedSaleTemplateName value
     * @return string|null
     */
    public function getDeletedSaleTemplateName()
    {
        return $this->DeletedSaleTemplateName;
    }
    /**
     * Set DeletedSaleTemplateName value
     * @param string $deletedSaleTemplateName
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateResponseType
     */
    public function setDeletedSaleTemplateName($deletedSaleTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($deletedSaleTemplateName) && !is_string($deletedSaleTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deletedSaleTemplateName)), __LINE__);
        }
        $this->DeletedSaleTemplateName = $deletedSaleTemplateName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateResponseType
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
