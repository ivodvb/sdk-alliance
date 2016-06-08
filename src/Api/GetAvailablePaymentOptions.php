<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 14-1-2016
 * Time: 20:19
 */

namespace Paynl\Alliance\Api;

use Paynl\Error\Api as ApiError;
use Paynl\Error\Required;
use Paynl\Helper;

class GetAvailablePaymentOptions extends Api
{
    protected $version = 3;

    protected $serviceId = null;

    /**
     * {@inheritDoc}
     */
    protected function processResult($result)
    {
        $output = Helper::objectToArray($result);

        if (!is_array($output)) {
            throw new ApiError($output);
        }

        return $output;
    }

    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * {@inheritDoc}
     */
    public function getData()
    {
        if (!isset($this->serviceId)) {
            throw new Required('serviceId');
        }
        $this->data['serviceId'] = $this->serviceId;

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    public function doRequest($endpoint = null, $version = null)
    {
        return parent::doRequest('service/getAvailablePaymentOptions');
    }
}