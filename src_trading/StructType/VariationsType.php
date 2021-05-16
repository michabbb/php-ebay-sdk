<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Variations are multiple similar (but not identical) items in a fixed-price listing. For example, a single listing could contain multiple items of the same brand and model that vary by color and size (like "Blue, Large" and "Black,
 * Medium"). Each variation can have its own quantity and price. For example, a listing could include 10 "Blue, Large" variations and 20 "Black, Medium" variations.
 * @subpackage Structs
 */
class VariationsType extends AbstractStructBase
{
    /**
     * The Variation
     * Meta information extracted from the WSDL
     * - documentation: Contains data that distinguishes one item variation from another. For example, if an item varies by color and size, each <b>Variation</b> node specifies a combination of one of those colors and sizes.<br> <br> When listing or
     * relisting an item, you are allowed to create a listing with only one item variation, and you might have a plan to add more item variations to the listing in the future. However, if you don't plan to add other item variations in the future, we
     * recommend that you avoid listing with only one variation, so that you avoid confusing buyers. <br> <br> If you specify multiple <b>Variation</b> containers in an add/revise/relist/verify add call to define multiple item variations, the
     * <b>Variation</b> containers must be contiguous or an error will occur. This means that you would not want to input a <b>Pictures</b> or a <b>VariationSpecificsSet</b> container in between <b>Variation</b> containers in an API call. <br> <br> When you
     * modify an item variation with a <b>ReviseFixedPriceItem</b> call, the best practice is to include all applicable fields under the <b>Variation</b> container, even if some of the values/settings are not being modified. The <b>StartPrice</b> and
     * <b>VariationSpecifics</b> must be included when modifying an existing item variation, even if these values are not being changed. If a SKU value is defined for the item variation, it is strongly recommended that you include the <b>SKU</b> field,
     * regardless of whether the SKU value is changing or not. If the <b>SKU</b> field is not included, any existing SKU value will be removed from the item variation. It is also strongly recommended that you include the <b>Quantity</b> field and input an
     * accurate value, because if the <b>Quantity</b> field is omitted in the API call, the quantity for the item variation is set to <code>0</code>.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\VariationType[]
     */
    protected array $Variation = [];
    /**
     * The Pictures
     * Meta information extracted from the WSDL
     * - documentation: Contains a set of pictures that correspond to one of the variation specifics, such as Color. For example, if a listing has blue and black color variations, you could choose Color for all the pictures, and then include a set of
     * pictures for the blue variations and another set of pictures for the black variations.<br> <br> We strongly recommend that you also include shared pictures in Item.PictureDetails, as this results in a better experience for buyers.<br> <br> <b>For
     * ReviseFixedPriceItem only:</b> To replace or delete individual pictures, pass in the entire Pictures node with the complete set of variation pictures that you want in the listing. If the applicable variations have purchases or the listing ends in
     * less than 12 hours, you can add pictures, but you can't remove existing pictures.<br> <br> Variation, Pictures, or ModifyNameList (or all) need to be specified when the Variations node is specified in listing requests<br> <br> <span
     * class="tablenote"><b>Note:</b> Only one Pictures node is allowed for a listing. However, the node has been defined as unbounded (repeatable) in the schema to allow for different use cases for some calls or sites in the future.</span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\PicturesType[]
     */
    protected array $Pictures = [];
    /**
     * The VariationSpecificsSet
     * Meta information extracted from the WSDL
     * - documentation: The set of all variation specific names and values that can be applicable to the listing (at any time in its life cycle). This must include all names and values specified in the VariationSpecifics nodes.<br> <br> Required when
     * Variations are specified in a new listing, and when you modify the name of a variation by using ModifyNameList. When you modify variation specific names, VariationSpecificsSet must include the new names plus the names that are not changing (but omit
     * the old names), <br> <br> This set configures variation selection widgets that appear on eBay's View Item page. For example, if you specify Color and Size names in the set, eBay's View Item page displays Color and Size drop-down lists to enable a
     * buyer to choose a variation of interest.<br> <br> The order in which you specify the names and values also controls the order in which the selection widgets appear on the View Item page. For example, if you specify "Color", then "Size", and then
     * "Sleeve Style" as names, the View Item page shows drop-down lists with those labels in that order. For "Size", if you specify "S", "M", and "L" as values, the View Item page shows the values in that order in the Size drop-down list.<br> <br> Use
     * GetCategorySpecifics to retrieve recommendations for names, values, and order.<br> <br> Required when Variations are specified in a new listing (e.g., in AddFixedPriceItem). Also required when you change variation specific names or values in
     * ReviseFixedPriceItem and RelistFixedPriceItem.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $VariationSpecificsSet = null;
    /**
     * The ModifyNameList
     * Meta information extracted from the WSDL
     * - documentation: Modifies variation specific names when you revise or relist items.<br> <br> You can modify a variation specific name regardless of the quantity sold (i.e., no restrictions on whether the item has orders or order line items
     * (transactions)).<br> <br> (Use VariationSpecifics to modify variation specific values.)<br> <br> You are not required to specify SKU, VariationSpecifics, and other variation details in the request when you are only modifying a variation specific
     * name. <br> <br> Variation, Pictures, VariationSpecificsSet, or ModifyNameList (or all) need to be specified when the Variations node is specified in listing requests.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType $ModifyNameList = null;
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for VariationsType
     * @uses VariationsType::setVariation()
     * @uses VariationsType::setPictures()
     * @uses VariationsType::setVariationSpecificsSet()
     * @uses VariationsType::setModifyNameList()
     * @uses VariationsType::setAny()
     * @param \macropage\ebaysdk\trading\StructType\VariationType[] $variation
     * @param \macropage\ebaysdk\trading\StructType\PicturesType[] $pictures
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecificsSet
     * @param \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType $modifyNameList
     * @param \DOMDocument|string|null $any
     */
    public function __construct(array $variation = [], array $pictures = [], ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecificsSet = null, ?\macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType $modifyNameList = null, $any = null)
    {
        $this
            ->setVariation($variation)
            ->setPictures($pictures)
            ->setVariationSpecificsSet($variationSpecificsSet)
            ->setModifyNameList($modifyNameList)
            ->setAny($any);
    }
    /**
     * Get Variation value
     * @return \macropage\ebaysdk\trading\StructType\VariationType[]
     */
    public function getVariation(): array
    {
        return $this->Variation;
    }
    /**
     * This method is responsible for validating the values passed to the setVariation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariationForArrayConstraintsFromSetVariation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $variationsTypeVariationItem) {
            // validation for constraint: itemType
            if (!$variationsTypeVariationItem instanceof \macropage\ebaysdk\trading\StructType\VariationType) {
                $invalidValues[] = is_object($variationsTypeVariationItem) ? get_class($variationsTypeVariationItem) : sprintf('%s(%s)', gettype($variationsTypeVariationItem), var_export($variationsTypeVariationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Variation property can only contain items of type \macropage\ebaysdk\trading\StructType\VariationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Variation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationType[] $variation
     * @return \macropage\ebaysdk\trading\StructType\VariationsType
     */
    public function setVariation(array $variation = []): self
    {
        // validation for constraint: array
        if ('' !== ($variationArrayErrorMessage = self::validateVariationForArrayConstraintsFromSetVariation($variation))) {
            throw new InvalidArgumentException($variationArrayErrorMessage, __LINE__);
        }
        $this->Variation = $variation;
        
        return $this;
    }
    /**
     * Add item to Variation value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\VariationType $item
     * @return \macropage\ebaysdk\trading\StructType\VariationsType
     */
    public function addToVariation(\macropage\ebaysdk\trading\StructType\VariationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\VariationType) {
            throw new InvalidArgumentException(sprintf('The Variation property can only contain items of type \macropage\ebaysdk\trading\StructType\VariationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Variation[] = $item;
        
        return $this;
    }
    /**
     * Get Pictures value
     * @return \macropage\ebaysdk\trading\StructType\PicturesType[]
     */
    public function getPictures(): array
    {
        return $this->Pictures;
    }
    /**
     * This method is responsible for validating the values passed to the setPictures method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictures method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePicturesForArrayConstraintsFromSetPictures(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $variationsTypePicturesItem) {
            // validation for constraint: itemType
            if (!$variationsTypePicturesItem instanceof \macropage\ebaysdk\trading\StructType\PicturesType) {
                $invalidValues[] = is_object($variationsTypePicturesItem) ? get_class($variationsTypePicturesItem) : sprintf('%s(%s)', gettype($variationsTypePicturesItem), var_export($variationsTypePicturesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pictures property can only contain items of type \macropage\ebaysdk\trading\StructType\PicturesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Pictures value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PicturesType[] $pictures
     * @return \macropage\ebaysdk\trading\StructType\VariationsType
     */
    public function setPictures(array $pictures = []): self
    {
        // validation for constraint: array
        if ('' !== ($picturesArrayErrorMessage = self::validatePicturesForArrayConstraintsFromSetPictures($pictures))) {
            throw new InvalidArgumentException($picturesArrayErrorMessage, __LINE__);
        }
        $this->Pictures = $pictures;
        
        return $this;
    }
    /**
     * Add item to Pictures value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\PicturesType $item
     * @return \macropage\ebaysdk\trading\StructType\VariationsType
     */
    public function addToPictures(\macropage\ebaysdk\trading\StructType\PicturesType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\PicturesType) {
            throw new InvalidArgumentException(sprintf('The Pictures property can only contain items of type \macropage\ebaysdk\trading\StructType\PicturesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pictures[] = $item;
        
        return $this;
    }
    /**
     * Get VariationSpecificsSet value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecificsSet(): ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
    {
        return $this->VariationSpecificsSet;
    }
    /**
     * Set VariationSpecificsSet value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecificsSet
     * @return \macropage\ebaysdk\trading\StructType\VariationsType
     */
    public function setVariationSpecificsSet(?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecificsSet = null): self
    {
        $this->VariationSpecificsSet = $variationSpecificsSet;
        
        return $this;
    }
    /**
     * Get ModifyNameList value
     * @return \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType|null
     */
    public function getModifyNameList(): ?\macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType
    {
        return $this->ModifyNameList;
    }
    /**
     * Set ModifyNameList value
     * @param \macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType $modifyNameList
     * @return \macropage\ebaysdk\trading\StructType\VariationsType
     */
    public function setModifyNameList(?\macropage\ebaysdk\trading\ArrayType\ModifyNameArrayType $modifyNameList = null): self
    {
        $this->ModifyNameList = $modifyNameList;
        
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
     * @return \macropage\ebaysdk\trading\StructType\VariationsType
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
