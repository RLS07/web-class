<?php

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <chadiman89@gmail.com>' . "\r\n";
$headers .= 'Cc: chadiman98@gmail.com' . "\r\n";


if (mail("lalpower77@gmail.com","Hi from local host","Hello <b>Rojan</b>, You are getting this from local host. Pls dont reply.",$headers)){
    echo"Email sent";
}else{
    echo"Unable to send the MAIL.";
}
?>