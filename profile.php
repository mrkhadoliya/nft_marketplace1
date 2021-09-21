<?php
include "header.php";
?>

<?php
include "config.php";
$name=$_GET['name'];


$sql="SELECT * FROM nft_detail WHERE (Owner ='$name' AND status=0) AND trans_id!=0";

 $result1 = $link->query($sql);


    
?>

  <style>
    .artist_page .container {
        max-width: 1480px;
    }
    button.btn.btn-primary.bell-icon-here1 {
    position: relative;
    background-color: #272a2d!important;
    border-radius: 4px!important;
    height: 40px;
    width: 40px;
}
.modal-body {
    background-color: #343a40;
}
.modal-header {
    background-color: #343a40;
    border-bottom: unset;
}
.modal-footer {
    background-color: #343a40;
    border-top: unset;
}
button.close {
    background-color: transparent!important;
    color: #fff!important;
}
.user-id-name {
    color: #000;
}
  </style>
  


                          
<section class="artist_page text-dark mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-dark mb-4"> Featured Artists </h4>
            </div>
        </div>
    </div>
     <?php
                    
                                  while($row = mysqli_fetch_assoc($result1)) 
                                  {
                        ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" artist-detail-here">
                    <div class="row">
                         <div class="col-md-6"><div class="left-artist"><h5><strong>Artist Name :</strong> <span><?php echo $row['Owner']; ?></span></h5></div></div>
                        <div class="col-md-6"><div class="right-artist"><h5><strong>Tron Address :</strong> <a href="#" class="text-dark"><span style="word-break: break-all;" ><?php echo $row['NFT_owner_add']; ?></span></a></h5></div></div>
                    </div>
                </div>
            </div>
 <?php
                                break;  }

            


                      $sql="SELECT * FROM nft_detail WHERE Owner ='$name' AND status=0";

                        $result2 = $link->query($sql);

                                  while($row1 = mysqli_fetch_assoc($result2)) 
                                  {
                        ?>
                <div class="col-md-3 mt-4">
                <div class="Portfolio">
                  <a href="#!">
                    <div class="demo_here">
                    <div class="card" style="">
                    <a href="https://ramlogics.com/nft_marketplace1/description.php?id=<?php echo $row1['Token_id'];?>"><img class="card-img-top" src="<?php echo $row1['Token_image']; ?>" alt="Card image cap"></a>
                    <div class="card-body">
                      <div class="user-id-name">
                          <div class="row">
                            <div class="col">
                              <p><strong>Name :</strong></p>
                              <p><strong>Id :</strong></p>
                            </div>
                            <div class="col-auto">
                              <p class="text-right"><?php echo $row1['Token_name']; ?></p>
                              <p class="text-right"><?php echo $row1['Token_id']; ?></p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  </div>
                  </a>
                </div>
            </div>
     <?php
                                  }
            ?>
            
           
        </div>
    </div>

</section>

    
<?php
include "footer.php";
?>