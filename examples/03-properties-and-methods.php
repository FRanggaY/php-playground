<?php

class User
{
    public string $name;
    public string $email;

    public function greet(): void
    {
        echo "Hello, " . $this->name . PHP_EOL;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function introduce(string $message): string
    {
        return $message . ", my name is " . $this->name;
    }
}

$user = new User();

$user->name = "John";
$user->email = "john@example.com";

$user->greet();

echo $user->getEmail() . PHP_EOL;

echo $user->introduce("Nice to meet you") . PHP_EOL;
