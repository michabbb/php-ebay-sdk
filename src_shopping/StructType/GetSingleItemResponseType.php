<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSingleItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type of the <b>GetSingleItem</b> call, which contains detailed information about one eBay item.
 * @subpackage Structs
 */
class GetSingleItemResponseType extends AbstractResponseType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Contains details about the listing whose ID was specified in the request.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\shopping\StructType\SimpleItemType|null
     */
    protected ?\macropage\ebaysdk\shopping\StructType\SimpleItemType $Item = null;
    /**
     * Constructor method for GetSingleItemResponseType
     * @uses GetSingleItemResponseType::setItem()
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType $item
     */
    public function __construct(?\macropage\ebaysdk\shopping\StructType\SimpleItemType $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \macropage\ebaysdk\shopping\StructType\SimpleItemType|null
     */
    public function getItem(): ?\macropage\ebaysdk\shopping\StructType\SimpleItemType
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \macropage\ebaysdk\shopping\StructType\SimpleItemType $item
     * @return \macropage\ebaysdk\shopping\StructType\GetSingleItemResponseType
     */
    public function setItem(?\macropage\ebaysdk\shopping\StructType\SimpleItemType $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
}
