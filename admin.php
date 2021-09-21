
<?php
    include "config.php";


if(isset($_POST["submit"])){
  
    $id=$_POST['Token_id'];
    
    $sql= "UPDATE nft_detail SET `status`=-1 WHERE `Token_id`=$id";
    $result1 = $link->query($sql);
    
    if($result1)
    {
            header('location:admin.php');
    }
    else{
        alert("Try again!!!");
    }
}


    $sql="SELECT * FROM nft_detail ORDER BY id desc";
    $result1 = $link->query($sql);

    
                while($row1 = mysqli_fetch_assoc($result1)) 
                                  {
                
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRON NFT</title>
    <link rel="icon" href="assets/img/fevicon001.png" type="image/gif">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .admin-page .container {
            max-width: 1024px;
        }
      .admin-page  .nft-admin {
            padding: 25px 25px 10px;
            background-color: #fff;
            border-radius: 4px;
        }
        .admin-page .nft-admin input {
            background-color: #f8f9fa;
            border-radius: 25px;
            border: none;
            color:#000;
        }
        .admin-page .nft-admin1 {
            padding: 25px 25px 25px;
            background-color: #fff;
            border-radius: 4px;
        }
        .admin-page .modal-header {
            background-color: #fff;
            border: unset!important;
        }
        .admin-page .modal-body {
            background-color: #fff;
            
        }
        .admin-page .modal-footer {
            background-color: #fff;
            border: unset!important;
        }
        .admin-page .modal-header button.close {
            background-color: transparent!important;
            color:#000;
        }
        .admin-page .admin-top {
            background-color: #fff;
            padding: 25px 15px;
            border-radius: 4px;
        }
        .admin-page .tron-address a span {
            word-break: break-all;
        }
        .submit-here button{
            color:#fff!important;
        }
        .nft-admin1 button{
            color:#fff!important;
        }
    </style>
    
   <script>
  
   var address = "<?php echo $row1['Owner_address']; ?>";   

        window.addEventListener("load",()=>{
            setTimeout(()=>{
                if (window.tronWeb.defaultAddress.base58!=address){
                    // alert("Access Denied !");
                    location.href = "index.php";
                }
            },100)
        })
    </script>
    <?php
}
?>    
 
</head>


