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
     * @return array
     */
    public function getMerchantId()
    {
        return $this->data['merchantId'];
    }
}
