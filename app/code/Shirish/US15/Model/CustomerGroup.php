<?php
namespace Shirish\US15\Model;
use Magento\Framework\Model\AbstractModel;
use Shirish\US15\Model\ResourceModel\CustomerGroupResourceModel;

class CustomerGroup extends AbstractModel {
    protected function _construct() {
        $this->_init(CustomerGroupResourceModel::class);
    }
}
