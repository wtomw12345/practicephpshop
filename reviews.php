<!DOCTYPE html>
<html>
   <?php include ("functions.php"); ?>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    
        
        <?php include ('header.php');?>

   <div class="container">
   <br>
   <div class="row">
       <div class="col-md-3">
           <?php  getReviews() ?>
       </div>
       <div class="col-md-7 offset-2">
           <h4>We welcome all feedback. please try and provide constructive criticism!</h4>
           <br><br><br>
           
           
            <form method="post" action="reviews">
 <div class="row"><div class="col-md-6">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name"  placeholder="Name" required>
   
  </div>
  <div class="form-group">
    <label for="review">Review:</label>
    <textarea class="form-control" rows="3" name="review"></textarea>
  </div>
      <input type="submit" class="btn btn-info" value="Submit Review" name="submit">
       </div>
   
   
   
   </div>
     </form> 
       </div></div></div>
       <br><br><br><br><br><br><br><br><br>
    <?php include ('footer.php'); ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
   
    </body>
   <?php 
    if(isset($_POST['submit'])){
    
    
        $rev_name = $_POST['name'];
        $rev_review = $_POST['review'];
        
        
        $insert_review = "insert into reviews(review_name, review_body) values ('$rev_name','$rev_review')";
        
        $insert_review_into = mysqli_query($con, $insert_review);
        
        if(isset($insert_review_into)){
            echo "<div class='container alert alert-success'>Review  Submitted. Thanks. </div>";
        }else{
            echo "<div class='container alert alert-danger'>Product Not Submitted </div>";
        }
    }
    ?>     
     
</html>