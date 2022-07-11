<?php

use Grafeno\Grafeno;
use Grafeno\Resources\BankAccounts;

it('Should list the bank accounts', function () 
{
    $bank_accounts = $this->grafeno->bankAccounts()->listAccounts();

    $response = $bank_accounts;
    //$account = $response->data[0]->account;

    //expect($account)
    //  ->toBe($this->account_number);
    $this->assertStringContainsString($this->account_number, $response);
});

it('Should list the bank accounts transactions', function () 
{
    $bank_accounts_transactions = $this->grafeno->bankAccounts()->listTransactions();

    expect($bank_accounts_transactions)
      ->json()
      ->toHaveKeys(['initial_balance', 'final_balance'])
      ->final_balance->toBeString();
});

it('Should return a instance of bank accounts class', function () 
{
    $bank_accounts_class = $this->grafeno->bankAccounts();

    expect($bank_accounts_class)
      ->toBeInstanceOf(BankAccounts::class);
});


