<?php
$connection = new mysqli("localhost","root","","Employee");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}
