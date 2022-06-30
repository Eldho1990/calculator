<?php

require_once('../classes/CalculatorController.php');

$firstOperand     =    $_POST["first_operand"];
$secondOperand    =    $_POST["second_operand"];
$operator         =    $_POST["operator"];

$calc   =    new CalculatorController($firstOperand, $secondOperand, $operator);
$calc->calculate();

?>