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
    



    .card {
  display: block; 
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
    transition: box-shadow .25s; 
}
.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}

tr, table, th{
    font-weight:bold;
    letter-spacing: 1.0px;
}


.action-sec{width:100%; float:left; background:#222;}
.action-box{float:left; width:100%; text-align:center;}
.action-box h2{color:#fff; font-size:20px;}

       height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}

.receipt-content .logo a:hover {
  text-decoration: none;
  color: #7793C4; 
}

.receipt-content .invoice-wrapper {
  background: #FFF;
  border: 1px solid #CDD3E2;
  box-shadow: 0px 0px 1px #CCC;
  padding: 40px 40px 60px;
  margin-top: 40px;
  border-radius: 4px; 
}

.receipt-content .invoice-wrapper .payment-details span {
  color: #A9B0BB;
  display: block; 
}
.receipt-content .invoice-wrapper .payment-details a {
  display: inline-block;
  margin-top: 5px; 
}

.receipt-content .invoice-wrapper .line-items .print a {
  display: inline-block;
  border: 1px solid #9CB5D6;
  padding: 13px 13px;
  border-radius: 5px;
  color: #708DC0;
  font-size: 13px;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}

.receipt-content .invoice-wrapper .line-items .print a:hover {
  text-decoration: none;
  border-color: #333;
  color: #333; 
}


@media (min-width: 1200px) {
  .receipt-content .container {width: 900px; } 
}

.receipt-content .logo {
  text-align: center;
  margin-top: 50px; 
}

.receipt-content .logo a {
  font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
  font-size: 36px;
  letter-spacing: .1px;
  color: #555;
  font-weight: 300;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear; 
}

.receipt-content .invoice-wrapper .intro {
  line-height: 25px;
  color: #444; 
}

.receipt-content .invoice-wrapper .payment-info {
  margin-top: 25px;
  padding-top: 15px; 
}

.receipt-content .invoice-wrapper .payment-info span {
  color: #A9B0BB; 
}

.receipt-content .invoice-wrapper .payment-info strong {
  display: block;
  color: #444;
  margin-top: 3px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-info .text-right {
  text-align: left;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .payment-details {
  border-top: 2px solid #EBECEE;
  margin-top: 30px;
  padding-top: 20px;
  line-height: 22px; 
}


@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .payment-details .text-right {
  text-align: left;
  margin-top: 20px; } 
}
.receipt-content .invoice-wrapper .line-items {
  margin-top: 40px; 
}
.receipt-content .invoice-wrapper .line-items .headers {
  color: #A9B0BB;
  font-size: 13px;
  letter-spacing: .3px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 4px; 
}
.receipt-content .invoice-wrapper .line-items .items {
  margin-top: 8px;
  border-bottom: 2px solid #EBECEE;
  padding-bottom: 8px; 
}
.receipt-content .invoice-wrapper .line-items .items .item {
  padding: 10px 0;
  color: #696969;
  font-size: 15px; 
}
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item {
  font-size: 13px; } 
}
.receipt-content .invoice-wrapper .line-items .items .item .amount {
  letter-spacing: 0.1px;
  color: #84868A;
  font-size: 16px;
 }
@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .items .item .amount {
  font-size: 13px; } 
}

.receipt-content .invoice-wrapper .line-items .total {
  margin-top: 30px; 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes {
  float: left;
  width: 40%;
  text-align: left;
  font-size: 13px;
  color: #7A7A7A;
  line-height: 20px; 
}

@media (max-width: 767px) {
  .receipt-content .invoice-wrapper .line-items .total .extra-notes {
  width: 100%;
  margin-bottom: 30px;
  float: none; } 
}

.receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
  display: block;
  margin-bottom: 5px;
  color: #454545; 
}

.receipt-content .invoice-wrapper .line-items .total .field {
  margin-bottom: 7px;
  font-size: 14px;
  color: #555; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total {
  margin-top: 10px;
  font-size: 16px;
  font-weight: 500; 
}

.receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
  color: #20A720;
  font-size: 16px; 
}

.receipt-content .invoice-wrapper .line-items .total .field span {
  display: inline-block;
  margin-left: 20px;
  min-width: 85px;
  color: #84868A;
  font-size: 15px; 
}

