<?php

namespace Shirish\US9\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

// User Story One Six
class ColorPicker extends AbstractHelper
{
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function getColor($code, $storeId = null)
    {
        return $this->getConfigValue('colorpicker/color_picker_configuration/' . $code, $storeId);
    }

    public function isEnableColorPicker($code, $storeId = null)
    {
        return $this->getConfigValue('colorpicker/enable_color_picker/' . $code, $storeId);
    }
}
