<?php

declare (strict_types = 1);

namespace Shirish\US2\Plugin;


use Magento\Catalog\Model\Product;

class ProductPricePlugin
{
    public function afterGetName(Product $product, $result)
    {

        if ($product->getPrice() < 60) {
            $result .= " - On Sale!";
        }

        return $result;
    }
}
