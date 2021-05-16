<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyeBaySelectionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies how to return the result list for My eBay features such as saved searches, favorite sellers, and second chance offers.
 * @subpackage Structs
 */
class MyeBaySelectionType extends AbstractStructBase
{
    /**
     * The Include
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include the container in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If
     * you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Include = null;
    /**
     * The IncludeItemCount
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include the item count in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If
     * you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeItemCount = null;
    /**
     * The IncludeFavoriteSearcheCount
     * Meta information extracted from the WSDL
     * - documentation: This field is not supported.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeFavoriteSearcheCount = null;
    /**
     * The IncludeFavoriteSellerCount
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether or not to include FavoriteSellerCount in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container.
     * <br><br> If you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeFavoriteSellerCount = null;
    /**
     * The Sort
     * Meta information extracted from the WSDL
     * - documentation: Specifies the sort order of the result. Default is Ascending.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Sort = null;
    /**
     * The MaxResults
     * Meta information extracted from the WSDL
     * - documentation: Specifies the maximum number of items in the returned list. If not specified, returns all items in the list.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxResults = null;
    /**
     * The UserDefinedListName
     * Meta information extracted from the WSDL
     * - documentation: Specifies that only the user defined list whose name matches the given name should be in the returned list. If the user does not have a matching record, no data is returned. If this element is omitted, the information for all records
     * is returned. For use only within the UserDefinedLists element.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserDefinedListName = null;
    /**
     * The IncludeListContents
     * Meta information extracted from the WSDL
     * - documentation: Specify true to return the full user defined list contents in the response's UserDefinedList containers. A value of false means only a summary of the user defined list will be returned. The default value is false.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeListContents = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for MyeBaySelectionType
     * @uses MyeBaySelectionType::setInclude()
     * @uses MyeBaySelectionType::setIncludeItemCount()
     * @uses MyeBaySelectionType::setIncludeFavoriteSearcheCount()
     * @uses MyeBaySelectionType::setIncludeFavoriteSellerCount()
     * @uses MyeBaySelectionType::setSort()
     * @uses MyeBaySelectionType::setMaxResults()
     * @uses MyeBaySelectionType::setUserDefinedListName()
     * @uses MyeBaySelectionType::setIncludeListContents()
     * @uses MyeBaySelectionType::setAny()
     * @param bool $include
     * @param bool $includeItemCount
     * @param bool $includeFavoriteSearcheCount
     * @param bool $includeFavoriteSellerCount
     * @param string $sort
     * @param int $maxResults
     * @param string $userDefinedListName
     * @param bool $includeListContents
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?bool $include = null, ?bool $includeItemCount = null, ?bool $includeFavoriteSearcheCount = null, ?bool $includeFavoriteSellerCount = null, ?string $sort = null, ?int $maxResults = null, ?string $userDefinedListName = null, ?bool $includeListContents = null, $any = null)
    {
        $this
            ->setInclude($include)
            ->setIncludeItemCount($includeItemCount)
            ->setIncludeFavoriteSearcheCount($includeFavoriteSearcheCount)
            ->setIncludeFavoriteSellerCount($includeFavoriteSellerCount)
            ->setSort($sort)
            ->setMaxResults($maxResults)
            ->setUserDefinedListName($userDefinedListName)
            ->setIncludeListContents($includeListContents)
            ->setAny($any);
    }
    /**
     * Get Include value
     * @return bool|null
     */
    public function getInclude(): ?bool
    {
        return $this->Include;
    }
    /**
     * Set Include value
     * @param bool $include
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setInclude(?bool $include = null): self
    {
        // validation for constraint: boolean
        if (!is_null($include) && !is_bool($include)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include, true), gettype($include)), __LINE__);
        }
        $this->Include = $include;
        
        return $this;
    }
    /**
     * Get IncludeItemCount value
     * @return bool|null
     */
    public function getIncludeItemCount(): ?bool
    {
        return $this->IncludeItemCount;
    }
    /**
     * Set IncludeItemCount value
     * @param bool $includeItemCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setIncludeItemCount(?bool $includeItemCount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeItemCount) && !is_bool($includeItemCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeItemCount, true), gettype($includeItemCount)), __LINE__);
        }
        $this->IncludeItemCount = $includeItemCount;
        
        return $this;
    }
    /**
     * Get IncludeFavoriteSearcheCount value
     * @return bool|null
     */
    public function getIncludeFavoriteSearcheCount(): ?bool
    {
        return $this->IncludeFavoriteSearcheCount;
    }
    /**
     * Set IncludeFavoriteSearcheCount value
     * @param bool $includeFavoriteSearcheCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setIncludeFavoriteSearcheCount(?bool $includeFavoriteSearcheCount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeFavoriteSearcheCount) && !is_bool($includeFavoriteSearcheCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFavoriteSearcheCount, true), gettype($includeFavoriteSearcheCount)), __LINE__);
        }
        $this->IncludeFavoriteSearcheCount = $includeFavoriteSearcheCount;
        
        return $this;
    }
    /**
     * Get IncludeFavoriteSellerCount value
     * @return bool|null
     */
    public function getIncludeFavoriteSellerCount(): ?bool
    {
        return $this->IncludeFavoriteSellerCount;
    }
    /**
     * Set IncludeFavoriteSellerCount value
     * @param bool $includeFavoriteSellerCount
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setIncludeFavoriteSellerCount(?bool $includeFavoriteSellerCount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeFavoriteSellerCount) && !is_bool($includeFavoriteSellerCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFavoriteSellerCount, true), gettype($includeFavoriteSellerCount)), __LINE__);
        }
        $this->IncludeFavoriteSellerCount = $includeFavoriteSellerCount;
        
        return $this;
    }
    /**
     * Get Sort value
     * @return string|null
     */
    public function getSort(): ?string
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sort
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setSort(?string $sort = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SortOrderCodeType::valueIsValid($sort)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SortOrderCodeType', is_array($sort) ? implode(', ', $sort) : var_export($sort, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SortOrderCodeType::getValidValues())), __LINE__);
        }
        $this->Sort = $sort;
        
        return $this;
    }
    /**
     * Get MaxResults value
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        return $this->MaxResults;
    }
    /**
     * Set MaxResults value
     * @param int $maxResults
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setMaxResults(?int $maxResults = null): self
    {
        // validation for constraint: int
        if (!is_null($maxResults) && !(is_int($maxResults) || ctype_digit($maxResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResults, true), gettype($maxResults)), __LINE__);
        }
        $this->MaxResults = $maxResults;
        
        return $this;
    }
    /**
     * Get UserDefinedListName value
     * @return string|null
     */
    public function getUserDefinedListName(): ?string
    {
        return $this->UserDefinedListName;
    }
    /**
     * Set UserDefinedListName value
     * @param string $userDefinedListName
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setUserDefinedListName(?string $userDefinedListName = null): self
    {
        // validation for constraint: string
        if (!is_null($userDefinedListName) && !is_string($userDefinedListName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userDefinedListName, true), gettype($userDefinedListName)), __LINE__);
        }
        $this->UserDefinedListName = $userDefinedListName;
        
        return $this;
    }
    /**
     * Get IncludeListContents value
     * @return bool|null
     */
    public function getIncludeListContents(): ?bool
    {
        return $this->IncludeListContents;
    }
    /**
     * Set IncludeListContents value
     * @param bool $includeListContents
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setIncludeListContents(?bool $includeListContents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeListContents) && !is_bool($includeListContents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeListContents, true), gettype($includeListContents)), __LINE__);
        }
        $this->IncludeListContents = $includeListContents;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\MyeBaySelectionType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
