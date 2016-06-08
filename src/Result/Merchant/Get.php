<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13-1-2016
 * Time: 16:45
 */

namespace Paynl\Alliance\Result\Merchant;

/**
 * Class Get
 *
 * @package Paynl\Alliance\Result\Merchant
 */
class Get extends Merchant
{
    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->data['balance'] / 100;
    }

    /**
     * @return array
     */
    public function getDocuments()
    {
        return $this->data['documents'];
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
    public function getMissingDocuments()
    {
        $result = array();

        foreach ($this->data['documents'] as $document) {
            // status 2 = wordt gecontroleerd, 3 = goed
            if (!in_array($document['status_id'], array(2, 3))) {
                array_push($result, $document);
            }
        }

        return $result;
    }

    /**
     * @return array
     */
    public function getAccounts()
    {
        return $this->data['accounts'];
    }
}
