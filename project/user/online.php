<?php
include('../connect.php');
$id=$_POST['id'];
$cd=$_POST['cd'];
$sql="select * from user_detalis,login_detais where login_detais.username=(select email user_detalis where user_detalis.id='$id')";
if(mysqli_fetch_array(mysqli_query($con,$sql)))
{
$d=mysqli_fetch_array(mysqli_query($con,$sql));
if($d['activelog']=='online')
{
	echo "1";
}
else
{
	$date=substr($d['lasttime'],0,9);
	$time=substr($d['lasttime'],10,20);
	//echo "$date"."$cd";
	//echo $time;
	$date1=date_create($cd);
	$date2=date_create($date);

	$diff=date_diff($date1,$date2);
	//echo $diff->format("%a");
	 if($diff->format("%a")==0)
	 {
	 	echo "last seen today ".$time;
	 }
	 else if($diff->format("%a")==1)
	 {
	 	echo "yesterday ".$time;	
	 }
	 else if($diff->format("%a")<8)
	 {
	 	
	 	  $newDate = date("Y/m/d", strtotime($date)); 
	 	   $newDate = date("D", strtotime($date)); 
	 	 echo $newDate.$time;
	 	
	 }
	 else
	 {
	 	echo $date.$time;
	 }

}
}
else
{
	echo "2";
}
//$nameOfDay = date('D', strtotime($date));
?>

