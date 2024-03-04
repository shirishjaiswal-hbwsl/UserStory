<?php

namespace Shirish\US8\Block\Employee;

use Magento\Framework\App\Request\Http;
use Magento\Framework\View\Element\Template;
use Shirish\US8\ViewModel\EmployeeService;

class Insert extends Template
{
    protected $request;

    protected $employeeService;

    public function __construct(Http $request, EmployeeService $employeeService)
    {
        $this->request = $request;
        $this->employeeService = $employeeService;
    }

    public function putData()
    {
        if ($this->request->isPost()) {
            $postValue = $this->request->getPostValue();
            $this->employeeService->setEmployee($postValue);
        }
    }
}
