<?php

namespace Shirish\US14\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Notification\NotifierInterface;
use Shirish\US14\Logger\Logger;

class ScalableEventObserver implements ObserverInterface
{

    protected $logger;

    protected $notification;

    public function __construct(Logger $logger, NotifierInterface $notification)
    {
        $this->logger = $logger;
        $this->notification = $notification;
    }

    public function execute(Observer $observer)
    {
        $orderData = $observer->getEvent()->getProductName();
        $this->notification->addMajor('Warning', 'The product quantity is low');
    }
}
