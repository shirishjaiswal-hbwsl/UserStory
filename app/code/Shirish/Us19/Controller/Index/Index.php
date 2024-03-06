<?php 

declare(strict_types= 1);

namespace Shirish\Us19\Controller\Index;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Shirish\Us19\Block\CheckoutCrossSellProduct;

class Index implements ActionInterface {
    protected PageFactory $resultPageFactory;
    protected CheckoutCrossSellProduct $checkoutCrossSellProduct;

    public function __construct(PageFactory $resultPageFactory, CheckoutCrossSellProduct $checkoutCrossSellProduct) {
        $this->resultPageFactory = $resultPageFactory;
        $this->checkoutCrossSellProduct = $checkoutCrossSellProduct;
    }

    public function execute() {
        dump($this->checkoutCrossSellProduct->getCrossSellProducts());
        return $this->resultPageFactory->create();
    }
}