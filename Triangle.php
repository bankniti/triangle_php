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
        $path = array();
        array_push($path, '1');
        $a = $this->a_side;
        $b = $this->b_side;
        $c = $this->c_side;

        array_push($path, '2');
        if (is_numeric($a) && is_numeric($b) && is_numeric($c)){

            array_push($path, '3');
            if (($a >= 1 && $a <= 200) && ($b >= 1 && $b <= 200) && ($c >= 1 && $c <= 200)){

                array_push($path, '4');
                if (($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)){

                    array_push($path, '5');
                    if (($a == $b) && ($b == $c)){

                        array_push($path, '6');
                        $answer = 'Equilateral';
                    }else{

                        array_push($path, '7');
                        if (($a != $b) && ($a != $c) && ($b != $c)){

                            array_push($path, '8');
                            $answer = 'Scalene';
                        }else{

                            array_push($path, '9');
                            $answer = 'Isosceles';
                        }
                        array_push($path, '10');
                    }
                    array_push($path, '11');

                }else{
                    array_push($path, '12');
                    $answer = 'Not a triangle';
                }
                array_push($path, '13');

            }else{

                array_push($path, '14');
                $answer = 'Input is out of range';
            }
            array_push($path, '15');

        }else{
            array_push($path, '16');
            $answer = 'Input is not an integer';
        }
        array_push($path, '17');

        array_push($path, '18');
        return array(
            'path' => $path,
            'answer'=> $answer,
        );
    }
}
