<?php

class User
{
    public string $name;
}

function showUser(User $user): void
{
    echo "User: " . $user->name . PHP_EOL;
}

function createUser(): User
{
    $user = new User();
    $user->name = "John";

    return $user;
}

$user = createUser();

showUser($user);

if ($user instanceof User) {
    echo "This is a User object." . PHP_EOL;
}
