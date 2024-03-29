<?php declare(strict_types=1);

namespace MageMastery\Popup\Model\ResourceModel;


use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Popup extends AbstractDb
{
    private const TABLE_NAME = 'magemastery_popup';
    private const FIELD_NAME = 'popup_id';

    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, self::FIELD_NAME);
    }

    protected function _beforeSave(AbstractModel $object)
    {
        $object->setData('updated_at', 0);
        return parent::_beforeSave($object);
    }
}
