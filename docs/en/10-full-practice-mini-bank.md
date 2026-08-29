# Full Practice — Mini Bank
In this practice, you will build a small bank account system using the OOP concepts learned in the previous docs.

## Goal
Create a simple system that can:

- Create bank accounts
- Deposit money
- Withdraw money
- Check the balance
- Display account information

## Requirements
Create a base BankAccount class with:

- Account number
- Account owner
- Balance
- Deposit method
- Withdraw method
- Balance checking method
The balance should not be directly accessible from outside the class.

Then create at least two account types, such as:

- SavingsAccount
- CurrentAccount

Each account type should have different behavior.

Use the OOP concepts you have learned:

- Class and object
- Properties and methods
- Object types
- Constructor
- Visibility
- Encapsulation
- Inheritance
- Polymorphism
- Abstraction

## Example Usage
Your final program should be able to do something similar to:

```php
$account = new SavingsAccount(
    "ACC-001",
    "John",
    1000
);

$account->deposit(500);
$account->withdraw(200);

echo $account->getBalance();
```

Expected result:

```bash
1300
```

## Challenge
Try to build the application yourself before looking at a solution.

The goal is not just to make the program work. Try to decide:

- Which class should own each piece of data?
- Which properties should be private?
- Which behavior should belong to the parent class?
- Which behavior should be different for each account type?
- Where should inheritance be used?
- Where should polymorphism be used?

## Suggested Classes
You can start with:

```bash
BankAccount
├── SavingsAccount
└── CurrentAccount
```

You are free to design the classes differently if you have a better approach.

## Source Code Assignment

```php
--8<-- "examples/10-full-practice-mini-bank/index.php"
```