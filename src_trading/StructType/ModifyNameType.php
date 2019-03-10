<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyNameType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>ModifyName</b> container in a <b>ReviseFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call to rename a Variation Specific name for a multiple-variation listing. A <b>ModifyName</b> container is needed for each
 * Variation Specific name that the seller wishes to change the name of in a multiple-variation listing.
 * @subpackage Structs
 */
class ModifyNameType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: In this field, the seller identifies the current name (e.g., Material) of a Variation Specific in the active listing that the seller wishes to change. If this field is used, the <b>NewName</b> field must also be specified. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NewName
     * Meta informations extracted from the WSDL
     * - documentation: In this field, the seller states the new name of the Variation Specific (e.g., Fabric). <br> <br> In addition to changing a Variation Specific name through the <b>ModifyName</b> container, the seller must also include the new
     * Variation Specific name (and its available values) in the <b>VariationSpecificsSet</b> container, and omit the original name. <br> <br> Note that variations that were sold while they used the old name will also be changed to use the new name in
     * eBay's system. <br> <br> If you are making other changes to a variation (such as adding new values or pictures), use consistent names to avoid unexpected results. For example, specify the same new name to identify the Variation Specific in the
     * <b>Pictures</b> container and in the <b>VariationSpecifics</b> containers for each variation within the listing. <br>
     * - minOccurs: 0
     * @var string
     */
    public $NewName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ModifyNameType
     * @uses ModifyNameType::setName()
     * @uses ModifyNameType::setNewName()
     * @uses ModifyNameType::setAny()
     * @param string $name
     * @param string $newName
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $newName = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setNewName($newName)
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
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType
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
     * Get NewName value
     * @return string|null
     */
    public function getNewName()
    {
        return $this->NewName;
    }
    /**
     * Set NewName value
     * @param string $newName
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType
     */
    public function setNewName($newName = null)
    {
        // validation for constraint: string
        if (!is_null($newName) && !is_string($newName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newName)), __LINE__);
        }
        $this->NewName = $newName;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ModifyNameType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType
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
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType
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
