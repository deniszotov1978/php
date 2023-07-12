<?php

class Person
{
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }

    function sayHi($name)
    {
        return "Hi, $name, I`m " . $this->name;
    }
    function setHp($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastName()
    {
        return $this->lastname;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo()
    {
        return "<h3>Несколько слов о моих родственниках: </h3><br>" .
            "Моё имя: " . $this->getName() .
            "<br>Моя фамилия: " . $this->getLastname() .
            "<br> Имя моего папы: " . $this->getFather()->getName() . " " .$this->getFather()->getLastName() .
            "<br> Имя моей мамы: " . $this->getMother()->getName() . " " .$this->getMother()->getLastName() .
            "<br> Моего деда по отцовской линии зовут: " . $this->getFather()->getFather()->getName() .
            "<br> Мою бабушку по отцу зовут: " . $this->getFather()->getMother()->getName() .
            "<br> Моего деда по материнской линии зовут: " . $this->getMother()->getFather()->getName() .
            "<br> Мою бабушку по материнской линии зовут: " . $this->getMother()->getMother()->getName();
    }
}
$petr = new Person("Пётр", "Петров", 74);
$agafya = new Person("Агафья", "Петрова", 73);
$alexandr = new Person("Александр", "Иванов", 68);
$nadezhda = new Person("Надежда", "Иванова", 64);
$dmitry = new Person("Дмитрий", "Петров", 45, $agafya, $petr);
$marfa = new Person("Марфа", "Иванова", 40, $nadezhda, $alexandr);
$evgeny = new Person("Евгений", "Петров", 19, $marfa, $dmitry);

echo $evgeny->getInfo();
