<?php
include "header.php";
?>

<?php


include "config.php";

 


$sql="SELECT * FROM nft_detail where status=0  AND trans_id!=0 ORDER BY id DESC";
$result1 = $link->query($sql);

?>
  <style>
    .demo_here {
    margin-bottom: 30px;
}
section.image-box img {
    height: 230px;
    padding: 15px;
}
  </style>



<section class="pt-5 mt-4 image-box">
  <div class="container">
      <div class="row">
          <?php
                    
                                  while($row = mysqli_fetch_assoc($result1)) 
                                  {
                        ?>
    
        
      <div class="col-md-3">
        <a href="#">
          <div class="demo_here">
            <div class="card" style="">
            <a href="https://ramlogics.com/nft_marketplace1/description.php?id=<?php echo $row['Token_id']; ?>"><img src="https://ramlogics.com/nft_marketplace1/<?php echo $row['Token_image']; ?>" style="width: 100%;object-fit: contain;"></a>
            <div class="card-body">
              <h5 class="card-title text-center text-dark"><?php echo $row['Token_name']; ?></h5>
            </div>
          </div>
          </div>
        </a>
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
