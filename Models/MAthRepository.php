<?php

namespace Models;

class MAthRepository
{
    private $operations = [
        'sum' => 'Събери',
        'div' => 'Раздели',
        'multiply'=>'Умножи',
        'subtract'=>'Извади'
    ];
        /** @return MathOperation[] */
    public function findAll() : array
    {
        $mathOperations = [];
        foreach ($this->operations as $funcName -> $displayName)
        {
            $operation = new MathOperation($funcName, $displayName);
            $mathOperations[] = $operation;
        }
        return $mathOperations;
    }
    public function findByName(string $name): MathOperation
    {
        return new MathOperation($name, $this->operations[$name]);
    }


}