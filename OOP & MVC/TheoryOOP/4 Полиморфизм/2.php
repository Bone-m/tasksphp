<?php
class A
{
    public function method1()
    {
        return $this->method2();
    }

    protected function method2()
    {
        return 'A';
    }
}

class B extends A
{
    protected function method2()
    {
        return 'B';
    }
}
// Почему выведет А или Б разобрать.
$b = new B();

echo $b->method1();