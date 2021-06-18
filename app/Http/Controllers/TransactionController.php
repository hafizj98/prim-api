<?php

namespace App\Http\Controllers;

use App\Repository\TransactionRepository;
use Illuminate\Http\Request;

class TransactionController extends AppBaseController
{
    private $transaction;

    public function __construct(TransactionRepository $transaction)
    {
        $this->transaction = $transaction;
    }

    public function store(Request $request)
    {
        try {
            $response = $this->transaction->store($request->all());
            return $this->sendResponse($response, "Success");
        } catch (\Throwable $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }

    public function showAll()
    {
        try {
            $response = $this->transaction->showAll();
            return $this->sendResponse($response, "Success");
        } catch (\Throwable $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
}
