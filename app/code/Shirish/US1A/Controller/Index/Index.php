<?php

declare (strict_types = 1);

namespace Shirish\US1A\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Shirish\US1A\Logger\Logger;
use Shirish\US1A\Model\Test;
use Shirish\US1A\ViewModel\ArrToJson;

class Index implements ActionInterface
{
    protected PageFactory $resultPageFactory;
    protected Test $test;
    protected Logger $logger;
    protected ArrToJson $arrToJson;

    public function __construct(PageFactory $pageFactory, Test $test, Logger $logger, ArrToJson $arrToJson)
    {
        $this->resultPageFactory = $pageFactory;
        $this->test = $test;
        $this->logger = $logger;
        $this->arrToJson = $arrToJson;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        // $this->test->getParams();
        $resultPage->getConfig()->getTitle()->set($this->test->displayParams());
        // $this->logger->warning($this->arrToJson->arrayToJson());
        $this->logger->warning("Message", ["" => $this->test->displayParams()]);
        // $this->logger->warning("Warning", $this->test->getArray());

        return $resultPage;
    }
}
