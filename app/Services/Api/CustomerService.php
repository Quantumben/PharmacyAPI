<?php

namespace App\Services\Api;

use App\Models\Customer;
use App\Services\BaseService;

class CustomerService extends BaseService
{
    public function __construct(protected Customer $customer) {}

    public function getAllCustomer():array
    {
        $customer = $this->customer->get();

        if (! $customer) {
            return $this->error('Customer not found', [], 404);
        }

        return $this->success('All Customer retrieved', $customer);
    }
}