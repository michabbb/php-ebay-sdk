<?php

declare(strict_types=1);

namespace macropage\ebaysdk\shopping\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProductStateCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumerated type defines the different possible states of an eBay Catalog product. This type is used by the <b>ProductState</b> field returned in the <b>FindProducts</b> call.
 * @subpackage Enumerations
 */
class ProductStateCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Update'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the product details have been updated. If your application currently uses the eBay Catalog product for listing or searching, it is recommended that you check to make sure the product data still
     * meets your needs.
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'UpdateMajor'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the product has been mapped to a newer product in the catalog that eBay is currently using, and its details have been updated based on the new catalog data. The product reference ID (or EPID)
     * remains the same (but the longer product ID string may have changed). If your application currently uses the product for searching, it is recommended that you check to make sure the product data still meets your needs.
     * @return string 'UpdateMajor'
     */
    const VALUE_UPDATE_MAJOR = 'UpdateMajor';
    /**
     * Constant for value 'UpdateNoDetails'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the product was previously available in an earlier catalog, but it has not been mapped to a product in the catalog that eBay is currently using. It can still be used for searching, but it may
     * contain fewer details than other products. If your application currently uses the product for searching, it is recommended that you check to make sure the product data still meets your needs.
     * @return string 'UpdateNoDetails'
     */
    const VALUE_UPDATE_NO_DETAILS = 'UpdateNoDetails';
    /**
     * Constant for value 'Merge'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if some information in this product is scheduled to be merged into another product in the catalog that eBay is currently using. This product may be removed from the system at any time. If your
     * application currently uses the product for searching, it is recommended that you update your application to use a product that is not scheduled to be merged or deleted.
     * @return string 'Merge'
     */
    const VALUE_MERGE = 'Merge';
    /**
     * Constant for value 'Delete'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is returned if the product is marked for deletion, and it will not be mapped to another product. If your application currently uses the product for searching, it is recommended that you update your application
     * to use a product that is not scheduled to be merged or deleted.
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_UPDATE_MAJOR
     * @uses self::VALUE_UPDATE_NO_DETAILS
     * @uses self::VALUE_MERGE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UPDATE,
            self::VALUE_UPDATE_MAJOR,
            self::VALUE_UPDATE_NO_DETAILS,
            self::VALUE_MERGE,
            self::VALUE_DELETE,
            self::VALUE_CUSTOM_CODE,
        ];
    }
}
