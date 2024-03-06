<?php

namespace Shirish\US16\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class ColorPickerHelper extends AbstractHelper
{

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    public function getColorPickerConfig($code, $storeId = null) {
        return $this->getConfigValue('colorpickersection/colorpicker_configuration/' .$code, $storeId);
    }
}