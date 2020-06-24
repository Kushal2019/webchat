<?php
include('connect.php');
if(isset($_POST['send']))
{
$email=$_POST['add'];
$sql="select * from user_detalis where email='$email'";
if($d=mysqli_fetch_array(mysqli_query($con,$sql)))
{
	echo "2";
//Account details
	//echo $d[2];

ob_start();
$apiKey = urlencode('zOGVFtsV3I0-ssMOxijLKbuyxhmxK3NexLV63pNoM0');
// Message details
$numbers = $d[2];
$sender = urlencode('TXTLCL');
$message = rawurlencode('This is your Message password your='.$d['password']);
 
//$message = $d[4];

$numbers = implode(',', $numbers);
 
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
ob_clean();
echo $response;
}
else
{
	header('location:password.php?msg=1');
}
}
?>
