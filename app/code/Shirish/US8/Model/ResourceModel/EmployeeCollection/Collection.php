<?php

namespace Shirish\US8\Model\ResourceModel\EmployeeCollection;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

// use UserStories\UserStoryEight\Model\Employee as ModelEmployee;
// use UserStories\UserStoryEight\Model\ResourceModel\Employee as ResourceModelEmployee;


class Collection extends AbstractCollection
{
    public function _construct()
    // ResourceModelEmployee
    {
        $this->_init('Shirish\US8\Model\Employee', 'Shirish\US8\Model\ResourceModel\Employee');
    }
}
