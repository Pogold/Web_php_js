<?php
if(count($_POST)>0)
{    
include 'conn.php';
$msg_name = $_POST['msg_name'];
$msg_date= $_POST['msg_date'];
$msg_text = $_POST['msg_text'];

$query = "INSERT INTO mesages (msg_name,msg_date,msg_text)
VALUES ('$msg_name','$msg_date','$msg_text')";
$res = mysqli_query($dbCon, $query);

if($res) {
echo json_encode($res);
} else {
echo "Error: " . $sql . "" . mysqli_error($dbCon);
}

}
?>