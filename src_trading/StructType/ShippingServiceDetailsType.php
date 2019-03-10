<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingServiceDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the ShippingServiceDetails containers that are returned in the GeteBayDetails response. Each ShippingServiceDetails container consists of detailed information about each shipping service option available for the
 * specified country. These details include the shipping service enumeration value to use when specifying shipping service options in an Add/Revise/Relist call, the shipping carrier, the shipping category (e.g. expedited, economy, etc.), the shipping
 * packages that can be used, and the shipping delivery window.
 * @subpackage Structs
 */
class ShippingServiceDetailsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Display string that applications can use to present a list of shipping service options in a more user-friendly format (such as in a drop-down list).
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ExpeditedService
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the shipping service is an expedited shipping service. This field is only returned if the shipping service is an expedited shipping service (value=<code>true</code>). Expedited generally means that the shipment can
     * arrive at the buyer's location within one or two business days.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpeditedService;
    /**
     * The InternationalService
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the shipping service is an international shipping service. An international shipping service option is required if an item is being shipped from one country (origin) to another (destination).
     * - minOccurs: 0
     * @var bool
     */
    public $InternationalService;
    /**
     * The ShippingService
     * Meta informations extracted from the WSDL
     * - documentation: The name of shipping service option. The ShippingServiceDetails.<strong>ValidForSellingFlow</strong> flag must also be present and <code>true</code>. Otherwise, that particular shipping service option is no longer valid and cannot be
     * offered to buyers through a listing. <br/><br/> This token value is the text that a seller will provide in the ShippingDetails.ShippingServiceOptions.<strong>ShippingService</strong> field when creating a listing.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingService;
    /**
     * The ShippingServiceID
     * Meta informations extracted from the WSDL
     * - documentation: Numeric identifier. A value greater than 50000 represents an international shipping service (confirmed by <strong>InternationalShippingService</strong> being true). Some applications use this ID to look up shipping services more
     * efficiently.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingServiceID;
    /**
     * The ShippingTimeMax
     * Meta informations extracted from the WSDL
     * - documentation: The integer value returned here indicates the maximum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service
     * option (indicated in the <b>ShippingService</b> field). <br><br> This maximum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier
     * for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * <br><br> For sellers opted into and using eBay Guaranteed Delivery, they should be looking at this value, and this value plus their handling time stated in the listing cannot be greater than 4 business days in order for that listing to be eligible
     * for eBay Guaranteed Delivery.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMax;
    /**
     * The ShippingTimeMin
     * Meta informations extracted from the WSDL
     * - documentation: The integer value returned here indicates the minimum number of business days that the shipping carrier (indicated in the corresponding <b>ShippingCarrier</b> field) will take to ship an item using the corresponding shipping service
     * option (indicated in the <b>ShippingService</b> field). <br><br> This minimum shipping time does not include the seller's handling time, and the clock starts on the shipping time only after the seller has delivered the item to the shipping carrier
     * for shipment to the buyer. 'Business days' can vary by shipping carrier and by country, but 'business days' are generally Monday through Friday, excluding holidays. This field is returned if defined for that particular shipping service option.
     * - minOccurs: 0
     * @var int
     */
    public $ShippingTimeMin;
    /**
     * The ShippingServiceCode
     * Meta informations extracted from the WSDL
     * - documentation: For future use.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingServiceCode;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - documentation: The shipping cost types that this shipping service option supports, such as flat-rate or calculated. A <strong>ServiceType</strong> field is returned for each shipping cost type supported by the shipping service option.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ServiceType;
    /**
     * The ShippingPackage
     * Meta informations extracted from the WSDL
     * - documentation: The shipping packages that can be used for this shipping service option. A <strong>ShippingPackage</strong> field is returned for each shipping package supported by the shipping service option.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShippingPackage;
    /**
     * The DimensionsRequired
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if the shipping service option requires that package dimensions are provided by the seller. This field is only returned if 'true'.
     * - minOccurs: 0
     * @var bool
     */
    public $DimensionsRequired;
    /**
     * The ValidForSellingFlow
     * Meta informations extracted from the WSDL
     * - documentation: If this field is returned as 'true', the shipping service option can be used in a Add/Revise/Relist API call. If this field is returned as 'false', the shipping service option is not currently supported and cannot be used in a
     * Add/Revise/Relist API call.
     * - minOccurs: 0
     * @var bool
     */
    public $ValidForSellingFlow;
    /**
     * The SurchargeApplicable
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if 'true', and indicates that a shipping surcharge is applicable for this shipping service option.
     * - minOccurs: 0
     * @var bool
     */
    public $SurchargeApplicable;
    /**
     * The ShippingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: The enumeration value for the shipping carrier associated with the shipping service option. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b>
     * with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShippingCarrier;
    /**
     * The CODService
     * Meta informations extracted from the WSDL
     * - documentation: This field is only returned if'true', and indicates that the corresponding <b>ShippingServiceDetails.ShippingService</b> value is a COD (Cash-On-Delivery) service. <br/><br/> COD shipping services are not supported by all sites.
     * - minOccurs: 0
     * @var bool
     */
    public $CODService;
    /**
     * The DeprecationDetails
     * Meta informations extracted from the WSDL
     * - documentation: A mechanism by which details about deprecation of a shipping service is announced. See also MappedToShippingServiceID. If this container is empty, it means that there is no mapping for this shipping service and that the shipping
     * service will be dropped from the listing without an accompanying warning message from the eBay API.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\AnnouncementMessageType[]
     */
    public $DeprecationDetails;
    /**
     * The MappedToShippingServiceID
     * Meta informations extracted from the WSDL
     * - documentation: The ID of another shipping service that will be used when a shipping service is deprecated. See also DeprecationDetails.
     * - minOccurs: 0
     * @var int
     */
    public $MappedToShippingServiceID;
    /**
     * The CostGroupFlat
     * Meta informations extracted from the WSDL
     * - documentation: If returned, this is the shipping service group to which the shipping service belongs. Valid values are found in CostGroupFlatCodeType.
     * - minOccurs: 0
     * @var string
     */
    public $CostGroupFlat;
    /**
     * The ShippingServicePackageDetails
     * Meta informations extracted from the WSDL
     * - documentation: Shipping Package level details for the enclosing shipping service, this complex type replaces the existing ShippingPackage type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType[]
     */
    public $ShippingServicePackageDetails;
    /**
     * The WeightRequired
     * Meta informations extracted from the WSDL
     * - documentation: If true, a seller who selects this package type for the listing and then offers this shipping service must specify WeightMajor and WeightMinor in the item definition. If not returned, WeightRequired is false.
     * - minOccurs: 0
     * @var bool
     */
    public $WeightRequired;
    /**
     * The DetailVersion
     * Meta informations extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta informations extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The ShippingCategory
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the shipping category. Shipping categories include the following: <code>ECONOMY</code>, <code>STANDARD</code>, <code>EXPEDITED</code>, <code>ONE_DAY</code>, <code>PICKUP</code>, <code>OTHER</code>, and <code>NONE</code>.
     * International shipping services are generally grouped into the <code>NONE</code> category. For more information about these shipping categories, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a>
     * page on the eBay Shipping Center site. <br/><br/> <span class="tablenote"> <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101)
     * and ES (186). </span>
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCategory;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShippingServiceDetailsType
     * @uses ShippingServiceDetailsType::setDescription()
     * @uses ShippingServiceDetailsType::setExpeditedService()
     * @uses ShippingServiceDetailsType::setInternationalService()
     * @uses ShippingServiceDetailsType::setShippingService()
     * @uses ShippingServiceDetailsType::setShippingServiceID()
     * @uses ShippingServiceDetailsType::setShippingTimeMax()
     * @uses ShippingServiceDetailsType::setShippingTimeMin()
     * @uses ShippingServiceDetailsType::setShippingServiceCode()
     * @uses ShippingServiceDetailsType::setServiceType()
     * @uses ShippingServiceDetailsType::setShippingPackage()
     * @uses ShippingServiceDetailsType::setDimensionsRequired()
     * @uses ShippingServiceDetailsType::setValidForSellingFlow()
     * @uses ShippingServiceDetailsType::setSurchargeApplicable()
     * @uses ShippingServiceDetailsType::setShippingCarrier()
     * @uses ShippingServiceDetailsType::setCODService()
     * @uses ShippingServiceDetailsType::setDeprecationDetails()
     * @uses ShippingServiceDetailsType::setMappedToShippingServiceID()
     * @uses ShippingServiceDetailsType::setCostGroupFlat()
     * @uses ShippingServiceDetailsType::setShippingServicePackageDetails()
     * @uses ShippingServiceDetailsType::setWeightRequired()
     * @uses ShippingServiceDetailsType::setDetailVersion()
     * @uses ShippingServiceDetailsType::setUpdateTime()
     * @uses ShippingServiceDetailsType::setShippingCategory()
     * @uses ShippingServiceDetailsType::setAny()
     * @param string $description
     * @param bool $expeditedService
     * @param bool $internationalService
     * @param string $shippingService
     * @param int $shippingServiceID
     * @param int $shippingTimeMax
     * @param int $shippingTimeMin
     * @param string $shippingServiceCode
     * @param string[] $serviceType
     * @param string[] $shippingPackage
     * @param bool $dimensionsRequired
     * @param bool $validForSellingFlow
     * @param bool $surchargeApplicable
     * @param string[] $shippingCarrier
     * @param bool $cODService
     * @param \macropage\ebaysdk\trading\StructType\AnnouncementMessageType[] $deprecationDetails
     * @param int $mappedToShippingServiceID
     * @param string $costGroupFlat
     * @param \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType[] $shippingServicePackageDetails
     * @param bool $weightRequired
     * @param string $detailVersion
     * @param string $updateTime
     * @param string $shippingCategory
     * @param \DOMDocument $any
     */
    public function __construct($description = null, $expeditedService = null, $internationalService = null, $shippingService = null, $shippingServiceID = null, $shippingTimeMax = null, $shippingTimeMin = null, $shippingServiceCode = null, array $serviceType = array(), array $shippingPackage = array(), $dimensionsRequired = null, $validForSellingFlow = null, $surchargeApplicable = null, array $shippingCarrier = array(), $cODService = null, array $deprecationDetails = array(), $mappedToShippingServiceID = null, $costGroupFlat = null, array $shippingServicePackageDetails = array(), $weightRequired = null, $detailVersion = null, $updateTime = null, $shippingCategory = null, \DOMDocument $any = null)
    {
        $this
            ->setDescription($description)
            ->setExpeditedService($expeditedService)
            ->setInternationalService($internationalService)
            ->setShippingService($shippingService)
            ->setShippingServiceID($shippingServiceID)
            ->setShippingTimeMax($shippingTimeMax)
            ->setShippingTimeMin($shippingTimeMin)
            ->setShippingServiceCode($shippingServiceCode)
            ->setServiceType($serviceType)
            ->setShippingPackage($shippingPackage)
            ->setDimensionsRequired($dimensionsRequired)
            ->setValidForSellingFlow($validForSellingFlow)
            ->setSurchargeApplicable($surchargeApplicable)
            ->setShippingCarrier($shippingCarrier)
            ->setCODService($cODService)
            ->setDeprecationDetails($deprecationDetails)
            ->setMappedToShippingServiceID($mappedToShippingServiceID)
            ->setCostGroupFlat($costGroupFlat)
            ->setShippingServicePackageDetails($shippingServicePackageDetails)
            ->setWeightRequired($weightRequired)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setShippingCategory($shippingCategory)
            ->setAny($any);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ExpeditedService value
     * @return bool|null
     */
    public function getExpeditedService()
    {
        return $this->ExpeditedService;
    }
    /**
     * Set ExpeditedService value
     * @param bool $expeditedService
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setExpeditedService($expeditedService = null)
    {
        // validation for constraint: boolean
        if (!is_null($expeditedService) && !is_bool($expeditedService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($expeditedService)), __LINE__);
        }
        $this->ExpeditedService = $expeditedService;
        return $this;
    }
    /**
     * Get InternationalService value
     * @return bool|null
     */
    public function getInternationalService()
    {
        return $this->InternationalService;
    }
    /**
     * Set InternationalService value
     * @param bool $internationalService
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setInternationalService($internationalService = null)
    {
        // validation for constraint: boolean
        if (!is_null($internationalService) && !is_bool($internationalService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($internationalService)), __LINE__);
        }
        $this->InternationalService = $internationalService;
        return $this;
    }
    /**
     * Get ShippingService value
     * @return string|null
     */
    public function getShippingService()
    {
        return $this->ShippingService;
    }
    /**
     * Set ShippingService value
     * @param string $shippingService
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingService($shippingService = null)
    {
        // validation for constraint: string
        if (!is_null($shippingService) && !is_string($shippingService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingService)), __LINE__);
        }
        $this->ShippingService = $shippingService;
        return $this;
    }
    /**
     * Get ShippingServiceID value
     * @return int|null
     */
    public function getShippingServiceID()
    {
        return $this->ShippingServiceID;
    }
    /**
     * Set ShippingServiceID value
     * @param int $shippingServiceID
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingServiceID($shippingServiceID = null)
    {
        // validation for constraint: int
        if (!is_null($shippingServiceID) && !is_numeric($shippingServiceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingServiceID)), __LINE__);
        }
        $this->ShippingServiceID = $shippingServiceID;
        return $this;
    }
    /**
     * Get ShippingTimeMax value
     * @return int|null
     */
    public function getShippingTimeMax()
    {
        return $this->ShippingTimeMax;
    }
    /**
     * Set ShippingTimeMax value
     * @param int $shippingTimeMax
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingTimeMax($shippingTimeMax = null)
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMax) && !is_numeric($shippingTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingTimeMax)), __LINE__);
        }
        $this->ShippingTimeMax = $shippingTimeMax;
        return $this;
    }
    /**
     * Get ShippingTimeMin value
     * @return int|null
     */
    public function getShippingTimeMin()
    {
        return $this->ShippingTimeMin;
    }
    /**
     * Set ShippingTimeMin value
     * @param int $shippingTimeMin
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingTimeMin($shippingTimeMin = null)
    {
        // validation for constraint: int
        if (!is_null($shippingTimeMin) && !is_numeric($shippingTimeMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shippingTimeMin)), __LINE__);
        }
        $this->ShippingTimeMin = $shippingTimeMin;
        return $this;
    }
    /**
     * Get ShippingServiceCode value
     * @return string|null
     */
    public function getShippingServiceCode()
    {
        return $this->ShippingServiceCode;
    }
    /**
     * Set ShippingServiceCode value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingServiceCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingServiceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingServiceCode
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingServiceCode($shippingServiceCode = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingServiceCodeType::valueIsValid($shippingServiceCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shippingServiceCode, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingServiceCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingServiceCode = $shippingServiceCode;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string[]|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $serviceType
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setServiceType(array $serviceType = array())
    {
        $invalidValues = array();
        foreach ($serviceType as $shippingServiceDetailsTypeServiceTypeItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::valueIsValid($shippingServiceDetailsTypeServiceTypeItem)) {
                $invalidValues[] = var_export($shippingServiceDetailsTypeServiceTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Add item to ServiceType value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function addToServiceType($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ServiceType[] = $item;
        return $this;
    }
    /**
     * Get ShippingPackage value
     * @return string[]|null
     */
    public function getShippingPackage()
    {
        return $this->ShippingPackage;
    }
    /**
     * Set ShippingPackage value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingPackage
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingPackage(array $shippingPackage = array())
    {
        $invalidValues = array();
        foreach ($shippingPackage as $shippingServiceDetailsTypeShippingPackageItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid($shippingServiceDetailsTypeShippingPackageItem)) {
                $invalidValues[] = var_export($shippingServiceDetailsTypeShippingPackageItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage = $shippingPackage;
        return $this;
    }
    /**
     * Add item to ShippingPackage value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function addToShippingPackage($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingPackageCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingPackage[] = $item;
        return $this;
    }
    /**
     * Get DimensionsRequired value
     * @return bool|null
     */
    public function getDimensionsRequired()
    {
        return $this->DimensionsRequired;
    }
    /**
     * Set DimensionsRequired value
     * @param bool $dimensionsRequired
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setDimensionsRequired($dimensionsRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($dimensionsRequired) && !is_bool($dimensionsRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dimensionsRequired)), __LINE__);
        }
        $this->DimensionsRequired = $dimensionsRequired;
        return $this;
    }
    /**
     * Get ValidForSellingFlow value
     * @return bool|null
     */
    public function getValidForSellingFlow()
    {
        return $this->ValidForSellingFlow;
    }
    /**
     * Set ValidForSellingFlow value
     * @param bool $validForSellingFlow
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setValidForSellingFlow($validForSellingFlow = null)
    {
        // validation for constraint: boolean
        if (!is_null($validForSellingFlow) && !is_bool($validForSellingFlow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($validForSellingFlow)), __LINE__);
        }
        $this->ValidForSellingFlow = $validForSellingFlow;
        return $this;
    }
    /**
     * Get SurchargeApplicable value
     * @return bool|null
     */
    public function getSurchargeApplicable()
    {
        return $this->SurchargeApplicable;
    }
    /**
     * Set SurchargeApplicable value
     * @param bool $surchargeApplicable
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setSurchargeApplicable($surchargeApplicable = null)
    {
        // validation for constraint: boolean
        if (!is_null($surchargeApplicable) && !is_bool($surchargeApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($surchargeApplicable)), __LINE__);
        }
        $this->SurchargeApplicable = $surchargeApplicable;
        return $this;
    }
    /**
     * Get ShippingCarrier value
     * @return string[]|null
     */
    public function getShippingCarrier()
    {
        return $this->ShippingCarrier;
    }
    /**
     * Set ShippingCarrier value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingCarrier
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingCarrier(array $shippingCarrier = array())
    {
        $invalidValues = array();
        foreach ($shippingCarrier as $shippingServiceDetailsTypeShippingCarrierItem) {
            if (!\macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::valueIsValid($shippingServiceDetailsTypeShippingCarrierItem)) {
                $invalidValues[] = var_export($shippingServiceDetailsTypeShippingCarrierItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingCarrier = $shippingCarrier;
        return $this;
    }
    /**
     * Add item to ShippingCarrier value
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function addToShippingCarrier($item)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \macropage\ebaysdk\trading\EnumType\ShippingCarrierCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingCarrier[] = $item;
        return $this;
    }
    /**
     * Get CODService value
     * @return bool|null
     */
    public function getCODService()
    {
        return $this->CODService;
    }
    /**
     * Set CODService value
     * @param bool $cODService
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setCODService($cODService = null)
    {
        // validation for constraint: boolean
        if (!is_null($cODService) && !is_bool($cODService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cODService)), __LINE__);
        }
        $this->CODService = $cODService;
        return $this;
    }
    /**
     * Get DeprecationDetails value
     * @return \macropage\ebaysdk\trading\StructType\AnnouncementMessageType[]|null
     */
    public function getDeprecationDetails()
    {
        return $this->DeprecationDetails;
    }
    /**
     * Set DeprecationDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AnnouncementMessageType[] $deprecationDetails
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setDeprecationDetails(array $deprecationDetails = array())
    {
        foreach ($deprecationDetails as $shippingServiceDetailsTypeDeprecationDetailsItem) {
            // validation for constraint: itemType
            if (!$shippingServiceDetailsTypeDeprecationDetailsItem instanceof \macropage\ebaysdk\trading\StructType\AnnouncementMessageType) {
                throw new \InvalidArgumentException(sprintf('The DeprecationDetails property can only contain items of \macropage\ebaysdk\trading\StructType\AnnouncementMessageType, "%s" given', is_object($shippingServiceDetailsTypeDeprecationDetailsItem) ? get_class($shippingServiceDetailsTypeDeprecationDetailsItem) : gettype($shippingServiceDetailsTypeDeprecationDetailsItem)), __LINE__);
            }
        }
        $this->DeprecationDetails = $deprecationDetails;
        return $this;
    }
    /**
     * Add item to DeprecationDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\AnnouncementMessageType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function addToDeprecationDetails(\macropage\ebaysdk\trading\StructType\AnnouncementMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\AnnouncementMessageType) {
            throw new \InvalidArgumentException(sprintf('The DeprecationDetails property can only contain items of \macropage\ebaysdk\trading\StructType\AnnouncementMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeprecationDetails[] = $item;
        return $this;
    }
    /**
     * Get MappedToShippingServiceID value
     * @return int|null
     */
    public function getMappedToShippingServiceID()
    {
        return $this->MappedToShippingServiceID;
    }
    /**
     * Set MappedToShippingServiceID value
     * @param int $mappedToShippingServiceID
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setMappedToShippingServiceID($mappedToShippingServiceID = null)
    {
        // validation for constraint: int
        if (!is_null($mappedToShippingServiceID) && !is_numeric($mappedToShippingServiceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mappedToShippingServiceID)), __LINE__);
        }
        $this->MappedToShippingServiceID = $mappedToShippingServiceID;
        return $this;
    }
    /**
     * Get CostGroupFlat value
     * @return string|null
     */
    public function getCostGroupFlat()
    {
        return $this->CostGroupFlat;
    }
    /**
     * Set CostGroupFlat value
     * @param string $costGroupFlat
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setCostGroupFlat($costGroupFlat = null)
    {
        // validation for constraint: string
        if (!is_null($costGroupFlat) && !is_string($costGroupFlat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($costGroupFlat)), __LINE__);
        }
        $this->CostGroupFlat = $costGroupFlat;
        return $this;
    }
    /**
     * Get ShippingServicePackageDetails value
     * @return \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType[]|null
     */
    public function getShippingServicePackageDetails()
    {
        return $this->ShippingServicePackageDetails;
    }
    /**
     * Set ShippingServicePackageDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType[] $shippingServicePackageDetails
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingServicePackageDetails(array $shippingServicePackageDetails = array())
    {
        foreach ($shippingServicePackageDetails as $shippingServiceDetailsTypeShippingServicePackageDetailsItem) {
            // validation for constraint: itemType
            if (!$shippingServiceDetailsTypeShippingServicePackageDetailsItem instanceof \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType) {
                throw new \InvalidArgumentException(sprintf('The ShippingServicePackageDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType, "%s" given', is_object($shippingServiceDetailsTypeShippingServicePackageDetailsItem) ? get_class($shippingServiceDetailsTypeShippingServicePackageDetailsItem) : gettype($shippingServiceDetailsTypeShippingServicePackageDetailsItem)), __LINE__);
            }
        }
        $this->ShippingServicePackageDetails = $shippingServicePackageDetails;
        return $this;
    }
    /**
     * Add item to ShippingServicePackageDetails value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType $item
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function addToShippingServicePackageDetails(\macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType) {
            throw new \InvalidArgumentException(sprintf('The ShippingServicePackageDetails property can only contain items of \macropage\ebaysdk\trading\StructType\ShippingServicePackageDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShippingServicePackageDetails[] = $item;
        return $this;
    }
    /**
     * Get WeightRequired value
     * @return bool|null
     */
    public function getWeightRequired()
    {
        return $this->WeightRequired;
    }
    /**
     * Set WeightRequired value
     * @param bool $weightRequired
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setWeightRequired($weightRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($weightRequired) && !is_bool($weightRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($weightRequired)), __LINE__);
        }
        $this->WeightRequired = $weightRequired;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
        return $this;
    }
    /**
     * Get ShippingCategory value
     * @return string|null
     */
    public function getShippingCategory()
    {
        return $this->ShippingCategory;
    }
    /**
     * Set ShippingCategory value
     * @param string $shippingCategory
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
     */
    public function setShippingCategory($shippingCategory = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCategory) && !is_string($shippingCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shippingCategory)), __LINE__);
        }
        $this->ShippingCategory = $shippingCategory;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
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
     * @return \macropage\ebaysdk\trading\StructType\ShippingServiceDetailsType
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
