<?php

namespace Shirish\US6\Plugin;

use Magento\Catalog\Block\Product\View\Description;

class DescriptionPlugin
{
    public function afterGetProduct(Description $description, $result)
    {
        $result->setDescription("Description of the product is this");
        return $result;
    }
}
