<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellingManagerAlertsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the call-specific response fields for the <b>GetSellingManagerAlerts</b> call.
 * @subpackage Structs
 */
class GetSellingManagerAlertsResponseType extends AbstractResponseType
{
    /**
     * The Alert
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of details related to a Selling Manager alert. Alert types include listing automation, inventory, item sold, and a general alert.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\SellingManagerAlertType[]
     */
    protected array $Alert = [];
    /**
     * Constructor method for GetSellingManagerAlertsResponseType
     * @uses GetSellingManagerAlertsResponseType::setAlert()
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAlertType[] $alert
     */
    public function __construct(array $alert = [])
    {
        $this
            ->setAlert($alert);
    }
    /**
     * Get Alert value
     * @return \macropage\ebaysdk\trading\StructType\SellingManagerAlertType[]
     */
    public function getAlert(): array
    {
        return $this->Alert;
    }
    /**
     * This method is responsible for validating the values passed to the setAlert method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlert method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlertForArrayConstraintsFromSetAlert(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellingManagerAlertsResponseTypeAlertItem) {
            // validation for constraint: itemType
            if (!$getSellingManagerAlertsResponseTypeAlertItem instanceof \macropage\ebaysdk\trading\StructType\SellingManagerAlertType) {
                $invalidValues[] = is_object($getSellingManagerAlertsResponseTypeAlertItem) ? get_class($getSellingManagerAlertsResponseTypeAlertItem) : sprintf('%s(%s)', gettype($getSellingManagerAlertsResponseTypeAlertItem), var_export($getSellingManagerAlertsResponseTypeAlertItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Alert property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerAlertType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Alert value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAlertType[] $alert
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsResponseType
     */
    public function setAlert(array $alert = []): self
    {
        // validation for constraint: array
        if ('' !== ($alertArrayErrorMessage = self::validateAlertForArrayConstraintsFromSetAlert($alert))) {
            throw new InvalidArgumentException($alertArrayErrorMessage, __LINE__);
        }
        $this->Alert = $alert;
        
        return $this;
    }
    /**
     * Add item to Alert value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\SellingManagerAlertType $item
     * @return \macropage\ebaysdk\trading\StructType\GetSellingManagerAlertsResponseType
     */
    public function addToAlert(\macropage\ebaysdk\trading\StructType\SellingManagerAlertType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\SellingManagerAlertType) {
            throw new InvalidArgumentException(sprintf('The Alert property can only contain items of type \macropage\ebaysdk\trading\StructType\SellingManagerAlertType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Alert[] = $item;
        
        return $this;
    }
}
