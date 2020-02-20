<?php


namespace VS\AddVendor\Block\Adminhtml\Edit;

use Magento\Cms\Block\Adminhtml\Page\Edit\GenericButton;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class SaveButton extends GenericButton implements ButtonProviderInterface
{

    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'class' => 'save primary',
            'sort_order' => 10
        ];
    }
    public function getBackUrl()
    {
        return $this->getUrl('*/*/');
    }
}