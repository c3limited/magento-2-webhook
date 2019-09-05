<?php

namespace Mageplaza\Webhook\Observer;

use Exception;
use Magento\Framework\Event\Observer;
use Mageplaza\Webhook\Model\Config\Source\HookType;

/**
 * Class AfterStockist
 * @package Mageplaza\Webhook\Observer
 */
class AfterStockist extends AfterSave
{
    /**
     * @var string
     */
    protected $hookType = HookType::NEW_STOCKIST;

    /**
     * @var string
     */
    protected $hookTypeUpdate = HookType::UPDATE_STOCKIST;

    /**
     * @param Observer $observer
     *
     * @throws Exception
     */
    public function execute(Observer $observer)
    {
        $item = $observer->getDataObject();
        if ($item->isObjectNew()) {
            parent::execute($observer);
        } else {
            $this->updateObserver($observer);
        }
    }
}
