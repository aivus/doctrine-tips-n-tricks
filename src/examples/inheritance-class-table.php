<?php

require_once '../../app/bootstrap.php';

// Only employee have "test" field
$employee = new EmployeeJoined();
$employee->setTest('test text');
$entityManager->persist($employee);

$person = new PersonJoined();
$entityManager->persist($person);

$entityManager->flush();
