<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionRuleType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class PromotionRuleType extends AbstractStructBase
{
    /**
     * The PromotedStoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PromotedStoreCategoryID = null;
    /**
     * The PromotedeBayCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotedeBayCategoryID = null;
    /**
     * The PromotedKeywords
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotedKeywords = null;
    /**
     * The ReferringItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReferringItemID = null;
    /**
     * The ReferringStoreCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ReferringStoreCategoryID = null;
    /**
     * The ReferringeBayCategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReferringeBayCategoryID = null;
    /**
     * The ReferringKeywords
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReferringKeywords = null;
    /**
     * The PromotionScheme
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotionScheme = null;
    /**
     * The PromotionMethod
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PromotionMethod = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for PromotionRuleType
     * @uses PromotionRuleType::setPromotedStoreCategoryID()
     * @uses PromotionRuleType::setPromotedeBayCategoryID()
     * @uses PromotionRuleType::setPromotedKeywords()
     * @uses PromotionRuleType::setReferringItemID()
     * @uses PromotionRuleType::setReferringStoreCategoryID()
     * @uses PromotionRuleType::setReferringeBayCategoryID()
     * @uses PromotionRuleType::setReferringKeywords()
     * @uses PromotionRuleType::setPromotionScheme()
     * @uses PromotionRuleType::setPromotionMethod()
     * @uses PromotionRuleType::setAny()
     * @param int $promotedStoreCategoryID
     * @param string $promotedeBayCategoryID
     * @param string $promotedKeywords
     * @param string $referringItemID
     * @param int $referringStoreCategoryID
     * @param string $referringeBayCategoryID
     * @param string $referringKeywords
     * @param string $promotionScheme
     * @param string $promotionMethod
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?int $promotedStoreCategoryID = null, ?string $promotedeBayCategoryID = null, ?string $promotedKeywords = null, ?string $referringItemID = null, ?int $referringStoreCategoryID = null, ?string $referringeBayCategoryID = null, ?string $referringKeywords = null, ?string $promotionScheme = null, ?string $promotionMethod = null, $any = null)
    {
        $this
            ->setPromotedStoreCategoryID($promotedStoreCategoryID)
            ->setPromotedeBayCategoryID($promotedeBayCategoryID)
            ->setPromotedKeywords($promotedKeywords)
            ->setReferringItemID($referringItemID)
            ->setReferringStoreCategoryID($referringStoreCategoryID)
            ->setReferringeBayCategoryID($referringeBayCategoryID)
            ->setReferringKeywords($referringKeywords)
            ->setPromotionScheme($promotionScheme)
            ->setPromotionMethod($promotionMethod)
            ->setAny($any);
    }
    /**
     * Get PromotedStoreCategoryID value
     * @return int|null
     */
    public function getPromotedStoreCategoryID(): ?int
    {
        return $this->PromotedStoreCategoryID;
    }
    /**
     * Set PromotedStoreCategoryID value
     * @param int $promotedStoreCategoryID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotedStoreCategoryID(?int $promotedStoreCategoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($promotedStoreCategoryID) && !(is_int($promotedStoreCategoryID) || ctype_digit($promotedStoreCategoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotedStoreCategoryID, true), gettype($promotedStoreCategoryID)), __LINE__);
        }
        $this->PromotedStoreCategoryID = $promotedStoreCategoryID;
        
        return $this;
    }
    /**
     * Get PromotedeBayCategoryID value
     * @return string|null
     */
    public function getPromotedeBayCategoryID(): ?string
    {
        return $this->PromotedeBayCategoryID;
    }
    /**
     * Set PromotedeBayCategoryID value
     * @param string $promotedeBayCategoryID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotedeBayCategoryID(?string $promotedeBayCategoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($promotedeBayCategoryID) && !is_string($promotedeBayCategoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotedeBayCategoryID, true), gettype($promotedeBayCategoryID)), __LINE__);
        }
        $this->PromotedeBayCategoryID = $promotedeBayCategoryID;
        
        return $this;
    }
    /**
     * Get PromotedKeywords value
     * @return string|null
     */
    public function getPromotedKeywords(): ?string
    {
        return $this->PromotedKeywords;
    }
    /**
     * Set PromotedKeywords value
     * @param string $promotedKeywords
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotedKeywords(?string $promotedKeywords = null): self
    {
        // validation for constraint: string
        if (!is_null($promotedKeywords) && !is_string($promotedKeywords)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotedKeywords, true), gettype($promotedKeywords)), __LINE__);
        }
        $this->PromotedKeywords = $promotedKeywords;
        
        return $this;
    }
    /**
     * Get ReferringItemID value
     * @return string|null
     */
    public function getReferringItemID(): ?string
    {
        return $this->ReferringItemID;
    }
    /**
     * Set ReferringItemID value
     * @param string $referringItemID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setReferringItemID(?string $referringItemID = null): self
    {
        // validation for constraint: string
        if (!is_null($referringItemID) && !is_string($referringItemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referringItemID, true), gettype($referringItemID)), __LINE__);
        }
        $this->ReferringItemID = $referringItemID;
        
        return $this;
    }
    /**
     * Get ReferringStoreCategoryID value
     * @return int|null
     */
    public function getReferringStoreCategoryID(): ?int
    {
        return $this->ReferringStoreCategoryID;
    }
    /**
     * Set ReferringStoreCategoryID value
     * @param int $referringStoreCategoryID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setReferringStoreCategoryID(?int $referringStoreCategoryID = null): self
    {
        // validation for constraint: int
        if (!is_null($referringStoreCategoryID) && !(is_int($referringStoreCategoryID) || ctype_digit($referringStoreCategoryID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referringStoreCategoryID, true), gettype($referringStoreCategoryID)), __LINE__);
        }
        $this->ReferringStoreCategoryID = $referringStoreCategoryID;
        
        return $this;
    }
    /**
     * Get ReferringeBayCategoryID value
     * @return string|null
     */
    public function getReferringeBayCategoryID(): ?string
    {
        return $this->ReferringeBayCategoryID;
    }
    /**
     * Set ReferringeBayCategoryID value
     * @param string $referringeBayCategoryID
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setReferringeBayCategoryID(?string $referringeBayCategoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($referringeBayCategoryID) && !is_string($referringeBayCategoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referringeBayCategoryID, true), gettype($referringeBayCategoryID)), __LINE__);
        }
        $this->ReferringeBayCategoryID = $referringeBayCategoryID;
        
        return $this;
    }
    /**
     * Get ReferringKeywords value
     * @return string|null
     */
    public function getReferringKeywords(): ?string
    {
        return $this->ReferringKeywords;
    }
    /**
     * Set ReferringKeywords value
     * @param string $referringKeywords
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setReferringKeywords(?string $referringKeywords = null): self
    {
        // validation for constraint: string
        if (!is_null($referringKeywords) && !is_string($referringKeywords)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referringKeywords, true), gettype($referringKeywords)), __LINE__);
        }
        $this->ReferringKeywords = $referringKeywords;
        
        return $this;
    }
    /**
     * Get PromotionScheme value
     * @return string|null
     */
    public function getPromotionScheme(): ?string
    {
        return $this->PromotionScheme;
    }
    /**
     * Set PromotionScheme value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $promotionScheme
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotionScheme(?string $promotionScheme = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::valueIsValid($promotionScheme)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType', is_array($promotionScheme) ? implode(', ', $promotionScheme) : var_export($promotionScheme, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionSchemeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionScheme = $promotionScheme;
        
        return $this;
    }
    /**
     * Get PromotionMethod value
     * @return string|null
     */
    public function getPromotionMethod(): ?string
    {
        return $this->PromotionMethod;
    }
    /**
     * Set PromotionMethod value
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $promotionMethod
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
     */
    public function setPromotionMethod(?string $promotionMethod = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::valueIsValid($promotionMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType', is_array($promotionMethod) ? implode(', ', $promotionMethod) : var_export($promotionMethod, true), implode(', ', \macropage\ebaysdk\trading\EnumType\PromotionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionMethod = $promotionMethod;
        
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
     * @return \macropage\ebaysdk\trading\StructType\PromotionRuleType
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
