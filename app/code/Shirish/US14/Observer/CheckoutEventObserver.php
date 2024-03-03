<?php

namespace Shirish\US14\Observer;

use Magento\Framework\Event\Manager;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;
use Shirish\US14\Logger\Logger;

// use Shirish\US14\Model\Notification;

class CheckoutEventObserver implements ObserverInterface
{

    protected $logger;
    protected $eventManager;

    protected $productData;
    public function __construct(Logger $logger, Manager $eventManager, GetSalableQuantityDataBySku $productData)
    {
        $this->eventManager = $eventManager;
        $this->logger = $logger;
        $this->productData = $productData;
    }

    public function execute(Observer $observer)
    {
        $orderData = $observer->getEvent()->getOrder();

        $product = null;
        foreach ($orderData->getAllVisibleItems() as $item) {
            $product = $item->getProduct();
            $productSku = $product->getSku();
            $this->logger->info($productSku);

            $productsalableData = $this->productData->execute($productSku);

            $this->logger->info($productsalableData[count($productsalableData) - 1]['qty']);

            if ($productsalableData[count($productsalableData) - 1]['qty'] < 1000) {
                $this->eventManager->dispatch(
                    'shirish_product_scalable_quantity',
                    ['productName' => 'Object_Product']
                );
            }
        }
    }
}