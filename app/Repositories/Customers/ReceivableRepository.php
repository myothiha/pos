<?php
/**
 * Created by PhpStorm.
 * User: Myo Thiha
 * Date: 1/7/2019
 * Time: 1:49 PM
 */

namespace App\Repositories\Customers;


use App\CreditBalance;
use App\Customer;
use App\Receivable;
use App\ReceivableOpening;
use App\Repositories\BaseRepository;

class ReceivableRepository extends BaseRepository
{

    /**
     * ReceivableRepository constructor.
     */
    public function __construct()
    {
        parent::__construct(new Receivable());
    }

    public function getCredit(Customer $customer) : CreditBalance
    {
        return CreditBalance::firstOrNew(['customer_id' => $customer->id]);
    }
}