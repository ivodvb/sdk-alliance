<?php

namespace Paynl\Alliance\Api;

/**
 * {@inheritDoc}
 */
class Api extends \Paynl\Api\Api
{
    protected $apiTokenRequired = true;
    protected $serviceIdRequired = false;

    protected $version = 2;

}