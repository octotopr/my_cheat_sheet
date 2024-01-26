<?php
class Account
{
    public int $number;
    public string $type;
    protected float $balance;

    public function __construct(int $name, string $type, float $balance)
    {
        $this->number = $name;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
}
