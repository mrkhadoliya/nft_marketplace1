<?php
//  alert('this is save.php');

include "config.php";
//echo "<script>console.log($Token_id 'hwello')</script>";

$Amount=$_POST['amount'];
$Name=$_POST['name'];
$ID=$_POST['id'];
$resell=$_POST['resell'];
$trans=$_POST['trans'];
$add=$_POST['address'];

echo $add;

 $sql= "UPDATE nft_detail SET `Owner`='$Name',`NFT_owner_add`='$add',`Token_amount`='$Amount',`resell`='$resell',`trans_id`='$trans' WHERE `Token_id`=$ID";
$result1 = $link->query($sql);

if($result1)
{
   echo"success"; 
  
}
else
{ 
}
?>