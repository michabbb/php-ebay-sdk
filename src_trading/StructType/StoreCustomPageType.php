<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomPageType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining <b>CustomPage</b> container, which is used by a seller in <b>SetStoreCustomPage</b> to configure and create an eBay Store custom page. The <b>CustomPage</b> container can also be used to modify an existing custom page
 * (by including a <b>PageID</b> value). The <b>CustomPage</b> container is always returned in the <b>GetStoreCustomPage</b> response.
 * @subpackage Structs
 */
class StoreCustomPageType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the eBay Store custom page. This value is required if you are creating a new page (and omitting a <b>PageID</b> value). Note that you must include a name for the page even if you are using the <b>PreviewEnabled</b> flag.
     * However, since using the preview functionality means that the page will not be persisted, you can enter a dummy value for this field if you have not decided on a name for the page. The <b>Name</b> value is used in links to the page.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The PageID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay Store custom page. If you specify a valid <b>PageID</b> value in a <b>SetStoreCustomPage</b> call, the existing custom page is updated. If you do not specify a <b>PageID</b> value, you are creating a new
     * custom page. <br/><br/> The <b>PageID</b> field is always returned in <b>GetStoreCustomPage</b>.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PageID = null;
    /**
     * The URLPath
     * Meta information extracted from the WSDL
     * - documentation: The URL path of the eBay Store custom page. This field is only required if you are using Chinese characters in the <b>Name</b> field. The URL path of the eBay Store custom page is normally derived from the <b>Name</b> field, but the
     * URL path cannot be derived from the name of the custom page if it contains Chinese characters because URLs cannot contain Chinese characters. <br/><br/> The <b>URLPath</b> is only returned in the <b>GetStoreCustomPage</b> response if it is defined
     * for the eBay Store custom page, and if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URLPath = null;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The full URL of the eBay Store custom page, which is generally derived from the <b>CustomPage.Name</b> value. The exception to this rule is if the seller specified a custom URL using the <b>CustomPage.URLPath</b> field in a
     * <b>SetStoreCustomPage</b> call. <br/><br/> The <b>URL</b> is only returned in the <b>GetStoreCustomPage</b> response if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $URL = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the status of the eBay custom page. In a <b>SetStoreCustomPage</b> call, the seller uses the optional <b>Status</b> field to make an inactive custom page active, to make an active custom page inactive, or to
     * delete an active or inactive custom page. To change the status (including delete) of a custom page, a <b>PageID</b> value must be included to identify the custom page to modify. <br/><br/> The <b>Status</b> value is always returned in the
     * <b>GetStoreCustomPage</b> response.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - documentation: The HTML content of the eBay Store custom page. This field has a maximum size of 96 kilobytes. If the <b>PreviewEnabled</b> field is set to 'true', then this field is required in a <b>SetStoreCustomPage</b> call. Otherwise, it is
     * optional. <br/><br/> The <b>Content</b> field is only returned in the <b>GetStoreCustomPage</b> response if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * The LeftNav
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not the left navigation bar is included in the eBay Store custom page. To include the left navigation bar in a custom page, the seller will include the <b>LeftNav</b> field in the
     * <b>SetStoreCustomPage</b> request and set it to 'true'. <br/><br/> The <b>LeftNav</b> field is only returned in the <b>GetStoreCustomPage</b> response if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $LeftNav = null;
    /**
     * The PreviewEnabled
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not a custom page preview is enabled. To enable the a custom page preview, the seller will include the <b>PreviewEnabled</b> field in the <b>SetStoreCustomPage</b> request and set it to 'true'.
     * <br/><br/> The <b>PreviewEnabled</b> field is only returned in the <b>GetStoreCustomPage</b> response if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $PreviewEnabled = null;
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - documentation: This integer value controls the order in which the corresponding eBay Store custom page is displayed in the list of custom pages. To make the corresponding custom page appear first in the list of custom pages, the seller would
     * include the <b>Order</b> field and set its value to '1'. <br/><br/> The <b>Order</b> value is always returned in the <b>GetStoreCustomPage</b> response.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Order = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for StoreCustomPageType
     * @uses StoreCustomPageType::setName()
     * @uses StoreCustomPageType::setPageID()
     * @uses StoreCustomPageType::setURLPath()
     * @uses StoreCustomPageType::setURL()
     * @uses StoreCustomPageType::setStatus()
     * @uses StoreCustomPageType::setContent()
     * @uses StoreCustomPageType::setLeftNav()
     * @uses StoreCustomPageType::setPreviewEnabled()
     * @uses StoreCustomPageType::setOrder()
     * @uses StoreCustomPageType::setAny()
     * @param string $name
     * @param int $pageID
     * @param string $uRLPath
     * @param string $uRL
     * @param string $status
     * @param string $content
     * @param bool $leftNav
     * @param bool $previewEnabled
     * @param int $order
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?int $pageID = null, ?string $uRLPath = null, ?string $uRL = null, ?string $status = null, ?string $content = null, ?bool $leftNav = null, ?bool $previewEnabled = null, ?int $order = null, $any = null)
    {
        $this
            ->setName($name)
            ->setPageID($pageID)
            ->setURLPath($uRLPath)
            ->setURL($uRL)
            ->setStatus($status)
            ->setContent($content)
            ->setLeftNav($leftNav)
            ->setPreviewEnabled($previewEnabled)
            ->setOrder($order)
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
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
     * Get PageID value
     * @return int|null
     */
    public function getPageID(): ?int
    {
        return $this->PageID;
    }
    /**
     * Set PageID value
     * @param int $pageID
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setPageID(?int $pageID = null): self
    {
        // validation for constraint: int
        if (!is_null($pageID) && !(is_int($pageID) || ctype_digit($pageID))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageID, true), gettype($pageID)), __LINE__);
        }
        $this->PageID = $pageID;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->Content = $content;
        
        return $this;
    }
    /**
     * Get LeftNav value
     * @return bool|null
     */
    public function getLeftNav(): ?bool
    {
        return $this->LeftNav;
    }
    /**
     * Set LeftNav value
     * @param bool $leftNav
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setLeftNav(?bool $leftNav = null): self
    {
        // validation for constraint: boolean
        if (!is_null($leftNav) && !is_bool($leftNav)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($leftNav, true), gettype($leftNav)), __LINE__);
        }
        $this->LeftNav = $leftNav;
        
        return $this;
    }
    /**
     * Get PreviewEnabled value
     * @return bool|null
     */
    public function getPreviewEnabled(): ?bool
    {
        return $this->PreviewEnabled;
    }
    /**
     * Set PreviewEnabled value
     * @param bool $previewEnabled
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setPreviewEnabled(?bool $previewEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($previewEnabled) && !is_bool($previewEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($previewEnabled, true), gettype($previewEnabled)), __LINE__);
        }
        $this->PreviewEnabled = $previewEnabled;
        
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder(): ?int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setOrder(?int $order = null): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->Order = $order;
        
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
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
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
