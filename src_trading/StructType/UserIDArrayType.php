<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserIDArrayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains an array of eBay UserID entries.
 * @subpackage Structs
 */
class UserIDArrayType extends AbstractStructBase
{
    /**
     * The UserID
     * Meta informations extracted from the WSDL
     * - documentation: Unique eBay user ID for the user. Applies to eBay Motors Pro applications only. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $UserID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UserIDArrayType
     * @uses UserIDArrayType::setUserID()
     * @uses UserIDArrayType::setAny()
     * @param string[] $userID
     * @param \DOMDocument $any
     */
    public function __construct(array $userID = array(), \DOMDocument $any = null)
    {
        $this
            ->setUserID($userID)
            ->setAny($any);
    }
    /**
     * Get UserID value
     * @return string[]|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @throws \InvalidArgumentException
     * @param string[] $userID
     * @return \macropage\ebaysdk\trading\StructType\UserIDArrayType
     */
    public function setUserID(array $userID = array())
    {
        foreach ($userID as $userIDArrayTypeUserIDItem) {
            // validation for constraint: itemType
            if (!is_string($userIDArrayTypeUserIDItem)) {
                throw new \InvalidArgumentException(sprintf('The UserID property can only contain items of string, "%s" given', is_object($userIDArrayTypeUserIDItem) ? get_class($userIDArrayTypeUserIDItem) : gettype($userIDArrayTypeUserIDItem)), __LINE__);
            }
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Add item to UserID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\UserIDArrayType
     */
    public function addToUserID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The UserID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UserID[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\UserIDArrayType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\UserIDArrayType
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
     * @return \macropage\ebaysdk\trading\StructType\UserIDArrayType
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
