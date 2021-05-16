<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemStatusRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base request type of the <b>GetItemStatus</b> call. This call retrieves the current status of up to 20 eBay listings.
 * @subpackage Structs
 */
class GetItemStatusRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing to retrieve. You can retrieve the status of up to 20 listings per call, and a separate <b>ItemID</b> field is required for each listing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $ItemID = [];
    /**
     * Constructor method for GetItemStatusRequestType
     * @uses GetItemStatusRequestType::setItemID()
     * @param string[] $itemID
     */
    public function __construct(array $itemID = [])
    {
        $this
            ->setItemID($itemID);
    }
    /**
     * Get ItemID value
     * @return string[]
     */
    public function getItemID(): array
    {
        return $this->ItemID;
    }
    /**
     * This method is responsible for validating the values passed to the setItemID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIDForArrayConstraintsFromSetItemID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getItemStatusRequestTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($getItemStatusRequestTypeItemIDItem)) {
                $invalidValues[] = is_object($getItemStatusRequestTypeItemIDItem) ? get_class($getItemStatusRequestTypeItemIDItem) : sprintf('%s(%s)', gettype($getItemStatusRequestTypeItemIDItem), var_export($getItemStatusRequestTypeItemIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemID value
     * @throws InvalidArgumentException
     * @param string[] $itemID
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType
     */
    public function setItemID(array $itemID = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIDArrayErrorMessage = self::validateItemIDForArrayConstraintsFromSetItemID($itemID))) {
            throw new InvalidArgumentException($itemIDArrayErrorMessage, __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\shopping\StructType\GetItemStatusRequestType
     */
    public function addToItemID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ItemID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemID[] = $item;
        
        return $this;
    }
}
