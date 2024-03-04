<?php

namespace Shirish\US9\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Shirish\US9\Block\ModNine;

class Index implements ActionInterface
{
    protected $pageFactory;

    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getLayout()->createBlock(ModNine::class)->toHtml();

        return $page;
    }
}