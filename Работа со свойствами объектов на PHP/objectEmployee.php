<?php

require_once "../Классы/Employee.php";

// Создаём объект класса Employee, с именем 'john', возрастом 25, зарплатой 1000
$emp = new Employee();
$emp->name = 'john';
$emp->age = 25;
$emp->salary = 1000;

// Создаём второй объект класса Employee, с именем 'eric', возрастом 26, зарплатой 2000
$emp2 = new Employee();
$emp2->name = 'eric';
$emp2->age = 26;
$emp2->salary = 2000;

// Выведем сумму зарплат
$salarySum = $emp->salary + $emp2->salary;
echo $salarySum;
