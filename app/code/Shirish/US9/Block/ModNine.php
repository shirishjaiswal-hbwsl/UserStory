<?php

namespace Shirish\US9\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Shirish\US9\Helper\Data;

class ModNine extends Template
{
    protected $helper;

    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
    }

    public function getEnable()
    {
        return $this->helper->getGeneralConfig('enable');
    }

    public function getTextToDisplay()
    {
        return $this->helper->getGeneralConfig('text_to_display');
    }
}
