<?php
namespace Shirish\US16\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Shirish\US16\Helper\ColorPickerHelper;

class ColorPicker extends Template
{
    protected $helper;
    protected $logger;
    public function __construct(
        Context $context,
        ColorPickerHelper $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    public function getEnableColorPicker()
    {
        return $this->helper->getColorPickerConfig('enable_color_picker');
    }

    public function getPickColor() {
        return $this->helper->getColorPickerConfig('pick_color');
    }
}