<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   
   <link rel="stylesheet" href="decor/style.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   <title>Pizza Place</title>
   <?php include ('functions.php'); ?>
    </head>
    <body>
      
        
        <?php include ('header.php');?>
<div class="container-fluid" id="header">
    
      <h1  id="title" class="text-center">Pizza Place</h1>  
       <div class="text-center">
           <a class="btn btn-danger btn-lg" href="orders">Order Now</a>
           
          
       </div>
        
    </div>
    <div class="row">
        <div class="col-md-4">
           <h4 class="text-center">Contact</h4>
           <strong>Address:</strong> <br><br><br>
          
             <strong> </strong> <br><br><br> 
           <div class="text-center"><a class="btn btn-success" href="contact" >Contact Page</a><br></div>
        </div>
        <div class="col-md-4">
          <div class="text-center"><h4>Reviews</h4>
        
       
                <?php   ?>
               <a class="btn btn-danger" href="reviews">Reviews</a> </div> 
               
           
        </div>
        <div class="col-md-4">
           <div class="text-center"><h4>Order</h4> 
           <?php  getCats() ?> <a href="orders" class="btn btn-info">Order Now</a></div>
        </div>
        
        
    </div>
    
    

    
    <?php include ('footer.php'); ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
    
</html>