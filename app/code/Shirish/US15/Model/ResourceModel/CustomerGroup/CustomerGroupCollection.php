<?php 

namespace Shirish\US15\Model\ResourceModel\CustomerGroup;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Shirish\US15\Model\CustomerGroup;
use Shirish\US15\Model\ResourceModel\CustomerGroupResourceModel;

class CustomerGroupCollection extends AbstractCollection {
    public function _construct() {
        $this->_init(CustomerGroup::class, CustomerGroupResourceModel::class);
    }
}
