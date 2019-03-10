<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveFromWatchListResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base response type for the <b>RemoveFromWatchList</b> call. The response includes the current count of items on the user's Watch List, as well as the maximum amount of items that can be on the user's Watch List at one time.
 * @subpackage Structs
 */
class RemoveFromWatchListResponseType extends AbstractResponseType
{
    /**
     * The WatchListCount
     * Meta informations extracted from the WSDL
     * - documentation: The current number of items in the user's Watch List (considering that the items specified in the call request were successfully removed).
     * - minOccurs: 0
     * @var int
     */
    public $WatchListCount;
    /**
     * The WatchListMaximum
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of items allowed in the user's Watch List. Currently this value is 300, and is the same for all sites and all users.
     * - minOccurs: 0
     * @var int
     */
    public $WatchListMaximum;
    /**
     * Constructor method for RemoveFromWatchListResponseType
     * @uses RemoveFromWatchListResponseType::setWatchListCount()
     * @uses RemoveFromWatchListResponseType::setWatchListMaximum()
     * @param int $watchListCount
     * @param int $watchListMaximum
     */
    public function __construct($watchListCount = null, $watchListMaximum = null)
    {
        $this
            ->setWatchListCount($watchListCount)
            ->setWatchListMaximum($watchListMaximum);
    }
    /**
     * Get WatchListCount value
     * @return int|null
     */
    public function getWatchListCount()
    {
        return $this->WatchListCount;
    }
    /**
     * Set WatchListCount value
     * @param int $watchListCount
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListResponseType
     */
    public function setWatchListCount($watchListCount = null)
    {
        // validation for constraint: int
        if (!is_null($watchListCount) && !is_numeric($watchListCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($watchListCount)), __LINE__);
        }
        $this->WatchListCount = $watchListCount;
        return $this;
    }
    /**
     * Get WatchListMaximum value
     * @return int|null
     */
    public function getWatchListMaximum()
    {
        return $this->WatchListMaximum;
    }
    /**
     * Set WatchListMaximum value
     * @param int $watchListMaximum
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListResponseType
     */
    public function setWatchListMaximum($watchListMaximum = null)
    {
        // validation for constraint: int
        if (!is_null($watchListMaximum) && !is_numeric($watchListMaximum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($watchListMaximum)), __LINE__);
        }
        $this->WatchListMaximum = $watchListMaximum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\RemoveFromWatchListResponseType
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
