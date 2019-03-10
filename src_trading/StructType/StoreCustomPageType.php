<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreCustomPageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining <b>CustomPage</b> container, which is used by a seller in <b>SetStoreCustomPage</b> to configure and create an eBay Store custom page. The <b>CustomPage</b> container can also be used to modify an existing custom page
 * (by including a <b>PageID</b> value). The <b>CustomPage</b> container is always returned in the <b>GetStoreCustomPage</b> response.
 * @subpackage Structs
 */
class StoreCustomPageType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Name of the eBay Store custom page. This value is required if you are creating a new page (and omitting a <b>PageID</b> value). Note that you must include a name for the page even if you are using the <b>PreviewEnabled</b> flag.
     * However, since using the preview functionality means that the page will not be persisted, you can enter a dummy value for this field if you have not decided on a name for the page. The <b>Name</b> value is used in links to the page.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The PageID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier for an eBay Store custom page. If you specify a valid <b>PageID</b> value in a <b>SetStoreCustomPage</b> call, the existing custom page is updated. If you do not specify a <b>PageID</b> value, you are creating a new
     * custom page. <br/><br/> The <b>PageID</b> field is always returned in <b>GetStoreCustomPage</b>.
     * - minOccurs: 0
     * @var int
     */
    public $PageID;
    /**
     * The URLPath
     * Meta informations extracted from the WSDL
     * - documentation: The URL path of the eBay Store custom page. This field is only required if you are using Chinese characters in the <b>Name</b> field. The URL path of the eBay Store custom page is normally derived from the <b>Name</b> field, but the
     * URL path cannot be derived from the name of the custom page if it contains Chinese characters because URLs cannot contain Chinese characters. <br/><br/> The <b>URLPath</b> is only returned in the <b>GetStoreCustomPage</b> response if it is defined
     * for the eBay Store custom page, and if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var string
     */
    public $URLPath;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: The full URL of the eBay Store custom page, which is generally derived from the <b>CustomPage.Name</b> value. The exception to this rule is if the seller specified a custom URL using the <b>CustomPage.URLPath</b> field in a
     * <b>SetStoreCustomPage</b> call. <br/><br/> The <b>URL</b> is only returned in the <b>GetStoreCustomPage</b> response if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: This value indicates the status of the eBay custom page. In a <b>SetStoreCustomPage</b> call, the seller uses the optional <b>Status</b> field to make an inactive custom page active, to make an active custom page inactive, or to
     * delete an active or inactive custom page. To change the status (including delete) of a custom page, a <b>PageID</b> value must be included to identify the custom page to modify. <br/><br/> The <b>Status</b> value is always returned in the
     * <b>GetStoreCustomPage</b> response.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - documentation: The HTML content of the eBay Store custom page. This field has a maximum size of 96 kilobytes. If the <b>PreviewEnabled</b> field is set to 'true', then this field is required in a <b>SetStoreCustomPage</b> call. Otherwise, it is
     * optional. <br/><br/> The <b>Content</b> field is only returned in the <b>GetStoreCustomPage</b> response if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var string
     */
    public $Content;
    /**
     * The LeftNav
     * Meta informations extracted from the WSDL
     * - documentation: This flag controls whether or not the left navigation bar is included in the eBay Store custom page. To include the left navigation bar in a custom page, the seller will include the <b>LeftNav</b> field in the
     * <b>SetStoreCustomPage</b> request and set it to 'true'. <br/><br/> The <b>LeftNav</b> field is only returned in the <b>GetStoreCustomPage</b> response if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var bool
     */
    public $LeftNav;
    /**
     * The PreviewEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This flag controls whether or not a custom page preview is enabled. To enable the a custom page preview, the seller will include the <b>PreviewEnabled</b> field in the <b>SetStoreCustomPage</b> request and set it to 'true'.
     * <br/><br/> The <b>PreviewEnabled</b> field is only returned in the <b>GetStoreCustomPage</b> response if a <b>PageID</b> value is included in the request.
     * - minOccurs: 0
     * @var bool
     */
    public $PreviewEnabled;
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - documentation: This integer value controls the order in which the corresponding eBay Store custom page is displayed in the list of custom pages. To make the corresponding custom page appear first in the list of custom pages, the seller would
     * include the <b>Order</b> field and set its value to '1'. <br/><br/> The <b>Order</b> value is always returned in the <b>GetStoreCustomPage</b> response.
     * - minOccurs: 0
     * @var int
     */
    public $Order;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $pageID = null, $uRLPath = null, $uRL = null, $status = null, $content = null, $leftNav = null, $previewEnabled = null, $order = null, \DOMDocument $any = null)
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
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get PageID value
     * @return int|null
     */
    public function getPageID()
    {
        return $this->PageID;
    }
    /**
     * Set PageID value
     * @param int $pageID
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setPageID($pageID = null)
    {
        // validation for constraint: int
        if (!is_null($pageID) && !is_numeric($pageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageID)), __LINE__);
        }
        $this->PageID = $pageID;
        return $this;
    }
    /**
     * Get URLPath value
     * @return string|null
     */
    public function getURLPath()
    {
        return $this->URLPath;
    }
    /**
     * Set URLPath value
     * @param string $uRLPath
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setURLPath($uRLPath = null)
    {
        // validation for constraint: string
        if (!is_null($uRLPath) && !is_string($uRLPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRLPath)), __LINE__);
        }
        $this->URLPath = $uRLPath;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \macropage\ebaysdk\trading\EnumType\StoreCustomPageStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->Content = $content;
        return $this;
    }
    /**
     * Get LeftNav value
     * @return bool|null
     */
    public function getLeftNav()
    {
        return $this->LeftNav;
    }
    /**
     * Set LeftNav value
     * @param bool $leftNav
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setLeftNav($leftNav = null)
    {
        // validation for constraint: boolean
        if (!is_null($leftNav) && !is_bool($leftNav)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($leftNav)), __LINE__);
        }
        $this->LeftNav = $leftNav;
        return $this;
    }
    /**
     * Get PreviewEnabled value
     * @return bool|null
     */
    public function getPreviewEnabled()
    {
        return $this->PreviewEnabled;
    }
    /**
     * Set PreviewEnabled value
     * @param bool $previewEnabled
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setPreviewEnabled($previewEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($previewEnabled) && !is_bool($previewEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($previewEnabled)), __LINE__);
        }
        $this->PreviewEnabled = $previewEnabled;
        return $this;
    }
    /**
     * Get Order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !is_numeric($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order)), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\StoreCustomPageType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\StoreCustomPageType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
