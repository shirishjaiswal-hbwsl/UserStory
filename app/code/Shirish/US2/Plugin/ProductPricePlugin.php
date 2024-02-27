<?php

declare (strict_types = 1);

namespace Shirish\US2\Plugin;

// use UserStories\UserStory2\Model\GetProduct;

use Magento\Catalog\Model\Product;

class ProductPricePlugin
{
    public function afterGetName(Product $product, $result)
    {

        if ($product->getPrice() < 60) {
            $result .= " - On Sale!";
        }
        // else {
        //     $result .= " - Non on sale!";
        // }

        return $result;
    }
}
