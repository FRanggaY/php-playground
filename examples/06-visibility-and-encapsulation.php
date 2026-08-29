<?php

class BankAccount
{
    public string $owner;

    protected string $accountNumber;

    private float $balance = 0;

    public function __construct(string $owner, string $accountNumber)
    {
        $this->owner = $owner;
        $this->accountNumber = $accountNumber;
    }

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    protected function getAccountNumber(): string
    {
        return $this->accountNumber;
    }
}

$account = new BankAccount("John", "ACC-001");

$account->owner = "John";

$account->deposit(500);

echo "Owner: " . $account->owner . PHP_EOL;
echo "Balance: " . $account->getBalance() . PHP_EOL;

// Cannot access protected or private members directly:
// $account->accountNumber;
// $account->balance;
