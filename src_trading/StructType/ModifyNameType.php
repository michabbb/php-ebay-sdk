<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyNameType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ModifyName</b> container in a <b>ReviseFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call to rename a Variation Specific name for a multiple-variation listing. A <b>ModifyName</b> container is needed for each
 * Variation Specific name that the seller wishes to change the name of in a multiple-variation listing.
 * @subpackage Structs
 */
class ModifyNameType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: In this field, the seller identifies the current name (e.g., Material) of a Variation Specific in the active listing that the seller wishes to change. If this field is used, the <b>NewName</b> field must also be specified. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The NewName
     * Meta information extracted from the WSDL
     * - documentation: In this field, the seller states the new name of the Variation Specific (e.g., Fabric). <br> <br> In addition to changing a Variation Specific name through the <b>ModifyName</b> container, the seller must also include the new
     * Variation Specific name (and its available values) in the <b>VariationSpecificsSet</b> container, and omit the original name. <br> <br> Note that variations that were sold while they used the old name will also be changed to use the new name in
     * eBay's system. <br> <br> If you are making other changes to a variation (such as adding new values or pictures), use consistent names to avoid unexpected results. For example, specify the same new name to identify the Variation Specific in the
     * <b>Pictures</b> container and in the <b>VariationSpecifics</b> containers for each variation within the listing. <br>
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NewName = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for ModifyNameType
     * @uses ModifyNameType::setName()
     * @uses ModifyNameType::setNewName()
     * @uses ModifyNameType::setAny()
     * @param string $name
     * @param string $newName
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $name = null, ?string $newName = null, $any = null)
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
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType
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
     * Get NewName value
     * @return string|null
     */
    public function getNewName(): ?string
    {
        return $this->NewName;
    }
    /**
     * Set NewName value
     * @param string $newName
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType
     */
    public function setNewName(?string $newName = null): self
    {
        // validation for constraint: string
        if (!is_null($newName) && !is_string($newName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newName, true), gettype($newName)), __LINE__);
        }
        $this->NewName = $newName;
        
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
     * @return \macropage\ebaysdk\trading\StructType\ModifyNameType
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
