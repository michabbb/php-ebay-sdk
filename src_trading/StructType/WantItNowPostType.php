<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WantItNowPostType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class WantItNowPostType extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryID = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The PostID
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PostID = null;
    /**
     * The Site
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Site = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The ResponseCount
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ResponseCount = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Title = null;
    /**
     * Constructor method for WantItNowPostType
     * @uses WantItNowPostType::setCategoryID()
     * @uses WantItNowPostType::setDescription()
     * @uses WantItNowPostType::setPostID()
     * @uses WantItNowPostType::setSite()
     * @uses WantItNowPostType::setStartTime()
     * @uses WantItNowPostType::setResponseCount()
     * @uses WantItNowPostType::setTitle()
     * @param string $categoryID
     * @param string $description
     * @param string $postID
     * @param string $site
     * @param string $startTime
     * @param int $responseCount
     * @param string $title
     */
    public function __construct(?string $categoryID = null, ?string $description = null, ?string $postID = null, ?string $site = null, ?string $startTime = null, ?int $responseCount = null, ?string $title = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setDescription($description)
            ->setPostID($postID)
            ->setSite($site)
            ->setStartTime($startTime)
            ->setResponseCount($responseCount)
            ->setTitle($title);
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID(): ?string
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType
     */
    public function setCategoryID(?string $categoryID = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get PostID value
     * @return string|null
     */
    public function getPostID(): ?string
    {
        return $this->PostID;
    }
    /**
     * Set PostID value
     * @param string $postID
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType
     */
    public function setPostID(?string $postID = null): self
    {
        // validation for constraint: string
        if (!is_null($postID) && !is_string($postID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postID, true), gettype($postID)), __LINE__);
        }
        $this->PostID = $postID;
        
        return $this;
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite(): ?string
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType
     */
    public function setSite(?string $site = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\SiteCodeType', is_array($site) ? implode(', ', $site) : var_export($site, true), implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get ResponseCount value
     * @return int|null
     */
    public function getResponseCount(): ?int
    {
        return $this->ResponseCount;
    }
    /**
     * Set ResponseCount value
     * @param int $responseCount
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType
     */
    public function setResponseCount(?int $responseCount = null): self
    {
        // validation for constraint: int
        if (!is_null($responseCount) && !(is_int($responseCount) || ctype_digit($responseCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseCount, true), gettype($responseCount)), __LINE__);
        }
        $this->ResponseCount = $responseCount;
        
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \macropage\ebaysdk\trading\StructType\WantItNowPostType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        
        return $this;
    }
}
