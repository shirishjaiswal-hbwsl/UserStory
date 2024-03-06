<?php 

declare(strict_types= 1);

namespace Shirish\Us19\Block;

use Magento\Catalog\Model\Product;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Checkout\Model\Cart;

class CheckoutCrossSellProduct extends Template
{
    protected $checkoutSession;
    protected $cart;

    public function __construct(
        Cart $cart,
        Context $context,
        array $data = []
    ) {
        $this->cart = $cart;
        parent::__construct($context, $data);
    }

    public function getCrossSellProducts()
    {
        //All Cross Sell Products
        $crossSellProducts = [];

        //Products Array From Cart
        $cartItems = $this->cart->getQuote()->getAllVisibleItems();
        //
        // phpinfo();
        foreach ($cartItems as $item) {
            $product = $item->getProduct();
            $crossList = $product->getCrossSellProducts();

            if (!empty($crossList)) {
                foreach ($crossList as $crossSellProduct) {
                    $crossSellProducts[] = $crossSellProduct->getSku();
                }
            }
        }

        return $crossSellProducts;
    }

    public function getSkuOfCrossSellProducts() {
        $crossSellProducts = $this->getCrossSellProducts();

        $skus = [];

        foreach ($crossSellProducts as $crossSellProduct) {
            $skus[] = $crossSellProduct->getSku();
        }
        
        return $skus;
    }

    
}