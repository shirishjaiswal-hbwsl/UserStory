<?php

namespace Shirish\US8\Block\Employee;

use Magento\Framework\View\Element\Template;
use Shirish\US8\ViewModel\EmployeeService;
use Magento\Framework\App\Request\Http;

class Delete extends Template
{
    protected $employeeService;
    protected $request;

    public function __construct(EmployeeService $employeeService, Http $request)
    {
        $this->employeeService = $employeeService;
        $this->request = $request;
    }

    public function dropData()
    {
        $id = $this->request->getParam('id');
        dump($id);
        $this->employeeService->deleteEmployee($id);
    }
}
