<?php
////test
//class Fibon{
//    private $index;
//    private $fibinach;
//
//    public function __construct(int $index, int $fibinach )
//    {
//        $this->index=$index;
//        $this->fibinach=$fibinach;
//    }
//
//    public function setFibon($index, $fibinach){
//        $this->index=$index;
//        $this->fibinach=$fibinach;
//    }
//    public function getFibon(){
//        $this->index;
//        $this->fibinach;
//    }
//
//}
////$fib =new Fibon(1,1);
function $fibonacci($one, $two){
$one = 0;
$two = 1;

for ($i = 1; $i <= 9; $i++) {
    $current = $one + $two;

    $one = $two;
    $two = $current;

    echo $current . '<br>';
    return $fibonacci();
}}
$fibonacci()
