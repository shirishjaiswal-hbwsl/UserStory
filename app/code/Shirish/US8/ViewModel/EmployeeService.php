<?php

namespace Shirish\US8\ViewModel;

use Shirish\US8\Model\Employee as ModelEmployee;
use Shirish\US8\Model\ResourceModel\Employee as ResourceEmployee;
use Shirish\US8\Model\ResourceModel\EmployeeCollection\Collection as CollectionEmployee;

class EmployeeService
{
    protected $employee;
    protected $collectionEmployee;
    protected $resouceEmployee;

    public function __construct(
        ModelEmployee $employee,
        ResourceEmployee $resourceEmployee,
        CollectionEmployee $collectionEmployee
    ) {
        $this->employee  = $employee;
        $this->resouceEmployee = $resourceEmployee;
        $this->collectionEmployee = $collectionEmployee;
    }

    public function getData()
    {
        $employee = $this->collectionEmployee;
        return $employee;
    }

    public function setEmployee($requestData)
    {
        $employee = $this->employee;
        $employee->setData('fName', $requestData['fName']);
        $employee->setData('lName', $requestData['lName']);
        $employee->setData('email', $requestData['email']);
        $employee->setData('address', $requestData['address']);
        $employee->setData('phone', $requestData['phone']);

        $this->resouceEmployee->save($employee);
    }

    public function deleteEmployee($id)
    {
        $employee = $this->employee;
        $result = $employee->setId($id);
        $result = $result->delete();
    }
}
