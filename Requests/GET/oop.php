<?php

class Calculator {

    public $value1;

    public $value2;

    public $operator;

    public $result;

    /**
     * Calculator constructor.
     * @param $value1
     * @param $value2
     * @param $operator
     * @param $result
     */
    public function __construct($value1, $value2, $operator)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
        $this->operator = $operator;

    }


    public function Calculate () {

                switch ($this->operator) {
                    case "+":
                        $this->result = $this->value1 + $this->value2;
                        break;
                    case "-":
                        $this->result = $this->value1 - $this->value2;
                        break;
                    case "*":
                        $this->result = $this->value1 * $this->value2;
                        break;
                    case "/":
                        if ($this->value2 == 0) {
                            $this->result="Нельзя делить на 0";
                        } else {
                            $this->result = $this->value1 / $this->value2;

                        }
                        break;

                    case "%":
                        $this->result= $this->value1 % $this->value2;
                        break;
                }
    }

    public function getResult () {

        return $this->result;
    }
}





?>