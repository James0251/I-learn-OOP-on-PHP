<?php

require_once "../Классы/Employee.php";

// Создаём обьект класса Employee, записываем значения для его свойств
$newEmp = new Employee();
$newEmp->name = 'john';
$newEmp->age = 17;
$newEmp->salary = 1000;

// Создаём второй обьект класса Employee, записываем значения для его свойств
$newEmp2 = new Employee();
$newEmp2->name = 'eric';
$newEmp2->age = 26;
$newEmp2->salary = 2000;


// С помощью метода getSalary найдите сумму зарплат созданных работников
$salarySum = $newEmp->getSalary() + $newEmp2->getSalary();
echo $salarySum;


//var_dump($newEmp->checkAge());                                                        // its work