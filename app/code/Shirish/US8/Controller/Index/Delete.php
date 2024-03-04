<?php

namespace Shirish\US8\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\View\Result\PageFactory;

class Delete implements ActionInterface
{
    protected $pageFactory;
    protected $request;

    protected $redirect;

    public function __construct(
        PageFactory $pageFactory,
        Http $request,
        RedirectFactory $redirectFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->redirect = $redirectFactory->create();
        $this->request = $request;
    }

    public function execute()
    {
        $redirectResult = $this->redirect->setUrl("/use_path/index/index");
        return $redirectResult;
    }
}
