<?php 

declare(strict_types= 1);

namespace Shirish\US18\Plugin;

use Magento\Catalog\Model\Product;

class ProductPricePlugin {
    public function afterGetPrice(
        Product $subject,
        $result
    ) {
        return $result + 1.79;
    }
}