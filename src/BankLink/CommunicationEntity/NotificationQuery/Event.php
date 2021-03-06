<?php

namespace SwedbankPaymentPortal\BankLink\CommunicationEntity\NotificationQuery;

use SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse\QueryTxnResult\Purchase;
use JMS\Serializer\Annotation;

/**
 * The top-level container for the type of event that this response refers to.
 *
 * @Annotation\AccessType("public_method")
 */
class Event
{
    /**
     * The top-level container for the type of event that this response refers to.
     *
     * @var Purchase
     *
     * @Annotation\SerializedName("Purchase")
     * @Annotation\Type("SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse\QueryTxnResult\Purchase")
     */
    private $purchase;

    /**
     * Event constructor.
     *
     * @param Purchase $purchase
     */
    public function __construct(Purchase $purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * Purchase getter.
     *
     * @return Purchase
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * Purchase setter.
     *
     * @param Purchase $purchase
     */
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;
    }
}
