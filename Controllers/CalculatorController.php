<?php

namespace Controllers;

use Models\MAthRepository;

class CalculatorController
{
    public function index()
    {
        $mathRepo = new MAthRepository();
        $operations = $mathRepo->findAll();
        $result = PHP_INT_MIN;
        include 'views/calculator_view.php';

    }
    public function doOperation()
    {
        $operation = $_GET['operation'];
        $a = intval($_GET['num_a']);
        $b = intval($_GET['num_b']);

        $calculatorService = new CalculatorService();
        $result = PHP_INT_MIN;
        switch ($operation)
        {
            case "sum" :
                $result = $calculatorService->sum($a, $b);
                break;
            case "div" :
                $result = $calculatorService->div($a, $b);
                break;
            case "multiply" :
                $result = $calculatorService->multiply($a, $b);
                break;
            case "subtract" :
                $result = $calculatorService->subtract($a, $b);
                break;
        }
        $mathRepo = new MAthRepository();
        $operations = $mathRepo->findAll();
        include 'views/calculator_view.php';

    }

}