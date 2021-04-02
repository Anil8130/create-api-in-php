<?php
$con=mysqli_connect('localhost','root','','anilphp');
//mysqli_select_db('anilphp');
$query = mysqli_query($con,"Select * from login");
if($query)
{
    $records =[];
    while($record = mysqli_fetch_assoc($query)){
        $records[]=$record;
    }
}
echo json_encode($records);
die;
 ?>
