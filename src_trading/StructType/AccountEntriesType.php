<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountEntriesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the array of <b>AccountEntry</b> objects that are conditionally returned in the <b>GetAccount</b> response.
 * @subpackage Structs
 */
class AccountEntriesType extends AbstractStructBase
{
    /**
     * The AccountEntry
     * Meta informations extracted from the WSDL
     * - documentation: Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AccountEntryType[]
     */
    public $AccountEntry;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AccountEntriesType
     * @uses AccountEntriesType::setAccountEntry()
     * @uses AccountEntriesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AccountEntryType[] $accountEntry
     * @param \DOMDocument $any
     */
    public function __construct(array $accountEntry = array(), \DOMDocument $any = null)
    {
        $this
            ->setAccountEntry($accountEntry)
            ->setAny($any);
    }
    /**
     * Get AccountEntry value
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType[]|null
     */
    public function getAccountEntry()
    {
        return $this->AccountEntry;
    }
    /**
     * Set AccountEntry value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AccountEntryType[] $accountEntry
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType
     */
    public function setAccountEntry(array $accountEntry = array())
    {
        foreach ($accountEntry as $accountEntriesTypeAccountEntryItem) {
            // validation for constraint: itemType
            if (!$accountEntriesTypeAccountEntryItem instanceof \macropage\ebaysdk\trading\StructType\AccountEntryType) {
                throw new \InvalidArgumentException(sprintf('The AccountEntry property can only contain items of \macropage\ebaysdk\trading\StructType\AccountEntryType, "%s" given', is_object($accountEntriesTypeAccountEntryItem) ? get_class($accountEntriesTypeAccountEntryItem) : gettype($accountEntriesTypeAccountEntryItem)), __LINE__);
            }
        }
        $this->AccountEntry = $accountEntry;
        return $this;
    }
    /**
     * Add item to AccountEntry value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AccountEntryType $item
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType
     */
    public function addToAccountEntry(\macropage\ebaysdk\trading\StructType\AccountEntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AccountEntryType) {
            throw new \InvalidArgumentException(sprintf('The AccountEntry property can only contain items of \macropage\ebaysdk\trading\StructType\AccountEntryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AccountEntry[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\AccountEntriesType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType
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
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType
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
