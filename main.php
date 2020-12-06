<?php 

$randomize_number = new RandomizeNumber();

//var_dump($randomize_number->sumTwoRandomNumbers());
//var_dump($randomize_number->sortRandomNumbers());
//var_dump($randomize_number->averageRandomNumbers());

$new_randomize_number = new  NewRandomizeNumber();
var_dump($new_randomize_number->sumTwoRandomNumbers());

class RandomizeNumber
{
    public $random_number = [];
    public $random_qty = 10;
    public $min_number = 1;
    public $max_number = 100;
    
    public function __construct(){
        for ($i = 1 ; $i <= $this->random_qty ; $i++) {
            array_push($this->random_number,rand($this->min_number, $this->max_number));
        }
    }


    public function sumTwoRandomNumbers(){
        return $this->random_number[rand(0,$this->random_qty - 1)] + $this->random_number[rand(0,$this->random_qty - 1)];  
    }

    public function sortRandomNumbers($arrangement = 'ASC'){

        $arrangement == 'ASC' ? sort($this->random_number) : rsort($this->random_number);
        return $this->random_number;

    }    

    public function averageRandomNumbers(){
        return intval(array_sum($this->random_number)/count($this->random_number));
    }
}

class NewRandomizeNumber extends RandomizeNumber 
{
    public function sumTwoRandomNumbers(){
        return $this->random_number[0] + $this->random_number[$this->random_qty - 1];  
    }
}