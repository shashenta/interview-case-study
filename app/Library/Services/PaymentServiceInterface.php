<?php
/**
 * Created by PhpStorm.
 * User: ale
 * Date: 23.01.2018
 * Time: 17:51
 */

namespace App\Library\Services;


interface PaymentServiceInterface
{
    public function pay(array $requestData);
}

