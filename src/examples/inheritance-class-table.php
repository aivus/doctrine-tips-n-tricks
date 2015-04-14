<?php

require_once '../../app/bootstrap.php';

// Only employee has "test" field
$employee = new EmployeeJoined();
$employee->setTest('test text');
$employee->setName('employee name');
$entityManager->persist($employee);

$person = new PersonJoined();
$person->setName('person name');
$entityManager->persist($person);

$entityManager->flush();
