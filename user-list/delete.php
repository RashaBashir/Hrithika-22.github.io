<?php
session_start();
$username = $_GET['delete'];

$root= simplexml_load_file('../soen287/database.xml');

//we're are going to create iterator to assign to each user
$index = 0;
$i = 0;

foreach($root->user as $user){
    if($user->username == $username){
        $index = $i;
        break;
    }
    $i++;
}

unset($root->user[$index]);
file_put_contents('../soen287/database.xml', $root->asXML());

$_SESSION['message'] = 'User deleted successfully';
header('location: UserPage.php');

?>