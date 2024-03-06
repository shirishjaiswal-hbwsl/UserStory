<?php

namespace Shirish\US16\Model\Config\Source;

class ColorPickerYesNo implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [['value' => true, 'label' => __('Yes')], ['value' => false, 'label' => __('No')]];
    }
}