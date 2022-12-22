<?php 
date_default_timezone_set("Asia/Calcutta");
class db
{
	function db_connect()
	{

    $hostname="localhost";
	$username="root";
	$password="";

    $con = mysqli_connect($hostname,$username,$password) or die("db not connected"); 
    $ved="hello";

    return $ved;

    }

    function db_select()
    {
        

    $database="cinema_booking";

    $con1=mysqli_select_db(,$database) or die("db not connected");

    return $con1;

    }

    function db_close()
    {

    mysqli_close($con);

    }
}

?>