  

   <head>
    
    <style>
        .container-fluid{
            height:70px;
            background-color:purple;
            color:white;
            letter-spacing:2.5px;
            font-size:14px;
            
        }
    
    </style>
</head>
    <div class="container-fluid"> 




<div class="row">
    
  <div class="col-md-6">  
<?php cart() ;?>
 <?php    total_items(); ?>
  Total Price: <?php total_price(); ?></div>
   
   <div class="col-md-3 offset-2">
   <br>
    <a href="cart" class="btn btn-info">Go to Cart</a> </div>
    </div>
     
      </div>  

    <br>
    
   