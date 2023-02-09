<?php 
date_default_timezone_set("Asia/Calcutta");
class db
{
    public $con;
	function db_connect()
	{

    $hostname="localhost";
	$username="root";
	$password="";

    $this->con=mysqli_connect($hostname,$username,$password) or die(mysqli_connect_errno());

    return $this->con;

    }

    //var $vedcon=dbconnect();
    function db_select()
    {

    $database="cinema_booking";

    $con1=mysqli_select_db($this->con,$database) or die(mysqli_connect_errno());

    return $con1;

    }

        function db_close()
    {

    mysqli_close($this->con);

    }
}

?>