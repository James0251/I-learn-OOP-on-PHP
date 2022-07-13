<?php

class Employee {

    public $name;                                           // свойство "Имя"
    public $age;                                            // свойство "Возраст"
    public $salary;                                         // свойство "Зарплата"

    // метод getName, будет возвращать имя работника
    public function getName() {
        return $this->name;
    }

    // метод getAge, который будет возвращать возраст работника
    public function getAge() {
        return $this->age;
    }

    // метод getSalary, который будет возвращать зарплату работника
    public function getSalary() {
        return $this->salary;
    }

    // метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так
    public function checkAge(): bool
    {
        if ($this->age > 18) {
            return true;
        }else{
            return false;
        }
    }

}