<?php $opt="";
///test ver1.0
///
while($i<$count){
    $out= mysqli_fetch_array($res)or die(mysqli_errno($con));
    $id=$out['vehicleBrandID'];
    $querry2="select * from vehiclebrand where id=$id";
    $res2= mysqli_query($con, $querry2)or die(mysqli_error($con));
     $out2= mysqli_fetch_array($res2)or die(mysqli_errno($con));
$opt .= '<div class=" col-sm-6 swiper-slide" >
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
<img class="pic-1" src="'.$out["imgLink1"] .'">                 
<img class="pic-2" src="'.$out["imglink2"] .'" >                 
</a>
                    <span class="product-trend-label">Trend</span>
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li class="myli"><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li class="myli"><a href="#" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li class="myli"><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li class="myli"><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Model Name:- '.$out2["brand"].' '.$out["modelName"].'</a></h3>
                    <div class="price">Price:-₹'.$out["price"].'</div>
                    <div class="price">Mileage:-'.$out["mileage"].'</div>
                    <div class="price" style="font-size:10px;">Features:-'.$out["features"].'</div>    
                </div>
            </div>
        </div>
        ';
 $i++;}

 ?>