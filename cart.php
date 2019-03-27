<!DOCTYPE html>
<html>
    <head>
     <style>
         #title-menu{
             font-size:40px;
         }  
         
         
         
         
         
         
         
     </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    
        </script>
        <link rel="stylesheet" href="decor/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
   <?php include ('functions.php'); ?>
        
        <?php include ('header.php');?>
       
        
<div class="container">
 
    
    
   <div class="text-center">
  <table class="">
    <thead class="">
        <tr>
            <th scope="col">Remove</th>
            
            <th scope="col">Product</th>
            
            <th scope="col">Quantity</th>
            
            <th scope="col">Total Price</th>
            
            
            
        </tr>
   
        </thead>
        <tbody>
            
    
    
              
             
          
             
           
         
       <?php 
       $total = 0;
    global $con;
    $ip = getIp();
    $sel_price = "SELECT * FROM cart WHERE ip_add = '$ip'";
    $run_price = mysqli_query($con, $sel_price);
    while($p_price= mysqli_fetch_array($run_price)){
        $pro_id= $p_price['p_id'];
        $pro_price = "SELECT * FROM products WHERE product_id = '$pro_id'";
        
        $run_pro_price = mysqli_query($con, $pro_price);
        while ($pp_price = mysqli_fetch_array($run_pro_price)){
            
            $product_price = array($pp_price['product_price']);
            
            $product_title = $pp_price['products_title'];
            
            $single_price = $pp_price['product_price'];
            
            $values = array_sum($product_price);
            
            $total +=$values;

    ?>
      
      <tr >
          <td><input type="checkbox" name="remove[]"/></td> 
          <td><?php echo $product_title; ?></td>  
           <td><input type="text"size="6" name="qty"></td>  
            <td><?php echo "£" . $single_price;?></td>   
     
      </tr>
       <?php } }; ?>  
           <tr> 
           <td>Sub Total:</td>
        <td><?php echo $total ;?></td>
        
        </tr>
   
      </tbody></table>
    </div>
    
        </div> 
            <div class="row"><div class="col-md-3 offset-3"><a href="index" class="btn btn-success" > Home </a> </div> </div>
    <br><br><br>
    <?php include ('footer.php'); ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
    
</html>