<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerTemplateResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for deleting a Selling Manager template.
 * @subpackage Structs
 */
class DeleteSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The DeletedSaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager template.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeletedSaleTemplateID = null;
    /**
     * The DeletedSaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: The name of the Selling Manager template.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DeletedSaleTemplateName = null;
    /**
     * Constructor method for DeleteSellingManagerTemplateResponseType
     * @uses DeleteSellingManagerTemplateResponseType::setDeletedSaleTemplateID()
     * @uses DeleteSellingManagerTemplateResponseType::setDeletedSaleTemplateName()
     * @param string $deletedSaleTemplateID
     * @param string $deletedSaleTemplateName
     */
    public function __construct(?string $deletedSaleTemplateID = null, ?string $deletedSaleTemplateName = null)
    {
        $this
            ->setDeletedSaleTemplateID($deletedSaleTemplateID)
            ->setDeletedSaleTemplateName($deletedSaleTemplateName);
    }
    /**
     * Get DeletedSaleTemplateID value
     * @return string|null
     */
    public function getDeletedSaleTemplateID(): ?string
    {
        return $this->DeletedSaleTemplateID;
    }
    /**
     * Set DeletedSaleTemplateID value
     * @param string $deletedSaleTemplateID
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateResponseType
     */
    public function setDeletedSaleTemplateID(?string $deletedSaleTemplateID = null): self
    {
        // validation for constraint: string
        if (!is_null($deletedSaleTemplateID) && !is_string($deletedSaleTemplateID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deletedSaleTemplateID, true), gettype($deletedSaleTemplateID)), __LINE__);
        }
        $this->DeletedSaleTemplateID = $deletedSaleTemplateID;
        
        return $this;
    }
    /**
     * Get DeletedSaleTemplateName value
     * @return string|null
     */
    public function getDeletedSaleTemplateName(): ?string
    {
        return $this->DeletedSaleTemplateName;
    }
    /**
     * Set DeletedSaleTemplateName value
     * @param string $deletedSaleTemplateName
     * @return \macropage\ebaysdk\trading\StructType\DeleteSellingManagerTemplateResponseType
     */
    public function setDeletedSaleTemplateName(?string $deletedSaleTemplateName = null): self
    {
        // validation for constraint: string
        if (!is_null($deletedSaleTemplateName) && !is_string($deletedSaleTemplateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deletedSaleTemplateName, true), gettype($deletedSaleTemplateName)), __LINE__);
        }
        $this->DeletedSaleTemplateName = $deletedSaleTemplateName;
        
        return $this;
    }
}
