<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Orthodontic Dental Care Store</title>
    <link rel="icon" href="img/logo.png" type="image/png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Helvetica:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
      <!--Main Navigation-->
  <header>
    <style>

body{
    font-family: 'Helvetica';
}

      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #000 !important;
      }


            
      .items{
        display: flex;
        overflow-x: auto;
    }
    
    .items::-webkit-scrollbar{
        display: none;
    } 
    
    .items .options{
        min-width: 200px;
       
       
        margin: 10px;
        border-radius: 10px;
           
        position: relative;
    
    }
    

 




.card-img-overlay {
    /* position: absolute; */
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    border-radius: calc(.25rem - 1px);
}
   
      
    </style>

<?php include('navbar.php'); ?>


<br><br><br><br>
<br><br><br><br>
<br>
<br><br>


<div class=" container ">


<div class="row">



<?php
   
   if(isset($_GET['blog_id'])){
       
       
       $id = $_GET['blog_id'];
       
     $select = mysqli_query($dbc,"SELECT * FROM `blogs` WHERE `blog_id` = '$id' ");
if(mysqli_num_rows($select) > 0){
$u = 1;
while($rows = mysqli_fetch_assoc($select)){
$title = $rows['title'];
$authorname = $rows['authorname'];
$id = $rows['blog_id'];
$file = $rows['file'];
$editor1 = $rows['editor1'];
$date = $rows['date'];

       
       
   
   
   ?>



<div class="col-md-7 mb-3">


<p>

<a style="color:black;" href="index.php"> Home </a> /  <a style="color:black;" href="blog.php"> Blogs </a>    /  <a href="viewblog.php?blog_id=<?php echo $id; ?>"> <?php echo $title; ?> </a>

</p>

<hr>




<h3 style="font-weight:800;  "> <?php echo $title; ?>  </h3>

<p style="font-style:italic;"> Posted on <?php echo date('d-M-Y', strtotime($date)); ?> |  Author : <?php echo $authorname; ?>  </p>

<hr>


<img src="odadmin/blogs/<?php echo $file; ?>" class="img-fluid">



<br><br>




<p> <?php echo htmlspecialchars_decode ($editor1); ?> </p>




</div>


<div class="col"></div>



<div class="col-md-4 mb-3">

<h3 style="font-weight:800;"> Other Blog Posts </h3>
<hr>


<?php
$selecct = mysqli_query($dbc,"SELECT * FROM `blogs` WHERE 1 ");
if(mysqli_num_rows($selecct) > 0){
$uk = 1;
while($rows = mysqli_fetch_assoc($selecct)){
$title = $rows['title'];
$authorname = $rows['authorname'];
$bid = $rows['blog_id'];
$file = $rows['file'];
$editor1 = $rows['editor1'];
$date = $rows['date'];

       
?>

<p>

<a style="color:black;" href="viewblog.php?blog_id=<?php echo $bid; ?>">

<?php echo $title; ?> </a>

</p>

<hr>


<?php  $uk++; }} ?>


</div>





</div>







</div>






  
<?php $u++; }}} ?>



</div>








<br>

<?php include('footer.php'); ?>
    </body>
    </html>
