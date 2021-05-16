<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendSiteHostedPicturesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the URL of an eBay Picture Services image whose expiration date was extended.
 * @subpackage Structs
 */
class ExtendSiteHostedPicturesResponseType extends AbstractResponseType
{
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the site-hosted picture whose expiration date was extended through the <b>ExtendSiteHostedPictures</b> call. This field will be returned if the expiration date of the site-hosted picture was successfully extended.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $PictureURL = [];
    /**
     * Constructor method for ExtendSiteHostedPicturesResponseType
     * @uses ExtendSiteHostedPicturesResponseType::setPictureURL()
     * @param string[] $pictureURL
     */
    public function __construct(array $pictureURL = [])
    {
        $this
            ->setPictureURL($pictureURL);
    }
    /**
     * Get PictureURL value
     * @return string[]
     */
    public function getPictureURL(): array
    {
        return $this->PictureURL;
    }
    /**
     * This method is responsible for validating the values passed to the setPictureURL method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictureURL method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureURLForArrayConstraintsFromSetPictureURL(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $extendSiteHostedPicturesResponseTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($extendSiteHostedPicturesResponseTypePictureURLItem)) {
                $invalidValues[] = is_object($extendSiteHostedPicturesResponseTypePictureURLItem) ? get_class($extendSiteHostedPicturesResponseTypePictureURLItem) : sprintf('%s(%s)', gettype($extendSiteHostedPicturesResponseTypePictureURLItem), var_export($extendSiteHostedPicturesResponseTypePictureURLItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PictureURL property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PictureURL value
     * @throws InvalidArgumentException
     * @param string[] $pictureURL
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType
     */
    public function setPictureURL(array $pictureURL = []): self
    {
        // validation for constraint: array
        if ('' !== ($pictureURLArrayErrorMessage = self::validatePictureURLForArrayConstraintsFromSetPictureURL($pictureURL))) {
            throw new InvalidArgumentException($pictureURLArrayErrorMessage, __LINE__);
        }
        $this->PictureURL = $pictureURL;
        
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \macropage\ebaysdk\trading\StructType\ExtendSiteHostedPicturesResponseType
     */
    public function addToPictureURL(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The PictureURL property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PictureURL[] = $item;
        
        return $this;
    }
}
