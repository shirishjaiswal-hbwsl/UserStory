<?php

namespace UserStories\UserStoryOne\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use UserStories\UserStoryOne\ViewModel\Test;

class Index implements ActionInterface
{
    protected PageFactory $pageFactory;
    protected Test $test;

    public function __construct(PageFactory $pageFactory, Test $test) {
        $this->pageFactory = $pageFactory;
        $this->test = $test;
    }
    public function execute()
    {
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set( $this->test->displayParams());
        return $page;
    }
}