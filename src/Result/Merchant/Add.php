<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13-1-2016
 * Time: 16:45
 */

namespace Paynl\Alliance\Result\Merchant;

use Paynl\Result\Result;

/**
 * Class Add
 *
 * @package Paynl\Alliance\Result\Merchant
 */
class Add extends Result
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
    public function getAccountId()
    {
        return $this->data['accountId'];
    }

    /**
     * @return string
     */
    public function getMerchantToken()
    {
        return $this->data['merchantToken'];
    }
}
