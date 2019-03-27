<?php 

include ('db.php');



function getCats(){
    
    global $con;
    
    $get_cats = "SELECT * FROM categories";
    
    $run_cats = mysqli_query($con, $get_cats);
    
    while($row_cats=mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['cat_id'];
         $cat_title = $row_cats['cat_title'];
        
        echo "<div class='text-center'><a href='orders?cat=$cat_id'><li class='list-group-item'>$cat_title</li></a></div>";
    }
    
}



function getCatPros(){
    
    if(isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
        
        global $con;
        
        $get_cat_pro = "SELECT * FROM products WHERE product_cat  = '$cat_id'";
        
        $run_cat_pro = mysqli_query($con, $get_cat_pro);
        
        
        $count_pro = mysqli_num_rows($run_cat_pro);
        
        if($count_pro==0){

    echo "<div class='alert alert-danger'>No products were found in this category </div>";
        }
        
        while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
             $pro_cat_id = $row_cat_pro['product_id'];
         $pro_cat_title = $row_cat_pro['products_title'];
         $pro_cat_price = $row_cat_pro['product_price'];
          
            echo "<a href='orders?add_cart=$pro_cat_id'><li class='list-group-item'>$pro_cat_title ------   £   $pro_cat_price</li></a>";
            
        }
        
        
    }
    
    
    
    
    
}


function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}







function cart(){
    
if(isset($_GET['add_cart'])){
global $con;
    $ip = getIp();
    $pro_id = $_GET['add_cart'];
    $check_pro = "SELECT * FROM cart WHERE ip_add = '$ip' AND p_id='$pro_id'";
    $run_check = mysqli_query($con, $check_pro);
    if(mysqli_num_rows($run_check)>0){
      echo "";
    }else{
        $insert_pro = "INSERT INTO cart (p_id, ip_add) VALUES ('$pro_id','$ip')";
        $run_pro = mysqli_query($con, $insert_pro);
        echo "<script>window.open(orders, _self)</script>";
        
        
    }
    
}    
    
}


  function total_items(){
        if(isset($_GET['add_cart'])){
            global $con;
            $ip= getIp();
            $get_ip = "SELECT * FROM cart WHERE ip_add = '$ip'";
            
            $run_items = mysqli_query($con, $get_ip);
            $count_items = mysqli_num_rows($run_items);
            
            echo "Total Items:" .  $count_items;
        
        }}



//display price 
function total_price(){
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
            $values = array_sum($product_price);
            $total +=$values;
            
        }
        
        
    }
   echo "£" . $total;
      
      
      
}
    


?>









