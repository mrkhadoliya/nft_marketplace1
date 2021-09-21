<?php
include "header.php";
?>

<?php

include "config.php";

$sql="SELECT * FROM nft_detail ORDER BY id DESC";
$result1 = $link->query($sql);


?>
<style>
        #create_section .container {
            max-width: 1024px;
        }

        .file {
            position: absolute;
            font-size: 19px;
            z-index: 9;
            left: 43%;
            right: 0;
            opacity: 0;
        }
        .set-this-submit {
            background-color: #31dc58!important;
            border-radius: 25px!important;
        }
        input#uploadImage {
            position: relative;
            z-index: 0;
            margin-bottom: 20px;
        }
        input#uploadImage::before {
            content: 'Choose file...';
            position: absolute;
            top: 0;
            left: 0px;
            z-index: 999;
            text-align: center;
            height: 80px;
            border-radius: 0px;
            width: 100%;
            background-color: #31dc58;
        }
        .royalties {
    position: relative;
}
        .royalties span {
    position: absolute;
    top: 10px;
    right: 15px;
    color: gray;
}
    </style>


    <section class="pt-5" id="create_section">

        <form action="" id="formid" method="POST" >

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h4 class="text-dark mb-5">Create single collectible</h4>
                    </div>


                    <div class="col-md-8 ">
                        <div class="left-side text-dark">
                            <h6>Upload file</h6>

                            <div class="upload_here">
                                <p>PNG, GIF, WEBP, MP4 or MP3. Max 30mb.</p>
                                <input id="uploadImage" class="browse" type="file" accept="image/*" name="image" value=""/>

                                <div class="choosen_img">
                                    <img src="assets/img/image.png" id="preview" class="" width="" height="">
                                    <img src="" id="preview" class="mt-3" width="" height="80px">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="right-side text-dark">
                            <h6>Preview</h6>
                            <div class="above-shadow">
                                <div class="preview-side">
                                    <img src="" id="previewImg" class="" width="100%">
                                    <img src="" id="preview1" class="" width="100%">
                                    <p class="preview-text">Preview of your new collectible</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="left-side text-dark">
                            <div class="above-shadow mt-5">
                                <div class="NFT-form ">
                                    <div class="form-group">
                                        <input type="text" name="name" style="color: #343a40;box-shadow: none;border:none;background-color: transparent; border-radius: 0px;border-bottom: 1px solid #31dc58;" class="form-control" id="NFT_name" aria-describedby="emailHelp" placeholder="NFT Name" requried>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="col">
                                            <input type="text" name="price" style="color: #343a40;box-shadow: none;border:none;background-color: transparent; border-radius: 0px;border-bottom: 1px solid #31dc58;" class="form-control" id="NFT_price" placeholder="NFT Price in USD" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="royalties">
                                            <label for="Royalties"></label>
                                            <input type="text" name="NFT_royalties" style="color: #343a40;box-shadow: none;border:none;background-color: transparent; border-radius: 0px;border-bottom: 1px solid #31dc58;" class="form-control" id="NFT_royalties" aria-describedby="emailHelp" placeholder="Royalties (E.g . 10%)" requried>
                                            <span>%</span>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea name="description" class="form-control rounded-0" style="color: #343a40;box-shadow: none;border:none;background-color: transparent; border-radius: 0px;border-bottom: 1px solid #31dc58;" id="NFT_discription" rows="3" placeholder="NFT Description" required></textarea>
                                    </div>
                                    <div class="form-row mb-3">
                                        <div class="col">
                                            <h5 style="border-bottom: 1px solid #31dc58;padding-bottom:15px;">Do you want to sell NFT?</h5>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="resell" id="inlineRadio1" value="0">
                                              <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="resell" id="inlineRadio2" value="-1">
                                              <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <input type="text" name="demoTId" id="demoTId" hidden value="">
                                    <input type="text" name="demoOwnerName" id="demoOwnerName" hidden value="">
                                    <input type="text" name="demoTransId" id="demoTransId" hidden value="">
                                    <input type="text" name="democontract" id="democontract" hidden value="">
                                    <input type="text" name="demoTAmount" id="demoTAmount" hidden value="">
                                    <input type="text" name="demOwner" id="demOwner" hidden value="">
                                    
                                    <input type="text" name="demoadrs" id="demoadrs" hidden value="">

                                    <input type="button" name="button" id="btnid" onclick="myFunction()" data-toggle="modal" data-target="#myModal7" class="btn btn-primary form-control mt-4 set-this-submit" value="Submit" />
                                    <!-- The Modal -->
                                      <!--<div class="modal fade" id="myModal7">-->
                                      <!--  <div class="modal-dialog modal-dialog-centered">-->
                                      <!--    <div class="modal-content" style="background-color: #343a40;color: #fff;">-->
                                            <!-- Modal Header -->
                                      <!--      <div class="modal-header ">-->
                                              <!--<h4 class="modal-title text-center">Do You want to resell ?</h4>-->
                                      <!--        <span type="button" style="color:#31dc58;" class="close" data-dismiss="modal">&times;</span>-->
                                      <!--      </div>-->
                                            <!-- Modal body -->
                                      <!--      <div class="modal-body text-center">-->
                                      <!--         <div class="text-center" id="resell">-->
                                      <!--             <h4 class="modal-title text-center mb-4">Do you want to sell NFT?</h4>-->
                                      <!--             <a class="d-inline text-center" href="#"><button type="button" onclick="myFunction()" class="btn btn-secondary px-5" id="agree" >Yes</button></a>-->
                                      <!--             <a class="d-inline text-center" href="#"><button type="button" onclick="myFunction()" class="btn btn-secondary px-5" id="notAgree">No</button></a>-->
                                      <!--         </div>-->
                                      <!--      </div>-->
                                            <!-- Modal footer -->
                                      <!--      <div class="modal-footer border-0">-->
                                      <!--      </div>-->
                                      <!--    </div>-->
                                      <!--  </div>-->
                                      <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <script type="text/javascript">
