<?php
 
$host="localhost";
$username="root";
$pass="";
$db="covid-19";
$con=mysqli_connect($host,$username,$pass,$db);
if($con){
?>
<script>
alert("Do you want to proceed?");
</script>
<?php
}else{
?>
<script>
alert("not connected");
</script>
<?php
}
?>