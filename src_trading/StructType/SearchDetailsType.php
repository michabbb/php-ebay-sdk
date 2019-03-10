<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class SearchDetailsType extends AbstractStructBase
{
    /**
     * The BuyItNowEnabled
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyItNowEnabled;
    /**
     * The Picture
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $Picture;
    /**
     * The RecentListing
     * Meta informations extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $RecentListing;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SearchDetailsType
     * @uses SearchDetailsType::setBuyItNowEnabled()
     * @uses SearchDetailsType::setPicture()
     * @uses SearchDetailsType::setRecentListing()
     * @uses SearchDetailsType::setAny()
     * @param bool $buyItNowEnabled
     * @param bool $picture
     * @param bool $recentListing
     * @param \DOMDocument $any
     */
    public function __construct($buyItNowEnabled = null, $picture = null, $recentListing = null, \DOMDocument $any = null)
    {
        $this
            ->setBuyItNowEnabled($buyItNowEnabled)
            ->setPicture($picture)
            ->setRecentListing($recentListing)
            ->setAny($any);
    }
    /**
     * Get BuyItNowEnabled value
     * @return bool|null
     */
    public function getBuyItNowEnabled()
    {
        return $this->BuyItNowEnabled;
    }
    /**
     * Set BuyItNowEnabled value
     * @param bool $buyItNowEnabled
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
     */
    public function setBuyItNowEnabled($buyItNowEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyItNowEnabled) && !is_bool($buyItNowEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($buyItNowEnabled)), __LINE__);
        }
        $this->BuyItNowEnabled = $buyItNowEnabled;
        return $this;
    }
    /**
     * Get Picture value
     * @return bool|null
     */
    public function getPicture()
    {
        return $this->Picture;
    }
    /**
     * Set Picture value
     * @param bool $picture
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
     */
    public function setPicture($picture = null)
    {
        // validation for constraint: boolean
        if (!is_null($picture) && !is_bool($picture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($picture)), __LINE__);
        }
        $this->Picture = $picture;
        return $this;
    }
    /**
     * Get RecentListing value
     * @return bool|null
     */
    public function getRecentListing()
    {
        return $this->RecentListing;
    }
    /**
     * Set RecentListing value
     * @param bool $recentListing
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
     */
    public function setRecentListing($recentListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($recentListing) && !is_bool($recentListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($recentListing)), __LINE__);
        }
        $this->RecentListing = $recentListing;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\SearchDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\SearchDetailsType
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
