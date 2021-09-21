<?php
//  alert('this is save.php');

include "config.php";
//echo "<script>console.log($Token_id 'hwello')</script>";

$Address=$_POST['Address'];
$Name=$_POST['Name'];

$sql= "SELECT * FROM nft_detail where NFT_owner_add='$Address' AND trans_id!='0' AND status=0";
$result1 = $link->query($sql);
$newArray = array();
 while($row = mysqli_fetch_assoc($result1)) 
                                  {
            array_push($newArray ,$row);
            // array_push($newArray,$row['Token_name']);
            // array_push($newArray,$row['Token_id']);
}
// while($row = mysqli_fetch_assoc($result1)) 
//                                   {
//             array_push($newArray ,$row['Token_name']);
            
        
// }
// while($row = mysqli_fetch_assoc($result1)) 
//                                   { 
            
//             array_push($newArray,$row['Token_id']);
// }

echo json_encode($newArray);
        
?>