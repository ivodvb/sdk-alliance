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
     * @return array
     */
    public function getMerchantId()
    {
        return $this->data['merchantId'];
    }

    /**
     * @return array
     */
    public function getMerchantName()
    {
        return $this->data['merchantName'];
    }

    /**
     * @return array
     */
    public function getPackageType()
    {
        return $this->data['packageType'];
    }

    /**
     * @return array
     */
    public function getInvoiceAllowed()
    {
        return $this->data['invoiceAllowed'];
    }

    /**
     * @return array
     */
    public function getPayoutInterval()
    {
        return $this->data['payoutInterval'];
    }

    /**
     * @return array
     */
    public function getCreatedDate()
    {
        return $this->data['createdDate'];
    }

    /**
     * @return array
     */
    public function getAcceptedDate()
    {
        return $this->data['acceptedDate'];
    }

    /**
     * @return array
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
