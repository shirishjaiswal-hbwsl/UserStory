<?php

namespace Shirish\US5\Plugin;

use Magento\Catalog\Block\Product\View;

class Plugin
{
    public function afterGetProduct(View $view, $result)
    {
        $result->setName("Name of the Product");
        return $result;
    }
}
