<?php

namespace Shirish\US8\Block;

use Magento\Framework\View\Element\Template;


class Registration extends Template
{
    protected $url;

    public function __construct()
    {
        $this->url =  '/use_path/index/insert';
    }

    public function getPostUrl(): string
    {
        return $this->url;
    }
}
