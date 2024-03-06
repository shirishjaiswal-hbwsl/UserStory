<?php

namespace Shirish\US16\Model\Config\Source;

class ColorPicker implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'red', 'label' => __('Red')], 
            ['value' => 'green', 'label' => __('Green')],
            ['value' => 'blue', 'label' => __('Blue')],
            ['value' => 'grey', 'label' => __('Grey')],

        ];
    }
}