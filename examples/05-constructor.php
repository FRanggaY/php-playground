<?php

class User
{
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function introduce(): void
    {
        echo "Hello, my name is " . $this->name . PHP_EOL;
        echo "Email: " . $this->email . PHP_EOL;
    }
}

$user = new User(
    "John",
    "john@example.com"
);

$user->introduce();
