<?php

namespace VS\AddVendor\Model;

use Magento\Framework\Model\AbstractModel;

class VendorModel extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('VS\AddVendor\Model\ResourceModel\VendorResourceModel');
    }
}