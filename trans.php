<?php
//  alert('this is save.php');

include "config.php";

$Address=$_POST['address'];
$id=$_POST['id'];



$sql= "UPDATE nft_detail SET `trans_id`='$Address' WHERE Token_id=$id";
$result1 = $link->query($sql);

 if ($result1) {
     echo $Address;
          echo '<script> echo "Succesfully inserted" </script>';
          
        } else {
            echo$Address;
          echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
?>