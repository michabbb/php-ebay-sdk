<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdFormatLeadsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns number of leads and contact and other information for each lead. One AdFormatLead node is returned for each lead.
 * @subpackage Structs
 */
class GetAdFormatLeadsResponseType extends AbstractResponseType
{
    /**
     * The AdFormatLead
     * Meta information extracted from the WSDL
     * - documentation: Contains contact and other information for one lead. One node is returned for each lead. Only returned at a detail level of ReturnAll. At least one lead must be available for the specified item to return AdFormatLead.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AdFormatLeadType[]
     */
    protected array $AdFormatLead = [];
    /**
     * The AdFormatLeadCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of leads returned. Only returned if you do not specify a detail level.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $AdFormatLeadCount = null;
    /**
     * Constructor method for GetAdFormatLeadsResponseType
     * @uses GetAdFormatLeadsResponseType::setAdFormatLead()
     * @uses GetAdFormatLeadsResponseType::setAdFormatLeadCount()
     * @param \macropage\ebaysdk\trading\StructType\AdFormatLeadType[] $adFormatLead
     * @param int $adFormatLeadCount
     */
    public function __construct(array $adFormatLead = [], ?int $adFormatLeadCount = null)
    {
        $this
            ->setAdFormatLead($adFormatLead)
            ->setAdFormatLeadCount($adFormatLeadCount);
    }
    /**
     * Get AdFormatLead value
     * @return \macropage\ebaysdk\trading\StructType\AdFormatLeadType[]
     */
    public function getAdFormatLead(): array
    {
        return $this->AdFormatLead;
    }
    /**
     * This method is responsible for validating the values passed to the setAdFormatLead method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdFormatLead method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdFormatLeadForArrayConstraintsFromSetAdFormatLead(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdFormatLeadsResponseTypeAdFormatLeadItem) {
            // validation for constraint: itemType
            if (!$getAdFormatLeadsResponseTypeAdFormatLeadItem instanceof \macropage\ebaysdk\trading\StructType\AdFormatLeadType) {
                $invalidValues[] = is_object($getAdFormatLeadsResponseTypeAdFormatLeadItem) ? get_class($getAdFormatLeadsResponseTypeAdFormatLeadItem) : sprintf('%s(%s)', gettype($getAdFormatLeadsResponseTypeAdFormatLeadItem), var_export($getAdFormatLeadsResponseTypeAdFormatLeadItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdFormatLead property can only contain items of type \macropage\ebaysdk\trading\StructType\AdFormatLeadType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdFormatLead value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AdFormatLeadType[] $adFormatLead
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType
     */
    public function setAdFormatLead(array $adFormatLead = []): self
    {
        // validation for constraint: array
        if ('' !== ($adFormatLeadArrayErrorMessage = self::validateAdFormatLeadForArrayConstraintsFromSetAdFormatLead($adFormatLead))) {
            throw new InvalidArgumentException($adFormatLeadArrayErrorMessage, __LINE__);
        }
        $this->AdFormatLead = $adFormatLead;
        
        return $this;
    }
    /**
     * Add item to AdFormatLead value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AdFormatLeadType $item
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType
     */
    public function addToAdFormatLead(\macropage\ebaysdk\trading\StructType\AdFormatLeadType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AdFormatLeadType) {
            throw new InvalidArgumentException(sprintf('The AdFormatLead property can only contain items of type \macropage\ebaysdk\trading\StructType\AdFormatLeadType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdFormatLead[] = $item;
        
        return $this;
    }
    /**
     * Get AdFormatLeadCount value
     * @return int|null
     */
    public function getAdFormatLeadCount(): ?int
    {
        return $this->AdFormatLeadCount;
    }
    /**
     * Set AdFormatLeadCount value
     * @param int $adFormatLeadCount
     * @return \macropage\ebaysdk\trading\StructType\GetAdFormatLeadsResponseType
     */
    public function setAdFormatLeadCount(?int $adFormatLeadCount = null): self
    {
        // validation for constraint: int
        if (!is_null($adFormatLeadCount) && !(is_int($adFormatLeadCount) || ctype_digit($adFormatLeadCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adFormatLeadCount, true), gettype($adFormatLeadCount)), __LINE__);
        }
        $this->AdFormatLeadCount = $adFormatLeadCount;
        
        return $this;
    }
}
