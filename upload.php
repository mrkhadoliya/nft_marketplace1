// <?php
// //  alert('this is save.php');

// include "config.php";

// $Address=$_POST['address'];



// $sql= "UPDATE nft_deatil SET `contract_address`='$Address'";
// $result1 = $link->query($sql);

//  if ($result1) {
//           echo '<script> echo "Succesfully inserted" </script>';
          
//         } else {
//             echo$Address;
//           echo "Error: " . $sql1 . "<br>" . $conn->error;
//         }
// ?>

<?php
//  alert('this is save.php');

include "config.php";

$Address=$_POST['address'];



// $update="ALTER TABLE nft_info ALTER `contract_address` DROP DEFAULT";
// $res=$link->query($update);

// if($res)
// {
//      echo '<script> echo "Succesfully inserted" </script>';
// }
// else
// {
//     echo"try again";
//}

$sql= "ALTER TABLE nft_detail ALTER `contract_address` SET DEFAULT '$Address'";
$result1 = $link->query($sql);


 if ($result1) {
          echo  "Succesfully inserted";
          echo $Address;
          
        } else {
            echo "$Address";
          echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
?>