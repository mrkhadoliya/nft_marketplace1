<?php
include "header.php";
?>
<?php

include "config.php";

 //$_GET['id'];
$Token_id=$_GET['id'];


$sql="SELECT * FROM nft_detail WHERE Token_id=$Token_id AND status=0 AND trans_id!='0'";
$result1 = $link->query($sql);


?>

  <style>
    .description_page .container{
      max-width: 1024px;
    }


.border-bottom {
    border-bottom: 1px solid #4c4f52!important;
}
@media(max-width:767px){
  .share_setting{
    padding:0!important;
}  
}

  </style>


                          <?php
                    
                                  while($row = mysqli_fetch_assoc($result1)) 
                                  {
                        ?>
                         <script>
                                function demoDisplay1() {
                                        let counter = <?php echo $row['resell']; ?>;
                                        
                                      document.getElementById("enteramount").style.display = "block";
                                      document.getElementById("resell").style.display = "none";
                                    }
                                </script>
<section class="description_page ">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5">
        <div class="left-description" style="text-align: center;">
            <img src="https://ramlogics.com/nft_marketplace1/<?php echo $row['Token_image']; ?>"  style="width:100%">
            <div class="mt-3">
                <?php if($row['resell']!=-1){
                    echo '<button  type="button" class="btn btn-outline-primary px-5" style="color:#fff!important;" id="hideBuyNow" data-toggle="modal" data-target="#myModal6">Buy now</button>';
                    
                }
                                  ?>
                <!-- The Modal -->
                      <div class="modal fade" id="myModal6">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content" style="background-color: #fff;color: #000;">
                          
                            <!-- Modal Header -->
                            <div class="modal-header ">
                              <!--<h4 class="modal-title text-center">Do You want to resell ?</h4>-->
                              <span type="button" style="color:#000;" class="close" data-dismiss="modal">&times;</span>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body text-center">
                                
                              
                               <div class="text-center" id="resell">
                                   <h4 class="modal-title text-center mb-4">Do you want to resell ?</h4>
                                   <a class="d-inline text-center" href="#"><button type="button" class="btn btn-secondary px-5" style="color:#fff!important" id="yes" onclick="demoDisplay()">Yes</button></a>
                                   <script>
                                function demoDisplay() {
                                      document.getElementById("enteramount").style.display = "block";
                                      document.getElementById("resell").style.display = "none";
                                    }
                                </script>
                                   <a class="d-inline text-center" href="#"><button type="button" class="btn btn-secondary px-5" style="color:#fff!important" onclick="myFunction()" data-dismiss="modal">No</button></a>
                                   <script>
                                function demoDisplay1() {
                                      document.getElementById("hideBuyNow").style.display = "none";
                                    }
                                </script>
                               </div>
                               
                               <div class="resend-amount" id="enteramount" style="display:none;">
                                   <h4 class="modal-title text-center mb-4">Please enter resell amount</h4>
                                   <form>
                                      <div class="row">
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" id="value" style="background-color: #f8f9fa;border: none;color:#000;border-radius:25px;" placeholder="Enter resell amount(USD)">
                                        </div>
                                        <div class="col">
                                          <button type="button" onclick="myFunction()" class="btn btn-primary px-3" style="color:#fff!important" data-dismiss="modal">Submit</button>
                                        </div>
                                      </div>
                                    </form>
                               </div>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer border-0">
                             
                            </div>
                            
                          </div>
                        </div>
                      </div>
            </div>
        </div>
         <script>
        
        </script>
      </div>
      <div class="col-md-6 mt-5">
          
        <div class="right-descript">
            <div class="right-description ">
          <div class="d-flex justify-content-between">
            <div class="" style="width:70%">
              <h4 class="text-dark">#<?php echo $row['Token_id']; ?> - <?php echo $row['Token_name']; ?></h4>
              <h4 class="text-dark"><strong><span class="" style="color:#343a40" id="artistAmount"> TRX</span> </strong></h4>
              <h4 class="text-dark"> <?php echo $row['Token_amount']; ?> USD</h4>

            </div>
            <div class="share_setting" style="width:30%;padding-left: 40px;">
              
              <div class="options_here d-inline"> 
                  <div class="dropleft d-inline">
                    <button type="button" class="btn btn-primary dropdown-toggle btn-share" style="color:#fff!important" data-toggle="dropdown">
                     Share
                    </button>
                    <div class="dropdown-menu show-this p-3">
                         <p class="text-center text-dark">Share this collectible</p>
                         <div class="footer-social">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-f"></i></a> <br><small class="text-dark">Facebook</small></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a><br><small class="text-dark">Twitter</small></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-telegram"></i></a><br><small class="text-dark">Telegram</small></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a><br><small class="text-dark">E-mail</small></li>
                            </ul>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
             
          </div>
        

        <div class="text-dark limited-edition my-4">
          <h4> Description :</h4>
          <p> <?php echo $row['discription']; ?> </p>
          <h4> Transaction Hash :</h4>
          <p><a href="https://nile.tronscan.org/#/transaction/<?php echo $row['trans_id']; ?>" class="text-dark" style="word-break: break-all;"><?php echo $row['trans_id']; ?> </a></p>
           
          
        </div>

        <div class="tabs_here text-dark">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Info</a>-->
            <!--</li>-->
            <li class="nav-item">
              <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Owners</a>
            </li>
            <!--<li class="nav-item">-->
            <!--  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">History</a>-->
            <!--</li>-->
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab1" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact" aria-selected="false">Artist</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <ul class="list-inline">
                <li>
                  <div class="border-bottom">
                    <div class="d-flex info_here justify-content-between ">
                    <div class="" style="width: 20%">
                      <img src="assets/img/img-5.jpg" style="width: 50px;height: 50px;border-radius: 50%;">
                    </div>
                    <div class="" style="width: 80%">
                      <span>Current Owner</span>
                      <a href="https://ramlogics.com/nft_marketplace1/profile.php?name=<?php echo $row['Owner']; ?>"><p style="color:#343a40"><strong><?php echo $row['Owner']; ?></strong></p></a>
                    </div>

                  </div>
                  </div>
                </li>
              </ul>
            </div>
            
            <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
              <ul class="list-inline">
                <li>
                  <div class="border-bottom">
                    <div class="d-flex info_here justify-content-between ">
                    <div class="" style="width: 20%">
                      <img src="assets/img/img-5.jpg" style="width: 50px;height: 50px;border-radius: 50%;">
                    </div>
                    <div class="" style="width: 80%">
                      <span></span>
                      <a href="https://ramlogics.com/nft_marketplace1/profile.php?name=<?php echo $row['artist']; ?>"><p style="color:#343a40"><strong><?php echo $row['artist']; ?></strong></p></a>
                    </div>
                      
                    
                  </div>
                  </div>
                </li>
                
              </ul>

            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>


    
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">


let address2 ="<?php  echo $address1= $row['contract_address']; ?>";


var amount = <?php echo $row['Token_amount']; ?>;

var Vlaue_amount = <?php echo $row['Token_amount']; ?>;
var artist = '<?php echo $row['NFT_owner_add']; ?>';

let id= <?php echo  $id= $row['Token_id']; ?>;
var requestOptions ={
                      method: 'GET',
                      redirect: 'follow'
                    };
                    
                     fetch("https://ramlogics.com/nft_marketplace1/test.php", requestOptions)
                      .then(response => response.json())
                      .then(result => {
                            let creat=parseFloat(amount/(result.tron.usd)).toFixed(3);
                             document.getElementById('artistAmount').innerHTML =creat;
                      }).catch(error => console.log('error', error));

setInterval(async()=>{
                var requestOptions ={
                      method: 'GET',
                      redirect: 'follow'
                    };
                    
                     fetch("https://ramlogics.com/nft_marketplace1/test.php", requestOptions)
                      .then(response => response.json())
                      .then(result => {
                    // console.log(result.tron.usd);
                            let creat=parseFloat(amount/(result.tron.usd)).toFixed(3);
                             document.getElementById('artistAmount').innerHTML =creat;
                            
                      }).catch(error => console.log('error', error));
        },10000);
 function myFunction()
{

 if(tronWeb.eventServer.host=="https://event.nileex.io")
 {
                
        var address=address2;
        setTimeout(async () => {
                 
        
         
                        let amountv=(Number(document.getElementById("artistAmount").innerHTML)*1000000);
                        var value= amountv;
                        
        var t_id=id;
        // console.log(address);
          let contract = await tronWeb.contract().at(address);
          var el = document.getElementById('value').value;
         console.log(value);
        
         contract.transaction(window.tronWeb.defaultAddress.base58,t_id,amountv).send({callValue: value}).then(trans=>{
             if((trans!=0)&& (trans!=undefined) &&(trans!=null) &&(trans!="Confirmation declined by user"))
             {  
                 console.log(trans);
                let stop= setInterval(()=>{
                     tronWeb.trx.getTransaction(trans).then(result=>{
                         console.log(result);
                         console.log(result.ret[0].contractRet);
                         if(result.ret[0].contractRet=="SUCCESS")
                         {
                             console.log("success");
                             
                         clearInterval(stop);
                         let add=window.tronWeb.defaultAddress.base58;
                 console.log(add);
                 if(el!==(0&&undefined&&null))
                 {
                     let name123=window.tronWeb.defaultAddress.name; 
                   
                    let resell=0;
        
                                 var formdata = new FormData();
                                formdata.append("amount", el);
                                formdata.append("name", name123);
                                formdata.append("id",t_id);
                                formdata.append("resell", resell);
                                formdata.append("trans", trans);
                                formdata.append("address", add);
                                
                                var requestOptions = {
                                  method: 'POST',
                                  body: formdata,
                                  redirect: 'follow'
                                };
                                
                                fetch("https://ramlogics.com/nft_marketplace1/update.php", requestOptions)
                                  .then(response => response.text())
                                  .then(result => {
                                        location.href="https://ramlogics.com/nft_marketplace1/description.php?id="+ t_id ;
                                      
                                  })
                                  .catch(error => console.log('error', error));
                    }
                    if(el==(0&&undefined&&null))
                    {
                    
                    let name1234=window.tronWeb.defaultAddress.name; 
                    

                
                        let resel=-1;
                        console.log(resell);
                                 var formdata = new FormData();
                                formdata.append("amount",Vlaue_amount);
                                formdata.append("name", name1234);
                                formdata.append("id",t_id);
                                formdata.append("resell",resel);
                                formdata.append("trans", trans);
                                formdata.append("address", add);
                            
                                    var requestOptions = {
                                  method: 'POST',
                                  body: formdata,
                                  redirect: 'follow'
                                };
                                
                                fetch("https://ramlogics.com/nft_marketplace1/update.php", requestOptions)
                                  .then(response => response.text())
                                  .then(result => {
                                        location.href="https://ramlogics.com/nft_marketplace1/description.php?id="+ t_id ;
                                      
                                  })
                                  .catch(error => console.log('error'));
                                  
                                    
                    }
                         }else
                         {
                            //  result.ret[0].contractRet=="REVERT"
                                          
                Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!',
                          footer: 'transaction went wrong' 
                         });
                          clearInterval(stop);
                          location.href="https://ramlogics.com/nft_marketplace1/description.php?id="+ t_id ;
                         }
                         
                     }).catch(console.log);
                 },1000)
                 
             }
             else
             {
            //   alert("Transaction not confirm");
            Swal.fire('Transaction not confirm');
             }
                            
                         }).catch(err=> {
                             Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!',
                          footer: 'transaction went wrong' 
                         });
                         })
                        }, 100);
 }
 else{
     Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Something went wrong!',
          footer: 'Please Select Nile testnet'
});

 }
  
}
 
</script>
<?php
}
include "footer.php";
?>

