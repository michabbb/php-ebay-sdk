<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>VariationDetails</b> container that is returned in <b>GeteBayDetails</b> if <b>VariationDetails</b> is included in the request as a <b>DetailName</b> filter, or if <b>GeteBayDetails</b> is called with no
 * <b>DetailName</b> filters.
 * @subpackage Structs
 */
class VariationDetailsType extends AbstractStructBase
{
    /**
     * The MaxVariationsPerItem
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the maximum number of item variations that the site will allow within one multi-variation listing.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxVariationsPerItem = null;
    /**
     * The MaxNamesPerVariationSpecificsSet
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the maximum number of variation specific sets that the site will allow per listing. Typical variation specific sets for clothing may be 'Color', 'Size', 'Long Sleeve', etc.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxNamesPerVariationSpecificsSet = null;
    /**
     * The MaxValuesPerVariationSpecificsSetName
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the maximum number of values that the site will allow within one variation specific set. For example, if the variation specific set was 'Color', the seller could specify as many colors that are available up to
     * this maximum value.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxValuesPerVariationSpecificsSetName = null;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DetailVersion = null;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UpdateTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VariationDetailsType
     * @uses VariationDetailsType::setMaxVariationsPerItem()
     * @uses VariationDetailsType::setMaxNamesPerVariationSpecificsSet()
     * @uses VariationDetailsType::setMaxValuesPerVariationSpecificsSetName()
     * @uses VariationDetailsType::setDetailVersion()
     * @uses VariationDetailsType::setUpdateTime()
     * @uses VariationDetailsType::setAny()
     * @param int $maxVariationsPerItem
     * @param int $maxNamesPerVariationSpecificsSet
     * @param int $maxValuesPerVariationSpecificsSetName
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $maxVariationsPerItem = null, ?int $maxNamesPerVariationSpecificsSet = null, ?int $maxValuesPerVariationSpecificsSetName = null, ?string $detailVersion = null, ?string $updateTime = null, $any = null)
    {
        $this
            ->setMaxVariationsPerItem($maxVariationsPerItem)
            ->setMaxNamesPerVariationSpecificsSet($maxNamesPerVariationSpecificsSet)
            ->setMaxValuesPerVariationSpecificsSetName($maxValuesPerVariationSpecificsSetName)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get MaxVariationsPerItem value
     * @return int|null
     */
    public function getMaxVariationsPerItem(): ?int
    {
        return $this->MaxVariationsPerItem;
    }
    /**
     * Set MaxVariationsPerItem value
     * @param int $maxVariationsPerItem
     * @return \macropage\ebaysdk\trading\StructType\VariationDetailsType
     */
    public function setMaxVariationsPerItem(?int $maxVariationsPerItem = null): self
    {
        // validation for constraint: int
        if (!is_null($maxVariationsPerItem) && !(is_int($maxVariationsPerItem) || ctype_digit($maxVariationsPerItem))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxVariationsPerItem, true), gettype($maxVariationsPerItem)), __LINE__);
        }
        $this->MaxVariationsPerItem = $maxVariationsPerItem;
        
        return $this;
    }
    /**
     * Get MaxNamesPerVariationSpecificsSet value
     * @return int|null
     */
    public function getMaxNamesPerVariationSpecificsSet(): ?int
    {
        return $this->MaxNamesPerVariationSpecificsSet;
    }
    /**
     * Set MaxNamesPerVariationSpecificsSet value
     * @param int $maxNamesPerVariationSpecificsSet
     * @return \macropage\ebaysdk\trading\StructType\VariationDetailsType
     */
    public function setMaxNamesPerVariationSpecificsSet(?int $maxNamesPerVariationSpecificsSet = null): self
    {
        // validation for constraint: int
        if (!is_null($maxNamesPerVariationSpecificsSet) && !(is_int($maxNamesPerVariationSpecificsSet) || ctype_digit($maxNamesPerVariationSpecificsSet))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxNamesPerVariationSpecificsSet, true), gettype($maxNamesPerVariationSpecificsSet)), __LINE__);
        }
        $this->MaxNamesPerVariationSpecificsSet = $maxNamesPerVariationSpecificsSet;
        
        return $this;
    }
    /**
     * Get MaxValuesPerVariationSpecificsSetName value
     * @return int|null
     */
    public function getMaxValuesPerVariationSpecificsSetName(): ?int
    {
        return $this->MaxValuesPerVariationSpecificsSetName;
    }
    /**
     * Set MaxValuesPerVariationSpecificsSetName value
     * @param int $maxValuesPerVariationSpecificsSetName
     * @return \macropage\ebaysdk\trading\StructType\VariationDetailsType
     */
    public function setMaxValuesPerVariationSpecificsSetName(?int $maxValuesPerVariationSpecificsSetName = null): self
    {
        // validation for constraint: int
        if (!is_null($maxValuesPerVariationSpecificsSetName) && !(is_int($maxValuesPerVariationSpecificsSetName) || ctype_digit($maxValuesPerVariationSpecificsSetName))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxValuesPerVariationSpecificsSetName, true), gettype($maxValuesPerVariationSpecificsSetName)), __LINE__);
        }
        $this->MaxValuesPerVariationSpecificsSetName = $maxValuesPerVariationSpecificsSetName;
        
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion(): ?string
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\VariationDetailsType
     */
    public function setDetailVersion(?string $detailVersion = null): self
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\VariationDetailsType
     */
    public function setUpdateTime(?string $updateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VariationDetailsType
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
