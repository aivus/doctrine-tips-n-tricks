<?php

require_once '../../app/bootstrap.php';

// Only employee has "test" field
$employee = new EmployeeJoined();
$employee->setTest('test text');
$entityManager->persist($employee);

$person = new PersonJoined();
$entityManager->persist($person);

$entityManager->flush();
