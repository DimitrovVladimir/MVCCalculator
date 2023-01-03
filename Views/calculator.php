<?php

use Controllers\CalculatorController;

spl_autoload_register();

$calculatorController = new CalculatorController();
$calculatorController -> index();
