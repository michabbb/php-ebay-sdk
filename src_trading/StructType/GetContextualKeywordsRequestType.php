<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContextualKeywordsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves top-ranked contextual eBay keywords and categories for a specified web page.
 * @subpackage Structs
 */
class GetContextualKeywordsRequestType extends AbstractRequestType
{
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the web page from which eBay is to extract keywords.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The Encoding
     * Meta information extracted from the WSDL
     * - documentation: Web page encoding by which the URL is to be handled, such as ISO-8859-1.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Encoding = null;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the category to which keywords are to be limited. Zero or more category IDs can be specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $CategoryID = [];
    /**
     * Constructor method for GetContextualKeywordsRequestType
     * @uses GetContextualKeywordsRequestType::setURL()
     * @uses GetContextualKeywordsRequestType::setEncoding()
     * @uses GetContextualKeywordsRequestType::setCategoryID()
     * @param string $uRL
     * @param string $encoding
     * @param string[] $categoryID
     */
    public function __construct(?string $uRL = null, ?string $encoding = null, array $categoryID = [])
    {
        $this
            ->setURL($uRL)
            ->setEncoding($encoding)
            ->setCategoryID($categoryID);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
     */
    public function setURL(?string $uRL = null): self
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        
        return $this;
    }
    /**
     * Get Encoding value
     * @return string|null
     */
    public function getEncoding(): ?string
    {
        return $this->Encoding;
    }
    /**
     * Set Encoding value
     * @param string $encoding
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
     */
    public function setEncoding(?string $encoding = null): self
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoding, true), gettype($encoding)), __LINE__);
        }
        $this->Encoding = $encoding;
        
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string[]
     */
    public function getCategoryID(): array
    {
        return $this->CategoryID;
    }
    /**
     * This method is responsible for validating the values passed to the setCategoryID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategoryID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryIDForArrayConstraintsFromSetCategoryID(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getContextualKeywordsRequestTypeCategoryIDItem) {
            // validation for constraint: itemType
            if (!is_string($getContextualKeywordsRequestTypeCategoryIDItem)) {
                $invalidValues[] = is_object($getContextualKeywordsRequestTypeCategoryIDItem) ? get_class($getContextualKeywordsRequestTypeCategoryIDItem) : sprintf('%s(%s)', gettype($getContextualKeywordsRequestTypeCategoryIDItem), var_export($getContextualKeywordsRequestTypeCategoryIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CategoryID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CategoryID value
     * @throws InvalidArgumentException
     * @param string[] $categoryID
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
     */
    public function setCategoryID(array $categoryID = []): self
    {
        // validation for constraint: array
        if ('' !== ($categoryIDArrayErrorMessage = self::validateCategoryIDForArrayConstraintsFromSetCategoryID($categoryID))) {
            throw new InvalidArgumentException($categoryIDArrayErrorMessage, __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Add item to CategoryID value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\GetContextualKeywordsRequestType
     */
    public function addToCategoryID(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CategoryID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CategoryID[] = $item;
        
        return $this;
    }
}
