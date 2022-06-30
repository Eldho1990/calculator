<?php

// Class for calutions
class CalculatorController
{

    private $firstOperand;
    private $secondOperand;
    private $operator;

    public function __construct($firstOperand , $secondOperand , $operator)
    {

        $this->firstOperand     =    $this->input($firstOperand);
        $this->secondOperand    =    $this->input($secondOperand);
        $this->operator         =    $this->input($operator);

    }

    // function for calculation
    public function calculate()
    {

        if(!is_numeric($this->firstOperand) && !is_numeric($this->secondOperand)){
            return null;
        }

        switch($this->operator)
        {

            case "add": 

                $result    =    $this->firstOperand + $this->secondOperand;
                echo $result;
                break;

            case "sub":

                $result    =    $this->firstOperand - $this->secondOperand;
                echo $result;
                break;

            case "mult":

                $result    =    $this->firstOperand * $this->secondOperand;
                echo $result;
                break;

            case "div":

                $result    =    $this->firstOperand / $this->secondOperand;
                echo $result;
                break;

            default:
                
                echo "Invalid Operator";

        }

    }

    // function for sanitize inputs
    public function input($input)
    {

        $input    =    htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        return $input;

    }

}

?>