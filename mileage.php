<?php
$con= mysqli_connect("localhost", "root", "", "car_rcmndr")or die(mysqli_error($con));
$values=$_POST["values"];
$array=explode(",",$values);
$querry="select * from vehiclemodels  where price between $array[0] and $array[1] and mileage  between $array[2] and $array[3]";
$res= mysqli_query($con, $querry)or die(mysqli_error($con));

$count= mysqli_num_rows($res);

 $i=0;
 $str="
     <div class='container' >
     <div class='row' style='margin-top:-150px;'>
                        <h1 class=' col-md-2 ' id='form-h1'> 3.Daily_Utilization</h1>
                     </div>
    <div class='row' style='margin-top:20px;margin-left:-45px;margin-right:-45px'> <div class='col-md-12'>
                     
                      
                              <input type='text' id='slider3' class='slider' >

<script type='text/javascript'>
var mySlider3 = new rSlider({

    target: '#slider3',

    values: [0, 5,10,15,20,25,30,35,40,45,50],

    range: true // range slider

});
</script>    
            </div>
                          </div>  
        </div>
    <div class='col-md-offset-5'>
     <button class='btn btn-dark' style='margin-top:-80px;padding-left:38px;padding-right:40px;' id='id3'>Next</button>                 
        </div>        
".'<script>  $(document).ready(function(){
    var arr;
    document.getElementById("id3").onclick = function() {
                      var values=mySlider.getValue()+","; 
                      values += mySlider2.getValue()+","; 
                      values += mySlider3.getValue()+",";
       // values += $(this).val()+",";
        $.ajax({
          url:"daily_uti.php",
            method:"POST",
            data:{values:values},
            dataType:"text",
                success:function(data)
           {
            arr=data.split("~");
            if((arr[0])!==""){
              $("#ele4").html(arr[1]);
              $("#ele3").html(arr[0]);
}
else
{            $("#ele3").html("No result!!");
}
}
            });
                 };
                 });</script>';

include 'resultWin.php';
 echo $opt.'@'.$str;
?>

