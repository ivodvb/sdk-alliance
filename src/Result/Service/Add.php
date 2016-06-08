<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-1-2016
 * Time: 19:10
 */

namespace Paynl\Alliance\Result\Service;

use Paynl\Result\Result;

/**
 * Class Add
 *
 * @package Paynl\Alliance\Result\Service
 */
class Add extends Result
{
    /**
     * @return array
     */
    public function getServiceId()
    {
        return $this->data['serviceId'];
    }
}
