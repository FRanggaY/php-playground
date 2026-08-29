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
        // TODO
    }

    public function deposit(float $amount): void
    {
        // TODO
    }

    public function withdraw(float $amount): void
    {
        // TODO
    }

    public function getBalance(): float
    {
        // TODO
    }

    abstract public function getAccountType(): string;
}

class SavingsAccount extends BankAccount
{
    public function getAccountType(): string
    {
        // TODO
    }
}

class CurrentAccount extends BankAccount
{
    public function getAccountType(): string
    {
        // TODO
    }
}

// Create a SavingsAccount
$savings = new SavingsAccount(
    "ACC-001",
    "John",
    1000
);

// Test deposit
$savings->deposit(500);

// Test withdrawal
$savings->withdraw(200);

// Display account information
echo "Account Type: " . $savings->getAccountType() . PHP_EOL;
echo "Balance: " . $savings->getBalance() . PHP_EOL;
