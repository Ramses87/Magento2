<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.01.17
 * Time: 14:37
 */
namespace Magecom\Learning\Controller\Front;

use Magento\Framework\App\Action\Context;

class Base extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
//              die('Front _ Base controller');
    }
}