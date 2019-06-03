<?php
include 'conns.php';

$id_to_block = $_GET['id'];
$block_status = $_GET['status'];


if($block_status=='Active'){
    $block_status='Blocked';
}else{
    $block_status='Active';
}



$query = "UPDATE sme SET account_status='".$block_status."' WHERE id='".$id_to_block."'";

if($con){
    $update=mysqli_query($con, $query);

if($update){
    echo "succesfully blocked user";
}
else
{
    echo "not blocked user";
}

 header("Location: admin.php");
}





?>