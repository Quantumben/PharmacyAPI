<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\BaseController;
use App\Http\Resources\CustomerResource;
use App\Services\Api\CustomerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomerController extends BaseController
{
    public function __construct(private CustomerService $customerService){}

    public function getAllCustomer()
    {
        $customer = $this->customerService->getAllCustomer();

        if(! $customer['success']){
            return $this->errorResponse($customer['message'], $customer['status_code']);
        }

        return CustomerResource::collection($customer['data']);
    }
}