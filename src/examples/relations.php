<?php

require_once '../../app/bootstrap.php';

$user = new User();
$profile = new Profile();

$user->setLogin('admin');
$user->setPassword(md5('admin'));

$profile->setAbout('Admin is a superuser');
$profile->setInterests('My interests is ...');

$user->setProfile($profile);

$entityManager->persist($user);
//$entityManager->persist($profile);
$entityManager->flush();

// Profile entity has null in "user_id" column