<?php

namespace PinpointDesigns\AuthUiChanges\Observer;

use Magento\Customer\Model\Session as CustomerSession;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\View\Layout;

class CustomerSessionHandle implements ObserverInterface
{
    /**
     * @var CustomerSession
     */
    private $customerSession;

    public function __construct(CustomerSession $customerSession)
    {
        $this->customerSession = $customerSession;
    }

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        /** @var Layout $layout */
        $layout = $observer->getEvent()->getLayout();

        if ($this->customerSession->isLoggedIn()) {
            $layout->getUpdate()->addHandle('customer_session_handle');
        }
    }
}
