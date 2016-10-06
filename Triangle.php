<?php
class triangle {

    private $a_side;
    private $b_side;
    private $c_side;

    public function __construct($a, $b, $c)
    {
        $this->a_side = $a;
        $this->b_side = $b;
        $this->c_side = $c;
    }

    public function runTriangle()
    {
        $a = $this->a_side;
        $b = $this->b_side;
        $c = $this->c_side;
        $path = array();
        array_push($path, '1');

        if (($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)){
            $isATriangle = true;
        }else{
            $isATriangle = false;
        }

        if ($isATriangle == true){

            if (($a == $b) && ($b == $c)){
                $answer = 'Equilateral';
            }else{

                if (($a != $b) && ($a != $c) && ($b != $c)){
                    $answer = 'Scalene';
                }else{
                    $answer = 'Isosceles';
                }
            }

        }else{
            $answer = 'Not a triangle';
        }

        return array(
            'path' => $path,
            'answer'=> $answer,
        );
    }
}


