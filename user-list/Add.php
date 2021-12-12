<?php
session_start();
if(isset($_POST['adduser'])){
    $xml=new DOMDocument("1.0","UTF-8");

    $root = simplexml_load_file('../soen287/database.xml') or die("faild to load");
    $user = $root->addChild('user');
    $user->addChild('username', $_POST['username']);
    $user->addChild('password', $_POST['password']);
    $user->addChild('isAdmin', $_POST['isAdmin']);
    $user->addChild('fName', $_POST['fName']);
    $user->addChild('lName', $_POST['lName']);
    $user->addChild('postalCode', $_POST['postalCode']);
    $user->addChild('email', $_POST['email']);
    file_put_contents('../soen287/database.xml', $root->asXML());
   // $xml->save("database.xml");
    $_SESSION['message'] = 'New user added successfully';
    header('location: UserPage.php');
} else {
    $_SESSION['message'] = 'Please fill the form';
    header('location: addnew.php');
}
?>
