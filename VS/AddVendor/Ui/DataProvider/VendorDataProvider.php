<?php


namespace VS\AddVendor\Ui\DataProvider;

use VS\AddVendor\Model\ResourceModel\VendorCollection\CollectionFactory;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Filesystem;

/**
 * Class DataProvider
 */
class VendorDataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{

    protected $collection;
    protected $dataPersistor;
    protected $loadedData;
    private $logger;
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $bannerCollectionFactory,
        DataPersistorInterface $dataPersistor,
        \Psr\Log\LoggerInterface $logger,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $bannerCollectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        $this->logger = $logger;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();

        foreach ($items as $vendor) {
            $this->logger->debug('555', $vendor->getData());
            $this->loadedData[$vendor->getId()] = $vendor->getData();
        }

        $as =[7 =>['vendor_id' => 7,
            'name'=>'name']];

        return $this->loadedData;
    }


}