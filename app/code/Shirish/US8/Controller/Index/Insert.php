<?php

namespace Shirish\US8\Controller\Index;

use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\App\ActionInterface;

class Insert implements ActionInterface
{
    protected $redirectFactory;

    public function __construct(RedirectFactory $redirectFactory)
    {
        $this->redirectFactory = $redirectFactory;
    }

    public function execute()
    {
        $resultRedirect = $this->redirectFactory->create();
        $resultRedirect->setUrl("/use_path/index/index");
        return $resultRedirect;
    }
}
