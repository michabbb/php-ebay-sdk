<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellerEventsResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns the items in an <b>ItemArrayType</b> object for the a seller events that have occurred and that meet any filters specified. There can be zero, one, or multiple <b>ItemType</b> objects. Each <b>ItemType</b> object contains the
 * detail data for one item listing.
 * @subpackage Structs
 */
class GetSellerEventsResponseType extends AbstractResponseType
{
    /**
     * The TimeTo
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the latest (most recent) date for any date-based filtering specified as input. Specifically, this field contains the value you specified in the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter, if you
     * used a time filter in the request. If no time filter was specified, <b>TimeTo</b> returns the current time.
     * - minOccurs: 0
     * @var string
     */
    public $TimeTo;
    /**
     * The ItemArray
     * Meta informations extracted from the WSDL
     * - documentation: Collection of items whose last modified time matches the filters specified in the request. Returns empty if no items were modified within the time range of the request.<br/><br/> If 1 to 2999 items are returned, then the results are
     * complete. If 3000 or more items are returned, it usually means additional items exist within the time range you requested, but they were not all returned. <br/><br/> To retrieve complete results, use a smaller time range in the request so that fewer
     * than 3000 are returned per response.
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\ItemArrayType
     */
    public $ItemArray;
    /**
     * Constructor method for GetSellerEventsResponseType
     * @uses GetSellerEventsResponseType::setTimeTo()
     * @uses GetSellerEventsResponseType::setItemArray()
     * @param string $timeTo
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     */
    public function __construct($timeTo = null, \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null)
    {
        $this
            ->setTimeTo($timeTo)
            ->setItemArray($itemArray);
    }
    /**
     * Get TimeTo value
     * @return string|null
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }
    /**
     * Set TimeTo value
     * @param string $timeTo
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsResponseType
     */
    public function setTimeTo($timeTo = null)
    {
        // validation for constraint: string
        if (!is_null($timeTo) && !is_string($timeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;
        return $this;
    }
    /**
     * Get ItemArray value
     * @return \macropage\ebaysdk\trading\ArrayType\ItemArrayType|null
     */
    public function getItemArray()
    {
        return $this->ItemArray;
    }
    /**
     * Set ItemArray value
     * @param \macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsResponseType
     */
    public function setItemArray(\macropage\ebaysdk\trading\ArrayType\ItemArrayType $itemArray = null)
    {
        $this->ItemArray = $itemArray;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\GetSellerEventsResponseType
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
