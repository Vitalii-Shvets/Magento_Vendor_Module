<?php


namespace VS\AddVendor\Controller\Adminhtml\Vendor;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Edit extends Action
{
    protected $_resultPageFactory;

    const ADMIN_RESOURCE = 'VS_AddVendor::vendor';

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}