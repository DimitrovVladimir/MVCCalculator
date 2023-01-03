<?php

namespace Models;

class MathOperation
{
    /** @var string*/
    private $functionName;

    /** @var string*/
    private $displayName;

    public function __construct(string $functionName, string $displayName)
    {
        $this->setFunctionName($functionName);
        $this->setDisplayName($displayName);
    }


    public function getFunctionName() : string
    {
        return $this->functionName;
    }
    public  function setFunctionName(string $functionName)
    {
        $this->functionName = $functionName;
    }
    public function setDisplayName(string $displayName)
    {
        $this->displayName = $displayName;
    }

}