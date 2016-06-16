<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13-1-2016
 * Time: 19:01
 */

namespace Paynl\Alliance\Result\Merchant;

use Paynl\Result\Result;

/**
 * Class Merchant
 *
 * @package Paynl\Alliance\Result\Merchant
 */
class Merchant extends Result
{
    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->data['merchantId'];
    }

    /**
     * @return string
     */
    public function getMerchantName()
    {
        return $this->data['merchantName'];
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->data['packageType'];
    }

    /**
     * @return bool
     */
    public function getInvoiceAllowed()
    {
        return $this->data['invoiceAllowed'];
    }

    /**
     * @return string
     */
    public function getPayoutInterval()
    {
        return $this->data['payoutInterval'];
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->data['createdDate'];
    }

    /**
     * @return string|null
     */
    public function getAcceptedDate()
    {
        return $this->data['acceptedDate'];
    }

    /**
     * @return string|null
     */
    public function getDeletedDate()
    {
        return $this->data['deletedDate'];
    }

    /**
     * @return array
     */
    public function getServices()
    {
        return $this->data['services'];
    }
}
