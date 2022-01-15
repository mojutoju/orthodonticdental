<?php 
include('dbc/connect.php');
session_start();


if($_SESSION["login"] != null){
    $id = $_SESSION["login"];
}
else{
    echo " <script> window.location.href = 'login.php'; </script>";

}

?>








<?php
    
    if(isset($_GET['productid']) && isset($_GET['emailid']) && isset($_GET['quantity'])){
        $productid = $_GET['productid'];
        $emailid = $_GET['emailid'];
        $quantity = $_GET['quantity'];
        //check if the user passed an empty value
        if($productid == "" || $emailid == "" || $quantity == ""){
            //redirect to the logout page
            echo "<script>window.location.replace('opt.php');</script>";
        }
        else{
            $sql = mysqli_query($dbc, "SELECT * FROM cart WHERE productid='$productid' AND emailid='$emailid'");
            $numrows = mysqli_num_rows($sql);
            
            //select and get the quantity of the product from the products table, so product quantity can be reduced when user increases from cart
            $query = mysqli_query($dbc, "SELECT * FROM products WHERE productid='$productid'");
            $row = mysqli_fetch_array($query);
            $oldquantity = $row['quantity'];
            
            //check if product and user exists in the carts table
            if($numrows > 0){
                $row = mysqli_fetch_array($sql);
                $cartquantity = $row['quantity'];   //get the quantity of the product in the cart table
                $amount = $row['amount'];
                $subtotal = $quantity*$amount;
                
                //update values in the cart table
                $update_query=mysqli_query($dbc, "UPDATE cart SET quantity='$quantity', subtotal='$subtotal' WHERE productid='$productid' AND emailid='$emailid'");
                //update product quantity in the products table
                $newquantity = $oldquantity+$cartquantity-$quantity;  //this is the new qauntity that will be stored for the product in the products table
                $update = mysqli_query($dbc, "UPDATE products SET quantity='$newquantity' WHERE productid='$productid'");
                echo "<script>window.location.replace('cart.php');</script>";
            }
            else{
                //redirect to the logout page
                echo "<script>window.location.replace('opt.php');</script>";
            }
        }
    }
    else{
        //redirect to the sholah home page
        echo "<script>window.location.replace('login.php');</script>";
    }
?>