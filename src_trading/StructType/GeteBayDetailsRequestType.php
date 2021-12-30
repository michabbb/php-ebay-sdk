<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeteBayDetailsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type for the <b>GeteBayDetails</b> call. This call retrieves the latest eBay feature-related metadata values that are supported when listing items. This metadata includes country codes, currency codes, Item
 * Specifics thresholds, supported Return Policy values, available shipping carriers and shipping service options, and more. This call may be used to keep metadata up-to-date in your applications. <br><br> In some cases, the data returned in the
 * response will vary according to the eBay site that you use for the request.
 * @subpackage Structs
 */
class GeteBayDetailsRequestType extends AbstractRequestType
{
    /**
     * The DetailName
     * Meta information extracted from the WSDL
     * - documentation: One or more <b>DetailName</b> fields may be used to control the the type of metadata that is returned in the response. If no <b>DetailName</b> fields are used, all metadata will be returned in the response. It is a good idea to
     * familiarize yourself with the metadata that can be returned with <b>GeteBayDetails</b> by reading through the enumeration values in <a href="types/DetailNameCodeType.html">DetailNameCodeType</a>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $DetailName = null;
    /**
     * Constructor method for GeteBayDetailsRequestType
     * @uses GeteBayDetailsRequestType::setDetailName()
     * @param string[] $detailName
     */
    public function __construct(?array $detailName = null)
    {
        $this
            ->setDetailName($detailName);
    }
    /**
     * Get DetailName value
     * @return string[]
     */
    public function getDetailName(): ?array
    {
        return $this->DetailName;
    }
    /**
     * This method is responsible for validating the values passed to the setDetailName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailNameForArrayConstraintsFromSetDetailName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $geteBayDetailsRequestTypeDetailNameItem) {
            // validation for constraint: enumeration
            if (!\macropage\ebaysdk\trading\EnumType\DetailNameCodeType::valueIsValid($geteBayDetailsRequestTypeDetailNameItem)) {
                $invalidValues[] = is_object($geteBayDetailsRequestTypeDetailNameItem) ? get_class($geteBayDetailsRequestTypeDetailNameItem) : sprintf('%s(%s)', gettype($geteBayDetailsRequestTypeDetailNameItem), var_export($geteBayDetailsRequestTypeDetailNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DetailNameCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DetailName value
     * @uses \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $detailName
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType
     */
    public function setDetailName(?array $detailName = null): self
    {
        // validation for constraint: array
        if ('' !== ($detailNameArrayErrorMessage = self::validateDetailNameForArrayConstraintsFromSetDetailName($detailName))) {
            throw new InvalidArgumentException($detailNameArrayErrorMessage, __LINE__);
        }
        $this->DetailName = $detailName;
        
        return $this;
    }
    /**
     * Add item to DetailName value
     * @uses \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GeteBayDetailsRequestType
     */
    public function addToDetailName(string $item): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DetailNameCodeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DetailNameCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DetailNameCodeType::getValidValues())), __LINE__);
        }
        $this->DetailName[] = $item;
        
        return $this;
    }
}
