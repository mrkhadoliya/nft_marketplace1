<?php
//echo print_r($_POST); die(); exit();

//echo'hiiiiiiiii';
include 'config.php';
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
//$path = '/home/ramlogicstech/public_html/Tron_nft/uploads/'; // upload directory
$path = 'uploads/';
//echo $path;
//$path = '/public_html/Tron_nft/uploads/';
//$path = 'https://ramlogics.com/public_html/Tron_nft/uploads';

//https://ramlogics.com/Tron_nft/uploads/735218screenshot 2021-03-11 175017.png


    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    echo"$ext";
    // can upload same image using rand function
    
    // check's valid format
    
    if(in_array($ext, $valid_extensions)){ 
        $path = $path.strtolower($img); 
        if(move_uploaded_file($tmp,$path)){
            //echo "hiiiii, <img src='$path' />";
                
            $name = $_POST['name'];
            // $symbol =$_POST['symbol'];
            // $price =$_POST['price'];
            $description =$_POST['description'];
            $demoTId =$_POST['demoTId'];
            $demoOwnerName =$_POST['demoOwnerName'];
            $demoTransId ="0";
            $demoTAmount =$_POST['demoTAmount'];
            // $demoContratAdd =$_POST['democontract'];
            $resell =$_POST['resell'];
            $demoadrs =$_POST['demoadrs'];
                    $demOwner =$_POST['demOwner'];

            $timestamp = time();
            echo($timestamp);
            $sql = "INSERT INTO nft_detail (resell,Owner_address,Token_id, Owner,artist,NFT_owner_add, Token_name, Token_image, Token_amount, trans_id,discription)VALUES ('$resell','$demOwner','$demoTId', '$demoOwnerName','$demoOwnerName','$demoadrs', '$name', '$path', '$demoTAmount', '$demoTransId','$description')";
            //echo $sql;
            // $link->query($sql);
            echo $path;
            $data = mysqli_query($link,$sql);
            //echo $insert?'ok':'err';
        }else{
            echo "image not upload";
        }
    } 
    else{
        echo 'invalid';
    }

?>