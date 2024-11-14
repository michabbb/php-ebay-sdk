<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide details about a seller's eBay Store.
 * @subpackage Structs
 */
class StoreType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the eBay Store. The name is shown at the top of the Store page.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The URLPath
     * Meta information extracted from the WSDL
     * - documentation: The URL path of the Store (58 characters maximum). Only if you are using Chinese characters in the Name property do you need to use this field, such as if you are opening a Store on the Taiwan site. The reason for this is that the
     * URL path is normally derived from the Store name, but it cannot be derived from the name of the Store if it contains Chinese characters because URLs cannot contain Chinese characters.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URLPath = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The complete URL of the user's Store. This field is only ever returned, and does not need to be explicitly set.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The seller-provided description of the eBay Store.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Logo
     * Meta information extracted from the WSDL
     * - documentation: This container provides information about a Store logo. <br> <br> The <b>GetStore</b> call now only returns the <b>Logo.URL</b> value, but not <b>Logo.LogoID</b> or <b>Logo.Name</b>.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    protected ?\macropage\ebaysdk\trading\StructType\StoreLogoType $Logo = null;
    /**
     * The CustomCategories
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of an array of one or more <b>CustomCategory</b> containers. Each <b>CustomCategory</b> container consists of details related to an eBay Store custom category. <br> <br> To modify an eBay Store's custom
     * categories, an eBay Store owner would use the <b>StoreCategories</b> container in the request of a <b>SetStoreCategories</b> call.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $CustomCategories = null;
    /**
     * The MerchDisplay
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MerchDisplay = null;
    /**
     * The LastOpenedTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the time the store was last opened or reopened.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastOpenedTime = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreType
     * @uses StoreType::setName()
     * @uses StoreType::setURLPath()
     * @uses StoreType::setURL()
     * @uses StoreType::setDescription()
     * @uses StoreType::setLogo()
     * @uses StoreType::setCustomCategories()
     * @uses StoreType::setMerchDisplay()
     * @uses StoreType::setLastOpenedTime()
     * @uses StoreType::setAny()
     * @param string $name
     * @param string $uRLPath
     * @param string $uRL
     * @param string $description
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType $logo
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories
     * @param string $merchDisplay
     * @param string $lastOpenedTime
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?string $uRLPath = null, ?string $uRL = null, ?string $description = null, ?\macropage\ebaysdk\trading\StructType\StoreLogoType $logo = null, ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories = null, ?string $merchDisplay = null, ?string $lastOpenedTime = null, $any = null)
    {
        $this
            ->setName($name)
            ->setURLPath($uRLPath)
            ->setURL($uRL)
            ->setDescription($description)
            ->setLogo($logo)
            ->setCustomCategories($customCategories)
            ->setMerchDisplay($merchDisplay)
            ->setLastOpenedTime($lastOpenedTime)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get URLPath value
     * @return string|null
     */
    public function getURLPath(): ?string
    {
        return $this->URLPath;
    }
    /**
     * Set URLPath value
     * @param string $uRLPath
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setURLPath(?string $uRLPath = null): self
    {
        // validation for constraint: string
        if (!is_null($uRLPath) && !is_string($uRLPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRLPath, true), gettype($uRLPath)), __LINE__);
        }
        $this->URLPath = $uRLPath;
        
        return $this;
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
     * @return \macropage\ebaysdk\trading\StructType\StoreType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreType
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
     * Get Logo value
     * @return \macropage\ebaysdk\trading\StructType\StoreLogoType|null
     */
    public function getLogo(): ?\macropage\ebaysdk\trading\StructType\StoreLogoType
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @param \macropage\ebaysdk\trading\StructType\StoreLogoType $logo
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setLogo(?\macropage\ebaysdk\trading\StructType\StoreLogoType $logo = null): self
    {
        $this->Logo = $logo;
        
        return $this;
    }
    /**
     * Get CustomCategories value
     * @return \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getCustomCategories(): ?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType
    {
        return $this->CustomCategories;
    }
    /**
     * Set CustomCategories value
     * @param \macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setCustomCategories(?\macropage\ebaysdk\trading\ArrayType\StoreCustomCategoryArrayType $customCategories = null): self
    {
        $this->CustomCategories = $customCategories;
        
        return $this;
    }
    /**
     * Get MerchDisplay value
     * @return string|null
     */
    public function getMerchDisplay(): ?string
    {
        return $this->MerchDisplay;
    }
    /**
     * Set MerchDisplay value
     * @uses \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $merchDisplay
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setMerchDisplay(?string $merchDisplay = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::valueIsValid($merchDisplay)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType', is_array($merchDisplay) ? implode(', ', $merchDisplay) : var_export($merchDisplay, true), implode(', ', \macropage\ebaysdk\trading\EnumType\MerchDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->MerchDisplay = $merchDisplay;
        
        return $this;
    }
    /**
     * Get LastOpenedTime value
     * @return string|null
     */
    public function getLastOpenedTime(): ?string
    {
        return $this->LastOpenedTime;
    }
    /**
     * Set LastOpenedTime value
     * @param string $lastOpenedTime
     * @return \macropage\ebaysdk\trading\StructType\StoreType
     */
    public function setLastOpenedTime(?string $lastOpenedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastOpenedTime) && !is_string($lastOpenedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastOpenedTime, true), gettype($lastOpenedTime)), __LINE__);
        }
        $this->LastOpenedTime = $lastOpenedTime;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asDomDocument true: returns \DOMDocument, false: returns XML string
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
     * @return \macropage\ebaysdk\trading\StructType\StoreType
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
