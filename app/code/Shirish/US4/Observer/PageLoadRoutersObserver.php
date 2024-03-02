<?php

declare (strict_types = 1);

namespace Shirish\US4\Observer;

use Magento\Framework\App\RouterList;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Shirish\US4\Logger\Logger;

class PageLoadRoutersObserver implements ObserverInterface
{

    protected Logger $logger;
    protected RouterList $routerList;

    public function __construct(RouterList $routerList, Logger $logger)
    {
        $this->logger = $logger;
        $this->routerList = $routerList;
    }

    public function execute(Observer $observer)
    {
        $availableRoutes = [];

        foreach ($this->routerList as $router) {
            // var_dump($this->routerList);
            $availableRoutes[] = get_class($router);
        }
        // if ($routers !== null) {
        //     $this->logger->info($routers);

        // } else {
        //     $this->logger->info('routers are null');
        // }
        $this->logger->info("" . implode("\n", $availableRoutes));
    }
}
