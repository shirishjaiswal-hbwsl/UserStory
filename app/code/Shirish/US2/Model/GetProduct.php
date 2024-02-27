<?php

declare (strict_types = 1);

namespace Shirish\US2\Model;

use Magento\Catalog\Model\Product;

class GetProduct
{
    public function getProduct(Product $product)
    {
        return $product;
    }
}
