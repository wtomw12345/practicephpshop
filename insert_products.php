<!DOCTYPE html>
<html>
<?php include ('functions.php');?>
    <head>
      
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
       <title>Insert Product</title> 
       <style>
           body{
               font-family: Roboto;
           }
           .form-group{
               width:500px;
           }
           
           .container{
               background-color:beige;
           }
        
        
        
        </style>
    </head>
    <body>
    <br>
<div class="container">
    <form action="insert_products"method="post">
       <h2>Insert a new product</h2>
       
       <br>
   <div class="form-group">
    <label for="title">Product Title:</label>
    <input  required type="text" class="form-control" name="title"  placeholder="Product Title">
  
  </div>
  <div class="form-group">
    <label for="category">Product Category:</label>
    <select required  name="category" class="form-control">
       <option>Select a category</option> 
       <?php
   global $con;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($con, $get_cats);
    
    while ($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        
        $cat_title = $row_cats['cat_title'];
        
        echo"<option value='$cat_id'>$cat_title</option>";
    }  ?>
    </select>
  </div>
  
  <div class="form-group">
    <label for="price">Product Price:</label>
    <input required type="text" class="form-control" name="price" placeholder="Price">
  </div>
  
   
  
  <input type="submit" class="btn btn-primary" name="insert" value="Submit">
        
        
    </form>
    
    </div>
    <?php 
    if(isset($_POST['insert'])){
    
        $pro_title = $_POST['title'];
        $pro_cat = $_POST['category'];
        $pro_name = $_POST['price'];
        
        
        $insert_product = "insert into products (product_cat, products_title, product_price) values ('$pro_cat','$pro_title','$pro_name')";
        
        $insert_pro = mysqli_query($con, $insert_product);
        
        if(isset($insert_pro)){
            echo "<div class='container alert alert-success'>Product Submitted </div>";
        }else{
            echo "<div class='container alert alert-danger'>Product Not Submitted </div>";
        }
    }
    ?>    
        
        
    </body>

    
    
    
</html>