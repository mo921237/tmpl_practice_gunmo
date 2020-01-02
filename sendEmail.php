<?php

$msgSubmitted     = $_POST['msg'];

try{
    if (isset($msgSubmitted)) {
        $name	= $_POST['name'];
        $email  = $_POST['email'];
	$msg	= $_POST['msg'];

	$to = "admin@stillknow.com";
	$subject = "Contacts from ".$name." through stillknow.com";
	$headers = "From: ". $email  . "\r\n" .
	"CC: somebodyelse@example.com";

	echo mail($to,$subject,$msg,$headers);
	
	echo $name.$email.$msg;
	echo '00';
    } else {
	echo '99';
    }
} catch (Exception $e){
	echo $e->getMessage();
}
?>
