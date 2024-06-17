<?php
$password = "admin";
$salt = "ad2e053c563c20a803cf4698d95bf9d";

$res = password_hash($salt . $password, PASSWORD_BCRYPT);

echo $res;

?>