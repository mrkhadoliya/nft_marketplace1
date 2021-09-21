<?php
include "header.php";
?>

<?php

include "config.php";

 
$Token_id=$_GET['Token_id'];
//  echo '<script> console.log($Token_id);</script>';


$sql="SELECT * FROM nft_detail WHERE Token_id=$Token_id AND trans_id!=0";
$result1 = $link->query($sql);
// echo '<script>echo $result1 </script>';
//print_r($result1);
if($result1)
{
    echo '<script> console.log("inserted");</script>';
}
else
{
    
echo '<script> console.log("not Try again");</script>';
}

?>


<style>
    .detail-page-here .container{
      max-width: 1024px;
    }


  </style>


                        <?php
                    
                                  while($row = mysqli_fetch_assoc($result1)) 
                                  {
                        ?>
<section class="detail-page-here mt-5 text-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-dark mb-4">Your NFT Created</h4>
            </div>
            <div class="col-md-6">
                <div class="detail-img"><img src="https://ramlogics.com/nft_marketplace1/<?php echo $row['Token_image']; ?>" style="width:100%" /></div>
            </div>
            
            <div class="col-md-6">
                <div class="above-detail">
                    <div class="detail-here">
                    <ul class="list-inline">
                        
                         <li>
                    
                            <div class="inner-detail">
                                <div class="d-flex justify-content-between">
                                    <div class="detail-1" style="width:40%;">
                                        <strong >NFT Id :</strong>
                                    </div>
                                    <div class="detail-2" style="width:60%;">
                                        <span style="word-break: break-all;"><?php echo $row['Token_id']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-bottom: 1px solid #4c4f52!important;">
                        </li>
                        <li>
                    
                            <div class="inner-detail">
                                <div class="d-flex justify-content-between">
                                    <div class="detail-1" style="width:40%;">
                                        <strong >NFT Name :</strong>
                                    </div>
                                    <div class="detail-2" style="width:60%;">
                                        
                                        <span style="word-break: break-all;"><?php echo $row['Token_name']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-bottom: 1px solid #4c4f52!important;">
                        </li>
              
                     
                        <!--<li>-->
                        <!--    <div class="inner-detail">-->
                        <!--        <div class="d-flex justify-content-between">-->
                        <!--            <div class="detail-1" style="width:40%;">-->
                        <!--                <strong >NFT Symbol :</strong>-->
                        <!--            </div>-->
                        <!--            <div class="detail-2" style="width:60%;">-->
                                          
                        <!--                  <span style="word-break: break-all;"><?php echo $row['Token_symbol']; ?></span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <hr style="border-bottom: 1px solid #4c4f52!important;">-->
                        <!--</li>-->
                        
                        <li>
                            <div class="inner-detail">
                                <div class="d-flex justify-content-between">
                                    <div class="detail-1" style="width:40%;">
                                        <strong >NFT Price in USD :</strong>
                                    </div>
                                    <div class="detail-2" style="width:60%;">
                                         
                                         <span style="word-break: break-all;"><?php echo $row['Token_amount']; ?>USD</span>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-bottom: 1px solid #4c4f52!important;">
                        </li>
                        
                        <li>
                            <div class="inner-detail">
                                <div class="d-flex justify-content-between">
                                    <div class="detail-1" style="width:40%;">
                                        <strong >Transaction id :</strong>
                                    </div>
                                    <div class="detail-2" style="width:60%;">
                                        
                                       <a class="text-dark" href="https://nile.tronscan.org/#/transaction/<?php echo $row['trans_id']; ?>"> <span style="word-break: break-all;"><?php echo $row['trans_id']; ?></span></a>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-bottom: 1px solid #4c4f52!important;">
                        </li>
                        
                        <!--<li>-->
                        <!--    <div class="inner-detail">-->
                        <!--        <div class="d-flex justify-content-between">-->
                        <!--            <div class="detail-1" style="width:40%;">-->
                        <!--                <strong >Contract Address :</strong>-->
                        <!--            </div>-->
                        <!--            <div class="detail-2" style="width:60%;">-->
                                         
                        <!--                 <span style="word-break: break-all;"><?php echo $row['contract_address']; ?></span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <hr style="border-bottom: 1px solid #4c4f52!important;">-->
                        <!--</li>-->
                        
                        <li>
                            <div class="inner-detail">
                                <div class="d-flex justify-content-between">
                                    <div class="detail-1" style="width:100%;">
                                        <strong >NFT Description :</strong>
                                    </div>
                                    <!--<div class="detail-2" style="width:70%;">-->
                                    <!--    This is dummy NFT name-->
                                    <!--</div>-->
                                </div>
                                <div class="description">
                                 <?php echo $row['discription']; ?>
                                </div>
                            </div>
                            
                        </li>
                        
                     <?php   
                        }
                    ?>
                        
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>
