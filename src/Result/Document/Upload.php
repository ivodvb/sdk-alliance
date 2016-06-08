<?php

namespace Paynl\Alliance\Result\Document;

use Paynl\Result\Result;

/**
 * Class Upload
 *
 * @package Paynl\Alliance\Result\Document
 */
class Upload extends Result
{
    /**
     * @return bool
     */
    public function success()
    {
        return (bool)$this->data['result'];
    }
}
