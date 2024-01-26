<?php
class Customer
{
    public string $forename;
    public string $email;
    public string $password;
    public string $surname;
    public array $accounts;

    function __construct(string $forename, string $email, string $surename, string $password, array $accounts)
    {
        $this->forename = $forename;
        $this->email = $email;
        $this->password = $password;
        $this->surname = $surename;
        $this->accounts = $accounts;
    }

    function getFullName()
    {
        return $this->forename . ' ' . $this->surname;
    }
}
