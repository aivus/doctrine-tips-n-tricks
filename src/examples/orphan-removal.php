<?php
require_once '../../app/bootstrap.php';

$post1 = new Post();
$post1->setTitle('post1');
$post1->setContent('post1 content');
$entityManager->persist($post1);

$post2 = new Post();
$post2->setTitle('post2');
$post2->setContent('post2 content');
$entityManager->persist($post2);

$category = new Category();
$category->setTitle('Category title');

$category->addPost($post1);
$category->addPost($post2);
$entityManager->persist($category);
$entityManager->flush();

// Trying to remove one post from category
$category->removePost($post1);
$entityManager->flush();

// Uncomment "orphanRemoval" in Category.dcm.yml to remove post