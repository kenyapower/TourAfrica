<?php
return [
    'host'      => 'localhost',
    'database'  => 'tours',
    'username'  => 'root',
    'password'  => '',
    'port'      =>  '3307'
];

// Create connection
$conn = new mysqli($details['host'], $details['database'], $details['username'], $details['password']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
    echo "Connected successfully";
}
