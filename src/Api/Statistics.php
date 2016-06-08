<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13-1-2016
 * Time: 19:34
 */

namespace Paynl\Alliance\Api;

use Paynl\Error\Required;
use Paynl\Error;
use Paynl\Helper;

class Statistics extends Api
{
    protected $version = 5;

    protected $apiTokenRequired = true;

    /**
     * @var \DateTime
     */
    private $startDate;
    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * {@inheritDoc}
     */
    protected function getData()
    {
        $this->data['groupBy'] = array(
            'company_id',
            'payment_profile_id',
        );

        if (!isset($this->startDate)) {
            throw new Required('startDate');
        } else {
            $this->data['startDate'] = $this->startDate->format('Y-m-d');
        }

        if (!isset($this->endDate)) {
            throw new Required('endDate');
        } else {
            $this->data['endDate'] = $this->endDate->format('Y-m-d');
        }

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    protected function processResult($result)
    {
        $output = Helper::objectToArray($result);

        if (!is_array($output)) {
            throw new Error\Api($output);
        }

        return $output;
    }

    /**
     * {@inheritDoc}
     */
    public function doRequest($endpoint = null, $version = null)
    {
        return parent::doRequest('Statistics/management');
    }
}