<body>
    <header class="header bg-white">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white">
                
                <div class="mx-auto"><a class="navbar-brand" href="index.php"><span style="" class="n-logo">NFT</span></a></div>
            
            </nav>
        </div>
    </header>
 <script>
    setTimeout(()=>{
        //console.log(window.tronWeb.defaultAddress.base58);
        var name= window.tronWeb.defaultAddress.name
        var address= window.tronWeb.defaultAddress.base58
        document.getElementById('artistName').innerHTML = window.tronWeb.defaultAddress.name;
        document.getElementById('artistAddress').innerHTML = window.tronWeb.defaultAddress.base58;
        
        },1000)
        
    </script>   


    <section class="admin-page my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="admin-top">
                        <div class="row">
                            <div class="col-md-5"><h5 class="text-dark"><strong>Admin Name :</strong> <span id="artistName"></span></h5></div>
                            <div class="col-md-7"><h5 class="text-dark tron-address"><strong>Tron Address :</strong> <a href="#" class="text-dark"><span id="artistAddress"></span></a></h5></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4 class="text-dark mb-3 mt-5">NFT Creation Fees</h4>
                </div>
                <div class="col-md-12">
                    <div class="nft-admin">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="" method="POST">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="creatingFees" name="creating_fees" aria-describedby="emailHelp" placeholder="Enter NFT creation fees(Limit 11 USD)">
                                  </div>
                                  
                                
                            </div>
                            <div class="col-md-4">
                                <div class="submit-here">
                                    <button type="button" onclick="myCreationFees()" name="reset_Creation_fees"class="btn btn-primary form-control">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <?php
                
                //         if(isset($_POST["reset_Creation_fees"])){
                          
                //             $fees=$_POST['creating_fees'];
                            
                //             if($fees>11)
                //             {
                //                 echo'<script> alert("Invalid fees, should me less than 11 USD ")</script>';
                //             }
                //             else{
                //             $sql= "UPDATE nft_info SET `creating_fees`=$fees";
                //             $result1 = $link->query($sql);
                            
                //             if($result1)
                //             {   
                                    
                //                     header('location:admin.php');
                //             }
                //             else{
                //                 alert("Try again!!!");
                //             }
                //         }
                            
                //         }
                            
                       ?>
                <div class="col-md-12">
                    <h4 class="text-dark mb-3 mt-5">NFT Remove</h4>
                </div>
                <div class="col-md-12">
                    <div class="nft-admin1">
                        <div class="text-center">
                             <!-- Button to Open the Modal -->
                              <button type="button"  class="btn btn-primary px-4" data-toggle="modal" data-target="#myModal">
                                Remove NFT
                              </button>
                            
                              <!-- The Modal -->
                              <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title text-dark">NFT Remove</h4>
                                      <button type="button" class="close text-dark" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                     <div class="nft-admin">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <form action="" method="POST">
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" name="Token_id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Token Id  ">
                                                  </div>
                                                  
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="submit-here">
                                                    
                                                    <button type="submit" onclick="deleteNft()"name= "submit" class="btn btn-primary form-control">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <h4 class="text-dark mb-3 mt-5">NFT Selling</h4>
                </div>
                <div class="col-md-12">
                    <div class="nft-admin">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="" method="POST">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="sellingFees" name="selling_fees" aria-describedby="emailHelp" placeholder="Enter NFT selling Percenatge(limit 4%)">
                                  </div>
                                  
                                
                            </div>
                            <div class="col-md-4">
                                <div class="submit-here">
                                    <button type="button" onclick="mySellFees()" name="reset_selling_fees" class="btn btn-primary form-control">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php
                
                //         if(isset($_POST["reset_selling_fees"])){
                          
                //             $fes=$_POST['selling_fees'];
                            
                //             if($fes>4.0)
                //             {
                //                 echo'<script> alert("Invalid fees, should me less than 4%")</script>';
                //             }
                //             else{
                //             $sql= "UPDATE nft_info SET `selling_fees`=$fes";
                //             $result1 = $link->query($sql);
                            
                //             if($result1)
                //             {   
                                  
                //                     header('location:admin.php');
                //             }
                //             else{
                //                 alert("Try again!!!");
                //             }
                //         }
                            
                //         }
                            
                         ?>
                <div class="col-md-12">
                    <h4 class="text-dark mb-3 mt-5">Owners Tron Address</h4>
                </div>
                <div class="col-md-12">
                    <div class="nft-admin">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="" method="POST">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="OwnerAddress" name="owner" aria-describedby="emailHelp" placeholder="Set Owners Tron Address">
                                  </div>
                                  
                                
                            </div>
                            <div class="col-md-4">
                                <div class="submit-here">
                                    <button type="button" onclick="myOwnerAddress()" name="address" class="btn btn-primary form-control">Submit</button>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                             <?php
                
                        if(isset($_POST["address"])){
                            
                            echo "<script>alert('hello')</script>";
                            $fes=$_POST['owner'];
                            
                            
                            $sql= "UPDATE nft_detail SET `owner_address`='$fes'";
                            $result1 = $link->query($sql);
                            
                            if($result1)
                            {   
                                    
                                    header('location:admin.php');
                            }
                            else{
                                alert("Try again!!!");
                            }
                        
                            
                        }
                            
                        ?> 
                <!--<div class="col-md-12">-->
                <!--    <h4 class="text-dark mb-3 mt-5">NFT Deploy</h4>-->
                <!--</div>-->
                <!--<div class="col-md-12">-->
                <!--    <div class="nft-admin1">-->
                <!--        <div class="text-center">-->
                             <!-- Button to Open the Modal -->
                <!--              <button type="button"  class="btn btn-primary px-4" data-toggle="modal" data-target="#myModal2">-->
                <!--                NFT Deployment-->
                <!--              </button>-->
                            
                              <!-- The Modal -->
                <!--              <div class="modal fade" id="myModal2">-->
                <!--                <div class="modal-dialog modal-dialog-centered">-->
                <!--                  <div class="modal-content">-->
                                  
                                    <!-- Modal Header -->
                <!--                    <div class="modal-header">-->
                <!--                      <h4 class="modal-title text-dark">NFT Deploy</h4>-->
                <!--                      <button type="button" class="close" data-dismiss="modal">&times;</button>-->
                <!--                    </div>-->
                                    
                                    <!-- Modal body -->
                <!--                    <div class="modal-body">-->
                <!--                     <div class="nft-admin">-->
                <!--                        <div class="row">-->
                <!--                            <div class="col-md-12">-->
                <!--                                <form action="" method="POST">-->
                <!--                                  <div class="form-group">-->
                <!--                                    <input type="text" class="form-control" id="token_name" aria-describedby="emailHelp" placeholder="Token Name ">-->
                <!--                                  </div>-->
                                                  
                                                
                <!--                            </div>-->
                <!--                            <div class="col-md-12">-->
                <!--                                <form action="" method="POST">-->
                <!--                                  <div class="form-group">-->
                <!--                                    <input type="text" class="form-control" id="token_symbol" aria-describedby="emailHelp" placeholder=" Symbol">-->
                <!--                                  </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                    </div>-->

                                    <!-- Modal footer -->
                <!--                    <div class="modal-footer">-->
                <!--                      <button type="button" onclick="deploy()" class="btn btn-secondary">submit</button>-->
                <!--                    </div>-->
                                    
                <!--                  </div>-->
                <!--                </div>-->
                <!--              </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
          

    </section>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="assets/slick/slick.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script>

<?php

    $sql1="SELECT * FROM nft_detail ORDER BY id DESC";
    $result2 = $link->query($sql1);

    
                while($row2 = mysqli_fetch_assoc($result2)) 
                                  {
?>
let c_address=  "<?php echo $row2['contract_address']; ?>";
<?php

                                      break;
                                  }
?>
function deleteNft()
{
     swal("NFT Deleted");
}

