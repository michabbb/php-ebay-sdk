<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityAffiliationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to hold an array of one or more eBay for Charity organizations that are affiliated with the seller's account.
 * @subpackage Structs
 */
class CharityAffiliationDetailsType extends AbstractStructBase
{
    /**
     * The CharityAffiliationDetail
     * Meta information extracted from the WSDL
     * - documentation: A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType[]
     */
    protected array $CharityAffiliationDetail = [];
    /**
     * Constructor method for CharityAffiliationDetailsType
     * @uses CharityAffiliationDetailsType::setCharityAffiliationDetail()
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType[] $charityAffiliationDetail
     */
    public function __construct(array $charityAffiliationDetail = [])
    {
        $this
            ->setCharityAffiliationDetail($charityAffiliationDetail);
    }
    /**
     * Get CharityAffiliationDetail value
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType[]
     */
    public function getCharityAffiliationDetail(): array
    {
        return $this->CharityAffiliationDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setCharityAffiliationDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharityAffiliationDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharityAffiliationDetailForArrayConstraintsFromSetCharityAffiliationDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $charityAffiliationDetailsTypeCharityAffiliationDetailItem) {
            // validation for constraint: itemType
            if (!$charityAffiliationDetailsTypeCharityAffiliationDetailItem instanceof \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType) {
                $invalidValues[] = is_object($charityAffiliationDetailsTypeCharityAffiliationDetailItem) ? get_class($charityAffiliationDetailsTypeCharityAffiliationDetailItem) : sprintf('%s(%s)', gettype($charityAffiliationDetailsTypeCharityAffiliationDetailItem), var_export($charityAffiliationDetailsTypeCharityAffiliationDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CharityAffiliationDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CharityAffiliationDetail value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType[] $charityAffiliationDetail
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType
     */
    public function setCharityAffiliationDetail(array $charityAffiliationDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($charityAffiliationDetailArrayErrorMessage = self::validateCharityAffiliationDetailForArrayConstraintsFromSetCharityAffiliationDetail($charityAffiliationDetail))) {
            throw new InvalidArgumentException($charityAffiliationDetailArrayErrorMessage, __LINE__);
        }
        $this->CharityAffiliationDetail = $charityAffiliationDetail;
        
        return $this;
    }
    /**
     * Add item to CharityAffiliationDetail value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailsType
     */
    public function addToCharityAffiliationDetail(\macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType) {
            throw new InvalidArgumentException(sprintf('The CharityAffiliationDetail property can only contain items of type \macropage\ebaysdk\trading\StructType\CharityAffiliationDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CharityAffiliationDetail[] = $item;
        
        return $this;
    }
}
