<?php

namespace App\Repository;

use App\Model\Transaction;

class TransactionRepository
{
    public function store($input)
    {
        Transaction::create($input);
    }

    public function showAll()
    {
        $result = Transaction::all();
        return $result;
    }
}