async function myCreationFees ()
{
   // swal("Creation Fees Set Succesfully!");
    let create= document.getElementById("creatingFees").value;
    if (create>11)
    {
       swal("Creation Fees Must be less than 11USD"); 
    }
    else{
                var creating;
                var requestOptions ={
                      method: 'GET',
                      redirect: 'follow'
                    };
                    
                    fetch("https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=TRX", requestOptions)
                      .then(response => response.json())
                      .then(async (result) => {
                            console.log(result);
                            console.log(result.TRX);
                            creating= create*result.TRX
                                console.log(creating); 
                                 creating=Math.floor(creating);
        console.log(creating);
        console.log(c_address);
        let create_contract = await tronWeb.contract().at(c_address);
        
    create_contract.setOwnerCreatingFees(creating).send().then(()=>{
        swal("Creation Fees Set Succesfully!");
    }).catch(console.log)
    
                            
                      })
                      .catch(error => console.log('error', error));
    
    }
}
async function mySellFees()
{   
    let sell = document.getElementById("sellingFees").value; 
    if (sell>4.0)
    {
        swal("Selling Percentage should be less than 4 percenatage");
    }
    else
    {
     sell= sell.replace(".","");
    let sell_contract = await tronWeb.contract().at(c_address);
    sell_contract.setOwnerSellingFees(sell).send().then(()=>{
        swal("Selling Fees Set Succesfully!");
    }).catch(console.log)
    
    }
}
async function myOwnerAddress ()
{
    let address= document.getElementById("OwnerAddress").value;
     
     let contract= await tronWeb.contract().at(c_address);
     console.log(contract);
    contract.setFeePayer(address).send().then(()=>{
        swal("Owner Address changed succesfully!");
    }).catch(console.log)
   var formdata = new FormData();
                    formdata.append("address",address);
                    
                    var requestOptions = {
                      method: 'POST',
                      body: formdata,
                      redirect: 'follow'
                    };
                    
                    fetch("https://ramlogics.com/nft_marketplace1/update_owner.php", requestOptions)
                      .then(response => response.text())
                      .then(result => console.log(result))
                      .catch(error => console.log('error', error));
}

// <!--async function deploy()-->
// <!--{-->
// <!--    let name= document.getElementById("token_name").value;-->
// <!--    let symbol= document.getElementById("token_symbol").value;-->
    
    
    
