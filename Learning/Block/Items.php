<?php

namespace Magecom\Learning\Block;

use Magecom\Learning\Model\ResourceModel\Item\CollectionFactory;
use Magento\Framework\View\Element\Template;

class Items extends Template
{
    protected $itemFactory;
    public function __construct(Template\Context $context, array $data = [],CollectionFactory $collectionFactory)
    {
        $this->itemFactory = $collectionFactory;
        parent::__construct($context, $data);
    }
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if ($this->getItems()) {
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'fme.news.pager'
            )->setAvailableLimit(array(1=>1,10=>10,15=>15))->setShowPerPage(true)->setCollection(
                $this->getItems()
            );
            $this->setChild('pager', $pager);
            $this->getItems()->load();
        }
        return $this;
    }
    public function getItems()
    {
        $page = ($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        $pageSize = ($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 1;
        $collection = $this->itemFactory->create();
        $collection->setPageSize($pageSize);
        $collection->setCurPage($page);
        return $collection;
    }
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}
