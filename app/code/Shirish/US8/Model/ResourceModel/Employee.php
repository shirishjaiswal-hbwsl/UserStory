<?php

namespace Shirish\US8\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Employee extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        //first paramater is table name and second paramater is PK name
        $this->_init('employee_table', 'employee_id');
    }
}
