<?php

namespace Paynl\Alliance\Result\Invoice;

use Paynl\Result\Result;

/**
 * Class Add
 *
 * @package Paynl\Alliance\Result\Invoice
 */
class Add extends Result
{
    /**
     * @return array
     */
    public function referenceId()
    {
        return $this->data['referenceId'];
    }
}
