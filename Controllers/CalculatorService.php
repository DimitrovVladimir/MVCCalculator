<?php

namespace Controllers;

class CalculatorService
{
    public function sum (int $a, int $b) : int
    {
        return $a + $b;
    }
    public function div (int $a, int $b) : float
    {
        return $a / $b;
    }
    public function multiply (int $a, int $b) : int
    {
        return $a * $b;
    }
    public function subtract (int $a, int $b) : int
    {
        return $a - $b;
    }

}