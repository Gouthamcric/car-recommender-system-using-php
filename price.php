<?php
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
$array=explode(",",$values);
$querry="select * from vehiclemodels  where price between  $array[0] and $array[1]";
$res= mysqli_query($con, $querry)or die(mysqli_error($con));

$count= mysqli_num_rows($res);

 $i=0;

 $str ="
     <div class='container' >
     <div class='row' style='margin-top:-150px;'>
                       <h1 class=' col-md-2 ' id='form-h1'>  2.Mileage</h1>
                     </div>
    <div class='row' style='margin-top:20px;margin-left:-45px;margin-right:-45px'> <div class='col-md-12'>
                     
                      
                              <input type='text' id='slider2' class='slider' >

<script type='text/javascript'>
var mySlider2 = new rSlider({

    target: '#slider2',

    values: [0, 5,10,15,20,25,30,35,40,45,50],

    range: true // range slider

});
</script>    
            </div>
                          </div>  
        </div>
    <div class='col-md-offset-5'>
     <button class='btn btn-dark' style='margin-top:-80px;padding-left:40px;padding-right:40px;' id='id2'>Next</button>                 
        </div>        
".'<script>  $(document).ready(function(){
       
    var arr;
    document.getElementById("id2").onclick = function() {
                      var values=mySlider.getValue()+","; 
                      values += mySlider2.getValue()+","; 
       // values += $(this).val()+",";
        $.ajax({
          url:"mileage.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {arr=data.split("@");
           if((arr[0])!==""){
               
              $("#ele2").html(arr[1]);
              $("#ele3").html(arr[0]);
}
else
{             $("#ele3").html("No result!!!");}
}
            });
                 };
                 });</script>';
include 'resultWin.php';
 
 echo $opt.'*'.$str;

?>

