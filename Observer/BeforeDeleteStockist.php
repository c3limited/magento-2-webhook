<?php

namespace Mageplaza\Webhook\Observer;

use Mageplaza\Webhook\Model\Config\Source\HookType;

/**
 * Class BeforeDeleteStockist
 * @package Mageplaza\Webhook\Observer
 */
class BeforeDeleteStockist extends AfterSave
{
    /**
     * @var string
     */
    protected $hookType = HookType::DELETE_STOCKIST;
}
