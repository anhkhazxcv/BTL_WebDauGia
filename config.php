<?php

$conn = mysqli_connect("localhost", "root", "", "webdaugia");
if(!$conn)
{
	die("Connection Failed: ".mysqli_connect_error());
}
