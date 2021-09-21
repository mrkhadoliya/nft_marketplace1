<?php
//  alert('this is save.php');

include "config.php";

$Address=$_POST['address'];



$sql= "UPDATE nft_detail SET `Owner_address`='$Address'";
$result1 = $link->query($sql);

 if ($result1) {
          echo '<script> echo "Succesfully inserted" </script>';
          
        } else {
            echo$Address;
          echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
?>