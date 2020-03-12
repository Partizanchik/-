<?php
class Person
{
    private $age;
    private $sex;

    public function __construct($age, $sex)
    {
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __destruct(){}

    public function showAge()
    {
        echo "Возраст: " . $this->age . "<br>";
    }

    public function showSex()
    {
        echo "Пол: " . $this->sex . "<br>";
    }

    public function printObj(){}
}
