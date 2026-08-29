<?php

abstract class BankAccount
{
    protected string $accountNumber;
    protected string $owner;
    protected float $balance;

    public function __construct(
        string $accountNumber,
        string $owner,
        float $balance
    ) {
        $this->accountNumber = $accountNumber;
        $this->owner = $owner;
        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            return;
        }

        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= 0 || $amount > $this->balance) {
            return;
        }

        $this->balance -= $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    abstract public function getAccountType(): string;
}

class SavingsAccount extends BankAccount
{
    public function getAccountType(): string
    {
        return "Savings Account";
    }
}

class CurrentAccount extends BankAccount
{
    public function getAccountType(): string
    {
        return "Current Account";
    }
}

$savings = new SavingsAccount(
    "ACC-001",
    "John",
    1000
);

$savings->deposit(500);
$savings->withdraw(200);

echo "Account Type: " . $savings->getAccountType() . PHP_EOL;
echo "Balance: " . $savings->getBalance() . PHP_EOL;