// <!--            var byteCode ="608060405260405162002c4a38038062002c4a833981810160405260608110156200002957600080fd5b8101908080516401000000008111156200004257600080fd5b820160208101848111156200005657600080fd5b81516401000000008111828201871017156200007157600080fd5b505092919060200180516401000000008111156200008e57600080fd5b82016020810184811115620000a257600080fd5b8151640100000000811182820187101715620000bd57600080fd5b505060209091015190925090508282620001007f01ffc9a7000000000000000000000000000000000000000000000000000000006001600160e01b036200021a16565b620001347f80ac58cd000000000000000000000000000000000000000000000000000000006001600160e01b036200021a16565b620001687f780e9d63000000000000000000000000000000000000000000000000000000006001600160e01b036200021a16565b81516200017d90600f9060208501906200046a565b508051620001939060109060208401906200046a565b50620001c87f5b5e139f000000000000000000000000000000000000000000000000000000006001600160e01b036200021a16565b50620001f19050620001e26001600160e01b03620002e916565b6001600160e01b03620002ee16565b600980546001600160a01b0319166001600160a01b0392909216919091179055506200050c9050565b7fffffffff000000000000000000000000000000000000000000000000000000008082161415620002ac57604080517f08c379a000000000000000000000000000000000000000000000000000000000815260206004820152601c60248201527f5452433136353a20696e76616c696420696e7465726661636520696400000000604482015290519081900360640190fd5b7fffffffff00000000000000000000000000000000000000000000000000000000166000908152602081905260409020805460ff19166001179055565b335b90565b620003098160136200034060201b62001e811790919060201c565b6040516001600160a01b038216907f6ae172837ea30b801fbfcdd4108aa1d5bf8ff775444fd70256b44e6bf3dfc3f690600090a250565b6200035582826001600160e01b03620003e716565b15620003c257604080517f08c379a000000000000000000000000000000000000000000000000000000000815260206004820152601f60248201527f526f6c65733a206163636f756e7420616c72656164792068617320726f6c6500604482015290519081900360640190fd5b6001600160a01b0316600090815260209190915260409020805460ff19166001179055565b60006001600160a01b0382166200044a576040517f08c379a000000000000000000000000000000000000000000000000000000000815260040180806020018281038252602281526020018062002c286022913960400191505060405180910390fd5b506001600160a01b03166000908152602091909152604090205460ff1690565b828054600181600116156101000203166002900490600052602060002090601f016020900481019282601f10620004ad57805160ff1916838001178555620004dd565b82800160010185558215620004dd579182015b82811115620004dd578251825591602001919060010190620004c0565b50620004eb929150620004ef565b5090565b620002eb91905b80821115620004eb5760008155600101620004f6565b61270c806200051c6000396000f3fe60806040526004361061015d5760003560e01c806301ffc9a71461016257806306fdde03146101c4578063081812fc14610268578063095ea7b3146102c857806309e2e35c1461031d57806318160ddd1461037c57806323b872dd146103ab5780632c7e5ec1146103e15780632f745c5914610487578063386cd8f1146104da57806342842e0e146105095780634b9149b8146105665780634bc92d6c146105aa5780634f6ccce7146105d957806350bb4e7f1461061d5780636352211e146106fd5780636ab1153c146107415780636c0360eb1461077357806370a08231146107a257806370f92ec6146107ef57806373364eb91461081e5780637c68088c1461086257806395d89b41146108af578063983b2d56146108de578063986502751461092b578063a22cb4651461095a578063aa271e1a146109af578063b88d4fde146109fc578063c87b56dd14610ae7578063e985e9c514610b2b575b600080fd5b34801561016e57600080fd5b50d3801561017b57600080fd5b50d2801561018857600080fd5b506101b06004803603602081101561019f57600080fd5b50356001600160e01b031916610b80565b604080519115158252519081900360200190f35b3480156101d057600080fd5b50d380156101dd57600080fd5b50d280156101ea57600080fd5b506101f3610ba3565b6040805160208082528351818301528351919283929083019185019080838360005b8381101561022d578181015183820152602001610215565b50505050905090810190601f16801561025a5780820380516001836020036101000a031916815260200191505b509250505060405180910390f35b34801561027457600080fd5b50d3801561028157600080fd5b50d2801561028e57600080fd5b506102ac600480360360208110156102a557600080fd5b5035610c3a565b604080516001600160a01b039092168252519081900360200190f35b3480156102d457600080fd5b50d380156102e157600080fd5b50d280156102ee57600080fd5b5061031b6004803603604081101561030557600080fd5b506001600160a01b038135169060200135610c9c565b005b34801561032957600080fd5b50d3801561033657600080fd5b50d2801561034357600080fd5b5061036a6004803603602081101561035a57600080fd5b50356001600160a01b0316610dc4565b60408051918252519081900360200190f35b34801561038857600080fd5b50d3801561039557600080fd5b50d280156103a257600080fd5b5061036a610dd6565b61031b600480360360608110156103c157600080fd5b506001600160a01b03813581169160208101359091169060400135610ddc565b6101b0600480360360408110156103f757600080fd5b810190602081018135600160201b81111561041157600080fd5b82018360208201111561042357600080fd5b803590602001918460018302840111600160201b8311171561044457600080fd5b91908080601f0160208091040260200160405190810160405280939291908181526020018383808284376000920191909152509295505091359250610e38915050565b34801561049357600080fd5b50d380156104a057600080fd5b50d280156104ad57600080fd5b5061036a600480360360408110156104c457600080fd5b506001600160a01b038135169060200135610ee5565b3480156104e657600080fd5b50d380156104f357600080fd5b50d2801561050057600080fd5b5061036a610f64565b34801561051557600080fd5b50d3801561052257600080fd5b50d2801561052f57600080fd5b5061031b6004803603606081101561054657600080fd5b506001600160a01b03813581169160208101359091169060400135610f6a565b34801561057257600080fd5b50d3801561057f57600080fd5b50d2801561058c57600080fd5b5061031b600480360360208110156105a357600080fd5b5035610f85565b3480156105b657600080fd5b50d380156105c357600080fd5b50d280156105d057600080fd5b5061036a610fd3565b3480156105e557600080fd5b50d380156105f257600080fd5b50d280156105ff57600080fd5b5061036a6004803603602081101561061657600080fd5b5035610fd9565b34801561062957600080fd5b50d3801561063657600080fd5b50d2801561064357600080fd5b506101b06004803603606081101561065a57600080fd5b6001600160a01b0382351691602081013591810190606081016040820135600160201b81111561068957600080fd5b82018360208201111561069b57600080fd5b803590602001918460018302840111600160201b831117156106bc57600080fd5b91908080601f01602080910402602001604051908101604052809392919081815260200183838082843760009201919091525092955061103f945050505050565b34801561070957600080fd5b50d3801561071657600080fd5b50d2801561072357600080fd5b506102ac6004803603602081101561073a57600080fd5b50356110aa565b61031b6004803603606081101561075757600080fd5b506001600160a01b038135169060208101359060400135611104565b34801561077f57600080fd5b50d3801561078c57600080fd5b50d2801561079957600080fd5b506101f3611227565b3480156107ae57600080fd5b50d380156107bb57600080fd5b50d280156107c857600080fd5b5061036a600480360360208110156107df57600080fd5b50356001600160a01b0316611288565b3480156107fb57600080fd5b50d3801561080857600080fd5b50d2801561081557600080fd5b506102ac6112f0565b34801561082a57600080fd5b50d3801561083757600080fd5b50d2801561084457600080fd5b5061031b6004803603602081101561085b57600080fd5b50356112ff565b34801561086e57600080fd5b50d3801561087b57600080fd5b50d2801561088857600080fd5b5061031b6004803603602081101561089f57600080fd5b50356001600160a01b031661134d565b3480156108bb57600080fd5b50d380156108c857600080fd5b50d280156108d557600080fd5b506101f36113ce565b3480156108ea57600080fd5b50d380156108f757600080fd5b50d2801561090457600080fd5b5061031b6004803603602081101561091b57600080fd5b50356001600160a01b031661142f565b34801561093757600080fd5b50d3801561094457600080fd5b50d2801561095157600080fd5b5061031b611481565b34801561096657600080fd5b50d3801561097357600080fd5b50d2801561098057600080fd5b5061031b6004803603604081101561099757600080fd5b506001600160a01b0381351690602001351515611493565b3480156109bb57600080fd5b50d380156109c857600080fd5b50d280156109d557600080fd5b506101b0600480360360208110156109ec57600080fd5b50356001600160a01b0316611594565b348015610a0857600080fd5b50d38015610a1557600080fd5b50d28015610a2257600080fd5b5061031b60048036036080811015610a3957600080fd5b6001600160a01b03823581169260208101359091169160408201359190810190608081016060820135600160201b811115610a7357600080fd5b820183602082011115610a8557600080fd5b803590602001918460018302840111600160201b83111715610aa657600080fd5b91908080601f0160208091040260200160405190810160405280939291908181526020018383808284376000920191909152509295506115a7945050505050565b348015610af357600080fd5b50d38015610b0057600080fd5b50d28015610b0d57600080fd5b506101f360048036036020811015610b2457600080fd5b5035611605565b348015610b3757600080fd5b50d38015610b4457600080fd5b50d28015610b5157600080fd5b506101b060048036036040811015610b6857600080fd5b506001600160a01b03813581169160200135166117d1565b6001600160e01b0319811660009081526020819052604090205460ff165b919050565b600f8054604080516020601f6002600019610100600188161502019095169490940493840181900481028201810190925282815260609390929091830182828015610c2f5780601f10610c0457610100808354040283529160200191610c2f565b820191906000526020600020905b815481529060010190602001808311610c1257829003601f168201915b505050505090505b90565b6000610c45826117ff565b610c805760405162461bcd60e51b815260040180806020018281038252602c815260200180612469602c913960400191505060405180910390fd5b506000908152600360205260409020546001600160a01b031690565b6000610ca7826110aa565b9050806001600160a01b0316836001600160a01b03161415610cfa5760405162461bcd60e51b81526004018080602001828103825260218152602001806125416021913960400191505060405180910390fd5b806001600160a01b0316610d0c61181c565b6001600160a01b03161480610d2d5750610d2d81610d2861181c565b6117d1565b610d685760405162461bcd60e51b81526004018080602001828103825260388152602001806126786038913960400191505060405180910390fd5b60008281526003602052604080822080546001600160a01b0319166001600160a01b0387811691821790925591518593918516917f8c5be1e5ebec7d5bd14f71427d1e84f3dd0314c0f7b2291e5b200ac8c7c3b92591a4505050565b60026020526000908152604090205481565b600d5490565b610ded610de761181c565b82611820565b610e285760405162461bcd60e51b81526004018080602001828103825260318152602001806126236031913960400191505060405180910390fd5b610e338383836118c0565b505050565b6000600854341015610e8e576040805162461bcd60e51b815260206004820152601a60248201527908ccaca40e4cae2ead2e4cadacadce8e640dcdee840dac2e8c6d60331b604482015290519081900360640190fd5b6009546040516001600160a01b03909116903480156108fc02916000818181858888f19350505050158015610ec7573d6000803e3d6000fd5b50610ed233836118df565b610edc8284611900565b50600192915050565b6000610ef083611288565b8210610f2d5760405162461bcd60e51b815260040180806020018281038252602b815260200180612399602b913960400191505060405180910390fd5b6001600160a01b0383166000908152600b60205260409020805483908110610f5157fe5b9060005260206000200154905092915050565b60085481565b610e33838383604051806020016040528060008152506115a7565b6009546001600160a01b03163314610fce5760405162461bcd60e51b81526004018080602001828103825260238152602001806123c46023913960400191505060405180910390fd5b600755565b60075481565b6000610fe3610dd6565b82106110205760405162461bcd60e51b815260040180806020018281038252602c815260200180612515602c913960400191505060405180910390fd5b600d828154811061102d57fe5b90600052602060002001549050919050565b600061105161104c61181c565b611594565b61108c5760405162461bcd60e51b81526004018080602001828103825260308152602001806124c46030913960400191505060405180910390fd5b61109684846118df565b6110a08383611900565b5060019392505050565b6000818152600160205260408120546001600160a01b0316806110fe5760405162461bcd60e51b81526004018080602001828103825260298152602001806125a46029913960400191505060405180910390fd5b92915050565b600a8190553481111561115d576040805162461bcd60e51b815260206004820152601c60248201527b736f72727920696e73756666656e746369656e742062616c616e636560201b604482015290519081900360640190fd5b611166826110aa565b600680546001600160a01b0319166001600160a01b039283161790819055166108fc6103e8611193611963565b34028161119c57fe5b049081150290604051600060405180830381858888f193505050501580156111c8573d6000803e3d6000fd5b506009546007546040516001600160a01b03909216916103e8349092029190910480156108fc02916000818181858888f1935050505015801561120f573d6000803e3d6000fd5b50600654610e33906001600160a01b031684846118c0565b60118054604080516020601f6002600019610100600188161502019095169490940493840181900481028201810190925282815260609390929091830182828015610c2f5780601f10610c0457610100808354040283529160200191610c2f565b60006001600160a01b0382166112cf5760405162461bcd60e51b815260040180806020018281038252602a8152602001806125cd602a913960400191505060405180910390fd5b6001600160a01b03821660009081526004602052604090206110fe9061196d565b6009546001600160a01b031681565b6009546001600160a01b031633146113485760405162461bcd60e51b81526004018080602001828103825260248152602001806126546024913960400191505060405180910390fd5b600855565b6009546001600160a01b031633146113ac576040805162461bcd60e51b815260206004820152601e60248201527f4f6e6c79206f776e65722063616e207365742074686520616464726573730000604482015290519081900360640190fd5b600980546001600160a01b0319166001600160a01b0392909216919091179055565b60108054604080516020601f6002600019610100600188161502019095169490940493840181900481028201810190925282815260609390929091830182828015610c2f5780601f10610c0457610100808354040283529160200191610c2f565b61143a61104c61181c565b6114755760405162461bcd60e51b81526004018080602001828103825260308152602001806124c46030913960400191505060405180910390fd5b61147e81611971565b50565b61149161148c61181c565b6119b9565b565b61149b61181c565b6001600160a01b0316826001600160a01b031614156114fd576040805162461bcd60e51b81526020600482015260196024820152782a29219b99189d1030b8383937bb32903a379031b0b63632b960391b604482015290519081900360640190fd5b806005600061150a61181c565b6001600160a01b03908116825260208083019390935260409182016000908120918716808252919093529120805460ff19169215159290921790915561154e61181c565b60408051841515815290516001600160a01b0392909216917f17307eab39ab6107e8899845ad3d59bd9653f200f220920489ca2b5937696c319181900360200190a35050565b60006110fe60138363ffffffff611a0116565b6115b86115b261181c565b83611820565b6115f35760405162461bcd60e51b81526004018080602001828103825260318152602001806126236031913960400191505060405180910390fd5b6115ff84848484611a68565b50505050565b6060611610826117ff565b61164b5760405162461bcd60e51b815260040180806020018281038252602f815260200180612495602f913960400191505060405180910390fd5b60008281526012602090815260409182902080548351601f60026000196101006001861615020190931692909204918201849004840281018401909452808452606093928301828280156116e05780601f106116b5576101008083540402835291602001916116e0565b820191906000526020600020905b8154815290600101906020018083116116c357829003601f168201915b50505050509050805160001415611707575050604080516020810190915260008152610b9e565b60118160405160200180838054600181600116156101000203166002900480156117685780601f10611746576101008083540402835291820191611768565b820191906000526020600020905b815481529060010190602001808311611754575b5050825160208401908083835b602083106117945780518252601f199092019160209182019101611775565b6001836020036101000a03801982511681845116808217855250505050505090500192505050604051602081830303815290604052915050610b9e565b6001600160a01b03918216600090815260056020908152604080832093909416825291909152205460ff1690565b6000908152600160205260409020546001600160a01b0316151590565b3390565b600061182b826117ff565b6118665760405162461bcd60e51b815260040180806020018281038252602c8152602001806125f7602c913960400191505060405180910390fd5b6000611871836110aa565b9050306001600160a01b0385811690831614806118a75750846001600160a01b031661189c85610c3a565b6001600160a01b0316145b806118b757506118b782866117d1565b95945050505050565b6118cb838383611aba565b6118d58382611bec565b610e338282611ce1565b6118e98282611d1f565b6118f38282611ce1565b6118fc81611e3d565b5050565b611909826117ff565b6119445760405162461bcd60e51b815260040180806020018281038252602c8152602001806123e7602c913960400191505060405180910390fd5b60008281526012602090815260409091208251610e33928401906122e0565b6007546103e80390565b5490565b61198260138263ffffffff611e8116565b6040516001600160a01b038216907f6ae172837ea30b801fbfcdd4108aa1d5bf8ff775444fd70256b44e6bf3dfc3f690600090a250565b6119ca60138263ffffffff611f0216565b6040516001600160a01b038216907fe94479a9f7e1952cc78f2d6baab678adc1b772d936c6583def489e524cb6669290600090a250565b60006001600160a01b038216611a485760405162461bcd60e51b81526004018080602001828103825260228152602001806125626022913960400191505060405180910390fd5b506001600160a01b03166000908152602091909152604090205460ff1690565b611a738484846118c0565b611a7f84848484611f69565b6115ff5760405162461bcd60e51b81526004018080602001828103825260328152602001806124376032913960400191505060405180910390fd5b826001600160a01b0316611acd826110aa565b6001600160a01b031614611b125760405162461bcd60e51b81526004018080602001828103825260298152602001806126b06029913960400191505060405180910390fd5b6001600160a01b038216611b575760405162461bcd60e51b81526004018080602001828103825260248152602001806124136024913960400191505060405180910390fd5b611b60816121a5565b6001600160a01b0383166000908152600460205260409020611b81906121e0565b6001600160a01b0382166000908152600460205260409020611ba2906121f7565b60008181526001602052604080822080546001600160a01b0319166001600160a01b03868116918217909255915184939187169160008051602061258483398151915291a4505050565b6001600160a01b0382166000908152600b6020526040812054611c1690600163ffffffff61220016565b6000838152600c6020526040902054909150808214611cb1576001600160a01b0384166000908152600b60205260408120805484908110611c5357fe5b9060005260206000200154905080600b6000876001600160a01b03166001600160a01b031681526020019081526020016000208381548110611c9157fe5b6000918252602080832090910192909255918252600c9052604090208190555b6001600160a01b0384166000908152600b60205260409020805490611cda90600019830161235e565b5050505050565b6001600160a01b039091166000908152600b602081815260408084208054868652600c84529185208290559282526001810183559183529091200155565b6001600160a01b038216611d7a576040805162461bcd60e51b815260206004820181905260248201527f5452433732313a206d696e7420746f20746865207a65726f2061646472657373604482015290519081900360640190fd5b611d83816117ff565b15611dd4576040805162461bcd60e51b815260206004820152601c60248201527b151490cdcc8c4e881d1bdad95b88185b1c9958591e481b5a5b9d195960221b604482015290519081900360640190fd5b600081815260016020908152604080832080546001600160a01b0319166001600160a01b038716908117909155835260049091529020611e13906121f7565b60405181906001600160a01b03841690600090600080516020612584833981519152908290a45050565b600d80546000838152600e60205260408120829055600182018355919091527fd7b6990105719101dabeb77144f2a3385c8033acd3af97e9423a695e81ad1eb50155565b611e8b8282611a01565b15611edd576040805162461bcd60e51b815260206004820152601f60248201527f526f6c65733a206163636f756e7420616c72656164792068617320726f6c6500604482015290519081900360640190fd5b6001600160a01b0316600090815260209190915260409020805460ff19166001179055565b611f0c8282611a01565b611f475760405162461bcd60e51b81526004018080602001828103825260218152602001806124f46021913960400191505060405180910390fd5b6001600160a01b0316600090815260209190915260409020805460ff19169055565b6000836001600160a01b0316d4611f825750600161219d565b600060606001600160a01b038616630a2ebf0f60e31b611fa061181c565b89888860405160240180856001600160a01b03166001600160a01b03168152602001846001600160a01b03166001600160a01b0316815260200183815260200180602001828103825283818151815260200191508051906020019080838360005b83811015612019578181015183820152602001612001565b50505050905090810190601f1680156120465780820380516001836020036101000a031916815260200191505b5060408051601f198184030181529181526020820180516001600160e01b03166001600160e01b0319909a16999099178952518151919890975087965094509250829150849050835b602083106120ae5780518252601f19909201916020918201910161208f565b6001836020036101000a0380198251168184511680821785525050505050509050019150506000604051808303816000865af19150503d8060008114612110576040519150601f19603f3d011682016040523d82523d6000602084013e612115565b606091505b5091509150816121665780511561212f5780518082602001fd5b60405162461bcd60e51b81526004018080602001828103825260328152602001806124376032913960400191505060405180910390fd5b600081806020019051602081101561217d57600080fd5b50516001600160e01b031916630a2ebf0f60e31b14935061219d92505050565b949350505050565b6000818152600360205260409020546001600160a01b03161561147e57600090815260036020526040902080546001600160a01b0319169055565b80546121f390600163ffffffff61220016565b9055565b80546001019055565b600061224283836040518060400160405280601e81526020017f536166654d6174683a207375627472616374696f6e206f766572666c6f770000815250612249565b9392505050565b600081848411156122d85760405162461bcd60e51b81526004018080602001828103825283818151815260200191508051906020019080838360005b8381101561229d578181015183820152602001612285565b50505050905090810190601f1680156122ca5780820380516001836020036101000a031916815260200191505b509250505060405180910390fd5b505050900390565b828054600181600116156101000203166002900490600052602060002090601f016020900481019282601f1061232157805160ff191683800117855561234e565b8280016001018555821561234e579182015b8281111561234e578251825591602001919060010190612333565b5061235a92915061237e565b5090565b815481835581811115610e3357600083815260209020610e339181019083015b610c3791905b8082111561235a576000815560010161238456fe545243373231456e756d657261626c653a206f776e657220696e646578206f7574206f6620626f756e64734f6e6c79206f776e65722063616e20736574207468652073656c6c696e6720666565735452433732314d657461646174613a2055524920736574206f66206e6f6e6578697374656e7420746f6b656e5452433732313a207472616e7366657220746f20746865207a65726f20616464726573735452433732313a207472616e7366657220746f206e6f6e20545243373231526563656976657220696d706c656d656e7465725452433732313a20617070726f76656420717565727920666f72206e6f6e6578697374656e7420746f6b656e5452433732314d657461646174613a2055524920717565727920666f72206e6f6e6578697374656e7420746f6b656e4d696e746572526f6c653a2063616c6c657220646f6573206e6f74206861766520746865204d696e74657220726f6c65526f6c65733a206163636f756e7420646f6573206e6f74206861766520726f6c65545243373231456e756d657261626c653a20676c6f62616c20696e646578206f7574206f6620626f756e64735452433732313a20617070726f76616c20746f2063757272656e74206f776e6572526f6c65733a206163636f756e7420697320746865207a65726f2061646472657373ddf252ad1be2c89b69c2b068fc378daa952ba7f163c4a11628f55a4df523b3ef5452433732313a206f776e657220717565727920666f72206e6f6e6578697374656e7420746f6b656e5452433732313a2062616c616e636520717565727920666f7220746865207a65726f20616464726573735452433732313a206f70657261746f7220717565727920666f72206e6f6e6578697374656e7420746f6b656e5452433732313a207472616e736665722063616c6c6572206973206e6f74206f776e6572206e6f7220617070726f7665644f6e6c79206f776e65722063616e2073657420746865206372656174696f6e20666565735452433732313a20617070726f76652063616c6c6572206973206e6f74206f776e6572206e6f7220617070726f76656420666f7220616c6c5452433732313a207472616e73666572206f6620746f6b656e2074686174206973206e6f74206f776ea26474726f6e5820cf55864b39442c7a0d59f8b4ccfa7ada07ca8a20f5c48c64a56965bc8d5ca38264736f6c634300050a0031526f6c65733a206163636f756e7420697320746865207a65726f2061646472657373";-->
// <!--            let abi =[{"constant":true,"inputs":[{"name":"interfaceId","type":"bytes4"}],"name":"supportsInterface","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"tokenId","type":"uint256"}],"name":"getApproved","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"to","type":"address"},{"name":"tokenId","type":"uint256"}],"name":"approve","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"}],"name":"_bidAray","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"from","type":"address"},{"name":"to","type":"address"},{"name":"tokenId","type":"uint256"}],"name":"transferFrom","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"constant":false,"inputs":[{"name":"_tokenURI","type":"string"},{"name":"_tokenId","type":"uint256"}],"name":"mintNft","outputs":[{"name":"","type":"bool"}],"payable":true,"stateMutability":"payable","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"},{"name":"index","type":"uint256"}],"name":"tokenOfOwnerByIndex","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"ownerFees","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"from","type":"address"},{"name":"to","type":"address"},{"name":"tokenId","type":"uint256"}],"name":"safeTransferFrom","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_adminFees","type":"uint256"}],"name":"setOwnerSellingFees","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"adminFees","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"index","type":"uint256"}],"name":"tokenByIndex","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"to","type":"address"},{"name":"tokenId","type":"uint256"},{"name":"tokenURI","type":"string"}],"name":"mintWithTokenURI","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"tokenId","type":"uint256"}],"name":"ownerOf","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"to","type":"address"},{"name":"tokenId","type":"uint256"},{"name":"_amount","type":"uint256"}],"name":"transaction","outputs":[],"payable":true,"stateMutability":"payable","type":"function"},{"constant":true,"inputs":[],"name":"baseURI","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"feePayer","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_ownerFees","type":"uint256"}],"name":"setOwnerCreatingFees","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_feePayer","type":"address"}],"name":"setFeePayer","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"}],"name":"addMinter","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"renounceMinter","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"to","type":"address"},{"name":"approved","type":"bool"}],"name":"setApprovalForAll","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"isMinter","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"from","type":"address"},{"name":"to","type":"address"},{"name":"tokenId","type":"uint256"},{"name":"_data","type":"bytes"}],"name":"safeTransferFrom","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"tokenId","type":"uint256"}],"name":"tokenURI","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"},{"name":"operator","type":"address"}],"name":"isApprovedForAll","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[{"name":"_tokenName","type":"string"},{"name":"_tokenSymbol","type":"string"},{"name":"adminAddress","type":"address"}],"payable":true,"stateMutability":"payable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"name":"account","type":"address"}],"name":"MinterAdded","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"account","type":"address"}],"name":"MinterRemoved","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":true,"name":"tokenId","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"approved","type":"address"},{"indexed":true,"name":"tokenId","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"operator","type":"address"},{"indexed":false,"name":"approved","type":"bool"}],"name":"ApprovalForAll","type":"event"}]-->
            
