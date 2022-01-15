<?php include('dbc/connect.php'); 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> Orthodontic Dental Care</title>
    <link rel="icon" href="../img/logo.png" type="image/png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../css/style.css" />
  
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->


</head>


<body>

  <header>
    <style>

body{
    font-family: 'Helvetica';
  
}

  
  .navbar-nav .nav-link {
    margin-right: 14px;
    margin-left: 14px;
}


.navbar-nav .nav-item  .nav-link :hover{
    
border-bottom:3px solid white;
}

.navbar{
    -webkit-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
-moz-box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
box-shadow: -4px 11px 22px -3px rgba(0,0,0,0.28);
}




.navbar li a:hover {

border-bottom : 2px solid dodgerblue;
}
      
      
      .masthead {
  height: 50vh;
  min-height: 500px;
  background-image: url('/img/bgblue.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

      .vertical{
	height: 100%;
	position: absolute;
	border-left: 2px solid white;
      }
      
      
      .main{
   max-width: 500px;
    border-radius: 6px;
   
    margin: 50px auto;
  
      }
      
      .main-container{
              position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
   
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    overflow: auto;
    min-height: 100vh;
    box-sizing: border-box;
      }
      
      a:hover{
          color:blue;
      }




      /*!
 * Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

/* Toggle Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}

.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter.warning{
    background-color: orange;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }


            
.items{
        display: flex;
        overflow-x: auto;
    }
    
    .items::-webkit-scrollbar{
        display: none;
    } 
    
    .items .options{
        min-width: 300px;
       
       
        margin: 10px;
        border-radius: 10px;
           
        position: relative;
    
    }
    
      
    </style>

<script src="js/sweetalert.min.js"> </script>

</header>



  
<?php

if($_SESSION["login"] != null){
    $uname = $_SESSION["login"];

}
else{
 echo " <script> window.location.href = 'login.php'; </script>";
}
   ?>
   


   
<?php
$select = mysqli_query($dbc,"SELECT * FROM `customers` WHERE email = '".$_SESSION['login']."'");
if(mysqli_num_rows($select) > 0){
    $j = 1;
 while($rows = mysqli_fetch_assoc($select)){
$fname = $rows['fname'];
$lname = $rows['lname'];
$email = $rows['email'];
$state = $rows['state'];
$phoneno = $rows['phoneno'];


?>
    

<?php include('navbar.php'); ?>





<div class="main-panel">
        <div class="content-wrapper">
      

        <div class="container">
              <div class="row">
             
                  <h3 class="font-weight-bold">View Cart  </h3>
           <hr>

                </div>




                <div class="table-wrapper-scroll-y my-custom-scrollbar">
	<table id="cart" class="table table-hover table-condensed  table-responsive">
        
    				<thead>
						<tr>
							<th style="width:50%">Products</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
    					
<?php
$select = mysqli_query($dbc,"SELECT * FROM `cart` WHERE emailid = '".$_SESSION['login']."'");
if(mysqli_num_rows($select) > 0){
    $g = 1;
 while($row = mysqli_fetch_assoc($select)){

    $productname = $row['productname'];
    $productid= $row['productid'];
    $amount = $row['amount'];
    $brandname = $row['brandname'];
    $quantity = $row['quantity'];
    $category = $row['category'];
    $subtotal = $quantity * $amount;
    $subcategory = $row['subcategory'];
    $delivery = $row['delivery'];
    $emailid = $_SESSION['login'];
    
    //this code is to help us get each product quantity from the products table
    $query = mysqli_query($dbc, "SELECT * FROM products WHERE productid='$productid' AND brandname='$brandname'");
    $fetch = mysqli_fetch_assoc($query);
    $totalquantity = $fetch['quantity'];
    $maxquantity = $quantity+$totalquantity;
?>
    
  <tbody>
						<tr>
							<td data-th="Products">
								<div class="row">
							
                                    
									<div class="col-sm-10">
										<h6 class="nomargin" style="font-weight:800;">  <?php echo $productname; ?>  </h6>
										<p><i class="fa fa-industry"></i> <?php echo $brandname;  ?>
									
										</p>
										
										<p>
										<?php 
										    if($delivery=="Yes"){
										        echo "<br><b style='color: red'>*To be paid on delivery<b>";
										    }
										    else{
										        //do nothing
										    }
										?>
										</p>
										
									</div>
								</div>
							</td>
							<td data-th="Price"> &#8358;<?php echo number_format ($amount); ?>     </td>
							<td data-th="Quantity" style="width:20%;">
								<input type="number" min="<?php echo $quantity; ?>" max="<?php echo $maxquantity; ?>" id="quantity<?php echo $productid; ?>"   class="form-control" name="newqty" value="<?php echo $quantity; ?>">
							</td>
							<td data-th="Subtotal" class="text-center"> &#8358;<?php echo number_format($subtotal);  ?> </td>
							<td class="actions" data-th="">
							    
							    
							<a class="btn btn-primary btn-sm" href="javascript:;" onclick="this.href='updateqty.php?productid=<?php echo $productid.'&emailid='.$emailid.'&quantity='; ?>' + document.getElementById('quantity<?php echo $productid; ?>').value"><i class="fa fa-refresh"></i></a>
							
								
							</td>
							
								<td class="actions" data-th="">
							
								<a class="btn btn-danger btn-sm" href="removecart.php?productid=<?php echo $productid; ?>"><i class="fa fa-trash"></i></a>
								
							</td>

						</tr>
					</tbody>
    <?php $g++; } ?>
    
    	<tfoot>
					<?php
					    $result = mysqli_query($dbc, "SELECT SUM(subtotal) AS value_sum FROM cart WHERE emailid='$emailid' AND delivery='No' ");
                        $row = mysqli_fetch_assoc($result);
                        $sum = $row['value_sum'];
                        $processingfee = 2;   //this is sholah commission for every payment when customers checkout
                        $total = $sum+$processingfee;
                        $ravefee = (1.4/100 *$total);    //this is rave commission on every payment when customers checkout
                        
                        //this query is to get all the cartid of the products that the customer is paying for
                        $get = mysqli_query($dbc, "SELECT * FROM cart WHERE emailid='$emailid'");
                        while($row = mysqli_fetch_array($get))
                        {
                            $cid[] = $row['cartid'];
                        }
                        $cart = implode(",", $cid);
                        
 
					?>
					
				<tr class="visible-xs">
				
							<td class="text-center"><strong>Processing Fee (VAT): &#8358;<?php echo number_format($processingfee+$ravefee); ?></strong></td>
						
						</tr>
						<tr>
							<td><a href="dashboard.php" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center"><strong><b>TOTAL: &#8358;<?php echo number_format($total+$ravefee); ?><b/></strong></td>
						<?php }else { echo " <h2> No Products added to cart  </h2>  "; }  ?>
							<td>
							    <!-- Rave Pay begins here -->
							    <?php
							        $txref = $emailid."-".$cart; //this is a unique reference for each payment
							    ?>
                                <form>
                                    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
                                    <button type="button" class="btn btn-success" onClick="payWithRave()">Checkout</button>
                                </form>
                                
                                <script>
                                    const API_publicKey = "FLWPUBK-a9144770d179a8b38cc39d9fd2c5a525-X";
                                
                                    function payWithRave() {
                                        var x = getpaidSetup({
                                            PBFPubKey: API_publicKey,
                                            customer_email: "<?php echo $emailid; ?>",
                                            customer_firstname: "<?php echo $fname; ?>",
                                            customer_lastname: "<?php echo $lname; ?>",
                                            amount: <?php echo $total; ?>,
                                            currency: "NGN",
                                            txref: "<?php echo $txref; ?>",
                                            onclose: function() {},
                                            callback: function(response) {
                                                var txref = response.tx.txRef; // collect txRef returned and pass to a server page to complete status check.
                                                console.log("This is the response returned after a charge", response);
                                                if (
                                                    response.tx.chargeResponseCode == "00" ||
                                                    response.tx.chargeResponseCode == "0"
                                                ) {
                                                    window.location.href = "checkout.php?emailid=<?php echo $emailid."&cartid=".$cart; ?>";     // redirect to a success page
                                                } else {
                                                    // redirect to a failure page.
                                                }
                                
                                                x.close(); // use this to close the modal immediately after payment.
                                            }
                                        });
                                    }
                                </script>
                                <!-- Rave Pay ends here -->
							</td>
						</tr>
					</tfoot>
    
  </table>
</div>
    
    


                

 </div>
                </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


<?php $j++; }} ?>


<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
<script>
    
    
         
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>



  </body>
  </html>











