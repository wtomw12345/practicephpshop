<!DOCTYPE html>
<html>
    <head>
     <style>
         .form-group{
             width: 400px;
         }
        
        
        
        </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <?php include ('functions.php') ;?>
        <?php include ('header.php');?>
<div class="container">
<br>
 <form action="register" method="post">
 <div class="row"><div class="col-md-6">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="firstname"  placeholder="First Name" required>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control"  name="lastname" placeholder="Last Name" required
    >
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" placeholder="Email" name="email" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" required>
  </div>
     </div>

   <div class="col-md-6">
    <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Address" required>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Town</label>
    <input type="text" class="form-control" name="town" placeholder="Town" required>
  </div>
    <div class="form-group">
    <label for="postcode">Postcode</label>
    <input type="text" class="form-control" name="postcode" placeholder="Postcode" required>
  </div>
    <div class="form-group">
    <label for="number">Phone Number</label>
    <input type="text" class="form-control" name="number"  placeholder="Phone Number" required
    >
  </div>
   <input type="submit" name="submit" value="Submit" class="btn btn-info">
  </div></div>
</form>
    
    

        </div>  
    
    
    
  <br><br>
    <br><br><br><br><br><br>
    <?php include ('footer.php'); ?>
    
    <?php 
        
        global $con; 
        if(isset($_POST['submit'])){
           
            $ip =getIp();
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
             $email = $_POST['email'];
             $password = md5 ($_POST['password']);
             $address = $_POST['address'];
             $town = $_POST['town'];
             $postcode = $_POST['postcode'];
             $number = $_POST['number'];
            
            $insert_details = "insert into customers(first_name,last_name,email,password,address,town,postcode,contact_number)values('$firstname','$lastname','$email','$password','$address','$town','$postcode','$number')";
            
            $run_details = mysqli_query($con, $insert_details);
            
            $sel_cart ="select * from cart where ip_add='$ip'";
            
            $run_cart = mysqli_query($con, $sel_cart);
            
            $check_cart = mysqli_num_rows($run_cart);
            
            if($check_cart==0){
             $_SESSION['email'] = $email;
                
            echo "account has been created";    
            }else{
                
                	
		
		$_SESSION['email']=$c_email; 
		
		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		
		echo "<script>window.open('orders','_self')</script>";
		
		
		}
            }
        
        
        
            
        
        
        
        ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
    
</html>