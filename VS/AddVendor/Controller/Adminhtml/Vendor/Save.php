<?php


namespace VS\AddVendor\Controller\Adminhtml\Vendor;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Save extends Action
{
    const ADMIN_RESOURCE = 'VS_AddVendor::vendor';
    protected $_resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {

        die('23432');
    }
}