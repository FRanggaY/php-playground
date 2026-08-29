<?php

class User
{
    public string $name;

    public function login(): void
    {
        echo $this->name . " logged in.";
    }
}

$user = new User();

$user->name = "John";

$user->login();
