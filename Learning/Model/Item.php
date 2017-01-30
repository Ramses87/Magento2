<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.01.17
 * Time: 11:54
 */
namespace Magecom\Learning\Model;

class Item extends \Magento\Framework\Model\AbstractModel
    implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'magecom_learning_item';

    protected function _construct()
    {
        $this->_init('Magecom\Learning\Model\ResourceModel\Item');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}