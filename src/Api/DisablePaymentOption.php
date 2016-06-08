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

class DisablePaymentOption extends Api
{
    protected $version = 3;

    protected $serviceId = null;
    protected $paymentProfileId = null;
    protected $settings = null;

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

    public function setPaymentProfileId($paymentProfileId)
    {
        $this->paymentProfileId = $paymentProfileId;
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

        if (!isset($this->paymentProfileId)) {
            throw new Required('paymentProfileId');
        }
        $this->data['paymentProfileId'] = $this->paymentProfileId;

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    public function doRequest($endpoint = null, $version = null)
    {
        return parent::doRequest('service/disablePaymentOption');
    }
}