<?php

namespace Shirish\US21\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected PageFactory $pageFactory;
    // protected $viewChild;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
        $page = $this->pageFactory->create();
        // $this->viewChild->isAffiliate();
        $page->getConfig()->getTitle()->set("User Story Two One");
        return $page;
    }
}
