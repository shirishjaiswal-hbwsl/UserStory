<?php
declare (strict_types = 1);

namespace Shirish\US16\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Shirish\US16\Block\Frontend;

class Index implements ActionInterface
{
    protected PageFactory $pageFactory;
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getLayout()->createBlock(Frontend::class)->toHtml();
        return $resultPage;
    }
}