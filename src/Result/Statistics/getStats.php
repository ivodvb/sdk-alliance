<?php
namespace Paynl\Alliance\Result\Statistics;

use Paynl\Result\Result;

/**
 * Class getStats
 *
 * @package Paynl\Alliance\Result\Statistics
 */
class getStats extends Result
{
    /**
     * getStats constructor.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $data = $this->reorderData($data);
        parent::__construct($data);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    private function reorderData($data)
    {
        $merchants = array();
        if (!isset($data['arrStatsData']) || empty($data['arrStatsData'])) {
            return array();
        }
        foreach ($data['arrStatsData'] as $merchant) {
            $arrMerchant = array(
                'id'             => $merchant['Id'],
                'name'           => $merchant['Label'],
                'paymentMethods' => array(),
                'totals'         => array(
                    'transactions' => 0,
                    'turnover'     => 0,
                ),
            );
            foreach ($merchant['Data'] as $paymentMethod) {
                $arrPaymentMethod = array(
                    'id'           => $paymentMethod['Id'],
                    'name'         => $paymentMethod['Label'],
                    'transactions' => (float)0,
                    'turnover'     => (float)0,
                );
                foreach ($paymentMethod['Data'] as $paymentMethodSub) {
                    $arrPaymentMethod['transactions'] += (float)$paymentMethodSub['Data']['num'];
                    $arrPaymentMethod['turnover'] += (float)$paymentMethodSub['Data']['org_tot'];
                }
                $arrMerchant['paymentMethods'][] = $arrPaymentMethod;
                $arrMerchant['totals']['transactions'] += $arrPaymentMethod['transactions'];
                $arrMerchant['totals']['turnover'] += $arrPaymentMethod['turnover'];
            }
            $merchants[] = $arrMerchant;
        }

        return $merchants;
    }
}
