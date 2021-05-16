<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCharitiesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetCharities</b> call. This call is used to search for eBay for Charity nonprofit organizations. A <b>Charity</b> container is returned for each nonprofit organization that matches the
 * criteria in the call request.
 * @subpackage Structs
 */
class GetCharitiesResponseType extends AbstractResponseType
{
    /**
     * The Charity
     * Meta information extracted from the WSDL
     * - documentation: Each <b>Charity</b> container consists of information about a specific nonprofit organization. The eBay unique identifier of each nonprofit organization is shown in the <b>id</b> attribute of the container. If no nonprofit
     * organizations are found that match the input criteria, no <b>Charity</b> containers are returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\CharityInfoType[]
     */
    protected array $Charity = [];
    /**
     * Constructor method for GetCharitiesResponseType
     * @uses GetCharitiesResponseType::setCharity()
     * @param \macropage\ebaysdk\trading\StructType\CharityInfoType[] $charity
     */
    public function __construct(array $charity = [])
    {
        $this
            ->setCharity($charity);
    }
    /**
     * Get Charity value
     * @return \macropage\ebaysdk\trading\StructType\CharityInfoType[]
     */
    public function getCharity(): array
    {
        return $this->Charity;
    }
    /**
     * This method is responsible for validating the values passed to the setCharity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharityForArrayConstraintsFromSetCharity(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCharitiesResponseTypeCharityItem) {
            // validation for constraint: itemType
            if (!$getCharitiesResponseTypeCharityItem instanceof \macropage\ebaysdk\trading\StructType\CharityInfoType) {
                $invalidValues[] = is_object($getCharitiesResponseTypeCharityItem) ? get_class($getCharitiesResponseTypeCharityItem) : sprintf('%s(%s)', gettype($getCharitiesResponseTypeCharityItem), var_export($getCharitiesResponseTypeCharityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Charity property can only contain items of type \macropage\ebaysdk\trading\StructType\CharityInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Charity value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityInfoType[] $charity
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesResponseType
     */
    public function setCharity(array $charity = []): self
    {
        // validation for constraint: array
        if ('' !== ($charityArrayErrorMessage = self::validateCharityForArrayConstraintsFromSetCharity($charity))) {
            throw new InvalidArgumentException($charityArrayErrorMessage, __LINE__);
        }
        $this->Charity = $charity;
        
        return $this;
    }
    /**
     * Add item to Charity value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\CharityInfoType $item
     * @return \macropage\ebaysdk\trading\StructType\GetCharitiesResponseType
     */
    public function addToCharity(\macropage\ebaysdk\trading\StructType\CharityInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\CharityInfoType) {
            throw new InvalidArgumentException(sprintf('The Charity property can only contain items of type \macropage\ebaysdk\trading\StructType\CharityInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Charity[] = $item;
        
        return $this;
    }
}
