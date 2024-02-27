<?php

declare (strict_types = 1);

namespace Shirish\US2\Plugin;

use Magento\Theme\Block\Html\Header;

class ProductWelcomePlugin
{
    public function afterGetWelcome(Header $header, $result)
    {
        $result = "Welcome to my new store";
        return $result;
    }
}
