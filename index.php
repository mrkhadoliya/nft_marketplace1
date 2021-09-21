<?php
include "header.php";


include "config.php";

$sql="SELECT * FROM nft_detail where status=0 AND trans_id!='0' ORDER BY id DESC";
$result1 = $link->query($sql);



?>
<section class="banner-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 ">
                    <div class="nft-market">
                        <h1 class="">NFT Marketplace</h1>
                      <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        
                    </div>

                </div>
                <div class="col-md-6 mt-5 pt-5">
                    <div class="banner-img text-right"><img src="assets/img/right.png" style="width: 80%"></div>
                </div>
            
            </div>
        </div>
    </section>

    <section class="products-section">
        <div class="container">
            <div class="row">
                <?php
                while($row = mysqli_fetch_assoc($result1))
                {
                    
                
                
                ?>
                <div class="col-md-3">
                    <div class="this-product mt-4 text-center">
                        <div class="card" style="width: 100%;">
                          <!--<a href="https://ramlogics.com/Tron_nft/description.php?id=<?php echo $row['Token_id']; ?>"><img src="https://ramlogics.com/nft_marketplace1/<?php echo $row['Token_image']; ?>" ></a>-->
                          <img class="card-img-top1 px-3 pt-3" src="https://ramlogics.com/nft_marketplace1/<?php echo $row['Token_image']; ?>" style=""  alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $row['Token_name']?></h5>
                            <p class="card-text"><?php echo $row['discription']?></p>
                            <a href="https://ramlogics.com/nft_marketplace1/description.php?id=<?php echo $row['Token_id'];?>" class="btn btn-primary bg-color border-0">Learn more</a>
                          </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <!--<div class="col-md-3">-->
                <!--    <div class="this-product mt-4 text-center">-->
                <!--        <div class="card" style="width: 100%;">-->
                <!--          <img class="card-img-top1 px-3 pt-3" src="assets/img/eos03.jpg" style=""  alt="Card image cap">-->
                <!--          <div class="card-body">-->
                <!--            <h5 class="card-title">EOS</h5>-->
                <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--            <a href="#" class="btn btn-primary bg-color border-0">Learn more</a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="this-product mt-4 text-center">-->
                <!--        <div class="card" style="width: 100%;">-->
                <!--          <img class="card-img-top1 px-3 pt-3" src="assets/img/cardano02.png" style=""  alt="Card image cap">-->
                <!--          <div class="card-body">-->
                <!--            <h5 class="card-title">Cardeno</h5>-->
                <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--            <a href="#" class="btn btn-primary bg-color border-0">Learn more</a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="this-product mt-4 text-center">-->
                <!--        <div class="card" style="width: 100%;">-->
                <!--          <img class="card-img-top1 px-3 pt-3" src="assets/img/iota01.png" style=""  alt="Card image cap">-->
                <!--          <div class="card-body">-->
                <!--            <h5 class="card-title">IOTA</h5>-->
                <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--            <a href="#" class="btn btn-primary bg-color border-0">Learn more</a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="this-product mt-4 text-center">-->
                <!--        <div class="card" style="width: 100%;">-->
                <!--          <img class="card-img-top1 px-3 pt-3" src="assets/img/tron02.jpg" style=""  alt="Card image cap">-->
                <!--          <div class="card-body">-->
                <!--            <h5 class="card-title">TRON</h5>-->
                <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--            <a href="#" class="btn btn-primary bg-color border-0">Learn more</a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="this-product mt-4 text-center">-->
                <!--        <div class="card" style="width: 100%;">-->
                <!--            <img class="card-img-top1 px-3 pt-3" src="assets/img/nio01.jpg" style=""  alt="Card image cap">-->
                <!--          <div class="card-body">-->
                <!--            <h5 class="card-title">NEO</h5>-->
                <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--            <a href="#" class="btn btn-primary bg-color border-0">Learn more</a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="this-product mt-4 text-center">-->
                <!--        <div class="card" style="width: 100%;">-->
                <!--            <img class="card-img-top1 px-3 pt-3" src="assets/img/nem01.jpg" style=""  alt="Card image cap">-->
                            
                <!--          <div class="card-body">-->
                <!--            <h5 class="card-title">NEM</h5>-->
                <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--            <a href="#" class="btn btn-primary bg-color border-0">Learn more</a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="this-product mt-4 text-center">-->
                <!--        <div class="card" style="width: 100%;">-->
                <!--          <img class="card-img-top1 px-3 pt-3" src="assets/img/vechain01.jpg" style=""  alt="Card image cap">-->
                <!--          <div class="card-body">-->
                <!--            <h5 class="card-title">VeChain</h5>-->
                <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--            <a href="#" class="btn btn-primary bg-color border-0">Learn more</a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="this-product mt-4 text-center">-->
                <!--        <div class="card" style="width: 100%;">-->
                <!--          <img class="card-img-top1 px-3 pt-3" src="assets/img/ec.jpg" style=""  alt="Card image cap">-->
                <!--          <div class="card-body">-->
                <!--            <h5 class="card-title">Ethereum Classic</h5>-->
                <!--            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                <!--            <a href="#" class="btn btn-primary bg-color border-0">Learn more</a>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    



    
<?php
include "footer.php";
?>