.receipt-content .invoice-wrapper .line-items .print {
  margin-top: 50px;
  text-align: center; 
}



.receipt-content .invoice-wrapper .line-items .print a i {
  margin-right: 3px;
  font-size: 14px; 
}

.receipt-content .footer {
  margin-top: 40px;
  margin-bottom: 110px;
  text-align: center;
  font-size: 12px;
  color: #969CAD; 
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
             
                  <h3 class="font-weight-bold">Check Out  </h3>
           <hr>

                </div>




                <?php
    $prev_url=$_SERVER['HTTP_REFERER'];     //this gets the url of the previous page where this page redirects from

    $cart_url = "https://orthodonticdental.ng/customers/cart.php";
    $cart_url_www = "https://www.orthodonticdental.ng/customers/cart.php";

if($prev_url != $cart_url && $prev_url != $cart_url_www){
 echo "<script>alert('This is a bad attempt!');</script>
    <script>window.location.replace('https://orthodonticdental.ng/customers/opt.php?action=logout');</script>";
}
else{
    if(!isset($_GET['emailid']) || !isset($_GET['cartid'])){
       echo "<script>window.location.replace('https://orthodonticdental.ng/customers/opt.php?action=logout');</script>";
    }
    else{
        $ipaddress = $_SERVER['REMOTE_ADDR'];   //this is the ip address of the customer's device
        $cartid = $_GET['cartid'];
             if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
               $device = "Mobile";
            }
            else{
                $device = "Tablet/PC";
            }
    
        $item = explode(',', $cartid);
?>







                        
<div class="receipt-content">
    <div class="container bootstrap snippet">
		<div class="row">
			<div class="col-md-12">
				<div class="invoice-wrapper">
					<div class="intro">
					<img src="../img/logo.png" class="img-fluid" width="80">
					<h2 style="font-weight:bold;"> Orthodontic Dental Invoice </h2>
					<hr>
					</div>
                    <?php
                        $sql = mysqli_query($dbc, "SELECT * FROM customers WHERE email='$email'");
                        $get = mysqli_fetch_array($sql);
                        $fname = $get['fname'];
                        $lname = $get['lname'];
                        $contact = $get['phoneno'];
                        $subcontact = strrev(substr($contact,6));
                        $address = $get['address'];
                        $state = $get['state'];
                        $email = $get['email'];
                        $invoiceref = $subcontact.date("dmYHis");
                    ?>
					<div class="payment-info">
						<div class="row">
							<div class="col-sm-6">
								<span>Invoice No :</span>
								<strong>#<?php echo $invoiceref; ?></strong>
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment Date</span>
								<strong><?php echo date("M d, Y h:i:sa"); ?></strong>
							</div>
						</div>
					</div>

					<div class="payment-details">
						<div class="row">
							<div class="col-sm-6">
								<span>Client</span>
								<strong>
								<?php echo $fname;  ?> <?php echo $lname; ?>
								</strong>
								<p>
								    Delivery Address: <br>
									<?php echo $address."<br>".$state."<br>"; ?> 
							
									<a href="mailto:<?php echo $email; ?>">
									<?php echo $email; ?>
									</a>
									<br>
							<?php echo "Tel: ".$contact; ?>
							
								
								</p>
							</div>
							<div class="col-sm-6 text-right">
								<span>Payment To</span>
								<strong>
						Orthodontic Dental 
								</strong>
								<p>
									No 14b Science Road <br>
									Magodo Phase 1, Lagos <br>
									 
									Nigeria <br>
						
									<a href="mailto:info@orthodonticdental.ng">
									info@orthodonticdental.ng
									</a> <br>
											Tel: +234 810 102 9254
								</p>
							</div>
						</div>
					</div>

				  <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th> Products </th>
                        <th> Tracking ID </th>
                        
                        <th class="text-center" width="10%">Brands</th>
                        <th class="text-center" width="10%">Quantity</th>
                           <th class="text-center" width="10%">Price</th>
                        <th class="text-right" width="20%">Subtotal</th>
                     </tr>
                  </thead>
                  <tbody>
                <?php  
                    foreach($item as $cartid){
                    //echo $cid.'<br>';
                    //each product has been separated as individual 'cid' from cartid
                    $query = mysqli_query($dbc, "SELECT * FROM cart WHERE emailid ='$email' AND cartid='$cartid'");
                    $row = mysqli_fetch_array($query);
                    $productid = $row['productid'];
                    $productname = $row['productname'];
                    $brandname = $row['brandname'];
                    $amount = $row['amount'];
                    $quantity = $row['quantity'];
                    $subtotal = $row['subtotal'];
                    $datecompleted = $row['date'];
                    $sellerid = $row['sellerid'];
                    $sellername = $row['sellername'];
                    $producttype = $row['producttype'];
                    $delivery = $row['delivery'];
                    $cartids = $row['çartid'];
                  $emailid = $row['emailid'];
                    $confirmation = "Pending";
                    $status = "Paid";
                    $phoneno = $row['phoneno'];
                    $category = $row['category'];
                    $subcategory = $row['subcategory'];
                    $description = $row['description'];
                    $file = $row['file'];
                    
                    
                    //Get the phone number of the customer, in order to get the trackingid for each product
                    $contact_query = mysqli_query($dbc, "SELECT * FROM customers WHERE email='$email'");
                    $get = mysqli_fetch_array($contact_query);
                    $contact = $get['phoneno'];
                    $address = $get['address'];
                    $total += $subtotal;
                    $vat = 1.4/100*$total;
                    $processingfee = $vat + 2;
                    $subcontact = substr($contact,6);
                    $trackingid = $subcontact.$productid.$cartid;
                    $maxtotal = $total + $processingfee;
                    
                       $insert = mysqli_query($dbc, "INSERT INTO `orders` VALUES(NULL, '$sellerid', '$cartid', '$emailid', '$invoiceref', '$sellername', '$fname', '$lname', '$brandname', '$phoneno', '$address', '$state', '$trackingid', '$productid', '$productname', '$file', '$category', '$subcategory', '$description', '$amount', '$quantity', '$maxtotal', '$producttype', '$delivery', '$confirmation', '$status', '$device', '$ipaddress', now())");
              
           
                    
                    if($insert){
                    
                        
               
                        
                    }else{
                     
                      
                    }
                    
                                        
               ?>
           <td>
                           <span class="text-inverse"><?php echo $productname; ?></span><br>
                         
                        </td>              
                          <td>
                           <span class="text-inverse"><?php echo $trackingid; ?></span><br>
                         
                        </td>
                        
                        
                        <td class="text-center"><?php echo $brandname; ?> </td>
                        <td class="text-center"><?php echo $quantity; ?></td>
                        <td class="text-right">&#x20A6;<?php echo number_format($amount); ?></td>
                        <td class="text-right">&#x20A6;<?php echo number_format($subtotal); ?></td>
                        
                     </tr>
                <?php  }
    }}
                 ?>
                <?php $j++; }} ?>
                   
                   
                   
                  </tbody>
               </table></div>
               
               <div class="total text-right">
						
							<div class="field" style="font-weight:bold;">
								Total: &#x20A6;<?php echo number_format($total); ?> <span>   </span>
							</div>
						
							<div class="field" style="font-weight:bold;">
								VAT (1.4%):  <span>&#x20A6;<?php echo number_format($vat); ?>    </span>
							</div>
							
								<div class="field" style="font-weight:bold;">
								Processing Fee:  <span>&#x20A6;2   </span>
							</div>
							
							
							<hr>
							<div class="field grand-total  text-success" style="font-size:25px; font-weight:bold;">
								Total: <span>&#x20A6;<?php echo number_format($maxtotal); ?> </span>
							</div>
							<hr>
						</div>

						<div class="print">
							<a  onclick="myFunction()" class="btn btn-primary">
								<i class="fa fa-print"></i>
								Save/Print this receipt
							</a>
								<a class="btn btn-warning" href="proceed.php?emailid=<?php echo $_GET['emailid']; ?>"> Proceed </a>
					
						</div>
						
					
				</div>
               
            </div>

            <!-- end table-responsive -->
					
					
					
				</div>

				<div class="footer">
					Copyright © 2021. Orthodontic Dental 
				</div>
			</div>
		</div>
	</div>
</div>                    
      






                

 </div>
                </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->





<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
<script>
    
      
  
function myFunction() {
  window.print();
}

  
         
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>



  </body>
  </html>