$(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
    document.getElementById("preview1").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});
</script>
      <script type="text/javascript">
       
	 <?php
                    
                                  while($row = mysqli_fetch_assoc($result1)) 
                                  {
                        ?>
    
        

 let contract_address ="<?php  echo $address2= $row['contract_address']; ?>";
  let owner_address ="<?php  echo $address3= $row['Owner_address']; ?>"

<?php
               break;                   }
    ?>
async function myFunction() {
    
    //console.log(tronWeb.address.fromHex(await contract_instance.transaction));
   

        function gfg() {
            var minm = 100000;
            var maxm = 999999;
            return Math.floor(Math.random() * (maxm - minm + 1)) + minm;
        }
         var ID = gfg();
        
            var amount = document.getElementById("NFT_price").value;
            var dis = document.getElementById("NFT_discription").value;
            var name = document.getElementById("NFT_name").value;
            var name = document.getElementById("inlineRadio2").value;

            var name1 = window.tronWeb.defaultAddress.name;
            var add1 = window.tronWeb.defaultAddress.base58;
            deploy_contract();
            async function deploy_contract() {

                var file_path = document.getElementById("uploadImage").value;
                
               
         if(tronWeb.eventServer.host=="https://event.nileex.io")
                {
                    let royalties;
                royalties=document.getElementById("NFT_royalties").value
                    if(royalties<=30)
                    {
                        
                let contract_function = await tronWeb.contract().at(contract_address);
                console.log(contract_address);
                 
                 royalties=royalties*10;
                 console.log(royalties);
                 
                document.getElementById("demoTId").value = ID;
                document.getElementById("demoOwnerName").value = name1;
                document.getElementById("demoadrs").value = add1;
                
                document.getElementById("demoTAmount").value = amount;
                 
                document.getElementById("demOwner").value = owner_address;
                 
                 
                 
                // document.getElementById("democontract").value = contract_address;
                //console.log(ID,name1,add1,amount);

                $.ajax({
                    url: "save.php",
                    type: "POST",
                    data: new FormData(formid),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        file_path=data;
                        console.log(file_path);
                        let str=file_path.split("/");
                        console.log(str[1]);
                        let file="https://ramlogics.com/nft_marketplace1/uploads/"+str[1];
                        
                        
                contract_function.ownerFees().call().then(fee=>{console.log(Number(fee))
                 contract_function.mintNft(file,ID).send({callValue: fee*1000000}).then(transaction=>{
                    
                         console.log(transaction);
                         let stop= setInterval(()=>{
                     tronWeb.trx.getTransaction(transaction).then(result=>{
                         console.log(result);
                         console.log(result.ret[0].contractRet);
                         if(result.ret[0].contractRet=="SUCCESS")
                         {
                             console.log("success");
                              var formdata = new FormData();
                                                    formdata.append("address", transaction);
                                                    formdata.append("id", ID);
                                                    
                                                    var requestOptions = {
                                                      method: 'POST',
                                                      body: formdata,
                                                      redirect: 'follow'
                                                    };
                                                    
                                                    fetch("https://ramlogics.com/nft_marketplace1/trans.php", requestOptions)
                                                      .then(response => response.text())
                                                      .then(result => console.log(result))
                                                      .catch(error => console.log('error', error));
                                                      //location.href="/nft_marketplace1/detail.php?Token_id="+ ID ;

                             
                         clearInterval(stop);
                         }
                         else
                         {
                              var formdata = new FormData();
                                                    formdata.append("address", "0");
                                                    
                                                    var requestOptions = {
                                                      method: 'POST',
                                                      body: formdata,
                                                      redirect: 'follow'
                                                    };
                                                    
                                                    fetch("https://ramlogics.com/nft_marketplace1/trans.php", requestOptions)
                                                      .then(response => response.text())
                                                      .then(result => console.log(result))
                                                      .catch(error => console.log('error', error));
                                                      //location.href="/nft_marketplace1/detail.php?Token_id="+ ID ;

                             
                         clearInterval(stop);
                          Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!',
                          footer: 'Transaction Fialed '
                        });
                        
                    
                             
                         }
                         
                     });
                     },1000)
                                           
                     }).catch(()=>{
                         Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!',
                          footer: 'Transaction Fialed '
                        });
                     });
                }).catch(console.log);
                
                        
                        //alert("alert in success");
                     
                    
                     }//$("#ajaxdata").html(data);
                    
                });
                
                    }else
                    { Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!',
                          footer: 'Royalties Must be less than 30%'
                        });
                        
                    }
            }else{
                Swal.fire({
                          icon: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!',
                          footer: 'Please select Nile Testnet'
                        });
            }
        }

    }
    </script>
    
    
    <?php
include "footer.php";
?>