<?php

namespace Shirish\US16\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Shirish\US16\Helper\Data;

class Frontend extends Template
{
    protected $helper;
    protected $logger;
    public function __construct(
        Context $context,
        Data $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
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