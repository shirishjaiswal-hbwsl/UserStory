<?php

namespace Shirish\US8\Block\Employee;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Shirish\US8\ViewModel\EmployeeService;

class ShowData extends Template
{
    protected $employeeService;
    public function __construct(
        Context $context,
        EmployeeService $employeeService
    ) {
        parent::__construct($context);
        $this->employeeService = $employeeService;
    }


    public function showData()
    {
        $collection = $this->employeeService->getData();
        return $collection;
    }
}
