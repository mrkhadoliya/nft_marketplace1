<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
    include "header.php";
    include "config.php";


                        if(isset($_POST["submit"])){
                        
                            $ID=$_POST['submit'];
                            $amount=$_POST['Token_amount'];
                        $sql= "UPDATE nft_detail SET `resell`=0,`Token_amount`='$amount' Where Token_id='$ID'";
                            $result1 = $link->query($sql);
                            
                            if($result1)
                            {   
                                    echo'<script>swal({
                                                      title: "Activate",
                                                      text: "You Activate the NFT!",
                                                      icon: "success",
                                                      button: "Ok!",
                                                    });</script>';
                                    header('location:artist.php');
                            }
                            else{
                                alert("Try again!!!");
                            }
                        }
                            
                        if(isset($_POST["Deactive"])){
                          
                    $sql1= "UPDATE nft_detail SET `resell`=-1 Where Token_id=".$_POST['Deactive'];
                            $result2 = $link->query($sql1);
                            
                            if($result2)
                            {   
                                    echo'<script>swal({
                                                      title: "Deactivate",
                                                      text: "You Deactivate the NFT!",
                                                      icon: "success",
                                                      button: "Ok!",
                                                    });</script>';
                                    header('location:artist.php');
                            }
                            else{
                                alert("Try again!!!");
                            }
                        }
                            
                            
                        ?>
                          <style>
    .artist_page .container {
        max-width: 1480px;
    }
    button.btn.btn-primary.bell-icon-here1 {
    position: relative;
    background-color: #f8f9fa!important;
    border-radius: 4px!important;
    height: 40px;
    width: 40px;
}
.modal-body {
    background-color: #fff;
}
.modal-header {
    background-color: #fff;
    border-bottom: unset;
}
.modal-footer {
    background-color: #fff;
    border-top: unset;
}
button.close {
    background-color: transparent!important;
    color: #fff!important;
}
.card-body button{
    color:#fff!important;
}
.current-offer {
    text-align: center;
    padding: 10px;
    margin-top: 15px;
    /* border-radius: 5px; */
    background-color: #f8f9fa!important;
}
.current-offer span {
    font-weight: 600;
}
.user-id-name {
    color: #000;
}
  </style>


 <script>
    setTimeout(()=>{
        //console.log(window.tronWeb.defaultAddress.base58);
        var name= window.tronWeb.defaultAddress.name;
        var address= window.tronWeb.defaultAddress.base58;
        console.log(name);
        document.getElementById('artistName').innerHTML = window.tronWeb.defaultAddress.name;
        document.getElementById('artistAddress').innerHTML =  window.tronWeb.defaultAddress.base58;
        
        
      var formdata = new FormData();
        formdata.append("Address", address);
        formdata.append("Name", name);
        
        var requestOptions = {
          method: 'POST',
          body: formdata,
          redirect: 'follow'
        };
        
        fetch("https://ramlogics.com/nft_marketplace1/fetch.php", requestOptions)
          .then(response => response.json())
          .then(result => {
               console.log(result);
              let html = "";
              
              for(i=0;i<result.length;i++)
              {
                  html += `
                  <div class="col-md-3 mt-4">
                    <div class="demo_here">
                    <div class="card" style="">
                    <img class="card-img-top" src="${result[i].Token_image}" alt="Card image cap">
                    <div class="card-body">
                      
                     <div class="">
                        <div class="user-id-name">
                  <div class="row">
                    <div class="col">
                      <p><strong >Name :</strong></p>
                      <p><strong>Id :</strong></p>
                    </div>
                    <div class="col-auto">
                      <p class="text-right">${result[i].Token_name}</p>
                      <p class="text-right">${result[i].Token_id}</p>
                    </div>
                  </div>
                </div>
                        <form action="#" method="POST">`;
                          if(result[i].resell==0){
                            html +=`<button type="submit" value="${result[i].Token_id}" name="Deactive" class="btn btn-primary px-3 mr-4">Deactive</button>
                            <div class="current-offer">
                            <span class="text-dark">currently active</span>
                        </div>`;
                          }else{
                            html +=`<button type="button"  name="Active" class="btn btn-primary px-3" data-toggle="modal" data-target="#myModal${i}">Active</button>
                            <div class="current-offer">
                            
                            <div class="modal fade" id="myModal${i}">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title text-dark">Enter resell amount</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                     <div class="nft-admin">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <form action="" method="POST">
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" name="Token_amount" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter amount  ">
                                                  </div>
                                                  
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="submit-here">
                                                    
                                                    <button type="submit" name= "submit" value="${result[i].Token_id}" class="btn btn-primary form-control">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            
                            <span class="text-dark">currently Deactive</span>
                        </div>`;}
                             html +=` </form>
                        
                     </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  </div>
                  `;
              }
        
            document.getElementById("images").innerHTML = html;
          })
          .catch(error => console.log('error', error));
          
            
            
        
        },1000)
        
    

    
</script>   


<section class="artist_page text-dark mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-dark mb-4"> Featured Artists </h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" artist-detail-here">
                    <div class="row">
             <div class="col-md-5"><div class="left-artist"><h5><strong class="text-dark">Artist Name :</strong> <span id="artistName" class="text-dark"></span></h5></div></div>
                        <div class="col-md-5"><div class="right-artist"><h5><strong class="text-dark">Tron Address :</strong> <a  class="text-dark"><span style="word-break: break-all;" class="text-dark" id="artistAddress"></span></a></h5></div></div>
 

                        <div class="col-md-2">
                            <div class="count-bid text-right">
                                <button type="button" class="btn btn-primary bell-icon-here1" style="" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-bell"></i>
                                    <span class="count-request-here"></span>
                                  </button>
                                
                                   <!-- The Modal -->
                                  <div class="modal" id="myModal">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
                                      <div class="modal-content">
                                      
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                          <!--<h1 class="modal-title">Modal Heading</h1>-->
                                          <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>
                                        
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="">
            <div class="row"  id="images">
                <div class="">
                <div class="Portfolio ">
                  <a href="#!" >
                  </a>
                </div>
            </div>
           </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
<script>
const links = document.querySelectorAll('.copy-click');
const cls = {
  copied: 'is-copied',
  hover: 'is-hovered'
}

const copyToClipboard = str => {
  const el = document.createElement('input');
  str.dataset.copyString ? el.value = str.dataset.copyString : el.value = str.text;
  el.setAttribute('readonly', '');
  el.style.position = 'absolute';
  el.style.opacity = 0;
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
}

const clickInteraction = (e) => {
  e.preventDefault();
  copyToClipboard(e.target);
  e.target.classList.add(cls.copied);
  setTimeout(() => e.target.classList.remove(cls.copied), 1000);
  setTimeout(() => e.target.classList.remove(cls.hover), 700);  
}

Array.from(links).forEach(link => {
  link.addEventListener('click', e => clickInteraction(e));
  link.addEventListener('keypress', e => {
    if (e.keyCode === 13) clickInteraction(e);
  });
  link.addEventListener('mouseover', e => e.target.classList.add(cls.hover));
  link.addEventListener('mouseleave', e => {
    if (!e.target.classList.contains(cls.copied)) {
     e.target.classList.remove(cls.hover); 
    }
  });
});




</script>

<?php
include "footer.php";
?>