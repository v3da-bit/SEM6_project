<!DOCTYPE html>
<html>
<body>
<h1>HTML DOM Events</h1>
<h2>The onclick Event</h2>

<p>The onclick event triggers a function when an element is clicked on.</p>
<p>Click to trigger a function that will output "Hello World":</p>

<button onclick="myFunction()">Click me</button>

<p id="demo"></p>
<form method="$_REQUEST" action="">
<input type="password" name="pass1"/>
<input type="password" name="pass2" />
<button name="submit">submit</button>
</form>
<?php
if (isset($_REQUEST['submit'])) {
    # code...
$p1=$_REQUEST['pass1'];
$p2=$_REQUEST['pass2'];
#echo "$p1"."$p2";
if($p1==$p2){
    echo "<script>alert('op bro')</script>";
}else{
    echo "<script>alert('not correct')</script>";
}

}
?>

</body>
</html>
