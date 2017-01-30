<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.01.17
 * Time: 11:54
 */
namespace Magecom\Learning\Model\ResourceModel;

class Item extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('magecom_learning_items','id');
    }
}
