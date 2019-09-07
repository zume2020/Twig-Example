<?php

require_once __DIR__.'/bootstrap.php';

// Sample data

$users = [
  [ 'user'          => 'zume' ],
  [ 'user'          => 'groot' ],
  [ 'user'          => 'Sam' ],
];
// Render our view
echo $twig->render('user.html.twig', ['users' => $users] );
