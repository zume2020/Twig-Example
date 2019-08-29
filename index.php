<?php

require_once __DIR__.'/bootstrap.php';

// Sample data
$foo = [
  [ 'name'          => 'Alice' ],
  [ 'name'          => 'Bob' ],
  [ 'name'          => 'Eve' ],
];

$users = [
  [ 'user'          => 'zume' ],
  [ 'user'          => 'groot' ],
  [ 'user'          => 'Sam' ],
];
// Render our view
echo $twig->render('user.html.twig', ['users' => $users] );
