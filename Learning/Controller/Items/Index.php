<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 27.01.17
 * Time: 15:00
 */
namespace Magecom\Learning\Controller\Items;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}