<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerTemplateRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base request for the <b>AddSellingManagerTemplate</b> call, which is used to create a Selling Manager listing template. Each Selling Manager listing template must be associated with an existing Selling Manager product, and each
 * product can have up to 20 listing templates associated with it.
 * @subpackage Structs
 */
class AddSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: This <b>Item</b> container is similar to the one that is used in standard Add/Revise/Relist/Verify Item calls, with the difference being that some of the product-specific data/settings will be inherited through the Selling Manager
     * product that is referenced in the call request, and not through this <b>Item</b> container. The data that is passed in this container will become part of the listing template that is created with this call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\ItemType $Item = null;
    /**
     * The SaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: The name of the Selling Manager listing template is provided in this field. If you don't specify a name, then the value in the <b>Item.Title</b> field will be used as the name instead.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SaleTemplateName = null;
    /**
     * The ProductID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Selling Manager product that will be associated with the listing template being created. Selling Manager Product IDs are returned in the response of a <b>AddSellingManagerProduct</b> call. Alternatively,
     * the <b>GetSellingManagerInventory</b> call can be used to retrieve active Selling Manager products for the user's account.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ProductID = null;
    /**
     * Constructor method for AddSellingManagerTemplateRequestType
     * @uses AddSellingManagerTemplateRequestType::setItem()
     * @uses AddSellingManagerTemplateRequestType::setSaleTemplateName()
     * @uses AddSellingManagerTemplateRequestType::setProductID()
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @param string $saleTemplateName
     * @param int $productID
     */
    public function __construct(?\macropage\ebaysdk\trading\StructType\ItemType $item = null, ?string $saleTemplateName = null, ?int $productID = null)
    {
        $this
            ->setItem($item)
            ->setSaleTemplateName($saleTemplateName)
            ->setProductID($productID);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\trading\StructType\ItemType|null
     */
    public function getItem(): ?\macropage\ebaysdk\trading\StructType\ItemType
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\trading\StructType\ItemType $item
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateRequestType
     */
    public function setItem(?\macropage\ebaysdk\trading\StructType\ItemType $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Get SaleTemplateName value
     * @return string|null
     */
    public function getSaleTemplateName(): ?string
    {
        return $this->SaleTemplateName;
    }
    /**
     * Set SaleTemplateName value
     * @param string $saleTemplateName
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateRequestType
     */
    public function setSaleTemplateName(?string $saleTemplateName = null): self
    {
        // validation for constraint: string
        if (!is_null($saleTemplateName) && !is_string($saleTemplateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleTemplateName, true), gettype($saleTemplateName)), __LINE__);
        }
        $this->SaleTemplateName = $saleTemplateName;
        
        return $this;
    }
    /**
     * Get ProductID value
     * @return int|null
     */
    public function getProductID(): ?int
    {
        return $this->ProductID;
    }
    /**
     * Set ProductID value
     * @param int $productID
     * @return \macropage\ebaysdk\trading\StructType\AddSellingManagerTemplateRequestType
     */
    public function setProductID(?int $productID = null): self
    {
        // validation for constraint: int
        if (!is_null($productID) && !(is_int($productID) || ctype_digit($productID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productID, true), gettype($productID)), __LINE__);
        }
        $this->ProductID = $productID;
        
        return $this;
    }
}
