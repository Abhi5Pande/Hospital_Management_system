<?php
session_start();
require_once("library_of_functions.php");
$conn = get_connection_to_db();
if (!$conn)
{
    header("Location:error.php?MSG=Connection Error");
}


?>