// <!--            deploy_contract();-->
// <!--            async function deploy_contract() {-->
// <!--                const transaction = await tronWeb.transactionBuilder.createSmartContract({-->
// <!--                    abi: abi,-->
// <!--                    bytecode: byteCode,-->
// <!--                    feeLimit: 1e9,-->
// <!--                    callValue: 0,-->
// <!--                    userFeePercentage: 30,-->
// <!--                    originEnergyLimit: 1e7,-->
// <!--                    parameters: [name, symbol,window.tronWeb.defaultAddress.base58]-->
                    
// <!--                }, tronWeb.defaultAddress.hex);-->

// <!--                const signedTransaction = await tronWeb.trx.sign(transaction);-->
// <!--                const contract_instance = await tronWeb.trx.sendRawTransaction(signedTransaction);-->
// <!--                console.log(contract_instance);-->
                
                
// <!--                var trans = contract_instance.txid;-->
// <!--                var contract = contract_instance.transaction.contract_address;-->
// <!--                swal(contract);-->
// <!--                    var formdata = new FormData();-->
// <!--                    formdata.append("address",contract);-->
                    
// <!--                    var requestOptions = {-->
// <!--                      method: 'POST',-->
// <!--                      body: formdata,-->
// <!--                      redirect: 'follow'-->
// <!--                    };-->
                    
// <!--                    fetch("https://ramlogics.com/nft_marketplace1/upload.php", requestOptions)-->
// <!--                      .then(response => response.text())-->
// <!--                      .then(result => console.log(result))-->
// <!--                      .catch(error => console.log('error', error));-->

// <!--            }-->
            
    
// <!--}-->

</script>
</body>
</html>