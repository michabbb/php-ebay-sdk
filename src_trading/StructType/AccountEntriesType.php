<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountEntriesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the array of <b>AccountEntry</b> objects that are conditionally returned in the <b>GetAccount</b> response.
 * @subpackage Structs
 */
class AccountEntriesType extends AbstractStructBase
{
    /**
     * The AccountEntry
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AccountEntryType[]
     */
    protected array $AccountEntry = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for AccountEntriesType
     * @uses AccountEntriesType::setAccountEntry()
     * @uses AccountEntriesType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\AccountEntryType[] $accountEntry
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $accountEntry = [], $any = null)
    {
        $this
            ->setAccountEntry($accountEntry)
            ->setAny($any);
    }
    /**
     * Get AccountEntry value
     * @return \macropage\ebaysdk\trading\StructType\AccountEntryType[]
     */
    public function getAccountEntry(): array
    {
        return $this->AccountEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountEntryForArrayConstraintsFromSetAccountEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountEntriesTypeAccountEntryItem) {
            // validation for constraint: itemType
            if (!$accountEntriesTypeAccountEntryItem instanceof \macropage\ebaysdk\trading\StructType\AccountEntryType) {
                $invalidValues[] = is_object($accountEntriesTypeAccountEntryItem) ? get_class($accountEntriesTypeAccountEntryItem) : sprintf('%s(%s)', gettype($accountEntriesTypeAccountEntryItem), var_export($accountEntriesTypeAccountEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountEntry property can only contain items of type \macropage\ebaysdk\trading\StructType\AccountEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountEntry value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AccountEntryType[] $accountEntry
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType
     */
    public function setAccountEntry(array $accountEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($accountEntryArrayErrorMessage = self::validateAccountEntryForArrayConstraintsFromSetAccountEntry($accountEntry))) {
            throw new InvalidArgumentException($accountEntryArrayErrorMessage, __LINE__);
        }
        $this->AccountEntry = $accountEntry;
        
        return $this;
    }
    /**
     * Add item to AccountEntry value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AccountEntryType $item
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType
     */
    public function addToAccountEntry(\macropage\ebaysdk\trading\StructType\AccountEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AccountEntryType) {
            throw new InvalidArgumentException(sprintf('The AccountEntry property can only contain items of type \macropage\ebaysdk\trading\StructType\AccountEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AccountEntry[] = $item;
        
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
     * @return \macropage\ebaysdk\trading\StructType\AccountEntriesType
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
