<?php
$xml = new DOMDocument('1.0');
$xml->formatOutput=true;
$root=$xml->createElement("root");
$xml->appendChild($root);

$user=$xml->createElement("user");
//$user->setAttribute();
$root->appendChild($user);
$username =$xml-> createElement("username","AhmadBa");
$user->appendChild($username );
$password=$xml->createElement("password","@RxkawRRsss");
$user->appendChild($password);
$isAdmin=$xml->createElement("isAdmin","false");
$user->appendChild($isAdmin);
$fName=$xml->createElement("fName","Ahamd");
$user->appendChild($fName);
$lName=$xml->createElement("lName","Bashir");
$user->appendChild($lName);
$postalCode=$xml->createElement("postalCode","J4k 4Z2");
$user->appendChild($postalCode);

$email=$xml->createElement("email","ahmadbashir@gmail.com");
$user->appendChild($email);


$user=$xml->createElement("user");
//$user->setAttribute();
$root->appendChild($user);
$username =$xml-> createElement("username","Caro_carcar");
$user->appendChild($username );
$password=$xml->createElement("password","@#RRRsss");
$user->appendChild($password);
$isAdmin=$xml->createElement("isAdmin","false");
$user->appendChild($isAdmin);
$fName=$xml->createElement("fName","Caroline");
$user->appendChild($fName);
$lName=$xml->createElement("lName","Dion");
$user->appendChild($lName);
$postalCode=$xml->createElement("postalCode","H5R 4G1");
$user->appendChild($postalCode);
$email=$xml->createElement("email","carodion@hotmail.com");
$user->appendChild($email);



$user=$xml->createElement("user");
//$user->setAttribute();
$root->appendChild($user);
$username =$xml-> createElement("username","Rasha_bashir");
$user->appendChild($username );
$email=$xml->createElement("password","rlkdWm");
$user->appendChild($password);

$isAdmin=$xml->createElement("isAdmin","ture");
$user->appendChild($isAdmin);
$fName=$xml->createElement("fName","Rasha");
$user->appendChild($fName);
$lName=$xml->createElement("lName","Bashir");
$user->appendChild($lName);
$postalCode=$xml->createElement("postalCode","J7Y Z3A");
$user->appendChild($postalCode);
$email=$xml->createElement("email","rashabashir2@gmail.com");
$user->appendChild($email);


$user=$xml->createElement("user");
//$user->setAttribute();
$root->appendChild($user);
$username =$xml-> createElement("username","Nada12");
$user->appendChild($username );
$password=$xml->createElement("password","@#AmjRRRsfs");
$user->appendChild($password);
$isAdmin=$xml->createElement("isAdmin","false");
$user->appendChild($isAdmin);
$fName=$xml->createElement("fName","Nada");
$user->appendChild($fName);
$lName=$xml->createElement("lName","Basha");
$user->appendChild($lName);
$postalCode=$xml->createElement("postalCode","H5R 4W1");
$user->appendChild($postalCode);
$email=$xml->createElement("email","nadobasha@hotmail.com");
$user->appendChild($email);



$user=$xml->createElement("user");
//$user->setAttribute();
$root->appendChild($user);
$username =$xml-> createElement("username","jacko");
$user->appendChild($username );
$password=$xml->createElement("password","@oceanIsmyHome");
$user->appendChild($password);
$isAdmin=$xml->createElement("isAdmin","false");
$user->appendChild($isAdmin);
$fName=$xml->createElement("fName","Jack ");
$user->appendChild($fName);
$lName=$xml->createElement("lName","Sparrow");
$user->appendChild($lName);
$postalCode=$xml->createElement("postalCode","J4R 4T2");
$user->appendChild($postalCode);
$email=$xml->createElement("email","jacktheocean@gmail.com");
$user->appendChild($email);

echo  "<xmp>".$xml->saveXML().'</Xmp>';
$xml->save("../soen287/database.xml");

?>