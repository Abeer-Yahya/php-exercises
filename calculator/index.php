<?php
class Calculator {
    protected $num1;
    protected $num2;

    public function __construct($num1,$num2)
    {
      $this->num1 = $num1;
      $this->num2 = $num2;
    }
    public function add()
    {
      return $this->num1+$this->num2;
    }
    public function subtract()
    {
      return $this->num1-$this->num2;
    }
    public function multiply()
    {
      return $this->num1*$this->num2;
    }
    public function divide()
    {
      return $this->num1/$this->num2;
    }
  }

  $number = new  Calculator(12 , 6);
  echo $number->add();
  echo "<br>"
  ?>