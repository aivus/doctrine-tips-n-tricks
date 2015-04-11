<?php

require_once '../../app/bootstrap.php';

// Only employee have "test" field
$employee = new EmployeeSingleTable();
$employee->setTest('test text');
$entityManager->persist($employee);

$person = new PersonSingleTable();
$entityManager->persist($person);

$entityManager->flush();
